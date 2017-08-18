<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller {

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
        $data = DB::table('clients')->paginate(5);
        return view('client.index')->with(array('data'=>$data,'titre'=>'client'));
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
            'nomclient' =>$posts['nom'],
            'adresse' =>$posts['adresse']
        );
        $rep = DB::table('clients')->insert($data);
        $request->session()->flash('succes','Le client a été bien enregistré');
        return redirect('client');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = DB::table('clients')->find($id);
        return view('client.edit')->with(array('data'=>$item,'titre'=>'client'));
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
            'nomclient' =>$posts['nom'],
            'adresse' =>$posts['adresse']
        );
        $rep = DB::table('clients')->where('id',$posts['id'])->update($data);
        $request->session()->flash('succes','Le client a été bien modifié');
        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request,$id)
    {
        DB::table('clients')->where('id','=',$id)->delete();
        $request->session()->flash('succes','Le client a été bien supprimé');
        return redirect()->route('client.index');
    }

    public function form(){
        return view('client.new')->with('titre','client');
    }

}
