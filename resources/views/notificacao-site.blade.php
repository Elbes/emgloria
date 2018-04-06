@if ($message = Session::get('success'))
<div class="alert success hideit">
   <p>{{ $message }}</p>
	<span class="close"></span>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert error hideit">
   <p>{{ $message }}</p>
	<span class="close"></span>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert notice hideit">
   <p>{{ $message }}</p>
	<span class="close"></span>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert info hideit">
   <p>{{ $message }}</p>
	<span class="close"></span>
</div>
@endif

@if ($errors->any())
<div class="alert error hideit">
   <p>{{ $message }}</p>
	<span class="close"></span>
</div>
@endif