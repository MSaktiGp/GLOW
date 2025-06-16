@extends('user.layouts.dashboard-user-layout')

@section('content')

@push('css')

<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

<style>
    .invoice-container {
        background-color: #fff;
        padding: 40px;
        border-radius: 24px;
        max-width: 900px;
        margin: 0 auto;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        font-family: 'Segoe UI', sans-serif;
    }

    .invoice-header {
        display: flex;
        justify-content: space-between;
        color: #F189B8;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .invoice-header span:first-child {
        color: #F189B8;
        font-family: 'Abril Fatface', cursive;
        font-size: 22px;
    }

    .invoice-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .invoice-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
    }

    .invoice-table th,
    .invoice-table td {
        padding: 12px;
        font-size: 14px;
        color: #555;
        text-align: center;
    }

    .invoice-table th {
        background-color: #F189B8;
        color: white;
        font-weight: 600;
    }

    .invoice-table td {
        background-color: #f5f5f5;
        font-weight: 500;
    }

    .invoice-total-row td {
        background-color: #fff !important;
        border-top: 2px solid #F189B8;
        font-weight: bold;
        font-size: 16px;
        color: #F189B8;
        text-align: right;
    }

    .payment-info {
        margin-top: 20px;
    }

    .payment-info h5 {
        color: #F189B8;
        font-weight: bold;
    }

    .payment-info p {
        margin: 4px 0;
        font-size: 14px;
    }
</style>
@endpush

<div class="invoice-container">
    <div class="invoice-header">
        <span>GLOW</span>
        <span>INVOICE</span>
    </div>

    <div class="invoice-info">
        <div>
            <p><strong>Invoice to:</strong></p>
            <p>Username: Dina Putri Chairani</p>
        </div>
        <div style="text-align: right;">
            <p><strong>Invoice No:</strong> 12345678</p>
            <p><strong>Invoice Date:</strong> 14 Jun 2025</p>
        </div>
    </div>

    <table class="invoice-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Description</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mindful Balance</td>
                <td>1</td>
                <td>45.000</td>
                <td>45.000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="invoice-total-row">
                <td colspan="4">Total:</td>
                <td>45.000</td>
            </tr>
        </tfoot>
    </table>

    <div class="payment-info">
        <h5>Payment info:</h5>
        <p><strong>No Virtual Account:</strong> 128 0856 4318 1606</p>
        <p><strong>Bank Detail:</strong> BRI</p>
    </div>
</div>

@endsection
