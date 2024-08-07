@extends('adminnav')

@section('content')
    <style>
        body,
        .card-body {
            background-color: #16161a;
        }   

        .bg-custom-1 {
            background-color: #333;
        }

        .bg-custom-2 {
            background-color: #444;
        }

        .text-custom {
            color: #fff;
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }

        .btn-custom-white {
            background-color: #fff;
            color: #000;
        }
    </style>
    <div class="container py-4">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <a href="/admin/genre/add-genre" class="btn btn-custom px-4 py-2">Add Genre</a>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <form id="searchForm" action="https://narcore.apps.binus.ac.id/admin/genre/manage-genre" method="GET"
                    class="d-flex">
                    <input type="text" name="search" id="search" placeholder="Search by Genre Name"
                        class="form-control me-2" value="">
                    <button type="submit" class="btn btn-custom-white rounded px-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="21px" viewBox="0 -960 960 960" width="21px"
                            fill="#000000">
                            <path
                                d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z">
                            </path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead class="bg-custom-1 text-custom">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Genre Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr class="bg-custom-2 text-custom">
                        <td>1</td>
                        <td>yey</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="/admin/genre/edit-genre/18" class="btn btn-custom-white rounded-circle p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#000000">
                                        <path
                                            d="M216-216h51l375-375-51-51-375 375v51Zm-72 72v-153l498-498q11-11 23.84-16 12.83-5 27-5 14.16 0 27.16 5t24 16l51 51q11 11 16 24t5 26.54q0 14.45-5.02 27.54T795-642L297-144H144Zm600-549-51-51 51 51Zm-127.95 76.95L591-642l51 51-25.95-25.05Z">
                                        </path>
                                    </svg>
                                </a>
                                <button type="button" onclick="confirmDelete(18)"
                                    class="btn btn-custom-white rounded-circle p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#000000">
                                        <path
                                            d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z">
                                        </path>
                                    </svg>
                                </button>
                                <form id="deleteForm-18" action="/admin/genre/delete-genre/18" method="POST"
                                    class="d-none">
                                    <input type="hidden" name="_token" value="J75obK9Ju4PTpfgW1ZuZsOK2oKoQ3Rjam8ajwey5">
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this genre?')) {
                document.getElementById(`deleteForm-${id}`).submit();
            }
        }
    </script>
@endsection
