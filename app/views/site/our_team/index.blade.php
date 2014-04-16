@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-8 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}

			<br>

			{{ $page->body2 }}

		</section>

		<aside class="large-4 columns">
				@include('site._partials.aside')		
		</aside>
	</div>

@endsection
