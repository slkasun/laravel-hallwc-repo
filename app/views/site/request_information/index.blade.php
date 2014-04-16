@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-12 columns">

			<h1>{{ $page->page_heading }}</h1>

			<div class="row">
				{{ $page->body }}
			</div>


			<hr class="bhr">

			{{ $page->body2 }}

			@include('site._partials.notifications')

			{{ Form::open(array('class'=>'custom')) }}

				<div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name', 'Name:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name', null, array('required')) }}
			        </div>
			    </div>
			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('title', 'Title:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('title', null, array('required')) }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('company', 'Company:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('company', null, array('required')) }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('email', 'Email Address:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::email('email', null, array('required')) }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('phone', 'Phone Number:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('phone', null, array('required')) }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('address', 'Address:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('address', null, array('required')) }}
			        </div>
			    </div>

			    <div class="row">
			        <div class="large-10 large-offset-2 columns">
			          	
			          	<div class="row">
					    	<div class="large-1 columns">
					          	{{ Form::label('city', 'City:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-5 columns">
					          	{{ Form::text('city', null, array('required')) }}
					        </div>

					        <div class="large-1 columns">
					          	{{ Form::label('state', 'State:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-2 columns">
					          	{{ Form::text('state', null, array('required')) }}
					        </div>

					        <div class="large-1 columns">
					          	{{ Form::label('zip_code', 'Zip Code:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-2 columns">
					          	{{ Form::text('zip_code', null, array('required')) }}
					        </div>
					    </div>

			        </div>
			    </div>

			    <hr>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('need', 'What do you need?:', array('class'=>'inline bold'))}}
			        </div>
			        <div class="large-8 columns">

			        	<ul id="needs" class="large-block-grid-3 small-block-grid-2">
			        		<li>
			        			<label class="left" for="needs">
							      {{ Form::checkbox('needs[]', 'New Appointment') }} 
							      New Appointment
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="needs">
							      {{ Form::checkbox('needs[]', 'Existing Policy Service') }} 
							      Existing Policy Service
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="needs">
							      {{ Form::checkbox('needs[]', 'Claims Service') }} 
							      Claims Service
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="needs">
							      {{ Form::checkbox('needs[]', 'Media Request') }} 
							      Media Request
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="needs">
							      {{ Form::checkbox('needs[]', 'Hallmark Financial Services') }} 
							      Hallmark Financial Services
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="needs">
							      {{ Form::checkbox('needs[]', 'Other') }} 
							      Other
							    </label>	
			        		</li>		
			        	</ul>

			        	
			        </div>
			        <div class="large-2 columns">
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('special_requests', 'Special Requests:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::textarea('special_requests') }}
			        </div>
			    </div>

			    <div class="row">
			        <div class="large-10 large-offset-2 columns">
			          	<p><button type="submit" class="primary">Submit</button></p>
			        </div>
			    </div>

			{{ Form::close() }}	


		</section>

	</div>

@endsection
