<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 User Registration with Email Verification - AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
              body {
                min-height:100vh;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            background-image:url('/assets/img/bg.png');
            background-size: cover;
            /* Remove overflow: hidden; to enable scrolling */
             }
        nav{
            /* padding: 5px; */
            text-align: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(180deg, rgba(255,0,0,0.8562018557422969) 1%, rgba(255,0,0,1) 49%, rgba(255,0,0,0.8449973739495799) 92%, rgba(0,0,0,0.3660057773109243) 100%);
            display:flex;
            justify-content: space-between;
            /* padding:10px 0 0 20px; */
            padding: 0 !important;
        }
        .navbar-brand{
            color:#fff;
            display:flex;
         
        }
        .header-title{
               padding:10px;
               font-weight: 700;
            }
            .nav-link{
                color:#fff;
            }
        @media only screen and (max-width: 499px) {
            .navbar>.container{
                flex-direction: row-reverse;
            }   
            .header-title{
                display:none;
            }
         }
         @media only screen and (min-width: 1025px) {
            .card-custom{
                margin-top: 10rem!important;
            }
         }
.container{
    color:#000000;
}
         
    .btn-grad {
            background-image: linear-gradient(to right, #e52d27 0%, #b31217  51%, #e52d27  100%);
            padding: 6px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 7px;
             display: inline-block;;
            border: none;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
          .card-custom{
            border-radius:5px !important;
            border:none;
            box-shadow: 0 4px 8px 0 rgb(255 255 255 / 30%), 0 6px 20px 0 rgb(255 255 255 / 25%);
          }
         .card-header{
            border-radius:5px !important;
            padding:8px;
            background-image: linear-gradient(to right, #e52d27 0%, #b31217  51%, #e52d27  100%);
            border:none;
            color:#fff;
         }
         .card-body-custom{
            padding:20px;
            background-color: #000;
            color: #fff;
            opacity: .9;
         }

         .container-edit{
            margin-top:8rem;
            padding:2rem;
            background-color: #000;
            color: #fff;
            opacity: .9;
         }
  /* Add this CSS to your existing stylesheet or create a new one */

.logout-button {
    margin-left:1rem;
    display: inline-block;
    padding: 8px 16px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border: 2px solid #dc3545; /* Bootstrap danger color */
    color: #dc3545; /* Bootstrap danger color */
    background-color: transparent;
    border-radius: 5px;
    background-color:#fff;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.logout-button:hover {
    background-color: #dc3545; /* Bootstrap danger color on hover */
    color: #fff; /* White text on hover */
}
.container-profile{
    margin-top:1rem;
}
.container{
    width:100%;
    max-width:90% !important;
}
.card-profile{
    max-width: 250px;
}
    </style>
</head>
<body>

    <nav class="navbar login-form navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ URL('/') }}"><img style = "height:4rem;" src="{{ URL::to('/assets/img/logo.png') }}"><h2 class="header-title">Christmas Wishing App</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto"">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else    
                    <li class="nav-item dropdown" style="display: flex;text-wrap: nowrap;">
                        <a class="nav-link dropdown-toggle-test" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{ Auth::user()->name }}
                        </a>
                        <!-- <ul class="dropdown-menu"> -->
                        <!-- <li> -->
                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            style="cursor: pointer;"
                        >
                            <button type="button" class="btn btn-outline-danger btn-sm logout-button">
                                Logout
                            </button>
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        <!-- </li> -->
                        <!-- </ul> -->
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    <div class="container">
        @yield('content')
    </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>