@extends('app')
@section('title', 'About')

@section('content')

    <div class="contact-container">
        <div class="contact-form-container">
            <div class="contact-info-section">
                <h3 class="contact-title">Let's get in touch</h3>
                <p class="contact-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    dolorum adipisci recusandae praesentium dicta!
                </p>

                <div class="contact-details">
                    <div class="contact-information">
                        <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp
                        <p>92 Cherry Drive Uniondale, NY 11553</p>
                    </div>
                    <div class="contact-information">
                        <i class="fas fa-envelope"></i> &nbsp &nbsp
                        <p>lorem@ipsum.com</p>
                    </div>
                    <div class="contact-information">
                        <i class="fas fa-phone"></i>&nbsp&nbsp
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="contact-social-media">
                    <p>Connect with us :</p>
                    <div class="contact-social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form-section">
                <span class="contact-circle one"></span>
                <span class="contact-circle two"></span>

                <form action="index.html" autocomplete="off" class="contact-form">
                    <h3 class="contact-form-title">Contact us</h3>
                    <div class="contact-input-container">
                        <input type="text" name="name" class="contact-input" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="contact-input-container">
                        <input type="email" name="email" class="contact-input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="contact-input-container">
                        <input type="tel" name="phone" class="contact-input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="contact-input-container textarea">
                        <textarea name="message" class="contact-input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="contact-btn" />
                </form>
            </div>
        </div>
    </div>

@endsection
