<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/public/client/assets/images/logo_dark.png">
    <title>PEACOCK - Nhom 9</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?= base_url() ?>/public/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?= base_url() ?>/public/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/public/admin/crm/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?= base_url() ?>/public/admin/crm/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- more CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/admin/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/admin/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/admin/crm/dist/css/duongCustomStyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/node_modules/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/admin/crm/dist/css/duongCustomStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img style="height: 70px; margin: 0 auto;" src="<?= base_url() ?>/public/client/assets/images/thiet-ke-logo-thoi-trang-08.jpg" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img style="height: 70px;" src="<?= base_url() ?>/public/client/assets/images/thiet-ke-logo-thoi-trang-08.jpg" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <!-- <img src="<?= base_url() ?>/public/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo text -->
                            <!-- <img src="<?= base_url() ?>/public/admin/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> -->
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Đơn hàng</h5> <span class="mail-desc">Đơn hàng mới</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Đơn hàng</h5> <span class="mail-desc">Đơn hàng mới</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Đơn hàng</h5> <span class="mail-desc">Đơn hàng mới</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>

                                            <!-- Message -->

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <?php session_start(); ?>
                        <div><img src="<?php if ($_SESSION['user']['image'][0] == 'h') {
                                            echo $_SESSION['user']['image'];
                                        } else echo base_url() . $_SESSION['user']['image'] ?>" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['user']['fullname'] ?><span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="<?php echo base_url() . '/admin/profile?id=' . $_SESSION['user']['id']; ?>" class="dropdown-item"><i class="ti-user"></i> My
                                    Profile</a>
                                <!-- text-->
                                <a href="<?= base_url() ?>/admin/logout" class="dropdown-item"><i class="fas fa-power-off"></i>
                                    Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">--- MAIN MENU</li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?= base_url() ?>/admin/report" aria-expanded="false">
                                <i class="ti-receipt"></i>
                                <span class="hide-menu">Doanh thu</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?= base_url() ?>/admin/report/selling" aria-expanded="false">
                                <i class="ti-receipt"></i>
                                <span class="hide-menu">Bán chạy</span>
                            </a>
                        </li>
                            
                        </style>>
                        <li>
                            <a class="waves-effect waves-dark" href="<?= base_url() ?>/admin/report/inventory" aria-expanded="false">
                                <i class="ti-receipt"></i>
                                <span class="hide-menu">Tồn kho</span>
                            </a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?= base_url() ?>/admin/mailbox" aria-expanded="false"><i class="icon-envelope"></i><span class="hide-menu">Mailbox</span></a>

                        </li>

                        <li class="nav-small-cap">--- QUẢN LÝ</li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url() ?>/admin/admin">All Admin</a></li>
                                <li><a href="<?= base_url() ?>/admin/admin/add">Add Admin</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-docs"></i><span class="hide-menu">Products</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url() ?>/admin/product">All Product</a></li>
                                <li><a href="<?= base_url() ?>/admin/product/add">Add Product</a></li>

                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-cuttlefish"></i><span class="hide-menu">Category</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url() ?>/admin/category">All Category</a></li>
                                <li><a href="<?= base_url() ?>/admin/category/add">Add Category</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">Invoice</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url() ?>/admin/invoice">All new Invoice</a></li>
                                <li><a href="<?= base_url() ?>/admin/invoice/add">Add Invoice</a></li>
                                <!-- <li><a href="#">History</a></li> -->
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">Supplier</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url() ?>/admin/supplier">All Supplier</a></li>
                                <li><a href="<?= base_url() ?>/admin/supplier/add">Add Supplier</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">Comment</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url() ?>/admin/comment">All Comment</a></li>
                                <li><a href="<?= base_url() ?>/admin/comment/add">Add comment</a></li>
                            </ul>
                        </li>
                        <!-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">About
                                    page</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Curent</a></li>
                            </ul>
                        </li> -->
                        <!-- 
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-settings"></i><span
                                    class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-data.html">Data Widgets</a></li>
                                <li><a href="widget-apps.html">Apps Widgets</a></li>
                                <li><a href="widget-charts.html">Charts Widgets</a></li>
                            </ul>
                        </li> -->



                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
               <!--  <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">category</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div> -->
                <!-- start  main content -->

                <!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
                <?= $this->renderSection('content_Admin') ?>

                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Themmes <span><i class="ti-close right-side-toggle"></i></span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2020 All Rights Reserved by Nhom 9
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url() ?>/public/admin/crm/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>/public/admin/crm/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>/public/admin/crm/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>/public/admin/crm/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>

    <!-- jQuery peity -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/peity/jquery.peity.init.js"></script>


    <!--JS import file -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/dff/dff.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/dff/test1.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();


            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>


    <!-- Js phan trang  -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/datatables.net/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/datatables.net-bs4/dataTables.responsive.min.js"></script>


    <script>
        $(function() {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });
    </script>

    <!-- js-comfirm-delete -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/sweetalert2/sweet-alert.init.js"></script>


    <!-- js-toast -->
    <script src="<?= base_url() ?>/public/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="<?= base_url() ?>/public/admin/crm/dist/js/pages/toastr.js"></script>

</body>

</html>
