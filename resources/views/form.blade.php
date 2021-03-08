<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intern | Form</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<?php $file_error=""; ?>
	<div class="container">
		<h1>Intern Form</h1>
		<form method="POST" action="form" enctype="multipart/form-data">
			@csrf
			<table>
				<tr>
					<td><label>Full Name:</label></td>
					<td><input oninvalid="setCustomValidity('Please enter alphabets only. ')" type="text" name="full_name" placeholder="Enter Your Name" required></td>
				</tr>
				<tr>
					<td><label>Gender:</label></td>
					<td>
						<input type="radio" name="gender" value="male" required>Male 
						<input type="radio" name="gender" value="female">Female 
					</td>
				</tr>
				<tr>
					<td><label>Age:</label></td>
					<td><input pattern="[1-9]" min="18"type="number" name="age" required></td>
				</tr>
				<tr>
					<td><label>Date of Birth:</label></td>
					<td><input type="date" name="dob" max="2003-12-31" required></td>
				</tr>
				<tr>
					<td><label>Contact:</label></td>
					<td><input type="tel" pattern="^\d{10}$" oninvalid="setCustomValidity('Please enter 10 digit number.')" name="contact" placeholder="Enter Your Number" required></td>
				</tr>
				<tr>
					<td><label>Email Id:</label></td>
					<td><input type="email" name="email" placeholder="Enter Your Email" required></td>
				</tr>
				<tr>
					<td><label>College/Employement Type with Name:</label></td>
					<td><input type="text" name="type"></td>
				</tr>
				<tr>
					<td><label>Resume:</label></td>
					<td><input type="file" name="resume" accept="application/pdf">(Only PDF format)<p>{{$file_error}}</p></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>