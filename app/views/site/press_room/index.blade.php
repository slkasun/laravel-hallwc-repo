@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-12 columns">

			<h1>{{ $page->page_heading }}</h1>

			<div class="row">
				{{ $page->body }}
			</div>

						
			{{ $page->body2 }}

		</section>

	</div>

@endsection
