@extends('layouts.app')

@section('content')
<title>Beach</title>
<div class="main-content-wrapper">
        <di class="gallery-container">
           <div class="gallery-header">
                <h1>Beach</h1>
                <p>A collection of beach that I want to visit.</p>
            </div>
          <div class="gallery-grid">
                   <div class="gallery-card">
                    <img src="{{ asset('image/beach/whitehavenbeach.jpg') }}" alt="Whitehaven Beach">
                    <div class="card-content">
                        <h3>Whitehaven Beach</h3>
                        <p>Famous for its pure white silica sand and swirling turquoise waters.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/boraborabeach.jpg') }}" alt="Bora Bora Beach">
                    <div class="card-content">
                        <h3>Bora Bora Beach</h3>
                        <p>A dreamlike lagoon island with overwater villas and crystal-clear seas.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/maldivesisland.jpg') }}" alt="Maldives Island">
                    <div class="card-content">
                        <h3>Maldives Island</h3>
                        <p>A paradise of coral atolls, clear lagoons, and luxury floating resorts.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/waikikibeach.jpg') }}" alt="Waikiki Beach">
                    <div class="card-content">
                        <h3>Waikiki Beach</h3>
                        <p>Iconic surf destination framed by the city skyline and Diamond Head volcano.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/palawan.jpg') }}" alt="Palawan">
                    <div class="card-content">
                        <h3>Palawan</h3>
                        <p>Known for its limestone cliffs, emerald lagoons, and stunning island scenery.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/railaybeach.jpg') }}" alt="Railay Beach">
                    <div class="card-content">
                        <h3>Railay Beach</h3>
                        <p>A hidden gem surrounded by limestone cliffs and only reachable by boat.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/beach/pinkbeach.jpg') }}" alt="Pink Beach">
                    <div class="card-content">
                        <h3>Pink Beach</h3>
                        <p>Unique pink-tinted sand caused by crushed coral and shells.</p>
                    </div>
                 </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/ngapalibeach.jpg') }}" alt="Ngapali Beach">
                    <div class="card-content">
                        <h3>Ngapali Beach</h3>
                        <p>Peaceful, palm-fringed beach perfect for quiet relaxation.</p>
                    </div>
                </div>
                    <div class="gallery-card">
                    <img src="{{ asset('image/beach/kutabeach.jpg') }}" alt="Kuta Beach">
                    <div class="card-content">
                        <h3>Kuta Beach</h3>
                        <p>A lively beach with golden sand, great waves, and a bustling nightlife.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/beach/elnidobeach.jpg') }}" alt="El Nido Beach">
                    <div class="card-content">
                        <h3>El Nido Beach</h3>
                        <p>A tropical haven with dramatic karst cliffs and crystal-blue island waters.</p>
                    </div>
                 </div>
                  <div class="gallery-card">
                    <img src="{{ asset('image/beach/gracebaybeach.jpg') }}" alt="Grace Bay">
                    <div class="card-content">
                        <h3>Grace Bay</h3>
                        <p>Calm, shallow turquoise waters ideal for swimming and snorkeling.</p>
                    </div>
                 </div>
                  <div class="gallery-card">
                    <img src="{{ asset('image/beach/eaglebeach.jpg') }}" alt="Eagle Beach">
                    <div class="card-content">
                        <h3>Eagle Beach</h3>
                        <p>Wide sandy shore lined with iconic, wind-shaped Divi Divi trees.</p>
                    </div>
                  </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/playabeach.jpg') }}" alt="Playa Paraiso">
                    <div class="card-content">
                        <h3>Playa Paraiso</h3>
                        <p>Serene beach living up to its name with calm seas and white powdery sand.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/tulumbeach.jpg') }}" alt="Tulum Beach">
                    <div class="card-content">
                        <h3>Tulum Beach</h3>
                        <p>Scenic coastline with ancient Mayan ruins overlooking turquoise waves.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/beach/sevenmbeach.jpg') }}" alt="Seven Mile Beach">
                    <div class="card-content">
                        <h3>Seven Mile Beach</h3>
                        <p>Long, beautiful stretch of soft sand and crystal-clear water.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/beach/navagiobeach.jpg') }}" alt="Navagio Beach">
                    <div class="card-content">
                        <h3>Navagio Beach</h3>
                        <p>The world-famous “Shipwreck Beach,” surrounded by dramatic white cliffs.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/beach/amalfi.jpg') }}" alt="Amalfi Coast">
                    <div class="card-content">
                        <h3>Amalfi Coast</h3>
                        <p>Picturesque coastline of colorful villages and breathtaking seaside views.</p>
                    </div>
                 </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/beach/praidabeach.jpg') }}" alt="Praia da Marinha">
                    <div class="card-content">
                        <h3>Praia da Marinha</h3>
                        <p>Golden cliffs and sea caves make this beach a photographer’s dream.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/playadebeach.jpg') }}" alt="Playa de Ses Illetes">
                    <div class="card-content">
                        <h3>Playa de Ses Illetes</h3>
                        <p>Shallow turquoise waters and soft white sand create a peaceful retreat.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/beach/renibeach.jpg') }}" alt="Reynisfjara Beach">
                    <div class="card-content">
                        <h3>Reynisfjara Beach</h3>
                        <p>Striking black sand beach with basalt columns and roaring Atlantic waves.</p>
                    </div>
                </div>
                
          </div>
        </div>
</div>
@endsection