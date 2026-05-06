@extends('backend/layouts/master')
@section('css')
@stop

@section('title')
    <title>Candidates</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">

        <div class="row match-height">
            @foreach ($candidate_status as $status)
                <div class="col-lg-3 col-sm-6 col-12">
                    <a href="{{ route('backendStatusCandidates', $status->slug) }}">
                        <div class="card">
                            <div class="card-header flex-column align-items-start">
                                <div class="avatar badge {{ $status->theme_class }} p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="users" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="font-weight-bolder mt-1">{{ $status->title }} ({{ $candidates->where('status', $status->id)->count() }})</h2>
                                <div class="btn btn-primary waves-effect">View Records</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="content-header">
            <h3 class="h3">View Recent Candidates</h3>
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="candidates-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Job</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($candidates as $candidate)
                                        <tr id="row-{{ $candidate->id }}">
                                            <td>{{ $candidate->id }}</td>
                                            <td>{{ $candidate->career_detail ? $candidate->career_detail->title : '' }}</td>
                                            <td>{{ $candidate->first_name }}</td>
                                            <td>{{ $candidate->email }}</td>
                                            <td>{{ $candidate->phone_number }}</td>
                                            @php
                                                $statusMap = [];
                                                foreach($candidate_status as $status) {
                                                    $statusMap[$status->id] = [
                                                        'label' => $status->title,
                                                        'badge' => $status->theme_class ?? 'badge-light-primary',
                                                    ];
                                                }
                                            @endphp
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if(isset($statusMap[$candidate->status]))
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill {{ $statusMap[$candidate->status]['badge'] }}">
                                                            {{ $statusMap[$candidate->status]['label'] }}
                                                        </div>
                                                    @else
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-secondary">
                                                            Unknown
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    <a href="{{ url('uploads/cv') }}/{{ $candidate->cv }}" data-id="{{ $candidate->id }}" download data-toggle="tooltip" data-placement="top" data-original-title="Download CV" class="btn btn-success waves-effect mb-1 download-candidate-cv">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                    <button data-id="{{ $candidate->id }}" data-job-id="{{ $candidate->job_id }}" data-firstname="{{ $candidate->first_name }}" data-lastname="{{ $candidate->last_name }}" data-email="{{ $candidate->email }}" data-phonenumber="{{ $candidate->phone_number }}" data-coverletter="{{ $candidate->cover_letter }}" data-cv="{{ url('uploads/cv') }}/{{ $candidate->cv }}" data-comment="{{ $candidate->comment }}" data-status="{{ $candidate->status }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="View" class="btn btn-dark waves-effect mb-1 view-candidate">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button data-id="{{ $candidate->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-candidate">
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
            {{-- <div class="content-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- View Candidate Modal -->
    <div class="modal fade text-left" id="view-candidate-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Candidate</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="review-form" enctype="multipart/form-data">
                    <input type="hidden" id="candidate-id">
                    @csrf
                    <div class="modal-body">
                        <label>First Name <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="candidate-firstname" type="text" placeholder="First Name" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Last Name <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="candidate-lastname" type="text" placeholder="Last Name" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Email <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="candidate-email" type="text" placeholder="Email" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="candidate-phonenumber" type="text" placeholder="Phone Number" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Cover Letter <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <textarea rows="7" id="candidate-coverletter" type="text" placeholder="Cover Letter" class="form-control qc-resize-none" readonly></textarea>
                            <div class="feedback"></div>
                        </div>
                        <label>Comments </label>
                        <div class="form-group">
                            <textarea rows="7" id="candidate-comment" type="text" placeholder="Comment" class="form-control qc-resize-none"></textarea>
                            <div class="feedback">Internal comment and not visible to candidate.</div>
                        </div>
                        <label>Status <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" id="candidate-status" required>
                                @foreach ($candidate_status as $status)
                                    <option value="{{ $status->id }}">{{ $status->title }}</option>
                                @endforeach
                            </select>
                            <div class="feedback"></div>
                        </div>
                        <a href="" target="_blank" id="candidate-cv-button" download class="btn btn-success waves-effect w-100"><i class="fa-solid fa-download"></i> Download CV</a>
                    </div>
                    <div class="modal-footer">
                        <a href="" target="_blank" id="candidate-cv-button" download class="btn btn-primary btn-candidate-submit">Update Status</a>
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

        let pagePlaceholderValue = "Search for candidate";

        $(document).ready(function(){
            $(document).on('click', '.view-candidate', function () {
                $("#view-candidate-modal").modal('show');
                $('#view-candidate-modal .modal-title').html('View Candidate');

                let candidateId = $(this).data('id');
                let candidateJobId = $(this).data('job-id');
                let candidateFirstName = $(this).data('firstname');
                let candidateLastName = $(this).data('lastname');
                let candidateEmail = $(this).data('email');
                let candidatePhoneNumber = $(this).data('phonenumber');
                let candidateCoverletter = $(this).data('coverletter');
                let candidateCV = $(this).data('cv');
                let candidateComment = $(this).data('comment');
                let candidateStatus = $(this).data('status');

                $('#candidate-id').val(candidateId);
                $('#candidate-firstname').val(candidateFirstName);
                $('#candidate-lastname').val(candidateLastName);
                $('#candidate-email').val(candidateEmail);
                $('#candidate-phonenumber').val(candidatePhoneNumber);
                $('#candidate-coverletter').val(candidateCoverletter);
                $('#candidate-comment').val(candidateComment);
                $('#candidate-status').val(candidateStatus);
                $('#candidate-cv-button').attr('href', candidateCV);
            });

            $(document).on('click', '.btn-candidate-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let status = $("#candidate-status").val();
                let comment = $("#candidate-comment").val();
                $this.html(`<span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>`).attr("qc-disabled", "qc-disabled");

                let formData = new FormData();
                formData.append("status", status);
                formData.append("comment", comment);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let candidateId = $("#candidate-id").val();
                if (candidateId !== "") {
                    formData.append("id", candidateId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendCandidatesSubmit') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $this.html("Update Status").removeAttr("disabled");
                        if (response.status === "success") {
                            $this.html(`<i class="fa-solid fa-check"></i> Updated!`);
                            setTimeout(() => {
                                location.reload();
                            }, 1500);
                        } else if (response.status === "error") {
                            if (response.errors) {
                                $this.html("Update Status").removeAttr("disabled");
                                console.log(xhr.responseText);
                            }
                        }
                    },
                    error: function(xhr) {
                        $this.html("").removeAttr("disabled");
                        console.log(xhr.responseText);
                    }
                });

            });

            $(document).on('click', '.delete-candidate', function () {
                let candidateId = $(this).data('id');

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
                            url: "{{ route('backendCandidatesDelete') }}",
                            data: {
                                id: candidateId,
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
