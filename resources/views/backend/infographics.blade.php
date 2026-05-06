@extends('backend/layouts/master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .select2-selection__choice {
            padding: 5px 10px!important;
        }

        .blog-modal-image {
            width: 100px;
            height: 100px;
        }

        .blog-modal-image img {
            height: 100%;
            object-fit: cover;
        }
    </style>
@stop

@section('title')
    <title>Infographics</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-12 mb-1">
                        <button type="button" class="btn btn-primary waves-effect add-infographic"><i class="fa-solid fa-plus"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="jobs-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Thumbnail</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($infographics as $infographic)
                                        <tr id="row-{{ $infographic->id }}">
                                            <td>{{ $infographic->id }}</td>
                                            <td>{{ $infographic->title }}</td>
                                            <td>
                                                <div class="blog-modal-image">
                                                    <img src="{{ url('storage') }}/{{ $infographic->thumbnail }}" alt="{{ $infographic->title }}" class="img-fluid">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="blog-modal-image">
                                                    <img src="{{ url('storage') }}/{{ $infographic->image }}" alt="{{ $infographic->title }}" class="img-fluid">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($infographic->status == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Active</div>
                                                    @elseif($infographic->status == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">In Active</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    @if($infographic->status == 1)
                                                        <button data-id="{{ $infographic->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Deactivate" class="btn btn-dark waves-effect mb-1 update-infographic-status">
                                                            <i class="fa-solid fa-ban"></i>
                                                        </button>
                                                    @else
                                                        <button data-id="{{ $infographic->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Activate" class="btn btn-success waves-effect mb-1 update-infographic-status">
                                                            <i class="fa-solid fa-lock"></i>
                                                        </button>
                                                    @endif
                                                    <button data-id="{{ $infographic->id }}" data-title="{{ $infographic->title }}" data-sortorder="{{ $infographic->sort_order }}" data-status="{{ $infographic->status }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Update" class="btn btn-warning waves-effect mb-1 update-infographic">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button data-id="{{ $infographic->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-infographic">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Partner Modal -->
    <div class="modal fade text-left" id="add-infographic-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Infographic</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="infographic-form" enctype="multipart/form-data">
                    <input type="hidden" id="infographic-update-id">
                    @csrf
                    <div class="modal-body">
                        <div class="row gap-4">
                            <div class="col-md-12">
                                <label for="infographic-title">Title <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="infographic-title" type="text" placeholder="Title" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="infographic-thumbnail">Thumbnail <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="infographic-thumbnail" type="file" placeholder="Thumbnail" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="infographic-image">Image <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="infographic-image" type="file" placeholder="Image" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="infographic-sortorder">Sort Order</label>
                                <div class="form-group">
                                    <input id="infographic-sortorder" type="number" placeholder="Sort Order" class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <label for="infographic-status" class="form-label">Status <span class="text-danger">*</span></label>
                                <select id="infographic-status" class="selectpicker w-100 form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-infographic-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.9.1/tinymce.min.js" integrity="sha512-09JpfVm/UE1F4k8kcVUooRJAxVMSfw/NIslGlWE/FGXb2uRO1Nt4BXAJ3LxPqNbO3Hccdu46qaBPp9wVpWAVhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function filterTable(event) {
            var query = event.target.value.toLowerCase();
            var rows = document.getElementById("table-head").querySelectorAll("tbody tr");
            rows.forEach(function(row) {
                var cells = row.querySelectorAll("td");
                var nameCell = cells[0];
                var match = false;
                if (nameCell.textContent.toLowerCase().includes(query)) {
                    match = true;
                } else {
                    for (var j = 1; j < cells.length; j++) {
                        if (cells[j].textContent.toLowerCase().includes(query)) {
                            match = true;
                            break;
                        }
                    }
                }
                if (match) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        let pagePlaceholderValue = "Search for infographic";

        $(document).ready(function(){
            $(document).on('click', '.add-infographic', function () {
                $('#infographic-form')[0].reset();
                $("#add-infographic-modal").modal('show');
            })

            $(document).on('click', '.update-infographic', function () {
                $("#add-infographic-modal").modal('show');
                $('#add-infographic-modal .modal-title').html('Update Infographic');
                let $this = $(this);
                let infographicId = $this.data('id');
                let infographicTitle = $this.data('title');
                let infographicSortOrder = $this.data('sortorder');
                let infographicStatus = $this.data('status');

                $('#infographic-update-id').val(infographicId);
                $('#infographic-title').val(infographicTitle);
                $('#infographic-sortorder').val(infographicSortOrder);
                $('#infographic-status').val(infographicStatus);
            });

            $(document).on('click', '.update-infographic-status', function () {
                let inforgraphicId = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendInfographicToggleStatus') }}",
                    data: {
                        id: inforgraphicId,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status === "success") {
                            location.reload();
                        } else {
                            console.log(response.message);
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.btn-infographic-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let title = $('#infographic-title').val();
                let thumbnail = $('#infographic-thumbnail')[0].files[0];
                let image = $('#infographic-image')[0].files[0];
                let sortorder = $('#infographic-sortorder').val();
                let status = $('#infographic-status').val();

                let formData = new FormData();
                formData.append("title", title);
                formData.append("thumbnail", thumbnail);
                formData.append("image", image);
                formData.append("sortorder", sortorder);
                formData.append("status", status);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let infographicId = $("#infographic-update-id").val();
                if (infographicId !== "") {
                    formData.append("id", infographicId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendInfographicSubmit') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $this.html("Submit").removeAttr("disabled");
                        if (response.status === "success") {
                            $this.html(`<i class="fa-solid fa-check"></i> Added!`);

                            setTimeout(() => {
                                location.reload();
                            }, 1500);
                        } else if (response.status === "error") {
                            if (response.errors) {
                                $this.html("Submit").removeAttr("disabled");
                                console.log(xhr.responseText);
                            }
                        }
                    },
                    error: function(xhr) {
                        $this.html("Submit").removeAttr("disabled");
                        console.log(xhr.responseText);
                    }
                });

            });

            $(document).on('click', '.delete-infographic', function () {
                let jobId = $(this).data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    customClass: {
                        confirmButton: 'bg-primary',
                        cancelButton: 'bg-dark'
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('backendInfographicDelete') }}",
                            data: {
                                id: jobId,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                location.reload();
                            },
                            error: function (xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>
@stop
