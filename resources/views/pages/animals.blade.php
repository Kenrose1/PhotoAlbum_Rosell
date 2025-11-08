@extends('layouts.app')

@section('content')
<title>Animals</title>
<div class="main-content-wrapper">
        <div class="gallery-container">
           <div class="gallery-header">
                <h1>Animals</h1>
                <p>A collection of unique Animals that I want to see.</p>
            </div>
          <div class="gallery-grid">
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/platypus.jpg') }}" alt="Platypus">
                    <div class="card-content">
                        <h3>Platypus</h3>
                        <p>A duck-billed, egg-laying mammal that lives in rivers and streams.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/ayeaye.jpg') }}" alt="Aye-Aye">
                    <div class="card-content">
                        <h3>Aye-Aye</h3>
                        <p>A nocturnal lemur with long fingers used to tap trees for insects.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/okapi.jpg') }}" alt="Okapi">
                    <div class="card-content">
                        <h3>Okapi</h3>
                        <p>A forest animal that looks like a mix between a zebra and a giraffe.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/narwhal.jpg') }}" alt="Narwhal">
                    <div class="card-content">
                        <h3>Narwhal</h3>
                        <p>Known as the “unicorn of the sea” for its long spiral tusk.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/axolot.jpg') }}" alt="Axolotl">
                    <div class="card-content">
                        <h3>Axolotl</h3>
                        <p>A salamander that stays in its larval form forever and can regrow limbs.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/shoebill.jpg') }}" alt="Shoebill">
                    <div class="card-content">
                        <h3>Shoebill</h3>
                        <p>A large bird with a shoe-shaped bill and dinosaur-like appearance.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/kapopo.jpg') }}" alt="Kakapo">
                    <div class="card-content">
                        <h3>Kakapo</h3>
                        <p>The world’s only flightless parrot and one of the rarest birds alive.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/hoatzin.jpg') }}" alt="Hoatzin">
                    <div class="card-content">
                        <h3>Hoatzin</h3>
                        <p>A strange bird with blue skin, a spiky crest, and a leaf-eating diet.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/secrebird.jpg') }}" alt="Secretary Bird">
                    <div class="card-content">
                        <h3>Secretary Bird</h3>
                        <p>A tall bird of prey that hunts snakes on foot.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/quetzal.jpg') }}" alt="Quetzal">
                    <div class="card-content">
                        <h3>Quetzal</h3>
                        <p>A colorful, long-tailed bird considered sacred by ancient civilizations.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/komodo.jpg') }}" alt="Komodo Dragon">
                    <div class="card-content">
                        <h3>Komodo Dragon</h3>
                        <p>The largest living lizard, capable of hunting deer and wild pigs.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/leafgecko.jpg') }}" alt="Leaf-Tailed Gecko">
                    <div class="card-content">
                        <h3>Leaf-Tailed Gecko</h3>
                        <p>Perfectly camouflaged to look like a dead leaf.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/glassfrog.jpg') }}" alt="Glass Frog">
                    <div class="card-content">
                        <h3>Glass Frog</h3>
                        <p>A small frog with transparent skin showing its organs.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/thornydevil.jpg') }}" alt="Thorny Devil">
                    <div class="card-content">
                        <h3>Thorny Devil</h3>
                        <p>A spiky, desert lizard that drinks water through its skin.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/animals/flyingdragon.jpg') }}" alt="Flying Dragon">
                    <div class="card-content">
                        <h3>Flying Dragon</h3>
                        <p>A small lizard that glides through the air with its wing-like ribs.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/animals/mantisshrimp.jpg') }}" alt="Mantis Shrimp">
                    <div class="card-content">
                        <h3>Mantis Shrimp</h3>
                        <p>A colorful shrimp with a punch strong enough to break glass.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/animals/leafysea.jpg') }}" alt="Leafy Sea Dragon">
                    <div class="card-content">
                        <h3>Leafy Sea Dragon</h3>
                        <p>A seahorse relative disguised as floating seaweed.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/bluedragon.jpg') }}" alt="Blue Dragon">
                    <div class="card-content">
                        <h3>Blue Dragon</h3>
                        <p>A tiny, bright-blue sea slug that floats on the water’s surface.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/goblinshark.jpg') }}" alt="Goblin Shark">
                    <div class="card-content">
                        <h3>Goblin Shark</h3>
                        <p>A deep-sea shark with a long snout and extendable jaws.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/animals/yeticrab.jpg') }}" alt="Yeti Crab">
                    <div class="card-content">
                        <h3>Yeti Crab</h3>
                        <p>A fuzzy, white crab discovered near deep-sea vents.</p>
                    </div>
                </div>
          </div>
        </div> 
</div> 
@endsection