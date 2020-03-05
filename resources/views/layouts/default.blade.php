<!-- Arquivo app/views/layouts/default.blade.php -->
<!doctype html>
<html lang="pt-BR">
<head>
@include('layouts.partials.head')
</head>
<body>

@include('layouts.partials.header')

<main role="main">
	<div class="container">
		@yield('content')
	</div>
	<script src="form-validation.js"></script>
</main>

</body>

<script>
$('.sel').on('click', function() {
	$('.resume').trigger('click');
});

$('.resume').on('change', function() {
	var fileName = $(this)[0].files[0].name;
	$('#file').val(fileName);
	$('.icon').hide();
	$('.input-field').css("padding-left","0px");
});
</script>

@include('layouts.partials.footer')

</html>