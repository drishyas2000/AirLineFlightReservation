<!---
/****
*@flight details
*@Arsha
*@date
*@10/03/2021
******/
---->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    
</head>
<body>
@include('navbar')
<h1 class="text-center">FLIGHT DETAILS</h1>
<div class="container">
   <form action="addflight" method="get"class=" border border-primary  " >
   <div class="result">
     @if(Session::get('success'))
     <div class="alert alert-success">
        {{Session::get('success')}}
      </div>  
     @endif

     @if(Session::get('fail'))
     <div class="alert alert-success">
        {{Session::get('fail')}}
        </div>
     @endif
           <div class="form-group p-2">
           @csrf
           <label for="exampleInputEmail1">Flight Name</label>
            <input type="text"  class="form-control form-control-file" name="fname" id="exampleFormControlFile1"  value="{{old('name')}}" >
            <span class="error text-danger">
            @error('name'){{$message}}@enderror
            </span>
           </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Flight Number</label>
                <input type="text" name="fno"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                
          <div class="form-group p-2">
          <label for="exampleInputEmail1">Departure</label>
          <select class="form-control" id="exampleFormControlSelect1" name="departure">
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
          @foreach($airport as $value)
     <option value="{{ $value->id }}">{{ $value->city }}</option>
     @endforeach   </select>
            <span class="error text-danger">
            @error('password'){{$message}}@enderror
            </span>
           </div>
           <div class="form-group p-2">
                <label for="exampleInputEmail1">Departure date</label>
                <input type="date" name="depdate"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Arrival date</label>
                <input type="date" name="arridate"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Departure time</label>
                <input type="time" name="deptime"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Arrival time</label>
                <input type="time" name="arritime"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
           <div class="form-group p-2">
                <label for="exampleInputEmail1">First class Charge</label>
                <input type="text" name="fcharge"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Economic class Charge</label>
                <input type="text" name="echarge"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Buisness class Charge</label>
                <input type="text" name="bcharge"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">First class seats</label>
                <input type="text" name="fseat"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Economic class seats</label>
                <input type="text" name="eseat"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Buisness class seats</label>
                <input type="text" name="bseat"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
           
            <div class="form-group p-2">
            <button type="submit" class="btn btn-info mb-2">Submit</button>
                        
                        </div> 
    </div>                    
   </form> 
   </div>

</body>
</html>