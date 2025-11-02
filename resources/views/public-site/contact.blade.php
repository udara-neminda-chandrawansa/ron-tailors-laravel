@extends('public-site.layout')

@section('content')

<x-public-site.breadcrumb breadcrumb="Contact Us" />

<!-- Map Section -->
<section class="map-section pb-0 my-section-padding-top">
    <div class="auto-container">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.893112464524!2d80.348358!3d7.253004600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae317cd9773735f%3A0xf5df716442ceefdd!2sRon%20tailors!5e0!3m2!1sen!2slk!4v1762070698429!5m2!1sen!2slk"
                width="600" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<!-- Contact info Section -->
<section class="contact-info-section pt-0">
    <div class="auto-container">
        <div class="contact-info-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6 icon_box">
                    <div class="inner-box">
                        <div class="contact-info-section_text">Send Email</div>
                        <h4 class="contact-info-section_title"><a
                                href="mailto:rontailors@gmail.com">rontailors@gmail.com</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 icon_box">
                    <div class="inner-box">
                        <div class="contact-info-section_text">Call 24/7</div>
                        <h4 class="contact-info-section_title"><a href="tel:+94778876778">077 887 6778</a></h4>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 icon_box">
                    <div class="inner-box">
                        <div class="contact-info-section_text">Visit Anytime</div>
                        <h4 class="contact-info-section_title">176/A, Walwaththa Road, Kegalle</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Form section -->
<section class="contact-form-section my-section-padding">
    <div class="auto-container">
        <div class="contact-form-section_sec-title-area">
            <h2 class="sec-title">Send us a Message <br> Anytime</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--Contact Form-->
                <div class="contact-form">
                    <form method="post" action="#" id="contact-form">
                        <div class="row">
                            <div class="form-group col-md-6 px-0">
                                <input type="text" class="form-control" name="form_name" value=""
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6 px-0 ps-md-3">
                                <input type="email" class="form-control" name="form_email" value=""
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group col-md-6 px-0">
                                <input type="text" class="form-control" name="form_phone" value=""
                                    placeholder="Phone Number" required>
                            </div>
                            <div class="form-group col-md-6 px-0 ps-md-3">
                                <input type="text" class="form-control" name="form_subject" value=""
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group col-md-12 px-0">
                                <textarea name="form_message" class="form-control"
                                    placeholder="Write a massage"></textarea>
                            </div>
                            <div class="form-group col-md-12 px-0">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                    value="">
                                <button class="btn-style-one dark" type="submit"
                                    data-loading-text="Please wait..."><span>Send a Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection