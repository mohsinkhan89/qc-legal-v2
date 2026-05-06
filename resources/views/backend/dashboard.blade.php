@extends('backend/layouts/master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('backend/app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('backend/app-assets/vendors/css/charts/apexcharts.css') }}">
@stop

@section('title')
    <title>Dashboard</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                                <img src="{{ url('backend/app-assets/images/elements/decore-left.png') }}" class="congratulations-img-left" alt="card-img-left">
                                <img src="{{ url('backend/app-assets/images/elements/decore-right.png') }}" class="congratulations-img-right" alt="card-img-right">
                                <div class="avatar avatar-xl qc-bg-secondary shadow">
                                    <div class="avatar-content">
                                        <i data-feather="award" class="font-large-1"></i>
                                    </div>
                                </div>
                                @php
                                    $lastcandidate = $candidates->first();
                                @endphp
                                <div class="text-center">
                                    @if ($lastcandidate)
                                        <h1 class="mb-1 text-white">New Candidate, <strong>{{ $lastcandidate->first_name }}</strong>!</h1>
                                        <p class="card-text m-auto w-75">
                                            {{ $lastcandidate->first_name }} has just applied for the position of <strong>{{ $lastcandidate->career_detail ? $lastcandidate->career_detail->title : '' }}</strong>.
                                        </p>
                                    @else
                                        <h1 class="mb-1 text-white">No Candidates</h1>
                                        <p class="card-text m-auto w-75">
                                            No recent applications have been received.
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <a href="{{ route('backendCandidates') }}">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">{{ str_pad(count($candidates), 2, '0', STR_PAD_LEFT) }}</h2>
                                    <p class="card-text">Total Candidates</p>
                                </div>
                                <div id="gained-chart"></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <a href="{{ route('backendJobs') }}">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="file" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">{{ str_pad(count($jobs), 2, '0', STR_PAD_LEFT) }}</h2>
                                    <p class="card-text">Total Jobs</p>
                                </div>
                                <div id="order-chart"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <a href="{{ route('backendContacts') }}">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list font-medium-5"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder">{{ str_pad(count($pendingcontacts), 2, '0', STR_PAD_LEFT) }}</h2>
                                    <p class="card-text">Pending Queries</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <a href="{{ route('backendReviews') }}">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square font-medium-5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder">{{ str_pad(count($reviews), 2, '0', STR_PAD_LEFT) }}</h2>
                                    <p class="card-text">Reviews on Website</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <a href="{{ route('backendPartners') }}">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase font-medium-5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder">{{ str_pad(count($partners), 2, '0', STR_PAD_LEFT) }}</h2>
                                    <p class="card-text">Partners on Website</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <a href="https://www.qclegal.com/" target="_blank">
                            <div class="card text-center bg-primary">
                                <div class="card-body">
                                    <div class="avatar p-50 mb-1 qc-bg-white-010">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart font-medium-5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder text-white">View Website</h2>
                                    <p class="card-text"><a href="https://www.qclegal.com/" class="text-white" target="_blank">www.qclegal.com</a></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @if (count($candidate_status) > 0)                    
                    <h3 class="h3">Candidates Overview</h3>
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
                @endif
                <h3 class="h3">Recent Candidates</h3>
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table id="candidates-table" class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Job</th>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
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
                                                <td>
                                                    <div class="d-flex gap-5">
                                                        <a href="{{ url('uploads/cv') }}/{{ $candidate->cv }}" data-id="{{ $candidate->id }}" download data-toggle="tooltip" data-placement="top" data-original-title="Download CV" class="btn btn-success waves-effect mb-1 download-candidate-cv">
                                                            <i class="fa-solid fa-download"></i>
                                                        </a>
                                                        <button data-id="{{ $candidate->id }}" data-job-id="{{ $candidate->job_id }}" data-firstname="{{ $candidate->first_name }}" data-lastname="{{ $candidate->last_name }}" data-email="{{ $candidate->email }}" data-phonenumber="{{ $candidate->phone_number }}" data-coverletter="{{ $candidate->cover_letter }}" data-cv="{{ url('uploads/cv') }}/{{ $candidate->cv }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="View" class="btn btn-dark waves-effect mb-1 view-candidate">
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
            </section>
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
                    </div>
                    <div class="modal-footer">
                        <a href="" target="_blank" id="candidate-cv-button" download class="btn btn-primary btn-review-submit w-100">Download CV</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ url('backend/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script>
        let totalCandidates = @json($dailyCandidatesCount);
        let totalJobs = @json($dailyJobsCount);
    </script>
    <script src="{{ url('backend/app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>

    <script>
        $(document).ready(function () {
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

                $('#candidate-id').val(candidateId);
                $('#candidate-firstname').val(candidateFirstName);
                $('#candidate-lastname').val(candidateLastName);
                $('#candidate-email').val(candidateEmail);
                $('#candidate-phonenumber').val(candidatePhoneNumber);
                $('#candidate-coverletter').val(candidateCoverletter);
                $('#candidate-cv-button').attr('href', candidateCV);
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
