<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<body>
			<h2>Request more information</h2>
			<table>
				<tr>
					<td><p>Name:</p></td>
					<td><p>{{ $name }}</p></td>
				</tr>
				<tr>
					<td><p>Title:</p></td>
					<td><p>{{ $title }}</p></td>
				</tr>
				<tr>
					<td><p>Company:</p></td>
					<td><p>{{ $company }}</p></td>
				</tr>
				<tr>
					<td><p>Email Address:</p></td>
					<td><p>{{ $email }}</p></td>
				</tr>
				<tr>
					<td><p>Phone Number:</p></td>
					<td><p>{{ $phone }}</p></td>
				</tr>
				<tr>
					<td><p>Address:</p></td>
					<td><p>{{ $address }}</p></td>
				</tr>
				<tr>
					<td><p>City:</p></td>
					<td><p>{{ $city }}</p></td>
				</tr>
				<tr>
					<td><p>State:</p></td>
					<td><p>{{ $state }}</p></td>
				</tr>
				<tr>
					<td><p>Zip Code:</p></td>
					<td><p>{{ $zip_code }}</p></td>
				</tr>
				<tr>
					<td style="vertical-align:top"><p>Need to Know About:</p></td>
					<td><p>{{ implode(", " ,$needs) }}</p></td>
				</tr>
				<tr>
					<td><p>Special Requests:</p></td>
					<td><p>{{ $special_requests }}</p></td>
				</tr>
			</table>
		</body>
	</body>
</html>