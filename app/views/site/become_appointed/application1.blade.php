@extends('site._layouts.default')

@section('main')

	<div class="row">
		<section class="ct large-12 columns">

			<h1>{{ $page->page_heading }}</h1>

			{{ $page->body }}

			@include('site._partials.notifications')

			<ul id="nav-bb" class="inline-list">
			  <li class="active"><a href="#">General Info:</a></li>
			  <li><a href="#">Key Agency Personnel:</a></li>
			  <li><a href="#">Annual Volume Projections:</a></li>
			</ul>

			{{ Form::model($application, array('class'=>'custom')) }}

				<div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('date_of_application', 'Date of Application:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-2 columns">
			          	{{ Form::text('date_of_application', date('m/d/Y')) }}
			        </div>
			        <div class="large-8 columns">
			        </div>
			    </div>
			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('name_of_agency', 'Legal Name of Agency:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('name_of_agency') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('mailing_address', 'Mailing Address:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('mailing_address') }}
			        </div>
			    </div>

			    <div class="row">
			        <div class="large-10 large-offset-2 columns">
			          	
			          	<div class="row">
					    	<div class="large-1 columns">
					          	{{ Form::label('mailing_address_city', 'City:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-5 columns">
					          	{{ Form::text('mailing_address_city') }}
					        </div>

					        <div class="large-1 columns">
					          	{{ Form::label('mailing_address_state', 'State:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-2 columns">
					          	{{ Form::text('mailing_address_state') }}
					        </div>

					        <div class="large-1 columns">
					          	{{ Form::label('mailing_address_zip_code', 'Zip Code:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-2 columns">
					          	{{ Form::text('mailing_address_zip_code') }}
					        </div>
					    </div>

			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-2 columns">
			          	<label for="physical_address" class="inline">Physical Address: <br><span style="font-size:.9em;font-style:italic;">(If different from Mailing)</span></label>
			        </div>
			        <div class="large-10 columns">
			          	{{ Form::text('physical_address') }}
			        </div>
			    </div>

			    <div class="row">
			        <div class="large-10 large-offset-2 columns">
			          	
			          	<div class="row">
					    	<div class="large-1 columns">
					          	{{ Form::label('physical_address_city', 'City:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-5 columns">
					          	{{ Form::text('physical_address_city') }}
					        </div>

					        <div class="large-1 columns">
					          	{{ Form::label('physical_address_state', 'State:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-2 columns">
					          	{{ Form::text('physical_address_state') }}
					        </div>

					        <div class="large-1 columns">
					          	{{ Form::label('physical_address_zip_code', 'Zip Code:', array('class'=>'inline'))}}
					        </div>
					        <div class="large-2 columns">
					          	{{ Form::text('physical_address_zip_code') }}
					        </div>
					    </div>

			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-2 columns">
			          	{{ Form::label('phone', 'Phone Number:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::text('phone') }}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::label('fax', 'Fax:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::text('fax') }}
			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			    	<div class="large-12 columns">
			          	<p><strong>Contacts:</strong></p>
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-2 columns">
			          	{{ Form::label('principal_name', 'Principal’s Name:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::text('principal_name') }}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::label('principal_email', 'Email:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::email('principal_email') }}
			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-2 columns">
			          	{{ Form::label('principal_ss_number', 'Principal’s Social Security #:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::text('principal_ss_number') }}
			        </div>
			        <div class="large-7 columns">
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-2 columns">
			          	{{ Form::label('accounting_contact', 'Accounting Contact:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::text('accounting_contact') }}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::label('accounting_contact_email', 'Email:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::email('accounting_contact_email') }}
			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('License', 'Organization Type:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			        	<ul id="needs" class="inline-list">
			        		<li>
			        			<label class="left" for="organization_types">
							      {{ Form::radio('organization_types', 'Corporation', true) }} 
							      Corporation
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="organization_types">
							      {{ Form::radio('organization_types', 'Partnership') }} 
							      Partnership
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="organization_types">
							      {{ Form::radio('organization_types', 'LLC') }} 
							      LLC
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="organization_types">
							      {{ Form::radio('organization_types', 'Individual') }} 
							      Individual
							    </label>
			        		</li>	
			        		<li>
			        			<label class="left" for="organization_types">
							      {{ Form::radio('organization_types', 'Joint Venture') }} 
							      Joint Venture
							    </label>
			        		</li>
			        	</ul>
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-2 columns">
			          	{{ Form::label('years_in_business', 'Years In Business:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-1 columns">
			          	{{ Form::text('years_in_business') }}
			        </div>
			        <div class="large-2 columns">
			          	{{ Form::label('company_website', 'Company Website:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-7 columns">
			          	{{ Form::text('company_website') }}
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-2 columns">
			          	{{ Form::label('tax_id_number', 'Tax ID Number:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-4 columns">
			          	{{ Form::text('tax_id_number') }}
			        </div>
			        <div class="large-6 columns">
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			    	<div class="large-2 columns">
			          	{{ Form::label('License', 'License(s) held by Applicant:', array('class'=>'inline'))}}
			        </div>
			        <div class="large-10 columns">
			        	<ul id="needs" class="inline-list">
			        		<li>
			        			<label class="left" for="licenses">
							      {{ Form::checkbox('licenses[]', 'Agent') }} 
							      Agent
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="licenses">
							      {{ Form::checkbox('licenses[]', 'Broker') }} 
							      Partnership
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="licenses">
							      {{ Form::checkbox('licenses[]', 'MGA') }} 
							      LLC
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="licenses">
							      {{ Form::checkbox('licenses[]', 'Surplus Lines Broker') }} 
							      Surplus Lines Broker
							    </label>
			        		</li>
			        	</ul>
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-3 columns">
			          	{{ Form::label('mga', 'Are you currently appointed with a MGA?', array('class'=>'inline'))}}
			        </div>
			        <div class="large-9 columns">
			        	<ul id="needs" class="inline-list">
			        		<li>
			        			<label class="left" for="mga">
							      {{ Form::radio('mga', 'Yes') }} 
							      Yes
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="mga">
							      {{ Form::radio('mga', 'No', true) }} 
							      No
							    </label>
			        		</li>
			        	</ul>
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-4 columns">
			          	{{ Form::label('mga_with', 'If yes, with whom?', array('class'=>'inline'))}}
			        </div>
			        <div class="large-8 columns">
			          	{{ Form::text('mga_with') }}
			        </div>
			    </div>

			    <div class="row">
			    	<div class="large-3 columns">
			          	{{ Form::label('agency_in_cluster', 'Is Your Agency in a Cluster?', array('class'=>'inline'))}}
			        </div>
			        <div class="large-9 columns">
			        	<ul id="needs" class="inline-list">
			        		<li>
			        			<label class="left" for="agency_in_cluster">
							      {{ Form::radio('agency_in_cluster', 'Yes') }} 
							      Yes
							    </label>
			        		</li>
			        		<li>
			        			<label class="left" for="agency_in_cluster">
							      {{ Form::radio('agency_in_cluster', 'No', true) }} 
							      No
							    </label>
			        		</li>
			        	</ul>
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-4 columns">
			          	{{ Form::label('name_of_cluster', 'If yes, what is the name of the cluster?', array('class'=>'inline'))}}
			        </div>
			        <div class="large-8 columns">
			          	{{ Form::text('name_of_cluster') }}
			        </div>
			    </div>

			    <hr>

			    <div class="row">			    	
			        <div class="large-5 columns">
			          	{{ Form::label('here_about_us', 'How did you hear about us? (ex: online, referral, trade show, etc.)', array('class'=>'inline'))}}
			        </div>
			        <div class="large-7 columns">
			          	{{ Form::text('here_about_us') }}
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			    	<div class="large-12 columns">
			          	{{ $page->body2 }}
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-9 small-8 columns">
			          	<p><em>Company Name:</em></p>
			        </div>
			        <div class="large-3 small-4 columns">
			          	<p><em>Approximate Premium:</em></p>
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-9 small-8 columns">
			          	{{ Form::text('company_name1') }}
			        </div>
			        <div class="large-3 small-4 columns">
			          	{{ Form::text('approximate_premium1') }}
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-9 small-8 columns">
			          	{{ Form::text('company_name2') }}
			        </div>
			        <div class="large-3 small-4 columns">
			          	{{ Form::text('approximate_premium2') }}
			        </div>
			    </div>

			    <div class="row">			    	
			        <div class="large-9 small-8 columns">
			          	{{ Form::text('company_name3') }}
			        </div>
			        <div class="large-3 small-4 columns">
			          	{{ Form::text('approximate_premium3') }}
			        </div>
			    </div>

			    <div class="row">
			        <div class="large-11 columns">
			          	<p class="right"><button type="submit" class="primary">NEXT</button><p>
			        </div>
			        <div class="large-1 columns">
			        </div>
			    </div>

			{{ Form::close() }}	


		</section>

	</div>

@endsection
