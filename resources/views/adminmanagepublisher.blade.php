@extends('adminnav')

@section('content')
    <style>
        .blue-btn {
            background-color: #007bff;
            color: #fff;
        }
        .white-btn {
            background-color: #fff;
            color: #000;
        }
        .bg-1 {
            background-color: #343a40;
        }
        .bg-2 {
            background-color: #495057;
        }
        .text-white {
            color: #fff;
        }
        body{
            background-color: #16161a;
        }
        tbody img{
            height: 75px;
            width: 75px;

        }
        tbody{
            object-fit: fill;
            width: 100%;
            height: 75px;
            width: 75px;
        }
        #main{
            border-radius: 5px;
        }
    </style>
    <div class="container p-4" id="container">
        <div class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            <div class="me-3">
                <a href="/admin/publisher/add-publisher" class="btn btn-primary px-4 py-2">Add Publisher</a>
            </div>
            <form id="searchForm" action="/admin/publisher/manage-publisher" method="GET" class="d-flex align-items-center">
                <input type="text" name="search" id="search" placeholder="Search by Publisher Name" class="form-control me-2 w-40 w-md-60" value="">
                <button type="submit" class="btn white-btn rounded p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="21" viewBox="0 -960 960 960" width="21" fill="#000000">
                        <path d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z"></path>
                    </svg>
                </button>
            </form>
        </div>

        <div class="table-responsive" id="main">
            <table class="table table-dark table-striped">
                <thead class="bg-1">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">Publisher Logo</th>
                        <th scope="col" class="text-white">Publisher Name</th>
                        <th scope="col" class="text-white">Publisher Website</th>
                    </tr>
                </thead>
                @foreach ($publishers as $publisher)
                <tbody>
                    <tr class="bg-2">
                        <td>{{$publisher->id}}</td>
                        <td>
                            <a href="/publisher/{{ $publisher->Name }}" class="d-block h-12 w-12">
                                <img class="img-fluid" src="{{ $publisher->ImageURL }}" alt="">
                            </a>
                        </td>
                        <td><a class="text-white" href="/publisher/{{ $publisher->Name }}">{{ $publisher->Name }}</a></td>
                        <td><a class="text-white" href="{{ $publisher->Website }}">{{ $publisher->Website }}</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
