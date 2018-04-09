@extends('app')
@section('content')
	<h1>Article</h1>
	<hr>
	<div class="container">
		@foreach($articles as $article)
			<h2><a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a></h2>
			<article>
				<div class="body">
					{{ $article->content }}
				</div>
			</article>
		@endforeach
		 {{-- 分页 --}}
		{{ $articles->links() }}
	</div>


@stop