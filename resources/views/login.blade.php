<!---
/****
*@login
*@Drishya
*@date
*@12/03/2021
******/
---->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <form action="check"  class="text-center border border-primary">
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
     
<h1>Login form</h1>
  <div class="form-group p-2">
  @csrf
 <input type="email" name="email" placeholder="email"   class="form-control form-control-file"id="exampleFormControlFile1">
    <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
   </div>
   <div class="form-group p-2">  
      <input type="password" name="password"  placeholder="password" class="form-control form-control-file"id="exampleFormControlFile1">
      <span class="error text-danger">
            @error('password'){{$message}}@enderror
            </span>
    </div>
    <div class="form-group p-2">  
    <button type="submit" class="btn btn-info mb-2">Login</button>
        </div>
</form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
