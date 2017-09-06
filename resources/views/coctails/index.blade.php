

<a href="{{ route('coctails.create') }}">Sukurti naują</a></br></br>

@if(session()->has('success_msg'))
  <div class="alert alert-success">
    {{ session('success_msg') }}
  </div>
@endif

@foreach ($coctails as $coctail)

<div class="block friend">
    <a href="{{ route('coctails.edit', $coctail ->id) }}">
    {{ $coctail->title }}
    {{ $coctail->recipe }}
    {{ $coctail->photo }}

    <!-- <form method="post" action="{{ route('friends.destroy', $friend ->id) }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit">Ištrinti</button>
    </form>
</div> -->

@endforeach

  {{ $coctails->links() }}
