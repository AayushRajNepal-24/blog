@extends('frontend.layouts.blog')
@section('content')
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">
                    <h4>Leave a comment</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="E-mail">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Message"></textarea>
                                <button onclick="mysubmitFunction()" class="site-btn">Send</button>
                            </div>
                            <script>
                                function mysubmitFunction() {
                                    confirm("We we'll contact you soon. thank you!");
                                }
                            </script>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="contact-info">
                    <ul class="ct-list">
                        <li>
                            <h6>Address:</h6>
                            <p>Kathmandu</p>
                        </li>
                        <li>
                            <h6>Phone:</h6>
                            <p>9818653676</p>
                        </li>
                        <li>
                            <h6>Email:</h6>
                            <p>nepalaayushraj24@gmail.com</p>
                        </li>
                    </ul>
                    <div class="contact-social">
                        <a href="https://www.facebook.com/profile.php?id=100017589585304"><i class="fa fa-facebook"></i></a>
                        </div>
                </div>
            </div>
        </div>
        <!-- map -->
        <div class="" id="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10459.835035490052!2d85.31042525998726!3d27.727613969872625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191f6d8b44fb%3A0x5b165e55339a2b92!2sCareer%20Counseling%20Center%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1572890362488!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>

<!-- Gallery section -->
<div class="gallery">
    <div class="gallery-slider owl-carousel">
        <div class="gs-item set-bg" data-setbg="img/instagram/1.jpg"></div>
        <div class="gs-item set-bg" data-setbg="img/instagram/2.jpg"></div>
        <div class="gs-item set-bg" data-setbg="img/instagram/3.jpg"></div>
        <div class="gs-item set-bg" data-setbg="img/instagram/4.jpg"></div>
        <div class="gs-item set-bg" data-setbg="img/instagram/5.jpg"></div>
        <div class="gs-item set-bg" data-setbg="img/instagram/6.jpg"></div>
    </div>
</div>
<!-- Gallery section end -->
@endsection