@extends('layouts.main')

@section('title', "Playa Web Solutions - Web & Mobile Application Development Agency")

@section('stylesheets')
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/morphext.css">
@endsection

@include('components.navbar')

@section('content')
    <section id="header">
        <div class="header-background">
            <div class="carousel slide" data-ride="carousel" data-interval="6000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://playa.hk/content/uploads/2017/07/apps-1620x1080.jpeg" srcset="https://playa.hk/content/uploads/2017/07/apps-1620x1080.jpeg 1620w, https://playa.hk/content/uploads/2017/07/apps-768x512.jpeg 768w, https://playa.hk/content/uploads/2017/07/apps-1350x900.jpeg 1350w, https://playa.hk/content/uploads/2017/07/apps-1080x720.jpeg 1080w">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://playa.hk/content/uploads/2017/07/code-1618x1080.jpg" srcset="https://playa.hk/content/uploads/2017/07/code-1618x1080.jpg 1618w, https://playa.hk/content/uploads/2017/07/code-768x513.jpg 768w, https://playa.hk/content/uploads/2017/07/code-1348x900.jpg 1348w, https://playa.hk/content/uploads/2017/07/code-1079x720.jpg 1079w">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://playa.hk/content/uploads/2017/07/server-1618x1080.jpg" srcset="https://playa.hk/content/uploads/2017/07/server-1618x1080.jpg 1618w, https://playa.hk/content/uploads/2017/07/server-768x513.jpg 768w, https://playa.hk/content/uploads/2017/07/server-1348x900.jpg 1348w, https://playa.hk/content/uploads/2017/07/server-1079x720.jpg 1079w">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-title">
                <h1 class="header-text">
                    <span>WE MAKE</span>
                    <br>
                    <span id="morphext">APPS, HYBRID APPS, COMPANY SYSTEMS, WEBSITES, VISIONS TO REALITY</span>
                </h1>
                <a href="#projects" class="btn btn-primary header-button" role="button">Learn More</a>
                <a href="#footer" class="btn btn-primary header-button" role="button">Contact Us</a>
            </div>
            <br>

        </div>

    </section>

    <section id="projects">
        <div class="project-tile-image project-tile-Media" style="background-image: url('https://playa.hk/content/uploads/2017/07/DC2017-Desk-En-V6-1-1280x718.jpg')" >
            <div class="overlay">
                <a href="https://playa.hk/blog/job-posting-2017-spring/" class="btn overlay-button">Learn More</a>
            </div>
        </div>
        <div class="project-tile-image project-tile-Media" style="background-image: url('https://playa.hk/content/uploads/2017/07/Portfolio-Desk-En-1280x718.jpg')">
            <div class="overlay">
                <a href="https://playa.hk/blog/job-posting-2017-spring/" class="btn overlay-button">Learn More</a>
            </div>
        </div>
        <div class="project-tile-image project-tile-Media" style="background-image: url('https://playa.hk/content/uploads/2017/07/Colloquium-Desk-En-1280x718.jpg')">
            <div class="overlay">
                <a href="https://playa.hk/projects/hku-research-management-colloquium/" class="btn overlay-button">Learn More</a>
            </div>
        </div>
        <div class="project-tile-image project-tile-Media" style="background-image: url('https://playa.hk/content/uploads/2017/07/0907-statuskitbutton-en-1280x718.jpg')">
            <div class="overlay">
                <a href=href="https://www.statuskit.com" class="btn overlay-button">Learn More</a>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section id="blog-posts">
        <h3 class="font-weight-bold text-uppercase">Latest Blog Posts</h3>
        <div class="carousel slide" data-ride="carousel" data-interval ="13000">
            <div class="carousel-inner" id="carouselBlog">
                <div class="carousel-item active">
                    <a href="#">Job Posting: 2017 Full Time Web Developer</a>
                </div>
                <div class="carousel-item">
                    <a href="">Lorem ipsum dolor sit amet, ex est novum appetere periculis. At vix quidam elaboraret reformidans.</a>
                </div>
                <div class="carousel-item">
                    <a href="#">Lorem ipsum dolor sit amet, ex est novum appetere periculis. At vix quidam elaboraret reformidans.</a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselBlog" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselBlog" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    @include('components.footer')
    @section('scripts')
        <script src="js/morphext.js"></script>
        <script>
            $('#morphext').Morphext({
                animation: "fadeIn",
                separator: ",",
                speed: 4000,

            })
        </script>
    @endsection
@endsection
