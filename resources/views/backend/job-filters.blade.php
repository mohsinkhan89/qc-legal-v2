@extends('backend/layouts/master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .select2-selection__choice {
            padding: 5px 10px!important;
        }
    </style>
@stop

@section('title')
    <title>Job Filters</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-12 mb-1">
                        <button type="button" class="btn btn-primary waves-effect add-job"><i class="fa-solid fa-plus"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="job-filters-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Associated Filter</th>
                                        <th>Value</th>
                                        <th>Sort Order</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job_filter_options as $option)
                                        <tr id="row-{{ $option->id }}">
                                            <td>{{ $option->id }}</td>
                                            <td>{{ $option->jobFilters->title }}</td>
                                            <td>{{ $option->value }}</td>
                                            <td>{{ $option->sort_order }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($option->status == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Active</div>
                                                    @elseif($option->status == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">In Active</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    @if($option->status == 1)
                                                        <button data-id="{{ $option->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Deactivate" class="btn btn-dark waves-effect mb-1 update-job-filter-status">
                                                            <i class="fa-solid fa-ban"></i>
                                                        </button>
                                                    @else
                                                        <button data-id="{{ $option->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Activate" class="btn btn-success waves-effect mb-1 update-job-filter-status">
                                                            <i class="fa-solid fa-lock"></i>
                                                        </button>
                                                    @endif
                                                    <button data-id="{{ $option->id }}" data-associated-filter="{{ $option->job_filter_id }}" data-value="{{ $option->value }}" data-sortorder="{{ $option->sort_order }}" data-status="{{ $option->status }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Update" class="btn btn-warning waves-effect mb-1 update-job-filter">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button data-id="{{ $option->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-job-filter">
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

    <!-- Add Filter Modal -->
    <div class="modal fade text-left" id="add-job-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Filter Option</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="job-form" enctype="multipart/form-data">
                    <input type="hidden" id="job-filter-update-id">
                    @csrf
                    <div class="modal-body">
                        <div class="row gap-4">
                            <div class="col-md-12 mb-1">
                               <label for="job-filter-associated" class="form-label">Associated Filter <span class="text-danger">*</span></label>
                                <select id="job-filter-associated" class="selectpicker w-100 form-control">
                                    @foreach ($job_filters as $filter)
                                        <option value="{{ $filter->id }}" {{ $filter->id == 6 ? 'selected' : '' }}>{{ $filter->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label>Value <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="job-filter-value" type="text" placeholder="Value" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Sort Order <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="job-filter-sortorder" type="text" placeholder="Sort Order" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                               <label for="job-filter-status" class="form-label">Status <span class="text-danger">*</span></label>
                                <select id="job-filter-status" class="selectpicker w-100 form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-job-filter-submit">Submit</button>
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

        let pagePlaceholderValue = "Search for job filter";

        $(document).ready(function(){
            $(document).on('click', '.add-job', function () {
                $('#job-form')[0].reset();
                $("#add-job-modal").modal('show');
            })

            $(document).on('click', '.update-job-filter', function () {
                $("#add-job-modal").modal('show');
                $('#add-job-modal .modal-title').html('Update Job Filter');
                let $this = $(this);
                let jobFilterId = $this.data('id');
                let jobFilterAssociatedId = $this.data('associated-filter');
                let jobFilterValue = $this.data('value');
                let jobFilterSortOrder = $this.data('sortorder');
                let jobFilterStatus = $this.data('status');

                $('#job-filter-update-id').val(jobFilterId);
                $('#job-filter-associated').val(jobFilterAssociatedId);
                $('#job-filter-value').val(jobFilterValue);
                $('#job-sortorder').val(jobSortOrder);
                $('#job-status').val(jobStatus);
            });

            $(document).on('click', '.update-job-filter-status', function () {
                let jobFilterId = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendJobFilterToggleStatus') }}",
                    data: {
                        id: jobFilterId,
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

            $(document).on('click', '.btn-job-filter-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let filterId = $('#job-filter-associated').val();
                let value = $('#job-filter-value').val();
                let sortorder = $('#job-filter-sortorder').val();
                let status = $('#job-filter-status').val();

                let formData = new FormData();
                formData.append("filterId", filterId);
                formData.append("value", value);
                formData.append("sortorder", sortorder);
                formData.append("status", status);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let jobFilterId = $("#job-filter-update-id").val();
                if (jobFilterId !== "") {
                    formData.append("id", jobFilterId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendJobFilterSubmit') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $this.html("Submit").removeAttr("disabled");
                        if (response.status === "success") {
                            $this.html(`<i class="fa-solid fa-check"></i> Added!`);
                            console.log('coming out');

                            setTimeout(() => {
                                console.log('coming in');
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

            $(document).on('click', '.delete-job-filter', function () {
                let jobFilerId = $(this).data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('backendJobFilterDelete') }}",
                            data: {
                                id: jobFilerId,
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
