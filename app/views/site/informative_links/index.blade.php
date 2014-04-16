@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-8 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}

			<table>
			  <tbody>
			    <tr>
			    </tr>

			    @foreach ($links as $link)
			    <tr>
			      <td>{{ $link->title }}</td>
			      <td width="60">
			      	<a href="{{ $link->link }}" title="Go to Link" target="_blank"><i class="ie"></i></a>
			      </td>
			    </tr>
			    @endforeach

			  </tbody>
			</table>

		</section>

		<aside class="large-4 columns">
				@include('site._partials.aside')		
		</aside>
	</div>

@endsection
