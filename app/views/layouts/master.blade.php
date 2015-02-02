<!DOCTYPE html>
<html lang="en">
<head>
	@include('common.head')
</head>
<body>
    
    @include('common.header')
    @yield('content')
    
    <!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>