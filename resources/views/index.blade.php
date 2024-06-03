<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Java Residence</title>
    <link rel="icon" type="image/x-icon" href="{{env('APP_URL')}}{{$information->logo_favicon}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!--Font Awesome / Icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- ElevateZoom -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>

    <!-- Lightbox2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


    <style>
        .for-padding-left {
            padding-left: 15rem;
        }

        @media (max-width: 760px) {
            .for-padding-left {
                padding-left: 3rem;
                padding-right: 3rem;
                text-align: center;
            }
        }

        .btn:hover {
            color: #f37321 !important;
        }

        .btn-bla:hover {
            color: #ffffff !important;
        }

        .navbar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            /* Adjust the height of the red padding */
            background-color: #f37321;
            /* Set the color of the padding */
            z-index: -1;
            /* Ensure the pseudo-element is behind the navbar content */
        }

        .flag-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/1280px-Flag_of_Indonesia.svg.png');
            background-size: cover;
            background-position: center;
        }

        .flag-icon2 {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-image: url('https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1280px-Flag_of_the_United_States.svg.png');
            background-size: cover;
            background-position: center;
        }

        .dropdown-menu {
            display: block;
            opacity: 0;
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: all .3s ease-in;
            left: 50%;
            text-align: center;
            background: #ffffff;
            border: none;
            border-radius: 0%;
        }

        .dropdown-menu.show {
            max-height: 500px;
            opacity: 1;
            padding: 0.5rem 0;
        }

        .overlayer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loader {
            text-align: center;
            display: block;
        }

        .logoloader {
            width: 100px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        #content {
            display: none;
        }

        #btn-back-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 9999;
        }

        .ratio-16x9 {
            background: #e6e6e6 !important;
            color: black !important;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
            color: #111111 !important;
            opacity: 0 !important;
        }

        .image-container {
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 1.5rem;
            text-align: center;
            padding: 10px;
            text-transform: uppercase;
        }

        .overlay-text {
            padding: 10px;
        }
    </style>
</head>

@php
use Illuminate\Support\Str;
@endphp

