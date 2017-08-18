@extends("layout.master")
@section('titre','Commande')
@section('content')
@include('flash')
<div id="Person-5" class="box" ng-hide="formulaire">
    <div class="box-header">
        <i class="icon-comments icon-large"></i>
        <h5>Informations</h5>

    </div>
    <div>

        <form name="signupForm" role="form" method="GET" class="form-horizontal" action="{{route('commandes.create')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <table align="center">
               <br/>
                <tr>
                    <td>Nom produit : </td>
                    <td><select name="produit" required="true">
                            <option value="0">Choississiez</option>
                            @foreach($produit as $produit_)
                            <option value="{{$produit_->id}}">{{$produit_->designproduit}}</option>
                            @endforeach

                    </select></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nom client : </td>
                    <td><select name="client" required="true">
                            <option value="0">Choississiez</option>
                            @foreach($client as $client_)
                            <option value="{{$client_->id}}">{{$client_->nomclient}}</option>
                            @endforeach
                        </select></td>
                </tr>
                <tr>
                    <td>Qté : </td>
                    <td><input type="text" name="qte" value=""  required="required"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Date : </td>
                    <td><div id="#" class="input-prepend date">
                            <span class="add-on"><i class="icon-th"></i></span>
                            <input class="span2" type="date" value="" name="date" required="true">
                        </div></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button class="btn btn-primary" type="submit"> Enregistrer </button>
                        <button class="btn " type="reset"> Annuler </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@stop