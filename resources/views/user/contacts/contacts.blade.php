@extends('user.main_master')
@section('title', 'Contact Us')
@section('content')
    <!-- Start of Main -->
        <!-- Bread Crumb STRAT -->
        <div class="banner inner-banner1 ">
            <div class="container">
                <section class="banner-detail  center-xs">
                    <h1 class="banner-title">Contact </h1>
                    <div class="bread-crumb right-side float-none-xs">
                        <ul>
                            <li><a href="{{url('/')}}">Home </a>/ </li>
                            <li><span>Contact </span></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <!-- Bread Crumb END -->

    <!-- CONTAIN START ptb-95-->


    <section class="pt-70 client-main ">
        <div class="container">
            <div class="contact-info">
                <div class="row m-0">
                    <div class="col-md-6 ">
                      <div class="row align-center" >
                          <div class="col-md-4 p-0">
                              <div class="contact-box">
                                  <div class="contact-icon contact-phone-icon"></div>
                                  <span><b>Tel </b></span>
                                  <p>0123 456 789 / 0123 456 788 </p>
                              </div>
                          </div>
                          <div class="col-md-4 p-0">
                              <div class="contact-box">
                                  <div class="contact-icon contact-mail-icon"></div>
                                  <span><b>Mail </b></span>
                                  <p>infoservices@stylexpo.com  </p>
                              </div>
                          </div>
                          <div class="col-md-4 p-0">
                              <div class="contact-box">
                                  <div class="contact-icon contact-open-icon"></div>
                                  <span><b>Open </b></span>
                                  <p>Mon – Sat: 9:00 – 18:00 </p>
                              </div>
                          </div>
                      </div>
                        <br>
                        <p class="mb-0">
                            We have provided you with all the ways to help you complete the purchase process easily. Add the product you want in the cart by clicking on the (Add to Cart) button. The product will move to your products box at the bottom of the screen. Click on Complete the purchase. Fill in the required shipping data. Review the data well and review order and then click confirm purchase.
                        </p>
                        <br>
                        <p class="mb-0">
                            Once the order is confirmed, you will receive a message with the expected time of receipt, but it will not be less than 24 hours inside Cairo More than 72 hours in remote provinces .
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="title mb-3">Send Us a Message </h4>
                        <form class="form contact-us-form" action="contact-form-handler.php" method="POST" name="contactform">
                            <div class="form-group">
                                <label for="username">Your Name </label>
                                <input type="text" id="username" name="name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="email_1">Your Email </label>
                                <input type="email" id="email_1" name="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message </label>
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-dark btn-rounded">Send Now </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="heading-part mb-30">
                    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1027.5846245975347!2d31.254811144078214!3d29.968828329914547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458478cea0dfd59%3A0x5e4e225319f3d1dd!2sNo.9%20B%2C%20Maadi%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1650845627544!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->

@endsection
