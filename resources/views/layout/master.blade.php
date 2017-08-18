<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Gestions des commandes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="layout" content="main"/>

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="{{asset('js/jquery/jquery-1.8.2.min.js')}}" type="text/javascript" ></script>
    <link href="{{asset('css/customize-template.css')}}" type="text/css" media="screen, projection" rel="stylesheet" />
<!--        <script src="{{asset('js/lib/angular.js')}}" type="text/javascript" ></script>-->
<!--        <script src="{{asset('js/lib/angular-route.min.js')}}" type="text/javascript" ></script>-->
<!--    -->
<!--        <script src="{{ asset('/app/packages/dirPagination.js') }}"></script>-->
<!--        <script src="{{ asset('/app/routes.js') }}"></script>-->
<!--        <script src="{{ asset('/app/services/myServices.js') }}"></script>-->
<!--        <script src="{{ asset('/app/helper/myHelper.js') }}"></script>-->
<!--        <script src="{{ asset('/app/controllers/ProduitController.js') }}"></script>-->


    <style>
    </style>
</head>
<body ng-app="main-App">
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="dashboard.html" class="brand"><i class="icon-leaf">&nbsp; Gestions des Commandes</i></a>
            <div id="app-nav-top-bar" class="nav-collapse">
                <ul class="nav pull-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}
                            <b class="caret hidden-phone"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>

                            </li>
                            <li>
                                <a href="{{ url('/auth/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="body-container">
<div id="body-content">

<div class="body-nav body-nav-horizontal body-nav-fixed">
    <div class="container">
        <!--<ul>
            <li>
                <a href="#">
                    <i class="icon-dashboard icon-large"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-calendar icon-large"></i> Schedule
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-map-marker icon-large"></i> Map It
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-tasks icon-large"></i> Widgets
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-cogs icon-large"></i> Settings
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-list-alt icon-large"></i> Forms
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-bar-chart icon-large"></i> Charts
                </a>
            </li>
        </ul>-->
    </div>
</div>


<section class="nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>@yield('titre')
                    </h3>
                </header>
            </div>
            <div class="span9">
                <ul class="nav nav-pills">
                    <li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page container">
<div class="row">
<div class="span4">
    <div class="blockoff-right">
        <ul id="person-list" class="nav nav-list">
            <li class="nav-header">MENU</li>
            <li id="menu_produit">
                <a  href="{{route('produit.index')}}">
                    <i class="icon-chevron-right pull-right"></i>
                    <b>Produit</b>
                </a>
            </li>

            <li id="menu_client">
                <a  href="{{route('client.index')}}" >
                    <i class="icon-chevron-right pull-right"></i>
                    Client
                </a>
            </li>

            <li id="menu_commandes">
                <a  href="{{route('commandes.index')}}">
                    <i class="icon-chevron-right pull-right"></i>
                    Commande
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="span12">

   @yield('content')
   <!-- <ng-view></ng-view>-->
    <script type="text/javascript">
        var active = "<?php echo $titre; ?>";
    </script>
</div>
</section>


</div>
</div>

<div id="spinner" class="spinner" style="display:none;">
    Loading&hellip;
</div>

<footer class="application-footer">
    <div class="container">
        <p>Application Footer</p>
        <div class="disclaimer">
            <p>This is an example disclaimer. All right reserved.</p>
            <p>Copyright © keaplogik 2011-2012</p>
        </div>
    </div>
</footer>

<script src="{{asset('js/bootstrap/bootstrap-transition.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-alert.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-modal.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-dropdown.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-scrollspy.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-tab.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-tooltip.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-popover.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-button.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-collapse.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-carousel.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-typeahead.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-affix.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/bootstrap/bootstrap-datepicker.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/jquery/jquery-tablesorter.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/jquery/jquery-chosen.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/jquery/virtual-tour.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/lib/jquery.localscroll.js')}}" type="text/javascript" ></script>
<script src="{{asset('js/lib/jquery.scrollTo.js')}}" type="text/javascript" ></script>
<script type="text/javascript">
    $(function() {
        $("#menu_"+active).addClass("active");
        $.localScroll();
    });
        $(function() {
            $('#sample-table').tablesorter();
            $('#datepicker').datepicker();
            $(".chosen").chosen();
        });

</script>

</body>
</html>