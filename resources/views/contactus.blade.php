@extends('base')

@section('content')
<style>
.full-content{
    padding-top: 1rem;
}
.back-button {
    display:inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border: 2px solid #8B4513; /* warna coklat */
    border-radius: 50%;
    text-decoration: none;
    color: #8B4513;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
    transition: background-color 0.2s ease, color 0.2s ease;
}

.back-button:hover {
    background-color: #8B4513;
    color: white;
}
</style>
<div class="container mt-5">
    <a href={{ url()->previous() }} class="back-button" title="Back">
            ←
        </a>
    <h2 class="fw-bold" style="font-family: 'Playfair Display';">Contact Us</h2>

    <div class="row mt-4">
        <div class="col-md-6">
            <img src="{{ asset('img/store.jpeg') }}" class="img-fluid">
        </div>

        <div class="col-md-6">
            <h5 class="fw-bold">Questions or concerns? We're here for you.</h5>
            <p>Need help, have a question, or just want to say hello? Contact Lumiere’s customer service or find the answers below.</p>

            <h5 class="fw-bold mt-4">Get your answer right now:</h5>
            <ul>
                <li><a href="{{ route('faq') }}" style="color: black;">How can I safely use and care for my candles/home fragrances?</a></li>
                <li><a href="{{ route('faq') }}" style="color: black;">Where do you ship?</a></li>
                <li><a href="{{ route('faq') }}" style="color: black;">See all FAQ</a></li>
            </ul>
        </div>

        <div class="row mt-4">
                <div class="col-md-4">
                    <h6 class="fw-bold">Lumiere Customer Care</h6>
                    <p><strong>Phone:</strong> <a href="tel:+6212345678910" style="color: black; font-weight: bold;">+6212345678910</a><br>
                    <strong>Whatsapp:</strong> <a href="https://wa.me/6212345678910" style="color: black; font-weight: bold;">+6212345678910</a></p>
                    <p>Our phone lines are open:<br>Monday - Sunday: 10:00 – 18:00</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Feedback</h6>
                    <p>Tell us about your Lumiere experience.<br>
                    <a href="mailto:info@ciputra.ac.id" style="color: black; font-weight: bold;">Send feedback through our e-mail</a></p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">E-mail</h6>
                    <p>E-mail us anytime and we’ll get back to you within <strong>24 hours.</strong>
                        Send us an e-mail at:<br>
                    <a href="mailto:info@ciputra.ac.id" style="color: black; font-weight: bold;">customercare@lumiere.co.id</a></p>
                </div>
        </div>
    </div>
</div>
@endsection
