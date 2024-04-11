@extends('app')
@section('title', 'About')

@section('content')
    <section id="mission-main" class="container">
        <h2>
            SSSK Aims:
        </h2>
        <div class="mission-list">
            <div class="mission-item">
                <i class="fa-solid fa-users"></i>
                <h4>To Contribute for humanity and Social Service.</h4>
            </div>
            <div class="mission-item">
                <i class="fa-regular fa-face-smile"></i>
                <h4>To spread peace and happiness in the world.</h4>
            </div>
            <div class="mission-item">
                <i class="fa fa-link"></i>
                <h4>To provide a link between donors and acceptors.</h4>
            </div>
            <div class="mission-item">
                <i class="fa-solid fa-droplet"></i>
                <h4>To be the World Blood Donation Society (WBDS).</h4>
            </div>
            <div class="mission-item">
                <i class="fa fa-heart"></i>
                <h4>To help and motivate the depressed, hopeless and needy sections of the society.</h4>
            </div>
            <div class="mission-item">
                <i class="fa fa-ban"></i>
                <h4>To eradicate social evils.</h4>
            </div>
            <div class="mission-item">
                <i class="fa-regular fa-lightbulb"></i>
                <h4>To change people's lives for betterment and upliftment of society and to bring revolutions in the world.
                </h4>
            </div>
        </div>
    </section>

    @include('includes.footer')
@endsection
