@extends('layout.page')

@section('body-class', 'arts-page')
@section('content')
<div class="container">
    <h1 class="title">Arts</h1>
    <p class="title-caption">
        "Art is a form of human expression that communicates ideas, emotions, stories, or perspectives through different mediums.
        It’s not limited to painting or drawing—art is everywhere: visuals, music, movement, writing, performance, design, and even digital creations."
    </p>

    <div class="columns">

        <!-- LEFT COLUMN -->
        <div class="left-column">

            <!-- CATEGORY 1 -->
            <div class="section">
                <h2 class="section-title">Painting</h2>
                <p class="section-caption">Painting is a visual art in which artists use pigments on a surface to create images, express ideas, or convey emotions.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/p1.jpg') }}" alt="Painting">
                        <p class="image-caption">Painting is a means of communicating feelings, stories, or perspectives without the use of words, relying on visuals and symbolism.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/p2.jpg') }}" alt="Painting">
                        <p class="image-caption">Painting is the act of applying color using tools like brushes, knives, sponges, or fingers to form shapes, textures, and compositions.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/p3.jpg') }}" alt="Painting">
                        <p class="image-caption">Painting refers to artworks produced using mediums such as oil, acrylic, watercolor, gouache, ink, or mixed media.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/p4.jpg') }}" alt="Painting">
                        <p class="image-caption">Painting is a cultural practice that reflects the traditions, beliefs, and experiences of a community or historical period.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/p5.jpg') }}" alt="Painting">
                        <p class="image-caption">Painting is the creation of visual representations—realistic or abstract—of objects, people, landscapes, or imaginary scenes.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 2 -->
            <div class="section">
                <h2 class="section-title">Drawing</h2>
                <p class="section-caption">Drawing is a form of visual art in which lines, marks, and shapes are created on a surface to represent ideas, objects, or emotions.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/d1.jpg') }}" alt="Drawing">
                        <p class="image-caption">Drawing is the act of making lines and marks using tools such as pencils, pens, charcoal, or digital styluses.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/d2.jpg') }}" alt="Drawing">
                        <p class="image-caption">Drawing is the fundamental skill of art that helps artists plan, design, and visualize concepts before creating more complex artworks.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/d3.jpg') }}" alt="Drawing">
                        <p class="image-caption">Drawing is a visual language used to communicate thoughts, tell stories, or express feelings without the use of words.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/d4.jpg') }}" alt="Drawing">
                        <p class="image-caption">Drawing is a precise method of representing objects or structures in fields like engineering, architecture, and design.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/d5.jpg') }}" alt="Drawing">
                        <p class="image-caption">Drawing is the practice of studying and capturing the appearance, form, and proportions of subjects through careful observation.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="right-column">

            <!-- CATEGORY 3 -->
            <div class="section">
                <h2 class="section-title">Cubism</h2>
                <p class="section-caption">Cubism is an early 20th-century art movement that broke traditional perspectives by presenting subjects from multiple viewpoints at once.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/k1.jpg') }}" alt="Cubism">
                        <p class="image-caption">Cubism is a style of art characterized by geometric shapes, fragmented forms, and abstracted structures that simplify or distort reality.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/k2.jpg') }}" alt="Cubism">
                        <p class="image-caption">Cubism is a revolutionary approach to visual perception, aiming to depict the essence of objects by showing different angles simultaneously.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/k3.jpg') }}" alt="Cubism">
                        <p class="image-caption">Cubism is an artistic response against realistic representation, rejecting naturalistic details and emphasizing form, structure, and analysis.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/k4.jpg') }}" alt="Cubism">
                        <p class="image-caption">Cubism is a movement developed mainly by Pablo Picasso and Georges Braque, who experimented with breaking objects into planes and facets.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/k5.jpg') }}" alt="Cubism">
                        <p class="image-caption">Cubism is a foundational movement that influenced modern art, inspiring abstract art, Futurism, Constructivism, and other contemporary styles.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 4 -->
            <div class="section">
                <h2 class="section-title">Graffiti</h2>
                <p class="section-caption">Graffiti is a form of visual art created in public spaces, often using spray paint, markers, or stencils to produce images or words.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/g1.jpg') }}" alt="Graffiti">
                        <p class="image-caption">Graffiti is a way for individuals or groups to express identity, emotions, political views, or social messages in public areas.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/g2.jpg') }}" alt="Graffiti">
                        <p class="image-caption">Graffiti is writing or drawing made on walls and surfaces without permission, considered vandalism in many places.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/g3.jpg') }}" alt="Graffiti">
                        <p class="image-caption">Graffiti is a visual language used within communities to communicate ideas, mark territory, or share cultural symbols.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/g4.JPG') }}" alt="Graffiti">
                        <p class="image-caption">Graffiti is part of hip-hop culture and urban art movements, representing creativity, rebellion, and youth identity.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/g5.jpg') }}" alt="Graffiti">
                        <p class="image-caption">Graffiti is an evolving art form that incorporates techniques like tagging, murals, throw-ups, and street installations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
