@extends('adminnav')

@section('content')
    <style>
        body, .card-body{
            background-color: #16161a;
        }
        .white-btn {
            background-color: #fff;
            color: #000;
        }
        .bg-custom-header {
            background-color: #343a40;
            /* Dark background color for header */
            color: white;
        }
        .card{
            border: none !important;
        }
        .bg-custom-row1 {
            background-color: #495057;
            /* Slightly lighter dark color for odd rows */
            color: white;
        }

        .bg-custom-row2 {
            background-color: #6c757d;
            /* Even lighter dark color for even rows */
            color: white;
        }
    </style>

    <div class="container py-4">
        <div class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            <div class="me-3">
                <a href="/admin/publisher/add-wallet" class="btn btn-primary px-4 py-2">Add Wallet Code</a>
            </div>
            <form id="searchForm" action="/admin/publisher/manage-wallet-code" method="GET" class="d-flex align-items-center">
                <input type="text" name="search" id="search" placeholder="Search Wallet Code" class="form-control me-2 w-40 w-md-60" value="">
                <button type="submit" class="btn white-btn rounded p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="21" viewBox="0 -960 960 960" width="21" fill="#000000">
                        <path d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z"></path>
                    </svg>
                </button>
            </form>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-striped table-dark">
                    <thead class="bg-custom-header">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Wallet Code</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Used</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Used At</th>
                        </tr>
                    </thead>
                    @foreach ($walletCodes as $walletCode)
                        <tbody>
                            <tr class="bg-custom-row1">
                                <td>{{ $walletCode->id }}</td>
                                <td>{{ $walletCode->Code }}</td>
                                <td>Rp {{ $walletCode->Amount }}</td>
                                @if ($walletCode->IsUsed == 1)
                                    <td>Yes</td>
                                @else
                                    <td>No</td>
                                @endif
                                <td>{{ $walletCode->created_at }}</td>
                                @if ($walletCode->used_at === null)
                                <td>-</td>
                                @else
                                <td>{{ $walletCode->used_at }}</td>
                                @endif
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                <div>
                    {{ $walletCodes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
