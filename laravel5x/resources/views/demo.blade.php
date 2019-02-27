<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo view</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		.chan{
			background-color: pink;
		}
		.le{
			background-color: yellow;
		}
	</style>
</head>
<body>
	<h1> demo view </h1>
	{{--<p>Name : {{ $info['name'] }}</p>
	<p>Age : {{ $info['age'] }}</p>--}}
	{{--  <p>Money : {{ $m }}</p>--}}
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th>MSV :</th>
				<th>Name :</th>
				<th>Age :</th>
				<th>Sdt :</th>
				<th>Money :</th>
			</tr>
		</thead>
		<tbody>
			@php
				$total = 0;
			@endphp
			@foreach ($info as $key => $item)
				@php
					$total +=$item['money'];	
				@endphp
				<tr class ="{{ $key % 2 == 0 ? 'chan' : 'le' }}">
					<td>{{ $item['MSV'] }}</td>
					<td>{{ $item['name'] }}</td>
					<td>{{ $item['age'] }}</td>
					<td>{{ $item['phone'] }}</td>
					<td>{{ number_format($item['money']) }}</td>
				</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td colspan="4">Total money:</td>
				<td>{{ number_format($total) }}</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>