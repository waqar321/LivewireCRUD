<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NzCoding - Laravel LivewireCRUD</title>


	<!-- {{-- Bootstrap Styles --}} -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

	 @livewireStyles
</head>
<body>

	{{ $slot }}
	

	<!-- {{-- Bootstrap Scripts --}} -->
	<script src="https://code.jquery.com/jquery-3.6.2.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


	@stack('scripts')
	@livewireScripts
</body>
</html>

