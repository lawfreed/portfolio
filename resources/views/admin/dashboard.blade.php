<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Mark Law | Dashboard</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="mobile-web-app-capable" content="yes">
	@include('partials.csslinks')
</head>
<body>
	@include('partials.navbar')
	<div id="boxize">
		<div class="ui grid">
			<div class="row">
				<h1>Hallo, @foreach($names as $name){{ $name }}&nbsp @endforeach</h1>
			</div>
		</div>
	@include('partials.footer') 
	</div>

	@include('partials.scripts')
</body>
</html>