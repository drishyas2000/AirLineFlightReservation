<!---
/****
*@flight view
*@Arsha
*@date
*@12/03/2021
******/
---->
<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking') }}  
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
<h1 class="text-center">FLIGHT DETAILS</h1>
<table class="table table-striped table-bordered table-hover table-info">
		<tr>
		    
			<td>Flight name</td>
			<td>Flight Number</td>
			<td>Departure</td>
			<td>Arrival</td>
            <td>Firstclass charge</td>
            <td>Economicclass charge</td>
            <td>Buisnessclass charge</td>
            <td>Seats in firstclass</td>
            <td>Seats in economicclass</td>
            <td>Seats in buisnessclass</td>
            
            
			
			</tr>
			@foreach ($users as $value)
<tr>

<td>{{ $value->fname }}</td>
<td>{{ $value->fno }}</td>
<td>{{$value->depcity}} </br> {{ $value->depdate }} </br> {{ $value->deptime }} </td>
<td>{{$value->arrcity}} </br> {{ $value->arridate }} </br> {{ $value->arritime }} </td>
<td>{{ $value->fcharge }}</td>
<td>{{ $value->echarge }}</td>
<td>{{ $value->bcharge }}</td>
<td>{{ $value->fseat }}</td>
<td>{{ $value->eseat }}</td>
<td>{{ $value->bseat }}</td>
</tr>
@endforeach
            </table>

			</x-app-layout>