
@extends('layout.page')

@section('body-class', 'destination-page')
@section('content')
<div class="container">
    <h1 class="title">Destination</h1>
    <p class="title-caption">
        "A destination is a place, endpoint, or goal that someone or something is intended to reach."
    </p>

    <div class="columns">

        <!-- LEFT COLUMN -->
        <div class="left-column">

            <!-- CATEGORY 1 -->
            <div class="section">
                <h2 class="section-title">Singapore</h2>
                <p class="section-caption">In Singapore, every step is a photo moment.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/s1.jpg') }}" alt="Singapore">
                        <p class="image-caption">The Merlion statue stands proudly with the Marina Bay Sands in the background.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/s2.jpg') }}" alt="Singapore">
                        <p class="image-caption">Singapore's skyline glows at night, reflecting on the water.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/s3.jpg') }}" alt="Singapore">
                        <p class="image-caption">The city's modern architecture is beautifully illuminated.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/s4.jpg') }}" alt="Singapore">
                        <p class="image-caption">Bright lights shine on the iconic buildings of Singapore.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/s5.jpg') }}" alt="Singapore">
                        <p class="image-caption">A vibrant cityscape offers a journey of flavors and culture.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 2 -->
            <div class="section">
                <h2 class="section-title">Philippines</h2>
                <p class="section-caption">Paradise isn’t a place, it’s the Philippine.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/pl1.jpg') }}" alt=Philippines">
                        <p class="image-caption">A clear, turquoise sea with boats near a tropical island</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/pl2.jpg') }}" alt=Philippines">
                        <p class="image-caption">Serene lake sorrounded by lush greenery.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/pl3.jpg') }}" alt=Philippines">
                        <p class="image-caption">A perpectly symmetrical volcano reflected in calm waters.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/pl4.jpg') }}" alt=Philippines">
                        <p class="image-caption">An old church stands under a bright blue sky.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/pl5.jpg') }}" alt=Philippines">
                        <p class="image-caption">Waterfalls cascade into a pool sorrounded by mountains.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="right-column">

            <!-- CATEGORY 3 -->
            <div class="section">
                <h2 class="section-title">Japan</h2>
                <p class="section-caption">Where tradition dances with modernity welcome to Japan.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/j1.jpg') }}" alt="Japan">
                        <p class="image-caption">Cherry blossoms, ancient temples, endless wonders.</p>
                    </div>

                    <div>
                       <img src="{{ asset('images/j2.jpg') }}" alt="Japan">
                        <p class="image-caption">A woman in a kimono walks through a bamboo forest.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/j3.jpg') }}" alt="Japan">
                        <p class="image-caption">A person in a red dress stands on a brige.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/j4.jpg') }}" alt="Japan">
                        <p class="image-caption">Mount fuji rises majestically in the background.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/j5.jpg') }}" alt="Japan">
                        <p class="image-caption">Snow capped mountains overlook a serene landscape.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 4 -->
            <div class="section">
                <h2 class="section-title">Malaysia</h2>
                <p class="section-caption">Malaysia: A tapestry of cultures, colors, and coastlines.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/m1.jpg') }}" alt="Malaysia">
                        <p class="image-caption">Skyscrapers, adventure awaits.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/m2.jpg') }}" alt="Malaysia">
                        <p class="image-caption">A winding road through lush green mountains.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/m3.jpg') }}" alt="Malaysia">
                        <p class="image-caption">A golden statue stands at the top of colorful stairs</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/m4.jpg') }}" alt="Malaysia">
                        <p class="image-caption">A beautiful mosque sits by the water.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/m5.jpg') }}" alt="Malaysia">
                        <p class="image-caption">A tranquil turquoise sea invites expolration</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

