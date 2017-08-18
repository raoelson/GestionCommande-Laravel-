<?php namespace App\Http\Controllers;

use App\Commande;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Request $request)
    {
        $gets = $request->all();
        $data = "";
        if(!empty($gets)){
            if($gets['debut'] != "" && $gets['fin'] !=""){
                $data = Commande::with('client','produit')->whereBetween('datecommande', [$gets['debut'], $gets['fin']])->paginate(5);

            }
        }else{
            $data = Commande::with('client','produit')->paginate(5);
        }
        return view('commande.commande')->with(array('data'=>$data,'titre'=>'commandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        //
        $gets= $request->all();
        if($gets['produit'] ==  0 || $gets['client'] ==  0){
            $request->session()->flash('errors','Veuillez séléctionner les champs nom produit ou nom client');
            return redirect()->route('form_commandes');
        }else{
            $data = array(
                'produit_id' =>$gets['produit'],
                'client_id' =>$gets['client'],
                'qtecommande' =>$gets['qte'],
                'datecommande' =>$gets['date']
            );
            DB::table('commandes')->insert($data);
            $request->session()->flash('succes','La commande a été bien enregistrée');
            return redirect()->route('commandes.index');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $client = DB::table('clients')->get();
        $produit = DB::table('produits')->get();
        $item = DB::table('commandes')->find($id);
        return view('commande.edit')->with(array('data'=>$item,'titre'=>'commandes','client'=>$client,'produit'=>$produit));
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
            'produit_id' =>$posts['produit'],
            'client_id' =>$posts['client'],
            'qtecommande' =>$posts['qte'],
            'datecommande' =>$posts['date']
        );
        $rep = DB::table('commandes')->where('id',$posts['id'])->update($data);
        $request->session()->flash('succes','La commande a été bien modifiée');
        return redirect()->route('commandes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request,$id)
    {
        DB::table('commandes')->where('id','=',$id)->delete();
        $request->session()->flash('succes','La commande a été bien supprimée');
        return redirect()->route('commandes.index');
    }

    public function form(){
        $client = DB::table('clients')->get();
        $produit = DB::table('produits')->get();
        return view('commande.new')->with(array('titre'=>'commandes','client'=>$client,'produit'=>$produit));
    }
}
