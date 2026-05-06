@extends('backend/layouts/master')
@section('css')
@stop

@section('title')
    <title>Candidate Status</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-12 mb-1">
                        <button type="button" class="btn btn-primary waves-effect add-candidate-status"><i class="fa-solid fa-plus"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="candidate-status-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Value</th>
                                        <th>Dashboard Status</th>
                                        <th>Bage Color</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($candidateStatus as $status)
                                        <tr id="row-{{ $status->id }}">
                                            <td>{{ $status->id }}</td>
                                            <td>{{ $status->title }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($status->show_on_dashboard == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Yes</div>
                                                    @elseif($status->show_on_dashboard == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">No</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge {{ $status->theme_class ? $status->theme_class : '' }}">{{ ucwords(collect(explode('-', $status->theme_class))->skip(1)->implode(' ')) }}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($status->status == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Active</div>
                                                    @elseif($status->status == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">In Active</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-5 {{ ($status->id == 1 || $status->id == 3) ? 'qc-cs-disabled' : '' }}" @if($status->id == 1 || $status->id == 3) title="This record is not editable" @endif>
                                                    @if($status->status == 1)
                                                        <button data-id="{{ $status->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Deactivate" class="btn btn-dark waves-effect mb-1 update-cs-status">
                                                            <i class="fa-solid fa-ban"></i>
                                                        </button>
                                                    @else
                                                        <button data-id="{{ $status->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Activate" class="btn btn-success waves-effect mb-1 update-cs-status">
                                                            <i class="fa-solid fa-lock"></i>
                                                        </button>
                                                    @endif
                                                    <button data-id="{{ $status->id }}" data-value="{{ $status->title }}" data-theme-class="{{ $status->theme_class }}" data-dashboard="{{ $status->show_on_dashboard }}" data-status="{{ $status->status }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Update" class="btn btn-warning waves-effect mb-1 update-cs">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button data-id="{{ $status->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-cs">
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

    <!-- Add Candidate Status Modal -->
    <div class="modal fade text-left" id="add-candidate-status-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Candidate Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="candidate-status-form" enctype="multipart/form-data">
                    <input type="hidden" id="candidate-status-update-id">
                    @csrf
                    <div class="modal-body">
                        <label>Status Value <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="candidate-status-value" type="text" placeholder="Value" class="form-control" required>
                            <div class="feedback"></div>
                        </div>
                        <label>Show on Dashboard <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" id="candidate-status-dashboard" required>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            </select>
                            <div class="feedback"></div>
                        </div>
                        <label>Select Color </label>
                        <div class="qc-color-container mb-3">
                            <div class="qc-color bg-success selected" data-theme-class="badge-light-success">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                            <div class="qc-color bg-warning" data-theme-class="badge-light-warning">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                            <div class="qc-color bg-danger" data-theme-class="badge-light-danger">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                            <div class="qc-color bg-primary" data-theme-class="badge-light-primary">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                            <div class="qc-color bg-info" data-theme-class="badge-light-info">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                            <div class="qc-color bg-secondary" data-theme-class="badge-light-secondary">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                        </div>
                        <label>Status <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" id="candidate-status-status" required>
                                <option value="1" selected>Active</option>
                                <option value="0">In Active</option>
                            </select>
                            <div class="feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-candidate-status-submit">Submit</button>
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

        let pagePlaceholderValue = "Search for status";

        $(document).ready(function(){
            $(document).on('click', '.add-candidate-status', function () {
                $('#candidate-status-form')[0].reset();
                $("#add-candidate-status-modal").modal('show');
            });

            $(document).on('click', '.update-cs', function () {
                $("#add-candidate-status-modal").modal('show');
                $('#add-candidate-status-modal .modal-title').html('Update Status Value');
                let statusId = $(this).data('id');
                let statusValue = $(this).data('value');
                let statusDashboard = $(this).data('dashboard');
                let statusThemeClass = $(this).data('theme-class');
                let statusStatus = $(this).data('status');

                $('#candidate-status-update-id').val(statusId);
                $('#candidate-status-value').val(statusValue);
                $('#candidate-status-dashboard').val(statusDashboard);
                $('#candidate-status-status').val(statusStatus);
                $('.qc-color').removeClass('selected');
                $('.qc-color').each(function() {
                    if ($(this).data('theme-class') === statusThemeClass) {
                        $(this).addClass('selected');
                        console.log($(this));

                    }
                });
            });

            $(document).on('click', '.qc-color', function () {
                $('.qc-color').removeClass('selected');
                $(this).addClass('selected');
            });


            $(document).on('click', '.update-cs-status', function () {
                let statusId = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendCandidateStatusToggleStatus') }}",
                    data: {
                        id: statusId,
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

            $(document).on('click', '.btn-candidate-status-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let themeClass = $('.qc-color.selected').data('theme-class');
                value = $('#candidate-status-value').val();
                dashboard = $('#candidate-status-dashboard').val();
                status = $('#candidate-status-status').val();

                let formData = new FormData();
                formData.append("value", value);
                formData.append("dashboard", dashboard);
                formData.append("status", status);
                formData.append("theme_class", themeClass);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let statusId = $('#candidate-status-update-id').val();
                if (statusId !== "") {
                    formData.append("id", statusId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendCandidateStatusSubmit') }}",
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

            $(document).on('click', '.delete-cs', function () {
                let reviewId = $(this).data('id');

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
                            url: "{{ route('backendCandidateStatusDelete') }}",
                            data: {
                                id: reviewId,
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
