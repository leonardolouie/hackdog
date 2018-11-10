<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ant Man </title>

  <!-- Bootstrap -->
  <link href="{{asset('hackdog/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('hackdog/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('hackdog/vendors/nprogress/nprogress.css" rel="stylesheet')}}">
  <!-- iCheck -->
  <link href="{{asset('hackdog/vendors/iCheck/skins/flat/green.css" rel="stylesheet')}}">
  
  <!-- bootstrap-progressbar -->
  <link href="{{asset('hackdog/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('hackdog/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset('hackdog/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset('hackdog/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Ant Man</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset('hackdog/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{Auth::user()->firstName}} &nbsp {{Auth::user()->lastName}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />






          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="{{route('index')}}"><i class="fa fa-home"></i> Home </a>

                </li>
                <li><a href="{{route('table')}}"><i class="fa fa-table"></i> Staff</a>

                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
        @if(empty($responsesshow))
   
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Schedule</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li style="float: right;"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


                <table id="datatable" class="table table-striped table-bordered text-center">
                  <thead>
                    <tr>
                      <th></th> 
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th> 
                    </tr>
                  </thead>
                  <tr>
                    <th></th>
                  
                    @foreach($responseshow as $response)
                    <th>
                      <div class="container-fluid alert alert-success text-center responsive" style="height: 200px; width: 130px;">
                        <p style="color:green"> START </p>
                        <p>{{$from}}</p>
                         <p style="color:yellow"> FINISH </p>
                        <p>{{$to}}</p>
                        
                      </div>
                    </th>
                 
                    @endforeach
                  </tr>
                  <tbody>
                  </tbody>
                </table>
                @elseif(empty($responseshow))
                <h1>No schedule(s) found!</h1>
                @endif
              </div>


        </div>
      </div>
    </div>


  </div>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="{{asset('hackdog/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('hackdog/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('hackdog/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('hackdog/vendors/nprogress/nprogress.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('hackdog/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('hackdog/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('hackdog/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('hackdog/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('hackdog/build/js/custom.min.js')}}"></script>

</body>
</html>