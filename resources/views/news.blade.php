@extends ('layouts.app')
@section ('content')

<div class = "container">
    <h1> Naujienos </h1>

    @foreach($news as $newsItem)
    <div> 

        <h3>
        <!-- spaisdiname naujienos pavadinima -->
        {{ $newsItem ->title }}
        </h3>
        <p>
        {{ $newsItem ->content }}
        
         </p>

    </div>
    @endforeach

</div>

@endsection