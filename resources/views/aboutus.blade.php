@extends('base')

@section('title', 'About Lumiere')

@section('content')
<div class="header-image" style="position: relative; width: 100%; overflow: hidden;">
    <img src="{{ asset('img/candleshop.jpg') }}" alt="Header" style="width: 100%; height: 80vh; object-fit: cover;">
</div>

<section class="bg-light py-5">
  <div class="container">
    <div class="container text-center py-2">
      <h2 class="fw-bold">Lumiere is a leading lifestyle and self-care store from Indonesia, 
        bringing warmth, calm, and beauty to your everyday moments.</h2>
      <p style="color: gray" class="mt-4">
        Lumiere is a lifestyle and wellness store that brings warmth, calm, and joy into your everyday life. 
        Founded in Indonesia and officially opened in 2025, we offer a curated selection of scented candles, 
        essential oils, hand-poured candles, bath bombs, handmade soaps, gift boxes, and wellness products — 
        all designed to help you unwind, recharge, and celebrate the small moments.</p>
      <p style="color: gray" class="mt-4">
        Our mission is to light up your space and spirit — one scent, one soak, one smile at a time.
      </p>
      <a href="{{ route('home') }}" class="btn mt-3 px-5 py-3" style="background-color: rgb(123, 89, 53); color: white;">
        Explore Lumiere
      </a>

      <div class="container">
        <div class="row mt-5 justify-content-center text-center">
          <div class="col-md-5 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100">
              <h4 style="font-weight: 500;">Our Purpose</h4>
              <p style="color: gray" class="mb-0">
                We believe in the transformative power of self-care and the beauty of simple rituals. 
                Lumiere was created to inspire moments of peace, warmth, and connection — by offering 
                thoughtfully crafted products that uplift the senses and soothe the soul.
              </p>
            </div>
          </div>
          <div class="col-md-5 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100">
              <h4 style="font-weight: 500;">Our Position</h4>
              <p style="color: gray" class="mb-0">
                For individuals seeking balance and beauty in their daily lives, Lumiere offers a complete self-care experience — 
                from a curated collection of scented candles and bath essentials to heartfelt gift boxes — 
                all made with love and intention to bring light, comfort, and joy to every home.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
            <div class="p-4 mt-4 shadow rounded bg-white text-center">
                <h4 style="font-weight: 500;">How We Operate</h4>
                <p style="color: gray;" class="mt-2">
                To express who we are — how we speak, act, and respond to different moments — Lumiere is built on two simple 
                yet meaningful values: Mindful and Heartfelt. These values are reflected in everything we create and share with our customers.
                </p>
                <div class="container px-2">
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-5 mb-4">
                    <img src="{{ asset('img/mindful.jpg') }}" class="img-fluid mb-3" alt="Simpel">
                    <h5 style="font-weight: 500;">Mindful</h5>
                    <p style="color: gray;">
                        We believe in the power of intention and simplicity. Every product is thoughtfully crafted with care, 
                        honesty, and attention to detail — to bring peace, balance, and beauty into everyday life.
                    </p>
                    </div>
                    <div class="col-md-5 mb-4">
                    <img src="{{ asset('img/heartfelt.jpg') }}" class="img-fluid mb-3" alt="Bahagia">
                    <h5 style="font-weight: 500;">Heartfelt</h5>
                    <p style="color: gray;">
                        We bring joy, warmth, and personal touch into every interaction. Whether it’s a gift box or a candlelight moment, 
                        we aim to spark genuine happiness and connection with everyone we reach.
                    </p>
                    </div>
                </div>
                </div>
            </div>
        </div>


      </div>
    </div>
  </div>
</section>

@endsection
