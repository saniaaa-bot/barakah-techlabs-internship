@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Welcome to Barakah TechLabs</h1>
        <p class="mb-4">Laravel Routing & Blade Templating Demo</p>
        <a href="#features" class="btn btn-light btn-lg rounded-pill px-4">
            <i class="bi bi-arrow-down-circle"></i> Explore Features
        </a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">What We Built</h2>
        <p class="text-muted">Using Laravel's powerful features</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-signpost-split feature-icon"></i>
                <h4>Routing</h4>
                <p class="text-muted">Clean URL routing with named routes for Home, About, and Contact pages.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-layers feature-icon"></i>
                <h4>Controllers</h4>
                <p class="text-muted">Organized logic using PageController following MVC architecture.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-file-earmark-code feature-icon"></i>
                <h4>Blade Templating</h4>
                <p class="text-muted">Reusable layouts, sections, and components with Blade engine.</p>
            </div>
        </div>
    </div>
</section>

@endsection