@extends("layout.master")
@section('titre','Client')
@section('content')
@include('flash')
<span class="span5 btn-toolbar pull-right" style="text-align: right;margin-top: 5px;">
    <a class="btn " href="{{route('form_client')}}"   title="Create New Client"><i class="icon-user"></i>
        Nouveau</a>
</span><br/><br/>
<div id="Person-1" class="box">
    <div class="box-header">
        <i class="icon-list icon-large"></i>
        <h5>Listes clients</h5>

    </div>
    <div class="box-content box-table">
        <table class="table table-hover tablesorter">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th >Action</th>

            </tr>
            </thead>
            <tbody>
            <tbody>
            @foreach($data as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nomclient}}</td>
                <td>{{ $value->adresse}}</td>
                <td><a href="{{route('client.edit',$value->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('delete.client',$value->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure !')">Delete</a>
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