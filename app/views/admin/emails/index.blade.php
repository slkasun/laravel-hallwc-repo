@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Email Addresses - <span>{{ $category->name }}</span>  &nbsp; 
					<a href="{{ URL::route('admin.emails-category.emails.create', $category->id) }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new email</a>

					<a href="{{ URL::route('admin.emails-category.index') }}" class="btn btn-mini btn-info"><i class="icon-circle-arrow-left"></i> Back</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th width="50">Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($emails as $email)
						<tr>
							<td><i class="icon-envelope"></i> &nbsp; <a href="{{ URL::route('admin.emails-category.emails.edit', array($category->id, $email->id)) }}">{{ $email->name }}</a></td>

							<td>{{ $email->email }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($email->updated_at) }}</td>

							<td>{{ $email->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('admin.emails-category.emails.edit',array($category->id, $email->id)) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete2('admin.emails-category.emails.destroy', $category->id, $email->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $emails->links() }}

		</div><!-- /span10-->

	</div>

@stop
