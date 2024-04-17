@extends('layouts.main')
@section('title', 'Cerita Kami')
@section('content')
    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Cerita Kami</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('/')  }}">Beranda</a></li>
                            <li>Cerita Kami</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
    <section class="wpo-story-section" id="story">
        <div class="container-fluid">
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
        </div> <!-- end container -->
    </section>
    <!-- end story-section -->
@endsection
