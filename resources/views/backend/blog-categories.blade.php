@extends('backend/layouts/master')
@section('css')
    <style>
        .slug-feedback {
            font-size: 0.8rem;
            margin-top: 5px;
        }

        .slug-success {
            color: #28c76f;
        }

        .slug-error {
            color: #ea5455;
        }
    </style>
@stop

@section('title')
    <title>Blog Categories</title>
@stop

@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-12 mb-1">
                    <button type="button" class="btn btn-primary waves-effect add-category"><i class="fa-solid fa-plus"></i>
                        Add</button>
                </div>
            </div>
        </div>

        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table id="categories-table" class="table table-striped common-data-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Sort Order</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr id="row-{{ $category->id }}">
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->sort_order }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if ($category->status == 1)
                                                    <div style="border-radius: 0.25rem !important;"
                                                        class="px-2 badge badge-pill badge-light-success">Active</div>
                                                @elseif($category->status == 0)
                                                    <div style="border-radius: 0.25rem !important;"
                                                        class="px-2 badge badge-pill badge-light-danger">Not Active</div>
                                                @endif
                                            </div>
                                        </td>
                                        <td>{{ $category->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <div class="d-flex gap-5">
                                                @if ($category->status == 1)
                                                    <button data-id="{{ $category->id }}" type="button"
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Deactivate"
                                                        class="btn btn-dark waves-effect mb-1 update-category-status">
                                                        <i class="fa-solid fa-ban"></i>
                                                    </button>
                                                @else
                                                    <button data-id="{{ $category->id }}" type="button"
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Activate"
                                                        class="btn btn-success waves-effect mb-1 update-category-status">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </button>
                                                @endif
                                                <button data-id="{{ $category->id }}" data-title="{{ $category->title }}"
                                                    data-slug="{{ $category->slug }}"
                                                    data-meta-title="{{ $category->meta_title }}"
                                                    data-meta-description="{{ $category->meta_description }}"
                                                    data-sort-order="{{ $category->sort_order }}"
                                                    data-status="{{ $category->status }}" type="button"
                                                    data-toggle="tooltip" data-placement="top" data-original-title="Update"
                                                    class="btn btn-warning waves-effect mb-1 update-category">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                @if ($category->slug !== 'blogs')
                                                    <button data-id="{{ $category->id }}" type="button"
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Delete"
                                                        class="btn btn-danger waves-effect mb-1 delete-category">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                @endif
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

    <!-- Add Category Modal -->
    <div class="modal fade text-left" id="category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="category-form">
                    <input type="hidden" id="category-update-id">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="category-title">Title <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="category-title" type="text" placeholder="Title" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="category-slug">Slug <span class="text-danger">*</span></label>
                                <div class="form-group position-relative">
                                    <input id="category-slug" type="text" placeholder="Slug" class="form-control"
                                        required>
                                    <div id="slug-feedback" class="slug-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="category-status" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select id="category-status" class="selectpicker w-100 form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-1">
                                <label for="category-sort-order">Sort Order</label>
                                <div class="form-group">
                                    <input id="category-sort-order" type="number" placeholder="Sort Order"
                                        class="form-control" value="0">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="category-meta-title">Meta Title</label>
                                <div class="form-group">
                                    <input id="category-meta-title" type="text" placeholder="Meta Title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="category-meta-description">Meta Description</label>
                                <div class="form-group">
                                    <textarea id="category-meta-description" rows="3" placeholder="Meta Description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-category-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        let pagePlaceholderValue = "Blogs categories";
        $(document).ready(function() {
            $(document).on('click', '.add-category', function() {
                $('#category-form')[0].reset();
                $('#category-update-id').val('');
                $('#category-modal .modal-title').html('Add New Category');
                $('#slug-feedback').html('');
                $("#category-modal").modal('show');
            });

            $(document).on('click', '.update-category', function() {
                let $this = $(this);
                let id = $this.data('id');
                let title = $this.data('title');
                let slug = $this.data('slug');
                let meta_title = $this.data('meta-title');
                let meta_description = $this.data('meta-description');
                let sort_order = $this.data('sort-order');
                let status = $this.data('status');

                $('#category-update-id').val(id);
                $('#category-title').val(title);
                $('#category-slug').val(slug);
                $('#category-meta-title').val(meta_title);
                $('#category-meta-description').val(meta_description);
                $('#category-sort-order').val(sort_order);
                $('#category-status').val(status);
                $('#category-modal .modal-title').html('Update Category');
                $('#slug-feedback').html('');
                $("#category-modal").modal('show');
            });

            // Auto-generate slug and real-time validation
            $('#category-title').on('input', function() {
                if ($('#category-update-id').val() === '') {
                    let title = $(this).val();
                    let slug = title.toLowerCase()
                        .replace(/&/g, 'and')
                        .replace(/[^a-z0-9 -]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                    $('#category-slug').val(slug);
                    checkSlug(slug);
                }
            });

            $('#category-slug').on('input', function() {
                let slug = $(this).val();
                checkSlug(slug);
            });

            function checkSlug(slug) {
                if (slug.length < 3) {
                    $('#slug-feedback').html('');
                    return;
                }
                let id = $('#category-update-id').val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('backendBlogCategoryCheckSlug') }}",
                    data: {
                        slug: slug,
                        id: id,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.exists) {
                            $('#slug-feedback').html(
                                '<span class="slug-error"><i class="fa-solid fa-xmark"></i> Already exists</span>'
                            );
                        } else {
                            $('#slug-feedback').html(
                                '<span class="slug-success"><i class="fa-solid fa-check"></i> Available</span>'
                            );
                        }
                    }
                });
            }

            $(document).on('click', '.update-category-status', function() {
                let id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "{{ route('backendBlogCategoryToggleStatus') }}",
                    data: {
                        id: id,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === "success") {
                            location.reload();
                        }
                    }
                });
            });

            $(document).on('click', '.btn-category-submit', function(event) {
                event.preventDefault();
                let $this = $(this);
                let title = $('#category-title').val();
                let slug = $('#category-slug').val();
                let meta_title = $('#category-meta-title').val();
                let meta_description = $('#category-meta-description').val();
                let sort_order = $('#category-sort-order').val();
                let status = $('#category-status').val();
                let id = $("#category-update-id").val();

                if (title == '' || slug == '') {
                    alert('Please fill all required fields');
                    return;
                }

                $this.html('<i class="fa-solid fa-spinner fa-spin"></i> Processing...').attr('disabled',
                    true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendBlogCategorySubmit') }}",
                    data: {
                        id: id,
                        title: title,
                        slug: slug,
                        meta_title: meta_title,
                        meta_description: meta_description,
                        sort_order: sort_order,
                        status: status,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === "success") {
                            $this.html('<i class="fa-solid fa-check"></i> Success!');
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            alert(response.message);
                            $this.html("Submit").removeAttr("disabled");
                        }
                    },
                    error: function(xhr) {
                        $this.html("Submit").removeAttr("disabled");
                        console.log(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.delete-category', function() {
                let id = $(this).data('id');
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
                            url: "{{ route('backendBlogCategoryDelete') }}",
                            data: {
                                id: id,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                location.reload();
                            }
                        });
                    }
                });
            });
        });
    </script>
@stop
