<!---
/****
*@search flight
*@Arsha
*@date
*@12/03/2021
******/
---->
<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }} 
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/style.css')}}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                  <form action="/searchAction" method="get">
                  <div class="form-group p-2">
                  @if(isset($airport))
          <label for="exampleInputEmail1">Departure</label>
          <select class="form-control" id="exampleFormControlSelect1" name="departure">
          <option value="0">-select-</option>
     @foreach($airport as $value)
     <option value="{{ $value->id }}">{{ $value->city }}</option>
     @endforeach
    </select>
            <span class="error text-danger">
            @error('password'){{$message}}@enderror
            </span>
           </div>
           <div class="form-group p-2">

          <label for="exampleInputEmail1">Arrival</label>
          <select class="form-control" id="exampleFormControlSelect1" name="arrival">
         <option value="0">-select-</option>
          @foreach($airport as $value)
     <option value="{{ $value->id }}">{{ $value->city }}</option>
     @endforeach   </select>
     <input type="submit" name="search" value="search">
           
     @endif
            
           </div>
                                    </form>
                </div>
               

                @if(isset($users))
                <h1 class="text-center">AIRPORT DETAILS</h1>
<table class="table table-striped table-bordered table-hover table-info">
		<tr >
		    
			<td rowspan="2">Flight No</td>
			<td rowspan="2">Name</td>
			<td rowspan="2">Depature</td>
			<td rowspan="2">Arrival</td>
			<td colspan="3">Available Seats(Cost per Seat)</td>
			<td rowspan="2">Book</td>
			</tr>
            <tr>        
            
            <td>Buisness</td>
            <td>Economic</td>
            <td>First</td>
            
            </tr>
            <?php ?>
           
			@foreach ($users as $value)
            
<tr>
  
<td>{{ $value->fno }}</td>
<td>{{ $value->fname }}</td> @endforeach
<td>@foreach($dep_city as $dep) {{$dep}} @endforeach @foreach ($users as $value)</br>{{$value->depdate}}</br>{{$value->deptime}}</td>
<td>{{ $value->arr_city }}</br>{{$value->arridate}}</br>{{$value->arritime}}</td>
<td>{{ $value->bseat }}({{$value->bcharge}})</td>
<td>{{ $value->eseat }}({{$value->echarge}})</td>
<td>{{ $value->fseat }}({{$value->fcharge}})</td>
<td><a href={{"/booking/".$value->fid}} class="btn btn-block btn-primary">book</a></td>
</tr>
@endforeach
            </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
