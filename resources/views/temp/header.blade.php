<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Beginnery is a platform that focuses and provides education about digital space to helps the youngsters to prepare their future career in the digital creative industry" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords"
        content="beginnery, education, creative, marketing, graphic design, design, creative industry " />
    <meta property="og:title" content="Beginnery.co | We Should Begin" />
    <meta property="og:description"
        content="Beginnery is a platform that focuses and provides education about digital space to helps the youngsters to prepare their future career in the digital creative industry" />
    <meta property="og:image" content="/assets/reginnery_logo.png" />
    <meta property="og:url" content="https://beginnery.co/" />
    <meta property="og:site_name" content="Beginnery.co | We Should Begin" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="/assets/reginnery_logo.png" />
    <meta name="twitter:description"
        content="Beginnery is a platform that focuses and provides education about digital space to helps the youngsters to prepare their future career in the digital creative industry" />
    <meta name="twitter:site" content="@beginnery.co" />
    <meta name="twitter:creator" content="@beginnery.co" />
    <title>Beginnery.co | We Should Begin</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#949cc7">
    <meta name="msapplication-TileColor" content="#949cc7">
    <meta name="theme-color" content="#ffffff">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Numans&family=Nunito+Sans&family=Spartan&display=swap"
        rel="stylesheet">
     <link rel="stylesheet" href="/css/tes.css">
    <style>
        /* Show it is fixed to the top */
        body {
            padding-top: 56px;
            background-color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
        <div class="container-fluid container">
            <a href="/" class="d-flex align-items-center mb-md-0 me-auto text-dark text-decoration-none">
                <img class="me-1" height="32px" src="/assets/reginnery_logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav mb-2 mb-md-0 ">
                    <li class="nav-item fw-semibold mx-3 text-uppercase"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item fw-semibold mx-3 text-uppercase"><a href="/#collaborate"
                            class="nav-link">Service</a>
                    </li>
                    <li class="nav-item fw-semibold mx-3 text-uppercase"><a href="/#event" class="nav-link">Event</a>
                    </li>
                    <li class="nav-item fw-semibold mx-3 text-uppercase"><a href="/#content" class="nav-link">Class</a>
                    </li>
                    <li class="nav-item fw-semibold mx-3 text-uppercase"><a href="/#contact" class="nav-link">Contact</a>
                    </li>
                    @if (Auth::user() != null)
                    <div class="position-relative">
                        <li class="nav-item fw-semibold mx-3 text-uppercase"><button id="userBtn" class="nav-link bg-transparent border-0 fw-bold text-black"><span class="text-capitalize fw-normal" >Hello, </span>{{Auth::user()->name}}</button></li>
                        <div class="p-3 position-absolute bg-white rounded-3 shadow d-none" id="popOut">
                            @if (Auth::user()->role == "admin")
                                <a href="/a/dashboard" class="btn btn-link text-decoration-none text-dark">Dashboard</a>
                            @endif
                            <a href="/auth/out" class="btn btn-link text-decoration-none text-danger">Logout</a>
                        </div>
                    </div>
                    <script>
                        let userBtn = document.getElementById("userBtn");
                        let popOut = document.getElementById("popOut");

                        userBtn.addEventListener("click",()=>{
                            popOut.classList.toggle("d-none");
                        })
                    </script>
                    @else
                    <li class="nav-item fw-semibold mx-3 text-uppercase"><a href="/auth" class="btn bg-blue text-white">Log in</a>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>
