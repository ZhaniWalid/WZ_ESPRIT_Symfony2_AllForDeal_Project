<?php

/* PidevAllForDealBundle:AdminNew:AllListUsersSearched.html.twig */
class __TwigTemplate_943bf7336797cc039f6e1813650e349400f73bb7c2c0f7d43e5b5134318017fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rechercheDynamique' => array($this, 'block_rechercheDynamique'),
            'listUsers' => array($this, 'block_listUsers'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Admin All For Deal | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
   <!-- Custom Theme files -->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">

      <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAcceuil2");
        echo "\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>A</b>LT</span> 
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\"><b>Admin</b><span class=\"highlight\" style=\"color:red\"> A</span>ll<span class=\"highlight\" style=\"color:red\">F</span>or<span class=\"highlight\" style=\"color:red\">D</span>eal</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
              <li class=\"dropdown messages-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li><!-- start message -->
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <h4>
                            Developers
                            <small><i class=\"fa fa-clock-o\"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class=\"dropdown notifications-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-red\"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-user text-red\"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class=\"dropdown tasks-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-flag-o\"></i>
                  <span class=\"label label-danger\">9</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Design some buttons
                            <small class=\"pull-right\">20%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Create a nice theme
                            <small class=\"pull-right\">40%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Some task I need to do
                            <small class=\"pull-right\">60%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Make beautiful transitions
                            <small class=\"pull-right\">80%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class=\"footer\">
                    <a href=\"#\">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <span class=\"hidden-xs\">rootWalid</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      rootWalid
                      <small>Admin All For Deal</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class=\"user-body\">
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Followers</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Sales</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                         ";
        // line 283
        echo "     <!--  <input type=\"text\" value=\"";
        echo "\" name=\"username_id\" hidden>
       <input type=\"text\" value=\"";
        // line 284
        echo "\" name=\"username_id\" hidden>
       <input type=\"text\" value=\"";
        // line 285
        echo "\" name=\"password_id\" hidden> !-->
                      <a href=\"";
        // line 286
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                        ";
        // line 288
        echo "                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 290
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_LoginAdmin2");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"current_page\"><a href=\"";
        // line 330
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAcceuil2");
        echo "\">Home</a></li>
            <li class=\"active treeview\">
              <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i> <span>Gestion Des Utilisateurs</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li class=\"active\"><a href=\"";
        // line 336
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAllListUser2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Utilisateurs Inscrits</a></li>
                <li><a href=\"";
        // line 337
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EditableEspaceAdminAllListUser2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Reglages Utilisateurs</a></li>
\t\t<li><a href=\"";
        // line 338
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminListeUsersBloques2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Liste Des Utilisateurs Bloques</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-files-o\"></i>
                <span>Layout Options</span>
                <span class=\"label label-primary pull-right\">4</span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/layout/top-nav.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
                <li><a href=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/layout/boxed.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
                <li><a href=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/layout/fixed.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
                <li><a href=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/layout/collapsed-sidebar.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href=\"pages/widgets.html\">
                <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"label pull-right bg-green\">new</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Charts</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/charts/chartjs.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                <li><a href=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/charts/morris.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                <li><a href=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/charts/flot.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                <li><a href=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/charts/inline.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-laptop\"></i>
                <span>Gestion des Produits</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                <li><a href=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/icons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                <li><a href=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/buttons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                <li><a href=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/sliders.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                <li><a href=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/timeline.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                <li><a href=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/modals.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Gestion des Services</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/forms/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                <li><a href=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/forms/advanced.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                <li><a href=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/forms/editors.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-table\"></i> <span>Gestion des Reclamations</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/tables/simple.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                <li><a href=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/tables/data.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/calendar.html"), "html", null, true);
        echo "\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
            <li>
              <a href=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/mailbox/mailbox.html"), "html", null, true);
        echo "\">
                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                <small class=\"label pull-right bg-yellow\">12</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-folder\"></i> <span>Gestion des Cadeaux</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/invoice.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                <li><a href=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/profile.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
                <li><a href=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/login.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                <li><a href=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/register.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                <li><a href=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/lockscreen.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                <li><a href=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/404.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                <li><a href=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/500.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                <li><a href=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/blank.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-share\"></i> <span>Gestion des Reclamations</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                    <li>
                      <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two <i class=\"fa fa-angle-left pull-right\"></i></a>
                      <ul class=\"treeview-menu\">
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                      </ul>
                    </li> 
                  </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/documentation/index.html"), "html", null, true);
        echo "\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
            <li class=\"header\">LABELS</li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <!-- Small boxes (Stat box) -->
          
         
          
          
        <!-- All List Users !-->
