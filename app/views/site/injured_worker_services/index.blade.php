@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-8 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}

			<table>
			  <tbody>
			  	<tr>
			  		@if ($injured_worker_forms->title)
			  		<td colspan="2" class="title">{{ $injured_worker_forms->title }}</td>
			  		@endif
			    </tr>
			    
			    @foreach ($injured_worker_forms->forms as $form)
			    <tr>
			      <td>{{ $form->name }}</td>
			      <td width="60">
			      	<a href="{{ URL::to('download/'.$form->pdf) }}" title="Download PDF"><i class="pdf"></i></a>
			      </td>
			    </tr>
			    @endforeach

			  </tbody>
			</table>

			<p class="right"><a href="{{ URL::to('report-claim') }}" class="warning">Report A Claim</a></p>

		</section>

		<aside class="large-4 columns">
				@include('site._partials.aside')		
		</aside>
	</div>

@endsection
