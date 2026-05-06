@extends('backend/layouts/master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .select2-selection__choice {
            padding: 5px 10px!important;
        }

        .blog-modal-image {
            width: 100px;
            height: 100px;
        }

        .blog-modal-image img {
            height: 100%;
            object-fit: cover;
        }
    </style>
@stop

@section('title')
    <title>Blogs</title>

@stop
@section('body')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-12 mb-1">
                        <button type="button" class="btn btn-primary waves-effect add-blog"><i class="fa-solid fa-plus"></i> Add</button>
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
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Infographic Post</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr id="row-{{ $blog->id }}">
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->category->title ?? 'Uncategorized' }}</td>
                                            <td>
                                                <div class="blog-modal-image infographic">
                                                    <img src="{{ url('storage') }}/{{ $blog->image }}" alt="{{ $blog->title }}" class="img-fluid">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($blog->status == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Active</div>
                                                    @elseif($blog->status == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">Not Active</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($blog->is_infographic == 1)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-success">Yes</div>
                                                    @elseif($blog->is_infographic == 0)
                                                        <div style="border-radius: 0.25rem !important;" class="px-2 badge badge-pill badge-light-danger">No</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $blog->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <div class="d-flex gap-5">
                                                    @if($blog->status == 1)
                                                        <button data-id="{{ $blog->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Deactivate" class="btn btn-dark waves-effect mb-1 update-blog-status">
                                                            <i class="fa-solid fa-ban"></i>
                                                        </button>
                                                    @else
                                                        <button data-id="{{ $blog->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Activate" class="btn btn-success waves-effect mb-1 update-blog-status">
                                                            <i class="fa-solid fa-lock"></i>
                                                        </button>
                                                    @endif
                                                    <button data-id="{{ $blog->id }}" data-title="{{ $blog->title }}" data-category-id="{{ $blog->blog_category_id }}" data-short-desc="{{ $blog->short_description }}" data-meta-description="{{ $blog->meta_description }}" data-description="{{ $blog->description }}" data-image="{{ url('storage') }}/{{ $blog->image }}" data-status="{{ $blog->status }}" data-infographic-status="{{ $blog->is_infographic }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Update" class="btn btn-warning waves-effect mb-1 update-blog">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button data-id="{{ $blog->id }}" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-danger waves-effect mb-1 delete-blog">
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
    <div class="modal fade text-left" id="add-blog-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Blog</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="job-form" enctype="multipart/form-data">
                    <input type="hidden" id="blog-update-id">
                    @csrf
                    <div class="modal-body">
                        <div class="row gap-4">
                            <div class="col-md-6">
                                <label for="blog-title">Title <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="blog-title" type="text" placeholder="Title" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="blog-image">Image <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="blog-image" type="file" placeholder="Image" class="form-control">
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="blog-short-desc">Short Description</label>
                                <div class="form-group">
                                    <input id="blog-short-desc" type="text" placeholder="Short Description" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="blog-description">Description <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="blog-description" type="text" placeholder="Description" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <label for="blog-status" class="form-label">Status <span class="text-danger">*</span></label>
                                <select id="blog-status" class="selectpicker w-100 form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="blog-infographic-status" class="form-label">Is this infographic? <span class="text-danger">*</span></label>
                                <select id="blog-infographic-status" class="selectpicker w-100 form-control">
                                    <option value="1">Yes</option>
                                    <option value="0" selected>No</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="blog-category" class="form-label">Category</label>
                                <select id="blog-category" class="selectpicker w-100 form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($category->slug == 'blogs') selected @endif>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <h4 class="h4">For SEO Only</h4>
                            </div>
                            <div class="col-md-12">
                                <label for="blog-meta-description">Meta Description <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input id="blog-meta-description" type="text" placeholder="Description" class="form-control" required>
                                    <div class="feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-blog-submit">Submit</button>
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

        let pagePlaceholderValue = "Search for blog";

        $(document).ready(function(){
            tinymce.init({
                selector: '#blog-description',
                menubar: false,
                plugins: 'lists link image table code',
                toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
                height: 700
            });

            $(document).on('click', '.add-blog', function () {
                $('#job-form')[0].reset();
                $("#add-blog-modal").modal('show');
            })

            $(document).on('click', '.update-blog', function () {
                $("#add-blog-modal").modal('show');
                $('#add-blog-modal .modal-title').html('Update Job');
                let $this = $(this);
                let blogId = $this.data('id');
                let blogTitle = $this.data('title');
                let blogShortDesc = $this.data('short-desc');
                let blogDescription = $this.data('description');
                let blogMetaDescription = $this.data('meta-description');
                let blogImage = $this.data('image');
                let blogStatus = $this.data('status');
                let blogInfographicStatus = $this.data('infographic-status');
                let blogCategoryId = $this.data('category-id');

                $('#blog-update-id').val(blogId);
                $('#blog-title').val(blogTitle);
                $('#blog-category').val(blogCategoryId);
                $('#blog-short-desc').val(blogShortDesc);
                $('#blog-meta-description').val(blogMetaDescription);
                tinymce.get('blog-description').setContent(blogDescription ?? '');
                $('#blog-status').val(blogStatus);
                $('#blog-infographic-status').val(blogInfographicStatus);
            });

            $(document).on('click', '.update-blog-status', function () {
                let blogId = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendBlogToggleStatus') }}",
                    data: {
                        id: blogId,
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

            $(document).on('click', '.btn-blog-submit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let title = $('#blog-title').val();
                let image = $('#blog-image')[0].files[0];
                let infographic_status = $('#blog-infographic-status').val();
                let short_desc = $('#blog-short-desc').val();
                let meta_description = $('#blog-meta-description').val();
                let description = tinymce.get('blog-description').getContent();
                let status = $('#blog-status').val();
                let category_id = $('#blog-category').val();

                let formData = new FormData();
                formData.append("title", title);
                formData.append("category_id", category_id);
                formData.append("image", image);
                formData.append("infographic_status", infographic_status);
                formData.append("short_desc", short_desc);
                formData.append("meta_description", meta_description);
                formData.append("description", description);
                formData.append("status", status);
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                let blogId = $("#blog-update-id").val();
                if (blogId !== "") {
                    formData.append("id", blogId);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('backendBlogSubmit') }}",
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

            $(document).on('click', '.delete-blog', function () {
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
                            url: "{{ route('backendBlogDelete') }}",
                            data: {
                                id: jobId,
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
