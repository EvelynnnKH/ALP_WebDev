@extends('base')


@section('content')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">


<!-- Custom Page Styles -->
<style>
    body {
        background-color: #fbeee4;
        font-family: 'Playfair Display', serif;
        color: #3d2b1f;
    }


    .card {
        border-radius: 16px;
        background-color: #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }


    .card-header {
        background-color: #fff;
        border-bottom: 1px solid #eee;
        border-radius: 16px 16px 0 0;
    }


    .card-header h4 {
        font-weight: 600;
        color: #3d2b1f;
    }


    table thead tr {
        background-color: #f8f4ef;
        color: #3d2b1f;
    }


    table tbody tr {
        background-color: #fff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        border-radius: 12px;
    }


    .badge {
        padding: 6px 12px;
        font-size: 0.85rem;
        border-radius: 12px;
    }


    .btn-view {
        border: 1px solid #ccc;
        color: #444;
        border-radius: 8px;
        padding: 4px 12px;
        background-color: #fdf9f6;
        font-weight: 500;
        text-decoration: none;
    }


    .btn-view:hover {
        background-color: #f5e9dd;
    }


    .text-muted {
        color: #7b6f66 !important;
    }


    table {
        border-collapse: separate;
        border-spacing: 0 10px;
    }
</style>


<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header">
            <h4 class="mb-0">Order History</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th class="px-3 py-2">Order ID</th>
                            <th class="px-3 py-2">User</th>
                            <th class="px-3 py-2">Date</th>
                            <th class="px-3 py-2">Total Price</th>
                            <th class="px-3 py-2">Status</th>
                            <th class="px-3 py-2 text-center">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="px-3 py-3">{{ $order->order_id }}</td>
                            <td class="px-3 py-3">{{ $order->user->name ?? 'N/A' }}</td>
                            <td class="px-3 py-3">{{ $order->order_date }}</td>
                            <td class="px-3 py-3">${{ number_format($order->total_price, 2) }}</td>
                            <td class="px-3 py-3">
                                <span class="badge
                                    @if($order->status == 'Completed')" style="background-color: #d4edda; color: #155724;"
                                    @elseif($order->status == 'Pending')" style="background-color: #fff3cd; color: #856404;"
                                    @else " style="background-color: #e2e3e5; color: #383d41;"
                                    @endif">
                                    {{ $order->status }}
                                </span>
                            </td>
                            <td class="text-center px-3 py-3">
                                <a href="{{ url('/orders/' . $order->order_id) }}" class="btn btn-sm btn-view">
                                    View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(count($orders) == 0)
                    <p class="text-muted text-center mt-4">No orders found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
