<?php

/* PidevAllForDealBundle:AdminNew:AdminComptePerso.html.twig */
class __TwigTemplate_d3cd142bdbed0bd627c8b7f985bc3b8f555582fc16ed436ffb310ec92d451d27 extends Twig_Template
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
    <!-- Custom Theme files -->
      <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/styleInput.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
      <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!--webfont-->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
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
        // line 50
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
        // line 127
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
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/walid.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <span class=\"hidden-xs\">rootWalid</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 265
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
                         ";
        // line 289
        echo "     <!--  <input type=\"text\" value=\"";
        echo "\" name=\"username_id\" hidden>
       <input type=\"text\" value=\"";
        // line 290
        echo "\" name=\"username_id\" hidden>
       <input type=\"text\" value=\"";
        // line 291
        echo "\" name=\"password_id\" hidden> !-->
                      <!--<a href=\"";
        // line 292
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>!-->
                        ";
        // line 294
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_AccesAdminCompteTest2");
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 297
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
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>
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
        // line 340
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAcceuil2");
        echo "\">Home</a></li>
            <li class=\"disabled\">
              <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i> <span>Gestion Des Utilisateurs</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li class=\"active\"><a href=\"";
        // line 346
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAllListUser2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Utilisateurs Inscrits</a></li>
                <li><a href=\"";
        // line 347
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EditableEspaceAdminAllListUser2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Reglages Utilisateurs</a></li>
\t\t<li><a href=\"";
        // line 348
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminListeUsersBloques2");
        echo "\"><i class=\"fa fa-circle-o\"></i>Liste Des Utilisateurs Bloques</a></li>
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
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                <li><a href=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/icons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                <li><a href=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/buttons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                <li><a href=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/sliders.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                <li><a href=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/UI/timeline.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                <li><a href=\"";
        // line 365
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
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/forms/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                <li><a href=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/forms/advanced.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                <li><a href=\"";
        // line 377
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
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/tables/simple.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                <li><a href=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/tables/data.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
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
        // line 403
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
        // line 423
        echo "\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li> !-->
            
            
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-folder\"></i> <span>Gestion des Cadeaux</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/invoice.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                <li><a href=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/profile.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
                <li><a href=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/login.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                <li><a href=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/register.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                <li><a href=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/lockscreen.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                <li><a href=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/404.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                <li><a href=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/500.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                <li><a href=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/pages/examples/blank.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
              </ul>
            </li>
            
            
             <!--  <li>
              <a href=\"";
        // line 447
        echo "\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li> !-->
            
            <!--<li>
              <a href=\"";
        // line 454
        echo "\">
                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                <small class=\"label pull-right bg-yellow\">12</small>
              </a>
            </li>!-->
            
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
        // line 484
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
        <!-- profile admin !-->
 ";
        // line 513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ThisAdmin"]) ? $context["ThisAdmin"] : $this->getContext($context, "ThisAdmin")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 514
            echo "       <form name=\"row\" method=\"post\" class=\"register\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_all_for_deal_UpdateCompteAdmin2", array("id" => $this->getAttribute($context["admin"], "idAdmin", array()))), "html", null, true);
            echo "\">
        <table align=\"center\">
             <tr>
                <td hidden> <label> Id : </label> </td>   
                <td hidden> <input type=\"text\" name=\"_id\" id=\"_id\" placeholder=\"Nom\" required value=\"";
            // line 518
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "idAdmin", array()), "html", null, true);
            echo "\"  hidden/>  </td>  
            </tr>      
                
                
        <!--    <tr>
                <td> <label> Nom : </label> </td>   
                <td> <input type=\"text\" name=\"nom_id\" id=\"nom\" placeholder=\"Nom\" required value=\"";
            // line 524
            echo "\"  />  </td>  
            </tr>  !--> 
            
            <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> Nom : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"nom_id\" id=\"nom\" placeholder=\"Nom\" required value=\"";
            // line 532
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "nomAdmin", array()), "html", null, true);
            echo "\" >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-users\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
           <!-- <tr>
                <td> <label> Nom : </label> </td>
                <td>
                 <div class=\"section\">
                                   <label for=\"nom\" class=\"field prepend-icon\">
                                       <input type=\"text\" name=\"nom_id\" id=\"nom\" placeholder=\"Nom\" required value=\"";
            // line 546
            echo "\" onkeyup=\"verif_text()\">
                                    <span class=\"error\">  </span>
                                    <label for=\"nom_id\" class=\"field-icon\">
                                    <i class=\"fa fa-users\"></i>
                                    </label>  
                                  </label>
                                   <div id=\"img_nom\"></div> 
                 </div>
                </td>
        </tr>      !-->                  
          <!--  <tr>
                <td> <label> Prénom : </label> </td>
                <td> <input type=\"text\"  name=\"prnm_id\" id=\"prenom\" placeholder=\"Prénom\" value=\"";
            // line 558
            echo "\"  /> </td>
            </tr>   !-->
            
            <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> Prénom : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"prnm_id\" id=\"prenom\" placeholder=\"Prénom\" value=\"";
            // line 566
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "prnmAdmin", array()), "html", null, true);
            echo "\">
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
            
       <!--     <tr>
                <td> <label> Age : </label> </td>
                <td> <input type=\"text\" name=\"age_id\" id=\"age\" placeholder=\"Addresse\" value=\"";
            // line 578
            echo "\"  /> </td>
            </tr>  !--> 
            
            <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> Age : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"age_id\" id=\"age\" placeholder=\"Addresse\" value=\"";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "ageAdmin", array()), "html", null, true);
            echo "\">
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
            
          <!--  <tr>
                <td> <label> Sexe : </label> </td>
                <td> <input type=\"text\" name=\"getName\" id=\"getName\" value=\"";
            // line 598
            echo "\" disabled  /> </td>
            <td>             
              <select value=\"\" name=\"choixSexe\">
                <option value=\"null\">Selectionner Sexe</option>  
                <option value=\"Homme\" name=\"Homme\">Homme</option>
                <option value=\"Femmme\" name=\"Femmme\">Femmme</option>
              </select>
             </td>  
            </tr> !-->
            
          
            <tr>          
             <td> <h5><span class=\"label label-pill label-primary\"> Sexe : </span></h5> </td>   
               <td> 
                    <div class=\"section\">
                        <label for=\"name\" class=\"field prepend-icon\">
                            <select path=\"country\" id=\"country\" class=\"form-control input-sm\" name=\"choixSexe\">
                                  <option value=\"";
            // line 615
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "sexeAdmin", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "sexeAdmin", array()), "html", null, true);
            echo "</option>
                                  <option value=\"\">----------------------------</option>
                                  <option value=\"Homme\" name=\"Homme\">Homme</option>
                                  <option value=\"Femmme\" name=\"Femmme\">Femmme</option>
                            </select>
                            
                        </label>
                    </div> 
             </td>    
            </tr> 
            
            
          <!--  <tr>
                <td> <label> Email : </label> </td>
                <td> <input type=\"text\" name=\"email_id\" id=\"email\" placeholder=\"Email\" value=\"";
            // line 629
            echo "\"  /> </td>
            </tr>  !-->

            
             <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> Email : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"email_id\" id=\"email\" placeholder=\"Email\" value=\"";
            // line 638
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "emailAdmin", array()), "html", null, true);
            echo "\" >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
            
            
           <!-- <tr>
                <td> <label> Login : </label> </td>
                <td> <input type=\"text\" name=\"login_id\" id=\"login\" placeholder=\"Login\" value=\"";
            // line 651
            echo "\"  /> </td>
            </tr>!-->
            
             <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> Login : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"login_id\" id=\"login\" placeholder=\"Login\" value=\"";
            // line 659
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "loginAdmin", array()), "html", null, true);
            echo "\"  >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
            
          <!--  <tr>
                <td> <label> Password : </label> </td>
                <td> <input type=\"password\" name=\"password\" id=\"pwd\" placeholder=\"Password\" value=\"";
            // line 671
            echo "\"  /> </td>
            </tr> !-->

              <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> Password : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"password\" name=\"password\" id=\"pwd\" placeholder=\"Password\" value=\"";
            // line 679
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "pwdAdmin", array()), "html", null, true);
            echo "\" >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 690
        echo "            
       </table><br>
                <div class=\"submit\" align=\"center\"><input type=\"submit\" value=\"Modifier\" name=\"submit\" onclick=\"validation()\" class=\"btn btn-info btn-lg\"></div>   <!--onclick=\"myFunction()\"!-->                                       
        </form> 
            
