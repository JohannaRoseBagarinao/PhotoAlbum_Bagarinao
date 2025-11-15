@extends('layout.page')

@section('body-class', 'moviesgenre-page')
@section('content')
<div class="container">
    <h1 class="title">Movies Genre</h1>
    <p class="title-caption">"A movie genre is a category that describes the general style, theme, and mood of a film. It tells us what kind of story to expect and how the film is likely to make us feel. Genres also help us group similar movies together."</p>

    <div class="columns">

        <!-- LEFT COLUMN -->
        <div class="left-column">

            <!-- CATEGORY 1 -->
            <div class="section">
                <h2 class="section-title">Horror</h2>
                <p class="section-caption">The genre often reflects societal fears, human psychology, and moral questions through frightening stories.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/ho1.jpg') }}" alt="Horror">
                        <p class="image-caption">A paranormal investigators couple helps a family terrorized by a dark presence in their farmhouse.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ho2.jpg') }}" alt="Horror">
                        <p class="image-caption">A grieving family uncovers terrifying secrets about their ancestry after a tragedy strikes.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ho3.jpg') }}" alt="Horror">
                        <p class="image-caption">A family must live in silence to avoid deadly creatures that hunt by sound.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ho4.jpg') }}" alt="Horror">
                        <p class="image-caption">A cursed videotape brings death to anyone who watches it within seven days.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ho5.jpg') }}" alt="Horror">
                        <p class="image-caption">A shape-shifting clown feeds on the fears of children in a small town.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 2 -->
            <div class="section">
                <h2 class="section-title">Action</h2>
                <p class="section-caption">Action is a movie genre that emphasizes physical excitement, fast-paced scenes, and daring stunts.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/ac1.jpg') }}" alt="Action">
                        <p class="image-caption">A lone drifter and a rebel warrior race across a desert wasteland while fleeing a tyrannical warlord.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ac2.jpg') }}" alt="Action">
                        <p class="image-caption">A retired hitman returns to the underworld for revenge after criminals destroy the last thing he loves.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ac3.jpg') }}" alt="Action">
                        <p class="image-caption">Batman faces his greatest challenge yet as the Joker unleashes chaos on Gotham City.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ac4.jpg') }}" alt="Action">
                        <p class="image-caption">A betrayed Roman general fights his way from slavery to challenge the corrupt emperor who ruined his life.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ac5.jpg') }}" alt="Action">
                        <p class="image-caption">Ethan Hunt and his team race to stop a global catastrophe after a mission goes wrong.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="right-column">

            <!-- CATEGORY 3 -->
            <div class="section">
                <h2 class="section-title">Comedy</h2>
                <p class="section-caption">Comedy is a movie genre designed to make audiences laugh and entertain.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/w1.jpg') }}" alt="Comedy">
                        <p class="image-caption">Three friends retrace their wild night in Las Vegas after losing the groom before his wedding.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/w2.jpg') }}" alt="Comedy">
                        <p class="image-caption">Two awkward teens try to make the most of their last days of high school with a chaotic night out.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/w3.jpg') }}" alt="Comedy">
                        <p class="image-caption">Two immature middle-aged men become rivals and eventually partners in chaos when their parents marry.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/w4.jpg') }}" alt="Comedy">
                        <p class="image-caption">Two underachieving cops go undercover as high school students to bust a drug ring.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/w5.jpg') }}" alt="Comedy">
                        <p class="image-caption">A woman discovers her boyfriend is part of an insanely wealthy family, leading to funny and dramatic culture clashes.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 4 -->
            <div class="section">
                <h2 class="section-title">Romance</h2>
                <p class="section-caption">Romance is a movie genre that focuses on love stories and emotional relationships.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/t1.jpg') }}" alt="Romance">
                        <p class="image-caption">A young couple falls deeply in love, but class differences and life’s challenges pull them apart.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/t2.jpg') }}" alt="Romance">
                        <p class="image-caption">An aspiring actress and a jazz musician fall in love while chasing their dreams in Los Angeles.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/t3.jpg') }}" alt="Romance">
                        <p class="image-caption">A forbidden romance blossoms between two passengers aboard the ill-fated ship.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/t4.jpg') }}" alt="Romance">
                        <p class="image-caption">Elizabeth Bennet navigates love, misunderstandings, and societal expectations with the enigmatic Mr. Darcy.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/t5.jpg') }}" alt="Romance">
                        <p class="image-caption">Two teens with serious illnesses find love and meaning during their emotional journey together.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
