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
<div class="container mt-5 mb-5" style="font-family: 'Monserrat', sans-serif;">
    <a href={{ url()->previous() }} class="back-button" title="Back">
            ←
        </a>
    <h2 class="fw-bold mb-4" style="font-family: 'Playfair Display';">Frequently Asked Questions</h2>

    <div class="accordion">
        @php
            $faqs = [
                [
                    'question' => 'How can I safely use and care for my candles/home fragrances?',
                    'answer' => '<ul>
                                    <li>Never leave a burning candle unattended.</li>
                                    <li>Trim the wick to ¼ inch each time before lighting.</li>
                                    <li>Follow the 2 foot rule - don\'t place a burning candle near anything flammable.</li>
                                    <li>Keep lit candles away from drafts, ceiling fans and air currents.</li>
                                    <li>Place candle holders on a stable, heat-resistant surface.</li>
                                    <li>Extinguish a candle if the flame gets too close to the holder.</li>
                                    <li>Place burning candles at least 3 inches apart from one another.</li>
                                    <li>Do not use a burning candle as a nightlight.</li>
                                    <li>Do not burn a candle more than four hours at a time.</li>
                                    <li>Discontinue burning a candle when 1/2 inch of wax remains.</li>
                                    <li>Use our Candle Care Kit to enhance performance and longevity.</li>
                                </ul>'
                ],
                [
                    'question' => 'When will my gift box be assembled and shipped?',
                    'answer' => 'Your gift box will be assembled and shipped within 1-5 business days.'
                ],
                [
                    'question' => 'Do you do private label/custom scents?',
                    'answer' => 'No. Currently we are not doing private label/custom scents.'
                ],
                [
                    'question' => 'Do you offer candle making classes?',
                    'answer' => "No. We don't teach classes anymore, sorry!"
                ],
                [
                    'question' => 'Where do you ship?',
                    'answer' => 'Lumiere ships only within the Indonesia at this time.'
                ],
                [
                    'question' => 'Do you dropship?',
                    'answer' => 'No, we do not dropship or sell on dropship e-commerce stores.'
                ],
                [
                    'question' => 'I need my candles tomorrow. Can you overnight them?',
                    'answer' => 'Please email us to discuss expedited shipping.'
                ],
                [
                    'question' => 'What is the life span of your candles?',
                    'answer' => 'We recommend burning your candles within one year for peak performance, as we do not use any preservatives.'
                ],
                [
                    'question' => 'I put the wrong address on my order! Can you help?',
                    'answer' => 'If you have just placed your order, email us immediately with the correct address. 
                                If the gift box hasn’t been labeled and shipped yet, we will happily change the shipping address!
                                <br><br>If the gift box has been labeled but not shipped, an additional fee will be charged for the new label.
                                <br><br>If the gift box has already been shipped, unfortunately, there is nothing we can do.'
                ]
            ];
        @endphp

        @foreach ($faqs as $index => $faq)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $index }}">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                    {{ $faq['question'] }}
                </button>
            </h2>
            <div id="collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index }}">
                <div class="accordion-body">
                    {!! $faq['answer'] !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
