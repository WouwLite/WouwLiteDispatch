<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
      <title>{{ config('app.name', 'WouwLite SD') }}</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Style Sheets -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://use.fontawesome.com/7c4a58d96f.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/dashboard') }}">{{ config('app.name', 'WouwLite SD') }}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- Create a PHP function that get's all the open tickets -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a class="text-center">
                                <strong>Laatste melding per discipline</strong>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/dispatchMedical') }}">
                                <div>
                                    <strong>Gezondheid</strong>
                                    <span class="pull-right text-muted">
                                        <em>18:15</em> <span class="label label-warning">Medical</span>
                                    </span>
                                </div>
                                <div>Rolling Strones Straat 44a, 3456AA, Nijmegen</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/dispatchFire') }}">
                                <div>
                                    <strong>Automatische BMI melding</strong>
                                    <span class="pull-right text-muted">
                                        <em>18:10</em> <span class="label label-danger">Fire</span>
                                    </span>
                                </div>
                                <div>Den Hartogstraat 11, 1234AB, Nijmegen</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/dispatchSecurity') }}">
                                <div>
                                    <strong>Bezitsaantasting</strong>
                                    <span class="pull-right text-muted">
                                        <em>17:45</em> <span class="label label-info">Security</span>
                                    </span>
                                </div>
                                <div>Akkerlaan 124, 6789ZZ, Nijmegen</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="{{ url('/dashboard') }}">
                                <strong>Overzicht meldingen...</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages --
>                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-heartbeat fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <span class="label label-default">E11</span> Patrouille aangemeld
                                    <span class="pull-right text-muted small">16:33 08-11</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <span class="label label-default">E11</span> Patrouille afgemeld
                                    <span class="pull-right text-muted small">16:18 08-11</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <span class="label label-default">E01</span> Teamleider afgemeld
                                    <span class="pull-right text-muted small">16:17 08-11</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <span class="label label-default">E02</span> Teamleider aangemeld
                                    <span class="pull-right text-muted small">16:00 08-11</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <span class="label label-default">E99</span> Centralist Stand-By
                                    <span class="pull-right text-muted small">15:00 08-11</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Bekijk log</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/home') }}">Account</a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Meldkamer</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Openstaande meldingen <span class="badge">11</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Openstaande meldingen</a>
                                </li>
                                <li>
                                    <a href="morris.html">Gesloten meldingen</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multidisciplinaire inzetten<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Kleinschalig incident</a>
                                </li>
                                <li>
                                    <a href="#">Grootschalig incident</a>
                                </li>
                                <li>
                                    <a href="#">Opschaling extern <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">GRIP 1</a>
                                        </li>
                                        <li>
                                            <a href="#">GRIP 2</a>
                                        </li>
                                        <li>
                                            <a href="#">GRIP 3</a>
                                        </li>
                                        <li>
                                            <a href="#">GRIP 4</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Logbook<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Audio Logs</a>
                                </li>
                                <li>
                                    <a href="login.html">View all tickets</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
<!-- START TEMPLATE INPUT -->
        
        <div id="page-wrapper">
            <div class="row">
                <br>
                <ol class="breadcrumb">
                  <li><a href="#">Dashboard</a></li>
                  <li class="active">Overzicht</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> @yield('title') </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-secret fa-5x" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Openstaande meldingen</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Security</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-rocket fa-5x" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Geen meldingen</div>
                                    <!-- IF statement maken om text te matchen met aantal openstaande meldingen -->
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Organisatie</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-ambulance fa-5x" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">7</div>
                                    <div>Openstaande meldingen</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Medical</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-fire-extinguisher fa-5x" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Geen meldingen</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Fire</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/raphael/raphael.min.js"></script>
    <script src="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/vendor/morrisjs/morris.min.js"></script>
    <script src="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://cdn.wouwlite.eu/smartdispatch.nl/adminTemplate/dist/js/sb-admin-2.js"></script>

</body>

</html>
