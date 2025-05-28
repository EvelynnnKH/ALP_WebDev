<footer class="pt-5" style="background-color: #ffffff;">
    <div class="container" style="font-family: 'Playfair Display';">
        <div class="row text-start tulisan-footer">
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold" style="color: #5c3c1d;">Help</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('contactus') }}" class="text-decoration-none text-muted">Contact Us</a></li>
                    <li><a href="{{ route('faq') }}" class="text-decoration-none text-muted">FAQ</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold" style="color: #5c3c1d;">Policies</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('termsofservice') }}" class="text-decoration-none text-muted">Terms of Service</a></li>
                    <li><a href="{{ route('privacypolicy') }}" class="text-decoration-none text-muted">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold" style="color: #5c3c1d;">Lumière Candle Shop</h6>
                <p class="mb-1 text-muted">CitraLand,</p>
                <p class="mb-1 text-muted">Surabaya, East Java, 60219</p>
                <p class="text-muted">+62 123 4567 8910</p>
            </div>

            <div class="social-icons bm-4">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-x-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
            </div>

            <style>
                .social-icons a {
                    text-decoration: none;
                    font-size: 20px;
                    color: gray;
                    margin: 0 10px;
                    transition: color 0.3s ease;
                }
                .social-icons a:hover {
                    color: #1e1e1e;
                }
                .social-icons {
                    margin-bottom: 30px;
                }

                @media (max-width: 550px){
                   .tulisan-footer{
                    margin-left: 40px;
                   }
                }
            </style>

            
            
        </div>
    </div>
    <div class="text-center py-3" style="background-color: #5c3c1d; color: white; font-family: 'Playfair Display';">
        © 2025 - Lumière Candle Shop
    </div>
</footer>
