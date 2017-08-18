@extends("layout.master")
@section('titre','Produit')
@section('content')
<div id="Person-5" class="box" ng-hide="formulaire">
    <div class="box-header">
        <i class="icon-comments icon-large"></i>
        <h5>Informations</h5>

    </div>
    <div>

        <form name="signupForm" role="form" method="post" class="form-horizontal" action="{{action('ProduitController@update')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="id" value="{{$data->id}}" >
            <table align="center">
               <br/>
                <tr>
                    <td>Désignation : </td>
                    <td><input type="text" name="designation" value="{{$data->designproduit}}"   required="required"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Prix : </td>
                    <td><input type="text" name="prix" value="{{$data->puproduit}}"  required="required"></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button class="btn btn-primary" type="submit"> Modifier </button>
                        <a class="btn " type="button" href="{{route('produit.index')}}"> Retour </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@stop