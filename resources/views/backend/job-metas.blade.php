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
    <title>Job Metas Pages</title>
@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-12 mb-1">
                        <button type="button" class="btn btn-primary waves-effect add-job-meta"><i class="fa-solid fa-plus"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="job-metas-table" class="table table-striped common-data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Keywords</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job_keywords as $keyword)
                                        <tr id="row-{{ $keyword->id }}">
                                            <td>{{ $keyword->id }}</td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <div>
                                                        {{ $keyword->title }}
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('search_job_keywords', $keyword->slug) }}" target="_blank" class="text-primary" style="font-size: .9rem;">{{ route('search_job_keywords', $keyword->slug) }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ Str::limit($keyword->description, 50) }}</td>
                                            <td>{{ Str::limit($keyword->keywords, 50) }}</td>
                                            <td>{{ $keyword->slug }}</td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    <button data-id="{{ $keyword->id }}" data-title="{{ $keyword->title }}" data-description="{{ $keyword->description }}" data-keywords="{{ $keyword->keywords }}" data-slug="{{ $keyword->slug }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Update" class="btn btn-warning waves-effect mb-1 update-job-meta">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button data-id="{{ $keyword->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-job-meta">
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

    <!-- Add/Update Meta Modal -->
    <div class="modal fade text-left" id="job-meta-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Job Meta Page</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="job-meta-form">
                    <input type="hidden" id="job-meta-update-id">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <label>Title <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="job-meta-title" type="text" placeholder="Meta Title" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label>Description</label>
                                <div class="form-group">
                                    <textarea id="job-meta-description" placeholder="Meta Description" class="form-control" rows="4" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 mb-1">
                                <label>Keywords</label>
                                <div class="form-group">
                                    <textarea id="job-meta-keywords" placeholder="Meta Keywords" class="form-control" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label>Slug <small class="text-muted">(Optional - Leave empty to auto-generate)</small></label>
                                <div class="form-group">
                                    <input id="job-meta-slug" type="text" placeholder="Meta Slug (e.g. valid-slug-example)" class="form-control">
                                    <small class="form-text text-muted">Only lowercase letters, numbers, and hyphens allowed.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-job-meta-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        let pagePlaceholderValue = "Search for job meta";

        $(document).ready(function(){
            $(document).on('click', '.add-job-meta', function () {
                $('#job-meta-form')[0].reset();
                $('#job-meta-update-id').val('');
                $('#job-meta-modal .modal-title').html('Add New Job Meta Page');
                $("#job-meta-modal").modal('show');
            })

            $(document).on('click', '.update-job-meta', function () {
                let $this = $(this);
                $('#job-meta-form')[0].reset();
                $('#job-meta-update-id').val($this.data('id'));
                $('#job-meta-title').val($this.data('title'));
                $('#job-meta-description').val($this.data('description'));
                $('#job-meta-keywords').val($this.data('keywords'));
                $('#job-meta-slug').val($this.data('slug'));
                $('#job-meta-modal .modal-title').html('Update Job Meta Page');
                $("#job-meta-modal").modal('show');
            });

            $(document).on('click', '.btn-job-meta-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let title = $('#job-meta-title').val();
                let description = $('#job-meta-description').val();
                let keywords = $('#job-meta-keywords').val();
                let slug = $('#job-meta-slug').val();
                let id = $("#job-meta-update-id").val();

                if(!title) {
                    Swal.fire('Error', 'Please fill title', 'error');
                    return;
                }

                $this.html('<i class="fa fa-spinner fa-spin"></i> Saving...').attr('disabled', true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendJobKeywordSubmit') }}",
                    data: {
                        id: id,
                        title: title,
                        description: description,
                        keywords: keywords,
                        slug: slug,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === "success") {
                            $this.html(`<i class="fa-solid fa-check"></i> Saved!`);
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            $this.html("Submit").removeAttr("disabled");
                            Swal.fire('Error', response.message, 'error');
                        }
                    },
                    error: function(xhr) {
                        $this.html("Submit").removeAttr("disabled");
                        Swal.fire('Error', 'Internal Server Error', 'error');
                    }
                });
            });

            $(document).on('click', '.delete-job-meta', function () {
                let id = $(this).data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This will also remove all associated jobs from this meta page.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('backendJobKeywordDelete') }}",
                            data: {
                                id: id,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                location.reload();
                            },
                            error: function (xhr) {
                                Swal.fire('Error', 'Deletion failed', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
@stop
