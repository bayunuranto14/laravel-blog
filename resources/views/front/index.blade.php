@extends('layouts.navbar')
{{-- @extends ('layouts.carousel') --}}


@section('content')
{{-- <div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-5 text-center font-weight-bolder">{{ config('app.name', ' ') }} Official Sites</h1>
        <p class="lead"></p>
        <hr class="my-2">
    </div>
    <div class="py-2">
    <h5 class="text-center">Our Information</h5>

   
</div>
</div> --}}
<div class="header-area header-gym header-bg" style="background-image:url(assets/img/header-slider/gym/bg.png);">
    <div class="shape"></div>
    <div class="shape-02"></div>
    <div class="gym-bg-img" data-parallax='{"x": 220, "y": 150}' style="background-image: url('assets/img/logo-sabturu-1.png');"></div>
    
    {{-- <div class="gym-bg-img wow animate__animated animate__zoomIn w-50" data-parallax='{"x": 220, "y": 150}' style="background-image: url(https://yt3.googleusercontent.com/Pd8-mBsfYXbba3V5AC3nMNKJqR3VhJ2kfvKoMLWk3YpwgSsaXXEddSVPPSbZGMekarErqskF3wM=s176-c-k-c0x00ffffff-no-rj););"></div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-inner">
                    <!-- header inner -->
                    <h1 class="title">{{ config('app.name', ' ') }}</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis necessitatibus ratione quos recusandae totam nisi deleniti blanditiis dolorum mollitia modi, omnis officia illum eaque expedita et animi quam veritatis rerum?</p>
                    <div class="btn-wrapper padding-top-30">
                        <a href="#" class="boxed-btn btn-gym">Lets Get Fit</a>
                    </div>
                </div>
                <!-- //.header inner -->
            </div>
        </div>
    </div>
</div>

<div id="about" class="online-order-area padding-bottom-120 padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title gym padding-bottom-25">
                    <h4 class="title">{{ config('app.name', ' ') }} Official Sites</h4>
                    <p>Perkumpulan orang live setiap sabtu dan minggu (kalo ga males)
                        Dijenya Random tergantung moodnya dijenya
                        
                        Kalo ga ada live berati lagi sibuk atau ga mood
                        
                        Sudahi Pekerjaan mu saatnya kita turu Salam Sabturu Kereaktif 🤓🤓
                        #sabturu_kereaktif </p>
                </div>
                <ul class="content">
                    <li><i class="fas fa-check-circle"></i>Each time a digital asset is purchased or sold</li>
                    {{-- <li><i class="fas fa-check-circle"></i>Boost engagement with an experience</li>
                    <li><i class="fas fa-check-circle"></i>Promote your company culture</li> --}}
                </ul>
                <div class="btn-wrapper padding-top-30">
                    <a href="#" class="boxed-btn btn-gym reverse-color">Try For Free</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="food-img wow animate__animated animate__backInUp bg-image" data-parallax='{"x": 100, "y": 0}' style="background-image: url(https://yt3.googleusercontent.com/Pd8-mBsfYXbba3V5AC3nMNKJqR3VhJ2kfvKoMLWk3YpwgSsaXXEddSVPPSbZGMekarErqskF3wM=s176-c-k-c0x00ffffff-no-rj);"></div>
            </div>
        </div>
    </div>
</div>

<!-- Product Section -->
<section class="blog-area padding-bottom-45">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title gym desktop-center padding-bottom-50">
                    <h3 class="title">Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single-blog-grid-01 margin-bottom-30">
                    <div class="thumb">
                        <img src="https://f4.bcbits.com/img/a1438275665_10.jpg" alt="blog image">
                        <div class="news-date style-01">
                            <h5 class="title">05 May, 2020</h5>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">[FUNKOT​]​SoundRecords™ • Albertuzz - Kyori​-​kan by Hakoniwa Lily DB (Preview 195BPM)
                            </a></h4>
                        <p> you want to buy the full version, please contact me

                            WhatsApp :08999632117
                            
                            
                            Info song
                            Title : Kyori-Kan(キョリ感)
                            Artist : Hakoniwa Lily
                            Genre : Funkot Downbeat
                            Bpm : 180 (in preview 195)
                            Remixer : SoundRecords™ • Albertuzz
                            credits
                            released January 11, 2023
                            - SoundRecords™ • Albertuzz
                            - Hakoniwa Lily </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-blog-grid-01 margin-bottom-30">
                    <div class="thumb">
                        <img src="https://f4.bcbits.com/img/a1438275665_10.jpg" alt="blog image">
                        <div class="news-date style-01">
                            <h5 class="title">05 May, 2020</h5>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">Poppin'Party - Tokimeki Experience! [Hardfunk]
                            </a></h4>
                        <p>Get all 7 Kumiko VerticalBeat releases available on Bandcamp and save 50%.

                            Includes unlimited streaming via the free Bandcamp app, plus high-quality downloads of Poppin'Party - Dreamers Go! [Hardfunk], Pastel✽Palettes - きゅ〜まい＊flower [Funkot], BanG Dream! Roselia - BRAVE JEWEL [Hardfunk], Poppin'Party - Initial​ [Hardfunk], Darling In The Franxx - Hitori [Funkytone fersion], Poppin'Party - Tokimeki Experience! [Hardfunk], and Hekousen - Kozu no honkai Ed song [Funkytone version]. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-blog-grid-01 margin-bottom-30">
                    <div class="thumb">
                        <img src="https://f4.bcbits.com/img/a1438275665_10.jpg" alt="blog image">
                        <div class="news-date style-01">
                            <h5 class="title">05 May, 2020</h5>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">Poppin'Party - Tokimeki Experience! [Hardfunk]
                            </a></h4>
                        <p>Get all 7 Kumiko VerticalBeat releases available on Bandcamp and save 50%.

                            Includes unlimited streaming via the free Bandcamp app, plus high-quality downloads of Poppin'Party - Dreamers Go! [Hardfunk], Pastel✽Palettes - きゅ〜まい＊flower [Funkot], BanG Dream! Roselia - BRAVE JEWEL [Hardfunk], Poppin'Party - Initial​ [Hardfunk], Darling In The Franxx - Hitori [Funkytone fersion], Poppin'Party - Tokimeki Experience! [Hardfunk], and Hekousen - Kozu no honkai Ed song [Funkytone version]. </p>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>

<!-- Blog Section  -->
<section class="blog-area padding-bottom-45">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title gym desktop-center padding-bottom-50">
                    <h3 class="title">Blog</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single-blog-grid-01 margin-bottom-30">
                    <div class="thumb">
                        <img src="assets/img/blog/01.jpg" alt="blog image">
                        <div class="news-date style-01">
                            <h5 class="title">05 May, 2020</h5>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">See How People Are Using Your Website With Hotjar
                            </a></h4>
                        <p>We're known for one thing every where we go excellent customer experiences purpose. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-blog-grid-01 margin-bottom-30">
                    <div class="thumb">
                        <img src="assets/img/blog/03.jpg" alt="blog image">
                        <div class="news-date style-01">
                            <h5 class="title">05 May, 2020</h5>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">5 Tips to Write Your Own Website Copy
                            </a></h4>
                        <p>We're known for one thing every where we go excellent customer experiences purpose. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-blog-grid-01 margin-bottom-30">
                    <div class="thumb">
                        <img src="assets/img/blog/02.jpg" alt="blog image">
                        <div class="news-date style-01">
                            <h5 class="title">05 May, 2020</h5>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">5 Brilliant Apps That Will Make Your Life Better
                            </a></h4>
                        <p>We're known for one thing every where we go excellent customer experiences purpose. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Member of Sabturu  -->
<section class="testimonial-area bg-image-02 padding-top-120 padding-bottom-120" style="background-image: url();">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title desktop-center padding-bottom-40">
                    <h3 class="title social-title">Family of Sabturu</h3>
                    <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage .</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel-area">
                    <div class="testimonial-carousel">
                        <div class="single-testimonial-item-07">
                            <div class="icon">
                                <i class="flaticon-right-quotation-mark"></i>
                            </div>
                            <div class="content">
                                <p class="description">Kalo gak turu ya berak. Harus balance</p>
                                <div class="author-details">
                                    <div class="author-meta">
                                        <h4 class="title">NRNT</h4>
                                        <div class="designation">CEO, Sabturu Kereaktif </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item-07">
                            <div class="icon">
                                <i class="flaticon-right-quotation-mark"></i>
                            </div>
                            <div class="content">
                                <p class="description">Lupakan lah pekerjaan mu, semoga hari mu sabturu terus</p>
                                <div class="author-details">
                                    <div class="author-meta">
                                        <h4 class="title">Anonim</h4>
                                        <div class="designation">Admin, Sabturu Kereaktif</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item-07">
                            <div class="icon">
                                <i class="flaticon-right-quotation-mark"></i>
                            </div>
                            <div class="content">
                                <p class="description">Semua kan indah pada waktunya.      Kata siapa?</p>
                                <div class="author-details">
                                    <div class="author-meta">
                                        <h4 class="title">NRTID</h4>
                                        <div class="designation">Admin2, Sabturu Kereaktif</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Member of Sabturu  -->
<div class="offer-area padding-bottom-10 padding-top-640 bg-image" style="">
</div>


{{-- <!-- testimonial area start  -->
<section class="testimonial-area bg-image-02 padding-top-120 padding-bottom-120" style="background-image: url();">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title desktop-center padding-bottom-40">
                    <h3 class="title social-title">Customers Reviews</h3>
                    <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage .</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel-area">
                    <div class="testimonial-carousel">
                        <div class="single-testimonial-item-07">
                            <div class="icon">
                                <i class="flaticon-right-quotation-mark"></i>
                            </div>
                            <div class="content">
                                <p class="description">we’ve centralized all of our scientific data. It has significantly facilitated deeper insights from data and helped us move.</p>
                                <div class="author-details">
                                    <div class="author-meta">
                                        <h4 class="title">Jonathon Doe</h4>
                                        <div class="designation">CEO, Oxo Startup</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item-07">
                            <div class="icon">
                                <i class="flaticon-right-quotation-mark"></i>
                            </div>
                            <div class="content">
                                <p class="description">we’ve centralized all of our scientific data. It has significantly facilitated deeper insights from data and helped us move.</p>
                                <div class="author-details">
                                    <div class="author-meta">
                                        <h4 class="title">Jonathon Doe</h4>
                                        <div class="designation">CEO, Oxo Startup</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item-07">
                            <div class="icon">
                                <i class="flaticon-right-quotation-mark"></i>
                            </div>
                            <div class="content">
                                <p class="description">we’ve centralized all of our scientific data. It has significantly facilitated deeper insights from data and helped us move.</p>
                                <div class="author-details">
                                    <div class="author-meta">
                                        <h4 class="title">Jonathon Doe</h4>
                                        <div class="designation">CEO, Oxo Startup</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->
<div class="offer-area padding-top-640 bg-image" style="">
</div> --}}

</div>



@include('layouts.footer')
@endsection
