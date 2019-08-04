<!DOCTYPE html>
<html>
<head>
	@include('onair.layouts.head')
</head>

 <div>
 	@include('onair.layouts.header')

 	@yield('content')

 	@include('onair.layouts.footer')
 	@include('onair.layouts.scripts')
</div>

</html>