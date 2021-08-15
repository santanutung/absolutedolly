@extends('front.master')
@section('title')
    Home
@endsection
@section('content')

   	<!-- banner-page-section
			================================================== -->
		<section class="banner-page-section white-style">
			<div class="container">
				<h1>Our Works<span>.</span></h1>
				<p>List of recent works</p>
			</div>
		</section>
		<!-- End banner-page-section -->

		<!-- portfolio-section
			================================================== -->
		<section class="portfolio-section portfolio-page">
			<div class="container">
				<ul class="filter">
                            <li><a class="active" href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".physical">Physical</a></li>
                            <li><a href="#" data-filter=".digital">Digital</a></li>

                        </ul>
				<div class="portfolio-box iso-call">
					{{-- <div class="project-post interior web">
						<img src="upload/portfolio/1.jpg" alt="">
						<div class="hover-box">
							<a href="upload/portfolio/1.jpg" class="zoom">
								<i class="fa fa-search"></i>
							</a>
							<div class="inner-hover">
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
							<a href="{{ @$art->main_images ? asset('images/art/' . @$art->main_images) : '' }}" class="zoom">
								<i class="fa fa-search"></i>
							</a>
							<div class="inner-hover">
								<h2><a href="{{ route('art', ['art' => $art->id,'type'=>$type]) }}">{{ $art->name }}</a></h2>
								<span>Photography / Branding</span>
							</div>
						</div>
					</div>


                   
                @endforeach









				</div>
			</div>
		</section>
		<!-- End portfolio section -->
    <!-- End news section -->

@endsection