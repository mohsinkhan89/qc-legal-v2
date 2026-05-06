@extends('backend/layouts/master')
@section('css')
@stop

@section('title')
    <title>Contact Queries</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="candidates-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $query)
                                        <tr id="row-{{ $query->id }}">
                                            <td>{{ $query->id }}</td>
                                            <td>{{ $query->first_name }}</td>
                                            <td>{{ $query->last_name }}</td>
                                            <td>{{ $query->email }}</td>
                                            <td>{{ $query->phone_number }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($query->status == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-warning">Pending</div>
                                                    @elseif($query->status == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Completed</div>
                                                    @elseif($query->status == 2)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">Rejected</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    <button data-id="{{ $query->id }}" data-firstname="{{ $query->first_name }}" data-lastname="{{ $query->last_name }}" data-email="{{ $query->email }}" data-phonenumber="{{ $query->phone_number }}" data-message="{{ $query->message }}" data-status="{{ $query->status }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="View Query" class="btn btn-dark waves-effect mb-1 view-query">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button data-id="{{ $query->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-contact">
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

    <!-- View Candidate Modal -->
    <div class="modal fade text-left" id="view-query-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Enquiry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="review-form" enctype="multipart/form-data">
                    <input type="hidden" id="contact-id">
                    @csrf
                    <div class="modal-body">
                        <label>First Name <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="contact-firstname" type="text" placeholder="First Name" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Last Name <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="contact-lastname" type="text" placeholder="Last Name" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Email <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="contact-email" type="text" placeholder="Email" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="contact-phonenumber" type="text" placeholder="Phone Number" class="form-control" readonly>
                            <div class="feedback"></div>
                        </div>
                        <label>Message <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <textarea rows="8" id="contact-message" type="text" placeholder="Phone Number" class="form-control qc-resize-none" readonly></textarea>
                            <div class="feedback"></div>
                        </div>
                        <label>Status <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" id="contact-status" required>
                                <option value="0" selected>Pending</option>
                                <option value="1">Completed</option>
                                <option value="2">Rejected</option>
                            </select>
                            <div class="feedback"></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-contact-submit">Update Status</button>
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
            $(document).on('click', '.view-query', function () {
                $("#view-query-modal").modal('show');
                $('#view-query-modal .modal-title').html('View Enquiry');

                let contactId = $(this).data('id');
                let contactFirstName = $(this).data('firstname');
                let contactLastName = $(this).data('lastname');
                let contactEmail = $(this).data('email');
                let contactPhoneNumber = $(this).data('phonenumber');
                let contactMessage = $(this).data('message');
                let contactStatus = $(this).data('status');
                let contactCV = $(this).data('cv');

                $('#contact-id').val(contactId);
                $('#contact-firstname').val(contactFirstName);
                $('#contact-lastname').val(contactLastName);
                $('#contact-email').val(contactEmail);
                $('#contact-phonenumber').val(contactPhoneNumber);
                $('#contact-message').val(contactMessage);
                $('#contact-status').val(contactStatus);
            });

            $(document).on('click', '.btn-contact-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let status = $("#contact-status").val();

                let formData = new FormData();
                formData.append("status", status);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let contactId = $("#contact-id").val();
                if (contactId !== "") {
                    formData.append("id", contactId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendContactSubmit') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $this.html("Submit").removeAttr("disabled");
                        if (response.status === "success") {
                            $this.html(`<i class="fa-solid fa-check"></i> Updated!`);
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

            $(document).on('click', '.delete-contact', function () {
                let contactId = $(this).data('id');

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
                            url: "{{ route('backendContactsDelete') }}",
                            data: {
                                id: contactId,
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
