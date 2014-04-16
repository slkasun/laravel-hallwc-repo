@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="large-8 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}

			<div class="forms">

				<table>
				  <tbody>
				  	<tr>
				  		@if ($forms->title)
				  		<td colspan="2" class="title">{{ $forms->title }}</td>
				  		@endif
				    </tr>
				    
				    @foreach ($forms->forms as $form)
				    <tr>
				      <td>{{ $form->name }}</td>
				      <td width="60">
				      	<a href="{{ URL::to('download/'.$form->pdf) }}" title="Download PDF"><i class="pdf"></i></a>
				      </td>
				    </tr>
				    @endforeach

				  </tbody>
				</table>

				<table>
				  <tbody>
				  	<tr>
				  		@if ($employer_forms->title)
				  		<td colspan="2" class="title">{{ $employer_forms->title }}</td>
				  		@endif
				    </tr>

				    @foreach ($employer_forms->forms as $form)
				    <tr>
				      <td>{{ $form->name }}</td>
				      <td width="60">
				      	<a href="{{ URL::to('download/'.$form->pdf) }}" title="Download PDF"><i class="pdf"></i></a>
				      </td>
				    </tr>
				    @endforeach

				  </tbody>
				</table>

				<table>
				  <tbody>
				  	<tr>
				  		@if ($employee_forms->title)
				  		<td colspan="2" class="title">{{ $employee_forms->title }}</td>
				  		@endif
				    </tr>

				    @foreach ($employee_forms->forms as $form)
				    <tr>
				      <td>{{ $form->name }}</td>
				      <td width="60">
				      	<a href="{{ URL::to('download/'.$form->pdf) }}" title="Download PDF"><i class="pdf"></i></a>
				      </td>
				    </tr>
				    @endforeach

				  </tbody>
				</table>

				<table>
				  <tbody>
				  	<tr>
				  		@if ($montana_forms->title)
				  		<td colspan="2" class="title">{{ $montana_forms->title }}</td>
				  		@endif
				    </tr>

				    @foreach ($montana_forms->forms as $form)
				    <tr>
				      <td>{{ $form->name }}</td>
				      <td width="60">
				      	<a href="{{ URL::to('download/'.$form->pdf) }}" title="Download PDF"><i class="pdf"></i></a>
				      </td>
				    </tr>
				    @endforeach

				  </tbody>
				</table>

			</div>

		</section>

		<aside class="large-4 columns">
				@include('site._partials.aside')		
		</aside>
		
	</div>

@endsection
