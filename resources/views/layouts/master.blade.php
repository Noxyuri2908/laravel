<!DOCTYPE html>
<html>
<head>
	<title>Admin Management</title>
	<link rel="stylesheet" href="../frontends/stype.css" />
</head>
<style type="text/css">
</style>
<body>
	<div class ='top'></div>
	<div class='left'>
		<ul>
			<li ><a href="" style="font-weight: bold;">DASHBOARD</a></li>
			<li ><a href="{{ route('backend.product') }}">Product Management</a></li>
			<li ><a href="{{ route('backend.user.index') }}">User Management</a></li>
			<li ><a href="{{ route('backend.catog') }}">Catog Management</a></li>
		</ul>
	</div>
	<div class='right'></div>
	<h2>Here to manage product</h2>

	<div class='footer'></div>
</body>
</html>