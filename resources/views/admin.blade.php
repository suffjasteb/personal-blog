<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is_Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

     {{-- navbar --}}

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Shafwan.io</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/create">create</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Technology</a>
                <a class="dropdown-item" href="#">Finance</a>
                <a class="dropdown-item" href="#">Jobs</a>
                <a class="dropdown-item" href="#">News</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
    </nav>

   <div class="container">
    <img src="{{ asset('img/user.png') }}" alt="">
    <div class="bg-white">
        @if(session('success'))
        <div style="color : green" >{{session('success') }}</div>
        @endif
    
        {{-- Di Blade, session('error') tidak akan menangkap withErrors() secara langsung.
    Laravel menyimpan withErrors() dalam errors, bukan di session(). Jadi di Blade harus pakai: ($errors->has('error') --}}
    
        @if($errors->has('error'))
        <div style="color : red" >{{ $errors->first('error') }}</div>
        @endif
       
        <h1>Login Page</h1>
    
        {{-- Form ini akan mengirim data ke /admin menggunakan metode POST --}}
        <form action="{{ url('/admin') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
   </div>


</body>
</html>
