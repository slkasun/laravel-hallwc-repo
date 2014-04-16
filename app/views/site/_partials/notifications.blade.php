@if ($errors->any())
	<div data-alert class="alert-box alert">
		{{ implode('<br>', $errors->all()) }}
		<a href="#" class="close">&times;</a>
	</div>
@endif

@if (Session::has('message'))
	<div data-alert class="alert-box success">
		{{ Session::get('message') }}
		<a href="#" class="close">&times;</a>
	</div>
@endif
