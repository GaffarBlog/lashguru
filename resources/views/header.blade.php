<!-- CSS files of the application -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/content-worker.min.css')}}" rel="stylesheet">

    @stack('css')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->

        <!--Main sidebar page -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i>-->
                </div>
                <img src="{{url('\img\Logo-contentworker.png')}}" alt="Image" />

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - User -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/manage-users') }}">
                    <i class="fas fa-user"></i>
                    <span>User Management</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
                    aria-expanded="true" aria-controls="collapseAdmin">
                    <i class="fas fa-user-shield"></i>
                    <span>Admin Pages</span>
                </a>
                <div id="collapseAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Role:</h6>
                        <a class="collapse-item" href="{{ url('/manage-urls') }}">Manage: URL´s</a>
                        <a class="collapse-item" href="{{ url('/manage-images') }}">Manage: Images</a>
                        <a class="collapse-item" href="{{ url('/manage-texts') }}">Manage: Texts</a>
                        <a class="collapse-item" href="{{ url('/manage-templates') }}">Manage: Templates</a>
                        <a class="collapse-item" href="{{ url('/manage-colors') }}">Manage: Colors</a>
                        <a class="collapse-item" href="{{ url('/manage-tasks') }}">Manage: Tasks</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwocM"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-list-alt"></i>
                    <span>Category Management</span>
                </a>
                <div id="collapseTwocM" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Role:</h6>
                        <a class="collapse-item" href="{{ url('/business-categories') }}">Business Categories</a>
                        <a class="collapse-item" href="{{ url('/cat-search-filters')}}">Image Categories</a>
                        <a class="collapse-item" href="{{ url('/cat-manage-colors') }}">Color Categories</a>
                        <a class="collapse-item" href="{{ url('cat-manage-tasks') }}">Task Categories</a>
                        <a class="collapse-item" href="{{ url('cat-manage-svg-files') }}">SVG Files Categories</a>
                        <a class="collapse-item" href="{{ url('cat-manage-social-icons') }}">Social Icon Content</a>
                        <a class="collapse-item" href="{{ url('/cat-manage-templates') }}">Template Categories</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConMang"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-list-alt"></i>
                    <span>Content Management</span>
                </a>
                <div id="collapseConMang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Role:</h6>
                        <a class="collapse-item" href="{{ url('/manage-svg-files') }}">SVG File Content</a>
                        <a class="collapse-item" href="{{ url('/manage-brand-files') }}">Brand Content</a>
                        <a class="collapse-item" href="{{ url('/manage-social-icon-files') }}">Social Icons Content</a>
                        <a class="collapse-item" href="{{ url('/manage-template-files') }}">Template Content</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-list-alt"></i>
                    <span>Text Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Role:</h6>
                        <a class="collapse-item" href="{{ url('/txt-add-text') }}">Add New Text</a>
                        <a class="collapse-item" href="{{ url('/txt-manage-text') }}">Manage Texts</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTw"
                    aria-expanded="true" aria-controls="collapseTw">
                    <i class="fas fa-crop"></i>
                    <span>ContentWorker Tasks</span>
                </a>
                <div id="collapseTw" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">ContentWorker Role:</h6>
                        <a class="collapse-item" href="{{ url('/img-download')}}">Download Images</a>
                        <a class="collapse-item" href="{{ url('#') }}">Download Images (Urgent)</a>
                        <a class="collapse-item" href="{{ url('#') }}">Crop Images (Urgent)</a>
                        <a class="collapse-item" href="{{ url('/task-cw-img-crop') }}">Crop Images (General)</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsTw"
                    aria-expanded="true" aria-controls="collapsTw">
                    <i class="fas fa-paint-brush"></i>
                    <span>Designer Tasks</span>
                </a>
                <div id="collapsTw" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Designer Role:</h6>
                        <a class="collapse-item" href="{{ url('#') }}">Create Images</a>
                        <a class="collapse-item" href="{{ url('/task-d-create-svg-files') }}">Create SVG Files</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTTw"
                    aria-expanded="true" aria-controls="collapseTTw">
                    <i class="fas fa-pencil-ruler"></i>
                    <span>WebDesigner Tasks</span>
                </a>
                <div id="collapseTTw" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">WebDesigner Role:</h6>
                        <a class="collapse-item" href="{{ url('#') }}">Create Website Templates</a>
                        <a class="collapse-item" href="{{ url('#') }}">Create Widget Templates</a>
                        <a class="collapse-item" href="{{ url('#') }}">Fix Template Issues</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collpseTw"
                    aria-expanded="true" aria-controls="collpseTw">
                    <i class="fas fa-pencil-ruler"></i>
                    <span>WebDesigner Content</span>
                </a>
                <div id="collpseTw" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">WebDesigner Role:</h6>
                        <a class="collapse-item" href="{{ url('/template-get-files') }}">Template Files</a>
                        <a class="collapse-item" href="{{ url('/template-get-color-codes') }}">Color Codes</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseo"
                    aria-expanded="true" aria-controls="collapseo">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Image Content</span>
                </a>
                <div id="collapseo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Get Content:</h6>
                        <a class="collapse-item" href="{{ url('/content-img-cropped') }}">Banners & Pictures</a>
                        <a class="collapse-item" href="{{ url('/content-img-website-elements') }}">Website Elements</a>
                        <a class="collapse-item" href="{{ url('/social-img-content') }}">Social Icon</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of addurl & downloadimg -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapesTextContD"
                    aria-expanded="true" aria-controls="collapsethr">
                    <i class="fas fa-font"></i>
                    <span>Text Content</span>
                </a>
                <div id="collapesTextContD" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Get Content:</h6>
                        <a class="collapse-item" href="{{ url('/content-txt-get-text') }}">Text Editor</a>
                        <a class="collapse-item" href="{{ url('/content-txt-get-codes') }}">Text Codes</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->

            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu of Business Pages end -->
            <!-- Nav Item - Pages Collapse Menu of management Pages end -->

            <!-- Nav Item - Pages Collapse Menu 
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="{{ url('/login')}}">Login</a>
                        <div class="collapse-divider"></div>
                        <!-- <h6 class="collapse-header">Other Pages:</h6> 
                    </div>
                </div>
            </li>

            <!-- Divider
            <hr class="sidebar-divider d-none d-md-block">-->

        </ul>
        <!-- End of Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- start language - Messages -->
                        <div class="container">
                            <div class="row ">
                                <div class="col">
                                    <select class="form-control changeLang mt-3 mb-3">
                                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''
                                            }}>English</option>
                                        <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : ''
                                            }}>German</option>
                                        {{-- <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : ''
                                            }}>Spanish</option> --}}
                                    </select>
                                </div>
                            </div>

                        </div>
</body>
@push('js')
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";
                      
                        $(".changeLang").change(function(){
                            window.location.href = url + "?lang="+ $(this).val();
                        });
                      
</script>
@endpush
<!-- start language - Messages -->

<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Test</span>
        <img class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <!-- <div class="dropdown-divider"></div> -->
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </div>
</li>

</ul>

</nav>
<!-- End of Topbar -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

</body>
<!-- End of Topbar -->