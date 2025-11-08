@extends('layouts.app')

@section('content') 
<title>Cars</title>
<div class="main-content-wrapper">
        <div class="gallery-container">
           <div class="gallery-header">
                <h1>Cars</h1>
                <p>A collection of unique Cars that I want to drive.</p>
            </div>
          <div class="gallery-grid">
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars1.jpg') }}" alt="Rolls-Royce Phantom">
                    <div class="card-content">
                        <h3>Rolls-Royce Phantom</h3>
                        <p>The ultimate symbol of luxury with handcrafted interiors and a whisper-quiet ride.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars2.jpg') }}" alt="Mercedes-Maybach S-Class">
                    <div class="card-content">
                        <h3>Mercedes Maybach S-Class</h3>
                        <p>A duck-billed, egg-laying mammal that lives in rivers and streams.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars3.jpg') }}" alt="Bentley Mulsanne">
                    <div class="card-content">
                        <h3>Bentley Mulsanne</h3>
                        <p>Combines British craftmanship with a powerful V8 engine.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars4.jpg') }}" alt="Aston Martin DB12">
                    <div class="card-content">
                        <h3>Aston Martin DB12</h3>
                        <p>Elegant design meets thrilling grand tourer performance.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars5.jpg') }}" alt="Bugatti Chiron">
                    <div class="card-content">
                        <h3>Bugatti Chiron</h3>
                        <p>A hypercar boasting over 1,500 horsepower and unmatched speed.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars6.jpg') }}" alt="Lamborghini Aventador">
                    <div class="card-content">
                        <h3>Lamborghini Aventador</h3>
                        <p>Bold, aggressive, and powered by a roaring V12 engine.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars7.jpg') }}" alt="Ferrari SF90 Stradale">
                    <div class="card-content">
                        <h3>Ferrari SF90 Stradale</h3>
                        <p>A plug-in hybrid supercar blending speed, power, and innovation.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars8.jpg') }}" alt="McLaren 720S">
                    <div class="card-content">
                        <h3>McLaren 720S</h3>
                        <p>Lightweight, aerodynamic, and insanely fast on both road and track.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars9.jpg') }}" alt="Porsche 911 Turbo S">
                    <div class="card-content">
                        <h3>Porsche 911 Turbo S</h3>
                        <p>A perfect mix of luxury, precision, and everyday usability.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars10.jpg') }}" alt="Pagani Huayra">
                    <div class="card-content">
                        <h3>Pagani Huayra</h3>
                        <p>A hand-built Italian masterpiece with art-like design and extreme power.</p>
                    </div>
                </div>
                 <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars11.jpg') }}" alt="BMW 7 Series">
                    <div class="card-content">
                        <h3>BMW 7 Series</h3>
                        <p>Executive luxury sedan with advanced tech and smooth performance.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars12.jpg') }}" alt="Audi A8">
                    <div class="card-content">
                        <h3>Audi A8</h3>
                        <p>Elegant design paired with superior comfort and intelligent systems.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars13.jpg') }}" alt="Lexus LS 500">
                    <div class="card-content">
                        <h3>Lexus LS 500</h3>
                        <p>Quiet, reliable, and beautifully crafted inside and out.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars14.jpg') }}" alt="Maserati Quattroporte">
                    <div class="card-content">
                        <h3>Maserati Quattroporte</h3>
                        <p>Italian luxury sedan known for its sporty style and engine sound.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars15.jpg') }}" alt="Jaguar XJ">
                    <div class="card-content">
                        <h3>Jaguar XJ</h3>
                        <p>Sleek British design with luxurious interiors and dynamic handling.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars16.jpg') }}" alt="Range Rover Autobiography">
                    <div class="card-content">
                        <h3>Range Rover Autobiography</h3>
                        <p>The definition of luxury SUV comfort and off-road capability.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars17.jpg') }}" alt="Bentley Bentayga">
                    <div class="card-content">
                        <h3>Bentley Bentayga</h3>
                        <p>A super-luxury SUV with handcrafted details and powerful performance.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars18.jpg') }}" alt="Rolls-Royce Cullinan">
                    <div class="card-content">
                        <h3>Rolls-Royce Cullinan</h3>
                        <p>The most luxurious SUV in the world, with unmatched elegance.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars19.jpg') }}" alt="Lamborghini Urus">
                    <div class="card-content">
                        <h3>Lamborghini Urus</h3>
                        <p>A high-performance SUV that combines power and style.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/cars/cars20.jpg') }}" alt="Porsche Cayenne Turbo GT">
                    <div class="card-content">
                        <h3>Porsche Cayenne Turbo GT</h3>
                        <p>A sporty SUV with the heart and speed of a race car.</p>
                    </div>
                </div>
          </div>
        </div>
</div> 
  @endsection