<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acuity Ugnada | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!--font awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--css -->
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>




    <body>
      @section('navbar')
            <nav class="navbar navbar-expand-md fixed-top navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">
                      <img src="img/logo.png" alt="Acuity Uganda">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            .
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our Work</a>
                            </li>
                            .
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            .
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @show

        @yield('content')
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <p class="small">weblotts</p>
              </div>
            </div>
          </div>
        </footer>
    </body>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</html>
