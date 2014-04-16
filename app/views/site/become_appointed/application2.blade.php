@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-12 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}


			<ul id="nav-bb" class="inline-list">
			  <li><a href="{{ URL::to('become-appointed') }}">General Info:</a></li>
			  <li class="active"><a href="#">Key Agency Personnel:</a></li>
			  <li><a href="#">Annual Volume Projections:</a></li>
			</ul>

			{{ Form::model($application, array('class'=>'custom')) }}

				<div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name1', 'Name #1:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name1') }}
			        </div>
			    </div>
			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name1_job', 'Title/Job Function:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name1_job') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 large-offset-2 columns">
			          	{{ Form::label('name1_years_in_business', 'Years In Business:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name1_years_in_business') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('name1_years_with_agency', 'Years With Agency:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name1_years_with_agency') }}
			        </div>

			        <div class="large-1 columns">
			          	{{ Form::label('name1_email', 'Email:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-3 columns">
			          	{{ Form::email('name1_email') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-4 large-offset-2 columns">
			          	{{ Form::label('name1_designations', 'Professional Designations/Other Accomplishments:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-6 columns">
			          	{{ Form::text('name1_designations') }}
			        </div>
			    </div>

			    <hr>


			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name2', 'Name #2:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name2') }}
			        </div>
			    </div>
			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name2_job', 'Title/Job Function:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name2_job') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 large-offset-2 columns">
			          	{{ Form::label('name2_years_in_business', 'Years In Business:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name2_years_in_business') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('name2_years_with_agency', 'Years With Agency:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name2_years_with_agency') }}
			        </div>

			        <div class="large-1 columns">
			          	{{ Form::label('name2_email', 'Email:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-3 columns">
			          	{{ Form::email('name2_email') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-4 large-offset-2 columns">
			          	{{ Form::label('name2_designations', 'Professional Designations/Other Accomplishments:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-6 columns">
			          	{{ Form::text('name2_designations') }}
			        </div>
			    </div>

			    <hr>


			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name3', 'Name #3:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name3') }}
			        </div>
			    </div>
			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name3_job', 'Title/Job Function:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name3_job') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 large-offset-2 columns">
			          	{{ Form::label('name3_years_in_business', 'Years In Business:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name3_years_in_business') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('name3_years_with_agency', 'Years With Agency:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name3_years_with_agency') }}
			        </div>

			        <div class="large-1 columns">
			          	{{ Form::label('name3_email', 'Email:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-3 columns">
			          	{{ Form::email('name3_email') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-4 large-offset-2 columns">
			          	{{ Form::label('name3_designations', 'Professional Designations/Other Accomplishments:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-6 columns">
			          	{{ Form::text('name3_designations') }}
			        </div>
			    </div>

			    <hr>


			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name4', 'Name #4:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name4') }}
			        </div>
			    </div>
			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name4_job', 'Title/Job Function:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name4_job') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 large-offset-2 columns">
			          	{{ Form::label('name4_years_in_business', 'Years In Business:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name4_years_in_business') }}
			        </div>

			        <div class="large-2 columns">
			          	{{ Form::label('name4_years_with_agency', 'Years With Agency:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('name4_years_with_agency') }}
			        </div>

			        <div class="large-1 columns">
			          	{{ Form::label('name4_email', 'Email:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-3 columns">
			          	{{ Form::email('name4_email') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-4 large-offset-2 columns">
			          	{{ Form::label('name4_designations', 'Professional Designations/Other Accomplishments:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-6 columns">
			          	{{ Form::text('name4_designations') }}
			        </div>
			    </div>

			    <hr class="rhr">

			    <div class="row">
			    	<div class="large-9 columns">
			          	{{ Form::label('disciplinary_action', 'Has anyone in the agency been the subject of an investigation and/or disciplinary action by any insurance authority?', array('class'=>'inline'))}}
			        </div>
			        <div class="large-3 columns">
			          	<ul id="needs" class="inline-list">
			        		<li>
			        			<label class="left" for="disciplinary_action">
							      {{ Form::radio('disciplinary_action', 'Yes') }} 
							      Yes
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="disciplinary_action">
							      {{ Form::radio('disciplinary_action', 'No', true) }} 
							      No
							    </label>
			        		</li>
			        	</ul>
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-3 columns">
			          	{{ Form::label('disciplinary_explain', 'If yes, please explain:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-9 columns">
			          	{{ Form::textarea('disciplinary_explain') }}
			        </div>
			    </div>

			    

			    <div class="row">
			        <div class="large-11 columns">
			          	<div class="right"><p><button type="submit" class="primary">NEXT</button></p></div>
			          	<div class="right pad-right"><p><a class="secondary" href="{{ URL::to('become-appointed') }}">BACK</a></p></div>
			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>

			{{ Form::close() }}	


		</section>

	</div>

@endsection
