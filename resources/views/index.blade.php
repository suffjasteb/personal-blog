<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Personal Blog</title>
  </head>
  <body class="h-full bg-black">


    <div class="bg-white">
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
                <li class="nav-item active ">
                  <a class="nav-link" href="/admin">create</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/course">Course<span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </nav>

        <div class="container mt-5">
          <div  class="jumbotron p-4 p-md-5 text-white rounded bg-dark d-flex align-items-center custom-bg" 
          style="background: url('{{ asset('img/alam1.jpg') }}') no-repeat center center / cover;">
          >
            <div class="col-md-6">
              <h1 class="display-4 font-italic">🚀 Journey of a Learner</h1>
              <p class="lead my-3">A space where I document my learning journey and discoveries</p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Discover More...</a></p>
            </div>
          </div>

          <h2>what i have explored : </h2>
  
  <div class="row mb-2">
      {{-- blog --}}
      @foreach ($posts as $post)
      <div class="col-md-6 d-flex align-items-center">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              @if ($post->image)
                  <div class="col-auto">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" style="max-height: 200px; object-fit: cover;" alt="{{ $post->title }}">
                  </div>
              @endif
              <div class="card-body d-flex flex-column">
                  <strong class="d-inline-block mb-2 text-primary">{{ $post->category ?? 'Uncategorized' }}</strong>
                  <h3 class="mb-0">{{ $post->title }}</h3>
                  <p><strong>Author:</strong> {{ $post->author_name }}</p>
                  <div class="mb-1 text-muted">{{ $post->created_at->format('M d, Y') }}</div>
                  <a href="{{ route('posts.show', $post->id) }}" class="mt-auto btn btn-primary">Continue reading</a>
              </div>
              {{-- deskripsi --}}
              <div class="container" >
                <p class="card-text mb-auto">{{ Str::limit($post->content, 300) }}</p>
              </div>
          </div>
      </div>
  @endforeach
  </div>
</div>
</div>

<hr>

{{-- profile --}}
<div class="container my-5" style="   display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    max-width: 900px;
    margin: 50px auto;">
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="{{asset('img/profile.jpeg')}}" alt="My Photo" class="img-fluid rounded">
    </div>
    <div class="col-md-6 profile-text">
      <p>
        Shafwan is an entrepreneur, developer, and content creator based in Sidoarjo. 
                He shares his journey of tech, business, and self-improvement.
      </p>
      <a href="/about" class="read-more">READ MORE</a>
    </div>
  </div>
</div>
      {{-- project --}}

      <div class="container my-5">
        <h2 class="text-center mb-4">Featured Project</h2>
        <div class="row">
          {{-- 1 --}}
          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm d-flex flex-column">
              <img src="{{asset("img/todo.png")}}">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title" >Task Manager with Laravel 11</h5>
                <p class="card-text flex-grow-1 ">A basic task manager to create, mark, and delete tasks. Built during my Laravel learning journey.</p>
                <a href="#" class="btn btn-primary btn-sm mt-auto ">View Project</a>
              </div>
            </div>
          </div>
          {{-- 2 --}}
          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm d-flex flex-column">
              <img src="{{asset("img/movie-app.png")}}">
              <div class="card-body d-flex flex-column ">
                <h5 class="card-title" >Movie Search App using PHP</h5>
                <p class="card-text flex-grow-1">A simple movie search app using external API and native PHP. My first dynamic web app.</p>
                <a href="#" class="btn btn-primary btn-sm mt-auto">View Project</a>
              </div>
            </div>
          </div>
          {{-- 3 --}}
          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm d-flex flex-column">
              <img src="{{asset("img/card-fe.png")}}">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title" >Developer Profile Card UI</h5>
                <p class="card-text flex-grow-1">A stylish and responsive profile card designed with HTML and CSS for practice.</p>
                <a href="#" class="btn btn-primary btn-sm mt-auto">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
        
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
