@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <!-- start of hero -->
    <section class="wpo-hero-slider wpo-hero-style-3">
        <h2 class="hidden">some</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @forelse($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                             data-background="{{ asset('storage/') }}/{{ $slider->image  }}">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                @empty
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                             data-background="{{ asset('template') }}/assets/images/slider/slide-5.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                @endforelse
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- end of hero slider -->
    <!-- start wpo-wedding-date -->
    <section class="wpo-wedding-date mt-5">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1000ms">
                <span class="shape-1"><img src="{{ asset('template') }}/assets/images/slider/shape.png" alt=""></span>
                Karunia & Putri
                <span class="shape-2"><img src="{{ asset('template') }}/assets/images/slider/shape2.png" alt=""> </span>
            </h2>
            <p class="wow fadeInUp" data-wow-duration="1200ms">Kami akan melaksanakan Pernikahan pada tanggal <b>11 Mei
                    2024</b></p>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-wedding-date -->
    <!-- start wpo-video-section -->
    <section class="wpo-video-section-s2 pb-0 section-padding">
        <h2 class="hidden">some</h2>
        <div class="container">
            <div class="video-wrap">
                <video controls style="width: 100%;">
                    <source src="{{ asset('storage/') }}/{{ $video->teaser_video  }}">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    <!-- end wpo-video-section-->
    <!-- start wpo-story-section -->
    <section class="wpo-story-section section-padding" id="story">
        <div class="container-fluid">
            <div class="wpo-section-title">
                <h4>Cerita Kami</h4>
                <h2>Kisah Cinta Kami</h2>
            </div>
            <div class="wpo-story-wrap">
                @forelse($stories as $story)
                    @if($loop->index % 2 == 0)
                        <div class="wpo-story-item">
                            <div class="wpo-story-img-wrap">
                                <div class="wpo-story-img wow zoomIn" data-wow-duration="1000ms">
                                    <img src="{{ asset('storage/') }}/{{ $story->story_image  }}" alt="">
                                </div>
                                <div class="wpo-img-shape">
                                    <img src="{{ asset('template') }}/assets/images/story/shape.png" alt="">
                                </div>
                            </div>
                            <div class="wpo-story-content">
                                <div class="wpo-story-content-inner wow fadeInRightSlow" data-wow-duration="1700ms">
                                    <h3>{{ $story->story_title }}</h3>
                                    <span>{{ date('Y', strtotime($story->story_date))  }}</span>
                                    {!! $story->story_description !!}
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="wpo-story-item">
                            <div class="wpo-story-img-wrap">
                                <div class="wpo-story-img wow zoomIn" data-wow-duration="1000ms">
                                    <img src="{{ asset('storage/') }}/{{ $story->story_image  }}" alt="">
                                </div>
                                <div class="wpo-img-shape">
                                    <img src="{{ asset('template') }}/assets/images/story/shape.png" alt="">
                                </div>
                            </div>
                            <div class="wpo-story-content">
                                <div class="wpo-story-content-inner wow fadeInLeftSlow" data-wow-duration="1700ms">
                                    <h3>{{ $story->story_title }}</h3>
                                    <span>{{ date('Y', strtotime($story->story_date))  }}</span>
                                    {!! $story->story_description !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-lg-12 text-center mt-5">
                    <a href="{{ route('cerita-kami')  }}" class="theme-btn">Lihat Selengkapnya Cerita Mereka</a>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end story-section -->

    <!-- start of wpo-contact-section -->
    <section class="wpo-contact-section-s3 section-padding" id="rsvp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-xl-4 col-lg-6 col-md-12 col-12">
                    <div class="wpo-contact-section-wrapper wow fadeInLeftSlow" data-wow-duration="1700ms">
                        <div class="wpo-contact-form-area">
                            <div class="wpo-section-title">
                                <h4>Kirim ucapan selamat kepada mereka</h4>
                            </div>
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Nama Lengkap">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Email">
                                </div>
                                <div>
                                    <select name="meal" class="form-control last">
                                        <option disabled="disabled" selected>Teman Dari ?</option>
                                        <option>Karunia</option>
                                        <option>Putri</option>
                                    </select>
                                </div>
                                <div>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"
                                              placeholder="Pesan yang ingin disampaikan?"></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Kirim</button>
                                    <div id="c-loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Terima Kasih, Pesan Kamu akan kami Sampaikan kepada Mereka</div>
                                    <div id="error"> Error occurred while sending email. Please try again later.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-8 col-lg-6 col-md-12 col-12">
                    <div class="contact-img wow fadeInRightSlow" data-wow-duration="1700ms">
                        <img src="{{ asset('template') }}/assets/images/contact/img-5.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-contact-section -->

    <!--Start wpo-testimonial-section-->
    <section class="wpo-testimonial-section section-padding">
        <div class="wpo-section-title">
            <h4>Ucapan Selamat</h4>
            <h2>Dari Teman, Kerabat Karunia & Putri</h2>
        </div>
        <div class="container">
            <div class="wpo-testimonial-wrap">
                <div class="row align-items-center">
                    <div class="col col-lg-7 wow fadeInLeftSlow" data-wow-duration="1700ms">
                        <div class="slider-for">
                            @forelse($sliders as $slider)
                                <div class="testimonial-img">
                                    <img src="{{ asset('storage/') }}/{{ $slider->image  }}" alt="">
                                </div>
                            @empty
                                <div class="testimonial-img">
                                    <img src="assets/images/testimonial/img-1.jpg" alt="">
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="col col-lg-5 wow fadeInRightSlow" data-wow-duration="1700ms">
                        <div class="wpo-testimonial-items">
                            <div class="slider-nav">
                                <div class="wpo-testimonial-item">
                                    <div class="wpo-testimonial-text">
                                        <p>Varius aenean fringilla consectetur adipiscing felis, lectus. Id eros,
                                            porta quam quis proin non vulputate lacinia imperdiet. Mus ut amet
                                            tortor iEros, sed at semper sed in tempor ultrices sed. Id sem nulla
                                            quisque vel duiscoue necrd.</p>
                                        <div class="wpo-testimonial-text-btm">
                                            <h3>Marlin & Williamson</h3>
                                            <span>Wedding- 23.05.2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpo-testimonial-item">
                                    <div class="wpo-testimonial-text">
                                        <i class="fi flaticon-quotation"></i>
                                        <p>Varius aenean fringilla consectetur adipiscing felis, lectus. Id eros,
                                            porta quam quis proin non vulputate lacinia imperdiet. Mus ut amet
                                            tortor iEros, sed at semper sed in tempor ultrices sed. Id sem nulla
                                            quisque vel duiscoue necrd.</p>
                                        <div class="wpo-testimonial-text-btm">
                                            <h3>Rihanna & William</h3>
                                            <span>Wedding- 08.12.2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpo-testimonial-item">
                                    <div class="wpo-testimonial-text">
                                        <i class="fi flaticon-quotation"></i>
                                        <p>Varius aenean fringilla consectetur adipiscing felis, lectus. Id eros,
                                            porta quam quis proin non vulputate lacinia imperdiet. Mus ut amet
                                            tortor iEros, sed at semper sed in tempor ultrices sed. Id sem nulla
                                            quisque vel duiscoue necrd.</p>
                                        <div class="wpo-testimonial-text-btm">
                                            <h3>Sarah & Daniel</h3>
                                            <span>Wedding- 12.08.2022</span>
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
    <!--End wpo-testimonial-section-->

    <!-- start wpo-event-section -->
    <section class="wpo-event-section section-padding pb-0" id="event">
        <div class="container">
            <div class="wpo-section-title">
                <h4>Acara Kami</h4>
                <h2>Kapan & Dimana</h2>
            </div>
            <div class="wpo-event-wrap">
                <div class="row">
                    @forelse($events as $event)
                        <div class="col col-lg-6 col-md-6 col-12">
                            <div class="wpo-event-item">
                                <div class="wpo-event-img">
                                    <img src="{{ asset('storage/') }}/{{ $event->event_image  }}" alt="">
                                    <div class="title"><h2>{{ $event->event_title  }}</h2></div>
                                </div>
                                <div class="wpo-event-text">
                                    <ul>
                                        {!! $event->event_description !!}
                                        <li><a class="popup-gmaps"
                                               href="{{ url($event->event_location)  }}">Lihat Lokasi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end wpo-event-section -->
@endsection
