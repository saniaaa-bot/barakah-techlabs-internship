@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="text-muted">Have a question? We'd love to hear from you.</p>
    </div>

    <div class="row g-4">
        <!-- Contact Info -->
        <div class="col-lg-5">
            <div class="feature-card">
                <h4 class="mb-4">Get in Touch</h4>
                
                <div class="d-flex mb-3">
                    <i class="bi bi-envelope-fill me-3" style="font-size: 1.5rem; color: #6d28d9;"></i>
                    <div>
                        <strong>Email</strong><br>
                        <span class="text-muted">sania@barakahtechlabs.com</span>
                    </div>
                </div>
                
                <div class="d-flex mb-3">
                    <i class="bi bi-telephone-fill me-3" style="font-size: 1.5rem; color: #6d28d9;"></i>
                    <div>
                        <strong>Phone</strong><br>
                        <span class="text-muted">+92 300 1234567</span>
                    </div>
                </div>
                
                <div class="d-flex mb-3">
                    <i class="bi bi-geo-alt-fill me-3" style="font-size: 1.5rem; color: #6d28d9;"></i>
                    <div>
                        <strong>Location</strong><br>
                        <span class="text-muted">Karachi, Pakistan</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-7">
            <div class="feature-card">
                <h4 class="mb-4">Send a Message</h4>
                <form id="contactForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Your name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="your@email.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="4" placeholder="Write your message..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-gradient">
                                <i class="bi bi-send"></i> Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('✅ Message sent successfully! (Demo only)');
        this.reset();
    });
</script>

@endsection