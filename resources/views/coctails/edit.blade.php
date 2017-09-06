<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Koreguoti kokteilį</h1></div>
                <div class="panel-body">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- store - naujiems įrašams SAUGOTI, create - atvaizduoja naujo įrašo kūrimo formą -->
  <form enctype="multipart/form-data" method="post" action="{{ route('coctails.update', ['id'=>$coctail ->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    @include('coctails.form')

    <img src="{{ Storage::url($coctail->photo) }}">

    <input type="submit" value="Išsaugoti">
  </form>
</div>
</div>
</div>
</div>
</div>
