<!---
/****
*@ticket form  
*@Arsha
*@Design
*@Elizabeth
*@date
*@13/03/2021
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
    body {
    background-color: #000000
}

.bg-blue {
    background: blue
}

.dotted-line {
    border: 1px dashed #fff
}

.img-fluid {
    width: 114px;
    height: auto
}

.bg-top {
    background: #8E24AA
}
</style>

<div class="container ">
  
     <div class="container">
        <div class="card">
           <div class=" text-center card-body">
                <form action="ticketSearch" class="form-inline " method="get"class=" border border-primary" >
                    @csrf
                    <div class="form-group p-2">
                        <label for="exampleInputEmail1">Ticket Number</label>
                        <input type="text" name="tno"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{ old('tno') }}"></br>
                        <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                    </div></br>
                        <input type="submit" name="seacrh" value="search">
                   
                </form> 
                @if(isset($shares))
               
           @foreach($shares as $row1)
           <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body d-flex flex-column justify-content-between text-white p-0">
                    <div class="p-4 bg-top">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-column justify-content-between align-items-center">
                                <h1>{{$row1->city}}</h1><span class="mb-2"></span> {{$row1->abr}}<span>{{$row1->depdate}}</span><span>{{$row1->deptime}}</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center">TO</div>
                            <div class="d-flex flex-column justify-content-between align-items-center">
                                <h1>{{$arriv->city}}</h1><span class="mb-2"> {{$arriv->abr}}</span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-danger p-4">
                        <div class="d-flex flex-column justify-content-between">
                            <div class="d-flex flex-row justify-content-between text-center">
                                <div><span class="d-block font-weight-bold">FlightNo</span><span> {{$row1->fno}}</span></div>
                                <div><span class="d-block font-weight-bold">Gate</span><span>12</span></div>
                                <div><span class="d-block font-weight-bold">Terminal</span><span>B</span></div>
                                
                            <div class="doted-lines">
                                <hr class="dotted-line">
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-column">
                                    <div><span class="d-block font-weight-bold">Passenger</span><span>{{ Auth::user()->name }}</span></div>
                                    <div class="mt-3"><span class="d-block font-weight-bold">SeatNo</span><span>{{$row1->seatNo}}</span></div>
                                   
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
             
          @endif
   </x-app-layout>