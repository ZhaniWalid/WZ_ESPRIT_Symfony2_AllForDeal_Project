<?php

/* PidevAllForDealBundle:Acceuil:Acceuil.html.twig */
class __TwigTemplate_46b4cefe629064673459c15cebc37e643035a514715c8c69b75394d060810764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'head' => array($this, 'block_head'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'fless' => array($this, 'block_fless'),
            'A' => array($this, 'block_A'),
            'logout' => array($this, 'block_logout'),
            'B' => array($this, 'block_B'),
            'Login' => array($this, 'block_Login'),
            'Register' => array($this, 'block_Register'),
            'tabs' => array($this, 'block_tabs'),
            'home' => array($this, 'block_home'),
            'compteUser' => array($this, 'block_compteUser'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html pmbx_context=\"22E1306B-098B-488F-8314-D1167BC14038\">
<head>";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 450
        echo "    </head>
    <body>
         
        ";
        // line 453
        $this->displayBlock('content', $context, $blocks);
        // line 1555
        echo "  <!-- popup de voir si inscription effectué avec succes ou échec --!>
              <!-- if inscri == succés !-->
    <div class=\"modal fade\" id=\"modalInscriSucces\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"  ><p style=\"font-family:fantasy;font-size: 30px;color: darkgreen \"> Succés</p></h4>
                                            </div>
                                            <div class=\"modal-body\"> 
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: green\" > Félicitation ! Inscription a été éffectué avec succés dans notre site All For Deal,veillez verifier votre boite email pour activer votre compte 
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
        </div>
        
        ";
        // line 1575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "InscriSucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1576
            echo "            <script>  
            \$(\"#modalInscriSucces\").modal('show');
        </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1580
        echo "              <!--  end if succés !-->
     <!-- if inscri == failed !-->
              <div class=\"modal fade\" id=\"modalInscriFailed\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"><p style=\"font-family:fantasy;font-size: 30px;color: darkorange \"> Echec</p></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: orange\"> Désolé ! Votre Inscription dans notre site All For Deal a été échoué
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
        ";
        // line 1600
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "InscriFailed"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1601
            echo "            <script> 
            \$(\"#modalInscriFailed\").modal('show');
        </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1605
        echo "              <!-- end of failed !-->
          <!--  end of popup vérif inscri !--> 
          
<!-- popup de voir si connection a effectué avec succes ou échec --!>
              <!-- if cnx == succés !-->
    <div class=\"modal fade\" id=\"modalLoginSucces\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"  ><p style=\"font-family:fantasy;font-size: 30px;color: darkgreen \"> Succés</p></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: green\" class=\"ktiba\"> Connection a été éffectué avec succés ! Bienvenu à All For Deal
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
        </div>
        
        ";
        // line 1628
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "LoginUserTrue"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1629
            echo "            <script>  
            \$(\"#modalLoginSucces\").modal('show');
        </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1633
        echo "              <!--  end if succés !-->
     <!-- if cnx == blocked !-->
              <div class=\"modal fade\" id=\"modalLoginBlocked\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"><p style=\"font-family:fantasy;font-size: 30px;color: darkred \"> Bloquage </p></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: red\"> Désolé ! Vous ne pouvez plus vous connectez , car vous etes bloqués par l'Administrateur du All For Deal
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
        ";
        // line 1653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "LoginUserBlocked"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1654
            echo "            <script> 
            \$(\"#modalLoginBlocked\").modal('show');
        </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1658
        echo "              <!-- end of blocked !-->
              
      <!-- if cnx == failed !-->
              <div class=\"modal fade\" id=\"modalLoginFailed\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"><p style=\"font-family:fantasy;font-size: 30px;color: darkorange \"> Echec</p></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: orange\"> Désolé ! Vous ne pouvez pas connectez , veillez vérifier vos champs et réssayer 
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
        ";
        // line 1679
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "LoginUserFailed"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1680
            echo "            <script> 
            \$(\"#modalLoginFailed\").modal('show');
        </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1684
        echo "              <!-- end of blocked !-->
          <!--  end of popup vérif connecion !-->        
  <!-- update user !-->
           <div class=\"modal fade\" id=\"modalupadteSucceed\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"><p style=\"font-family:fantasy;font-size: 30px;color: darkgreen \">Succés</p></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: green\"> Félicitation ! Mise à jour de votre compte a été éffectué avec succés
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
           </div>
    
        ";
        // line 1705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "UpdateSucceed"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1706
            echo "            <script> 
            \$(\"#modalupadteSucceed\").modal('show');
            </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1710
        echo "     
       
      <div class=\"modal fade\" id=\"modalupadteFailed\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"><p style=\"font-family:fantasy;font-size: 30px;color: darkorange \">Echec</p></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: orange\"> Echech ! Mise à jour de votre compte a été échoué
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
           </div>
    
        ";
        // line 1730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "UpdateFailed"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1731
            echo "            <script> 
            \$(\"#modalupadteFailed\").modal('show');
            </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1734
        echo "  
  <!-- update user !-->          
  
   <!-- logout user !-->
           <div class=\"modal fade\" id=\"modalLogoutUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\"><p style=\"font-family:fantasy;font-size: 30px;color: darkblue\">Au Revoir</p></h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p style=\"font-family:Times New Roman;font-size: 24px;color: blue \"> Merci d'etre l'un de nos cheres fidèles client
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                               
                                            </div>
                                        </div>
                                    </div>
           </div>
    
        ";
        // line 1756
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "LogoutUser"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 1757
            echo "            <script> 
            \$(\"#modalLogoutUser\").modal('show');
            </script> 
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1761
        echo "    <!-- end logout user !-->      
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 40
        echo "<!----drop down----->
";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 448
        echo " 
        ";
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "                 
<title>All For Deal</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-3.1.1.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Theme files -->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Oswald:300,400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=PT+Sans:400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Fugaz+One"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
<!----font-Awesome----->
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<!----font-Awesome----->
<!--light-box-files -->
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.chocolat.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chocolat.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
<!--light-box-files -->

<!-- start of javascript file for usn/newsletterBundle !-->
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/usnnewsletter/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- end of javascript file for usn/newsletterBundle !-->


  
     ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "<script>
\$(document).ready(function(){
    \$(\".dropdown\").hover(            
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideDown(\"fast\");
            \$(this).toggleClass('open');        
        },
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideUp(\"fast\");
            \$(this).toggleClass('open');       
        }
    );
});
</script>

<script type=\"text/javascript\" charset=\"utf-8\">
\$(function() {
\t\$('.gallery a').Chocolat();
});
</script>

<!-- Script Verification des Champs !-->
<script type=\"text/javascript\">
       
       // fonction de verification pour  CIN
       
        function verif_cin()
        {
           
            var x,x_cin;
            x=document.getElementById(\"cin\").value;
          
                x_cin=x.toString();
            
           
            if(x_cin.length===8)
            {
                //document.getElementById('p_cin').innerHTML=\"longeur CIN valide\";
               document.getElementById('img_cin').innerHTML='<i class=\"fa fa-check-circle\"></i>';
                //alert('longeur CIN valide');
            }
            else if (x_cin.length!==8)
            {
                //document.getElementById('p_cin').innerHTML=\"longeur CIN invalide\";
                document.getElementById('img_cin').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
               // alert('longeur CIN invalide');
            }
          
        }
        
        // fonction de verification pour les champs de texte
        
        function verif_text()
        {
            var v_nom,v_prenom,v_grade,v_addresse,v_login;
            
            v_nom=document.getElementById(\"nom\").value;
            v_prenom=document.getElementById(\"prenom\").value;
            v_grade=document.getElementById(\"grade\").value;
            v_addresse=document.getElementById(\"addresse\").value;
            v_login=document.getElementById(\"loginEmp\").value;
            
            /// verification Nom
            if(v_nom==='')
            {
               // document.getElementById('img_nom').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
                document.getElementById('nom').style(\"background-color=red\");
            }
            else if(v_nom!=='')
            {
               // document.getElementById('img_nom').innerHTML='<i class=\"fa fa-check-circle\"></i>';
                document.getElementById('nom').style(\"background-color=green\");
            }
            
            // verification prenom
            
              if(v_prenom==='')
            {
                document.getElementById('img_prenom').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
            }
            else if(v_prenom!=='')
            {
                document.getElementById('img_prenom').innerHTML='<i class=\"fa fa-check-circle\"></i>';
            }
            
            // verification grade
            
              if(v_grade==='')
            {
                document.getElementById('img_grade').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
            }
            else if(v_grade!=='')
            {
                document.getElementById('img_grade').innerHTML='<i class=\"fa fa-check-circle\"></i>';
            }
            
            // verification addresse
            
              if(v_addresse==='')
            {
                document.getElementById('img_addresse').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
            }
            else if(v_addresse!=='')
            {
                document.getElementById('img_addresse').innerHTML='<i class=\"fa fa-check-circle\"></i>';
            }
            
            // verification login employe
            
            if(v_login==='')
            {
                document.getElementById('img_login').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
            }
            else if(v_login!=='')
            {
                document.getElementById('img_login').innerHTML='<i class=\"fa fa-check-circle\"></i>';
            }
        }
        
        // fonction de verification pour le numero de telephone
        
        function verif_tel()
        {
              var x,x_tel;
            x=document.getElementById(\"num_tel\").value;
          
                x_tel=x.toString();
            
           
            if(x_tel.length===8)
            {
                //document.getElementById('p_cin').innerHTML=\"longeur CIN valide\";
               document.getElementById('img_num_tel').innerHTML='<i class=\"fa fa-check-circle\"></i>';
                //alert('longeur CIN valide');
            }
            else if (x_tel.length!==8)
            {
                //document.getElementById('p_cin').innerHTML=\"longeur CIN invalide\";
                document.getElementById('img_num_tel').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
               // alert('longeur CIN invalide');
            }
        }
        
         // fonction pour la verification du mot de passe
         
         function verif_pwd()
         {
             var pwd=document.getElementById(\"pwdEmp\").value;
             x_pwd=pwd.toString();

             
             if(x_pwd.length>7 && x_pwd.length<20)
             {
                  document.getElementById('img_pwd').innerHTML='<i class=\"fa fa-check-circle\"></i>';
             }
             else
             {
                  document.getElementById('img_pwd').innerHTML='<i class=\"fa fa-exclamation-circle\"></i>';
             }
         }
         
      /*  function validation(){
            
            var v_nom,v_prenom,v_add,v_email,v_tel,v_login,v_pwd;
            
            v_nom=document.getElementById(\"nom\").value;
            v_prenom=document.getElementById(\"prenom\").value;
            v_add=document.getElementById(\"addresse\").value;
            v_email=document.getElementById(\"email\").value;
            v_tel=document.getElementById(\"tel\").value;
            v_login=document.getElementById(\"login\").value;
            v_pwd=document.getElementById(\"pwd\").value;
            
            if (v_nom==='' || v_prenom==='' || v_add===''|| v_email==='' || v_tel==='' || v_login==='' || v_pwd===''){
              alert(\"Inscription échoué , veillez renseigner les champs vides\");  
            }else{
              alert(\"Inscription a été éffectué avec succés Monsieur/Madame : \"+v_nom+\" , \"+v_prenom+\" , Bienvenu chez All For Deal\");
            }
            
         }*/
         
        function validationlogin(){
          
          
      /*     <?php
             \$usrLog;
             \$usrPwd;
             
             \$servername=\"localhost\";
             \$dbname=\"allfordeal_symfony\";
             \$username=\"root\";
             \$password=\"\";
             
             \$conn = new mysqli(\$servername, \$username, \$password, \$dbname);
           // Check connection
           if (\$conn->connect_error) {
              die(\"Connection failed: \" . \$conn->connect_error);
           } 

\t     var \$sql=\"select * from utilisateur where login_user=\".\$usrLog.\"and pwd_user=\".\$usrPwd;
\t     ?>*/
                     
         /*  var v_l,v_p;
           
            v_l=document.getElementById(\"usr\").value;
            v_p=document.getElementById(\"pass\").value;
            if (v_l==='' || v_p===''){
              alert(\"Connexion échoué , veillez renseigner les champs vides\");  
            }else{
              alert(\"Connection a été éffectué avec succés Monsieur/Madame : \"+v_l+\" , Bienvenu chez All For Deal\");
           } */
             
      }    
         
        
</script>
<!-- Verification des champs du saisie avec jquery !-->
<script>
\$(function(){
    
    // vérification lors de l'inscription
    
    // vérification nom
    
     \$(\"#nom\").keyup(function() {
         
         \$(\"#nom\").next(\".error\").hide().text(\"\");
          
         if(!\$(\"#nom\").val().match(/^[a-zA-Z]|\\s+\$/i)){
            if(arguments.length) {
            \$(\"#nom\").next(\".error\").show().text(\"Veuillez entrer un nom valide\").css(\"color\",\"red\");       
            \$(\"#nom\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#nom\").next(\".error\").hide().text(\"\");
            \$(\"#nom\").css(\"background-color\",\"#99CC00\");
            }
          
         });
       
      // vérification prénom
      
        \$(\"#prenom\").keyup(function() {
         
         \$(\"#prenom\").next(\".error\").hide().text(\"\");
          
         if(!\$(\"#prenom\").val().match(/^[a-zA-Z]|\\s+\$/i)){
            if(arguments.length) {
            \$(\"#prenom\").next(\".error\").show().text(\"Veuillez entrer un prénom valide\").css(\"color\",\"red\");       
            \$(\"#prenom\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#prenom\").next(\".error\").hide().text(\"\");
            \$(\"#prenom\").css(\"background-color\",\"#99CC00\");
            }
          
         });
         
         // vérification addresse
         
        \$(\"#addresse\").keyup(function() {
         
         \$(\"#addresse\").next(\".error\").hide().text(\"\");
          
         if(!\$(\"#addresse\").val().match(/^[a-zA-Z0-9]|\\s+\$/i)){
            if(arguments.length) {
            \$(\"#addresse\").next(\".error\").show().text(\"Veuillez entrer une addresse valide\").css(\"color\",\"red\");       
            \$(\"#addresse\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#addresse\").next(\".error\").hide().text(\"\");
            \$(\"#addresse\").css(\"background-color\",\"#99CC00\");
            }
          
         });     
        
        // vérification email
        
       \$(\"#email\").keyup(function() {
         
         \$(\"#email\").next(\".error\").hide().text(\"\");
          
         if(!\$(\"#email\").val().match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[a-zA-Z]{2,4}\$/)){
            if(arguments.length) {
            \$(\"#email\").next(\".error\").show().text(\"Veuillez entrer une addresse email valide\").css(\"color\",\"red\");       
            \$(\"#email\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#email\").next(\".error\").hide().text(\"\");
            \$(\"#email\").css(\"background-color\",\"#99CC00\");
            }
          
         });  
         
         
         // vérification numéro téléphone
         
         \$(\"#tel\").keyup(function() {
         
        // var x,x_tel;
        // x=document.getElementById(\"tel\").value;
         //x_tel=integer.parseInt(x);
         
         \$(\"#tel\").next(\".error\").hide().text(\"\");
          
          // {13,13} : exactement 13 caractères
         if(!\$(\"#tel\").val().match(/^[0-9-()+]{13,13}\$/)){
            if(arguments.length) {
            \$(\"#tel\").next(\".error\").show().text(\"Veuillez entrer un numéro du téléphone valide : 13 chiffres exactement\").css(\"color\",\"red\");       
            \$(\"#tel\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#tel\").next(\".error\").hide().text(\"\");
            \$(\"#tel\").css(\"background-color\",\"#99CC00\");
            }
          
         });  
          
         // vérification Login
         
         \$(\"#login\").keyup(function() {
         
         \$(\"#login\").next(\".error\").hide().text(\"\");
         
        // {3,16} : min 5 , max 16 -> caractères
         if(!\$(\"#login\").val().match(/^[a-zA-Z0-9_-]{5,16}\$/)){
            if(arguments.length) {
            \$(\"#login\").next(\".error\").show().text(\"Veuillez entrer un login valide : minimum 5 & maximum 16 caractères\").css(\"color\",\"red\");       
            \$(\"#login\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#login\").next(\".error\").hide().text(\"\");
            \$(\"#login\").css(\"background-color\",\"#99CC00\");
            }
          
         }); 
         
         // vérification Password
         
                  
         \$(\"#pwd\").keyup(function() {
         
         \$(\"#pwd\").next(\".error\").hide().text(\"\");
         
        // {3,16} : min 8 , max 15 -> caractères
         if(!\$(\"#pwd\").val().match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,15})\$/)){
            if(arguments.length) {
            \$(\"#pwd\").next(\".error\").show().text(\"Veuillez entrer un password valide : minimum 8 & maximum 15 caractères ; with at least one upper case letter, one lower case letter, and one digit\").css(\"color\",\"red\");       
            \$(\"#pwd\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#pwd\").next(\".error\").hide().text(\"\");
            \$(\"#pwd\").css(\"background-color\",\"#99CC00\");
            }
          
         }); 
         
       /// vérification lors de la connexion
       
        // vérification Login
         
         \$(\"#usr\").keyup(function() {
         
         \$(\"#usr\").next(\".error\").hide().text(\"\");
         
        // {3,16} : min 5 , max 16 -> caractères
         if(!\$(\"#usr\").val().match(/^[a-zA-Z0-9_-]{2,16}\$/)){
            if(arguments.length) {
            \$(\"#usr\").next(\".error\").show().text(\"Veuillez entrer un login valide\").css(\"color\",\"red\");       
            \$(\"#usr\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#usr\").next(\".error\").hide().text(\"\");
            \$(\"#usr\").css(\"background-color\",\"#99CC00\");
            }
          
         }); 
         
         // vérification Password
         
                  
        \$(\"#pass\").keyup(function() {
         
         \$(\"#pass\").next(\".error\").hide().text(\"\");
         
        // {3,16} : min 8 , max 15 -> caractères
         if(!\$(\"#pass\").val().match(/^[a-zA-Z0-9_-]{2,16}\$/)){
            if(arguments.length) {
            \$(\"#pass\").next(\".error\").show().text(\"Veuillez entrer un password valide\").css(\"color\",\"red\");       
            \$(\"#pass\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
            }
         }else{
            \$(\"#pass\").next(\".error\").hide().text(\"\");
            \$(\"#pass\").css(\"background-color\",\"#99CC00\");
            }
          
         });
         
        
   }); 
   
 
   
</script>
   

";
    }

    // line 453
    public function block_content($context, array $blocks = array())
    {
        echo " 
        <div class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-sm-3 logo\">
                            <h1><a href=\"";
        // line 457
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_home");
        echo "\"><span class=\"highlight\">A</span>ll<span class=\"highlight\">F</span>or<span class=\"highlight\">D</span>eal</a></h1>
\t\t\t</div>
\t\t    <div class=\"col-sm-9 logo_right\">
\t\t       <div class=\"social\">
\t\t\t\t  <a href=\"https://www.facebook.com\" class=\"link facebook\" target=\"_parent\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t  <a href=\"https://twitter.com/?lang=en\" class=\"link twitter\" target=\"_parent\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t  <a href=\"https://www.google.tn/\" class=\"link google\" target=\"_parent\"><span class=\"fa fa-google-plus\"></span></a>
\t\t\t\t  <a href=\"https://www.linkedin.com/nhome/\" class=\"link google\" target=\"_parent\"><span class=\"fa fa-linkedin\"></span></a>
\t\t\t\t  <a href=\"https://www.google.tn/\" class=\"link google\" target=\"_parent\"><span class=\"fa fa-tumblr\"></span></a>    
                    </div>
\t\t\t<!-- script for menu -->
                        ";
        // line 468
        $this->displayBlock('fless', $context, $blocks);
        // line 483
        echo "\t\t\t<div class=\"clearfix\"> </div>
\t\t\t<!-- Modal -->
                           <!-- Start Login !-->
                           ";
        // line 486
        $this->displayBlock('Login', $context, $blocks);
        // line 546
        echo "                           <!-- End Login !-->
                           
\t\t\t\t <!-- Modal -->
               <!-- Start Registration !-->     
                                 ";
        // line 550
        $this->displayBlock('Register', $context, $blocks);
        // line 746
        echo "     
        
                <!-- End Registration !-->    
                     </div>
\t\t         </div>
\t\t     </div>
\t\t\t <div class=\"modal fade\" id=\"applyModal_2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"applyModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t&times;</button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">
\t\t\t\t\t\t\t\tPlease Choose Your Location</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t <form class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<select id=\"basic2\" class=\"show-tick form-control\" multiple>
\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Popular Cities\">
\t\t\t\t\t\t\t\t\t\t\t<option selected style=\"display:none;color:#eee;\">All India</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Ahmedabad</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Bangalore</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Chandigarh</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Chennai</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Coimbatore</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Delhi</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Gurgaon</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Hyderabad</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Jaipur</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Kochi</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Kolkata</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Lucknow</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Mumbai</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Noida</option>
\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"More Cities\">
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Andhra Pradesh\">
\t\t\t\t\t\t\t\t\t\t\t<option>Anantapur</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Chinnamandem</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Gudur</option><option>Guntur</option><option>Jangareddy Gudem</option><option>Kakinada</option><option>Kurnool</option><option>Martur</option><option>Parvathipuram</option><option>Rajahmundry</option><option>Tenali</option><option>Tirupati</option><option>Vijayawada</option><option>Vizag</option><option>Vizianagaram</option></optgroup><optgroup label=\"Arunachal Pradesh\"><option>Tawang</option><option>Ziro</option></optgroup><optgroup label=\"Assam\"><option>Dibrugarh</option><option>Guwahati</option><option>Jorhat</option><option>Silchar</option><option>Tinsukia</option></optgroup><optgroup label=\"Bihar\"><option>Hajipur</option><option>Patna</option></optgroup><optgroup label=\"Chhattisgarh\"><option>Bhilai</option><option>Bilaspur</option><option>Champa</option><option>Dhamtari</option><option>Durg</option><option>Jagdalpur</option><option>Kawardha</option><option>Kondagaon</option><option>Korba</option><option>Raigarh</option><option>Raipur</option><option>Tilda Neora</option></optgroup><optgroup label=\"Croatia\"><option>Dubrovnik</option></optgroup><optgroup label=\"Goa\"><option>Goa</option></optgroup><optgroup label=\"Gujarat\"><option>Adipur</option><option>Ahmedabad</option><option>Anand</option><option>Ankleshwar</option><option>Bharuch</option><option>Bhavnagar</option><option>Daman</option><option>Gandhidham</option><option>Gandhinagar</option><option>Himmatnagar</option><option>Idar</option><option>Jamnagar</option><option>Jetpur</option><option>Junagadh</option><option>Kutch</option><option>Nadiad</option><option>Navsari</option><option value=\"PALN\">Palanpur</option><option value=\"PATA\">Patan</option><option value=\"RAJK\">Rajkot</option><option value=\"SANA\">Sanand</option><option value=\"SILV\">Silvassa</option><option value=\"SURT\">Surat</option><option value=\"VAD\">Vadodara</option><option value=\"VLSD\">Valsad</option><option value=\"VAPI\">Vapi</option></optgroup><optgroup label=\"Haryana\"><option value=\"AMB\">Ambala</option><option value=\"DHRA\">Dharuhera</option><option value=\"FARI\">Faridabad</option><option value=\"HISR\">Hisar</option><option value=\"JHAJ\">Jhajjar</option><option value=\"JIND\">Jind</option><option value=\"KAIT\">Kaithal</option><option value=\"KARN\">Karnal</option><option value=\"KUND\">Kundli</option><option value=\"KURU\">Kurukshetra</option><option value=\"PNCH\">Panchkula</option><option value=\"PAN\">Panipat</option><option value=\"REWA\">Rewari</option><option value=\"ROH\">Rohtak</option><option value=\"SISA\">Sirsa</option><option value=\"RAIH\">Sonipat</option><option value=\"YAMU\">Yamunanagar</option></optgroup><optgroup label=\"Himachal Pradesh\"><option value=\"BADD\">Baddi</option><option value=\"DMSL\">Dharamsala</option><option value=\"HAMI\">Hamirpur (HP)</option><option value=\"KANG\">Kangra</option><option value=\"KULU\">Kullu</option><option value=\"MANA\">Manali</option><option value=\"SMLA\">Shimla</option><option value=\"SCO\">Solan</option></optgroup><optgroup label=\"Jammu and Kashmir\"><option value=\"JAMM\">Jammu</option><option value=\"KATH\">Kathua</option><option value=\"KATR\">Katra</option><option value=\"LEHA\">Ladakh</option></optgroup><optgroup label=\"Jharkhand\"><option value=\"BOKA\">Bokaro</option><option value=\"DOGH\">Deoghar</option><option value=\"DHAN\">Dhanbad(Jharkhand)</option><option value=\"JMDP\">Jamshedpur</option><option value=\"RANC\">Ranchi</option></optgroup><optgroup label=\"Karnataka\"><option value=\"BELG\">Belgaum</option><option value=\"BANG\">Bengaluru</option><option value=\"BIDR\">Bidar</option><option value=\"COOR\">Coorg</option><option value=\"DAVA\">Davangere</option><option value=\"GULB\">Gulbarga</option><option value=\"HUBL\">Hubli</option><option value=\"KWAR\">Karwar</option><option value=\"MLR\">Mangalore</option><option value=\"MANI\">Manipal</option><option value=\"MYS\">Mysore</option><option value=\"TUMK\">Tumkur</option><option value=\"UDUP\">Udupi</option></optgroup><optgroup label=\"Kerala\"><option value=\"99\">Alappuzha</option><option value=\"ANHL\">Anchal</option><option value=\"ANGA\">Angamaly</option><option value=\"ERNK\">Ernakulam</option><option value=\"KANN\">Kannur</option><option value=\"KARG\">Karunagapally</option><option value=\"KOCH\">Kochi</option><option value=\"KOLM\">Kollam</option><option value=\"KTYM\">Kottayam</option><option value=\"MVLR\">Mavellikara</option><option value=\"THAL\">Thalayolaparambu</option><option value=\"THSR\">Thrissur</option><option value=\"TRIV\">Trivandrum</option></optgroup><optgroup label=\"Madhya Pradesh\"><option value=\"BLGT\">Balaghat</option><option value=\"BETU\">Betul</option><option value=\"BHOP\">Bhopal</option><option value=\"CHIN\">Chhindwara</option><option value=\"DEWAS\">Dewas</option><option value=\"GWAL\">Gwalior</option><option value=\"HRDA\">Harda</option><option value=\"IND\">Indore</option><option value=\"JABL\">Jabalpur</option><option value=\"KHDW\">Khandwa</option><option value=\"NMCH\">Neemuch</option><option value=\"RATL\">Ratlam</option><option value=\"SAMP\">Sagar</option><option value=\"SARN\">Sarni</option><option value=\"SEHO\">Sehore</option><option value=\"SEON\">Seoni</option><option value=\"SHIV\">Shivpuri</option><option value=\"UJJN\">Ujjain</option></optgroup><optgroup label=\"Maharashtra\"><option value=\"AHMED\">Ahmednagar</option><option value=\"AKOL\">Akola</option><option value=\"ALBG\">Alibaug</option><option value=\"AMRA\">Amravati</option><option value=\"AURA\">Aurangabad</option><option value=\"BARA\">Baramati</option><option value=\"BEED\">Beed</option><option value=\"BHIW\">Bhiwandi</option><option value=\"BOIS\">Boisar</option><option value=\"BULD\">Buldana</option><option value=\"CHAN\">Chandrapur</option><option value=\"DHLE\">Dhule</option><option value=\"DHUL\">Dhulia</option><option value=\"INDA\">Indapur</option><option value=\"JALG\">Jalgaon</option><option value=\"KHED\">Khed</option><option value=\"KHOP\">Khopoli</option><option value=\"KOLH\">Kolhapur</option><option value=\"LAT\">Latur</option><option value=\"LAVA\">Lavasa</option><option value=\"LNVL\">Lonavala</option><option value=\"MHAD\">Mahad</option><option value=\"MALE\">Malegaon</option><option value=\"MUMBAI\">Mumbai</option><option value=\"NAGP\">Nagpur</option><option value=\"NAND\">Nanded</option><option value=\"NASK\">Nashik</option><option value=\"PALG\">Palghar</option><option value=\"PANC\">Panchgani</option><option value=\"PARB\">Parbhani</option><option value=\"PEN\">Pen</option><option value=\"PHAL\">Phaltan</option><option value=\"PIMP\">Pimpri</option><option value=\"PUNE\">Pune</option><option value=\"RAI\">Raigad</option><option value=\"SANG\">Sangli</option><option value=\"SATA\">Satara</option><option value=\"SOLA\">Solapur</option><option value=\"TMB\">Tembhode</option><option value=\"UDGR\">Udgir</option><option value=\"WARD\">Wardha</option></optgroup><optgroup label=\"Meghalaya\"><option value=\"RNG\">Rongjeng</option><option value=\"SHLG\">Shillong</option></optgroup><optgroup label=\"Nagaland\"><option value=\"DMPR\">Dimapur</option></optgroup><optgroup label=\"NCR\"><option value=\"NCR\">National Capital Region (NCR)</option></optgroup><optgroup label=\"Orissa\"><option value=\"BLSR\">Balasore</option><option value=\"BHUB\">Bhubaneshwar</option><option value=\"PURI\">Puri</option><option value=\"SAMB\">Sambalpur</option></optgroup><optgroup label=\"Punjab\"><option value=\"ABOR\">Abohar</option><option value=\"AHMG\">Ahmedgarh</option><option value=\"AMRI\">Amritsar</option><option value=\"BNGA\">Banga</option><option value=\"BAR\">Barnala</option><option value=\"BHAT\">Bathinda</option><option value=\"CHD\">Chandigarh</option><option value=\"HOSH\">Hoshiarpur</option><option value=\"JALA\">Jalandhar</option><option value=\"KHAN\">Khanna</option><option value=\"KOTK\">Kotkapura</option><option value=\"LUDH\">Ludhiana</option><option value=\"MNSA\">Mansa</option><option value=\"MOGA\">Moga</option><option value=\"MOHL\">Mohali</option><option value=\"NAVN\">Nawanshahr</option><option value=\"PATH\">Pathankot</option><option value=\"PATI\">Patiala</option><option value=\"PATR\">Patran</option><option value=\"RUPN\">Rupnagar</option><option value=\"SANR\">Sangrur</option><option value=\"ZIRK\">Zirakpur</option></optgroup><optgroup label=\"Rajasthan\"><option value=\"ABRD\">Abu Road</option><option value=\"AJMER\">Ajmer</option><option value=\"ALSR\">Alsisar (Rajasthan)</option><option value=\"ALWR\">Alwar</option><option value=\"BANS\">Banswara</option><option value=\"BEAW\">Beawar</option><option value=\"BHIL\">Bhilwara</option><option value=\"BHWD\">Bhiwadi</option><option value=\"BIK\">Bikaner</option><option value=\"DAUS\">Dausa</option><option value=\"JAIP\">Jaipur</option><option value=\"JSMR\">Jaisalmer</option><option value=\"JODH\">Jodhpur</option><option value=\"KISH\">Kishangarh</option><option value=\"KOTA\">Kota</option><option value=\"NEEM\">Neemrana</option><option value=\"SIKR\">Sikar</option><option value=\"SRIG\">Sri Ganganagar</option><option value=\"UDAI\">Udaipur</option></optgroup><optgroup label=\"Singapore\"><option value=\"SING\">Singapore</option></optgroup><optgroup label=\"Tamil Nadu\"><option value=\"ARIY\">Ariyalur</option><option value=\"ARNI\">Arni</option><option value=\"ARUP\">Aruppukottai</option><option value=\"CHEN\">Chennai</option><option value=\"COIM\">Coimbatore</option><option value=\"CUDD\">Cuddalore</option><option value=\"DHAR\">Dharapuram</option><option value=\"DMPI\">Dharmapuri</option><option value=\"DIND\">Dindigul</option><option value=\"EROD\">Erode</option><option value=\"KNPM\">Kanchipuram</option><option value=\"KUMB\">Kumbakonam</option><option value=\"MADU\">Madurai</option><option value=\"MTPM\">Mettuppalayam</option><option value=\"OOTY\">Ooty</option><option value=\"POND\">Pondicherry</option><option value=\"PUDH\">Pudhukottai</option><option value=\"SALM\">Salem</option><option value=\"SIV\">Sivakasi</option><option value=\"TAJO\">Tanjore</option><option value=\"TENK\">Tenkasi</option><option value=\"TIRV\">Tirunelveli</option><option value=\"TIRP\">Tirupur</option><option value=\"TRIC\">Trichy</option><option value=\"VELL\">Vellore</option></optgroup><optgroup label=\"Telangana\"><option value=\"ADIL\">Adilabad</option><option value=\"AMAN\">Amangal</option><option value=\"HYD\">Hyderabad</option><option value=\"KARIM\">Karimnagar</option><option value=\"KHAM\">Khammam</option><option value=\"MRGD\">Miryalaguda</option><option value=\"NIZA\">Nizamabad</option><option value=\"PEDA\">Peddapalli</option><option value=\"POCH\">Pochampally</option><option value=\"SDDP\">Siddipet</option><option value=\"SURY\">Suryapet</option><option value=\"UPPA\">Uppal</option><option value=\"WAR\">Warangal</option></optgroup><optgroup label=\"Tripura \"><option value=\"AGAR\">Agartala</option></optgroup><optgroup label=\"Uttar Pradesh\"><option value=\"AGRA\">Agra</option><option value=\"ALI\">Aligarh</option><option value=\"ALLH\">Allahabad</option><option value=\"BARE\">Bareilly</option><option value=\"BIJ\">Bijnor</option><option value=\"GHAR\">Ghazipur</option><option value=\"GRKP\">Gorakhpur</option><option value=\"KANP\">Kanpur</option><option value=\"LUCK\">Lucknow</option><option value=\"MATH\">Mathura</option><option value=\"MERT\">Meerut</option><option value=\"MORA\">Moradabad</option><option value=\"MUZ\">Muzaffarnagar</option><option value=\"RENU\">Renukoot</option><option value=\"SAHA\">Saharanpur</option><option value=\"VAR\">Varanasi</option></optgroup><optgroup label=\"Uttarakhand\"><option value=\"DEH\">Dehradun</option><option value=\"HRDR\">Haridwar</option><option value=\"MSS\">Mussoorie</option><option value=\"NAIN\">Nainital</option><option value=\"RAMN\">Ramnagar</option><option value=\"RKES\">Rishikesh</option><option value=\"ROOR\">Roorkee</option><option value=\"RUDP\">Rudrapur</option></optgroup><optgroup label=\"West Bengal\"><option value=\"ASANSOL\">Asansol</option><option value=\"BEHA\">Berhampore</option><option value=\"BLPR\">Bolpur</option><option value=\"BURD\">Burdwan</option><option value=\"COBE\">Cooch Behar</option><option value=\"DARJ\">Darjeeling</option><option value=\"DURGA\">Durgapur</option><option value=\"HALD\">Haldia</option><option value=\"HOOG\">Hooghly</option><option value=\"HWRH\">Howrah</option><option value=\"JPG\">Jalpaiguri</option><option value=\"KOLK\">Kolkata</option><option value=\"RANA\">Ranaghat</option><option value=\"SILI\">Siliguri</option></optgroup>
\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </form>    
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  <div class=\"clearfix\"></div>
\t\t </div>
\t   </div>
</div>
<nav class=\"navbar nav_bottom\" role=\"navigation\">
 <div class=\"container\">
 <!-- Brand and toggle get grouped for better mobile display -->
   <div class=\"navbar-header nav_2\">
      <button type=\"button\" class=\"navbar-toggle collapsed navbar-toggle1\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">Menu
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
     ";
        // line 812
        $this->displayBlock('tabs', $context, $blocks);
        // line 846
        echo "   </div>
</nav>
<script type=\"text/javascript\">
\t\t\$(function() {
\t\tblinkeffect('#txtblnk');
\t\t})
\t\tfunction blinkeffect(selector) {
\t\t\$(selector).fadeOut('slow', function() {
\t\t\$(this).fadeIn('slow', function() {
\t\tblinkeffect(this);
\t\t});
\t\t});
\t\t}
</script>
<!-- End Of Headerrrr !-->
<div class=\"demo\">
  <marquee behavior=\"scroll\" style=\"background:#F3DB28; color:#000;\" direction=\"left\" onmouseover=\"this.stop();\" onmouseout=\"this.start();\">\t\t\t\t
   Bienvenu à All For Deal
  </marquee> \t 
</div>
<section class=\"slider\">
  <div class=\"flexslider\">
\t<ul class=\"slides\">
\t\t<li clearfix>
\t\t\t<div class=\"col-sm-6 slider_right\">
\t\t\t  <div class=\"col-sm-12 slider_caption\">
\t\t\t\t<h3>Socialnetwork</h3>
\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\"><img src=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/4.png"), "html", null, true);
        echo "\" alt=\"\"/></div>
\t\t</li>
\t\t<li clearfix>
\t\t\t<div class=\"col-sm-6\"><img src=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/9.png"), "html", null, true);
        echo "\" alt=\"\"/></div>
\t\t\t<div class=\"col-sm-6 slider_left\">
\t\t\t  <div class=\"col-sm-12 slider_caption1\">
\t\t\t\t<h3>Entrepreneurs</h3>
\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t  </div>
\t\t\t</div>
\t\t</li>
\t</ul>
  </div>
  <div class=\"clearfix\"> </div>
</section>
<div class=\"box_1\">
  <div class=\"container\">
    <div class=\"box-info clearfix \">
      <div class=\"heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12\">
       <div class=\"heading column heading-v1 separator_align_right\">
         <div class=\"heading-inner\">
             <small class=\"subheading\">Bienvenu à All For Deal</small>
             <h2>A propos de nous</h2>
         </div>   
      </div>   
    </div>  
    <div class=\"col-lg-9 col-md-9 right_grid\">
      <h3>Qu'est ce que All For Deal ? </h3>
      <h4>All For Deal , Deal pour tous , Deal pour Vous , Best of Deals pour vous</h4>
      <p>All For Deal , a été lancé 2 ans en arrière , c'était en 2014 , c'est un site qui vous aident à trouver facilement ce que vous voulez achetez,ce que vous voulez offrir..c'est facile...juste etre inscrit à nous,et vous commencez à surfez chez nous.</p>
    </div>  
    <div class=\"clearfix\"> </div> 
   </div>
  </div> 
</div>
<div class=\"box_2\">
  <div class=\"container\">
\t  <div class=\"course_demo\">
        <ul id=\"flexiselDemo3\">\t
\t\t  <li><img src=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/l1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></li>
\t\t  <li><img src=\"";
        // line 916
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/l2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></li> 
\t\t  <li><img src=\"";
        // line 917
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/l3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></li> 
\t\t  <li><img src=\"";
        // line 918
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/l4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></li> 
\t\t </ul>
\t\t<script type=\"text/javascript\">
\t\t\t\$(window).load(function() {
\t\t\t\t\$(\"#flexiselDemo3\").flexisel({
\t\t\t\t\tvisibleItems: 4,
\t\t\t\t\tanimationSpeed: 1000,
\t\t\t\t\tautoPlay: true,
\t\t\t\t\tautoPlaySpeed: 3000,    \t\t
\t\t\t\t\tpauseOnHover: true,
\t\t\t\t\tenableResponsiveBreakpoints: true,
\t\t\t    \tresponsiveBreakpoints: { 
\t\t\t    \t\tportrait: { 
\t\t\t    \t\t\tchangePoint:480,
\t\t\t    \t\t\tvisibleItems: 1
\t\t\t    \t\t}, 
\t\t\t    \t\tlandscape: { 
\t\t\t    \t\t\tchangePoint:640,
\t\t\t    \t\t\tvisibleItems: 2
\t\t\t    \t\t},
\t\t\t    \t\ttablet: { 
\t\t\t    \t\t\tchangePoint:768,
\t\t\t    \t\t\tvisibleItems: 2
\t\t\t    \t\t}
\t\t\t    \t}
\t\t\t    });
\t\t\t    
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexisel.js"), "html", null, true);
        echo "\"></script>
   </div>
  </div>
</div>
<!--<div class=\"box_3 clearfix\">
  <div class=\"container\">
\t<div class=\"heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12\">
       <div class=\"heading column heading-v1 separator_align_right\">
         <div class=\"heading-inner\">
             <small class=\"subheading\"> introducing</small>
             <h2>New Classifieds</h2>
         </div>   
      </div>   
    </div>  
<div class=\"col-md-9 row-inner\">
<div class=\"col-md-12 row-inner_1\">
\t<div class=\"col-md-6 col-inner\">
\t\t<ul class=\"classi_1\">
\t\t\t<li class=\"classi_1-left\"><img src=\"";
        // line 1023
        echo "\" class=\"img-responsive\" alt=\"\"/></li>
\t\t\t<li class=\"classi_1-right middle\">
\t\t\t\t<h3><a href=\"index_detail.html\"> faucibus</a></h3>
\t\t\t\t<p>Erat metus nec sunt sit ipsum</p>
\t\t\t</li>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</ul>
\t   </div>
\t </div>
   </div>!-->
 </div>
</div>
<marquee direction=\"left\" style=\"background:#000; color:#F3DB28;\">
Bienvenu , nous vous souhaite que vous aimerez notre Site...
</marquee>
<!--<div class=\"tabs_list\">
  <div class=\"container\">  
  \t <div class=\"heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12\">
       <div class=\"heading column heading-v1 separator_align_right\">
         <div class=\"heading-inner\">
             <small class=\"subheading\"> introducing</small>
             <h3>Posted Classifieds</h3>
         </div>   
      </div>   
    </div>
\t       <div class=\"bs-example bs-example-tabs col-md-9\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
\t       \t <ul id=\"myTab\" class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t  <li role=\"presentation\" class=\"active presentation_2\"><a href=\"#home\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"home\" aria-expanded=\"true\">Recently Feeds</a></li>
\t\t\t  <li role=\"presentation\"><a href=\"#profile\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-controls=\"profile\">
\t\t\t  \t<div class=\"btn-group\">
                    <a class=\"btn btn_1 btn-default dropdown-toggle dropdown-toggle_1\" data-toggle=\"dropdown\" aria-expanded=\"true\">User Type<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                        <li><a href=\"#\">Company</a></li>
                        <li><a href=\"#\">Software Developer</a></li>
                        <li><a href=\"#\">Leader</a></li>
                        <li><a href=\"#\">Employee</a></li>
                        <li><a href=\"#\">Consultant</a></li>
                        <li><a href=\"#\">Trainer</a></li>
                    </ul>
                 </div></a></li>
\t\t\t  <li role=\"presentation\"><a href=\"#profile1\" role=\"tab\" id=\"profile-tab1\" data-toggle=\"tab\" aria-controls=\"profile1\">
                <input class=\"form-control\" type=\"text\" id=\"flocation\" name=\"flocation\" placeholder=\"Enter City Name\" onkeypress=\"displayCity(this.value);\" onblur=\"gotoFeed('location', this.value);\" tabindex=\"99\">
              </li>
\t\t\t</ul>
\t\t  <div id=\"myTabContent\" class=\"tab-content\">
\t\t     <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\" aria-labelledby=\"home-tab\">
\t\t      <div class=\"panel-body\">
                \t<div class=\"pull-left\" style=\"margin:0 5px;\">
                \t\t<a class=\"thumbnail\" href=\"index_detail.html\">
                \t\t\t<img src=\"";
        // line 1303
        echo "\" width=\"50\" height=\"50\">
                \t\t</a>
                \t</div>
                \t<div class=\"panel-body_1\">
                \t<h3>
                \t\t<a href=\"index_detail.html\" style=\"text-transform: capitalize;\">Condimentum</a>
                \t\tcupidatat con<div class=\"pull-right\">1 hour ago <i class=\"fa fa-refresh refresh_1\"></i></div>
                    </h3>
                    <h4>
                      <a href=\"index_detail.html\">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>
                    </h4>
                    </div>
                    <div class=\"clearfix\"></div>
               </div>
\t\t   </div>
\t    </div>
      </div>
    </div>
</div>!-->
       <!-- Start of fotter!-->
<div class=\"footer_widget\">
\t<div class=\"container\">
\t\t<div class=\"col-md-4\">
\t\t\t<aside id=\"text-1\" class=\"widget widget_text\">
\t\t\t\t<h3 class=\"widget-title\"><span>Visitez Nous</span></h3>
\t\t\t\t<div class=\"textwidget\"><p>Si Vous Voulez nous consultez chere client à notre locale,n'hésitez pas à nous visitez</p>
\t\t\t\t   <p><em style=\"color: #fff;\">Fiablité.,<br>Ergonomie,<br>Sécurité</em></p>
\t\t\t\t</div> 
\t\t\t</aside>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<aside id=\"text-2\" class=\"widget widget_text\">
\t\t\t\t<h3 class=\"widget-title\"><span>De Plus A propos de nous</span></h3>
\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t<p>All For Deal vous servire pour votre plaisire.</p></div>
\t\t    </aside>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<aside>
\t\t\t\t<h3 class=\"widget-title\"><span>Notre Stafs</span></h3>
\t\t\t\t<ul class=\"gallery\">
\t\t\t\t\t<li><a href=\"";
        // line 1344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 1348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 1352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 1357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 1362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t   <a href=\"";
        // line 1367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t    </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 1372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 1377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 1378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t    </li>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</ul>
\t\t\t</aside>
\t\t</div>
\t</div>
</div>
<div class=\"footer_middle\">
\t
        <div class=\"col-sm-7\">
          <div class=\"footer-icons\"> 
          \t<a href=\"https://twitter.com/?lang=en\" class=\"social-icon\"><i class=\"fa fa-twitter has-circle\"></i></a> 
          \t<a href=\"https://www.facebook.com\" class=\"social-icon\"><i class=\"fa fa-facebook has-circle\"></i></a> 
          \t<a href=\"https://www.google.tn/\" class=\"social-icon\"><i class=\"fa fa-google-plus has-circle\"></i></a> 
          \t<a href=\"https://www.linkedin.com/nhome/\" class=\"social-icon\"><i class=\"fa fa-linkedin has-circle\"></i></a> 
          \t<div class=\"clearfix\"> </div>
          </div>
      </div>
    
     <div class=\"col-sm-5\">
          <div class=\"newsletter_signup\">
            <form name=\"newsletter\" method=\"post\" target=\"_blank\" novalidate=\"novalidate\" id=\"newsletter\" action=\"";
        // line 1401
        echo $this->env->getExtension('routing')->getPath("usn_newsletter_subscribe");
        echo "\" class=\"form-inline validate\" pmbx_context=\"35D26FE1-2523-4D05-843A-5A7F1B81AF96\">
              <input type=\"email\" id=\"newsletter_email\" name=\"newsletter[email]\" required=\"required\" class=\"form-control\" placeholder=\"Subscribe to our newsletter\" pmbx_context=\"876A45D1-B77E-4775-AEC4-01837D5FFD6E\">
              <input type=\"submit\" value=\"SUBSCRIBE\" id=\"newsletter_save\" name=\"newsletter[save]\"> 
              <input type=\"hidden\" id=\"newsletter__token\" name=\"newsletter[_token]\" value=\"fT-IedNgyNRi84bKoJJ3f9-3BcdRuoE6qm-3mmtAbMI\" pmbx_context=\"F09958BD-9E9B-44F1-868A-8BA0FAC76A0B\" />
            </form>
          <div id=\"newsletter-response\" style=\"color:red;\"></div> 
          </div>
    </div> 
              
               
    <!-- <div class=\"col-sm-5\">
          <div class=\"newsletter_signup\">
            <form novalidate=\"\" target=\"_blank\" name=\"newsletter-subscribe-form\" id=\"newsletter-subscribe-form\" method=\"post\" class=\"form-inline validate\" action=\"";
        // line 1413
        echo "\" >
              <input type=\"email\" required=\"\" placeholder=\"Subscribe to our newsletter\" class=\"form-control\" name=\"EMAIL\" value=\"\">
              <input type=\"submit\" id=\"newsletter-subscribe\" name=\"subscribe\" value=\"SUBSCRIBE\">
            </form>
          </div>
        </div>  !-->
              
        
              
<div class=\"clearfix\"> </div>

<!-- <div class=\"col-sm-5\">
<div class=\"newsletter_signup\">
  <form name=\"newsletter\" method=\"post\"  novalidate=\"novalidate\" id=\"newsletter\" action=\"";
        // line 1426
        echo "\">
 <input type=\"email\" id=\"newsletter_email\" name=\"newsletter[email]\" required=\"required\" placeholder=\"email-address\"/>
<div><button type=\"submit\" value=\"SUBSCRIBE\" id=\"newsletter_save\" name=\"newsletter[save]\">Submit</button></div>
<input type=\"hidden\" id=\"newsletter__token\" name=\"newsletter[_token]\" value=\"py6s5vJLzQ3yw8wBhdSE-nr9ogAgtNpdbQMFtutICbQ\" />
  <div id=\"newsletter-response\" style=\"color:red;\"></div>
  </form>
<div id=\"newsletter-response\" style=\"color:red;\"></div>
</div>
 </div>!-->
</div>\t\t
  
<div class=\"footer_bottom\">
\t<div class=\"container\">
\t\t<div class=\"copy\">
            <p>Copyright © 2016 All For Deal </p>
\t    </div>
\t</div>
    <!-- Start of Audio Player Code !-->
  <div id=\"backgroundaudio\">
       <i class=\"fa fa-volume-up\"></i>
    <audio autoplay=\"\" controls=\"\" loop=\"\" preload=\"\">
       <source src=\"";
        // line 1447
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("audios/Smile.ogg"), "html", null, true);
        echo "\" type=\"audio/ogg\"></source>
       <source src=\"";
        // line 1448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("audios/Smile.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\"></source>
        Your browser does not support the audio element.
    </audio>
  </div>      
        <!-- Style Audio Player !-->
<style media=\"screen\" type=\"text/css\">
 #backgroundaudio {
  display: block;
  position: fixed;
  bottom: -43px;
  left: 5px;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
 }
 #backgroundaudio:hover {
  bottom: 0;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
 }
 #backgroundaudio audio {
  background: #ffffff;
  padding: 5px;
  display: table-cell;
  vertical-align: middle;
  height: 43px;
  z-index: 9998;
 }
 #backgroundaudio i {
  font-size: 40px;
  display: block;
  background: #ffffff;
  padding: 5px;
  width: 50px;
  float: none;
  margin-bottom: -1px;
  z-index: 9999;
 }
</style>
  <!-- End Of Style Audio Player !-->
    <!-- End of Audio Player Code !-->
    
\t<a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\">Top </span></a>
      <script type=\"text/javascript\" src=\"";
        // line 1496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 1497
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t/*
\t\t\tvar defaults = {
\t  \t\t\tcontainerID: 'toTop', // fading element id
\t\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\t\tscrollSpeed: 1200,
\t\t\t\teasingType: 'linear' 
\t \t\t};
\t\t\t*/
\t\t\t
\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t
\t\t});
\t  </script>
</div>\t
<!----language selector----->
<script type=\"text/javascript\" src=\"";
        // line 1515
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 1516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 1517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.grid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 1518
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.lcd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<!-- Source -->
<script src=\"";
        // line 1520
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1521
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.utils.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1522
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.lcd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1523
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.languagefilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1524
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.regionfilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1525
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.core.js"), "html", null, true);
        echo "\"></script>
<script>
\t\$( document ).ready( function() {
\t\t\$( '.uls-trigger' ).uls( {
\t\t\tonSelect : function( language ) {
\t\t\t\tvar languageName = \$.uls.data.getAutonym( language );
\t\t\t\t\$( '.uls-trigger' ).text( languageName );
\t\t\t},
\t\t\tquickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
\t\t} );
\t} );
</script>\t\t
<!-- FlexSlider -->
<link href=\"";
        // line 1538
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<script defer src=\"";
        // line 1539
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
\t  <script type=\"text/javascript\">
\t\t\$(function(){
\t\t  SyntaxHighlighter.all();
\t\t});
\t\t\$(window).load(function(){
\t\t  \$('.flexslider').flexslider({
\t\t\tanimation: \"slide\",
\t\t\tstart: function(slider){
\t\t\t  \$('body').removeClass('loading');
\t\t\t}
\t\t  });
\t\t});
\t  </script>
<!-- FlexSlider -->\t
";
    }

    // line 468
    public function block_fless($context, array $blocks = array())
    {
        // line 469
        echo "\t\t\t<span class=\"menu\"></span>
\t\t\t<div class=\"top-menu\">
\t\t\t\t<ul>
                                    ";
        // line 472
        $this->displayBlock('A', $context, $blocks);
        // line 475
        echo "    
                                        <li><a href=\"";
        // line 476
        echo "\" class=\"btn btn-default btn-default_2 pull-left\" data-toggle=\"modal\" data-target=\"#applyModal_1\">Register</a></li>
\t\t\t\t    ";
        // line 477
        $this->displayBlock('B', $context, $blocks);
        // line 479
        echo "   
                                </ul>
\t\t\t</div>
                        ";
    }

    // line 472
    public function block_A($context, array $blocks = array())
    {
        // line 473
        echo "\t\t\t\t\t<li><a href=\"#\" class=\"btn btn-default btn-default_2 pull-left\" data-toggle=\"modal\" data-target=\"#applyModal\">Login</a></li>
\t\t\t\t\t ";
        // line 474
        $this->displayBlock('logout', $context, $blocks);
        // line 475
        echo "                                    ";
    }

    // line 474
    public function block_logout($context, array $blocks = array())
    {
        echo " ";
    }

    // line 477
    public function block_B($context, array $blocks = array())
    {
        echo "\t
                                        <li><a href=\"#\" class=\"btn btn-default btn-default_2 pull-left uls-trigger\" data-toggle=\"modal\" data-target=\"#applyModal_2\">Select Language</a></li>
                                    ";
    }

    // line 486
    public function block_Login($context, array $blocks = array())
    {
        // line 487
        echo "\t\t\t\t<div class=\"modal fade\" id=\"applyModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"applyModalLabel\" aria-hidden=\"true\">
\t\t\t\t  \t<div class=\"modal-dialog modal-dialog_2\">
\t\t\t\t    \t<div class=\"modal-content\">
\t\t\t\t\t      \t<div class=\"modal-header\">
\t\t\t\t\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\">
\t\t\t\t\t        \t\t<div class=\"head_4\">
\t\t\t                          <p>Login</p>
\t\t\t                        </div>
\t\t\t                    </h4>
\t\t\t\t\t      \t</div>
\t                        <div class=\"modal-body\">
                                    
                        <form class=\"register\" method=\"post\" action=\"";
        // line 500
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_LoginUser");
        echo "\">
                               <div class=\"section\">
                                <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"username_id\" id=\"usr\" placeholder=\"Username\">
                                    <span class=\"error\">  </span>
                                    <label for=\"username_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                </label>
                               </div>
                               <div class=\"section\"> 
                                <label for=\"password\" class=\"field prepend-icon\">
                                    <input type=\"password\" name=\"password_id\" id=\"pass\" placeholder=\"Password\">
                                    <span class=\"error\">  </span>
                                    <label for=\"password_id\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                </label>
                             </div>
                           <!--  <div class=\"section\"> 
                                <label for=\"id\" class=\"field prepend-icon\"> !-->
                                 <!--   <input type=\"text\" name=\"id_\" id=\"numId\" placeholder=\"getId\" hidden> !-->
                                  <!--  <span class=\"error\">  </span>
                                    <label for=\"id_\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label> !-->
                                </label>
                             </div>
                             <div class=\"section\">
                                <div class=\"submit\"><input type=\"submit\"  value=\"Login\" name=\"submit\"  onclick=\"validationlogin()\"></div> <!-- onclick=\"myFunction()\" !-->
                             </div>
                             <div class=\"section\">
                                   <div class=\"submit\"><input type=\"reset\" value=\"Reset\" name=\"submit\" class=\"btn btn-warning btn-lg btn-block\" ></div>
                             </div>
                            <span class=\"error\" name=\"errorLogin\">  </span>
                             <ul class=\"new\">
\t\t\t\t\t\t\t\t<li class=\"new_left\"><p><a href=\"#\">Forgot Password ?</a></p></li>
\t\t\t\t\t\t\t\t<li class=\"new_right\"><p class=\"sign\">New here ?&nbsp;&nbsp;<a href=\"#\" data-toggle=\"modal\" data-target=\"#applyModal_1\">Sign Up</a></p></li>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t     </ul>
                           </form>
                        </div>
\t\t\t\t    </div>
\t\t\t\t </div>
\t\t\t\t</div>
                           ";
    }

    // line 550
    public function block_Register($context, array $blocks = array())
    {
        // line 551
        echo "\t\t\t\t<div class=\"modal fade\" id=\"applyModal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"applyModalLabel\" aria-hidden=\"true\">
\t\t\t\t  \t<div class=\"modal-dialog dialog_3\">
\t\t\t\t    \t<div class=\"modal-content\">
\t\t\t\t\t      \t<div class=\"modal-header\">
\t\t\t\t\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\"><div class=\"head_4\">
\t\t\t                         <p>Register</p>
\t\t\t                        </div></h4>
\t\t\t\t\t      \t</div>
\t\t\t\t\t<form name=\"row\" method=\"post\" class=\"register\" action=\"";
        // line 560
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_InscriptionUser");
        echo "\">
\t\t\t\t\t      \t      <!-- <div class=\"radio radio_1\">
\t\t\t\t\t\t\t\t\t<input id=\"leader\" type=\"radio\" value=\"1\">
\t\t\t\t\t\t\t\t\t<label for=\"leader\">Leader</label>
\t\t\t\t\t\t\t\t\t<input id=\"company\" type=\"radio\" value=\"2\">
\t\t\t\t\t\t\t\t\t<label for=\"company\">Company</label>
\t\t\t\t\t\t\t\t\t<input id=\"trainer\" type=\"radio\" value=\"3\">
\t\t\t\t\t\t\t\t\t<label for=\"trainer\">Trainer</label>
\t\t\t\t\t\t\t\t\t<input id=\"software developer\" type=\"radio\" value=\"4\">
\t\t\t\t\t\t\t\t\t<label for=\"software developer\">Software Developer</label>
\t\t\t\t\t\t\t\t\t<input id=\"product supplier\" type=\"radio\" value=\"5\">
\t\t\t\t\t\t\t\t\t<label for=\"product supplier\">Product Supplier</label>
\t\t\t\t\t\t\t\t\t<input id=\"consultant\" type=\"radio\" value=\"6\">
\t\t\t\t\t\t\t\t\t<label for=\"consultant\">Consultant</label>
\t\t\t\t\t\t\t\t\t<input id=\"employee\" type=\"radio\" value=\"7\">
\t\t\t\t\t\t\t\t\t<label for=\"employee\">Employee</label>
\t                                             </div> !-->
                                                    
                                   <div class=\"section\">
                                   <label for=\"nom\" class=\"field prepend-icon\">
                                       <input type=\"text\" name=\"nom_id\" id=\"nom\" placeholder=\"Nom\" required onkeyup=\"verif_text()\">
                                    <span class=\"error\">  </span>
                                    <label for=\"nom_id\" class=\"field-icon\">
                                    <i class=\"fa fa-users\"></i>
                                    </label>  
                                  </label>
                                   <div id=\"img_nom\"></div>
                               </div>
                                                    
                                   <div class=\"section\">
                                  <label for=\"prnm\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"prnm_id\" id=\"prenom\" placeholder=\"Prénom\">
                                    <span class=\"error\">  </span>
                                    <label for=\"prnm_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                               </div>    
                                                     
                                  <div class=\"section\">
                                  <label for=\"address\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"address_id\" id=\"addresse\" placeholder=\"Addresse\">
                                    <span class=\"error\">  </span>
                                    <label for=\"address_id\" class=\"field-icon\">
                                        <i class=\"fa fa-home\"></i>
                                    </label>
                                  </label>
                               </div>      
                                                      
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"email_id\" id=\"email\" placeholder=\"Email\">
                                    <span class=\"error\">  </span>
                                    <label for=\"email_id\" class=\"field-icon\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </label>
                                  </label>
                               </div>                   
                                     
                                  <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"mobile_number\" id=\"tel\" placeholder=\"Mobile Number\">
                                    <span class=\"error\">  </span>
                                    <label for=\"mobile_number\" class=\"field-icon\">
                                        <i class=\"fa fa-phone\"></i>
                                    </label>
                                  </label>
                               </div>                  
                                      
                                    <div class=\"section\">
                                  <label for=\"name\" class=\"field prepend-icon\">
                                     <select path=\"country\" id=\"country\" class=\"form-control input-sm\" name=\"statut\">
                                        <option value=\"null\">Selectionner Statut</option>
                                        <option value=\"Particulier\" name=\"Particulier\">Particulier</option>
                                        <option value=\"Entreprise\"  name=\"Entreprise\">Entreprise</option>
                                     </select>
                                     <label for=\"name\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                     </label>
                                  </label>
                               </div>
                                                    
\t                      
                                                    
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"login_id\" id=\"login\" placeholder=\"Login\">
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                  </label>
                               </div>                          
                                                      
                               <div class=\"section\">
                                 <label for=\"password\" class=\"field prepend-icon\">
                                    <input type=\"password\" name=\"password\" id=\"pwd\" placeholder=\"Password\">
                                    <span class=\"error\">  </span>
                                    <label for=\"password\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                 </label>
                               </div>
                               
                               <div class=\"radio radio_1\" id=\"sexe\">
                                  <h4>Choisir Votre Sexe SVP : </h4>  <br>
\t\t\t\t    <input id=\"homme\" type=\"radio\" value=\"Homme\" name=\"choixSexe\">
\t\t\t\t\t <label for=\"homme\" >Homme                                         
                                            <i class=\"fa fa-male\"></i>
                                          </label>
\t\t\t\t    <input id=\"femme\" type=\"radio\" value=\"Femme\" name=\"choixSexe\">
\t\t\t\t\t <label for=\"femme\" >Femme
                                            <i class=\"fa fa-female\"></i>
                                          </label>
\t                            </div>
                                                      
                               <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                      <input type=\"file\" name=\"foto_id\" id=\"login\" placeholder=\"Photo Profile\">
                                    <span class=\"error\">  </span>
                               
                                  </label>
                               </div>       
                                                      
                             <!--  <div class=\"section\">
                                  <label for=\"name\" class=\"field prepend-icon\">
                                    <select path=\"country\" id=\"country\" class=\"form-control input-sm\">
\t\t\t\t                        <option value=\"\">Select Country</option>
                                                        <option value=\"\">Tunisia</option>
\t\t\t\t                        <option value=\"\">Japan</option>
\t\t\t\t                        <option value=\"\">Kenya</option>
\t\t\t\t                        <option value=\"\">Dubai</option>
\t\t\t\t                        <option value=\"\">Italy</option>
\t\t\t\t                        <option value=\"\">Greece</option> 
\t\t\t\t                        <option value=\"\">Iceland</option> 
\t\t\t\t                        <option value=\"\">China</option> 
\t\t\t\t                        <option value=\"\">Doha</option> 
\t\t\t\t                        <option value=\"\">Irland</option> 
\t\t\t\t                        <option value=\"\">Srilanka</option> 
\t\t\t\t                        <option value=\"\">Russia</option> 
\t\t\t\t                        <option value=\"\">Hong Kong</option> 
\t\t\t\t                        <option value=\"\">Germany</option>
\t\t\t\t                        <option value=\"\">Canada</option>  
\t\t\t\t                        <option value=\"\">Mexico</option> 
\t\t\t\t                        <option value=\"\">Nepal</option>
\t\t\t\t                        <option value=\"\">Norway</option> 
\t\t\t\t                        <option value=\"\">Oman</option>
\t\t\t\t                        <option value=\"\">Pakistan</option>  
\t\t\t\t                        <option value=\"\">Kuwait</option> 
\t\t\t\t                        <option value=\"\">Indonesia</option>  
\t\t\t\t                        <option value=\"\">Spain</option>
\t\t\t\t                        <option value=\"\">Thailand</option>  
\t\t\t\t                        <option value=\"\">Saudi Arabia</option> 
\t\t\t\t                        <option value=\"\">Poland</option> 
\t\t\t\t                    </select>
                                    <label for=\"name\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                               </div> 
                              
                               <div class=\"section\">
                                  <label for=\"name\" class=\"field prepend-icon\">
                                      <select path=\"country\" id=\"country\" class=\"form-control input-sm\">
                                         <option value=\"\">Select City</option>
                                      </select>
                                      <label for=\"name\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                      </label>
                                  </label>
                               </div> !-->
                             
                               <div class=\"section\">
                                   <div class=\"submit\"><input type=\"submit\" value=\"Register\" name=\"submit\" onclick=\"validation()\" class=\"btn btn-info btn-lg btn-block\"  >   <!--onclick=\"myFunction()\"!-->
                                                      
                                   </div>
                               </div>
                                 <div class=\"section\">
                                   <div class=\"submit\"><input type=\"reset\" value=\"Reset\" name=\"submit\" class=\"btn btn-warning btn-lg btn-block\" ></div>
                               </div>
                               <div class=\"checkbox check_1\">
\t\t\t\t\t<input id=\"check1\" type=\"checkbox\" name=\"check\" value=\"check1\">
\t\t\t\t\t<label for=\"check1\">I agree to the Terms of Service and Privacy Policy</label>
\t\t\t\t</div>
                              
\t\t\t\t\t\t  </form>
                                        ";
    }

    // line 812
    public function block_tabs($context, array $blocks = array())
    {
        // line 813
        echo "    <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
        <ul class=\"nav navbar-nav nav_1\">
            ";
        // line 815
        $this->displayBlock('home', $context, $blocks);
        // line 818
        echo "         <!--   <li><a href=\"about.html\">About</a></li>
    \t\t<li><a href=\"classified.html\">Classified Ads</a></li>
\t\t\t<li><a href=\"classified_database.html\">Database</a></li> !-->
         <!--   <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">News<span class=\"caret\"></span></a>
               <ul class=\"dropdown-menu drop_menu\" role=\"menu\">
                <li><a href=\"news.html\">News</a></li> 
                <li><a href=\"shortcodes.html\">Shortcodes</a></li>
                <li><a href=\"faq.html\">Faq</a></li>
                <li><a href=\"career.html\">Career</a></li>
                <li><a href=\"terms.html\">Terms of use</a></li>
                <li><a href=\"sitemap.html\">Sitemap</a></li>
                <li><a href=\"testimonials.html\">Testimonials</a></li>
                <li><a href=\"grids.html\">Grids</a></li>
              </ul>
            </li> !-->
            <li><a href=\"news.html\">News</a></li>
            <li><a href=\"";
        // line 835
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_UserContactUs");
        echo "\">Contact Us</a></li>
         <!--   <li><a href=\"article.html\">Articles</a></li>!-->
          <!--  <li><a href=\"forum.html\">Forum</a></li>
            <li><a href=\"videos.html\">Video</a></li> !-->
         <!--   <li><a href=\"advertise.html\">Advertising</a></li>   !-->     
                ";
        // line 840
        $this->displayBlock('compteUser', $context, $blocks);
        // line 842
        echo "        </ul>
        <div class=\"help_line\"><div id=\"txtblnk\"><p>HELP LINE : (+216)54 559 441</p></div></div>
     </div><!-- /.navbar-collapse -->
     ";
    }

    // line 815
    public function block_home($context, array $blocks = array())
    {
        // line 816
        echo "            <li class=\"current_page\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_home");
        echo "\">Home</a></li>
            ";
    }

    // line 840
    public function block_compteUser($context, array $blocks = array())
    {
        // line 841
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:Acceuil:Acceuil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1899 => 841,  1896 => 840,  1889 => 816,  1886 => 815,  1879 => 842,  1877 => 840,  1869 => 835,  1850 => 818,  1848 => 815,  1844 => 813,  1841 => 812,  1650 => 560,  1639 => 551,  1636 => 550,  1586 => 500,  1571 => 487,  1568 => 486,  1560 => 477,  1554 => 474,  1550 => 475,  1548 => 474,  1545 => 473,  1542 => 472,  1535 => 479,  1533 => 477,  1530 => 476,  1527 => 475,  1525 => 472,  1520 => 469,  1517 => 468,  1497 => 1539,  1493 => 1538,  1477 => 1525,  1473 => 1524,  1469 => 1523,  1465 => 1522,  1461 => 1521,  1457 => 1520,  1452 => 1518,  1448 => 1517,  1444 => 1516,  1440 => 1515,  1419 => 1497,  1415 => 1496,  1364 => 1448,  1360 => 1447,  1337 => 1426,  1322 => 1413,  1307 => 1401,  1281 => 1378,  1277 => 1377,  1270 => 1373,  1266 => 1372,  1259 => 1368,  1255 => 1367,  1248 => 1363,  1244 => 1362,  1237 => 1358,  1233 => 1357,  1226 => 1353,  1222 => 1352,  1216 => 1349,  1212 => 1348,  1206 => 1345,  1202 => 1344,  1159 => 1303,  1108 => 1023,  1087 => 947,  1055 => 918,  1051 => 917,  1047 => 916,  1043 => 915,  1004 => 879,  998 => 876,  966 => 846,  964 => 812,  896 => 746,  894 => 550,  888 => 546,  886 => 486,  881 => 483,  879 => 468,  865 => 457,  857 => 453,  447 => 42,  444 => 41,  434 => 34,  427 => 30,  423 => 29,  417 => 26,  412 => 24,  408 => 23,  403 => 21,  399 => 20,  395 => 19,  390 => 17,  385 => 15,  381 => 14,  377 => 13,  372 => 11,  361 => 4,  356 => 448,  354 => 41,  351 => 40,  346 => 4,  339 => 1761,  330 => 1757,  326 => 1756,  302 => 1734,  293 => 1731,  289 => 1730,  267 => 1710,  258 => 1706,  254 => 1705,  231 => 1684,  222 => 1680,  218 => 1679,  195 => 1658,  186 => 1654,  182 => 1653,  160 => 1633,  151 => 1629,  147 => 1628,  122 => 1605,  113 => 1601,  109 => 1600,  87 => 1580,  78 => 1576,  74 => 1575,  52 => 1555,  50 => 453,  45 => 450,  43 => 4,  39 => 2,  33 => 1,);
    }
}
/* {% block html %}*/
/* <!DOCTYPE html>*/
/* <html pmbx_context="22E1306B-098B-488F-8314-D1167BC14038">*/
/* <head>{% block head %} {% block stylesheet %}                 */
/* <title>All For Deal</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, */
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />*/
/* <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* <link href="{{asset('css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />*/
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script src="{{asset('js/jquery.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* <!-- Custom Theme files -->*/
/* <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />*/
/* <!--webfont-->*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=Oswald:300,400,700')}}' rel='stylesheet' type='text/css'>*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=PT+Sans:400,700')}}' rel='stylesheet' type='text/css'>*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=Fugaz+One')}}' rel='stylesheet' type='text/css'>*/
/* <!-- Owl Stylesheets -->*/
/* <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>*/
/* <!----font-Awesome----->*/
/* <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> */
/* <!----font-Awesome----->*/
/* <!--light-box-files -->*/
/* <script src="{{asset('js/jquery.chocolat.js')}}"></script>*/
/* <link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8" />*/
/* <!--light-box-files -->*/
/* */
/* <!-- start of javascript file for usn/newsletterBundle !-->*/
/* <script src="{{ asset('bundles/usnnewsletter/js/main.js') }}"></script>*/
/* <!-- end of javascript file for usn/newsletterBundle !-->*/
/* */
/* */
/*   */
/*      {% endblock %}*/
/* <!----drop down----->*/
/* {% block javascripts %}*/
/* <script>*/
/* $(document).ready(function(){*/
/*     $(".dropdown").hover(            */
/*         function() {*/
/*             $('.dropdown-menu', this).stop( true, true ).slideDown("fast");*/
/*             $(this).toggleClass('open');        */
/*         },*/
/*         function() {*/
/*             $('.dropdown-menu', this).stop( true, true ).slideUp("fast");*/
/*             $(this).toggleClass('open');       */
/*         }*/
/*     );*/
/* });*/
/* </script>*/
/* */
/* <script type="text/javascript" charset="utf-8">*/
/* $(function() {*/
/* 	$('.gallery a').Chocolat();*/
/* });*/
/* </script>*/
/* */
/* <!-- Script Verification des Champs !-->*/
/* <script type="text/javascript">*/
/*        */
/*        // fonction de verification pour  CIN*/
/*        */
/*         function verif_cin()*/
/*         {*/
/*            */
/*             var x,x_cin;*/
/*             x=document.getElementById("cin").value;*/
/*           */
/*                 x_cin=x.toString();*/
/*             */
/*            */
/*             if(x_cin.length===8)*/
/*             {*/
/*                 //document.getElementById('p_cin').innerHTML="longeur CIN valide";*/
/*                document.getElementById('img_cin').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*                 //alert('longeur CIN valide');*/
/*             }*/
/*             else if (x_cin.length!==8)*/
/*             {*/
/*                 //document.getElementById('p_cin').innerHTML="longeur CIN invalide";*/
/*                 document.getElementById('img_cin').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*                // alert('longeur CIN invalide');*/
/*             }*/
/*           */
/*         }*/
/*         */
/*         // fonction de verification pour les champs de texte*/
/*         */
/*         function verif_text()*/
/*         {*/
/*             var v_nom,v_prenom,v_grade,v_addresse,v_login;*/
/*             */
/*             v_nom=document.getElementById("nom").value;*/
/*             v_prenom=document.getElementById("prenom").value;*/
/*             v_grade=document.getElementById("grade").value;*/
/*             v_addresse=document.getElementById("addresse").value;*/
/*             v_login=document.getElementById("loginEmp").value;*/
/*             */
/*             /// verification Nom*/
/*             if(v_nom==='')*/
/*             {*/
/*                // document.getElementById('img_nom').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*                 document.getElementById('nom').style("background-color=red");*/
/*             }*/
/*             else if(v_nom!=='')*/
/*             {*/
/*                // document.getElementById('img_nom').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*                 document.getElementById('nom').style("background-color=green");*/
/*             }*/
/*             */
/*             // verification prenom*/
/*             */
/*               if(v_prenom==='')*/
/*             {*/
/*                 document.getElementById('img_prenom').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*             }*/
/*             else if(v_prenom!=='')*/
/*             {*/
/*                 document.getElementById('img_prenom').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*             }*/
/*             */
/*             // verification grade*/
/*             */
/*               if(v_grade==='')*/
/*             {*/
/*                 document.getElementById('img_grade').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*             }*/
/*             else if(v_grade!=='')*/
/*             {*/
/*                 document.getElementById('img_grade').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*             }*/
/*             */
/*             // verification addresse*/
/*             */
/*               if(v_addresse==='')*/
/*             {*/
/*                 document.getElementById('img_addresse').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*             }*/
/*             else if(v_addresse!=='')*/
/*             {*/
/*                 document.getElementById('img_addresse').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*             }*/
/*             */
/*             // verification login employe*/
/*             */
/*             if(v_login==='')*/
/*             {*/
/*                 document.getElementById('img_login').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*             }*/
/*             else if(v_login!=='')*/
/*             {*/
/*                 document.getElementById('img_login').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*             }*/
/*         }*/
/*         */
/*         // fonction de verification pour le numero de telephone*/
/*         */
/*         function verif_tel()*/
/*         {*/
/*               var x,x_tel;*/
/*             x=document.getElementById("num_tel").value;*/
/*           */
/*                 x_tel=x.toString();*/
/*             */
/*            */
/*             if(x_tel.length===8)*/
/*             {*/
/*                 //document.getElementById('p_cin').innerHTML="longeur CIN valide";*/
/*                document.getElementById('img_num_tel').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*                 //alert('longeur CIN valide');*/
/*             }*/
/*             else if (x_tel.length!==8)*/
/*             {*/
/*                 //document.getElementById('p_cin').innerHTML="longeur CIN invalide";*/
/*                 document.getElementById('img_num_tel').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*                // alert('longeur CIN invalide');*/
/*             }*/
/*         }*/
/*         */
/*          // fonction pour la verification du mot de passe*/
/*          */
/*          function verif_pwd()*/
/*          {*/
/*              var pwd=document.getElementById("pwdEmp").value;*/
/*              x_pwd=pwd.toString();*/
/* */
/*              */
/*              if(x_pwd.length>7 && x_pwd.length<20)*/
/*              {*/
/*                   document.getElementById('img_pwd').innerHTML='<i class="fa fa-check-circle"></i>';*/
/*              }*/
/*              else*/
/*              {*/
/*                   document.getElementById('img_pwd').innerHTML='<i class="fa fa-exclamation-circle"></i>';*/
/*              }*/
/*          }*/
/*          */
/*       /*  function validation(){*/
/*             */
/*             var v_nom,v_prenom,v_add,v_email,v_tel,v_login,v_pwd;*/
/*             */
/*             v_nom=document.getElementById("nom").value;*/
/*             v_prenom=document.getElementById("prenom").value;*/
/*             v_add=document.getElementById("addresse").value;*/
/*             v_email=document.getElementById("email").value;*/
/*             v_tel=document.getElementById("tel").value;*/
/*             v_login=document.getElementById("login").value;*/
/*             v_pwd=document.getElementById("pwd").value;*/
/*             */
/*             if (v_nom==='' || v_prenom==='' || v_add===''|| v_email==='' || v_tel==='' || v_login==='' || v_pwd===''){*/
/*               alert("Inscription échoué , veillez renseigner les champs vides");  */
/*             }else{*/
/*               alert("Inscription a été éffectué avec succés Monsieur/Madame : "+v_nom+" , "+v_prenom+" , Bienvenu chez All For Deal");*/
/*             }*/
/*             */
/*          }*//* */
/*          */
/*         function validationlogin(){*/
/*           */
/*           */
/*       /*     <?php*/
/*              $usrLog;*/
/*              $usrPwd;*/
/*              */
/*              $servername="localhost";*/
/*              $dbname="allfordeal_symfony";*/
/*              $username="root";*/
/*              $password="";*/
/*              */
/*              $conn = new mysqli($servername, $username, $password, $dbname);*/
/*            // Check connection*/
/*            if ($conn->connect_error) {*/
/*               die("Connection failed: " . $conn->connect_error);*/
/*            } */
/* */
/* 	     var $sql="select * from utilisateur where login_user=".$usrLog."and pwd_user=".$usrPwd;*/
/* 	     ?>*//* */
/*                      */
/*          /*  var v_l,v_p;*/
/*            */
/*             v_l=document.getElementById("usr").value;*/
/*             v_p=document.getElementById("pass").value;*/
/*             if (v_l==='' || v_p===''){*/
/*               alert("Connexion échoué , veillez renseigner les champs vides");  */
/*             }else{*/
/*               alert("Connection a été éffectué avec succés Monsieur/Madame : "+v_l+" , Bienvenu chez All For Deal");*/
/*            } *//* */
/*              */
/*       }    */
/*          */
/*         */
/* </script>*/
/* <!-- Verification des champs du saisie avec jquery !-->*/
/* <script>*/
/* $(function(){*/
/*     */
/*     // vérification lors de l'inscription*/
/*     */
/*     // vérification nom*/
/*     */
/*      $("#nom").keyup(function() {*/
/*          */
/*          $("#nom").next(".error").hide().text("");*/
/*           */
/*          if(!$("#nom").val().match(/^[a-zA-Z]|\s+$/i)){*/
/*             if(arguments.length) {*/
/*             $("#nom").next(".error").show().text("Veuillez entrer un nom valide").css("color","red");       */
/*             $("#nom").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#nom").next(".error").hide().text("");*/
/*             $("#nom").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          });*/
/*        */
/*       // vérification prénom*/
/*       */
/*         $("#prenom").keyup(function() {*/
/*          */
/*          $("#prenom").next(".error").hide().text("");*/
/*           */
/*          if(!$("#prenom").val().match(/^[a-zA-Z]|\s+$/i)){*/
/*             if(arguments.length) {*/
/*             $("#prenom").next(".error").show().text("Veuillez entrer un prénom valide").css("color","red");       */
/*             $("#prenom").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#prenom").next(".error").hide().text("");*/
/*             $("#prenom").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          });*/
/*          */
/*          // vérification addresse*/
/*          */
/*         $("#addresse").keyup(function() {*/
/*          */
/*          $("#addresse").next(".error").hide().text("");*/
/*           */
/*          if(!$("#addresse").val().match(/^[a-zA-Z0-9]|\s+$/i)){*/
/*             if(arguments.length) {*/
/*             $("#addresse").next(".error").show().text("Veuillez entrer une addresse valide").css("color","red");       */
/*             $("#addresse").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#addresse").next(".error").hide().text("");*/
/*             $("#addresse").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          });     */
/*         */
/*         // vérification email*/
/*         */
/*        $("#email").keyup(function() {*/
/*          */
/*          $("#email").next(".error").hide().text("");*/
/*           */
/*          if(!$("#email").val().match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[a-zA-Z]{2,4}$/)){*/
/*             if(arguments.length) {*/
/*             $("#email").next(".error").show().text("Veuillez entrer une addresse email valide").css("color","red");       */
/*             $("#email").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#email").next(".error").hide().text("");*/
/*             $("#email").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          });  */
/*          */
/*          */
/*          // vérification numéro téléphone*/
/*          */
/*          $("#tel").keyup(function() {*/
/*          */
/*         // var x,x_tel;*/
/*         // x=document.getElementById("tel").value;*/
/*          //x_tel=integer.parseInt(x);*/
/*          */
/*          $("#tel").next(".error").hide().text("");*/
/*           */
/*           // {13,13} : exactement 13 caractères*/
/*          if(!$("#tel").val().match(/^[0-9-()+]{13,13}$/)){*/
/*             if(arguments.length) {*/
/*             $("#tel").next(".error").show().text("Veuillez entrer un numéro du téléphone valide : 13 chiffres exactement").css("color","red");       */
/*             $("#tel").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#tel").next(".error").hide().text("");*/
/*             $("#tel").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          });  */
/*           */
/*          // vérification Login*/
/*          */
/*          $("#login").keyup(function() {*/
/*          */
/*          $("#login").next(".error").hide().text("");*/
/*          */
/*         // {3,16} : min 5 , max 16 -> caractères*/
/*          if(!$("#login").val().match(/^[a-zA-Z0-9_-]{5,16}$/)){*/
/*             if(arguments.length) {*/
/*             $("#login").next(".error").show().text("Veuillez entrer un login valide : minimum 5 & maximum 16 caractères").css("color","red");       */
/*             $("#login").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#login").next(".error").hide().text("");*/
/*             $("#login").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          }); */
/*          */
/*          // vérification Password*/
/*          */
/*                   */
/*          $("#pwd").keyup(function() {*/
/*          */
/*          $("#pwd").next(".error").hide().text("");*/
/*          */
/*         // {3,16} : min 8 , max 15 -> caractères*/
/*          if(!$("#pwd").val().match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,15})$/)){*/
/*             if(arguments.length) {*/
/*             $("#pwd").next(".error").show().text("Veuillez entrer un password valide : minimum 8 & maximum 15 caractères ; with at least one upper case letter, one lower case letter, and one digit").css("color","red");       */
/*             $("#pwd").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#pwd").next(".error").hide().text("");*/
/*             $("#pwd").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          }); */
/*          */
/*        /// vérification lors de la connexion*/
/*        */
/*         // vérification Login*/
/*          */
/*          $("#usr").keyup(function() {*/
/*          */
/*          $("#usr").next(".error").hide().text("");*/
/*          */
/*         // {3,16} : min 5 , max 16 -> caractères*/
/*          if(!$("#usr").val().match(/^[a-zA-Z0-9_-]{2,16}$/)){*/
/*             if(arguments.length) {*/
/*             $("#usr").next(".error").show().text("Veuillez entrer un login valide").css("color","red");       */
/*             $("#usr").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#usr").next(".error").hide().text("");*/
/*             $("#usr").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          }); */
/*          */
/*          // vérification Password*/
/*          */
/*                   */
/*         $("#pass").keyup(function() {*/
/*          */
/*          $("#pass").next(".error").hide().text("");*/
/*          */
/*         // {3,16} : min 8 , max 15 -> caractères*/
/*          if(!$("#pass").val().match(/^[a-zA-Z0-9_-]{2,16}$/)){*/
/*             if(arguments.length) {*/
/*             $("#pass").next(".error").show().text("Veuillez entrer un password valide").css("color","red");       */
/*             $("#pass").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*             }*/
/*          }else{*/
/*             $("#pass").next(".error").hide().text("");*/
/*             $("#pass").css("background-color","#99CC00");*/
/*             }*/
/*           */
/*          });*/
/*          */
/*         */
/*    }); */
/*    */
/*  */
/*    */
/* </script>*/
/*    */
/* */
/* {% endblock %} */
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*          */
/*         {% block content %} */
/*         <div class="header">*/
/* 		<div class="container">*/
/* 			<div class="col-sm-3 logo">*/
/*                             <h1><a href="{{ path("pidev_all_for_deal_home") }}"><span class="highlight">A</span>ll<span class="highlight">F</span>or<span class="highlight">D</span>eal</a></h1>*/
/* 			</div>*/
/* 		    <div class="col-sm-9 logo_right">*/
/* 		       <div class="social">*/
/* 				  <a href="https://www.facebook.com" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>*/
/* 				  <a href="https://twitter.com/?lang=en" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>*/
/* 				  <a href="https://www.google.tn/" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>*/
/* 				  <a href="https://www.linkedin.com/nhome/" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>*/
/* 				  <a href="https://www.google.tn/" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>    */
/*                     </div>*/
/* 			<!-- script for menu -->*/
/*                         {% block fless %}*/
/* 			<span class="menu"></span>*/
/* 			<div class="top-menu">*/
/* 				<ul>*/
/*                                     {% block A %}*/
/* 					<li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal">Login</a></li>*/
/* 					 {% block logout %} {% endblock %}*/
/*                                     {% endblock %}    */
/*                                         <li><a href="{#{path("pidev_all_for_deal_InscriptionUser")}#}" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Register</a></li>*/
/* 				    {% block B %}	*/
/*                                         <li><a href="#" class="btn btn-default btn-default_2 pull-left uls-trigger" data-toggle="modal" data-target="#applyModal_2">Select Language</a></li>*/
/*                                     {% endblock %}   */
/*                                 </ul>*/
/* 			</div>*/
/*                         {% endblock %}*/
/* 			<div class="clearfix"> </div>*/
/* 			<!-- Modal -->*/
/*                            <!-- Start Login !-->*/
/*                            {% block Login %}*/
/* 				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">*/
/* 				  	<div class="modal-dialog modal-dialog_2">*/
/* 				    	<div class="modal-content">*/
/* 					      	<div class="modal-header">*/
/* 					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/* 					        	<h4 class="modal-title" id="myModalLabel">*/
/* 					        		<div class="head_4">*/
/* 			                          <p>Login</p>*/
/* 			                        </div>*/
/* 			                    </h4>*/
/* 					      	</div>*/
/* 	                        <div class="modal-body">*/
/*                                     */
/*                         <form class="register" method="post" action="{{ path("pidev_all_for_deal_LoginUser") }}">*/
/*                                <div class="section">*/
/*                                 <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="username_id" id="usr" placeholder="Username">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="username_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                                </div>*/
/*                                <div class="section"> */
/*                                 <label for="password" class="field prepend-icon">*/
/*                                     <input type="password" name="password_id" id="pass" placeholder="Password">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="password_id" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                              </div>*/
/*                            <!--  <div class="section"> */
/*                                 <label for="id" class="field prepend-icon"> !-->*/
/*                                  <!--   <input type="text" name="id_" id="numId" placeholder="getId" hidden> !-->*/
/*                                   <!--  <span class="error">  </span>*/
/*                                     <label for="id_" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label> !-->*/
/*                                 </label>*/
/*                              </div>*/
/*                              <div class="section">*/
/*                                 <div class="submit"><input type="submit"  value="Login" name="submit"  onclick="validationlogin()"></div> <!-- onclick="myFunction()" !-->*/
/*                              </div>*/
/*                              <div class="section">*/
/*                                    <div class="submit"><input type="reset" value="Reset" name="submit" class="btn btn-warning btn-lg btn-block" ></div>*/
/*                              </div>*/
/*                             <span class="error" name="errorLogin">  </span>*/
/*                              <ul class="new">*/
/* 								<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>*/
/* 								<li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>*/
/* 								<div class="clearfix"></div>*/
/* 						     </ul>*/
/*                            </form>*/
/*                         </div>*/
/* 				    </div>*/
/* 				 </div>*/
/* 				</div>*/
/*                            {% endblock %}*/
/*                            <!-- End Login !-->*/
/*                            */
/* 				 <!-- Modal -->*/
/*                <!-- Start Registration !-->     */
/*                                  {% block Register %}*/
/* 				<div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">*/
/* 				  	<div class="modal-dialog dialog_3">*/
/* 				    	<div class="modal-content">*/
/* 					      	<div class="modal-header">*/
/* 					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/* 					        	<h4 class="modal-title" id="myModalLabel"><div class="head_4">*/
/* 			                         <p>Register</p>*/
/* 			                        </div></h4>*/
/* 					      	</div>*/
/* 					<form name="row" method="post" class="register" action="{{ path("pidev_all_for_deal_InscriptionUser") }}">*/
/* 					      	      <!-- <div class="radio radio_1">*/
/* 									<input id="leader" type="radio" value="1">*/
/* 									<label for="leader">Leader</label>*/
/* 									<input id="company" type="radio" value="2">*/
/* 									<label for="company">Company</label>*/
/* 									<input id="trainer" type="radio" value="3">*/
/* 									<label for="trainer">Trainer</label>*/
/* 									<input id="software developer" type="radio" value="4">*/
/* 									<label for="software developer">Software Developer</label>*/
/* 									<input id="product supplier" type="radio" value="5">*/
/* 									<label for="product supplier">Product Supplier</label>*/
/* 									<input id="consultant" type="radio" value="6">*/
/* 									<label for="consultant">Consultant</label>*/
/* 									<input id="employee" type="radio" value="7">*/
/* 									<label for="employee">Employee</label>*/
/* 	                                             </div> !-->*/
/*                                                     */
/*                                    <div class="section">*/
/*                                    <label for="nom" class="field prepend-icon">*/
/*                                        <input type="text" name="nom_id" id="nom" placeholder="Nom" required onkeyup="verif_text()">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="nom_id" class="field-icon">*/
/*                                     <i class="fa fa-users"></i>*/
/*                                     </label>  */
/*                                   </label>*/
/*                                    <div id="img_nom"></div>*/
/*                                </div>*/
/*                                                     */
/*                                    <div class="section">*/
/*                                   <label for="prnm" class="field prepend-icon">*/
/*                                     <input type="text" name="prnm_id" id="prenom" placeholder="Prénom">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="prnm_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>    */
/*                                                      */
/*                                   <div class="section">*/
/*                                   <label for="address" class="field prepend-icon">*/
/*                                     <input type="text" name="address_id" id="addresse" placeholder="Addresse">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="address_id" class="field-icon">*/
/*                                         <i class="fa fa-home"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>      */
/*                                                       */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="email_id" id="email" placeholder="Email">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="email_id" class="field-icon">*/
/*                                         <i class="fa fa-envelope"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>                   */
/*                                      */
/*                                   <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="mobile_number" id="tel" placeholder="Mobile Number">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="mobile_number" class="field-icon">*/
/*                                         <i class="fa fa-phone"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>                  */
/*                                       */
/*                                     <div class="section">*/
/*                                   <label for="name" class="field prepend-icon">*/
/*                                      <select path="country" id="country" class="form-control input-sm" name="statut">*/
/*                                         <option value="null">Selectionner Statut</option>*/
/*                                         <option value="Particulier" name="Particulier">Particulier</option>*/
/*                                         <option value="Entreprise"  name="Entreprise">Entreprise</option>*/
/*                                      </select>*/
/*                                      <label for="name" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                      </label>*/
/*                                   </label>*/
/*                                </div>*/
/*                                                     */
/* 	                      */
/*                                                     */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="login_id" id="login" placeholder="Login">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>                          */
/*                                                       */
/*                                <div class="section">*/
/*                                  <label for="password" class="field prepend-icon">*/
/*                                     <input type="password" name="password" id="pwd" placeholder="Password">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="password" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                  </label>*/
/*                                </div>*/
/*                                */
/*                                <div class="radio radio_1" id="sexe">*/
/*                                   <h4>Choisir Votre Sexe SVP : </h4>  <br>*/
/* 				    <input id="homme" type="radio" value="Homme" name="choixSexe">*/
/* 					 <label for="homme" >Homme                                         */
/*                                             <i class="fa fa-male"></i>*/
/*                                           </label>*/
/* 				    <input id="femme" type="radio" value="Femme" name="choixSexe">*/
/* 					 <label for="femme" >Femme*/
/*                                             <i class="fa fa-female"></i>*/
/*                                           </label>*/
/* 	                            </div>*/
/*                                                       */
/*                                <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                       <input type="file" name="foto_id" id="login" placeholder="Photo Profile">*/
/*                                     <span class="error">  </span>*/
/*                                */
/*                                   </label>*/
/*                                </div>       */
/*                                                       */
/*                              <!--  <div class="section">*/
/*                                   <label for="name" class="field prepend-icon">*/
/*                                     <select path="country" id="country" class="form-control input-sm">*/
/* 				                        <option value="">Select Country</option>*/
/*                                                         <option value="">Tunisia</option>*/
/* 				                        <option value="">Japan</option>*/
/* 				                        <option value="">Kenya</option>*/
/* 				                        <option value="">Dubai</option>*/
/* 				                        <option value="">Italy</option>*/
/* 				                        <option value="">Greece</option> */
/* 				                        <option value="">Iceland</option> */
/* 				                        <option value="">China</option> */
/* 				                        <option value="">Doha</option> */
/* 				                        <option value="">Irland</option> */
/* 				                        <option value="">Srilanka</option> */
/* 				                        <option value="">Russia</option> */
/* 				                        <option value="">Hong Kong</option> */
/* 				                        <option value="">Germany</option>*/
/* 				                        <option value="">Canada</option>  */
/* 				                        <option value="">Mexico</option> */
/* 				                        <option value="">Nepal</option>*/
/* 				                        <option value="">Norway</option> */
/* 				                        <option value="">Oman</option>*/
/* 				                        <option value="">Pakistan</option>  */
/* 				                        <option value="">Kuwait</option> */
/* 				                        <option value="">Indonesia</option>  */
/* 				                        <option value="">Spain</option>*/
/* 				                        <option value="">Thailand</option>  */
/* 				                        <option value="">Saudi Arabia</option> */
/* 				                        <option value="">Poland</option> */
/* 				                    </select>*/
/*                                     <label for="name" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div> */
/*                               */
/*                                <div class="section">*/
/*                                   <label for="name" class="field prepend-icon">*/
/*                                       <select path="country" id="country" class="form-control input-sm">*/
/*                                          <option value="">Select City</option>*/
/*                                       </select>*/
/*                                       <label for="name" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                       </label>*/
/*                                   </label>*/
/*                                </div> !-->*/
/*                              */
/*                                <div class="section">*/
/*                                    <div class="submit"><input type="submit" value="Register" name="submit" onclick="validation()" class="btn btn-info btn-lg btn-block"  >   <!--onclick="myFunction()"!-->*/
/*                                                       */
/*                                    </div>*/
/*                                </div>*/
/*                                  <div class="section">*/
/*                                    <div class="submit"><input type="reset" value="Reset" name="submit" class="btn btn-warning btn-lg btn-block" ></div>*/
/*                                </div>*/
/*                                <div class="checkbox check_1">*/
/* 					<input id="check1" type="checkbox" name="check" value="check1">*/
/* 					<label for="check1">I agree to the Terms of Service and Privacy Policy</label>*/
/* 				</div>*/
/*                               */
/* 						  </form>*/
/*                                         {% endblock %}     */
/*         */
/*                 <!-- End Registration !-->    */
/*                      </div>*/
/* 		         </div>*/
/* 		     </div>*/
/* 			 <div class="modal fade" id="applyModal_2" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">*/
/* 				<div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 						<div class="modal-header">*/
/* 							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">*/
/* 								&times;</button>*/
/* 							<h4 class="modal-title" id="myModalLabel">*/
/* 								Please Choose Your Location</h4>*/
/* 						</div>*/
/* 						<div class="modal-body">*/
/* 							 <form class="form-horizontal" role="form">*/
/* 								<div class="form-group">*/
/* 									<select id="basic2" class="show-tick form-control" multiple>*/
/* 										<optgroup label="Popular Cities">*/
/* 											<option selected style="display:none;color:#eee;">All India</option>*/
/* 											<option>Ahmedabad</option>*/
/* 											<option>Bangalore</option>*/
/* 											<option>Chandigarh</option>*/
/* 											<option>Chennai</option>*/
/* 											<option>Coimbatore</option>*/
/* 											<option>Delhi</option>*/
/* 											<option>Gurgaon</option>*/
/* 											<option>Hyderabad</option>*/
/* 											<option>Jaipur</option>*/
/* 											<option>Kochi</option>*/
/* 											<option>Kolkata</option>*/
/* 											<option>Lucknow</option>*/
/* 											<option>Mumbai</option>*/
/* 											<option>Noida</option>*/
/* 										</optgroup>*/
/* 											<optgroup label="More Cities">*/
/* 											<optgroup label="Andhra Pradesh">*/
/* 											<option>Anantapur</option>*/
/* 											<option>Chinnamandem</option>*/
/* 											<option>Gudur</option><option>Guntur</option><option>Jangareddy Gudem</option><option>Kakinada</option><option>Kurnool</option><option>Martur</option><option>Parvathipuram</option><option>Rajahmundry</option><option>Tenali</option><option>Tirupati</option><option>Vijayawada</option><option>Vizag</option><option>Vizianagaram</option></optgroup><optgroup label="Arunachal Pradesh"><option>Tawang</option><option>Ziro</option></optgroup><optgroup label="Assam"><option>Dibrugarh</option><option>Guwahati</option><option>Jorhat</option><option>Silchar</option><option>Tinsukia</option></optgroup><optgroup label="Bihar"><option>Hajipur</option><option>Patna</option></optgroup><optgroup label="Chhattisgarh"><option>Bhilai</option><option>Bilaspur</option><option>Champa</option><option>Dhamtari</option><option>Durg</option><option>Jagdalpur</option><option>Kawardha</option><option>Kondagaon</option><option>Korba</option><option>Raigarh</option><option>Raipur</option><option>Tilda Neora</option></optgroup><optgroup label="Croatia"><option>Dubrovnik</option></optgroup><optgroup label="Goa"><option>Goa</option></optgroup><optgroup label="Gujarat"><option>Adipur</option><option>Ahmedabad</option><option>Anand</option><option>Ankleshwar</option><option>Bharuch</option><option>Bhavnagar</option><option>Daman</option><option>Gandhidham</option><option>Gandhinagar</option><option>Himmatnagar</option><option>Idar</option><option>Jamnagar</option><option>Jetpur</option><option>Junagadh</option><option>Kutch</option><option>Nadiad</option><option>Navsari</option><option value="PALN">Palanpur</option><option value="PATA">Patan</option><option value="RAJK">Rajkot</option><option value="SANA">Sanand</option><option value="SILV">Silvassa</option><option value="SURT">Surat</option><option value="VAD">Vadodara</option><option value="VLSD">Valsad</option><option value="VAPI">Vapi</option></optgroup><optgroup label="Haryana"><option value="AMB">Ambala</option><option value="DHRA">Dharuhera</option><option value="FARI">Faridabad</option><option value="HISR">Hisar</option><option value="JHAJ">Jhajjar</option><option value="JIND">Jind</option><option value="KAIT">Kaithal</option><option value="KARN">Karnal</option><option value="KUND">Kundli</option><option value="KURU">Kurukshetra</option><option value="PNCH">Panchkula</option><option value="PAN">Panipat</option><option value="REWA">Rewari</option><option value="ROH">Rohtak</option><option value="SISA">Sirsa</option><option value="RAIH">Sonipat</option><option value="YAMU">Yamunanagar</option></optgroup><optgroup label="Himachal Pradesh"><option value="BADD">Baddi</option><option value="DMSL">Dharamsala</option><option value="HAMI">Hamirpur (HP)</option><option value="KANG">Kangra</option><option value="KULU">Kullu</option><option value="MANA">Manali</option><option value="SMLA">Shimla</option><option value="SCO">Solan</option></optgroup><optgroup label="Jammu and Kashmir"><option value="JAMM">Jammu</option><option value="KATH">Kathua</option><option value="KATR">Katra</option><option value="LEHA">Ladakh</option></optgroup><optgroup label="Jharkhand"><option value="BOKA">Bokaro</option><option value="DOGH">Deoghar</option><option value="DHAN">Dhanbad(Jharkhand)</option><option value="JMDP">Jamshedpur</option><option value="RANC">Ranchi</option></optgroup><optgroup label="Karnataka"><option value="BELG">Belgaum</option><option value="BANG">Bengaluru</option><option value="BIDR">Bidar</option><option value="COOR">Coorg</option><option value="DAVA">Davangere</option><option value="GULB">Gulbarga</option><option value="HUBL">Hubli</option><option value="KWAR">Karwar</option><option value="MLR">Mangalore</option><option value="MANI">Manipal</option><option value="MYS">Mysore</option><option value="TUMK">Tumkur</option><option value="UDUP">Udupi</option></optgroup><optgroup label="Kerala"><option value="99">Alappuzha</option><option value="ANHL">Anchal</option><option value="ANGA">Angamaly</option><option value="ERNK">Ernakulam</option><option value="KANN">Kannur</option><option value="KARG">Karunagapally</option><option value="KOCH">Kochi</option><option value="KOLM">Kollam</option><option value="KTYM">Kottayam</option><option value="MVLR">Mavellikara</option><option value="THAL">Thalayolaparambu</option><option value="THSR">Thrissur</option><option value="TRIV">Trivandrum</option></optgroup><optgroup label="Madhya Pradesh"><option value="BLGT">Balaghat</option><option value="BETU">Betul</option><option value="BHOP">Bhopal</option><option value="CHIN">Chhindwara</option><option value="DEWAS">Dewas</option><option value="GWAL">Gwalior</option><option value="HRDA">Harda</option><option value="IND">Indore</option><option value="JABL">Jabalpur</option><option value="KHDW">Khandwa</option><option value="NMCH">Neemuch</option><option value="RATL">Ratlam</option><option value="SAMP">Sagar</option><option value="SARN">Sarni</option><option value="SEHO">Sehore</option><option value="SEON">Seoni</option><option value="SHIV">Shivpuri</option><option value="UJJN">Ujjain</option></optgroup><optgroup label="Maharashtra"><option value="AHMED">Ahmednagar</option><option value="AKOL">Akola</option><option value="ALBG">Alibaug</option><option value="AMRA">Amravati</option><option value="AURA">Aurangabad</option><option value="BARA">Baramati</option><option value="BEED">Beed</option><option value="BHIW">Bhiwandi</option><option value="BOIS">Boisar</option><option value="BULD">Buldana</option><option value="CHAN">Chandrapur</option><option value="DHLE">Dhule</option><option value="DHUL">Dhulia</option><option value="INDA">Indapur</option><option value="JALG">Jalgaon</option><option value="KHED">Khed</option><option value="KHOP">Khopoli</option><option value="KOLH">Kolhapur</option><option value="LAT">Latur</option><option value="LAVA">Lavasa</option><option value="LNVL">Lonavala</option><option value="MHAD">Mahad</option><option value="MALE">Malegaon</option><option value="MUMBAI">Mumbai</option><option value="NAGP">Nagpur</option><option value="NAND">Nanded</option><option value="NASK">Nashik</option><option value="PALG">Palghar</option><option value="PANC">Panchgani</option><option value="PARB">Parbhani</option><option value="PEN">Pen</option><option value="PHAL">Phaltan</option><option value="PIMP">Pimpri</option><option value="PUNE">Pune</option><option value="RAI">Raigad</option><option value="SANG">Sangli</option><option value="SATA">Satara</option><option value="SOLA">Solapur</option><option value="TMB">Tembhode</option><option value="UDGR">Udgir</option><option value="WARD">Wardha</option></optgroup><optgroup label="Meghalaya"><option value="RNG">Rongjeng</option><option value="SHLG">Shillong</option></optgroup><optgroup label="Nagaland"><option value="DMPR">Dimapur</option></optgroup><optgroup label="NCR"><option value="NCR">National Capital Region (NCR)</option></optgroup><optgroup label="Orissa"><option value="BLSR">Balasore</option><option value="BHUB">Bhubaneshwar</option><option value="PURI">Puri</option><option value="SAMB">Sambalpur</option></optgroup><optgroup label="Punjab"><option value="ABOR">Abohar</option><option value="AHMG">Ahmedgarh</option><option value="AMRI">Amritsar</option><option value="BNGA">Banga</option><option value="BAR">Barnala</option><option value="BHAT">Bathinda</option><option value="CHD">Chandigarh</option><option value="HOSH">Hoshiarpur</option><option value="JALA">Jalandhar</option><option value="KHAN">Khanna</option><option value="KOTK">Kotkapura</option><option value="LUDH">Ludhiana</option><option value="MNSA">Mansa</option><option value="MOGA">Moga</option><option value="MOHL">Mohali</option><option value="NAVN">Nawanshahr</option><option value="PATH">Pathankot</option><option value="PATI">Patiala</option><option value="PATR">Patran</option><option value="RUPN">Rupnagar</option><option value="SANR">Sangrur</option><option value="ZIRK">Zirakpur</option></optgroup><optgroup label="Rajasthan"><option value="ABRD">Abu Road</option><option value="AJMER">Ajmer</option><option value="ALSR">Alsisar (Rajasthan)</option><option value="ALWR">Alwar</option><option value="BANS">Banswara</option><option value="BEAW">Beawar</option><option value="BHIL">Bhilwara</option><option value="BHWD">Bhiwadi</option><option value="BIK">Bikaner</option><option value="DAUS">Dausa</option><option value="JAIP">Jaipur</option><option value="JSMR">Jaisalmer</option><option value="JODH">Jodhpur</option><option value="KISH">Kishangarh</option><option value="KOTA">Kota</option><option value="NEEM">Neemrana</option><option value="SIKR">Sikar</option><option value="SRIG">Sri Ganganagar</option><option value="UDAI">Udaipur</option></optgroup><optgroup label="Singapore"><option value="SING">Singapore</option></optgroup><optgroup label="Tamil Nadu"><option value="ARIY">Ariyalur</option><option value="ARNI">Arni</option><option value="ARUP">Aruppukottai</option><option value="CHEN">Chennai</option><option value="COIM">Coimbatore</option><option value="CUDD">Cuddalore</option><option value="DHAR">Dharapuram</option><option value="DMPI">Dharmapuri</option><option value="DIND">Dindigul</option><option value="EROD">Erode</option><option value="KNPM">Kanchipuram</option><option value="KUMB">Kumbakonam</option><option value="MADU">Madurai</option><option value="MTPM">Mettuppalayam</option><option value="OOTY">Ooty</option><option value="POND">Pondicherry</option><option value="PUDH">Pudhukottai</option><option value="SALM">Salem</option><option value="SIV">Sivakasi</option><option value="TAJO">Tanjore</option><option value="TENK">Tenkasi</option><option value="TIRV">Tirunelveli</option><option value="TIRP">Tirupur</option><option value="TRIC">Trichy</option><option value="VELL">Vellore</option></optgroup><optgroup label="Telangana"><option value="ADIL">Adilabad</option><option value="AMAN">Amangal</option><option value="HYD">Hyderabad</option><option value="KARIM">Karimnagar</option><option value="KHAM">Khammam</option><option value="MRGD">Miryalaguda</option><option value="NIZA">Nizamabad</option><option value="PEDA">Peddapalli</option><option value="POCH">Pochampally</option><option value="SDDP">Siddipet</option><option value="SURY">Suryapet</option><option value="UPPA">Uppal</option><option value="WAR">Warangal</option></optgroup><optgroup label="Tripura "><option value="AGAR">Agartala</option></optgroup><optgroup label="Uttar Pradesh"><option value="AGRA">Agra</option><option value="ALI">Aligarh</option><option value="ALLH">Allahabad</option><option value="BARE">Bareilly</option><option value="BIJ">Bijnor</option><option value="GHAR">Ghazipur</option><option value="GRKP">Gorakhpur</option><option value="KANP">Kanpur</option><option value="LUCK">Lucknow</option><option value="MATH">Mathura</option><option value="MERT">Meerut</option><option value="MORA">Moradabad</option><option value="MUZ">Muzaffarnagar</option><option value="RENU">Renukoot</option><option value="SAHA">Saharanpur</option><option value="VAR">Varanasi</option></optgroup><optgroup label="Uttarakhand"><option value="DEH">Dehradun</option><option value="HRDR">Haridwar</option><option value="MSS">Mussoorie</option><option value="NAIN">Nainital</option><option value="RAMN">Ramnagar</option><option value="RKES">Rishikesh</option><option value="ROOR">Roorkee</option><option value="RUDP">Rudrapur</option></optgroup><optgroup label="West Bengal"><option value="ASANSOL">Asansol</option><option value="BEHA">Berhampore</option><option value="BLPR">Bolpur</option><option value="BURD">Burdwan</option><option value="COBE">Cooch Behar</option><option value="DARJ">Darjeeling</option><option value="DURGA">Durgapur</option><option value="HALD">Haldia</option><option value="HOOG">Hooghly</option><option value="HWRH">Howrah</option><option value="JPG">Jalpaiguri</option><option value="KOLK">Kolkata</option><option value="RANA">Ranaghat</option><option value="SILI">Siliguri</option></optgroup>*/
/* 										</optgroup>*/
/* 									</select>*/
/* 								</div>*/
/* 							  </form>    */
/* 						</div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  <div class="clearfix"></div>*/
/* 		 </div>*/
/* 	   </div>*/
/* </div>*/
/* <nav class="navbar nav_bottom" role="navigation">*/
/*  <div class="container">*/
/*  <!-- Brand and toggle get grouped for better mobile display -->*/
/*    <div class="navbar-header nav_2">*/
/*       <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#"></a>*/
/*    </div> */
/*    <!-- Collect the nav links, forms, and other content for toggling -->*/
/*      {% block tabs %}*/
/*     <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">*/
/*         <ul class="nav navbar-nav nav_1">*/
/*             {% block home %}*/
/*             <li class="current_page"><a href="{{ path("pidev_all_for_deal_home") }}">Home</a></li>*/
/*             {% endblock %}*/
/*          <!--   <li><a href="about.html">About</a></li>*/
/*     		<li><a href="classified.html">Classified Ads</a></li>*/
/* 			<li><a href="classified_database.html">Database</a></li> !-->*/
/*          <!--   <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<span class="caret"></span></a>*/
/*                <ul class="dropdown-menu drop_menu" role="menu">*/
/*                 <li><a href="news.html">News</a></li> */
/*                 <li><a href="shortcodes.html">Shortcodes</a></li>*/
/*                 <li><a href="faq.html">Faq</a></li>*/
/*                 <li><a href="career.html">Career</a></li>*/
/*                 <li><a href="terms.html">Terms of use</a></li>*/
/*                 <li><a href="sitemap.html">Sitemap</a></li>*/
/*                 <li><a href="testimonials.html">Testimonials</a></li>*/
/*                 <li><a href="grids.html">Grids</a></li>*/
/*               </ul>*/
/*             </li> !-->*/
/*             <li><a href="news.html">News</a></li>*/
/*             <li><a href="{{ path("pidev_all_for_deal_UserContactUs") }}">Contact Us</a></li>*/
/*          <!--   <li><a href="article.html">Articles</a></li>!-->*/
/*           <!--  <li><a href="forum.html">Forum</a></li>*/
/*             <li><a href="videos.html">Video</a></li> !-->*/
/*          <!--   <li><a href="advertise.html">Advertising</a></li>   !-->     */
/*                 {% block compteUser %}*/
/*                    {% endblock %}*/
/*         </ul>*/
/*         <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+216)54 559 441</p></div></div>*/
/*      </div><!-- /.navbar-collapse -->*/
/*      {% endblock %}*/
/*    </div>*/
/* </nav>*/
/* <script type="text/javascript">*/
/* 		$(function() {*/
/* 		blinkeffect('#txtblnk');*/
/* 		})*/
/* 		function blinkeffect(selector) {*/
/* 		$(selector).fadeOut('slow', function() {*/
/* 		$(this).fadeIn('slow', function() {*/
/* 		blinkeffect(this);*/
/* 		});*/
/* 		});*/
/* 		}*/
/* </script>*/
/* <!-- End Of Headerrrr !-->*/
/* <div class="demo">*/
/*   <marquee behavior="scroll" style="background:#F3DB28; color:#000;" direction="left" onmouseover="this.stop();" onmouseout="this.start();">				*/
/*    Bienvenu à All For Deal*/
/*   </marquee> 	 */
/* </div>*/
/* <section class="slider">*/
/*   <div class="flexslider">*/
/* 	<ul class="slides">*/
/* 		<li clearfix>*/
/* 			<div class="col-sm-6 slider_right">*/
/* 			  <div class="col-sm-12 slider_caption">*/
/* 				<h3>Socialnetwork</h3>*/
/* 				<h4>Lorem Ipsum</h4>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="col-sm-6"><img src="{{asset('images/4.png')}}" alt=""/></div>*/
/* 		</li>*/
/* 		<li clearfix>*/
/* 			<div class="col-sm-6"><img src="{{asset('images/9.png')}}" alt=""/></div>*/
/* 			<div class="col-sm-6 slider_left">*/
/* 			  <div class="col-sm-12 slider_caption1">*/
/* 				<h3>Entrepreneurs</h3>*/
/* 				<h4>Lorem Ipsum</h4>*/
/* 			  </div>*/
/* 			</div>*/
/* 		</li>*/
/* 	</ul>*/
/*   </div>*/
/*   <div class="clearfix"> </div>*/
/* </section>*/
/* <div class="box_1">*/
/*   <div class="container">*/
/*     <div class="box-info clearfix ">*/
/*       <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*        <div class="heading column heading-v1 separator_align_right">*/
/*          <div class="heading-inner">*/
/*              <small class="subheading">Bienvenu à All For Deal</small>*/
/*              <h2>A propos de nous</h2>*/
/*          </div>   */
/*       </div>   */
/*     </div>  */
/*     <div class="col-lg-9 col-md-9 right_grid">*/
/*       <h3>Qu'est ce que All For Deal ? </h3>*/
/*       <h4>All For Deal , Deal pour tous , Deal pour Vous , Best of Deals pour vous</h4>*/
/*       <p>All For Deal , a été lancé 2 ans en arrière , c'était en 2014 , c'est un site qui vous aident à trouver facilement ce que vous voulez achetez,ce que vous voulez offrir..c'est facile...juste etre inscrit à nous,et vous commencez à surfez chez nous.</p>*/
/*     </div>  */
/*     <div class="clearfix"> </div> */
/*    </div>*/
/*   </div> */
/* </div>*/
/* <div class="box_2">*/
/*   <div class="container">*/
/* 	  <div class="course_demo">*/
/*         <ul id="flexiselDemo3">	*/
/* 		  <li><img src="{{asset('images/l1.png')}}" class="img-responsive" alt=""/></li>*/
/* 		  <li><img src="{{asset('images/l2.png')}}" class="img-responsive" alt=""/></li> */
/* 		  <li><img src="{{asset('images/l3.png')}}" class="img-responsive" alt=""/></li> */
/* 		  <li><img src="{{asset('images/l4.png')}}" class="img-responsive" alt=""/></li> */
/* 		 </ul>*/
/* 		<script type="text/javascript">*/
/* 			$(window).load(function() {*/
/* 				$("#flexiselDemo3").flexisel({*/
/* 					visibleItems: 4,*/
/* 					animationSpeed: 1000,*/
/* 					autoPlay: true,*/
/* 					autoPlaySpeed: 3000,    		*/
/* 					pauseOnHover: true,*/
/* 					enableResponsiveBreakpoints: true,*/
/* 			    	responsiveBreakpoints: { */
/* 			    		portrait: { */
/* 			    			changePoint:480,*/
/* 			    			visibleItems: 1*/
/* 			    		}, */
/* 			    		landscape: { */
/* 			    			changePoint:640,*/
/* 			    			visibleItems: 2*/
/* 			    		},*/
/* 			    		tablet: { */
/* 			    			changePoint:768,*/
/* 			    			visibleItems: 2*/
/* 			    		}*/
/* 			    	}*/
/* 			    });*/
/* 			    */
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>*/
/*    </div>*/
/*   </div>*/
/* </div>*/
/* <!--<div class="box_3 clearfix">*/
/*   <div class="container">*/
/* 	<div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*        <div class="heading column heading-v1 separator_align_right">*/
/*          <div class="heading-inner">*/
/*              <small class="subheading"> introducing</small>*/
/*              <h2>New Classifieds</h2>*/
/*          </div>   */
/*       </div>   */
/*     </div>  */
/* <div class="col-md-9 row-inner">*/
/* <div class="col-md-12 row-inner_1">*/
/* 	<div class="col-md-6 col-inner">*/
/* 		<ul class="classi_1">*/
/* 			<li class="classi_1-left"><img src="{#{asset('images/pic1.jpg')}}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right">*/
/* 				<h3><a href="index_detail.html">vulputate</a></h3>*/
/* 				<p>Curabitur quisque morbi aspernatu</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 		<ul class="classi_1">*/
/* 			<li class="classi_1-left"><img src="{{asset('images/pic2.jpg')}}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right">*/
/* 				<h3><a href="index_detail.html">Ligula</a></h3>*/
/* 				<p>Et ante eget, cras risus et hymena</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 		<ul class="classi_1">*/
/* 			<li class="classi_1-left"><img src="{{asset('images/pic3.jpg')}}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right">*/
/* 				<h3><a href="index_detail.html">Condimentum</a></h3>*/
/* 				<p>cupidatat condimentum.</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 		<ul class="classi_1 classi_2">*/
/* 			<li class="classi_1-left"><img src="{{asset('images/pic4.jpg')}}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right">*/
/* 				<h3><a href="index_detail.html">interdum</a></h3>*/
/* 				<p>nulla volutpat vestibulum arcu,</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="col-md-6 col-inner_1">*/
/* 		<ul class="classi_1">*/
/* 			<li class="classi_1-left"><img src="{{asset('images/pic7.jpg')}}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right middle">*/
/* 				<h3><a href="index_detail.html">commodo </a></h3>*/
/* 				<p>ac interdum nulla volutpat vestibu</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 		<ul class="classi_1">*/
/* 			<li class="classi_1-left"><img src="{{asset('images/pic8.jpg')}}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right middle">*/
/* 				<h3><a href="index_detail.html">vestibulum</a></h3>*/
/* 				<p>ac justo et justo pede sapien nam</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 		<ul class="classi_1">*/
/* 			<li class="classi_1-left"><img src="{{asset('images/pic9.jpg')}}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right middle">*/
/* 				<h3><a href="index_detail.html">phasellus</a></h3>*/
/* 				<p>sem molestie tortor, nascetur</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 		<ul class="classi_1 classi_2">*/
/* 			<li class="classi_1-left"><img src="{{asset('images/pic10.jpg')}#}" class="img-responsive" alt=""/></li>*/
/* 			<li class="classi_1-right middle">*/
/* 				<h3><a href="index_detail.html"> faucibus</a></h3>*/
/* 				<p>Erat metus nec sunt sit ipsum</p>*/
/* 			</li>*/
/* 			<div class="clearfix"> </div>*/
/* 		</ul>*/
/* 	   </div>*/
/* 	 </div>*/
/*    </div>!-->*/
/*  </div>*/
/* </div>*/
/* <marquee direction="left" style="background:#000; color:#F3DB28;">*/
/* Bienvenu , nous vous souhaite que vous aimerez notre Site...*/
/* </marquee>*/
/* <!--<div class="tabs_list">*/
/*   <div class="container">  */
/*   	 <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*        <div class="heading column heading-v1 separator_align_right">*/
/*          <div class="heading-inner">*/
/*              <small class="subheading"> introducing</small>*/
/*              <h3>Posted Classifieds</h3>*/
/*          </div>   */
/*       </div>   */
/*     </div>*/
/* 	       <div class="bs-example bs-example-tabs col-md-9" role="tabpanel" data-example-id="togglable-tabs">*/
/* 	       	 <ul id="myTab" class="nav nav-tabs" role="tablist">*/
/* 			  <li role="presentation" class="active presentation_2"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Recently Feeds</a></li>*/
/* 			  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">*/
/* 			  	<div class="btn-group">*/
/*                     <a class="btn btn_1 btn-default dropdown-toggle dropdown-toggle_1" data-toggle="dropdown" aria-expanded="true">User Type<span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu dropdown-menu-right" role="menu">*/
/*                         <li><a href="#">Company</a></li>*/
/*                         <li><a href="#">Software Developer</a></li>*/
/*                         <li><a href="#">Leader</a></li>*/
/*                         <li><a href="#">Employee</a></li>*/
/*                         <li><a href="#">Consultant</a></li>*/
/*                         <li><a href="#">Trainer</a></li>*/
/*                     </ul>*/
/*                  </div></a></li>*/
/* 			  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">*/
/*                 <input class="form-control" type="text" id="flocation" name="flocation" placeholder="Enter City Name" onkeypress="displayCity(this.value);" onblur="gotoFeed('location', this.value);" tabindex="99">*/
/*               </li>*/
/* 			</ul>*/
/* 		  <div id="myTabContent" class="tab-content">*/
/* 		     <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">*/
/* 		      <div class="panel-body">*/
/*                 	<div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{#{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	  <h3>*/
/*                 		  <a href="index_detail.html" style="text-transform: capitalize;"> Donec urna</a>*/
/*                 		dolor suspendisse quis non<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                       </h3>*/
/*                       <h4>*/
/*                         <a href="index_detail.html">Est sit integer eu magna, ullamcorper mus vel nunc</a>*/
/*                       </h4>*/
/*                     </div>*/
/*                    <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Quisque ante dolor</a>*/
/*                 		Lorem ipsum<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Mauris volutpat sagittis dolor. Mauris lacinia nunc aliquam</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Phasellus viverra</a>*/
/*                 		vitae magna, mollis<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Et ante eget, cras risus et hymenaeos nulla sit, class tempus hac nunc</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Elit potenti justo</a>*/
/*                 		donec commodo ipsum<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Rhoncus orci accumsan ipsum lectus et, ultricies in morbi pede</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Wisi eros vitae</a>*/
/*                 		sodales integer<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Et ante eget, cras risus et hymenaeos nulla sit, class tempus hac nunc</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Bibendum nibh</a>*/
/*                 		nonummy, nulla <div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Condimentum cupidatat condimentum fermentum at imperdiet, pede nunc.</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Libero odio congue</a>*/
/*                 		a luctus donec<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus </a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Condimentum</a>*/
/*                 		cupidatat cond<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Maecenas pharetra ad nibh, vel purus, blandit officia pede..</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                </div>*/
/* 		  </div>*/
/* 		  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">*/
/* 		  </div>*/
/* 		  <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">*/
/* 		   	  <div class="panel-body">*/
/*                 	<div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	  <h3>*/
/*                 		  <a href="index_detail.html" style="text-transform: capitalize;">mollis vestibulum</a>*/
/*                 		metus<div class="pull-right">1 hour ago <i class="fa fa-user refresh_1"></i></div>*/
/*                       </h3>*/
/*                       <h4>*/
/*                         <a href="index_detail.html">Maecenas pharetra ad nibh, vel purus, blandit officia pede..</a>*/
/*                       </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Est sit, luctus leo</a>*/
/*                 		augue<div class="pull-right">1 hour ago <i class="fa fa-picture-o refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Ac metus metus</a>*/
/*                 		arcu vestibulum<div class="pull-right">1 hour ago <i class="fa fa-users refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Condimentum cupidatat condimentum fermentum at imperdiet, pede nunc</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">pellentesque sit</a>*/
/*                 		 phasellus<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Condimentum cupidatat condimentum fermentum at imperdiet, pede nunc</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Bibendum nibh</a>*/
/*                 		nonummy, nulla<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Bibendum nibh</a>*/
/*                 		nonummy, nulla <div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic13.jpg')}}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Condimentum</a>*/
/*                 		cupidatat <div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div><hr>*/
/*                     <div class="pull-left" style="margin:0 5px;">*/
/*                 		<a class="thumbnail" href="index_detail.html">*/
/*                 			<img src="{{asset('images/pic14.jpg')}#}" width="50" height="50">*/
/*                 		</a>*/
/*                 	</div>*/
/*                 	<div class="panel-body_1">*/
/*                 	<h3>*/
/*                 		<a href="index_detail.html" style="text-transform: capitalize;">Condimentum</a>*/
/*                 		cupidatat con<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>*/
/*                     </h3>*/
/*                     <h4>*/
/*                       <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>*/
/*                     </h4>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                </div>*/
/* 		   </div>*/
/* 	    </div>*/
/*       </div>*/
/*     </div>*/
/* </div>!-->*/
/*        <!-- Start of fotter!-->*/
/* <div class="footer_widget">*/
/* 	<div class="container">*/
/* 		<div class="col-md-4">*/
/* 			<aside id="text-1" class="widget widget_text">*/
/* 				<h3 class="widget-title"><span>Visitez Nous</span></h3>*/
/* 				<div class="textwidget"><p>Si Vous Voulez nous consultez chere client à notre locale,n'hésitez pas à nous visitez</p>*/
/* 				   <p><em style="color: #fff;">Fiablité.,<br>Ergonomie,<br>Sécurité</em></p>*/
/* 				</div> */
/* 			</aside>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<aside id="text-2" class="widget widget_text">*/
/* 				<h3 class="widget-title"><span>De Plus A propos de nous</span></h3>*/
/* 				<div class="textwidget">*/
/* 					<p>All For Deal vous servire pour votre plaisire.</p></div>*/
/* 		    </aside>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<aside>*/
/* 				<h3 class="widget-title"><span>Notre Stafs</span></h3>*/
/* 				<ul class="gallery">*/
/* 					<li><a href="{{asset('images/pic5.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic5.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li><a href="{{asset('images/pic6.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic6.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li><a href="{{asset('images/pic11.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic11.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li class="last">*/
/* 						<a href="{{asset('images/pic12.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic12.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="{{asset('images/pic6.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic6.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li>*/
/* 					   <a href="{{asset('images/pic5.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic5.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 				    </li>*/
/* 					<li>*/
/* 						<a href="{{asset('images/pic11.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic11.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li class="last">*/
/* 						<a href="{{asset('images/pic12.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic12.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 				    </li>*/
/* 					<div class="clearfix"> </div>*/
/* 				</ul>*/
/* 			</aside>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="footer_middle">*/
/* 	*/
/*         <div class="col-sm-7">*/
/*           <div class="footer-icons"> */
/*           	<a href="https://twitter.com/?lang=en" class="social-icon"><i class="fa fa-twitter has-circle"></i></a> */
/*           	<a href="https://www.facebook.com" class="social-icon"><i class="fa fa-facebook has-circle"></i></a> */
/*           	<a href="https://www.google.tn/" class="social-icon"><i class="fa fa-google-plus has-circle"></i></a> */
/*           	<a href="https://www.linkedin.com/nhome/" class="social-icon"><i class="fa fa-linkedin has-circle"></i></a> */
/*           	<div class="clearfix"> </div>*/
/*           </div>*/
/*       </div>*/
/*     */
/*      <div class="col-sm-5">*/
/*           <div class="newsletter_signup">*/
/*             <form name="newsletter" method="post" target="_blank" novalidate="novalidate" id="newsletter" action="{{ path("usn_newsletter_subscribe")}}" class="form-inline validate" pmbx_context="35D26FE1-2523-4D05-843A-5A7F1B81AF96">*/
/*               <input type="email" id="newsletter_email" name="newsletter[email]" required="required" class="form-control" placeholder="Subscribe to our newsletter" pmbx_context="876A45D1-B77E-4775-AEC4-01837D5FFD6E">*/
/*               <input type="submit" value="SUBSCRIBE" id="newsletter_save" name="newsletter[save]"> */
/*               <input type="hidden" id="newsletter__token" name="newsletter[_token]" value="fT-IedNgyNRi84bKoJJ3f9-3BcdRuoE6qm-3mmtAbMI" pmbx_context="F09958BD-9E9B-44F1-868A-8BA0FAC76A0B" />*/
/*             </form>*/
/*           <div id="newsletter-response" style="color:red;"></div> */
/*           </div>*/
/*     </div> */
/*               */
/*                */
/*     <!-- <div class="col-sm-5">*/
/*           <div class="newsletter_signup">*/
/*             <form novalidate="" target="_blank" name="newsletter-subscribe-form" id="newsletter-subscribe-form" method="post" class="form-inline validate" action="{#{ path("usn_newsletter_subscribe")}#}" >*/
/*               <input type="email" required="" placeholder="Subscribe to our newsletter" class="form-control" name="EMAIL" value="">*/
/*               <input type="submit" id="newsletter-subscribe" name="subscribe" value="SUBSCRIBE">*/
/*             </form>*/
/*           </div>*/
/*         </div>  !-->*/
/*               */
/*         */
/*               */
/* <div class="clearfix"> </div>*/
/* */
/* <!-- <div class="col-sm-5">*/
/* <div class="newsletter_signup">*/
/*   <form name="newsletter" method="post"  novalidate="novalidate" id="newsletter" action="{#{path("usn_newsletter_subscribe")}#}">*/
/*  <input type="email" id="newsletter_email" name="newsletter[email]" required="required" placeholder="email-address"/>*/
/* <div><button type="submit" value="SUBSCRIBE" id="newsletter_save" name="newsletter[save]">Submit</button></div>*/
/* <input type="hidden" id="newsletter__token" name="newsletter[_token]" value="py6s5vJLzQ3yw8wBhdSE-nr9ogAgtNpdbQMFtutICbQ" />*/
/*   <div id="newsletter-response" style="color:red;"></div>*/
/*   </form>*/
/* <div id="newsletter-response" style="color:red;"></div>*/
/* </div>*/
/*  </div>!-->*/
/* </div>		*/
/*   */
/* <div class="footer_bottom">*/
/* 	<div class="container">*/
/* 		<div class="copy">*/
/*             <p>Copyright © 2016 All For Deal </p>*/
/* 	    </div>*/
/* 	</div>*/
/*     <!-- Start of Audio Player Code !-->*/
/*   <div id="backgroundaudio">*/
/*        <i class="fa fa-volume-up"></i>*/
/*     <audio autoplay="" controls="" loop="" preload="">*/
/*        <source src="{{asset('audios/Smile.ogg')}}" type="audio/ogg"></source>*/
/*        <source src="{{asset('audios/Smile.mp3')}}" type="audio/mpeg"></source>*/
/*         Your browser does not support the audio element.*/
/*     </audio>*/
/*   </div>      */
/*         <!-- Style Audio Player !-->*/
/* <style media="screen" type="text/css">*/
/*  #backgroundaudio {*/
/*   display: block;*/
/*   position: fixed;*/
/*   bottom: -43px;*/
/*   left: 5px;*/
/*   -webkit-transition: all 1s ease-in-out;*/
/*   -moz-transition: all 1s ease-in-out;*/
/*   -ms-transition: all 1s ease-in-out;*/
/*   -o-transition: all 1s ease-in-out;*/
/*   transition: all 1s ease-in-out;*/
/*  }*/
/*  #backgroundaudio:hover {*/
/*   bottom: 0;*/
/*   -webkit-transition: all 1s ease-in-out;*/
/*   -moz-transition: all 1s ease-in-out;*/
/*   -ms-transition: all 1s ease-in-out;*/
/*   -o-transition: all 1s ease-in-out;*/
/*   transition: all 1s ease-in-out;*/
/*  }*/
/*  #backgroundaudio audio {*/
/*   background: #ffffff;*/
/*   padding: 5px;*/
/*   display: table-cell;*/
/*   vertical-align: middle;*/
/*   height: 43px;*/
/*   z-index: 9998;*/
/*  }*/
/*  #backgroundaudio i {*/
/*   font-size: 40px;*/
/*   display: block;*/
/*   background: #ffffff;*/
/*   padding: 5px;*/
/*   width: 50px;*/
/*   float: none;*/
/*   margin-bottom: -1px;*/
/*   z-index: 9999;*/
/*  }*/
/* </style>*/
/*   <!-- End Of Style Audio Player !-->*/
/*     <!-- End of Audio Player Code !-->*/
/*     */
/* 	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Top </span></a>*/
/*       <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>*/
/*       <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>*/
/*       <script type="text/javascript">*/
/* 		$(document).ready(function() {*/
/* 			/**/
/* 			var defaults = {*/
/* 	  			containerID: 'toTop', // fading element id*/
/* 				containerHoverID: 'toTopHover', // fading element hover id*/
/* 				scrollSpeed: 1200,*/
/* 				easingType: 'linear' */
/* 	 		};*/
/* 			*//* */
/* 			*/
/* 			$().UItoTop({ easingType: 'easeOutQuart' });*/
/* 			*/
/* 		});*/
/* 	  </script>*/
/* </div>	*/
/* <!----language selector----->*/
/* <script type="text/javascript" src="{{asset('js/jquery.leanModal.min.js')}}"></script>*/
/* <link href="{{asset('css/jquery.uls.css')}}" rel="stylesheet"/>*/
/* <link href="{{asset('css/jquery.uls.grid.css')}}" rel="stylesheet"/>*/
/* <link href="{{asset('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>*/
/* <!-- Source -->*/
/* <script src="{{asset('js/jquery.uls.data.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.data.utils.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.lcd.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.languagefilter.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.regionfilter.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.core.js')}}"></script>*/
/* <script>*/
/* 	$( document ).ready( function() {*/
/* 		$( '.uls-trigger' ).uls( {*/
/* 			onSelect : function( language ) {*/
/* 				var languageName = $.uls.data.getAutonym( language );*/
/* 				$( '.uls-trigger' ).text( languageName );*/
/* 			},*/
/* 			quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME*/
/* 		} );*/
/* 	} );*/
/* </script>		*/
/* <!-- FlexSlider -->*/
/* <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />*/
/* <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>*/
/* 	  <script type="text/javascript">*/
/* 		$(function(){*/
/* 		  SyntaxHighlighter.all();*/
/* 		});*/
/* 		$(window).load(function(){*/
/* 		  $('.flexslider').flexslider({*/
/* 			animation: "slide",*/
/* 			start: function(slider){*/
/* 			  $('body').removeClass('loading');*/
/* 			}*/
/* 		  });*/
/* 		});*/
/* 	  </script>*/
/* <!-- FlexSlider -->	*/
/* {% endblock %}*/
/*   <!-- popup de voir si inscription effectué avec succes ou échec --!>*/
/*               <!-- if inscri == succés !-->*/
/*     <div class="modal fade" id="modalInscriSucces" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"  ><p style="font-family:fantasy;font-size: 30px;color: darkgreen "> Succés</p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body"> */
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: green" > Félicitation ! Inscription a été éffectué avec succés dans notre site All For Deal,veillez verifier votre boite email pour activer votre compte */
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*         </div>*/
/*         */
/*         {% for flashMessage in app.session.flashbag.get('InscriSucces') %}*/
/*             <script>  */
/*             $("#modalInscriSucces").modal('show');*/
/*         </script> */
/*        {% endfor %}*/
/*               <!--  end if succés !-->*/
/*      <!-- if inscri == failed !-->*/
/*               <div class="modal fade" id="modalInscriFailed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"><p style="font-family:fantasy;font-size: 30px;color: darkorange "> Echec</p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body">*/
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: orange"> Désolé ! Votre Inscription dans notre site All For Deal a été échoué*/
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*         */
/*         {% for flashMessage in app.session.flashbag.get('InscriFailed') %}*/
/*             <script> */
/*             $("#modalInscriFailed").modal('show');*/
/*         </script> */
/*        {% endfor %}*/
/*               <!-- end of failed !-->*/
/*           <!--  end of popup vérif inscri !--> */
/*           */
/* <!-- popup de voir si connection a effectué avec succes ou échec --!>*/
/*               <!-- if cnx == succés !-->*/
/*     <div class="modal fade" id="modalLoginSucces" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"  ><p style="font-family:fantasy;font-size: 30px;color: darkgreen "> Succés</p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body">*/
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: green" class="ktiba"> Connection a été éffectué avec succés ! Bienvenu à All For Deal*/
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*         </div>*/
/*         */
/*         {% for flashMessage in app.session.flashbag.get('LoginUserTrue') %}*/
/*             <script>  */
/*             $("#modalLoginSucces").modal('show');*/
/*         </script> */
/*        {% endfor %}*/
/*               <!--  end if succés !-->*/
/*      <!-- if cnx == blocked !-->*/
/*               <div class="modal fade" id="modalLoginBlocked" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"><p style="font-family:fantasy;font-size: 30px;color: darkred "> Bloquage </p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body">*/
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: red"> Désolé ! Vous ne pouvez plus vous connectez , car vous etes bloqués par l'Administrateur du All For Deal*/
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*         */
/*         {% for flashMessage in app.session.flashbag.get('LoginUserBlocked') %}*/
/*             <script> */
/*             $("#modalLoginBlocked").modal('show');*/
/*         </script> */
/*        {% endfor %}*/
/*               <!-- end of blocked !-->*/
/*               */
/*       <!-- if cnx == failed !-->*/
/*               <div class="modal fade" id="modalLoginFailed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"><p style="font-family:fantasy;font-size: 30px;color: darkorange "> Echec</p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body">*/
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: orange"> Désolé ! Vous ne pouvez pas connectez , veillez vérifier vos champs et réssayer */
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*         */
/*         {% for flashMessage in app.session.flashbag.get('LoginUserFailed') %}*/
/*             <script> */
/*             $("#modalLoginFailed").modal('show');*/
/*         </script> */
/*        {% endfor %}*/
/*               <!-- end of blocked !-->*/
/*           <!--  end of popup vérif connecion !-->        */
/*   <!-- update user !-->*/
/*            <div class="modal fade" id="modalupadteSucceed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"><p style="font-family:fantasy;font-size: 30px;color: darkgreen ">Succés</p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body">*/
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: green"> Félicitation ! Mise à jour de votre compte a été éffectué avec succés*/
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*            </div>*/
/*     */
/*         {% for flashMessage in app.session.flashbag.get('UpdateSucceed') %}*/
/*             <script> */
/*             $("#modalupadteSucceed").modal('show');*/
/*             </script> */
/*        {% endfor %}*/
/*      */
/*        */
/*       <div class="modal fade" id="modalupadteFailed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"><p style="font-family:fantasy;font-size: 30px;color: darkorange ">Echec</p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body">*/
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: orange"> Echech ! Mise à jour de votre compte a été échoué*/
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*            </div>*/
/*     */
/*         {% for flashMessage in app.session.flashbag.get('UpdateFailed') %}*/
/*             <script> */
/*             $("#modalupadteFailed").modal('show');*/
/*             </script> */
/*        {% endfor %}  */
/*   <!-- update user !-->          */
/*   */
/*    <!-- logout user !-->*/
/*            <div class="modal fade" id="modalLogoutUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                     <div class="modal-dialog" role="document">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                                 <h4 class="modal-title" id="myModalLabel"><p style="font-family:fantasy;font-size: 30px;color: darkblue">Au Revoir</p></h4>*/
/*                                             </div>*/
/*                                             <div class="modal-body">*/
/*                                                 <p style="font-family:Times New Roman;font-size: 24px;color: blue "> Merci d'etre l'un de nos cheres fidèles client*/
/*                                             </div>*/
/*                                             <div class="modal-footer">*/
/*                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*            </div>*/
/*     */
/*         {% for flashMessage in app.session.flashbag.get('LogoutUser') %}*/
/*             <script> */
/*             $("#modalLogoutUser").modal('show');*/
/*             </script> */
/*        {% endfor %}*/
/*     <!-- end logout user !-->      */
/*     </body>*/
/* </html>*/
/* {% endblock %}*/
