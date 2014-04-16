@extends('site._layouts.default')

@section('main')

	<section id="slider" class="hide-for-small clearfix">
		<div class="slideshow-wrapper">
  			<div class="preloader"></div>
			<ul data-orbit data-options="bullets:false;animation:'fade';navigation_arrows:false;resume_on_mouseout:true;stack_on_small: false;slide_number:false;timer_speed:8000;">

			@foreach($sliders as $slider)
			  <li>
			    <img src="{{ URL::asset('uploads/site/slider/'.$slider->image) }}" />
			  </li>
			@endforeach

			</ul>
		</div>
	</section>

	<div class="row">
		<section class="large-12 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}

		</section>
	</div>

@endsection
