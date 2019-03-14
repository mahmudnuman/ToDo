{{-- Primary Alert --}}
@if(Session::has('primary'))
	<div class="alert alert-primary  " role="alert">
		<strong>Note to User:</strong> {{ Session::get('primary') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Secondary Alert --}}
@if(Session::has('secondary'))
	<div class="alert alert-secondary  " role="alert">
		<strong>Note to User:</strong> {{ Session::get('secondary') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Success Alert --}}
@if(Session::has('success'))
	<div class="alert alert-success fade in">
		<strong>Success:</strong> {{ Session::get('success') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Danger Alert --}}
@if(Session::has('danger'))
	<div class="alert alert-danger alert fade in" role="alert">
		<strong>Error:</strong> {{ Session::get('danger') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Warning Alert --}}
@if(Session::has('warning'))
	<div class="alert alert-warning">
		<strong>Something Went Wrong!</strong>
		<br>
		{{ Session::get('warning') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Informational Alert --}}
@if(Session::has('info'))
	<div class="alert alert-info fade in" role="alert">
		<strong>Heads Up!</strong> {{ Session::get('info') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Light Alert --}}
@if(Session::has('light'))
	<div class="alert alert-info fade in">
		<strong>Note to User:</strong> {{ Session::get('light') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Dark Alert --}}
@if(Session::has('dark'))
	<div class="alert alert-danger  " role="alert">
		<strong>Note to User:</strong> {{ Session::get('dark') }}

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>
@endif

{{-- Authentication Alerts --}}
@if (session('status'))
<div class="alert alert-danger fade in">
	<strong>Note to User:</strong> {{ session('status') }}

	<a href="#" class="close" data-dismiss="alert">&times;</a>
		<span aria-hidden="true">&times;</span>
	
</div>
@endif

{{-- If the page has any errors passed to it --}}
@if(count($errors) > 0)

	<div class="alert alert-danger fade in">
		<strong>Errors:</strong>

		<ul>
			@foreach($errors->all() as $error)
				
				<li>{{ $error }}</li>

			@endforeach
		</ul>

		<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span aria-hidden="true">&times;</span>
		
	</div>

@endif