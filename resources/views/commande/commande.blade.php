@extends("layout.master")
@section('titre','Commande')
@section('content')
@include('flash')
<span class="span5 btn-toolbar pull-right" style="text-align: right;margin-top: 5px;">
    <a class="btn " href="{{route('form_commandes')}}"   title="Create New Commandes"><i class="icon-user"></i>
        Nouveau</a>
</span><br/><br/>
<div id="Person-1" class="box">
    <div class="box-header">
        <i class="icon-list icon-large"></i>
        <h5>Listes commandes</h5>

    </div>
    <div class="box-content box-table">
        <br/>
        <form action="{{route('commandes.index')}}" method="get">
            <table style="margin-left: auto;margin-right: auto;">
                <tr>
                    <td>
                        Début
                    </td>
                    <td>
                        <div id="#" class="input-prepend date1">
                            <span class="add-on"><i class="icon-th"></i></span>
                            <input class="span2" type="date" value="" name="debut" required="true">
                        </div>
                    </td>
                    <td>
                        Fin
                    </td>
                    <td>
                        <div id="#" class="input-prepend date">
                            <span class="add-on"><i class="icon-th"></i></span>
                            <input class="span2" type="date" value="" name="fin" required="true">
                        </div>
                    </td>
                    <td>
                        <button type="SUBMIT"  class="btn"><i class="icon-search"></i>&nbsp;Recherche</button>
                    </td>
                </tr>
            </table>
        </form>
        <table class="table table-hover tablesorter">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom Produit</th>
                <th>Nom Client</th>
                <th>Quantité</th>
                <th>Date</th>
                <th >Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($data as $value)

            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->produit->designproduit}}</td>
                <td>{{ $value->client->nomclient}}</td>
                <td>{{ $value->qtecommande}}</td>
                <td>{{ $value->datecommande}}</td>
                <td><a href="{{route('commandes.edit',$value->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('delete_commandes',$value->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure !')">Delete</a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
        <div class="pagination pull-right">
            <?php echo $data->render(); ?>
        </div>


    </div>

</div>
@stop