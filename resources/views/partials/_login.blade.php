
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front_ent/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front_ent/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front_end/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front_end/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar bg-secondary  sticky-top">
        <div class="mx-auto">
            <h1>Forum Tech</h1>
        </div>
    </nav>

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Form Start -->

        <div class="container-fluid pt-10 px-4 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-sm-6 col-xl-6">
                <div class="bg-secondary p-4 rounded-pill">

                    <div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                    </div>

                    <div class=" d-flex align-items-center">
                        <h2 class="mx-auto">Connectez-vous</h2>
                    </div><br>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-center">
                            <input type="email" class="" name="loginemail" id="email" required>
                        </div>

                        <div class="mb-3 text-center">
                            <input type="password" class="" name="loginpassword" id="password" required>
                        </div>

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                        </div>

                        <p class="text-center  mx-auto">Si pas de compte, <a href="{{ route('signup') }}">je minscrire</a></p>
                    </form>

                </div>
            </div>
        </div>

        <!-- Form End -->

        <!-- Back to Top -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front_end/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('front_end/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front_end/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('front_end/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_end/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('front_end/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('front_end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front_end/js/main.js') }}"></script>
</body>

</html>

