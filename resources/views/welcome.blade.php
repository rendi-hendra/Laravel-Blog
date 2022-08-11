<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        .me-6 {
            margin-right: 5rem !important;
        }

        .mtt-6 {
            margin-top: 13rem !important;
        }

        .mb-6 {
            margin-bottom: 17rem !important;
        }

        .mb-7 {
            margin-bottom: 14rem !important;
        }

        .navbar-brand {
            font-family: 'Noto Sans', sans-serif !important;
            font-size: 25px;
        }

        body {
            font-family: 'Noto Sans', sans-serif;
        }

        .regis:hover {
            color: black !important;
        }

        .regis2:hover {
            color: black !important;
        }

        .mt-7 {
            margin-top: 17rem;
            height: 50rem;
        }

        .h-100 {
            /* height: 50rem !important; */
            padding-bottom: 50rem;
        }

        .lf:hover {
            color: #4267B2 !important;
        }

        .lw:hover {
            color: #1DA1F2 !important;
        }

        .lig:hover {
            background-color: red;

            /* Create the gradient. */
            background-image: linear-gradient(45deg, #f3ec78, #af4261);

            /* Set the background size and repeat properties. */
            background-size: 100%;
            background-repeat: repeat;

            /* Use the text as a mask for the background. */
            /* This will show the gradient as a text color rather than element bg. */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
        }

        .lwa:hover {
            color: #25D366 !important;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #414141;
        }

        ::-webkit-scrollbar {
            width: 15px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }


        @media (max-width: 575.98px) {

            .mobile .igm::before {
                font-size: 12px;
                margin-right: -5px;
            }

            .mobile .igm {
                font-size: 10px;

            }

            .copy {
                font-size: 12px;
            }

            .hmobile {
                font-size: 10px;
                margin-right: 10px;
                margin-left: 10px;
            }

            .hjmobile {
                font-size: 24px;
            }

            .btmobile {
                /* display: none !important; */
                font-weight: normal !important;
                font-size: 12px !important;
                /* padding: 5px !important; */
                padding-right: 8px !important;
                padding-left: 8px !important;
                margin-top: -2px !important;
            }

            .bmobile {
                display: block !important;
            }

            .rmobile {
                display: none;
            }
        }
    </style>

    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</head>

<body class="bg-dark text-white">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container text-white">
            <a class="navbar-brand fw-bolder text-white" href="/">ICT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <!-- <div class="navbar-nav ms-5 fw-semibold">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                    <a class="nav-link active text-white d-none bmobile" aria-current="page"
                        href="{{ route('register') }}">Register</a>
                    {{-- <a class="nav-link ms-3 text-white" href="#">About</a> --}}
                </div> -->
                <div class="navbar-nav ms-auto rmobile">
                    <a href="{{ route('register') }}" class="nav-link btn btn-outline-light px-4 fw-bolder text-white regis">Register</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar --}}

    {{-- Header --}}
    <div class="text-center mtt-6 mb-7 hmobile">
        <h1 class="text-uppercase fw-bold hjmobile">Ingin cari teman</h1>
        <p class="mt-3 lh-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, non.<br> Lorem ipsum
            dolor sit ametconsectetur adipisicing elit.</p>
        <a href="{{ route('login') }}" class="btmobile btn btn-outline-light text-white regis2 fs-6 px-4 fw-bolder mt-2">
            LOGIN
        </a>
    </div>

    {{-- Footer --}}
    <footer>
        <div class="bg-dark pb-3 position-relative w-100 h-auto text-white mobile">
            <div class="d-flex p-3 container text-uppercase fw-bold justify-content-around align-items-center">
                <div class="igm">
                    <a href="https://www.instagram.com/rendihndra/" target="blank" class="lig text-decoration-none text-white">
                        <i class="bi bi-instagram igm" style="font-size: 20px; margin-right: 10px;"></i>
                        Instagram
                    </a>
                </div>
                <div class="igm">
                    <a href="https://twitter.com/RendiHendra2" target="blank" class="lw text-decoration-none text-white">
                        <i class="bi bi-twitter igm" style="font-size: 20px; margin-right: 10px;"></i>twitter
                    </a>
                </div>
                <div class="igm">
                    <a href="https://www.facebook.com/sri.wiyanti.5243/" target="blank" class=" lf text-decoration-none text-white">
                        <i class="bi bi-facebook igm" style="font-size: 20px; margin-right: 10px;"></i>
                        Facebook
                    </a>
                </div>
                <div class="igm">
                    <div class="text-decoration-none text-white lwa">
                        <i class="bi bi-whatsapp igm" style="font-size: 20px; margin-right: 10px;"></i>
                        +62 895-2425-0044
                    </div>
                </div>
            </div>
            <div class="text-center copy">Made by Rendi Hendra &copy; 2022</div>
        </div>
    </footer>
    {{-- Footer --}}





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>