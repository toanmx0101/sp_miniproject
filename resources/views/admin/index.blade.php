<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/simple-sidebar.css') }}"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="http://localhost:8000/">
                        Book Store
                    </a>
                </li>
                <li id="dash-board">
                    <a href="#">Thống kê</a>
                </li>
                <li>
                    <a href="#">Đơn hàng</a>
                </li>
                <li>
                    <a href="#">Sản phẩm</a>
                </li>
                <li>
                    <a href="#">Danh mục</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>

                <li>
                    <a href="#">Yêu cầu sách mới</a>
                </li>

                <li>
                    <a href="#">Phản hồi từ khách hàng</a>
                </li>
                <li>
                    <a href="#">Hàng giảm gía</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div >  
                          <ul class="nav nav-tabs" style="">
                            <li class="active"><a data-toggle="tab" href="#home" style="">Đơn hàng mới &nbsp;<span class="badge">5</span></a></li>
                            <li><a data-toggle="tab" href="#menu1">Đang vận chuyển &nbsp;  <span class="badge">2</span></a></li>
                            <li><a data-toggle="tab" href="#menu2">Hủy &nbsp;  <span class="badge">1</span></a></li>
                          </ul>

                          <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Age</th>
                                    <th>City</th>
                                    <th>Country</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Anna</td>
                                    <td>Pitt</td>
                                    <td>35</td>
                                    <td>New York</td>
                                    <td>USA</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                           
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>