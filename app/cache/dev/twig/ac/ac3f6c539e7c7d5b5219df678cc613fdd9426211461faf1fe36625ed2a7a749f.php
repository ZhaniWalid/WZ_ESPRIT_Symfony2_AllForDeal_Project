<?php

/* PidevAllForDealBundle:CompteUser:ConnectedUserContactUs.html.twig */
class __TwigTemplate_14c7b436717bac631ea02d476118c420ed5a427a3865569f0c8c5c21e5070894 extends Twig_Template
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
            'Login' => array($this, 'block_Login'),
            'Register' => array($this, 'block_Register'),
            'tabs' => array($this, 'block_tabs'),
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
        // line 445
        echo "    </head>
    <body>
         
        ";
        // line 448
        $this->displayBlock('content', $context, $blocks);
        // line 1156
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 36
        echo "<!----drop down----->
";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 443
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/usnnewsletter/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- end of javascript file for usn/newsletterBundle !-->
     ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
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
         
        function validation(){
            
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
            
         }
         
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
                     
           var v_l,v_p;
           
            v_l=document.getElementById(\"usr\").value;
            v_p=document.getElementById(\"pass\").value;
            if (v_l==='' || v_p===''){
              alert(\"Connexion échoué , veillez renseigner les champs vides\");  
            }else{
              alert(\"Connection a été éffectué avec succés Monsieur/Madame : \"+v_l+\" , Bienvenu chez All For Deal\");
           }
            
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

    // line 448
    public function block_content($context, array $blocks = array())
    {
        echo " 
        <div class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-sm-3 logo\">
                            <h1><a href=\"";
        // line 452
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_homeUserConnected");
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
        // line 463
        $this->displayBlock('fless', $context, $blocks);
        // line 475
        echo "\t\t\t<div class=\"clearfix\"> </div>
\t\t\t<!-- Modal -->
                           <!-- Start Login !-->
                           ";
        // line 478
        $this->displayBlock('Login', $context, $blocks);
        // line 538
        echo "                           <!-- End Login !-->
                           
\t\t\t\t <!-- Modal -->
               <!-- Start Registration !-->     
                                 ";
        // line 542
        $this->displayBlock('Register', $context, $blocks);
        // line 730
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
        // line 795
        $this->displayBlock('tabs', $context, $blocks);
        // line 827
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

<!-- début contact us !-->

<div class=\"demo\">
  <marquee behavior=\"scroll\" style=\"background:#F3DB28; color:#000;\" direction=\"left\" onmouseover=\"this.stop();\" onmouseout=\"this.start();\">\t\t\t\t
   Nous Contacter içi
  </marquee> \t 
</div>
<div class=\"about_banner\">
\t<div class=\"container\">
\t\t<h2>Contact</h2>
\t\t<span class=\"breadcrumbs\"><a href=\"";
        // line 853
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_ConnectedUserContactUs");
        echo "\"><i class=\"fa fa-home home_1\"></i></a> / <span>Contact</span></span>
\t</div>
</div>
<div class=\"about_top\">
 <div class=\"container\">
\t<div class=\"col-md-3 column-1 column-13\">
\t   <i class=\"fa fa-envelope-o envelop\"></i>
\t      <address class=\"address\">
              <p>9870 Les Berges du Lac, <br>Tunis</p>
              <dl>
                 <dt></dt>
                 <dd>Freephone :&nbsp;<span> +216 8880</span></dd>
                 <dd>Telephone :&nbsp;<span> +216 71 368 358</span></dd>
                 <dd>FAX :&nbsp;<span>+216 72 657 876</span></dd>
                 <dd>E-mail :&nbsp;<a href=\"mailto:walid.zhani@esprit.tn\">walid.zhani@esprit.tn</a></dd>
              </dl>
           </address>\t
\t</div>
\t<div class=\"col-md-9 column-9\">
\t  <h3>Feedback</h3>
\t   <p class=\"m_4\">\"En cas de panne du notre site , nouvelle idée d'amèlioration du notre site ou bien une demande d'ajouter de nouveaux catégories de produits à etre vendus sur notre site ... n'hésitez pas de nous donner un feedback en remplissant le formulaire çi dessous.\"</p>
\t     ";
        // line 874
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ThisUser"]) ? $context["ThisUser"] : $this->getContext($context, "ThisUser")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo "\t
           <form class=\"contact\" method=\"post\" action=\"";
            // line 875
            echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_ActionContact");
            echo "\">
\t\t\t  <input type=\"text\" class=\"text\" name=\"email_name\" required value=\"";
            // line 876
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nomUser", array()), "html", null, true);
            echo "\" placeholder='Name' onfocus=\"this.value = '';\" onblur=\"if (this.value === '') {this.value = 'Name';}\">
\t\t\t  <input type=\"text\" class=\"text\" name=\"email_mail\"  required value=\"";
            // line 877
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "emailUser", array()), "html", null, true);
            echo "\" placeholder='Email' onfocus=\"this.value = '';\" onblur=\"if (this.value === '') {this.value = 'Email';}\">
\t\t\t<!--  <input type=\"text\" class=\"text\" name=\"email_subject\" required value=\"Subject\" onfocus=\"this.value = '';\" onblur=\"if (this.value === '') {this.value = 'Subject';}\">!-->
                           <div class=\"section\">
                                  <label for=\"name\" class=\"field prepend-icon\">
                                     <select path=\"country\" id=\"country\" class=\"form-control input-sm\" name=\"email_subject\">
                                        <option value=\"null\">Selectionner Sujet</option>
                                        <option value=\"Panne Au Niveau du Site\" name=\"Panne Au Niveau du Site\">Panne Au Niveau du Site</option>
                                        <option value=\"Idee d'amelioration Site\"  name=\"Idee d'amelioration Site\">Idee d'amelioration Site</option>
                                        <option value=\"Demande de Nouveaux Produis à vendre sur le site\"  name=\"Demande de Nouveaux Produis à vendre sur le site\">Demande de Nouveaux Produits à vendre sur le site</option>
                                     </select>
                                     <label for=\"name\" class=\"field-icon\">
                                        <i class=\"fa fa-envelope\"></i>
                                     </label>
                                  </label>
                               </div>
\t\t\t  <textarea value=\"\" name=\"email_body\" required placeholder='Message' onfocus=\"this.value = '';\" onblur=\"if (this.value === '') {this.value = 'Message';}\">Message</textarea>
\t          <div class=\"submit-wrap\">
\t          \t<input type=\"submit\" value=\"Send\" id=\"Send\">
\t          \t<input type=\"reset\" value=\"Clear\">
\t          </div>
           </form> <br>
              <div id=\"contact_us\" style=\"color:red;\"></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 899
        echo "      
      </div>\t\t
    <div class=\"clearfix\"> </div>
 </div> 
</div>
      <script>
          \$(\"#contact_us\").hide().text(\"\");
          
           \$(\"#Send\").click(function() {

            \$(\"#contact_us\").show().text(\"Votre Message a été envoyé avec succés\").css(\"color\",\"blue\");       
           // \$(\"#nom\").css(\"background-color\",\"#FF0066\"); //#FF0066    99CC00
        
          
         });
      </script>
<div class=\"map\">
  <!-- <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978\"> </iframe> !-->
  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10740.90003840587!2d10.225206805872041!3d36.83556160416906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd353e6604773b%3A0x4a17e6959eb40420!2sLes+Berges+du+Lac%2C+Tunis%2C+Tunisia!5e0!3m2!1sen!2s!4v1460156178902\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>

<!-- fin contact us !-->

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
        // line 944
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 948
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 949
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 953
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 958
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 962
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t   <a href=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 968
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t    </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 972
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 973
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 978
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
        // line 1001
        echo $this->env->getExtension('routing')->getPath("usn_newsletter_subscribe");
        echo "\" class=\"form-inline validate\" pmbx_context=\"35D26FE1-2523-4D05-843A-5A7F1B81AF96\">
              <input type=\"email\" id=\"newsletter_email\" name=\"newsletter[email]\" required=\"required\" class=\"form-control\" placeholder=\"Subscribe to our newsletter\" pmbx_context=\"876A45D1-B77E-4775-AEC4-01837D5FFD6E\">
              <input type=\"submit\" value=\"SUBSCRIBE\" id=\"newsletter_save\" name=\"newsletter[save]\"> 
              <input type=\"hidden\" id=\"newsletter__token\" name=\"newsletter[_token]\" value=\"epEonRNshqVOeUhMGyUKeawXVFQYR3svjofNxB_AzmI\" pmbx_context=\"F09958BD-9E9B-44F1-868A-8BA0FAC76A0B\" />
            </form>
          <div id=\"newsletter-response\" style=\"color:red;\"></div>
          </div>
    </div> 
              
               
    <!-- <div class=\"col-sm-5\">
          <div class=\"newsletter_signup\">
            <form novalidate=\"\" target=\"_blank\" name=\"newsletter-subscribe-form\" id=\"newsletter-subscribe-form\" method=\"post\" class=\"form-inline validate\" action=\"";
        // line 1013
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
        // line 1026
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
        // line 1048
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("audios/Smile.ogg"), "html", null, true);
        echo "\" type=\"audio/ogg\"></source>
       <source src=\"";
        // line 1049
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
        // line 1097
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 1098
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
        // line 1116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 1117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 1118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.grid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.lcd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<!-- Source -->
<script src=\"";
        // line 1121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.utils.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.lcd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.languagefilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.regionfilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1126
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
        // line 1139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<script defer src=\"";
        // line 1140
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

    // line 463
    public function block_fless($context, array $blocks = array())
    {
        // line 464
        echo "\t\t\t<span class=\"menu\"></span>
\t\t\t<div class=\"top-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<!--<li><a href=\"#\" class=\"btn btn-default btn-default_2 pull-left\" data-toggle=\"modal\" data-target=\"#applyModal\">Login</a></li>!-->
\t\t\t\t\t<li><a href=\"";
        // line 468
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_logoutUser");
        echo "\" class=\"btn btn-default btn-default_2 pull-right\" data-toggle=\"modal\" onclick=\"AuRevoir()\">Logout</a></li> 
                                   <!--     <li><a href=\"";
        // line 469
        echo "\" class=\"btn btn-default btn-default_2 pull-left\" data-toggle=\"modal\" data-target=\"#applyModal_1\">Register</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"btn btn-default btn-default_2 pull-left uls-trigger\" data-toggle=\"modal\" data-target=\"#applyModal_2\">Select Language</a></li> !-->
                                       
                                </ul>
\t\t\t</div>
                        ";
    }

    // line 478
    public function block_Login($context, array $blocks = array())
    {
        // line 479
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
        // line 492
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

    // line 542
    public function block_Register($context, array $blocks = array())
    {
        // line 543
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
        // line 552
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

    // line 795
    public function block_tabs($context, array $blocks = array())
    {
        // line 796
        echo "    <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
        <ul class=\"nav navbar-nav nav_1\">
            <li class=\"current_page\"><a href=\"";
        // line 798
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_homeUserConnected");
        echo "\">Home</a></li>
          <!--  <li><a href=\"about.html\">About</a></li>
    \t\t<li><a href=\"classified.html\">Classified Ads</a></li>
\t\t\t<li><a href=\"classified_database.html\">Database</a></li>!-->
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mes Données<span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu drop_menu\" role=\"menu\">
                <li><a href=\"";
        // line 805
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_AccesCompteUserTest");
        echo "\">Mon Compte Personnelle</a></li>
           <!--     <li><a href=\"faq.html\">Faq</a></li>
                <li><a href=\"career.html\">Career</a></li>
                <li><a href=\"terms.html\">Terms of use</a></li>
                <li><a href=\"sitemap.html\">Sitemap</a></li>
                <li><a href=\"testimonials.html\">Testimonials</a></li>
                <li><a href=\"grids.html\">Grids</a></li> !-->
              </ul>
            </li>
            <li><a href=\"news.html\">News</a></li>
            <li><a href=\"";
        // line 815
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_ConnectedUserContactUs");
        echo "\">Contact Us</a></li>
          <!--  <li><a href=\"article.html\">Articles</a></li>
            <li><a href=\"forum.html\">Forum</a></li>
            <li><a href=\"videos.html\">Video</a></li>
            <li><a href=\"advertise.html\">Advertising</a></li>    !-->    

                ";
        // line 821
        $this->displayBlock('compteUser', $context, $blocks);
        // line 823
        echo "        </ul>
        <div class=\"help_line\"><div id=\"txtblnk\"><p>HELP LINE : (+216)54 559 441</p></div></div>
     </div><!-- /.navbar-collapse -->
     ";
    }

    // line 821
    public function block_compteUser($context, array $blocks = array())
    {
        // line 822
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:CompteUser:ConnectedUserContactUs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1464 => 822,  1461 => 821,  1454 => 823,  1452 => 821,  1443 => 815,  1430 => 805,  1420 => 798,  1416 => 796,  1413 => 795,  1230 => 552,  1219 => 543,  1216 => 542,  1166 => 492,  1151 => 479,  1148 => 478,  1139 => 469,  1135 => 468,  1129 => 464,  1126 => 463,  1106 => 1140,  1102 => 1139,  1086 => 1126,  1082 => 1125,  1078 => 1124,  1074 => 1123,  1070 => 1122,  1066 => 1121,  1061 => 1119,  1057 => 1118,  1053 => 1117,  1049 => 1116,  1028 => 1098,  1024 => 1097,  973 => 1049,  969 => 1048,  945 => 1026,  930 => 1013,  915 => 1001,  889 => 978,  885 => 977,  878 => 973,  874 => 972,  867 => 968,  863 => 967,  856 => 963,  852 => 962,  845 => 958,  841 => 957,  834 => 953,  830 => 952,  824 => 949,  820 => 948,  814 => 945,  810 => 944,  763 => 899,  734 => 877,  730 => 876,  726 => 875,  720 => 874,  696 => 853,  668 => 827,  666 => 795,  599 => 730,  597 => 542,  591 => 538,  589 => 478,  584 => 475,  582 => 463,  568 => 452,  560 => 448,  151 => 38,  148 => 37,  141 => 33,  135 => 30,  131 => 29,  125 => 26,  120 => 24,  116 => 23,  111 => 21,  107 => 20,  103 => 19,  98 => 17,  93 => 15,  89 => 14,  85 => 13,  80 => 11,  69 => 4,  64 => 443,  62 => 37,  59 => 36,  54 => 4,  48 => 1156,  46 => 448,  41 => 445,  39 => 4,  35 => 2,  29 => 1,);
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
/* <!-- start of javascript file for usn/newsletterBundle !-->*/
/* <script src="{{ asset('bundles/usnnewsletter/js/main.js') }}"></script>*/
/* <!-- end of javascript file for usn/newsletterBundle !-->*/
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
/*         function validation(){*/
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
/*          }*/
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
/*            var v_l,v_p;*/
/*            */
/*             v_l=document.getElementById("usr").value;*/
/*             v_p=document.getElementById("pass").value;*/
/*             if (v_l==='' || v_p===''){*/
/*               alert("Connexion échoué , veillez renseigner les champs vides");  */
/*             }else{*/
/*               alert("Connection a été éffectué avec succés Monsieur/Madame : "+v_l+" , Bienvenu chez All For Deal");*/
/*            }*/
/*             */
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
/*                             <h1><a href="{{ path("pidev_all_for_deal_homeUserConnected") }}"><span class="highlight">A</span>ll<span class="highlight">F</span>or<span class="highlight">D</span>eal</a></h1>*/
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
/* 					<!--<li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal">Login</a></li>!-->*/
/* 					<li><a href="{{ path("pidev_all_for_deal_logoutUser") }}" class="btn btn-default btn-default_2 pull-right" data-toggle="modal" onclick="AuRevoir()">Logout</a></li> */
/*                                    <!--     <li><a href="{#{path("pidev_all_for_deal_InscriptionUser")}#}" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Register</a></li>*/
/* 					<li><a href="#" class="btn btn-default btn-default_2 pull-left uls-trigger" data-toggle="modal" data-target="#applyModal_2">Select Language</a></li> !-->*/
/*                                        */
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
/* 	                            </div>                     */
/*                                                     */
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
/*             <li class="current_page"><a href="{{ path("pidev_all_for_deal_homeUserConnected") }}">Home</a></li>*/
/*           <!--  <li><a href="about.html">About</a></li>*/
/*     		<li><a href="classified.html">Classified Ads</a></li>*/
/* 			<li><a href="classified_database.html">Database</a></li>!-->*/
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mes Données<span class="caret"></span></a>*/
/*               <ul class="dropdown-menu drop_menu" role="menu">*/
/*                 <li><a href="{{ path("pidev_all_for_deal_AccesCompteUserTest")}}">Mon Compte Personnelle</a></li>*/
/*            <!--     <li><a href="faq.html">Faq</a></li>*/
/*                 <li><a href="career.html">Career</a></li>*/
/*                 <li><a href="terms.html">Terms of use</a></li>*/
/*                 <li><a href="sitemap.html">Sitemap</a></li>*/
/*                 <li><a href="testimonials.html">Testimonials</a></li>*/
/*                 <li><a href="grids.html">Grids</a></li> !-->*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="news.html">News</a></li>*/
/*             <li><a href="{{ path("pidev_all_for_deal_ConnectedUserContactUs") }}">Contact Us</a></li>*/
/*           <!--  <li><a href="article.html">Articles</a></li>*/
/*             <li><a href="forum.html">Forum</a></li>*/
/*             <li><a href="videos.html">Video</a></li>*/
/*             <li><a href="advertise.html">Advertising</a></li>    !-->    */
/* */
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
/* */
/* <!-- début contact us !-->*/
/* */
/* <div class="demo">*/
/*   <marquee behavior="scroll" style="background:#F3DB28; color:#000;" direction="left" onmouseover="this.stop();" onmouseout="this.start();">				*/
/*    Nous Contacter içi*/
/*   </marquee> 	 */
/* </div>*/
/* <div class="about_banner">*/
/* 	<div class="container">*/
/* 		<h2>Contact</h2>*/
/* 		<span class="breadcrumbs"><a href="{{ path("pidev_all_for_deal_ConnectedUserContactUs") }}"><i class="fa fa-home home_1"></i></a> / <span>Contact</span></span>*/
/* 	</div>*/
/* </div>*/
/* <div class="about_top">*/
/*  <div class="container">*/
/* 	<div class="col-md-3 column-1 column-13">*/
/* 	   <i class="fa fa-envelope-o envelop"></i>*/
/* 	      <address class="address">*/
/*               <p>9870 Les Berges du Lac, <br>Tunis</p>*/
/*               <dl>*/
/*                  <dt></dt>*/
/*                  <dd>Freephone :&nbsp;<span> +216 8880</span></dd>*/
/*                  <dd>Telephone :&nbsp;<span> +216 71 368 358</span></dd>*/
/*                  <dd>FAX :&nbsp;<span>+216 72 657 876</span></dd>*/
/*                  <dd>E-mail :&nbsp;<a href="mailto:walid.zhani@esprit.tn">walid.zhani@esprit.tn</a></dd>*/
/*               </dl>*/
/*            </address>	*/
/* 	</div>*/
/* 	<div class="col-md-9 column-9">*/
/* 	  <h3>Feedback</h3>*/
/* 	   <p class="m_4">"En cas de panne du notre site , nouvelle idée d'amèlioration du notre site ou bien une demande d'ajouter de nouveaux catégories de produits à etre vendus sur notre site ... n'hésitez pas de nous donner un feedback en remplissant le formulaire çi dessous."</p>*/
/* 	     {% for u in ThisUser %}	*/
/*            <form class="contact" method="post" action="{{ path("pidev_all_for_deal_ActionContact") }}">*/
/* 			  <input type="text" class="text" name="email_name" required value="{{u.nomUser}}" placeholder='Name' onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Name';}">*/
/* 			  <input type="text" class="text" name="email_mail"  required value="{{u.emailUser}}" placeholder='Email' onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Email';}">*/
/* 			<!--  <input type="text" class="text" name="email_subject" required value="Subject" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Subject';}">!-->*/
/*                            <div class="section">*/
/*                                   <label for="name" class="field prepend-icon">*/
/*                                      <select path="country" id="country" class="form-control input-sm" name="email_subject">*/
/*                                         <option value="null">Selectionner Sujet</option>*/
/*                                         <option value="Panne Au Niveau du Site" name="Panne Au Niveau du Site">Panne Au Niveau du Site</option>*/
/*                                         <option value="Idee d'amelioration Site"  name="Idee d'amelioration Site">Idee d'amelioration Site</option>*/
/*                                         <option value="Demande de Nouveaux Produis à vendre sur le site"  name="Demande de Nouveaux Produis à vendre sur le site">Demande de Nouveaux Produits à vendre sur le site</option>*/
/*                                      </select>*/
/*                                      <label for="name" class="field-icon">*/
/*                                         <i class="fa fa-envelope"></i>*/
/*                                      </label>*/
/*                                   </label>*/
/*                                </div>*/
/* 			  <textarea value="" name="email_body" required placeholder='Message' onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Message';}">Message</textarea>*/
/* 	          <div class="submit-wrap">*/
/* 	          	<input type="submit" value="Send" id="Send">*/
/* 	          	<input type="reset" value="Clear">*/
/* 	          </div>*/
/*            </form> <br>*/
/*               <div id="contact_us" style="color:red;"></div>*/
/*                     {% endfor %}      */
/*       </div>		*/
/*     <div class="clearfix"> </div>*/
/*  </div> */
/* </div>*/
/*       <script>*/
/*           $("#contact_us").hide().text("");*/
/*           */
/*            $("#Send").click(function() {*/
/* */
/*             $("#contact_us").show().text("Votre Message a été envoyé avec succés").css("color","blue");       */
/*            // $("#nom").css("background-color","#FF0066"); //#FF0066    99CC00*/
/*         */
/*           */
/*          });*/
/*       </script>*/
/* <div class="map">*/
/*   <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe> !-->*/
/*   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10740.90003840587!2d10.225206805872041!3d36.83556160416906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd353e6604773b%3A0x4a17e6959eb40420!2sLes+Berges+du+Lac%2C+Tunis%2C+Tunisia!5e0!3m2!1sen!2s!4v1460156178902" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/* </div>*/
/* */
/* <!-- fin contact us !-->*/
/* */
/*    <!-- Start of fotter!-->*/
/*  <div class="footer_widget">*/
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
/*               <input type="hidden" id="newsletter__token" name="newsletter[_token]" value="epEonRNshqVOeUhMGyUKeawXVFQYR3svjofNxB_AzmI" pmbx_context="F09958BD-9E9B-44F1-868A-8BA0FAC76A0B" />*/
/*             </form>*/
/*           <div id="newsletter-response" style="color:red;"></div>*/
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
/*               */
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
/*     </body>*/
/* </html>*/
/* {% endblock %}*/
