<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/PagrindinisBoot.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ url('css/mdb.min.css') }}" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body {
            height: 100%;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #304a74;
        }

        footer.page-footer {
            background-color: #304a74;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }

        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }

        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }
        /*Caption*/

        .flex-center {
            color: #fff;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Meniu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                            </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>


    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">

        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>



        <div class="carousel-inner" role="listbox">


            <div class="carousel-item active view hm-black-light" style="background-image: url('img/Background.jpg'); background-repeat: no-repeat; background-size: cover;">

                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Nuostabiausi kokteiliai nepamirštamiems vakareliams</h1>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="carousel-item view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover;">

            </div>

            </div>

        </div>

    </div>

    <br>

    <div class="container">

          @for($i=0; $i<count($coctails); $i++)

              @if((($i+1)%3)==1)
                <div class="row my-5">
              @endif

              <div class="col-lg-4">
                  <div class="card wow fadeIn">
                      <img class= "img-fluid" src="{{ Storage::url($coctails[$i]->photo) }}">
                      <div class="card-body">
                          <h4 class="card-title">{{ $coctails[$i]->title }}</h4>
                          <a href="{{ url('/AdamsAppleRecipeCustomer') }}" class="btn btn-info">Peržiureti</a>
                          <a href="{{ url('/pranesimas') }}" class="btn btn-info">Gaminti</a>
                          <form method="post" action="{{ route('coctails.destroy', $coctails[$i]->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-info" type="submit">Ištrinti</button>
                          </form>
                      </div>
                  </div>
              </div>

              @if((($i+1)%3)==0 || ($i+1)==count($coctails))
                </div>
              @endif

            @endfor

    </div>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>
