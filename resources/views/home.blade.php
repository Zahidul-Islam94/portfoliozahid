@extends('layout.app')

@section('title','Home')

@section('content')

<h1>HOME</h1>
<h1>SYED ZAHID</h1>
<!-- About section -->
<section class="about text-center mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="img text-center">
                    <img src="images/profile-pic.jpg" alt="">
                    <h4 class="text-white">Zahidul Islam</h4>
                    <h6 class="text-white mt-1">Web Design And Developer</h6>
                    <br>
                </div>
                <div class="img-desc">
                    <a href=""><i class="fa fa-phone-alt mr-3"></i>+88 01740051399</a>
                    <a href=""><i class="fa fa-envelope-square mr-3"></i>syedzahidul94@gmail.com</a>
                </div>
                <div class="social-link text-center my-5">
                    <a class="px-2" href=""><i class="fab fa-facebook"></i></a>
                    <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="px-2" href=""><i class="fab fa-instagram"></i></a>
                    <a class="px-2" href=""><i class="fab fa-behance"></i></a>
                </div>
                <div class="row justify-content-center">
                    <button class="btn btn-danger mb-4">Download/cv <i class="fa fa-download"></i></button>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 m-0 p-0 text-white">
                <div class="about-desc">
                    <h1>I Am Zahidul Islam</h1>
                    <h6 class="text-info">Web Design And Developer</h6>
                    <h3 class="text-white py-2">About Me</h3>
                    <hr>
                    <p class=" border-1 text-white text-left w-50 m-auto ml-2">Hello! I am Zahidul Islam. I am a
                        professional Web Design And Developer
                        with more than 3 years of experience. I am an expert in Responsive Design and
                        WordPress Customization. I know all about HTML5, CSS3, Bootstrap-4 With
                        Responsive Design, PSD to HTML Javascript, jQuery, and WordPress Customization.
                        I just believe in quality work.
                        Your satisfaction is my top priority Thanks for your precious time.</p>
                    <br>
                    <p class="text-white text-right mr-2">Best regard,<br>
                        Zahidul Islam<br>
                        Thank You...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section end -->

@endsection
