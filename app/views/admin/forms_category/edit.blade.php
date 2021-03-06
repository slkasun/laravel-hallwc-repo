@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Forms - Edit Category - <span>{{ $category->name }}</span></h3>


			{{ Form::model($category, array('method' => 'put', 'route' => array('admin.forms-category.update', $category->id))) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('title', 'Title') }}
					<div class="controls">
						{{ Form::text('title') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('description', 'Description') }}
					<div class="controls">
						{{ Form::textarea('description') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('admin.forms-category.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Category Info:</h4>
				<p>Created at:<br>{{ $category->created_at }}</p>
				<p>Created by:<br>{{ $category->creator->first_name }}</p>
				<p>Last modified:<br>{{ $category->updated_at }}</p>
				<p>Modified by:<br>{{ $category->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
