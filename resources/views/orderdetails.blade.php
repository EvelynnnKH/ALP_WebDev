@extends('base')

@section('content')
<style>
    /* Use same styles as myorder page */
    body { background-color: #f8f4ee; }
    
    .order-details-page {
        background-color: #f8f4ee;
        font-family: 'montserrat', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
    }

    .order-details-page .card {
        border-radius: 20px;
        overflow: hidden;
        border: none;
    }

    .order-details-page .card-header {
        background-color: #b97c50 !important;
        color: white;
        font-weight: 600;
        font-size: 18px;
    }

    .order-details-page .details-title {
        color: #38220f;
        font-size: 32px;
        font-weight: bold;
    }

    .order-badge {
        font-size: 0.9rem;
        padding: 0.35rem 0.65rem;
    }
</style>

<div class="order-details-page">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="details-title" style="font-family:'Playfair Display'">Order Details</h1>
            <a href="{{ route('order.history') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-2"></i> Back to History
            </a>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <strong>Order #{{ $order['order_number'] }}</strong>
                    <span class="ms-3">{{ $order['order_date'] }}</span>
                </div>
                <span class="badge order-badge bg-success">Completed</span>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5>Customer Information</h5>
                        <div class="ps-3">
                            <p><strong>Name:</strong> {{ $order['customer']['fullname'] }}</p>
                            <p><strong>Email:</strong> {{ $order['customer']['email'] }}</p>
                            <p><strong>Address:</strong> {{ $order['customer']['address'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Order Summary</h5>
                        <div class="ps-3">
                            <p><strong>Order Date:</strong> {{ $order['order_date'] }}</p>
                            <p><strong>Items:</strong> {{ count($order['items']) }} products</p>
                            <p><strong>Status:</strong> <span class="badge bg-success">Completed</span></p>
                        </div>
                    </div>
                </div>

                <h5 class="mb-3">Order Items</h5>
                <table class="table mb-4">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Unit Price</th>
                            <th class="text-end">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order['items'] as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td class="text-center">{{ $item['quantity'] }}</td>
                            <td class="text-end">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td class="text-end">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
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
                        <tr class="fw-bold">
                            <td colspan="3" class="text-end">Total</td>
                            <td class="text-end">Rp {{ number_format($total, 0, ',', '.') }}</td>
                        </tr>
                    </tfoot>
                </table>

                <div class="text-center mt-4">
                    <a href="{{ route('order.history') }}" class="btn btn-primary">
                        <i class="fas fa-history me-2"></i> Back to Order History
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection