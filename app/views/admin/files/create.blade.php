@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>File Uploader - <span>Add New file</span></h3>


			{{ Form::open(array('route' => 'admin.files.store', 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('pdf', 'File') }}

					<p class="info">Allowed File Types: pdf,jpeg,bmp,png,gif; Maximum file upload size: 2MB</p>
					
					<div class="controls">
						{{ Form::file('pdf') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('admin.files.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
