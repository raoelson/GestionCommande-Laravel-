@extends("layout.master")
@section('titre','Produit')
@section('content')
<div id="Person-5" class="box" ng-hide="formulaire">
    <div class="box-header">
        <i class="icon-comments icon-large"></i>
        <h5>Informations</h5>

    </div>
    <div>

        <form name="signupForm" role="form" method="GET" class="form-horizontal" action="{{route('client.create')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <table align="center">
               <br/>
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" value=""   required="required"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Adresse : </td>
                    <td><input type="text" name="adresse" value=""  required="required"></td>
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