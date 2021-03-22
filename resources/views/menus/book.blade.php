<!---
/****
*@booking form
*@Leena CB
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
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/style.css')}}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                <div class="container ">
                <form action="{{ url('../bookAction')}}" method="get" class="border border-primary" >
                {{ csrf_field() }}
                <input type="hidden" name="fid" value="{{$user->id}}">
                <input type="hidden" name="deptime" value="{{$user->deptime}}">
                <input type="hidden" name="departure" value="{{$user->departure}}">
                <input type="hidden" name="arrival" value="{{$user->arrival}}">
                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
   <div class="result">
     @if(Session::get('success'))
     <div class="alert alert-success">
        Your booking is Successful!<br>
        Your Ticket No is : {{Session::get('success')}}
      </div>  
     @endif

     @if(Session::get('fail'))
     <div class="alert alert-success">
        {{Session::get('fail')}}
        </div>
     @endif
           <div class="form-group p-2">
           @csrf
           <label for="exampleInputEmail1">Flight Number</label>
            <input type="text"  class="form-control form-control-file" name="fno" id="exampleFormControlFile1"  value="{{$user->fno}}" >
            <span class="error text-danger">
            @error('name'){{$message}}@enderror
            </span>
           </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Flight Name</label>
                <input type="text" name="fname"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->fname}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                
           <div class="form-group p-2">
                <label for="exampleInputEmail1">Departure Date</label>
                <input type="date" name="depdate"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->depdate}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Passenger Name</label>
                <input type="text" name="pname"   class="form-control form-control-file" id="exampleFormControlFile1" value={{ Auth::user()->name }}>
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label> Gender</label>
                <input class="form-check-input"type="radio"name="gender"id="flexRadioDefault1" value="female" >
                 <label class="form-check-label" for="flexRadioDefault1"> female</label>                 
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                
                <input class="form-check-input" type="radio" name="gender" id="male" vaue="male">
                <label class="form-check-label" for="male">male </label>
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" name="age"   class="form-control form-control-file" id="exampleFormControlFile1">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Class</label>
                <select name="class">
                <option value="bussiness">bussiness</option>
                <option value="economic">economic</option>
                <option value="first">first</option>
                </select>
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                
                
            <div class="form-group p-2">
                     <input type="submit" value="Book"><a href="{{url('payment')}}" class="btn btn-block btn-warning">pay</a>
                        
                        </div> 
    </div>                    
   </form> 
  
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
