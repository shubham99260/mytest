<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body> 
    
<div class="container">
    <form action="{{ route('registration_store') }}" method="post">
    @csrf
    <h1 class="text-center">Registration</h1>
    <x-input name="name" type="text" label="Name" placeholder="Enter Name"/>
    <x-input name="email" type="email" label="Email" placeholder="Enter Email"/>
    <x-input name="password" type="password" label="Password" placeholder="Enter Password"/>
    <x-input name="c_password" type="password" label="Confirm Password" placeholder="Enter Confirm Password"/>
    

    <button class="btn btn-primary">Submit</button>
    </form>
</div>

      
      
   </body>
</html>