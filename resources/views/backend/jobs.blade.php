@extends('backend/layouts/master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .select2-selection__choice {
            padding: 5px 10px !important;
        }
    </style>
@stop

@section('title')
    <title>Jobs</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-12 mb-1">
                    <button type="button" class="btn btn-primary waves-effect add-job"><i class="fa-solid fa-plus"></i>
                        Add</button>
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
                                    <th class="text-nowrap">QC Code</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Premium</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr id="row-{{ $job->id }}">
                                        <td>{{ $job->id }}</td>
                                        <td>{{ $job->qc_code_identity }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->location }}</td>
                                        <td>{{ $job->is_premium == 1 ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if ($job->status == 1)
                                                    <div style="border-radius: 0.25rem !important;"
                                                        class="px-2 badge badge-pill badge-light-success">Active</div>
                                                @elseif($job->status == 0)
                                                    <div style="border-radius: 0.25rem !important;"
                                                        class="px-2 badge badge-pill badge-light-danger">In Active</div>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-5">
                                                @if ($job->status == 1)
                                                    <button data-id="{{ $job->id }}" type="button"
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Deactivate"
                                                        class="btn btn-dark waves-effect mb-1 update-job-status">
                                                        <i class="fa-solid fa-ban"></i>
                                                    </button>
                                                @else
                                                    <button data-id="{{ $job->id }}" type="button"
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Activate"
                                                        class="btn btn-success waves-effect mb-1 update-job-status">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </button>
                                                @endif
                                                <button data-id="{{ $job->id }}" data-title="{{ $job->title }}"
                                                    data-position="{{ $job->position }}" data-sector="{{ $job->sector }}"
                                                    data-location="{{ $job->location }}"
                                                    data-qc_code_identity="{{ $job->qc_code_identity }}"
                                                    data-pqe="{{ $job->pqe }}" data-jobtype="{{ $job->type }}"
                                                    data-paygrade="{{ $job->pay_grade }}"
                                                    data-short-desc="{{ $job->short_desc }}"
                                                    data-desc="{{ $job->desc }}"
                                                    data-apply-heading="{{ $job->apply_now_heading }}"
                                                    data-apply-note="{{ $job->apply_now_note }}"
                                                    data-apply-custom-link="{{ $job->apply_now_custom_link }}"
                                                    data-newtab="{{ $job->apply_now_custom_link_new_tab }}"
                                                    data-premium="{{ $job->is_premium }}"
                                                    data-sortorder="{{ $job->sort_order }}"
                                                    data-status="{{ $job->status }}" type="button" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Update"
                                                    class="btn btn-warning waves-effect mb-1 update-job">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button data-id="{{ $job->id }}" type="button" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Delete"
                                                    class="btn btn-danger waves-effect mb-1 delete-job">
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
    <div class="modal fade text-left" id="add-job-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Job</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="job-form" enctype="multipart/form-data">
                    <input type="hidden" id="job-update-id">
                    @csrf
                    <div class="modal-body">
                        <div class="row gap-4">
                            <div class="col-md-6">
                                <label>Title <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="job-title" type="text" placeholder="Title" class="form-control"
                                        required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="job-premium" class="form-label">Premium Listing? <span
                                        class="text-danger">*</span></label>
                                <select id="job-premium" class="selectpicker w-100 form-control">
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Position</label>
                                <div class="form-group">
                                    <input id="job-position" type="text" placeholder="Position" class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Sector</label>
                                <div class="form-group">
                                    <input id="job-sector" type="text" placeholder="Sector" class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Location <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="job-location" type="text" placeholder="Location" class="form-control">
                                    <div class="feedback"></div>
                                    <small>Enter comma seperated value.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>QC Code</label>
                                <div class="form-group">
                                    <input id="job-qccode" type="number" placeholder="QC Code" class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Post Qualification Experience (PQE)</label>
                                <div class="form-group">
                                    <input id="job-pqe" type="text" placeholder="PQE" class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="job-type" class="form-label">Type <span class="text-danger">*</span></label>
                                <select id="job-type" class="selectpicker w-100 form-control">
                                    <option value="" selected>Select Option</option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Contract">Contract</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Pay Grade</label>
                                <div class="form-group">
                                    <input id="job-paygrade" type="text" placeholder="Pay Grade"
                                        class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Short Description</label>
                                <div class="form-group">
                                    <input id="job-shortdesc" type="text" placeholder="Short Description"
                                        class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Description <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="job-desc" type="text" placeholder="Description" class="form-control"
                                        required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Apply Now Heading</label>
                                <div class="form-group">
                                    <input id="job-applyheading" type="text" placeholder="Apply Now Heading"
                                        class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Apply Now Note</label>
                                <div class="form-group">
                                    <input id="job-applynote" type="text" placeholder="Apply Now Note"
                                        class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Apply Now Custom URL</label>
                                <div class="form-group">
                                    <input id="job-applycustomurl" type="text" placeholder="Apply Now Custom URL"
                                        class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="job-newtab" class="form-label">Open Link in New</label>
                                <select id="job-newtab" class="selectpicker w-100 form-control">
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Sort Order</label>
                                <div class="form-group">
                                    <input id="job-sortorder" type="number" placeholder="Sort Order"
                                        class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="job-status" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select id="job-status" class="selectpicker w-100 form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="job-filteroptions">Job Filter Options</label>
                                    <select class="form-control" id="job-filteroptions" multiple="multiple">
                                        @foreach ($job_filter_options as $filter_option)
                                            <option value="{{ $filter_option->id }}">{{ $filter_option->value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-1">
                                    <label for="job-keywords" class="form-label">Select Meta Page</label>
                                    <select id="job-keywords" class="form-control select2" multiple="multiple">
                                        @foreach ($job_keywords as $jk)
                                            <option value="{{ $jk->id }}">{{ ucwords($jk->title) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-job-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.9.1/tinymce.min.js"
        integrity="sha512-09JpfVm/UE1F4k8kcVUooRJAxVMSfw/NIslGlWE/FGXb2uRO1Nt4BXAJ3LxPqNbO3Hccdu46qaBPp9wVpWAVhA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

        let pagePlaceholderValue = "Search for job";

        $(document).ready(function() {
            tinymce.init({
                selector: '#job-desc',
                menubar: false,
                plugins: 'lists link image table code',
                toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
                height: 700
            });

            tinymce.init({
                selector: '#job-applynote',
                menubar: false,
                plugins: 'lists link image table code',
                toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
                height: 300
            });

            $('#job-filteroptions').select2({
                placeholder: "Select options",
                allowClear: true
            });

            $('#job-keywords').select2({
                placeholder: "Select Meta Page",
                allowClear: true,
                tags: false
            });

            $(document).on('click', '.add-job', function() {
                $('#job-form')[0].reset();
                $("#add-job-modal").modal('show');
            })

            $(document).on('click', '.update-job', function() {
                $("#add-job-modal").modal('show');
                $('#add-job-modal .modal-title').html('Update Job');
                let $this = $(this);
                let jobId = $this.data('id');
                let jobTitle = $this.data('title');
                let jobPosition = $this.data('position');
                let jobSector = $this.data('sector');
                let jobLocation = $this.data('location');
                let jobQcCode = $this.data('qc_code_identity');
                let jobPqe = $this.data('pqe');
                let jobType = $this.data('jobtype');
                let jobPayGrade = $this.data('paygrade');
                let jobShortDesc = $this.data('short-desc');
                let jobDesc = $this.data('desc');
                let jobApplyHeading = $this.data('apply-heading');
                let jobApplyNote = $this.data('apply-note');
                let jobApplyCustomLink = $this.data('apply-custom-link');
                let jobNewTab = $this.data('newtab');
                let jobPremium = $this.data('premium');
                let jobSortOrder = $this.data('sortorder');
                let jobStatus = $this.data('status');

                $('#job-update-id').val(jobId);
                $('#job-title').val(jobTitle);
                $('#job-premium').val(jobPremium);
                $('#job-position').val(jobPosition);
                $('#job-sector').val(jobSector);
                $('#job-location').val(jobLocation);
                $('#job-qccode').val(jobQcCode);
                $('#job-pqe').val(jobPqe);
                $('#job-type').val(jobType);
                $('#job-paygrade').val(jobPayGrade);
                $('#job-shortdesc').val(jobShortDesc);
                tinymce.get('job-desc').setContent(jobDesc ?? '');
                $('#job-applyheading').val(jobApplyHeading);
                tinymce.get('job-applynote').setContent(jobApplyNote ?? '');
                $('#job-applycustomurl').val(jobApplyCustomLink);
                $('#job-newtab').val(jobNewTab);
                $('#job-sortorder').val(jobSortOrder);
                $('#job-status').val(jobStatus);

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendJobGetFilterOption') }}",
                    data: {
                        id: jobId,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === "success") {
                            $('#job-filteroptions').val(response.options).trigger('change');
                            $('#job-keywords').val(response.keywords).trigger('change');
                        } else {
                            console.log(response.message);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.update-job-status', function() {
                let jobId = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendJobToggleStatus') }}",
                    data: {
                        id: jobId,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === "success") {
                            location.reload();
                        } else {
                            console.log(response.message);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.btn-job-submit', function(event) {
                event.preventDefault();
                let $this = $(this);
                let title = $('#job-title').val();
                let premium_status = $('#job-premium').val();
                let position = $('#job-position').val();
                let sector = $('#job-sector').val();
                let joblocation = $('#job-location').val();
                let qccode = $('#job-qccode').val();
                let pqe = $('#job-pqe').val();
                let type = $('#job-type').val();
                let paygrade = $('#job-paygrade').val();
                let short_desc = $('#job-shortdesc').val();
                let desc = tinymce.get('job-desc').getContent();
                let apply_heading = $('#job-applyheading').val();
                let apply_note = tinymce.get('job-applynote').getContent();
                let apply_customurl = $('#job-applycustomurl').val();
                let open_newtab = $('#job-newtab').val();
                let sortorder = $('#job-sortorder').val();
                let status = $('#job-status').val();
                let filter_options = $('#job-filteroptions').val();
                let keywords = $('#job-keywords').val();

                let formData = new FormData();
                formData.append("title", title);
                formData.append("premium_status", premium_status);
                formData.append("position", position);
                formData.append("sector", sector);
                formData.append("location", joblocation);
                formData.append("qccode", qccode);
                formData.append("pqe", pqe);
                formData.append("type", type);
                formData.append("paygrade", paygrade);
                formData.append("short_desc", short_desc);
                formData.append("desc", desc);
                formData.append("apply_heading", apply_heading);
                formData.append("apply_note", apply_note);
                formData.append("apply_customurl", apply_customurl);
                formData.append("open_newtab", open_newtab);
                formData.append("sortorder", sortorder);
                formData.append("status", status);
                if (filter_options) {
                    filter_options.forEach(function(option) {
                        formData.append('filter_options[]', option);
                    });
                }

                if (keywords) {
                    keywords.forEach(function(keyword) {
                        formData.append('keywords[]', keyword);
                    });
                }

                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let jobId = $("#job-update-id").val();
                if (jobId !== "") {
                    formData.append("id", jobId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendJobSubmit') }}",
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

            $(document).on('click', '.delete-job', function() {
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
                            url: "{{ route('backendJobDelete') }}",
                            data: {
                                id: jobId,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                location.reload();
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>
@stop