<!-- end profile admin !-->

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
        // line 875
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 886
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 893
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 895
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 898
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 900
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 902
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 904
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 906
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 908
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:AdminNew:AdminComptePerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1127 => 910,  1122 => 908,  1117 => 906,  1112 => 904,  1107 => 902,  1102 => 900,  1097 => 898,  1092 => 896,  1088 => 895,  1083 => 893,  1078 => 891,  1074 => 890,  1069 => 888,  1064 => 886,  1060 => 885,  1055 => 883,  1046 => 877,  1041 => 875,  854 => 690,  837 => 679,  827 => 671,  812 => 659,  802 => 651,  786 => 638,  775 => 629,  756 => 615,  737 => 598,  722 => 586,  712 => 578,  697 => 566,  687 => 558,  673 => 546,  656 => 532,  646 => 524,  637 => 518,  629 => 514,  625 => 513,  594 => 484,  562 => 454,  553 => 447,  544 => 441,  540 => 440,  536 => 439,  532 => 438,  528 => 437,  524 => 436,  520 => 435,  516 => 434,  503 => 423,  484 => 403,  469 => 388,  465 => 387,  452 => 377,  448 => 376,  444 => 375,  431 => 365,  427 => 364,  423 => 363,  419 => 362,  415 => 361,  411 => 360,  396 => 348,  392 => 347,  388 => 346,  379 => 340,  353 => 317,  330 => 297,  323 => 294,  320 => 292,  317 => 291,  314 => 290,  310 => 289,  284 => 265,  275 => 259,  141 => 127,  109 => 50,  92 => 36,  87 => 34,  82 => 32,  77 => 30,  72 => 28,  67 => 26,  62 => 24,  56 => 21,  51 => 19,  46 => 17,  41 => 15,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Admin All For Deal | Dashboard</title>*/
/*     <!-- Custom Theme files -->*/
/*       <link href="{{asset('Admin/styleInput.css')}}" rel='stylesheet' type='text/css' />*/
/*       <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* */
/*     <!--webfont-->*/
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
/*               */
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
/*                      <!-- Menu Body -->*/
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
/*                   */
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-left">*/
/*                          {#% for a in admin %#}*/
/*      <!--  <input type="text" value="{#{a.idAdmin}#}" name="username_id" hidden>*/
/*        <input type="text" value="{#{a.loginAdmin}#}" name="username_id" hidden>*/
/*        <input type="text" value="{#{a.pwdAdmin}#}" name="password_id" hidden> !-->*/
/*                       <!--<a href="{#{ path("pidev_all_for_deal_AccesAdminCompte2",{'login':a.loginAdmin,'pwd':a.pwdAdmin}) }#}" class="btn btn-default btn-flat">Profile</a>!-->*/
/*                         {#% endfor %#}*/
/*                     <a href="{{ path("pidev_all_for_deal_AccesAdminCompteTest2") }}" class="btn btn-default btn-flat">Profile</a>*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                       <a href="{{path("pidev_all_for_deal_LogoutAdmin2")}}" class="btn btn-default btn-flat">Sign out</a>*/
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
/*             */
/*           <!-- search form -->*/
/*           */
/*         <!--<form action="#" method="get" class="sidebar-form">*/
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
/*             */
/*               <li class="treeview">*/
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
/*             */
/*            <!--  <li class="treeview">*/
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
/*             */
/*             */
/*              <!--  <li>*/
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
/*                */
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
/*         <!-- profile admin !-->*/
/*  {% for admin in ThisAdmin %}*/
/*        <form name="row" method="post" class="register" action="{{ path("pidev_all_for_deal_UpdateCompteAdmin2",{'id':admin.idAdmin}) }}">*/
/*         <table align="center">*/
/*              <tr>*/
/*                 <td hidden> <label> Id : </label> </td>   */
/*                 <td hidden> <input type="text" name="_id" id="_id" placeholder="Nom" required value="{{admin.idAdmin}}"  hidden/>  </td>  */
/*             </tr>      */
/*                 */
/*                 */
/*         <!--    <tr>*/
/*                 <td> <label> Nom : </label> </td>   */
/*                 <td> <input type="text" name="nom_id" id="nom" placeholder="Nom" required value="{#{admin.nomAdmin}#}"  />  </td>  */
/*             </tr>  !--> */
/*             */
/*             <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> Nom : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="nom_id" id="nom" placeholder="Nom" required value="{{admin.nomAdmin}}" >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-users"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*            <!-- <tr>*/
/*                 <td> <label> Nom : </label> </td>*/
/*                 <td>*/
/*                  <div class="section">*/
/*                                    <label for="nom" class="field prepend-icon">*/
/*                                        <input type="text" name="nom_id" id="nom" placeholder="Nom" required value="{#{u.nomUser}#}" onkeyup="verif_text()">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="nom_id" class="field-icon">*/
/*                                     <i class="fa fa-users"></i>*/
/*                                     </label>  */
/*                                   </label>*/
/*                                    <div id="img_nom"></div> */
/*                  </div>*/
/*                 </td>*/
/*         </tr>      !-->                  */
/*           <!--  <tr>*/
/*                 <td> <label> Prénom : </label> </td>*/
/*                 <td> <input type="text"  name="prnm_id" id="prenom" placeholder="Prénom" value="{#{admin.prnmAdmin}#}"  /> </td>*/
/*             </tr>   !-->*/
/*             */
/*             <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> Prénom : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="prnm_id" id="prenom" placeholder="Prénom" value="{{admin.prnmAdmin}}">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*             */
/*        <!--     <tr>*/
/*                 <td> <label> Age : </label> </td>*/
/*                 <td> <input type="text" name="age_id" id="age" placeholder="Addresse" value="{#{admin.ageAdmin}#}"  /> </td>*/
/*             </tr>  !--> */
/*             */
/*             <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> Age : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="age_id" id="age" placeholder="Addresse" value="{{admin.ageAdmin}}">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*             */
/*           <!--  <tr>*/
/*                 <td> <label> Sexe : </label> </td>*/
/*                 <td> <input type="text" name="getName" id="getName" value="{#{admin.sexeAdmin}#}" disabled  /> </td>*/
/*             <td>             */
/*               <select value="" name="choixSexe">*/
/*                 <option value="null">Selectionner Sexe</option>  */
/*                 <option value="Homme" name="Homme">Homme</option>*/
/*                 <option value="Femmme" name="Femmme">Femmme</option>*/
/*               </select>*/
/*              </td>  */
/*             </tr> !-->*/
/*             */
/*           */
/*             <tr>          */
/*              <td> <h5><span class="label label-pill label-primary"> Sexe : </span></h5> </td>   */
/*                <td> */
/*                     <div class="section">*/
/*                         <label for="name" class="field prepend-icon">*/
/*                             <select path="country" id="country" class="form-control input-sm" name="choixSexe">*/
/*                                   <option value="{{admin.sexeAdmin}}">{{admin.sexeAdmin}}</option>*/
/*                                   <option value="">----------------------------</option>*/
/*                                   <option value="Homme" name="Homme">Homme</option>*/
/*                                   <option value="Femmme" name="Femmme">Femmme</option>*/
/*                             </select>*/
/*                             */
/*                         </label>*/
/*                     </div> */
/*              </td>    */
/*             </tr> */
/*             */
/*             */
/*           <!--  <tr>*/
/*                 <td> <label> Email : </label> </td>*/
/*                 <td> <input type="text" name="email_id" id="email" placeholder="Email" value="{#{admin.emailAdmin}#}"  /> </td>*/
/*             </tr>  !-->*/
/* */
/*             */
/*              <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> Email : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="email_id" id="email" placeholder="Email" value="{{admin.emailAdmin}}" >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*             */
/*             */
/*            <!-- <tr>*/
/*                 <td> <label> Login : </label> </td>*/
/*                 <td> <input type="text" name="login_id" id="login" placeholder="Login" value="{#{admin.loginAdmin}#}"  /> </td>*/
/*             </tr>!-->*/
/*             */
/*              <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> Login : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="login_id" id="login" placeholder="Login" value="{{admin.loginAdmin}}"  >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*             */
/*           <!--  <tr>*/
/*                 <td> <label> Password : </label> </td>*/
/*                 <td> <input type="password" name="password" id="pwd" placeholder="Password" value="{#{admin.pwdAdmin}#}"  /> </td>*/
/*             </tr> !-->*/
/* */
/*               <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> Password : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="password" name="password" id="pwd" placeholder="Password" value="{{admin.pwdAdmin}}" >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*             */
/*             {% endfor %}*/
/*             */
/*        </table><br>*/
/*                 <div class="submit" align="center"><input type="submit" value="Modifier" name="submit" onclick="validation()" class="btn btn-info btn-lg"></div>   <!--onclick="myFunction()"!-->                                       */
/*         </form> */
/*             */
/* <!-- end profile admin !-->*/
/* */
/*         </section><!-- /.content -->*/
/*         */
/*       </div><!-- /.content-wrapper -->*/
/*      <footer class="main-footer">*/
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
