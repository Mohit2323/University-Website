<?php
include('header.php')
?>


    <div class="body-overlay"></div>
    <section class="section-padding">
        <div class="col-md-12">
            <div class="section-heading text-center">
                <h2 class="section-title">Get in <span class="base-color">touch</span> </h2>
                <span class="section-sub-title">To contact the jaipur national university!</span>
                <div class="section-heading-separator"></div>
            </div>
        </div>
        <div id="mapContainers">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.7613934389074!2d75.85787191504353!3d26.84754048315576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db61eaaaaaaab%3A0xc22c5eea92aa4d84!2sJaipur%20National%20University!5e0!3m2!1sen!2sin!4v1603072965582!5m2!1sen!2sin"
                width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
        <div class="container no-padding">
            <div class="main-contact">
                <form  method='post'  action='contact_process.php' class="contact-form" id="contacts">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" name="name" placeholder="Name"
                                    class="input-group__input form-control" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="email" name="email" placeholder="email"
                                    class="input-group__input form-control" required />
                            </div>
                        </div>
                    <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" name="subject" placeholder="Subject"
                            class="input-group__input form-control" required />
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" name="mobile" placeholder="Valid Mobile No"
                            class="input-group__input form-control" required />
                    </div>
                    </div>
                    </div>
                    <div class="input-group">
                        <textarea name="message" class="input-group__textarea form-control" placeholder="Message"
                            rows="8" cols="80" required></textarea>
                    </div>
                    <input type="submit" name='contact-btn' class="btn base-bg" value="Submit">
                    <span class="text-mute pdl15">* All fields are mandatory</span>

                </form>
                <div class="contact-address">
                    <div class="contact-address-item">
                        <span class="icon-wrap"><i class="fa fa-map-marker contact-icon"></i></span>
                        <div class="text-content">
                            <div class="base-color2 contact-title">Office Location</div>
                            Jaipur-Agra Bypass, near New RTO office, Jagatpura,
                            Jaipur, Rajasthan 302017
                        </div>
                    </div>
                    <!--/.contact-address-item-->
                    <div class="contact-address-item">
                        <span class="icon-wrap"><i class="fa fa-phone contact-icon"></i></span>
                        <div class="text-content">
                            <div class="base-color2 contact-title">Contact Number</div>
                            1800-102-1900
                        </div>
                    </div>
                    <!--/.contact-address-item-->
                    <div class="contact-address-item">
                        <span class="icon-wrap"><i class="fa fa-envelope contact-icon"></i></span>
                        <div class="text-content">
                            <div class="base-color2 contact-title">Contact Mail</div>info@jnujaipur.ac.in,
                            admissions.2019@jnujaipur.ac.in

                        </div>
                    </div>
                    <!--/.contact-address-item-->

                    <div class="contact-address-item">
                        <span class="icon-wrap"><i class="fa fa-map-marker contact-icon"></i></span>
                        <div class="text-content">
                            <div class="base-color2 contact-title">Website</div>
                            www.jnujaipur.ac.in
                        </div>
                    </div>
                    <!--/.contact-address-item-->
                </div>
            </div>
        </div>
    </section>



   <?php
   include('footer.php')
   ?>