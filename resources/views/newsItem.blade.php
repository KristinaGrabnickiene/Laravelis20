@extends('layouts.app')

@section('content')
<div class="container">

	<a href="{{ route('news.index') }}"><< Grizti i visas naujienas</a>
	
	<h1>{{ $newsItem->title }}</h1>

	<p>
		{{ $newsItem->content }}
	</p>
</div>
@endsection