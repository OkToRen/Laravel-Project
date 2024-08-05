@extends('nav')

@section('content')
<style>
    #main-page{
        height: 180vh;
    }
    ::-webkit-scrollbar {
        width: 12px; /* Width of the scrollbar */
    }

    ::-webkit-scrollbar-thumb {
        background-color: #555; /* Dark color for the scrollbar thumb */
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #777; /* Lighter color when hovering over the scrollbar thumb */
    }

    ::-webkit-scrollbar-track {
        background-color: #333; /* Dark color for the scrollbar track */
    }
</style>

<body>
    <div class="container" id="main-page">
        <div id="inner-navbar" class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        </div>
    </div>
</body>

@endsection