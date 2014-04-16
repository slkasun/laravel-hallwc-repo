@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>File Uploader - Edit File - <span>{{ $file->name }}</span></h3>


			{{ Form::model($file, array('method' => 'put', 'route' => array('admin.files.update', $file->id))) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('url', 'URL') }}
					<div class="controls">
						{{ URL::to('uploads/site/file/' . $file->file) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('pdf', 'File') }}

					@if ($file->file)
						<a href="{{ URL::to('uploads/site/file/' . $file->file) }}" target="_blank">View: {{ $file->file }}</a>
					@endif
					
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

		<div class="span2">

			<div class="info">
				<h4>File Info:</h4>
				<p>Created at:<br>{{ $file->created_at }}</p>
				<p>Created by:<br>{{ $file->creator->first_name }}</p>
				<p>Last modified:<br>{{ $file->updated_at }}</p>
				<p>Modified by:<br>{{ $file->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
