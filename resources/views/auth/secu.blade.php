<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Security</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container m-5 row">
  @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Attention - </strong>  {{ $error }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          
            @endforeach
          @endif

          @if(session('success'))

                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong> {{ session('success') }} </strong>  
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                @endif
      <div class="card col-5 m-2 p-2">
        <h3 class="text-center">Register</h3>

        

       
        <form action="{{route('auth.register')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>

      <div class="card col-5 m-2 p-2 align-item-center h100">
        <h3 class="text-center">Register</h3>
        <form action="{{route('auth.login')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>

     

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>