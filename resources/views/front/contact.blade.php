@extends('front.master')
@section('title')
    Home
@endsection
@section('content')
<!-- banner-page-section
			================================================== -->
		<section class="banner-page-section">
			<div class="container">
				<h1>contact<span>.</span></h1>
				<p>Get in touch with us.</p>
			</div>
		</section>
		<!-- End banner-page-section -->

		<!-- contact-form-section
			================================================== -->
			@php
				  $contactpage_setting= App\Models\contactpage_setting::find(1);
				//   dd($contactpage_setting);

			@endphp
		<section class="contact-form-section">
			<div class="container">
				<div class="contact-form-box">
					<div class="row">
						<div class="col-sm-8">
							<h1>Say Hello!</h1>

							<form id="contact-form">
								<div class="row">
									<div class="col-sm-6">
										<input name="name" id="name" type="text" placeholder="Name*">
									</div>
									<div class="col-sm-6">
										<input name="mail" id="mail" type="text" placeholder="Email*">
									</div>
								</div>
								<input name="subject" id="subject" type="text" placeholder="Subject">
								<textarea name="comment" id="comment" placeholder="Message*"></textarea>
								<input type="submit" id="submit_contact" value="{{$contactpage_setting->contact_button_text}}">
								<div id="msg" class="message alert">

								</div>
							</form>
						</div>
						<div class="col-sm-4">
							<div class="info-box">
								<h2>{{$contactpage_setting->about_tittle}}</h2>
								<p>{{$contactpage_setting->about_text}}</p>
							</div>
							<div class="info-box address">
								<h2>{{$contactpage_setting->contact_tittle}}</h2>
								<p>
									<span aria-hidden="true" class="icon_pin_alt"></span>
									{{$contactpage_setting->contact_address}}
								</p>
								<p>
									<span aria-hidden="true" class="icon_mobile"></span>
									{{$contactpage_setting->contact_phone_1}}<br>
									{{$contactpage_setting->contact_phone_2}}
								</p>
								<p>
									<span aria-hidden="true" class="icon_mail_alt"></span>
									{{$contactpage_setting->contact_email_1}} <br>
									{{$contactpage_setting->contact_email_2}}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End contact-form section -->
@endsection