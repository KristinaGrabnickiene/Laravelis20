<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>Skaiciuokle</h1>

<!-- Route funkcija sugeneruoja route'o actiona automatiskai pagal jo name -->
<form method="POST" action="{{ route('suma') }}">
	<!-- Saugumo sumetimais laravel visada reikalingas sitas uzrasas -->
	{{ csrf_field() }}
	<input type="text" name="x">
	<input type="text" name="y">
	<input type="submit" >
</form>

</body>
</html>