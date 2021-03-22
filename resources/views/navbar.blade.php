<!---
/****
*@login
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
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/navstyle.css')}}">
</head>
<body class="admin">
  <nav class="navbar navbar-expand-lg menubar ">
  <div class="container ">
  
  <h1 class="navbar-brand text-white">Fly Away</h1>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto topnow">
      <li class=" navbar-item"><a  href="adminDash" class="nav-link text-white fs-4">Home</a></li>
      <li class=" navbar-item"><a  href="#" class="nav-link text-white fs-4">Airport Details</a>
         <div class="submenu">
              <ul>
                <li> <a href="/airport">Add</a></li>
                <li> <a href="/airpotview">View</a></li>
              </ul>
          </div>
         </li>
      <li class=" navbar-item"><a   class="nav-link text-white fs-5">Flight Details</a>
      <div class="submenu">
              <ul>
                <li> <a href="/flight">Add</a></li>
                <li> <a href="/flightview">View</a></li>
              </ul>
          </div>
         </li>
      <li class=" navbar-item"><a  class="nav-link text-white fs-5">Notification</a>
      <div class="submenu">
              <ul>
                <li> <a href="/notification">Add</a></li>
                <li> <a href="/notificationview">View</a></li>
              </ul>
          </div>
         </li>
      <li class=" navbar-item"><a  href="/loghome" class="nav-link text-white fs-5">Logout</a></li>
      
      
    </ul>

  </div>
  </div>
</nav>

      
</body>
</html>