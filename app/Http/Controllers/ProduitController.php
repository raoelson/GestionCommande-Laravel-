<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {

        $produits = DB::table('produits')->paginate(5);
        return view('produit.produit')->with(array('data'=>$produits,'titre'=>'produit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request,$id) {
        DB::table('produits')->where('id','=',$id)->delete();
        $request->session()->flash('succes','Le produit a été bien supprimé');
        return redirect()->route('produit.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function edit($id)
    {

        $item = DB::table('produits')->find($id);

        return view('produit.edit')->with(array('data'=>$item,'titre'=>'produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */

    public function update(Request $request)
    {
        $posts = $request->all();
        $data = array(
            'designproduit' =>$posts['designation'],
            'puproduit' =>$posts['prix']
        );
        $rep = DB::table('produits')->where('id',$posts['id'])->update($data);
        $request->session()->flash('succes','Le produit a été bien modifié');
        return redirect('produit');
    }

    public function form(){
        return view('produit.new')->with('titre','produit');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $posts = $request->all();
        $data = array(
            'designproduit' =>$posts['designation'],
            'puproduit' =>$posts['prix']
        );
        $rep = DB::table('produits')->insert($data);
        $request->session()->flash('succes','Le produit a été bien enregistré');
        return redirect('produit');
    }
}
