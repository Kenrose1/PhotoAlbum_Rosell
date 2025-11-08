@extends('layouts.app')

@section('content')
<title>Homepage</title>
<div id="welcome">
<div id="home">
    <h2 class="hero-title">Welcome to Ken's Photo gallery</h2>
</div>
<p class="hero-subtitle">Luxurious. Fascinating. Collections.</p>
<a href="{{ route('nature') }}" class="cta-button">See The Album</a>
</div>
@endsection