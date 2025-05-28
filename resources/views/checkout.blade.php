@extends('base')

@section('content')
<style>
    body {
        background-color: #fceddf; /* Same as checkout-page background */
    }
    
    .checkout-page {
        background-color: #fceddf;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh; /* Ensure it covers full viewport height */
    }

    .checkout-page .card {
        border-radius: 20px;
        overflow: hidden;
        border: none;
    }

    .checkout-page .card-header {
        background-color: #b97c50 !important;
        color: white;
        font-weight: 600;
        font-size: 18px;
    }

    .checkout-page .table > :not(caption) > * > * {
        background-color: #f9f4ef;
        color: #5f4b3d;
        vertical-align: middle;
    }

    .checkout-page .table th {
        background-color: #f2e8df;
        color: #38220f;
        font-weight: 600;
    }

    .checkout-page .table td,
    .checkout-page .table th {
        padding: 14px;
    }

    .checkout-page .btn-primary {
        background-color: #d4af7f;
        border: none;
        padding: 12px;
        font-weight: 500;
        font-size: 16px;
        border-radius: 30px;
    }

    .checkout-page .btn-primary:hover {
        background-color: #c79c6c;
    }

    .checkout-page label {
        color: #38220f;
        font-weight: 500;
    }

    .checkout-page .form-control {
        border-radius: 12px;
        border: 1px solid #ccc;
    }

    .checkout-page .checkout-title {
        color: #38220f;
        font-size: 32px;
        font-weight: bold;
    }

    .checkout-page .container {
        margin-top: 30px;
        margin-bottom: 60px;
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

<div class="checkout-page">
    <div class="container">
        <a href={{ url()->previous() }} class="back-button" title="Back">
            ←
        </a>
        <h2 class="checkout-title mb-4" style="font-family:'Playfair Display'; display: inline-flex; margin: 1rem;">Checkout</h2>

        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header">
                        Your Cart
                    </div>
                    <div class="card-body p-0">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-end">Price</th>
                                    <th class="text-end">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $id => $item)
                                <tr>
                                    <td>{{ $item['name'] }}</td>
                                    <td class="text-center">{{ $item['quantity'] }}</td>
                                    <td class="text-end">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                    <td class="text-end">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="fw-bold">
                            <tr>
                                <td colspan="3" class="text-end">Subtotal</td>
                                <td class="text-end">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">Tax ({{ $taxRate * 100 }}%)</td>
                                <td class="text-end">Rp {{ number_format($taxAmount, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">Shipping Cost</td>
                                <td class="text-end">Rp {{ number_format($shippingCost, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">Admin Cost</td>
                                <td class="text-end">Rp {{ number_format($adminCost, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">Total</td>
                                <td class="text-end">Rp {{ number_format($total, 0, ',', '.') }}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        Payment Details
                    </div>
                    <div class="card-body">
                        <form action="{{ route('order.process') }}" method="POST">
    @csrf
    
    <!-- Customer Information Fields -->
    <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" name="fullname" id="fullname" class="form-control" required
        value="{{ $user['name'] }}">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required
        value="{{ $user['email'] }}">
    </div>
    
    <div class="mb-3">
        <label for="address" class="form-label">Shipping Address</label>
        <textarea name="address" id="address" class="form-control" required>{{ $user['address'] }}
        </textarea>
    </div>
    
    <!-- Cart Items (hidden inputs + visible display) -->
    <div class="mb-4">
        <h4>Your Order</h4>
        @foreach ($cart as $index => $item)
        <div class="d-flex justify-content-between mb-2">
            <input type="hidden" name="cart[{{ $index }}][name]" value="{{ $item['name'] }}">
            <input type="hidden" name="cart[{{ $index }}][price]" value="{{ $item['price'] }}">
            <input type="hidden" name="cart[{{ $index }}][quantity]" value="{{ $item['quantity'] }}">
            
            <span>{{ $item['name'] }} ({{ $item['quantity'] }} × Rp{{ number_format($item['price'], 0, ',', '.') }})</span>
            <span>Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</span>
        </div>
        @endforeach
        
        <!-- Order Totals -->
        <div class="border-top pt-2">
            <div class="d-flex justify-content-between">
                <span>Subtotal:</span>
                <span>Rp{{ number_format($subtotal, 0, ',', '.') }}</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Tax (10%):</span>
                <span>Rp{{ number_format($taxAmount, 0, ',', '.') }}</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Shipping:</span>
                <span>Rp{{ number_format($shippingCost, 0, ',', '.') }}</span>
            </div>
            <div class="d-flex justify-content-between fw-bold">
                <span>Total:</span>
                <span>Rp{{ number_format($total, 0, ',', '.') }}</span>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary w-100">Place Order</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

