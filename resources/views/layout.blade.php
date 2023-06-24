<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/content.css')}}">
<style>
  .footer{
   
    color:white;
    position:absolute;
    bottom:0;
    width:100%;
    text-align: center;
  padding: 3px;
  background-color: black;
  
   }

   .content{
      width:70%;
      margin:auto
   }

   /* .body{
      background-color:green;
      height:47rem;
      width:100%;
   } */
</style>

</head>
<body>


<div class="header">
   @section('header')
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="/">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="user">Users List </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create">create account</a>
      </li>
     
      
    </ul>
    
  </div>
</nav>
   @show
</div>


<div class="content">
@section('content')
 
   @show
</div>


<div class="footer">
@section('footer')
<h3>Dashboard Footer</h3>
@show
</div>



</body>
</html>