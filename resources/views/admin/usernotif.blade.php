<!---
/****
*@notification view
*@Elizabeth
*@date
*@13/03/2021
******/
---->
<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notification') }}  
        </h2>
    </x-slot>
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

<table class="table table-striped table-bordered table-hover table-info">
		<tr>
		    
			<td>Notification</td>
			<td>Date</td>
            
			
			
			</tr>
			@foreach ($users as $value)
<tr>

<td>{{ $value->notification }}</td>
<td>{{ $value->notdate }}</td>

</tr>
@endforeach
            </table>

			</x-app-layout>