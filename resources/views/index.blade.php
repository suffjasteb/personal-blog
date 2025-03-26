<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </nav>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">🚀 Journey of a Learner</h1>
      <p class="lead my-3">A space where I document my learning journey and discoveries</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Discover More...</a></p>
    </div>
  </div>

  
  <div class="row mb-2">
      {{-- blog --}}
      @foreach ($posts as $post)
      <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              @if ($post->image)
                  <div class="col-auto">
                      <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" style="max-height: 200px; width: auto;" alt="{{ $post->title }}">
                  </div>
              @endif
              <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">{{ $post->category ?? 'Uncategorized' }}</strong>
                  <h3 class="mb-0">{{ $post->title }}</h3>
                  <div class="mb-1 text-muted">{{ $post->created_at->format('M d, Y') }}</div>
                  <p class="card-text mb-auto">{{ Str::limit($post->content, 100) }}</p>
                  <a href="#" class="stretched-link">Continue reading</a>
              </div>
          </div>
      </div>
  @endforeach
  
  
    
  </div>
</div>






        </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
