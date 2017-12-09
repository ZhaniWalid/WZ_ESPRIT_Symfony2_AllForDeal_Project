<?php

/* PidevAllForDealBundle:AdminNew:AdminSpace.html.twig */
class __TwigTemplate_58989b0d8902d070b39e003ae475b033a49064ad38a1b902b43b7a5759f48e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        // line 45
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
             <!-- <li class=\"dropdown messages-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
             <!--   <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <ul class=\"menu\">
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 121
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
              </li> !-->
             
             
              <!-- Notifications: style can be found in dropdown.less -->
           <!--   <li class=\"dropdown notifications-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                  
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
              </li> !-->
           
           
              <!-- Tasks: style can be found in dropdown.less -->
           <!--   <li class=\"dropdown tasks-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-flag-o\"></i>
                  <span class=\"label label-danger\">9</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 9 tasks</li>
                  <li>
                    <ul class=\"menu\">
                      <li>
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
                      </li>
                      <li>
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
                      </li>
                      <li>
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
                      </li>
                      <li>
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
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\">
                    <a href=\"#\">View all tasks</a>
                  </li>
                </ul>
              </li> !-->
           
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/walid.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <span class=\"hidden-xs\">rootWalid</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/walid.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      rootWalid
                      <small>Admin All For Deal</small>
                    </p>
                  </li>
                  
                  <!-- Menu Body -->
                 <!-- <li class=\"user-body\">
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Followers</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Sales</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Friends</a>
                    </div>
                  </li>!-->
                 
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                 <a href=\"";
        // line 282
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_AccesAdminCompteTest2");
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>                  
                         ";
        // line 289
        echo "                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 291
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_LogoutAdmin2");
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
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
              <p>rootWalid</p>
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div> 
          <!-- search form -->
          
          <!--<form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>!-->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"current_page\"><a href=\"";
        // line 333
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAcceuil2");
        echo "\">Home</a></li>
            <li class=\"disabled\">
              <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i> <span>Gestion Des Utilisateurs</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li class=\"active\"><a href=\"";
        // line 339
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAllListUser2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Utilisateurs Inscrits</a></li>
                <li><a href=\"";
        // line 340
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EditableEspaceAdminAllListUser2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Reglages Utilisateurs</a></li>
\t\t<li><a href=\"";
        // line 341
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminListeUsersBloques2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Liste Des Utilisateurs Bloques</a></li>
              </ul>
            </li>
            
          <!--  <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-files-o\"></i>
                <span>Layout Options</span>
                <span class=\"label label-primary pull-right\">4</span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 355
        echo "\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
              </ul>
            </li> !-->
            
           <!-- <li>
              <a href=\"pages/widgets.html\">
                <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"label pull-right bg-green\">new</small>
              </a>
            </li> !-->
            
           <!-- <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Charts</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 375
        echo "\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li> !-->
            
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-laptop\"></i>
                <span>Gestion des Produits</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                <li><a href=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/icons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                <li><a href=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/buttons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                <li><a href=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/sliders.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                <li><a href=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/timeline.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                <li><a href=\"";
        // line 391
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
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/forms/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                <li><a href=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/forms/advanced.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                <li><a href=\"";
        // line 403
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
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/tables/simple.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                <li><a href=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/tables/data.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
              </ul>
            </li>
            
          <!--  <li>
              <a href=\"";
        // line 419
        echo "\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li> !-->
            
            <!--<li>
              <a href=\"";
        // line 426
        echo "\">
                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                <small class=\"label pull-right bg-yellow\">12</small>
              </a>
            </li>!-->
            
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-folder\"></i> <span>Gestion des Cadeaux</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/invoice.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                <li><a href=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/profile.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
                <li><a href=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/login.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                <li><a href=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/register.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                <li><a href=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/lockscreen.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                <li><a href=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/404.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                <li><a href=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/500.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                <li><a href=\"";
        // line 445
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
            
            <!--<li><a href=\"";
        // line 472
        echo "\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
            <li class=\"header\">LABELS</li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>!-->
            
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
          <div class=\"row\">
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                  <h3>150</h3>
                  <p>New Orders</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-bag\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-green\">
                <div class=\"inner\">
                  <h3>53<sup style=\"font-size: 20px\">%</sup></h3>
                  <p>Bounce Rate</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-stats-bars\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                  <h3>44</h3>
                  <p>User Registrations</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-red\">
                <div class=\"inner\">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-pie-graph\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class=\"row\">
            <!-- Left col -->
            <section class=\"col-lg-7 connectedSortable\">
              <!-- Custom tabs (Charts with tabs)-->
              <div class=\"nav-tabs-custom\">
                <!-- Tabs within a box -->
                <ul class=\"nav nav-tabs pull-right\">
                  <li class=\"active\"><a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a></li>
                  <li><a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a></li>
                  <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Sales</li>
                </ul>
                <div class=\"tab-content no-padding\">
                  <!-- Morris chart - Sales -->
                  <div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
                  <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
                </div>
              </div><!-- /.nav-tabs-custom -->

              <!-- Chat box -->
              
             <!-- <div class=\"box box-success\">
                <div class=\"box-header\">
                  <i class=\"fa fa-comments-o\"></i>
                  <h3 class=\"box-title\">Chat</h3>
                  <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                    <div class=\"btn-group\" data-toggle=\"btn-toggle\" >
                      <button type=\"button\" class=\"btn btn-default btn-sm active\"><i class=\"fa fa-square text-green\"></i></button>
                      <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-square text-red\"></i></button>
                    </div>
                  </div>
                </div>
                <div class=\"box-body chat\" id=\"chat-box\">
                 
                  <div class=\"item\">
                    <img src=\"";
        // line 624
        echo "\" alt=\"user image\" class=\"offline\">
                    <p class=\"message\">
                      <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:30</small>
                        Susan Doe
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                  </div>
                </div>
                <div class=\"box-footer\">
                  <div class=\"input-group\">
                    <input class=\"form-control\" placeholder=\"Type message...\">
                    <div class=\"input-group-btn\">
                      <button class=\"btn btn-success\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                  </div>
                </div>
              </div> !--> 
             <!-- /.box (chat box) -->

              <!-- TO DO List -->
           <!--   <div class=\"box box-primary\">
                <div class=\"box-header\">
                  <i class=\"ion ion-clipboard\"></i>
                  <h3 class=\"box-title\">To Do List</h3>
                  <div class=\"box-tools pull-right\">
                    <ul class=\"pagination pagination-sm inline\">
                      <li><a href=\"#\">&laquo;</a></li>
                      <li><a href=\"#\">1</a></li>
                      <li><a href=\"#\">2</a></li>
                      <li><a href=\"#\">3</a></li>
                      <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <div class=\"box-body\">
                  <ul class=\"todo-list\">
                    <li>
                     
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      
                      <span class=\"text\">Design a nice theme</span>
                     
                      <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                      
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Make the theme responsive</span>
                      <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Let theme shine like a star</span>
                      <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Let theme shine like a star</span>
                      <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Check your messages and notifications</span>
                      <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Let theme shine like a star</span>
                      <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class=\"box-footer clearfix no-border\">
                  <button class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
                </div>
              </div>!-->
              
              <!-- /.box -->

              <!-- quick email widget -->
           <!--   <div class=\"box box-info\">
                <div class=\"box-header\">
                  <i class=\"fa fa-envelope\"></i>
                  <h3 class=\"box-title\">Quick Email</h3>
                 
                  <div class=\"pull-right box-tools\">
                    <button class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body\">
                  <form action=\"#\" method=\"post\">
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\">
                    </div>
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\">
                    </div>
                    <div>
                      <textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
                    </div>
                  </form>
                </div>
                <div class=\"box-footer clearfix\">
                  <button class=\"pull-right btn btn-default\" id=\"sendEmail\">Send <i class=\"fa fa-arrow-circle-right\"></i></button>
                </div>
              </div> !-->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class=\"col-lg-5 connectedSortable\">

              <!-- Map box -->
              <div class=\"box box-solid bg-light-blue-gradient\">
                <div class=\"box-header\">
                  <!-- tools box -->
                  <div class=\"pull-right box-tools\">
                    <button class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\" title=\"Date range\"><i class=\"fa fa-calendar\"></i></button>
                    <button class=\"btn btn-primary btn-sm pull-right\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\"><i class=\"fa fa-minus\"></i></button>
                  </div><!-- /. tools -->

                  <i class=\"fa fa-map-marker\"></i>
                  <h3 class=\"box-title\">
                    Visitors
                  </h3>
                </div>
                <div class=\"box-body\">
                  <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                </div><!-- /.box-body-->
                <div class=\"box-footer no-border\">
                  <div class=\"row\">
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <div id=\"sparkline-1\"></div>
                      <div class=\"knob-label\">Visitors</div>
                    </div><!-- ./col -->
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <div id=\"sparkline-2\"></div>
                      <div class=\"knob-label\">Online</div>
                    </div><!-- ./col -->
                    <div class=\"col-xs-4 text-center\">
                      <div id=\"sparkline-3\"></div>
                      <div class=\"knob-label\">Exists</div>
                    </div><!-- ./col -->
                  </div><!-- /.row -->
                </div>
              </div>
              <!-- /.box -->

              <!-- solid sales graph -->
           <!--   <div class=\"box box-solid bg-teal-gradient\">
                <div class=\"box-header\">
                  <i class=\"fa fa-th\"></i>
                  <h3 class=\"box-title\">Sales Graph</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn bg-teal btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn bg-teal btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body border-radius-none\">
                  <div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>
                </div>
                <div class=\"box-footer no-border\">
                  <div class=\"row\">
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                      <div class=\"knob-label\">Mail-Orders</div>
                    </div>
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                      <div class=\"knob-label\">Online</div>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                      <div class=\"knob-label\">In-Store</div>
                    </div>
                  </div>
                </div>
              </div>!-->
              <!-- /.box -->

              <!-- Calendar -->
            <!--  <div class=\"box box-solid bg-green-gradient\">
                <div class=\"box-header\">
                  <i class=\"fa fa-calendar\"></i>
                  <h3 class=\"box-title\">Calendar</h3>
                  <div class=\"pull-left box-tools\">
                    <div class=\"btn-group\">
                      <button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></button>
                      <ul class=\"dropdown-menu pull-left\" role=\"menu\">
                        <li><a href=\"#\">Add new event</a></li>
                        <li><a href=\"#\">Clear events</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">View calendar</a></li>
                      </ul>
                    </div>
                    <button class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body no-padding\">
                  <div id=\"calendar\" style=\"width: 100%\"></div>
                </div>
                <div class=\"box-footer text-black\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #1</span>
                        <small class=\"pull-right\">90%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                      </div>

                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #2</span>
                        <small class=\"pull-right\">70%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #3</span>
                        <small class=\"pull-right\">60%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                      </div>

                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #4</span>
                        <small class=\"pull-right\">40%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>!-->
              <!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
          <b>Version</b> 2.3.0
        </div>
        <strong> Copyright 2016 All For Deal </strong> All rights reserved.
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
        // line 1099
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 1101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 1107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 1109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 1112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 1114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 1117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 1122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 1128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 1130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:AdminNew:AdminSpace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1246 => 1134,  1241 => 1132,  1236 => 1130,  1231 => 1128,  1226 => 1126,  1221 => 1124,  1216 => 1122,  1211 => 1120,  1207 => 1119,  1202 => 1117,  1197 => 1115,  1193 => 1114,  1188 => 1112,  1183 => 1110,  1179 => 1109,  1174 => 1107,  1165 => 1101,  1160 => 1099,  683 => 624,  564 => 472,  534 => 445,  530 => 444,  526 => 443,  522 => 442,  518 => 441,  514 => 440,  510 => 439,  506 => 438,  492 => 426,  483 => 419,  475 => 414,  471 => 413,  458 => 403,  454 => 402,  450 => 401,  437 => 391,  433 => 390,  429 => 389,  425 => 388,  421 => 387,  417 => 386,  404 => 375,  385 => 355,  371 => 341,  367 => 340,  363 => 339,  354 => 333,  329 => 311,  306 => 291,  302 => 289,  298 => 282,  272 => 259,  263 => 253,  129 => 121,  98 => 45,  81 => 31,  76 => 29,  71 => 27,  66 => 25,  61 => 23,  56 => 21,  51 => 19,  45 => 16,  40 => 14,  35 => 12,  30 => 10,  19 => 1,);
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
/*                 */
/*               <!-- Messages: style can be found in dropdown.less-->*/
/*              <!-- <li class="dropdown messages-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-envelope-o"></i>*/
/*                   <span class="label label-success">4</span>*/
/*                 </a>*/
/*              <!--   <ul class="dropdown-menu">*/
/*                   <li class="header">You have 4 messages</li>*/
/*                   <li>*/
/*                     <ul class="menu">*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{#{asset('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             Support Team*/
/*                             <small><i class="fa fa-clock-o"></i> 5 mins</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li>*/
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
/*                             <img src="{{asset('Admin/dist/img/user4-128x128.jpg')}#}" class="img-circle" alt="User Image">*/
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
/*                 </ul> */
/*               </li> !-->*/
/*              */
/*              */
/*               <!-- Notifications: style can be found in dropdown.less -->*/
/*            <!--   <li class="dropdown notifications-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-bell-o"></i>*/
/*                   <span class="label label-warning">10</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 10 notifications</li>*/
/*                   <li>*/
/*                   */
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
/*               </li> !-->*/
/*            */
/*            */
/*               <!-- Tasks: style can be found in dropdown.less -->*/
/*            <!--   <li class="dropdown tasks-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-flag-o"></i>*/
/*                   <span class="label label-danger">9</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 9 tasks</li>*/
/*                   <li>*/
/*                     <ul class="menu">*/
/*                       <li>*/
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
/*                       </li>*/
/*                       <li>*/
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
/*                       </li>*/
/*                       <li>*/
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
/*                       </li>*/
/*                       <li>*/
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
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li class="footer">*/
/*                     <a href="#">View all tasks</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li> !-->*/
/*            */
/*               <!-- User Account: style can be found in dropdown.less -->*/
/*               <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <img src="{{asset('Admin/dist/img/walid.jpg')}}" class="user-image" alt="User Image">*/
/*                   <span class="hidden-xs">rootWalid</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <!-- User image -->*/
/*                   <li class="user-header">*/
/*                     <img src="{{asset('Admin/dist/img/walid.jpg')}}" class="img-circle" alt="User Image">*/
/*                     <p>*/
/*                       rootWalid*/
/*                       <small>Admin All For Deal</small>*/
/*                     </p>*/
/*                   </li>*/
/*                   */
/*                   <!-- Menu Body -->*/
/*                  <!-- <li class="user-body">*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Followers</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Sales</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Friends</a>*/
/*                     </div>*/
/*                   </li>!-->*/
/*                  */
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-left">*/
/*                  <a href="{{ path("pidev_all_for_deal_AccesAdminCompteTest2") }}" class="btn btn-default btn-flat">Profile</a>                  */
/*                          {#% for a in admin %}*/
/*        <input type="text" value="{{a.idAdmin}}" name="username_id" hidden>*/
/*        <input type="text" value="{{a.loginAdmin}}" name="username_id" hidden>*/
/*        <input type="text" value="{{a.pwdAdmin}}" name="password_id" hidden> */
/*                       <a href="{{ path("pidev_all_for_deal_AccesAdminCompte2",{'login':a.loginAdmin,'pwd':a.pwdAdmin}) }}" class="btn btn-default btn-flat">Profile</a>*/
/*                         {% endfor %#}*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                       <a href="{{path("pidev_all_for_deal_LogoutAdmin2")}}" class="btn btn-default btn-flat">Sign out</a>*/
/*                     </div> */
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
/*               <p>rootWalid</p>*/
/*               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*           </div> */
/*           <!-- search form -->*/
/*           */
/*           <!--<form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*               <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </form>!-->*/
/*           */
/*           <!-- /.search form -->*/
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*                 <li class="current_page"><a href="{{path("pidev_all_for_deal_EspaceAdminAcceuil2")}}">Home</a></li>*/
/*             <li class="disabled">*/
/*               <a href="#">*/
/*                 <i class="fa fa-dashboard"></i> <span>Gestion Des Utilisateurs</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li class="active"><a href="{{path("pidev_all_for_deal_EspaceAdminAllListUser2")}}"><i class="fa fa-circle-o"></i>Utilisateurs Inscrits</a></li>*/
/*                 <li><a href="{{path("pidev_all_for_deal_EditableEspaceAdminAllListUser2")}}"><i class="fa fa-circle-o"></i>Reglages Utilisateurs</a></li>*/
/* 		<li><a href="{{path("pidev_all_for_deal_EspaceAdminListeUsersBloques2")}}"><i class="fa fa-circle-o"></i>Liste Des Utilisateurs Bloques</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             */
/*           <!--  <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-files-o"></i>*/
/*                 <span>Layout Options</span>*/
/*                 <span class="label label-primary pull-right">4</span>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{#{asset('Admin/pages/layout/top-nav.html')}}"><i class="fa fa-circle-o"></i> Top Navigation</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/layout/boxed.html')}}"><i class="fa fa-circle-o"></i> Boxed</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/layout/fixed.html')}}"><i class="fa fa-circle-o"></i> Fixed</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/layout/collapsed-sidebar.html')}#}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>*/
/*               </ul>*/
/*             </li> !-->*/
/*             */
/*            <!-- <li>*/
/*               <a href="pages/widgets.html">*/
/*                 <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>*/
/*               </a>*/
/*             </li> !-->*/
/*             */
/*            <!-- <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-pie-chart"></i>*/
/*                 <span>Charts</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{#{asset('Admin/pages/charts/chartjs.html')}}"><i class="fa fa-circle-o"></i> ChartJS</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/charts/morris.html')}}"><i class="fa fa-circle-o"></i> Morris</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/charts/flot.html')}}"><i class="fa fa-circle-o"></i> Flot</a></li>*/
/*                 <li><a href="{{asset('Admin/pages/charts/inline.html')}#}"><i class="fa fa-circle-o"></i> Inline charts</a></li>*/
/*               </ul>*/
/*             </li> !-->*/
/*             */
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
/*             */
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
/*             */
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
/*             */
/*           <!--  <li>*/
/*               <a href="{#{asset('Admin/pages/calendar.html')}#}">*/
/*                 <i class="fa fa-calendar"></i> <span>Calendar</span>*/
/*                 <small class="label pull-right bg-red">3</small>*/
/*               </a>*/
/*             </li> !-->*/
/*             */
/*             <!--<li>*/
/*               <a href="{#{asset('Admin/pages/mailbox/mailbox.html')}#}">*/
/*                 <i class="fa fa-envelope"></i> <span>Mailbox</span>*/
/*                 <small class="label pull-right bg-yellow">12</small>*/
/*               </a>*/
/*             </li>!-->*/
/*             */
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
/*             */
/*             <!--<li><a href="{#{asset('Admin/documentation/index.html')}#}"><i class="fa fa-book"></i> <span>Documentation</span></a></li>*/
/*             <li class="header">LABELS</li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>!-->*/
/*             */
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
/*           <div class="row">*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-aqua">*/
/*                 <div class="inner">*/
/*                   <h3>150</h3>*/
/*                   <p>New Orders</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-bag"></i>*/
/*                 </div>*/
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-green">*/
/*                 <div class="inner">*/
/*                   <h3>53<sup style="font-size: 20px">%</sup></h3>*/
/*                   <p>Bounce Rate</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-stats-bars"></i>*/
/*                 </div>*/
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-yellow">*/
/*                 <div class="inner">*/
/*                   <h3>44</h3>*/
/*                   <p>User Registrations</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-person-add"></i>*/
/*                 </div>*/
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-red">*/
/*                 <div class="inner">*/
/*                   <h3>65</h3>*/
/*                   <p>Unique Visitors</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-pie-graph"></i>*/
/*                 </div>*/
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*           </div><!-- /.row -->*/
/*           <!-- Main row -->*/
/*           <div class="row">*/
/*             <!-- Left col -->*/
/*             <section class="col-lg-7 connectedSortable">*/
/*               <!-- Custom tabs (Charts with tabs)-->*/
/*               <div class="nav-tabs-custom">*/
/*                 <!-- Tabs within a box -->*/
/*                 <ul class="nav nav-tabs pull-right">*/
/*                   <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>*/
/*                   <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>*/
/*                   <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>*/
/*                 </ul>*/
/*                 <div class="tab-content no-padding">*/
/*                   <!-- Morris chart - Sales -->*/
/*                   <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>*/
/*                   <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>*/
/*                 </div>*/
/*               </div><!-- /.nav-tabs-custom -->*/
/* */
/*               <!-- Chat box -->*/
/*               */
/*              <!-- <div class="box box-success">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-comments-o"></i>*/
/*                   <h3 class="box-title">Chat</h3>*/
/*                   <div class="box-tools pull-right" data-toggle="tooltip" title="Status">*/
/*                     <div class="btn-group" data-toggle="btn-toggle" >*/
/*                       <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>*/
/*                       <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body chat" id="chat-box">*/
/*                  */
/*                   <div class="item">*/
/*                     <img src="{#{asset('Admin/dist/img/user4-128x128.jpg')}}" alt="user image" class="online">*/
/*                     <p class="message">*/
/*                       <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>*/
/*                         Mike Doe*/
/*                       </a>*/
/*                       I would like to meet you to discuss the latest news about*/
/*                       the arrival of the new theme. They say it is going to be one the*/
/*                       best themes on the market*/
/*                     </p>*/
/*                     <div class="attachment">*/
/*                       <h4>Attachments:</h4>*/
/*                       <p class="filename">*/
/*                         Theme-thumbnail-image.jpg*/
/*                       </p>*/
/*                       <div class="pull-right">*/
/*                         <button class="btn btn-primary btn-sm btn-flat">Open</button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('Admin/dist/img/user3-128x128.jpg')}}" alt="user image" class="offline">*/
/*                     <p class="message">*/
/*                       <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>*/
/*                         Alexander Pierce*/
/*                       </a>*/
/*                       I would like to meet you to discuss the latest news about*/
/*                       the arrival of the new theme. They say it is going to be one the*/
/*                       best themes on the market*/
/*                     </p>*/
/*                   </div>*/
/*              */
/*                   <div class="item">*/
/*                     <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}#}" alt="user image" class="offline">*/
/*                     <p class="message">*/
/*                       <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>*/
/*                         Susan Doe*/
/*                       </a>*/
/*                       I would like to meet you to discuss the latest news about*/
/*                       the arrival of the new theme. They say it is going to be one the*/
/*                       best themes on the market*/
/*                     </p>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-footer">*/
/*                   <div class="input-group">*/
/*                     <input class="form-control" placeholder="Type message...">*/
/*                     <div class="input-group-btn">*/
/*                       <button class="btn btn-success"><i class="fa fa-plus"></i></button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div> !--> */
/*              <!-- /.box (chat box) -->*/
/* */
/*               <!-- TO DO List -->*/
/*            <!--   <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                   <i class="ion ion-clipboard"></i>*/
/*                   <h3 class="box-title">To Do List</h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <ul class="pagination pagination-sm inline">*/
/*                       <li><a href="#">&laquo;</a></li>*/
/*                       <li><a href="#">1</a></li>*/
/*                       <li><a href="#">2</a></li>*/
/*                       <li><a href="#">3</a></li>*/
/*                       <li><a href="#">&raquo;</a></li>*/
/*                     </ul>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                   <ul class="todo-list">*/
/*                     <li>*/
/*                      */
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       */
/*                       <input type="checkbox" value="" name="">*/
/*                       */
/*                       <span class="text">Design a nice theme</span>*/
/*                      */
/*                       <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>*/
/*                       */
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Make the theme responsive</span>*/
/*                       <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Let theme shine like a star</span>*/
/*                       <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Let theme shine like a star</span>*/
/*                       <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Check your messages and notifications</span>*/
/*                       <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Let theme shine like a star</span>*/
/*                       <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="box-footer clearfix no-border">*/
/*                   <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>*/
/*                 </div>*/
/*               </div>!-->*/
/*               */
/*               <!-- /.box -->*/
/* */
/*               <!-- quick email widget -->*/
/*            <!--   <div class="box box-info">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-envelope"></i>*/
/*                   <h3 class="box-title">Quick Email</h3>*/
/*                  */
/*                   <div class="pull-right box-tools">*/
/*                     <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                   <form action="#" method="post">*/
/*                     <div class="form-group">*/
/*                       <input type="email" class="form-control" name="emailto" placeholder="Email to:">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <input type="text" class="form-control" name="subject" placeholder="Subject">*/
/*                     </div>*/
/*                     <div>*/
/*                       <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>*/
/*                     </div>*/
/*                   </form>*/
/*                 </div>*/
/*                 <div class="box-footer clearfix">*/
/*                   <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>*/
/*                 </div>*/
/*               </div> !-->*/
/* */
/*             </section><!-- /.Left col -->*/
/*             <!-- right col (We are only adding the ID to make the widgets sortable)-->*/
/*             <section class="col-lg-5 connectedSortable">*/
/* */
/*               <!-- Map box -->*/
/*               <div class="box box-solid bg-light-blue-gradient">*/
/*                 <div class="box-header">*/
/*                   <!-- tools box -->*/
/*                   <div class="pull-right box-tools">*/
/*                     <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>*/
/*                     <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>*/
/*                   </div><!-- /. tools -->*/
/* */
/*                   <i class="fa fa-map-marker"></i>*/
/*                   <h3 class="box-title">*/
/*                     Visitors*/
/*                   </h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                   <div id="world-map" style="height: 250px; width: 100%;"></div>*/
/*                 </div><!-- /.box-body-->*/
/*                 <div class="box-footer no-border">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <div id="sparkline-1"></div>*/
/*                       <div class="knob-label">Visitors</div>*/
/*                     </div><!-- ./col -->*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <div id="sparkline-2"></div>*/
/*                       <div class="knob-label">Online</div>*/
/*                     </div><!-- ./col -->*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <div id="sparkline-3"></div>*/
/*                       <div class="knob-label">Exists</div>*/
/*                     </div><!-- ./col -->*/
/*                   </div><!-- /.row -->*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.box -->*/
/* */
/*               <!-- solid sales graph -->*/
/*            <!--   <div class="box box-solid bg-teal-gradient">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-th"></i>*/
/*                   <h3 class="box-title">Sales Graph</h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body border-radius-none">*/
/*                   <div class="chart" id="line-chart" style="height: 250px;"></div>*/
/*                 </div>*/
/*                 <div class="box-footer no-border">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                       <div class="knob-label">Mail-Orders</div>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                       <div class="knob-label">Online</div>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                       <div class="knob-label">In-Store</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>!-->*/
/*               <!-- /.box -->*/
/* */
/*               <!-- Calendar -->*/
/*             <!--  <div class="box box-solid bg-green-gradient">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-calendar"></i>*/
/*                   <h3 class="box-title">Calendar</h3>*/
/*                   <div class="pull-left box-tools">*/
/*                     <div class="btn-group">*/
/*                       <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>*/
/*                       <ul class="dropdown-menu pull-left" role="menu">*/
/*                         <li><a href="#">Add new event</a></li>*/
/*                         <li><a href="#">Clear events</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">View calendar</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body no-padding">*/
/*                   <div id="calendar" style="width: 100%"></div>*/
/*                 </div>*/
/*                 <div class="box-footer text-black">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #1</span>*/
/*                         <small class="pull-right">90%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 90%;"></div>*/
/*                       </div>*/
/* */
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #2</span>*/
/*                         <small class="pull-right">70%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 70%;"></div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #3</span>*/
/*                         <small class="pull-right">60%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 60%;"></div>*/
/*                       </div>*/
/* */
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #4</span>*/
/*                         <small class="pull-right">40%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 40%;"></div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>!-->*/
/*               <!-- /.box -->*/
/* */
/*             </section><!-- right col -->*/
/*           </div><!-- /.row (main row) -->*/
/* */
/*         </section><!-- /.content -->*/
/*       </div><!-- /.content-wrapper -->*/
/*       <footer class="main-footer">*/
/*         <div class="pull-right hidden-xs">*/
/*           <b>Version</b> 2.3.0*/
/*         </div>*/
/*         <strong> Copyright 2016 All For Deal </strong> All rights reserved.*/
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
