@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Forms
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
						<tr>
							<td><i class="icon-list-alt"></i> &nbsp; <a href="{{ URL::route('admin.forms-category.forms.index', $category->id) }}">{{ $category->name }}</a></td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($category->updated_at) }}</td>

							<td>{{ $category->editor->first_name }}</td>

							<td>
								{{ App\Services\Helpers\MyHelper::btnView('admin.forms-category.forms.index', $category->id, 'Forms') }}

								{{ App\Services\Helpers\MyHelper::btnEdit('admin.forms-category.edit', $category->id) }}

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $categories->links() }}

		</div><!-- /span10-->

	</div>

@stop
