@if(Session::has('succes'))
<div class="alert alert-block alert-info" id="alert">
    <p>

    </p>
</div>
<script>
    $('document').ready(function(){
        var message = '{{Session::get('succes')}}';
        $("#alert p").html(message);
        $("#alert").show();
        $("#alert").focus();
        setTimeout(function() {
            $("#alert").hide();
        }, 2000);
    });
</script>
@endif

@if(Session::has('errors'))
<div class="alert alert-block alert-warning" id="alert">
    <p>

    </p>
</div>
<script>
    $('document').ready(function(){
        var message = '{{Session::get('errors')}}';
        $("#alert p").html(message);
        $("#alert").show();
        $("#alert").focus();
        setTimeout(function() {
            $("#alert").hide();
        }, 2000);
    });
</script>
@endif




