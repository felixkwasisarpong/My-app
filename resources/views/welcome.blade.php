<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="icon" type="image/png" href="https://booking.luxetribes.com/images/favicons/favicon.ico" />

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/1655e340b0.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://booking.luxetribes.com/css/app.css?v=1646746678" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://booking.luxetribes.com/css/dashboard.css?v=1646746678" rel="stylesheet">


    <link rel="stylesheet"
        href="https://booking.luxetribes.com/plugins/intl-tel-input/build/css/intlTelInput.css?v=1646746678">
    <!-- Styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: #6b7280;
            color: rgba(107, 114, 128, var(--tw-text-opacity))
        }
    }
    </style>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a href="https://luxetribes.com/search/" class="btn search-btn py-2 mb-2"><i
                                    class="fa fa-search"></i></a>
                        </li>
                        <li class="nav-item ">
                            <a class="btn btn-outline-primary " href="https://booking.luxetribes.com/login"><i
                                    class="far fa-user"></i> &nbsp;Log in</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main class="main-content">
            <div class="container-fluid register-page">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="register">
                            <div class="heading">
                                <h4>Become a part of the
                                    <br>
                                    <span>Luxe Tribes!</span>
                                </h4>
                            </div>
                            <form action="https://booking.luxetribes.com/register" method="POST"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="urazMtfeB61iu85O5ZmRKWqCLhi4TIHBLmlh9CSB">
                                <div class="media mb-2">
                                    <img src="https://booking.luxetribes.com/images/icons/avatar.svg"
                                        class="mr-3 thumbnail" width="75" alt="Profile photo">
                                    <div class="media-body">
                                        <h5 class="mt-0">Add your photo (optional)</h5>
                                        <small class="text-muted d-block">Supported formats: jpg, jpeg, png.</small>
                                        <label for="photo">
                                            <i class="fas fa-upload"></i> click to upload
                                            <input type="file" name="photo" id="photo" onchange="displayImage(this)"
                                                hidden>
                                        </label>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control " id="name" name="name"
                                                placeholder="Full name" value="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker " id="dob" name="dob"
                                                placeholder="DOB" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="country_id" id="nationality" class="form-control select2 "
                                                required>
                                                <option hidden selected disabled>Select nationality</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Åland Islands</option>
                                                <option value="3">Albania</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control " id="email" name="email"
                                                placeholder="Email" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control " id="phone" name="phone_number"
                                                placeholder="Phone name" value="" required>
                                            <span id="output" class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control " name="password"
                                                placeholder="Password" required>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="about" id="about" rows="5" class="form-control  "
                                        placeholder="Tell us about you (optional)"></textarea>
                                    <span class="float-right">200</span>
                                </div>

                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Create my account
                                        </button>
                                    </div>
                                </div>

                                <p class="text-muted">Already have an account? <a
                                        href="https://booking.luxetribes.com/login">Log in</a></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 right-column p-0 position-relative">
                        <div class="back-grey"></div>
                        <div class="front-img position-absolute">
                            <img src="https://booking.luxetribes.com/images/background/back-4.svg" alt="">
                        </div>
                        <div class="back-img position-absolute">
                            <img src="https://booking.luxetribes.com/images/background/back-5.svg" alt="">
                        </div>
                        <div class="back-img position-absolute">
                            <img src="https://booking.luxetribes.com/images/background/back-6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://booking.luxetribes.com/js/app.js?v=1646746678"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
</body>

</html>