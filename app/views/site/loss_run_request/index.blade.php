@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-8 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}
			

			<table>
				  <tbody>
				  	<tr>
				  		@if ($loss_run_request_forms->title)
				  		<td colspan="2" class="title">{{ $loss_run_request_forms->title }}</td>
				  		@endif
				    </tr>

				    @foreach ($loss_run_request_forms->forms as $form)
				    <tr>
				      <td>{{ $form->name }}</td>
				      <td width="60">
				      	<a href="{{ URL::to('download/'.$form->pdf) }}" title="Download PDF"><i class="pdf"></i></a>
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
