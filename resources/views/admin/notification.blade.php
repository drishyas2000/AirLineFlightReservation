<!---
/****
*@notification
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
    
</head>
@include('navbar')
<body>
<h1 class="text-center">NOTIFICATION</h1>
<div class="container">
   <form action="addnotification" method="get"class=" border border-primary  " >
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
           <label for="exampleInputEmail1">Notification</label>
            <textarea class="form-control form-control-file" name="notification" id="exampleFormControlFile1"></textarea>
            <span class="error text-danger">
            @error('name'){{$message}}@enderror
            </span>
           </div>
                <div class="form-group p-2">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" name="notdate"   class="form-control form-control-file" id="exampleFormControlFile1">
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