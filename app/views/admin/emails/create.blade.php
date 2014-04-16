@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Email Addresses - {{ $category->name }} - <span>Add New Email</span></h3>


			{{ Form::open(array('route' => array('admin.emails-category.emails.store', $category->id), 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('email', 'Email') }}
					<div class="controls">
						{{ Form::text('email') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('admin.emails-category.emails.index', $category->id) }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
