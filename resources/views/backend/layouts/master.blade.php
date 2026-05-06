<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    @yield('title')
    <link rel="apple-touch-icon" href="{{url('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('storage')}}/{{setting('site.favicon')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/themes/semi-dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('backend/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- END: Custom CSS-->

    <style>
        .qc-invalid {
            border: 1px solid #ea5455 !important;
            transition: 300ms ease;
        }

        .qc-bg-secondary {
            background-color: #988460;
        }

        .qc-bg-white-010 {
            background-color: rgba(255 255 255 / 30%);
        }

        input[type="file"].qc-invalid + label {
            border: 1px solid #ea5455 !important;
            transition: border 300ms ease;
        }

        .gap-5 {
            gap: 5px;
        }

        .qc-resize-none {
            resize: none
        }

        .qc-dt-search {
            padding: 10px 20px !important;
            border-radius: 50px !important;
            background-color: #f3f2f7 !important;
            border: 1px solid #c4c2cd !important;
            outline: none;
            box-shadow: none;
            margin-right: 10px;
        }

        .dataTables_length {
            margin-left: 10px
        }

        /* .dataTables_length label {
            background-color: #f3f2f7;
            border: 1px solid #c4c2cd !important;
            padding: 0px 10px!important;
            border-radius: 50px;
        } */

        .dataTables_length select {
            padding: 6px 10px !important;
            border-radius: 50px !important;
            background-color: #f3f2f7 !important;
            border: 1px solid #c4c2cd !important;
            margin: 0px !important;
        }

        .dataTables_info {
            font-size: .9rem;
            margin: 10px;
        }

        .dataTables_paginate {
            margin: 10px;
            background-color: #f6f6f6;
            padding: 5px;
            border-radius: 50px;
        }

        .paginate_button.last,
        .paginate_button.first {
            background-color: transparent!important;
        }

        .paginate_button.last i,
        .paginate_button.first i {
            color: #0B223E !important;
        }

        .paginate_button {
            aspect-ratio: 1/1;
            width: 30px;
            align-content: center;
            justify-content: center;
            text-wrap: nowrap;
            font-size: .8rem;
        }

        .paginate_button:hover  {
            border-radius: 50px!important;
            background: #f3f2f7 !important;
            border-color: #f3f2f7 !important;
            color: #0B223E!important
        }

        .paginate_button.current  {
            border-radius: 50px!important;
            background: #f3f2f7 7367f0 !important;
            border-color: #0B223E !important;
            color: #0B223E!important
        }

        .paginate_button.next,
        .paginate_button.previous {
            background-color: #0B223E!important;
            border-radius: 50px!important;
            color: white !important;
        }

        .paginate_button.next i,
        .paginate_button.previous i {
            color: white !important;
        }

        .paginate_button.next:hover,
        .paginate_button.previous:hover {
            background-color: #4b4b4b!important;
        }

        .paginate_button.disabled {
            opacity: .3;
            pointer-events: none;
            background-color: #4b4b4b!important;
        }

        .qc-color-container {
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            gap: 10px;
        }

        .qc-color {
            width: 40px;
            aspect-ratio: 1/1;
            background-color: #c4c2cd;
            border-radius: 5px;
            border: 1px solid transparent;
            transition: all 300ms ease;
            position: relative;
        }

        .qc-color .check-icon {
            width: 20px;
            height: 20px;
            font-size: .8rem;
            position: absolute;
            border: 1px solid #ffffff;
            border-radius: 50px;
            top: -5px;
            right: -5px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0B223E;
            color: #c4c2cd;
            transition: all 200ms ease-in-out;
            pointer-events: none;
            transform: scale(0);
        }

        .qc-color .check-icon i {
            transform: translateY(-1px);
        }
        .qc-color.selected {
            border-color: #0B223E;
        }

        .qc-color.selected .check-icon {
            pointer-events: all;
            transform: scale(1);
        }
        .qc-cs-disabled * {
            pointer-events: none;
            user-select: none;
            touch-action: none;
            opacity: 0.6;
        }

        .qc-disabled {
            pointer-events: none;
            user-select: none;
            touch-action: none;
            opacity: 0.6;
        }
    </style>
    @yield('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    @include('backend.inc.header')
    @include('backend.inc.sidebar')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @yield('body')
    </div>
    <!-- END: Content-->

    @if($user->pin == "")
        {{-- Add Pin Modal --}}
        <div class="modal fade text-left" id="add-pin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Create Pin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="alert alert-success" style="display: none;" role="alert"><p class="alert-body alert-body-success"></p></div>
                            <div class="alert alert-warning" style="display: none;" role="alert"><p class="alert-body alert-body-warning"></p></div>
                            <label>Pin: </label>
                            <div class="form-group">
                                <input id="pin" type="password" placeholder="Pin" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-create-pin">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Add Pin Modal --}}
    @endif

    @if($user->credits < 1000 || $user->credits == "")
        {{-- Request Credit Modal --}}
        <div class="modal fade text-left" id="add-credit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Request Credit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="alert alert-success" style="display: none;" role="alert"><p class="alert-body alert-body-success"></p></div>
                            <div class="alert alert-warning" style="display: none;" role="alert"><p class="alert-body alert-body-warning"></p></div>
                            <label>Credit: </label>
                            <div class="form-group">
                                <input id="amount" type="text" placeholder="Amount" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-request-credit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Request Credit Modal --}}
    @endif

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('backend.inc.footer')


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('backend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ url('backend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ url('backend/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
        // var inactivityTimeout = 1000000000000000000;
        // var logoutTimer;

        // function resetLogoutTimer() {
        //     clearTimeout(logoutTimer);
        //     logoutTimer = setTimeout(logoutUser, inactivityTimeout);
        // }
        // function logoutUser() {
        //     window.location.href = '/dashboard/logout';
        // }

        // $(document).ready(function () {
        //     resetLogoutTimer();

        //     $(document).on("mousemove keydown click", function () {
        //         resetLogoutTimer();
        //     });
        // });
    </script>

    @yield('javascript')
    <script>
        $(document).ready(function () {
            $.fn.dataTable.ext.type.search.string = function (data) {
                return !data ? '' : data.toString().toLowerCase();
            };

            $('.common-data-table').DataTable({
                paging: true,
                pageLength: 10,
                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                pagingType: "simple_numbers",

                ordering: true,
                order: [[0, 'desc']],
                orderMulti: true,

                searching: true,
                // search: {
                //     caseInsensitive: false,
                //     regex: false,
                //     smart: true
                // },

                info: true,
                processing: true,

                language: {
                    search: "",
                    lengthMenu: "_MENU_",
                    info: "Showing _START_ to _END_ of _TOTAL_ records",
                    paginate: {
                        first: `<i class="fa-solid fa-chevrons-left"></i>`,
                        last: `<i class="fa-solid fa-chevrons-right"></i>`,
                        next: `<i class="fa-solid fa-chevron-right"></i>`,
                        previous: `<i class="fa-solid fa-chevron-left"></i>`
                    }
                },

                responsive: true,
                stateSave: true,
                autoWidth: true,

                initComplete: function () {
                    $('.dataTables_filter input').attr('placeholder', pagePlaceholderValue).addClass('qc-dt-search');;
                }
            });
        });
    </script>
</body>
<!-- END: Body-->

</html>
