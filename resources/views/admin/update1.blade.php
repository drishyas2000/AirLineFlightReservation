<!---
/****
*@flight updation
*@Arsha
*@date
*@11/03/2021
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
<h1 class="text-center">FLIGHT DETAILS</h1>
<div class="container">
   <form action="/update1Action" method="post" class="border border-primary" >
   <input type="hidden" name="id" value="{{$user->id}}">
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
            <input type="text"  class="form-control form-control-file" name="fname" id="exampleFormControlFile1"  value="{{$user->fname}}" >
            <span class="error text-danger">
            @error('name'){{$message}}@enderror
            </span>
           </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Flight Number</label>
                <input type="text" name="fno"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->fno}}">
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
                <label for="exampleInputEmail1">Arrival Date</label>
                <input type="date" name="arridate"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->arridate}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Departure Time</label>
                <input type="time" name="deptime"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->deptime}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Arrival Time</label>
                <input type="time" name="arritime"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->arritime}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Firstclass charge</label>
                <input type="text" name="fcharge"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->fcharge}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Economicclass charge</label>
                <input type="text" name="echarge"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->echarge}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Buisnessclass charge</label>
                <input type="text" name="bcharge"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->bcharge}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
           <div class="form-group p-2">
                <label for="exampleInputEmail1">Seats in Firstclass</label>
                <input type="text" name="fseat"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->fseat}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Seats in Economicclass</label>
                <input type="text" name="eseat"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->eseat}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Seats in Buisnessclass</label>
                <input type="text" name="bseat"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->bseat}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>
            <div class="form-group p-2">
                        <button type="submit" class="btn btn-info mb-2" value="update">Submit</button>
                        
                        </div> 
    </div>                    
   </form> 
   </div>
</body>
</html>




