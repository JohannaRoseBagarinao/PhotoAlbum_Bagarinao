@extends('layout.page')

@section('body-class', 'car-page')
@section('content')
<div class="container">
    <h1 class="title">Sports Car</h1>
    <p class = "title-caption"> "A sports car is a high-performance automobile designed for speed, agility, and driving pleasure. Unlike regular cars, sports cars prioritize handling, acceleration, and style over passenger space or cargo capacity." </p>

    <div class="columns">

        <!-- LEFT COLUMN -->
        <div class="left-column">

            <!-- CATEGORY 1 -->
            <div class="section">
                <h2 class="section-title">Bugatti</h2>
                <p class="section-caption">Bugatti is a luxury sports car brand known for producing some of the fastest and most expensive cars in the world.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/b1.jpg') }}" alt="Bugatti">
                        <p class="image-caption">Bugatti vehicles combine cutting-edge engineering with exquisite design and craftsmanship.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/b2.jpg') }}" alt="Bugatti">
                        <p class="image-caption">The brand is famous for models like the Chiron, Veyron, and Divo, which push the limits of speed and performance.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/b3.jpg') }}" alt="Bugatti">
                        <p class="image-caption">Bugatti cars are often a symbol of prestige, exclusivity, and wealth.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/b4.jpg') }}" alt="Bugatti">
                        <p class="image-caption">Each Bugatti is built with high-performance engines, advanced aerodynamics, and luxurious interiors.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/b5.jpg') }}" alt="Bugatti">
                        <p class="image-caption">The company represents a legacy of innovation, blending French elegance with German engineering excellence.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 2 -->
            <div class="section">
                <h2 class="section-title">Lamborghini</h2>
                <p class="section-caption">Lamborghini is an Italian luxury sports car brand renowned for its bold designs and extreme performance.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/ll1.jpg') }}" alt="Lamborghini">
                        <p class="image-caption">The brand is famous for its V12 and V10 engines, delivering incredible speed and acceleration.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ll2.jpg') }}" alt="Lamborghini">
                        <p class="image-caption">Lamborghini cars, like the Aventador, Huracán, and Urus, are known for their aggressive, aerodynamic styling.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ll3.jpg') }}" alt="Lamborghini">
                        <p class="image-caption">Owning a Lamborghini is often seen as a symbol of wealth, prestige, and passion for driving.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ll4.jpg') }}" alt="Lamborghini">
                        <p class="image-caption">The company combines cutting-edge technology with Italian craftsmanship to create high-performance vehicles.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ll5.jpg') }}" alt="Lamborghini">
                        <p class="image-caption">Lamborghini represents a spirit of innovation, luxury, and daring design in the automotive world.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="right-column">

            <!-- CATEGORY 3 -->
            <div class="section">
                <h2 class="section-title">Mustang</h2>
                <p class="section-caption">The Ford Mustang is an iconic American muscle car known for its powerful engines and sporty performance.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/q1.jpg') }}" alt="Mustang">
                        <p class="image-caption">Mustangs are famous for their aggressive styling, long hoods, and distinctive front grilles.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/q2.jpg') }}" alt="Mustang">
                        <p class="image-caption">The car combines speed, handling, and affordability, making it a favorite among car enthusiasts.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/q3.jpg') }}" alt="Mustang">
                        <p class="image-caption">Mustang models, like the GT and Shelby, are celebrated for their high-performance V8 engines.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/q4.jpg') }}" alt="Mustang">
                        <p class="image-caption">The Mustang symbolizes freedom, American automotive culture, and the thrill of driving.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/q5.jpg') }}" alt="Mustang">
                        <p class="image-caption">Over decades, the Mustang has maintained its classic design heritage while incorporating modern technology and features.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 4 -->
            <div class="section">
                <h2 class="section-title">Porche</h2>
                <p class="section-caption">Porsche is a German luxury sports car brand renowned for its precision engineering and high performance.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/x1.jpg') }}" alt="Porche">
                        <p class="image-caption">The brand is famous for models like the 911, Cayman, Boxster, and Panamera, each combining speed with luxury.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/x2.jpg') }}" alt="Porche">
                        <p class="image-caption">Porsche cars are celebrated for their iconic design, sleek lines, and aerodynamic profiles.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/x3.jpg') }}" alt="Porche">
                        <p class="image-caption">The company blends cutting-edge technology with superior handling, offering an exceptional driving experience.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/x4.jpg') }}" alt="Porche">
                        <p class="image-caption">Owning a Porsche symbolizes prestige, sophistication, and a passion for driving excellence.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/x5.jpg') }}" alt="Porche">
                        <p class="image-caption">Porsche represents a legacy of innovation, motorsport success, and timeless automotive design.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
