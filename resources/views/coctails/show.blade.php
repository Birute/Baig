<div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Rodyti kokteilį</h1></div>
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

                    <form method="post" action="{{ route('coctails.show', ['id'=>$coctail ->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        Pavadinimas: {{ $coctail->title }} <br>
                        Receptas: {{ $coctail->recipe }} <br>
                        Nuotrauka:<br>
                        <img src="{{ Storage::url($coctail->photo) }}">
                    </form>

                </div>
            </div>
        </div>
    </div>
  </div>