<body id="page-top" style="font-family: Montserrat">
    <div id="overlayer" class="overlayer">
        <div class="loader" id="loader">
            <img src="{{env('APP_URL')}}{{$information->logo_header}}" alt="Logo" class="logoloader">
        </div>
    </div>

    <button type="button" class="btn btn-floating btn-lg rounded-5"
        style="background-color:#d85909;color:white;width: 50px;height: 50px;" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top pt-4 pb-3" id="mainNav" style="background-color:#f37321">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/"><img src="{{env('APP_URL')}}{{$information->logo_header}}"
                    style="max-width:150px;width:140px;" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                style="border: none" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown" style="place-content: center;">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Project
                        </a>
                        <div class="dropdown-menu dropdown-menu-end animate slideIn text-white fw-bold"
                            aria-labelledby="navbarDropdown">
                            @foreach($projects as $project)
                            <a class="dropdown-item" href="{{ route('projects.show', ['id' => $project->id]) }}">{{
                                $project->title }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="/contact_us">Contact
                            Us</a></li>
                    <li class="nav-item" style="place-content: center;"><a class="nav-link" href="/news">News</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($news as $s)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <header class="masthead" id="home"
                    style="background: linear-gradient(to bottom, rgba(26, 26, 26, 0.5) 0%, rgba(33, 33, 33, 0.5) 100%), url('{{env('APP_URL')}}{{$s->image}}'); background-size: cover">
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-left"
                        style="place-content: center;">
                        <div class="col-lg-8 align-self-end" data-aos="fade-right" data-aos-duration="1000"
                            style="background-color: rgba(0, 0, 0, 0.575);padding-top:10rem;padding-bottom:10rem">
                            <div class="for-padding-left">
                                <h1 class="text-white fw-bold" style="text-transform:uppercase">{{ $s->title }}</h1>
                                <a href="{{ route('news.show', $s->id) }}" class="btn btn-bla text-white mt-2"
                                    style="background-color:#f37321;border-radius:0;font-size:15pt">More Info</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </header>
            </div>
            @endforeach
        </div>
    </div>

    <section class="page-section" data-aos="fade-up" data-aos-duration="1000" id="about"
        style="background-color:#eeeeef">
        <div class="container px-4 px-lg-5">
            <div class="text-center mx-auto py-3">
                <h2 class="mt-0 fw-bolder">About Java Residence</h2>
                <hr class="divider divider-black" />
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-6 py-5 py-md-0">
                    <p class="mb-4" style="text-align: justify">{{$information->description}}</p>
                    <a href="/about" class="btn btn-bla text-white mt-2"
                        style="background-color:#f37321;border-radius:0;font-size:15pt">More
                        Info</a>
                </div>
                <div class="col-lg-6 justify-content-center">
                    <img class="img-fluid" style="object-fit: cover;height:100%!important"
                        src="{{env('APP_URL')}}{{$information->image}}" alt="..." />
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" data-aos="fade-up" data-aos-duration="1000" id="facility"
        style="background-color: #f37321">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0 fw-bolder" style="color:white">Our Facilities</h2>
            <div class="row gx-4 gx-lg-5">
                @foreach ($facility as $a)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5 d-flex">
                        <div class="me-3">
                            <img src="{{env('APP_URL')}}{{$a->image}}" style="width:110px;max-width:140px" />
                        </div>
                        <div style="align-content: center;">
                            <h3 class="h5 fw-bold mb-2" style="color:white">{{$a->title}}</h3>
                        </div>
                    </div>
                    <p class="mb-4 text-white" style="text-align: justify">{{$a->description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="page-section" id="portfolio" style="background-color:#eeeeef" data-aos="fade-up"
        data-aos-duration="1000">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0 fw-bolder" style="color:#474443">News & Event</h2>
            <hr class="divider" style="background-color:#f37321;width:70%;max-width:10rem" />
            <div class="row gx-4 gx-lg-5 portfolio-items" style="place-content: center">
                <div class="col-sm-12">
                    <div class="row" style="text-align: -webkit-center;">
                        @foreach ($news as $a)
                        <div class="col-sm-4 py-3">
                            <a href="{{ route('news.show', $a->id) }}">
                                <div class="card" style="width: 20rem; position: relative;">
                                    <div class="image-container" style="position: relative;">
                                        <img class="card-img-top" src="{{env('APP_URL')}}{{$a->image}}"
                                            alt="Card image cap">
                                        <div class="overlay">
                                            <div class="overlay-text" style="font-weight: 600">
                                                {{ $a->title }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#f37321;">
                                        <p class="card-text">{{ Str::limit(strip_tags($a->description), 300) }}</p>
                                        <hr class="divider"
                                            style="background-color:#ffffff;width:100%;max-width: 100%!important;height: 0.1rem!important;" />
                                        <p class="card-text">{{ $a->created_at->format('Y-m-d') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="position-fixed bottom-0 end-0 mb-3 me-3" style="z-index: 999" data-aos="fade-up"
        data-aos-duration="1000">
        <a title="Chat Whatsapp" href="{{$information->link_wa}}" target="_blank"
            class="d-inline-block rounded-full transition-all transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center" style="width:100px;height:100px"
                src="{{ asset('assets/img/whatsapp.png') }}" alt="Saya mau pesan">
        </a>
    </div>

    <section class="page-section pb-3 pt-3" id="developed_by" style="background-color:#eeeeef">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-sm-4 py-2">
                    <h3 class="h5 fw-bold mb-2">Developed & Constructed by :</h3>
                </div>
                <div class="col-sm-4 py-2">
                    <img src="{{asset('assets/img/Mup.png')}}" style="width:90%" />
                </div>
                <div class="col-sm-4 py-2">
                    <img src="{{asset('assets/img/Muk.png')}}" style="width:85%" />
                </div>
            </div>
        </div>
    </section>

    <footer style="background:#f37321" id="contactForm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{env('APP_URL')}}{{$information->logo_header}}" class="p-5" style="width:70%" />
                            <div class="col-sm-12 px-3 pb-4">
                                <p class="text-white fw-bold">{{$information->name}}</p>
                                <table class="table table-borderless" style="border-color: transparent!important;">
                                    <thead>
                                        <tr>
                                            <th style="align-content: center;"><i
                                                    class="bi bi-geo-alt-fill text-white"></i></th>
                                            <th class="text-white">{{$information->address}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="align-content: center;"><i
                                                    class="bi bi-telephone-fill text-white"></i></td>
                                            <td class="text-white">{{$information->phone}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="text-white pb-2">
                                    <thead>
                                        <tr>
                                            <th>Follow us:</th>
                                            <th><a target="_blank" href="{{$information->instagram}}" class="ml-2"><img
                                                        src="{{asset('assets/img/Logo ig.png')}}"
                                                        style="width:60%" /></a></th>
                                            <th><a target="_blank" href="{{$information->youtube}}" class="ml-2"><img
                                                        src="{{asset('assets/img/Logo yt.png')}}"
                                                        style="width:60%" /></a></th>
                                            <th><a target="_blank" href="{{$information->facebook}}" class="ml-2"><img
                                                        src="{{asset('assets/img/Logo fb.png')}}"
                                                        style="width:60%" /></a></th>
                                            <th><a target="_blank" href="{{$information->tiktok}}" class="ml-2"><img
                                                        src="{{asset('assets/img/Logo tiktok.png')}}"
                                                        style="width:60%" /></a></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-7 my-5">
                            <h3 class="text-white pl-2 pb-0 fw-bold my-0">Contact Form :</h3>
                            <div class="row" style="place-content: center">
                                @if(session('success'))
                                <div class="alert alert-success m-2"
                                    style="color:white;font-weight:bold;background:#31a72b!important">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if(session('error'))
                                <div class="alert alert-danger m-2"
                                    style="color:white;background:#cd2a2a;font-weight:bold">
                                    {{ session('error') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('store-contact') }}" class="row g-3 pt-0 mt-0"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <input class="form-control" id="name" name="name" type="text"
                                                placeholder="Enter your Name..." data-sb-validations="required"
                                                required />
                                            <label for="name" class="fw-bold" style="color:#495057">Nama</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is
                                                required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <input class="form-control" id="handphone" name="handphone" type="phone"
                                                placeholder="62 987 654 321" data-sb-validations="required,handphone"
                                                required />
                                            <label for="handphone" class="fw-bold"
                                                style="color:#495057">Handphone</label>
                                            <div class="invalid-feedback" data-sb-feedback="handphone:required">A
                                                handphone is required.</div>
                                            <div class="invalid-feedback" data-sb-feedback="handphone:email">Handphone
                                                is not valid.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="example@gmail.com" data-sb-validations="required,email"
                                                required />
                                            <label for="email" class="fw-bold" style="color:#495057">Email</label>
                                            <div class="invalid-feedback" data-sb-feedback="email:required">An
                                                email is required.</div>
                                            <div class="invalid-feedback" data-sb-feedback="email:email">Email
                                                is not valid.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <input class="form-control" id="subject" name="subject" type="text"
                                                placeholder="Enter your subject..." data-sb-validations="required"
                                                required />
                                            <label for="subject" class="fw-bold" style="color:#495057">Subject</label>
                                            <div class="invalid-feedback" data-sb-feedback="subject:required">A subject
                                                is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" id="message" type="text"
                                                placeholder="Enter your message here..." style="height: 7rem;"
                                                data-sb-validations="required" required></textarea>
                                            <label for="message" class="fw-bold" style="color:#495057">Message</label>
                                            <div class="invalid-feedback" data-sb-feedback="message:required">A message
                                                is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-grid">
                                        <button class="btn btn-xl py-2 fw-bold"
                                            style="background-color:white;color:#f37321;width:50%" id="submitButton"
                                            type="submit"><span>SEND MESSAGE</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </script>
    <!-- Lightbox2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- elevateZoom JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script>
        AOS.init();

var toTopButton = document.getElementById("to-top-button");

window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        toTopButton.classList.remove("d-none");
    } else {
        toTopButton.classList.add("d-none");
    }
}

function goToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

document.addEventListener("DOMContentLoaded", function () {
    var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Adjust the interval as needed (in milliseconds)
        wrap: true
    })
});

document.addEventListener('DOMContentLoaded', function () {
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    let visibleItems = 6;
    let totalDisplayedItems = 0;

    // Initially hide all items beyond visibleItems
    portfolioItems.forEach((item, index) => {
        if (index >= visibleItems) {
            item.style.display = 'none';
        } else {
            totalDisplayedItems++;
        }
    });
         // Initially hide the Load More button if there are 6 or fewer portfolio items
         if (portfolioItems.length <= 6) {
            loadMoreBtn.style.display = 'none';
        }

    loadMoreBtn.addEventListener('click', function () {
        let newlyDisplayedItems = 0;

        // Show next batch of items or remaining items if less than a full batch
        for (let i = totalDisplayedItems; i < portfolioItems.length && newlyDisplayedItems < 6; i++) {
            portfolioItems[i].style.display = 'block';
            totalDisplayedItems++;
            newlyDisplayedItems++;
        }

        // Hide Load More button if all items are displayed
        if (totalDisplayedItems >= portfolioItems.length) {
            loadMoreBtn.style.display = 'none';
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('flexCheckChecked');
    const submitButton = document.getElementById('submitButton');

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });
});
    </script>

    <script>
        let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

setTimeout(function() {
    document.getElementById('overlayer').style.display = 'none';
    document.getElementById('content').style.display = 'block';
    mybutton.style.display = "block"; // Show the back to top button when content is loaded
}, 3000);
    </script>
</body>

</html>