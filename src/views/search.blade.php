<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.80.0">
        <title>Pricing example · Bootstrap v5.0</title>
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>


        <!-- Custom styles for this template -->
        <link href="pricing.css" rel="stylesheet">
    </head>
    <body>

        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">Nahorr Analytics</p>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
        </header>

        <main class="container">

            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Gif Search</h1>
                <p class="lead">
                    <form action="{{route('search')}}" method="GET">
                        @csrf
                        <div class="input-group mb-3">

                            <select class="input-group-text" aria-label="Default select example" name="search_param" >
                                <option value="search" selected>General Search</option>
                                <option value="trending">Trending</option>
                            </select>

                            <input type="text" name="search" class="form-control">

                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>

                        </div>
                    </form>
                </p>
            </div>
            <h6>Search Results for: {{$search}}({{$param}})</h6>
            <hr>
            <div class="album py-5 bg-light">
                <div class="container">

                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach($data as $img)

                        <div class="col">
                            <div class="card shadow-sm">

                                <img src="{{$img['images']['downsized']['url']}}" class="rounded" alt="..." width="400px" height="250px">

                            </div>
                        </div>
                    @endforeach



                  </div>
                </div>
              </div>

        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>
</html>

