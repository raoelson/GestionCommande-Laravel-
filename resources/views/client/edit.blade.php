@extends("layout.master")
@section('titre','Client')
@section('content')
<div id="Person-5" class="box" ng-hide="formulaire">
    <div class="box-header">
        <i class="icon-comments icon-large"></i>
        <h5>Informations</h5>

    </div>
    <div>

        <form name="signupForm" role="form" method="post" class="form-horizontal" action="{{action('ClientController@update')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="id" value="{{$data->id}}" >
            <table align="center">
               <br/>
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" value="{{$data->nomclient}}"   required="required"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Adresse : </td>
                    <td><input type="text" name="adresse" value="{{$data->adresse}}"  required="required"></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button class="btn btn-primary" type="submit"> Modifier </button>
                        <a class="btn " type="button" href="{{route('client.index')}}"> Retour </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@stop