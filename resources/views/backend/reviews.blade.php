@extends('backend/layouts/master')
@section('css')
@stop

@section('title')
    <title>Reviews</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-12 mb-1">
                        <button type="button" class="btn btn-primary waves-effect add-review"><i class="fa-solid fa-plus"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="reviews-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Review</th>
                                        <th>Sort Order</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reviews as $review)
                                        <tr id="row-{{ $review->id }}">
                                            <td>{{ $review->id }}</td>
                                            <td>{{ $review->name }}</td>
                                            <td>{{ $review->review }}</td>
                                            <td>{{ $review->sort_order }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($review->status == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Active</div>
                                                    @elseif($review->status == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">In Active</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    @if($review->status == 1)
                                                    <button data-id="{{ $review->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Deactivate" class="btn btn-dark waves-effect mb-1 update-review-status">
                                                        <i class="fa-solid fa-ban"></i>
                                                    </button>
                                                    @else
                                                    <button data-id="{{ $review->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Activate" class="btn btn-success waves-effect mb-1 update-review-status">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </button>
                                                    @endif
                                                    <button data-id="{{ $review->id }}" data-name="{{ $review->name }}" data-review="{{ $review->review }}" data-sortorder="{{ $review->sort_order }}" data-status="{{ $review->status }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Update" class="btn btn-warning waves-effect mb-1 update-review">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button data-id="{{ $review->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-review">
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

    <!-- Add Review Modal -->
    <div class="modal fade text-left" id="add-review-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Review</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="review-form" enctype="multipart/form-data">
                    <input type="hidden" id="review-update-id">
                    @csrf
                    <div class="modal-body">
                        <label>Name <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="review-name" type="text" placeholder="Name" class="form-control" required>
                            <div class="feedback"></div>
                        </div>
                        <label>Review <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input id="review-text" type="text" placeholder="Review" class="form-control" required>
                            <div class="feedback"></div>
                        </div>
                        <label>Sort Order</label>
                        <div class="form-group">
                            <input id="review-sortorder" type="text" placeholder="Sort Order" class="form-control" required>
                            <div class="feedback"></div>
                        </div>
                        <label>Status <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" id="review-status" required>
                                <option value="1" selected>Active</option>
                                <option value="0">In Active</option>
                            </select>
                            <div class="feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-review-submit">Submit</button>
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

        let pagePlaceholderValue = "Search for review";

        $(document).ready(function(){
            $(document).on('click', '.add-review', function () {
                $('#review-form')[0].reset();
                $("#add-review-modal").modal('show');
            })

            $(document).on('click', '.update-review', function () {
                $("#add-review-modal").modal('show');
                $('#add-review-modal .modal-title').html('Update Review');
                let reviewId = $(this).data('id');
                let reviewName = $(this).data('name');
                let reviewText = $(this).data('review');
                let reviewSortorder = $(this).data('sortorder');
                let reviewStatus = $(this).data('status');

                $('#review-update-id').val(reviewId);
                $('#review-name').val(reviewName);
                $('#review-text').val(reviewText);
                $('#review-sortorder').val(reviewSortorder);
                $('#review-status').val(reviewStatus);

                console.log("The name is: ", reviewName);

            });

            $(document).on('click', '.update-review-status', function () {
                let reviewId = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendReviewToggleStatus') }}",
                    data: {
                        id: reviewId,
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

            $(document).on('click', '.btn-review-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let name = $("#review-name").val();
                let review = $("#review-text").val();
                let sortorder = $("#review-sortorder").val();
                let status = $("#review-status").val();

                let formData = new FormData();
                formData.append("name", name);
                formData.append("review", review);
                formData.append("sortorder", sortorder);
                formData.append("status", status);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let reviewId = $("#review-update-id").val();
                if (reviewId !== "") {
                    formData.append("id", reviewId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendReviewSubmit') }}",
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

            $(document).on('click', '.delete-review', function () {
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
                            url: "{{ route('backendReviewDelete') }}",
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
