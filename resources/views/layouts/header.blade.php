
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
   
    <title>Register | Luxe Tribes </title>

    <!-- Favicon -->
    <link rel="icon"  type="image/png"  href="https://booking.luxetribes.com/images/favicons/favicon.ico" />
    
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/1655e340b0.js" crossorigin="anonymous"></script>
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://booking.luxetribes.com/css/app.css?v=1646940292" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://booking.luxetribes.com/css/dashboard.css?v=1646940292" rel="stylesheet">

        
        <link rel="stylesheet" href="https://booking.luxetribes.com/plugins/intl-tel-input/build/css/intlTelInput.css?v=1646940292">
    <style>
        body {
            background-color: #fff !important;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class=" container ">
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative py-30 ">
        <a class="navbar-brand " href="https://booking.luxetribes.com">
            
            Luxe Tribes
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="https://luxetribes.com/group-trip/" class="nav-link">Group trips</a>
                </li>
                <li class="nav-item">
                    <a href="https://luxetribes.com/private-trips/" class="nav-link">Private trips</a>
                </li>
                <li class="nav-item">
                    <a href="https://luxetribes.com/reviews/" class="nav-link">Past trips & reviews</a>
                </li>
          </ul>
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="https://luxetribes.com/about-us/" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="https://luxetribes.com/safety/" class="nav-link">FAQs</a>
                </li>
                <li class="nav-item">
                    <a href="https://luxetribes.com/blogs/" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="https://luxetribes.com/contact-us/" class="nav-link">Contact us</a>
                </li>
                <li class="nav-item">
                    <a href="https://luxetribes.com/search/" class="btn search-btn py-2 mb-2"><i class="fa fa-search"></i></a>
                </li>
                                                            <li class="nav-item ">
                            <a class="btn btn-outline-primary " href="https://booking.luxetribes.com/login"><i class="far fa-user"></i> &nbsp;Log in</a>
                        </li>
                                              </ul>
        </div>
      </nav>
</div> 

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="https://booking.luxetribes.com/js/app.js?v=1646746678"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         $(".datepicker").flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });


            </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://booking.luxetribes.com/plugins/intl-tel-input/build/js/intlTelInput.js?v=1646746678"></script>
    <script src="https://booking.luxetribes.com/js/init-tel-input.js?v=1646746678"></script>
    <script src="https://booking.luxetribes.com/js/register.js?v=1646746678"></script>
    <script src="https://booking.luxetribes.com/plugins/intl-tel-input/build/js/utils.js?v=1646746678"></script>
</body>


</html>
