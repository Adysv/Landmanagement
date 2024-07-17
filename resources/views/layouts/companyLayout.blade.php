<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Company</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <p class="navbar-brand">TheCompany</p>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <p>
                        Address: 1234 Street Name, City, State, Country
                    </p>
                    <p>
                        Phone: (123) 456-7890
                    </p>
                    <p>
                        Email: contact@example.com
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Quick Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/" class="text-dark">Home</a>
                        </li>
                        <li>
                            <a href="/about" class="text-dark">About Us</a>
                        </li>
                        <li>
                            <a href="/services" class="text-dark">Services</a>
                        </li>
                        <li>
                            <a href="/contact" class="text-dark">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow Us</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://facebook.com" class="text-dark">Facebook</a>
                        </li>
                        <li>
                            <a href="https://twitter.com" class="text-dark">Twitter</a>
                        </li>
                        <li>
                            <a href="https://instagram.com" class="text-dark">Instagram</a>
                        </li>
                        <li>
                            <a href="https://linkedin.com" class="text-dark">LinkedIn</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Your Company Name
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>