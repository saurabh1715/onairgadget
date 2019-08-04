<!DOCTYPE html>
<html>
<head>
	@include('onsite.layouts.head')
</head>

 <div class="theme-layout">
 	@include('onsite.layouts.header')

 	@yield('content')

 	@include('onsite.layouts.footer')
 	@include('onsite.layouts.script')
</div>

</html>