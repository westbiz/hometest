@extends('app')
@section('content')
	<h1>{{ $article->title }}</h1>
	<hr>
		<h2>{{ $article->title }}</h2>
		<article>
			<div class="body">
				{{ $article->content }}
			</div>
		</article>


@stop