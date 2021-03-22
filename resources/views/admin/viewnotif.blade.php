<!---
/****
*@view notification by admin
*@Elizabeth
*@date
*@12/03/2021
******/
---->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
	
	/*table,td{
		padding: 20px;
		font-size: 20px;
		border: 1px solid red;
		border-collapse:collapse;
	
	}*/
	*{
	padding:0px;
	margin:0px;
}
	.bi{
	background-image:url("../img/");
	background-size:cover;
}

h1{
	text-align: center;
	color: red;
	font-size: 50px;
}
</style>
    
</head>
<body>
@include('navbar')
<h1 class="text-center">NOTIFICATION</h1>
<table class="table table-striped table-bordered table-hover table-info">
		<tr>
		    
			<td>Notification</td>
			<td>Date</td>
			<td>Action</td>
			
			
			</tr>
			@foreach ($users as $value)
<tr>

<td>{{ $value->notification }}</td>
<td>{{ $value->notdate }}</td>
<td><a href={{"deletenotif/".$value->id}} class="btn btn-block btn-danger">Delete</a></td>
</tr>
@endforeach
            </table>

</body>
</html>