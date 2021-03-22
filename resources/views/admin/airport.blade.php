<!---
/****
*@airport details
*@Drishya
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
    
</head>
<body>
@include('navbar')
<h1 class="text-center">AIRPORT DETAILS</h1>
<div class="container">
   <form action="addairport" method="get"class=" border border-primary  " >
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
           <label for="exampleInputEmail1">Airport Name</label>
            <input type="text"  class="form-control form-control-file" name="aname" id="exampleFormControlFile1"  value="{{old('name')}}" >
            <span class="error text-danger">
            @error('name'){{$message}}@enderror
            </span>
           </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Abbreviation</label>
                <input type="text" name="abr"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">City</label>
                <input type="text" name="city"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
          <div class="form-group p-2">
          <label for="exampleInputEmail1">State</label>
          <select class="form-control" id="exampleFormControlSelect1" name="state">
      <option>Kerala</option>
      <option>Rajasthan</option>
      <option>Assam</option>
      <option>Thamil Nadu</option>
      <option>Goa</option>
      <option>Gujarat</option>
      <option>Andhra Pradhesh</option>
    </select>
            <span class="error text-danger">
            @error('password'){{$message}}@enderror
            </span>
           </div>
           <div class="form-group p-2">
                <label for="exampleInputEmail1">Contact Number</label>
                <input type="text" name="phone"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
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