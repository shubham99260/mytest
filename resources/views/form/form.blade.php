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
        <div class="form-group">
          <label for="">Name</label>
          <input type="text"
            class="form-control" name="name" id="name" aria-describedby="helpId" value="{{ old('name') }}" placeholder="Enter Name">
        <span class="text-danger">
          @error('name')
          {{ $message }}
          @enderror
        </span>
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="text"
            class="form-control" name="email" id="email" value="{{ old('name') }}" aria-describedby="helpId" placeholder="Enter Email">
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
          <span class="text-danger">
          @error('email')
          {{ $message }}
          @enderror
        </span>
        </div>

        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Enter Password">
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
          <span class="text-danger">
          @error('password')
          {{ $message }}
          @enderror
        </span>
        </div>

        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="password" class="form-control" name="c_password" id="c_password" aria-describedby="helpId" placeholder="Enter Password">
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
          <span class="text-danger">
          @error('password')
          {{ $message }}
          @enderror
        </span>
        </div>

        <button class="btn btn-primary">Submit</button>
        </form>
        </div>

      
      
   </body>
</html>