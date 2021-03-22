<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/style.css')}}">
    
</head>
<body>
@include('navbar')
<div class="container">
   <form >
        
<div class= " card bg-secondary  "  style="width:500px">
  <div class="card-body ">
          <div class="row">
          <div class="col-6">
                    <div class="form-group p-2 ">     
                      <input type="text"  class="form-control form-control-file" name="name" id="exampleFormControlFile1" placeholder="name" value="{{old('name')}}" >
                      </div>
                              <div class="form-group p-2">
                              <input type="email" name="email"   class="form-control form-control-file" id="exampleFormControlFile1"  placeholder="email" value="{{old('email')}}">
                              </div>
                                      <div class="form-group p-2">
                                        <input type="password" name="password"   class="form-control form-control-file" id="exampleFormControlFile1"  placeholder="password" value="{{old('password')}}">
                                      </div>
                                                <div class="form-group p-2">
                                                      <input type="submit" value="register">
                                                        <button class="bg-info"><a class="text-light" href ="login">login </a></button>
                                                  </div>
             </div>
             </div>                                      
      </div>
    </div>                      
   </form> 
   </div>
</body>
</html>