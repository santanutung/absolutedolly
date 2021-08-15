@extends('front.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- home-section
       ================================================== -->
    <section id="home-section">
        <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept1"
            style="background-color:#000000;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
            <div id="rev_slider_202_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.1RC">
                <ul>
                     @foreach ($sliders as $Key=>$slider )

                    <li data-index="rs-{{$Key+1}}" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0"
                        data-saveperformance="off" data-title="{{@$slider->name }}" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ @$slider->img ? asset('images/slider/' . @$slider->img) : ''  }}" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5"
                            class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['0','15','15','15']"
                            data-y="['middle','middle','middle','middle']" data-fontsize="['100','80','50','40']"
                            data-voffset="['0','0','0','0']" data-whitespace="['nowrap','nowrap','nowrap','normal']"
                            data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;text-align:center;">{{@$slider->name }}<span></span>
                        </div>
                    </li>
                      @endforeach
                    {{-- <!-- SLIDE  -->
                    <li data-index="rs-672" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0"
                        data-saveperformance="off" data-title="unique" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/') }}frontend/upload/others/slide.jpg" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5"
                            class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['0','15','15','15']"
                            data-y="['middle','middle','middle','middle']" data-fontsize="['100','80','50','40']"
                            data-voffset="['0','0','0','0']" data-whitespace="['nowrap','nowrap','nowrap','normal']"
                            data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;text-align:center;">unique<span>.</span>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-674" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0"
                        data-saveperformance="off" data-title="professional" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/') }}frontend/upload/others/slide2.jpg" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5"
                            class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2" id="slide-674-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['0','15','15','15']"
                            data-y="['middle','middle','middle','middle']" data-fontsize="['100','80','50','40']"
                            data-voffset="['0','0','0','0']" data-whitespace="['nowrap','nowrap','nowrap','normal']"
                            data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;text-align:center;">professional<span>.</span>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-675" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0"
                        data-saveperformance="off" data-title="ideas" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/') }}frontend/upload/others/slide3.jpg" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5"
                            class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2" id="slide-675-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['0','15','15','15']"
                            data-y="['middle','middle','middle','middle']" data-fontsize="['100','80','50','40']"
                            data-voffset="['0','0','0','0']" data-whitespace="['nowrap','nowrap','nowrap','normal']"
                            data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;text-align:center;">ideas<span>.</span>
                        </div>
                    </li> --}}
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <!-- End home section -->

    <!-- portfolio-section
                    ================================================== -->
    <section class="portfolio-section">
        <div class="container">
            <div class="title-section white-style">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Showcase<span>.</span></h1>
                        <p>Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a
                            ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. </p>
                    </div>
                    <div class="col-md-7">
                        <ul class="filter">
                            <li><a class="active" href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".physical">Physical</a></li>
                            <li><a href="#" data-filter=".digital">Digital</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-box iso-call">
                {{-- <div class="project-post interior web">
                            <img src="{{ asset('/') }}frontend/upload/portfolio/1.jpg" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a href="upload/portfolio/1.jpg" class="zoom">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <h2><a href="single-project.html">Designed with Passion</a></h2>
                                    <span>Photography / Branding</span>
                                </div>
                            </div>
                        </div> --}}

                @foreach ($arts as $art)
                    @php
                        $type = '';
                        if ($art->digital == 1) {
                            $type = 'digital';
                        }
                        if ($art->physical == 1) {
                            $type = 'physical';
                        }

                    @endphp

                    <div class="project-post @if ($art->physical==1) physical @endif @if ($art->digital==1) digital @endif">
                        <img src="{{ @$art->main_images ? asset('images/art/' . @$art->main_images) : '' }}" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a href="upload/portfolio/3.jpg" class="zoom">
                                    <i class="fa fa-search"></i>
                                </a>

                                <h2><a href="{{ route('art', ['art' => $art->id,'type'=>$type]) }}">{{ $art->name }}</a></h2>
                                {{-- <span>Photography / Branding</span> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End portfolio section -->

    <!-- news-section
                    ================================================== -->
    <section class="news-section">
        <div class="container">
            <div class="title-section">
                <h1>Our Latest News<span>.</span></h1>
                <p>Donec nec justo eget felis facilisis fermentum. <br>Aliquam porttitor mauris sit amet orci. </p>
            </div>
            <div class="news-box">
            @foreach ($news as $item)
                <div class="news-post">
                    <div class="date-post">
                        <p>
                            <span>{{$item->created_at->format('d')}}</span>
                           {{$item->created_at->format('M')}}
                        </p>
                    </div>
                    <div class="post-content">
                        <ul class="meta-tags">
                            <li>by <a href="#">Admin</a>,</li>
                            {{-- <li><a href="#">3 Comments</a></li> --}}
                        </ul>
                        <h2><a href="single-post.html">{{$item->tittle}}</a></h2>
                        <p>{{$item->description}}</p>
                        {{-- <a class="read-more" href="single-post.html">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a> --}}
                    </div>
                </div>
                   @endforeach


            </div>
            {{-- <a class="button-one" href="blog.html">View Blog</a> --}}
        </div>
    </section>
    <!-- End news section -->

@endsection
