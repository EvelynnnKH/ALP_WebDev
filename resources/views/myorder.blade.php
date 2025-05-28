@extends('base')

@section('content')
<style>
    body {
        background-color: #fceddf;
    }
    
    .order-page {
        background-color: #fceddf;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
    }

    .order-page .card {
        border-radius: 20px;
        overflow: hidden;
        border: none;
    }

    .order-page .card-header {
        background-color: #b97c50 !important;
        color: white;
        font-weight: 600;
        font-size: 18px;
    }

    .order-page .table > :not(caption) > * > * {
        background-color: #f9f4ef;
        color: #5f4b3d;
        vertical-align: middle;
    }

    .order-page .table th {
        background-color: #f2e8df;
        color: #38220f;
        font-weight: 600;
    }

    .order-page .table td,
    .order-page .table th {
        padding: 14px;
    }

    .order-page .btn-primary {
        background-color: #d4af7f;
        border: none;
        padding: 12px;
        font-weight: 500;
        font-size: 16px;
        border-radius: 30px;
    }

    .order-page label {
        color: #38220f;
        font-weight: 500;
    }

    .order-page .order-title {
        color: #38220f;
        font-size: 32px;
        font-weight: bold;
    }

    .order-page .container {
        margin-top: 30px;
        margin-bottom: 60px;
    }

    .order-success-icon {
        font-size: 80px;
        color: #28a745;
        margin-bottom: 20px;
    }
</style>

<div class="order-page">
    <div class="container">
        <div class="text-center mb-5">
            <div class="order-success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2 class="order-title">Order Confirmed!</h2>
            <p class="lead">Thank you for your purchase</p>
            <p>Your order number is: <strong>{{ $order['order_number'] }}</strong></p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header">
                        Order Summary
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5>Customer Information</h5>
                                <p>
                                    <strong>{{ $order['customer']['fullname'] }}</strong><br>
                                    {{ $order['customer']['email'] }}<br>
                                    {{ $order['customer']['address'] }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5>Order Details</h5>
                                <p>
                                    <strong>Order Date:</strong> {{ $order['order_date'] }}<br>
                                    <strong>Order #:</strong> {{ $order['order_number'] }}
                                </p>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-end">Price</th>
                                    <th class="text-end">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order['items'] as $item)
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
                                    <td colspan="3" class="text-end">Tax (10%)</td>
                                    <td class="text-end">Rp {{ number_format($taxAmount, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end">Shipping Cost</td>
                                    <td class="text-end">Rp {{ number_format($shippingCost, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end">Admin Fee</td>
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

                <div class="text-center mt-4">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="fas fa-home me-2"></i> Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection