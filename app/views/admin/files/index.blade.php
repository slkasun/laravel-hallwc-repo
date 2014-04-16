@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					File Uploader &nbsp; <a href="{{ URL::route('admin.files.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new file</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>File</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th style="width:50px">Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($files as $file)
						<tr>
							<td><i class="icon-file"></i> &nbsp; <a href="{{ URL::route('admin.files.edit', $file->id) }}">{{ $file->name }}</a></td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($file->updated_at) }}</td>

							<td>{{ $file->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('admin.files.edit', $file->id) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete('admin.files.destroy', $file->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $files->links() }}

		</div><!-- /span10-->

	</div>

@stop
