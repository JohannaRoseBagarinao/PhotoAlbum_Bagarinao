@extends('layout.page')

@section('body-class', 'anime-page')
@section('content')
<div class="container">
    <h1 class="title">Anime</h1>
    <p class="title-caption">
        "Anime is a style of animation that originated in Japan. It includes TV series, movies, OVAs, and web animations, covering every genre you can imagine—action, romance, horror, comedy, sci-fi, slice of life, and more."
    </p>

    <div class="columns">

        <!-- LEFT COLUMN -->
        <div class="left-column">

            <!-- CATEGORY 1 -->
            <div class="section">
                <h2 class="section-title">Naruto</h2>
                <p class="section-caption">
                    Naruto is a Japanese manga and anime series created by Masashi Kishimoto. It tells the story of Naruto Uzumaki,
                    a young ninja with dreams of becoming the strongest leader of his village, known as the Hokage. The series is
                    renowned for its deep storytelling, character development, epic battles, and themes of friendship, perseverance,
                    and self-discovery.
                </p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/n1.jpg') }}" alt="Naruto">
                        <p class="image-caption">If you don’t like your destiny, don’t accept it. Instead, have the courage to change it.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/n2.jpg') }}" alt="Naruto">
                        <p class="image-caption">I’m not gonna run away, I never go back on my word… that’s my nindō: my ninja way.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/n3.jpg') }}" alt="Naruto">
                        <p class="image-caption">Hard work is worthless for those that don’t believe in themselves.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/n4.jpg') }}" alt="Naruto">
                        <p class="image-caption">In society, those who don’t have many abilities tend to complain more.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/n5.jpg') }}" alt="Naruto">
                        <p class="image-caption">People live their lives bound by what they accept as correct and true.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 2 -->
            <div class="section">
                <h2 class="section-title">One Piece</h2>
                <p class="section-caption">
                    One Piece is a Japanese manga and anime series created by Eiichiro Oda. It follows the adventures of Monkey D.
                    Luffy, a young pirate with a dream of finding the legendary treasure called One Piece and becoming the King of the
                    Pirates. The series is famous for its imaginative world-building, epic battles, rich characters, and themes of
                    friendship, freedom, and adventure.
                </p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/o1.jpg') }}" alt="One Piece">
                        <p class="image-caption">I don’t want to conquer anything. I just think the guy with the most freedom in the world is the Pirate King.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/o2.jpg') }}" alt="One Piece">
                        <p class="image-caption">When the world shoves you around, you just gotta stand up and shove back.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/o3.jpg') }}" alt="One Piece">
                        <p class="image-caption">You can’t get back what you’ve lost, but you can still fight for what you have.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/o4.jpg') }}" alt="One Piece">
                        <p class="image-caption">Life is like a pencil that will surely run out, but will leave the beautiful writing of life behind.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/o5.jpg') }}" alt="One Piece">
                        <p class="image-caption">You call yourself a doctor? A doctor saves people.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="right-column">

            <!-- CATEGORY 3 -->
            <div class="section">
                <h2 class="section-title">Chainsaw Man</h2>
                <p class="section-caption">
                    Chainsaw Man is a Japanese manga series written and illustrated by Tatsuki Fujimoto. It blends dark fantasy,
                    horror, and action with a strong dose of dark humor and emotional depth. The story centers on Denji, a young man
                    burdened by debt who merges with his pet devil, Pochita, to become the titular Chainsaw Man, a devil-human hybrid
                    with chainsaws for limbs.
                </p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/c1.jpg') }}" alt="Chainsaw Man">
                        <p class="image-caption">I don’t know what’s right or wrong. I just do what I wanna do.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/c2.jpg') }}" alt="Chainsaw Man">
                        <p class="image-caption">People are motivated by two things: the promise of safety and the fear of loss.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/c3.jpg') }}" alt="Chainsaw Man">
                        <p class="image-caption">If you don’t fight, you can’t protect anyone.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/c4.jpg') }}" alt="Chainsaw Man">
                        <p class="image-caption">This job breaks people. That’s why you need someone to hold on to.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/c5.jpg') }}" alt="Chainsaw Man">
                        <p class="image-caption">Sometimes you don’t get to be a good person and stay alive.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 4 -->
            <div class="section">
                <h2 class="section-title">Haikyu</h2>
                <p class="section-caption">
                    Haikyu is a Japanese sports manga and anime series written and illustrated by Haruichi Furudate. It focuses on high
                    school volleyball, telling the story of Shoyo Hinata, a short but determined player who dreams of becoming a top
                    volleyball athlete despite his height disadvantage.
                </p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/h1.jpg') }}" alt="Haikyu">
                        <p class="image-caption">If you’re the king, then I’ll defeat you and become the ace.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/h2.jpg') }}" alt="Haikyu">
                        <p class="image-caption">A setter is the one who delivers the ball that makes everyone shine.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/h3.jpg') }}" alt="Haikyu">
                        <p class="image-caption">We don’t need heroes. We just need six players who won’t give up.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/h4.jpg') }}" alt="Haikyu">
                        <p class="image-caption">There’s no such thing as a replacement for hard work.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/h5.jpg') }}" alt="Haikyu">
                        <p class="image-caption">I’m not the libero because I’m the best… I’m the libero because I won’t let the ball hit the floor.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