<div id=\"tableUsers\">
<h1 align=\"center\">Liste des Utilisateurs</h1>

  ";
        // line 494
        $this->displayBlock('rechercheDynamique', $context, $blocks);
        // line 541
        echo "        
          
  
  ";
        // line 544
        $this->displayBlock('listUsers', $context, $blocks);
        // line 606
        echo "
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->
     <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://almsaeedstudio.com"), "html", null, true);
        echo "\">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
          <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
          <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
          <!-- Home tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
            <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-user bg-yellow\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Custom Template Design
                    <span class=\"label label-danger pull-right\">70%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Update Resume
                    <span class=\"label label-success pull-right\">95%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Laravel Integration
                    <span class=\"label label-warning pull-right\">50%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Back End Framework
                    <span class=\"label label-primary pull-right\">68%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
              <h3 class=\"control-sidebar-heading\">General Settings</h3>
              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Report panel usage
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Allow mail redirect
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Expose author name in posts
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Show me as online
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Turn off notifications
                  <input type=\"checkbox\" class=\"pull-right\">
                </label>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Delete chat history
                  <a href=\"javascript::;\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class=\"control-sidebar-bg\"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 785
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 800
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 805
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 810
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 818
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>


";
    }

    // line 494
    public function block_rechercheDynamique($context, array $blocks = array())
    {
        // line 495
        echo "  <!-- search form -->
          <form action=\"";
        // line 496
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_Admin2SearchAllUsers");
        echo "\" method=\"post\" id=\"form_recherche\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"inSearching\" class=\"form-control\" id=\"userSearchWord\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
  <div class=\"loading\"></div>
    <img src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loading.gif"), "html", null, true);
        echo "\" id=\"imgLoading\">
<div id=\"resultats_recherche\">     
</div> 
  <!-- <style>
        .loading{
            image: url(../images/loading.gif);
        }
    </style> !-->
  <script>
 \$(\".imgLoading\").hide();
   \$(\"#search-btn\").click(function(){ 
    \$(\".imgLoading\").show(2000);
    \$(\".imgLoading\").hide();
});
  </script>
<!--<script>
\$(\".loading\").hide();
\$(\"#form_recherche\").submit(function(){ 
    \$(\".loading\").show();
    var motcle = \$(\"#userSearchWord\").val();
    var DATA = 'motcle=' + motcle;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 528
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
           \$('#resultats_recherche').html(data);
           \$(\".loading\").hide();
        }
    });    
    return false;
});
</script> !-->
   
  <!-- /.search form -->
  ";
    }

    // line 544
    public function block_listUsers($context, array $blocks = array())
    {
        // line 546
        echo "<div class=\"count\">
    ";
        // line 548
        echo "</div>
<table border=\"1\" align=\"center\" class=\"table table-striped\" class=\"table table-hover\" >
    <tr>
      <!--  <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Addresse</th>
        <th>Email</th>
        <th>Télèphone</th>
        <th>Statut</th>
        <th>Login</th>
        <th>Mot de Passe</th>
        <th>Sexe</th> !-->
        
        <th>";
        // line 562
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "#", "u.idUser");
        echo "</th>
        <th ";
        // line 563
        if ($this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "isSorted", array(0 => "u.nomUser"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Nom", "u.nomUser");
        echo "</th>
        <th>";
        // line 564
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Prénom", "u.prenomUser");
        echo "</th>
        <th>";
        // line 565
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Addresse", "u.adresseUser");
        echo "</th>
        <th>";
        // line 566
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Email", "u.emailUser");
        echo "</th>
        <th>";
        // line 567
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Télèphone", "u.telUser");
        echo "</th>
        <th>";
        // line 568
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Statut", "u.statutUser");
        echo "</th>
        <th>";
        // line 569
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Login", "u.loginUser");
        echo "</th>
        <th>";
        // line 570
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Mot de Passe", "u.pwdUser");
        echo "</th>
        <th>";
        // line 571
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Sexe", "u.sexeUser");
        echo "</th>
      <!--  <th>Modifier</th>
        <th>Supprimer</th> !-->
    </tr>
    ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 576
            echo "        <tr  ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
            <td>";
            // line 577
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "idUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 578
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nomUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 579
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenomUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 580
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresseUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 581
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "emailUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 582
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 583
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "statutUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 584
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "loginUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 585
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pwdUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sexeUser", array()), "html", null, true);
            echo "</td>                                                                       
           <!-- <td><a href=\"";
            // line 588
            echo "\" >Modifier</td> !-->
        
    </tr>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 592
        echo "       
</table>
   ";
        // line 595
        echo "<div class=\"navigation\">
    ";
        // line 596
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")));
        echo "
</div>
<!--<div class=\"btn-group\">   
     <button class=\"btn btn-default btn-sm\" ";
        // line 599
        echo "><i class=\"fa fa-chevron-left\"></i></button>  
</div><!-- /.btn-group -->

</div>
            
<!-- end All List Users !-->
";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:AdminNew:AllListUsersSearched.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1212 => 599,  1206 => 596,  1203 => 595,  1199 => 592,  1182 => 588,  1178 => 586,  1174 => 585,  1170 => 584,  1166 => 583,  1162 => 582,  1158 => 581,  1154 => 580,  1150 => 579,  1146 => 578,  1142 => 577,  1135 => 576,  1118 => 575,  1111 => 571,  1107 => 570,  1103 => 569,  1099 => 568,  1095 => 567,  1091 => 566,  1087 => 565,  1083 => 564,  1075 => 563,  1071 => 562,  1055 => 548,  1052 => 546,  1049 => 544,  1032 => 528,  1006 => 505,  994 => 496,  991 => 495,  988 => 494,  978 => 820,  973 => 818,  968 => 816,  963 => 814,  958 => 812,  953 => 810,  948 => 808,  943 => 806,  939 => 805,  934 => 803,  929 => 801,  925 => 800,  920 => 798,  915 => 796,  911 => 795,  906 => 793,  897 => 787,  892 => 785,  718 => 614,  708 => 606,  706 => 544,  701 => 541,  699 => 494,  661 => 459,  632 => 433,  628 => 432,  624 => 431,  620 => 430,  616 => 429,  612 => 428,  608 => 427,  604 => 426,  590 => 415,  581 => 409,  574 => 405,  570 => 404,  558 => 395,  554 => 394,  550 => 393,  538 => 384,  534 => 383,  530 => 382,  526 => 381,  522 => 380,  518 => 379,  505 => 369,  501 => 368,  497 => 367,  493 => 366,  475 => 351,  471 => 350,  467 => 349,  463 => 348,  450 => 338,  446 => 337,  442 => 336,  433 => 330,  410 => 310,  387 => 290,  383 => 288,  380 => 286,  377 => 285,  374 => 284,  370 => 283,  346 => 261,  337 => 255,  206 => 127,  191 => 115,  176 => 103,  161 => 91,  146 => 79,  115 => 51,  97 => 36,  93 => 35,  89 => 34,  83 => 31,  78 => 29,  73 => 27,  68 => 25,  63 => 23,  58 => 21,  53 => 19,  47 => 16,  42 => 14,  37 => 12,  32 => 10,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Admin All For Deal | Dashboard</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/bootstrap/css/bootstrap.min.css')}}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">*/
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">*/
/*     <!-- iCheck -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/iCheck/flat/blue.css')}}">*/
/*     <!-- Morris chart -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/morris/morris.css')}}">*/
/*     <!-- jvectormap -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">*/
/*     <!-- Date Picker -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/datepicker/datepicker3.css')}}">*/
/*     <!-- Daterange picker -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/daterangepicker/daterangepicker-bs3.css')}}">*/
/*     <!-- bootstrap wysihtml5 - text editor -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*      <script src="{{asset('js/jquery.min.js')}}"></script>*/
/*      <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>*/
/*      <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*    <!-- Custom Theme files -->*/
/*     */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body class="hold-transition skin-blue sidebar-mini">*/
/*     <div class="wrapper">*/
/* */
/*       <header class="main-header">*/
/*         <!-- Logo -->*/
/*         <a href="{{path("pidev_all_for_deal_EspaceAdminAcceuil2")}}" class="logo">*/
/*           <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*           <span class="logo-mini"><b>A</b>LT</span> */
/*           <!-- logo for regular state and mobile devices -->*/
/*           <span class="logo-lg"><b>Admin</b><span class="highlight" style="color:red"> A</span>ll<span class="highlight" style="color:red">F</span>or<span class="highlight" style="color:red">D</span>eal</span>*/
/*         </a>*/
/*         <!-- Header Navbar: style can be found in header.less -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*           <!-- Sidebar toggle button-->*/
/*           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*           </a>*/
/*           <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/*               <!-- Messages: style can be found in dropdown.less-->*/
/*               <li class="dropdown messages-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-envelope-o"></i>*/
/*                   <span class="label label-success">4</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 4 messages</li>*/
/*                   <li>*/
/*                     <!-- inner menu: contains the actual data -->*/
/*                     <ul class="menu">*/
/*                       <li><!-- start message -->*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             Support Team*/
/*                             <small><i class="fa fa-clock-o"></i> 5 mins</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li><!-- end message -->*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             AdminLTE Design Team*/
/*                             <small><i class="fa fa-clock-o"></i> 2 hours</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{{asset('Admin/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             Developers*/
/*                             <small><i class="fa fa-clock-o"></i> Today</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{{asset('Admin/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             Sales Department*/
/*                             <small><i class="fa fa-clock-o"></i> Yesterday</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{{asset('Admin/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             Reviewers*/
/*                             <small><i class="fa fa-clock-o"></i> 2 days</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li class="footer"><a href="#">See All Messages</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Notifications: style can be found in dropdown.less -->*/
/*               <li class="dropdown notifications-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-bell-o"></i>*/
/*                   <span class="label label-warning">10</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 10 notifications</li>*/
/*                   <li>*/
/*                     <!-- inner menu: contains the actual data -->*/
/*                     <ul class="menu">*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-users text-aqua"></i> 5 new members joined today*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-users text-red"></i> 5 new members joined*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-shopping-cart text-green"></i> 25 sales made*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-user text-red"></i> You changed your username*/
/*                         </a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li class="footer"><a href="#">View all</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Tasks: style can be found in dropdown.less -->*/
/*               <li class="dropdown tasks-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-flag-o"></i>*/
/*                   <span class="label label-danger">9</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 9 tasks</li>*/
/*                   <li>*/
/*                     <!-- inner menu: contains the actual data -->*/
/*                     <ul class="menu">*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Design some buttons*/
/*                             <small class="pull-right">20%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">20% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Create a nice theme*/
/*                             <small class="pull-right">40%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">40% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Some task I need to do*/
/*                             <small class="pull-right">60%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">60% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Make beautiful transitions*/
/*                             <small class="pull-right">80%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">80% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li class="footer">*/
/*                     <a href="#">View all tasks</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- User Account: style can be found in dropdown.less -->*/
/*               <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">*/
/*                   <span class="hidden-xs">rootWalid</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <!-- User image -->*/
/*                   <li class="user-header">*/
/*                     <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                     <p>*/
/*                       rootWalid*/
/*                       <small>Admin All For Deal</small>*/
/*                     </p>*/
/*                   </li>*/
/*                   <!-- Menu Body -->*/
/*                   <li class="user-body">*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Followers</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Sales</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Friends</a>*/
/*                     </div>*/
/*                   </li>*/
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-left">*/
/*                          {#% for a in admin %#}*/
/*      <!--  <input type="text" value="{#{a.idAdmin}#}" name="username_id" hidden>*/
/*        <input type="text" value="{#{a.loginAdmin}#}" name="username_id" hidden>*/
/*        <input type="text" value="{#{a.pwdAdmin}#}" name="password_id" hidden> !-->*/
/*                       <a href="{#{ path("pidev_all_for_deal_AccesAdminCompte2",{'login':a.loginAdmin,'pwd':a.pwdAdmin}) }#}" class="btn btn-default btn-flat">Profile</a>*/
/*                         {#% endfor %#}*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                       <a href="{{path("pidev_all_for_deal_LoginAdmin2")}}" class="btn btn-default btn-flat">Sign out</a>*/
/*                     </div>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Control Sidebar Toggle Button -->*/
/*               <li>*/
/*                 <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         </nav>*/
/*       </header>*/
/*       <!-- Left side column. contains the logo and sidebar -->*/
/*       <aside class="main-sidebar">*/
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/*           <!-- Sidebar user panel -->*/
/*           <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*               <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*               <p>Alexander Pierce</p>*/
/*               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*           </div>*/
/*           <!-- search form -->*/
/*           <form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*               <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </form>*/
/*           <!-- /.search form -->*/
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*                 <li class="current_page"><a href="{{path("pidev_all_for_deal_EspaceAdminAcceuil2")}}">Home</a></li>*/
/*             <li class="active treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-dashboard"></i> <span>Gestion Des Utilisateurs</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li class="active"><a href="{{path("pidev_all_for_deal_EspaceAdminAllListUser2")}}"><i class="fa fa-circle-o"></i>Utilisateurs Inscrits</a></li>*/
/*                 <li><a href="{{path("pidev_all_for_deal_EditableEspaceAdminAllListUser2")}}"><i class="fa fa-circle-o"></i>Reglages Utilisateurs</a></li>*/
/* 		<li><a href="{{path("pidev_all_for_deal_EspaceAdminListeUsersBloques2")}}"><i class="fa fa-circle-o"></i>Liste Des Utilisateurs Bloques</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-files-o"></i>*/
/*                 <span>Layout Options</span>*/
/*                 <span class="label label-primary pull-right">4</span>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{asset('Admin/pages/layout/top-nav.html')}}"><i class="fa fa-circle-o"></i> Top Navigation</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/layout/boxed.html')}}"><i class="fa fa-circle-o"></i> Boxed</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/layout/fixed.html')}}"><i class="fa fa-circle-o"></i> Fixed</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/layout/collapsed-sidebar.html')}}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li>*/
/*               <a href="pages/widgets.html">*/
/*                 <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>*/
/*               </a>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-pie-chart"></i>*/
/*                 <span>Charts</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{asset('Admin/pages/charts/chartjs.html')}}"><i class="fa fa-circle-o"></i> ChartJS</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/charts/morris.html')}}"><i class="fa fa-circle-o"></i> Morris</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/charts/flot.html')}}"><i class="fa fa-circle-o"></i> Flot</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/charts/inline.html')}}"><i class="fa fa-circle-o"></i> Inline charts</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-laptop"></i>*/
/*                 <span>Gestion des Produits</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{asset('Admin/pages/UI/general.html')}}"><i class="fa fa-circle-o"></i> General</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/UI/icons.html')}}"><i class="fa fa-circle-o"></i> Icons</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/UI/buttons.html')}}"><i class="fa fa-circle-o"></i> Buttons</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/UI/sliders.html')}}"><i class="fa fa-circle-o"></i> Sliders</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/UI/timeline.html')}}"><i class="fa fa-circle-o"></i> Timeline</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/UI/modals.html')}}"><i class="fa fa-circle-o"></i> Modals</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-edit"></i> <span>Gestion des Services</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{asset('Admin/pages/forms/general.html')}}"><i class="fa fa-circle-o"></i> General Elements</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/forms/advanced.html')}}"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/forms/editors.html')}}"><i class="fa fa-circle-o"></i> Editors</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-table"></i> <span>Gestion des Reclamations</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{asset('Admin/pages/tables/simple.html')}}"><i class="fa fa-circle-o"></i> Simple tables</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/tables/data.html')}}"><i class="fa fa-circle-o"></i> Data tables</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{asset('Admin/pages/calendar.html')}}">*/
/*                 <i class="fa fa-calendar"></i> <span>Calendar</span>*/
/*                 <small class="label pull-right bg-red">3</small>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{asset('Admin/pages/mailbox/mailbox.html')}}">*/
/*                 <i class="fa fa-envelope"></i> <span>Mailbox</span>*/
/*                 <small class="label pull-right bg-yellow">12</small>*/
/*               </a>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-folder"></i> <span>Gestion des Cadeaux</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{asset('Admin/pages/examples/invoice.html')}}"><i class="fa fa-circle-o"></i> Invoice</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/examples/profile.html')}}"><i class="fa fa-circle-o"></i> Profile</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/examples/login.html')}}"><i class="fa fa-circle-o"></i> Login</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/examples/register.html')}}"><i class="fa fa-circle-o"></i> Register</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/examples/lockscreen.html')}}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/examples/404.html')}}"><i class="fa fa-circle-o"></i> 404 Error</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/examples/500.html')}}"><i class="fa fa-circle-o"></i> 500 Error</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/examples/blank.html')}}"><i class="fa fa-circle-o"></i> Blank Page</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-share"></i> <span>Gestion des Reclamations</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*                 <li>*/
/*                   <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>*/
/*                     <li>*/
/*                       <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>*/
/*                       <ul class="treeview-menu">*/
/*                         <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                         <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                       </ul>*/
/*                     </li> */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="{{asset('Admin/documentation/index.html')}}"><i class="fa fa-book"></i> <span>Documentation</span></a></li>*/
/*             <li class="header">LABELS</li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>*/
/*           </ul>*/
/*         </section>*/
/*         <!-- /.sidebar -->*/
/*       </aside>*/
/* */
/*       <!-- Content Wrapper. Contains page content -->*/
/*       <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*           <h1>*/
/*             Dashboard*/
/*             <small>Control panel</small>*/
/*           </h1>*/
/*           <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li class="active">Dashboard</li>*/
/*           </ol>*/
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*           <!-- Small boxes (Stat box) -->*/
/*           */
/*          */
/*           */
/*           */
/*         <!-- All List Users !-->*/
/* <div id="tableUsers">*/
/* <h1 align="center">Liste des Utilisateurs</h1>*/
/* */
/*   {% block rechercheDynamique %}*/
/*   <!-- search form -->*/
/*           <form action="{{ path('pidev_all_for_deal_Admin2SearchAllUsers') }}" method="post" id="form_recherche">*/
/*             <div class="input-group">*/
/*               <input type="text" name="inSearching" class="form-control" id="userSearchWord" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </form>*/
/*   <div class="loading"></div>*/
/*     <img src="{{asset('images/loading.gif')}}" id="imgLoading">*/
/* <div id="resultats_recherche">     */
/* </div> */
/*   <!-- <style>*/
/*         .loading{*/
/*             image: url(../images/loading.gif);*/
/*         }*/
/*     </style> !-->*/
/*   <script>*/
/*  $(".imgLoading").hide();*/
/*    $("#search-btn").click(function(){ */
/*     $(".imgLoading").show(2000);*/
/*     $(".imgLoading").hide();*/
/* });*/
/*   </script>*/
/* <!--<script>*/
/* $(".loading").hide();*/
/* $("#form_recherche").submit(function(){ */
/*     $(".loading").show();*/
/*     var motcle = $("#userSearchWord").val();*/
/*     var DATA = 'motcle=' + motcle;*/
/*     $.ajax({*/
/*         type: "POST",*/
/*         url: "{#{ path('pidev_all_for_deal_Admin2SearchAllUsers')}#}",*/
/*         data: DATA,*/
/*         cache: false,*/
/*         success: function(data){*/
/*            $('#resultats_recherche').html(data);*/
/*            $(".loading").hide();*/
/*         }*/
/*     });    */
/*     return false;*/
/* });*/
/* </script> !-->*/
/*    */
/*   <!-- /.search form -->*/
/*   {% endblock %}        */
/*           */
/*   */
/*   {% block listUsers %}*/
/* {# total items count #}*/
/* <div class="count">*/
/*     {#{ u.getTotalItemCount }#}*/
/* </div>*/
/* <table border="1" align="center" class="table table-striped" class="table table-hover" >*/
/*     <tr>*/
/*       <!--  <th>#</th>*/
/*         <th>Nom</th>*/
/*         <th>Prénom</th>*/
/*         <th>Addresse</th>*/
/*         <th>Email</th>*/
/*         <th>Télèphone</th>*/
/*         <th>Statut</th>*/
/*         <th>Login</th>*/
/*         <th>Mot de Passe</th>*/
/*         <th>Sexe</th> !-->*/
/*         */
/*         <th>{{ knp_pagination_sortable(u, '#', 'u.idUser') }}</th>*/
/*         <th {% if u.isSorted('u.nomUser') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(u, 'Nom', 'u.nomUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Prénom', 'u.prenomUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Addresse', 'u.adresseUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Email', 'u.emailUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Télèphone', 'u.telUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Statut', 'u.statutUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Login', 'u.loginUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Mot de Passe', 'u.pwdUser') }}</th>*/
/*         <th>{{ knp_pagination_sortable(u, 'Sexe', 'u.sexeUser') }}</th>*/
/*       <!--  <th>Modifier</th>*/
/*         <th>Supprimer</th> !-->*/
/*     </tr>*/
/*     {% for user in u %}*/
/*         <tr  {% if loop.index is odd %}class="color"{% endif %}>*/
/*             <td>{{user.idUser}}</td>*/
/*             <td>{{user.nomUser}}</td>*/
/*             <td>{{user.prenomUser}}</td>*/
/*             <td>{{user.adresseUser}}</td>*/
/*             <td>{{user.emailUser}}</td>*/
/*             <td>{{user.telUser}}</td>*/
/*             <td>{{user.statutUser}}</td>*/
/*             <td>{{user.loginUser}}</td>*/
/*             <td>{{user.pwdUser}}</td>*/
/*             <td>{{user.sexeUser}}</td>                                                                       */
/*            <!-- <td><a href="{#{path('DeleteModele',{'id':modele.id})}}" >Supprimer</td>*/
/*             <td><a href="{{path('UpdateModele',{'id':modele.id})}#}" >Modifier</td> !-->*/
/*         */
/*     </tr>*/
/*    {% endfor %}*/
/*        */
/* </table>*/
/*    {# display navigation #}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(u) }}*/
/* </div>*/
/* <!--<div class="btn-group">   */
/*      <button class="btn btn-default btn-sm" {#{ knp_pagination_render(u) }#}><i class="fa fa-chevron-left"></i></button>  */
/* </div><!-- /.btn-group -->*/
/* */
/* </div>*/
/*             */
/* <!-- end All List Users !-->*/
/* {% endblock %}*/
/* */
/*         </section><!-- /.content -->*/
/*         */
/*       </div><!-- /.content-wrapper -->*/
/*      <footer class="main-footer">*/
/*         <div class="pull-right hidden-xs">*/
/*           <b>Version</b> 2.3.0*/
/*         </div>*/
/*         <strong>Copyright &copy; 2014-2015 <a href="{{asset('http://almsaeedstudio.com')}}">Almsaeed Studio</a>.</strong> All rights reserved.*/
/*       </footer>*/
/* */
/*       <!-- Control Sidebar -->*/
/*       <aside class="control-sidebar control-sidebar-dark">*/
/*         <!-- Create the tabs -->*/
/*         <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*           <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*           <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*         </ul>*/
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*           <!-- Home tab content -->*/
/*           <div class="tab-pane" id="control-sidebar-home-tab">*/
/*             <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*             <ul class="control-sidebar-menu">*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/*                     <p>Will be 23 on April 24th</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-user bg-yellow"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/*                     <p>New phone +1(800)555-1234</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/*                     <p>nora@example.com</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/*                     <p>Execution time 5 seconds</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*             </ul><!-- /.control-sidebar-menu -->*/
/* */
/*             <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*             <ul class="control-sidebar-menu">*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Custom Template Design*/
/*                     <span class="label label-danger pull-right">70%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Update Resume*/
/*                     <span class="label label-success pull-right">95%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Laravel Integration*/
/*                     <span class="label label-warning pull-right">50%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Back End Framework*/
/*                     <span class="label label-primary pull-right">68%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*             </ul><!-- /.control-sidebar-menu -->*/
/* */
/*           </div><!-- /.tab-pane -->*/
/*           <!-- Stats tab content -->*/
/*           <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->*/
/*           <!-- Settings tab content -->*/
/*           <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*             <form method="post">*/
/*               <h3 class="control-sidebar-heading">General Settings</h3>*/
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Report panel usage*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*                 <p>*/
/*                   Some information about this general settings option*/
/*                 </p>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Allow mail redirect*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*                 <p>*/
/*                   Other sets of options are available*/
/*                 </p>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Expose author name in posts*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*                 <p>*/
/*                   Allow the user to show his name in blog posts*/
/*                 </p>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Show me as online*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Turn off notifications*/
/*                   <input type="checkbox" class="pull-right">*/
/*                 </label>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Delete chat history*/
/*                   <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*                 </label>*/
/*               </div><!-- /.form-group -->*/
/*             </form>*/
/*           </div><!-- /.tab-pane -->*/
/*         </div>*/
/*       </aside><!-- /.control-sidebar -->*/
/*       <!-- Add the sidebar's background. This div must be placed*/
/*            immediately after the control sidebar -->*/
/*       <div class="control-sidebar-bg"></div>*/
/*     </div><!-- ./wrapper -->*/
/* */
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="{{asset('Admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>*/
/*     <!-- jQuery UI 1.11.4 -->*/
/*     <script src="{{asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}"></script>*/
/*     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/*     <script>*/
/*       $.widget.bridge('uibutton', $.ui.button);*/
/*     </script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{asset('Admin/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*     <!-- Morris.js charts -->*/
/*     <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>*/
/*     <script src="{{asset('Admin/plugins/morris/morris.min.js')}}"></script>*/
/*     <!-- Sparkline -->*/
/*     <script src="{{asset('Admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>*/
/*     <!-- jvectormap -->*/
/*     <script src="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*     <script src="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <!-- jQuery Knob Chart -->*/
/*     <script src="{{asset('Admin/plugins/knob/jquery.knob.js')}}"></script>*/
/*     <!-- daterangepicker -->*/
/*     <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}"></script>*/
/*     <script src="{{asset('Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>*/
/*     <!-- datepicker -->*/
/*     <script src="{{asset('Admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>*/
/*     <!-- Bootstrap WYSIHTML5 -->*/
/*     <script src="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>*/
/*     <!-- Slimscroll -->*/
/*     <script src="{{asset('Admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('Admin/plugins/fastclick/fastclick.min.js')}}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{asset('Admin/dist/js/app.min.js')}}"></script>*/
/*     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*     <script src="{{asset('Admin/dist/js/pages/dashboard.js')}}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{asset('Admin/dist/js/demo.js')}}"></script>*/
/*   </body>*/
/* </html>*/
/* */
/* */
/* */
