@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-8 columns">

			<h1>{{ $page->page_heading }}</h1>

			<div class="row">
				<div class="large-6 columns">
					{{ $page->body }}
				</div>

				<div class="large-6 columns">
					<ul id="cc">
						@foreach ($class_code_forms->forms as $form)
							<li><strong>{{ $form->name }}</strong> <a href="{{ URL::to('download/'.$form->pdf) }}" title="Download PDF" ><i class="pdf"></i></a></li>
						@endforeach
					</ul>
				</div>
			</div>

			{{ $page->body2 }}
			

		</section>

		<aside class="large-4 columns">
				@include('site._partials.aside')		
		</aside>
	</div>

@endsection
