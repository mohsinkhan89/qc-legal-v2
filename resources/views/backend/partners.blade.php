@extends('backend/layouts/master')
@section('css')
@stop

@section('title')
    <title>Partners</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-12 mb-1">
                        <button type="button" class="btn btn-primary waves-effect add-partner"><i class="fa-solid fa-plus"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="partners-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($partners as $partner)
                                        <tr id="row-{{ $partner->id }}">
                                            <td>{{ $partner->id }}</td>
                                            <td>{{ $partner->title }}</td>
                                            <td>{{ $partner->link }}</td>
                                            <td><img src="{{ url('storage') }}/{{ $partner->image }}" style="width: 60px;height:50px;" alt="{{ $partner->title }}                               "></td>
                                            {{-- <td>{{ $partner->status }}</td> --}}
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($partner->status == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Active</div>
                                                    @elseif($partner->status == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">In Active</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    @if($partner->status == 1)
                                                    <button data-id="{{ $partner->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Deactivate" class="btn btn-dark waves-effect mb-1 update-partner-status">
                                                        <i class="fa-solid fa-ban"></i>
                                                    </button>
                                                    @else
                                                    <button data-id="{{ $partner->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Activate" class="btn btn-success waves-effect mb-1 update-partner-status">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </button>
                                                    @endif
                                                    <button data-id="{{ $partner->id }}" data-title="{{ $partner->title }}" data-link="{{ $partner->link }}" data-image="{{ $partner->image }}" data-status="{{ $partner->status }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Update" class="btn btn-warning waves-effect mb-1 update-partner">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button data-id="{{ $partner->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-partner">
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
    <div class="modal fade text-left" id="add-partner-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Partner</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="partner-form" enctype="multipart/form-data">
                    <input type="hidden" id="partner-update-id">
                    @csrf
                    <div class="modal-body">
                        <label>Title <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="partner-title" type="text" placeholder="Title" class="form-control" required>
                            <div class="feedback"></div>
                        </div>
                        <label>Link </label>
                        <div class="form-group">
                            <input id="partner-link" type="url" placeholder="Link" class="form-control">
                            <div class="feedback"></div>
                        </div>
                        <label>Image <span class="text-danger">*</span></label>
                        <div class="custom-file mb-2">
                            <label class="custom-file-label" for="partner-image">Choose file</label>
                            <input id="partner-image" type="file" class="custom-file-input" required>
                            <div class="feedback"></div>
                        </div>
                        <label>Status <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" id="partner-status" required>
                                <option value="1" selected>Active</option>
                                <option value="0">In Active</option>
                            </select>
                            <div class="feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-partner-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
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

        let pagePlaceholderValue = "Search for partner";

        $(document).ready(function(){

            $(document).on('click', '.add-partner', function () {
                $('#partner-form')[0].reset();
                $("#add-partner-modal").modal('show');
            })

            $(document).on('click', '.update-partner', function () {
                $("#add-partner-modal").modal('show');
                $('#partner-modal-title .modal-title').html('Update Partner');
                let partnerId = $(this).data('id');
                let partnerTitle = $(this).data('title');
                let partnerLink = $(this).data('link');
                let partnerImage = $(this).data('image');
                let partnerStatus = $(this).data('status');

                $('#partner-update-id').val(partnerId);
                $('#partner-title').val(partnerTitle);
                $('#partner-link').val(partnerLink);
                $('#partner-status').val(partnerStatus);
            });

            $(document).on('click', '.update-partner-status', function () {
                let partnerId = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendPartnerToggleStatus') }}",
                    data: {
                        id: partnerId,
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

            $(document).on('click', '.btn-partner-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let title = $("#partner-title").val();
                let link = $("#partner-link").val();
                let image = $("#partner-image")[0].files[0];
                let status = $("#partner-status").val();

                let formData = new FormData();
                formData.append("title", title);
                formData.append("link", link);
                formData.append("image", image);
                formData.append("status", status);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let partnerId = $("#partner-update-id").val();
                if (partnerId !== "") {
                    formData.append("id", partnerId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendPartnerSubmit') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $this.html("Submit").removeAttr("disabled");
                        if (response.status === "success") {
                            $this.html(`<i class="fa-solid fa-check"></i> Added!`);
                            setTimeout(() => {
                                location.reload();
                                // $('.common-data-table').DataTable().ajax.reload(null, false);
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

            $(document).on('click', '.delete-partner', function () {
                let partnerId = $(this).data('id');

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
                            url: "{{ route('backendPartnerDelete') }}",
                            data: {
                                id: partnerId,
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
