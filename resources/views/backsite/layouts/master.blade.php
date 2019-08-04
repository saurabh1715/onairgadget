<!DOCTYPE html>
<html>
<head>
	@include('backsite.layouts.head')
</head>

 <div class="theme-layout">
 	@include('backsite.layouts.sidebar')
 	@include('backsite.layouts.header')

 	@yield('content')

 	@include('backsite.layouts.footer')
 	@include('backsite.layouts.scripts')
</div>

</html>