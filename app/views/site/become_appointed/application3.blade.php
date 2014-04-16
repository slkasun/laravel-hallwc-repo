@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-12 columns">

			<h1>{{ $page->page_heading }}</h1>

			<p>{{ $page->body }}</p>


			<ul id="nav-bb" class="inline-list">
			  <li><a href="{{ URL::to('become-appointed') }}">General Info:</a></li>
			  <li><a href="{{ URL::to('become-appointed2') }}">Key Agency Personnel:</a></li>
			  <li class="active"><a href="#">Annual Volume Projections:</a></li>
			</ul>

			{{ Form::model($application, array('class'=>'custom')) }}

				<div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('current_year', 'Current Year:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('current_year') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('current_year_premium', 'Premium $:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-2 columns">
			          	{{ Form::text('current_year_premium') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('current_year_policies', 'Policies #:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-2 columns">
			          	{{ Form::text('current_year_policies') }}
			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>
			    
			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('next_year', 'Next Year:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('next_year') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('next_year_premium', 'Premium $:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-2 columns">
			          	{{ Form::text('next_year_premium') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('next_year_policies', 'Policies #:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-2 columns">
			          	{{ Form::text('next_year_policies') }}
			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>

			    <hr>


			    <div class="row">
			    	<div class="large-4 columns">
			          	{{ Form::label('grow_your_book', 'How do you plan to grow your book with Hallmark?', array('class'=>'inline'))}}
			        </div>
			        <div class="large-8 columns">
			        	<ul id="needs" class="inline-list">
			        		<li>
			        			<label class="left" for="grow_your_book">
							      {{ Form::radio('grow_your_book', 'Organically', true) }} 
							      Organically
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="grow_your_book">
							      {{ Form::radio('grow_your_book', 'Rolling Current Book of Business') }} 
							      Rolling Current Book of Business
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="grow_your_book">
							      {{ Form::radio('grow_your_book', 'Both') }} 
							      Both
							    </label>
			        		</li>
			        	</ul>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="large-3 columns">
			          	{{ Form::label('business_plan', 'Business Plan to Meet Objectives:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-9 columns">
			          	{{ Form::text('business_plan') }}
			        </div>
			    </div>

			    <hr>


			    <div class="row">
			    	<div class="large-6 columns">
			          	{{ Form::label('benefit_from_field_marketing', 'Would your agency benefit from an onsite visit from a Field Marketing Representative?', array('class'=>'inline'))}}
			        </div>
			        <div class="large-6 columns">
			          	<ul id="needs" class="inline-list">
			        		<li>
			        			<label class="left" for="benefit_from_field_marketing">
							      {{ Form::radio('benefit_from_field_marketing', 'Yes') }} 
							      Yes
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="benefit_from_field_marketing">
							      {{ Form::radio('benefit_from_field_marketing', 'No', true) }} 
							      No
							    </label>
			        		</li>
			        	</ul>
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('benefit_from_field_marketing_explain', 'If yes, please explain:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::textarea('benefit_from_field_marketing_explain') }}
			        </div>
			    </div>

			    
			    <p><br><strong class="tred">Agents Acknowledgement:</strong></p>

			    <p>I hereby affirm that the information I have provided is true and correct to the best of my knowledge.</p>


			    <div class="row">
			    	<div class="large-3 columns">
			          	{{ Form::label('electronic_signature', 'Electronic Signature:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-9 columns">
			          	{{ Form::text('electronic_signature', null, array('class'=>'error', 'required')) }}
			          	<p><em>(Please enter your full name.)</em></p>
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-3 columns">
			          	{{ Form::label('electronic_signature_date', 'Date:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-2 columns">
			          	{{ Form::text('electronic_signature_date', date('m/d/Y'), array('class'=>'error', 'required')) }}
			        </div>
			        <div class="large-7 columns">
			        </div>
			    </div>
			    
			    

			    <div class="row">
			        <div class="large-11 columns">

			          	<div class="right"><p><input type="submit" name="btn_submit" value="SUBMIT" class="primary" /></p></div>

			          	<div class="right pad-right"><p><input type="submit" name="btn_print" value="SAVE AS A PDF" class="secondary btnpdf" /></p></div>

			          	<div class="right pad-right"><p><a class="secondary" href="{{ URL::to('become-appointed2') }}">BACK</a></p></div>

			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>

			{{ Form::close() }}	


		</section>

	</div>

@endsection
