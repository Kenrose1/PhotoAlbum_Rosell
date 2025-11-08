@extends('layouts.app')

@section('content')
<title>Mountains</title>
<div class="main-content-wrapper">
        <div class="gallery-container">
           <div class="gallery-header">
                <h1>Mountains</h1>
                <p>A collection of Mountains that I want to visit.</p>
            </div>
          <div class="gallery-grid">
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mteverest.jpg') }}" alt="Mount Everest">
                    <div class="card-content">
                        <h3>Mount Everest</h3>
                        <p>The world’s highest mountain, known as the “Roof of the World.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtfuji.jpg') }}" alt="Mount Fuji">
                    <div class="card-content">
                        <h3>Mount Fuji</h3>
                        <p>Japan’s iconic snow-capped volcano and a symbol of peace and beauty.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtmatterhorn.jpg') }}" alt="Matterhorn">
                    <div class="card-content">
                        <h3>Mount Matterhorn</h3>
                        <p>A perfectly shaped pyramid peak, one of the most photographed in the world.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtk2.jpg') }}" alt="K2">
                    <div class="card-content">
                        <h3>Mount K2</h3>
                        <p>The world’s second-highest and one of the most challenging peaks to climb.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtkijiman.jpg') }}" alt="Mount Kilimanjaro">
                    <div class="card-content">
                        <h3>Mount Kilimanjaro</h3>
                        <p>Africa’s highest mountain, famous for its snowy summit above the savannah.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtetna.jpg') }}" alt="Mount Etna">
                    <div class="card-content">
                        <h3>Mount Etna</h3>
                        <p>A perfectly shaped pyramid peak, one of the most photographed in the world.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtvesu.jpg') }}" alt="Mount Vesuvius">
                    <div class="card-content">
                        <h3>Mount Vesuvius</h3>
                        <p>The volcano that buried Pompeii, now a popular tourist hike.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtmauna.jpg') }}" alt="Mauna Kea">
                    <div class="card-content">
                        <h3>Mauna Kea</h3>
                        <p>A massive dormant volcano and one of the world’s best stargazing spots.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtbromo.jpg') }}" alt="Mount Bromo">
                    <div class="card-content">
                        <h3>Mount Bromo</h3>
                        <p>A smoky volcano surrounded by a vast “sea of sand".</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtandres.jpg') }}" alt="Andes Mountains">
                    <div class="card-content">
                        <h3>Andes Mountains</h3>
                        <p>The longest continental mountain range, stretching across seven countries.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtmayon.jpg') }}" alt="Mount Mayon">
                    <div class="card-content">
                        <h3>Mount Mayon</h3>
                        <p>Famous for its perfect cone shape and stunning views.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtrocky.jpg') }}" alt="Rocky Mountains">
                    <div class="card-content">
                        <h3>Rocky Mountains</h3>
                        <p>A vast range with snow peaks, forests, and breathtaking national parks.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtalps.jpg') }}" alt="Mount Alps">
                    <div class="card-content">
                        <h3>Mount Alps</h3>
                        <p>A famous mountain range with skiing, hiking, and postcard-perfect views.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtdolomites.jpg') }}" alt="Dolomites">
                    <div class="card-content">
                        <h3>Dolomites</h3>
                        <p>Jagged limestone peaks with dramatic scenery and beautiful alpine villages.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mthimalayas.jpg') }}" alt="Himalayas">
                    <div class="card-content">
                        <h3>Himalayas</h3>
                        <p>Home to the world’s tallest peaks, sacred temples, and peaceful valleys.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mttable.jpg') }}" alt="Table Mountain">
                    <div class="card-content">
                        <h3>Table Mountain</h3>
                        <p>A flat-topped mountain overlooking Cape Town with stunning sunsets.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtcook.jpg') }}" alt="Mount Cook">
                    <div class="card-content">
                        <h3>Mount Cook</h3>
                        <p>The highest mountain in New Zealand, surrounded by glaciers and lakes.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtdenali.jpg') }}" alt="Mount Denali">
                    <div class="card-content">
                        <h3>Mount Denali</h3>
                        <p>North America’s tallest peak, known for its extreme beauty and isolation.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtelbrus.jpg') }}" alt="Mount Elbrus">
                    <div class="card-content">
                        <h3>Mount Elbrus</h3>
                        <p>The highest mountain in Europe, with snow-covered slopes year-round.</p>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('image/mountains/mtrainbow.jpg') }}" alt="Rainbow Mountain">
                    <div class="card-content">
                        <h3>Rainbow Mountain</h3>
                        <p>A colorful mountain streaked with natural rainbow-like minerals.</p>
                    </div>
                </div>
          </div>
        </div>
</div>
  @endsection