@extends('app')
@section('title', 'Home')

@section('content')
    <style>
        #page-title {
            display: none;
        }
    </style>

    <section id="hero" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <img src="{{ url('images/hero-banner.jpg') }}" alt="">
        <marquee behavior="" direction="">
            <span><i class="fa-regular fa-face-smile"></i>&nbsp;&nbsp;WELCOME IN THE SERVICE TO MANKIND&nbsp;&nbsp;<i
                    class="fa-regular fa-face-smile"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>SERVICE TO MAN IS SERVICE TO GOD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>SOCIAL SERVICE BRINGS PEACE OF MIND &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>BE HAPPY & MAKE OTHERS HAPPY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>POVERTY IS NOT BEING WITHOUT MONEY BUT BEING WITHOUT HOPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </marquee>
    </section>



    <section id="about" class="container" data-aos="fade-left" data-aos-anchor-placement="top-center">
        <div class=" about-text">
            <h2>About</h2>
            <p>
                Sheela Social Service Kingdom (SSSK) is an International Public Charitable Trust run by human Society of the
                world. It works for The Service to mankind. It provides a link between donors and acceptors. It is a ray, of
                hope for humanity. It is a government registered non-profitable, Social Service Organization. SSSK is
                founded by Vinod Jkian in the Sweet memory of his mother Late Smt. Sheela Devi who passed away on
                05-08-2003. This Trust is founded recently in 2023 and is situated at Village Kalideh Bhajwal, Tehsil
                Sunderbani, District Rajouri of Jammu and Kashmir Union Territory in India.
            </p>
            <a href="about.php" class="about-button button">Learn More</a>
        </div>
        <div class="about-image">
            <div class="blob"></div>

        </div>
    </section>

    <section id="donation-section" class="container wow">
        <div class="donation-links" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <img src="{{ url('images/emergency-patients.png') }}" alt="">
            <h3>
                For Emergency Patients
            </h3>
            <a href="" class="button">
                Find Blood Donors
            </a>
        </div>
        <div class="donation-links" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <img src="{{ url('images/before-blood-donation.png') }}" alt="">
            <h3>
                For Donors Before Blood Donation
            </h3>
            <a href="" class="button">
                Register as a Blood Donor
            </a>
        </div>
        <div class="donation-links" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <img src="{{ url('images/after-donation.png') }}" alt="">
            <h3>
                For Donors After Blood Donation

            </h3>
            <a href="" class="button">
                Delete Your Registration

            </a>
        </div>

    </section>


    <section id="humanity" class="container" data-aos="fade-right" data-aos-anchor-placement="top-center">
        <img src="{{ url('images/humanity.png') }}" alt="">
        <h2>Humanity & Social Service</h2>
        <p>Humanity refers to all the basic qualities that are expected to be shown by humans. It refers to caring for and
            helping others whenever and wherever possible. It means helping others at times when they need that help the
            most. It helps us to forget our selfish nature at times when others need our help. Humanity means kindness and
            compassion towards other beings. The real truth of life is death. Humanity helps us to know the truth of life.

        </p>
        <a href="humanity-social-service.php" class="button">Learn More</a>
    </section>


    <section id="wbds" class="container" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <div class="wbds-img">
            <img src="{{ url('images/wbds.png') }}" alt="">
        </div>
        <div class="wbds-content">
            <img src="{{ url('images/donate-blood.png') }}" alt="">
            <h2>World Blood Donation Society</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat aspernatur eligendi sit nemo, eos explicabo
                sapiente vero illum natus maxime aut neque ratione eveniet perferendis, suscipit dolore repudiandae at earum
                laborum possimus quam optio magni quasi similique! Delectus, architecto exercitationem reprehenderit at
                ducimus fugiat animi blanditiis velit asperiores numquam quaerat.</p>
            <a href="wbds.php" class="button">Learn More</a>
        </div>
    </section>

@endsection
