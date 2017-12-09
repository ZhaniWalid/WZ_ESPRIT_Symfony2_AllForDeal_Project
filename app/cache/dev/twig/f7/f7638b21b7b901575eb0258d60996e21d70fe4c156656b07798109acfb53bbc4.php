<?php

/* PidevAllForDealBundle:Admin:AdminSpace.html.twig */
class __TwigTemplate_3fd494e35223717a563208c9ca34cef46c2b97bb6ca1566ccb90bb23def1cdff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'tabs' => array($this, 'block_tabs'),
            'compteUser' => array($this, 'block_compteUser'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>                
<title>Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-3.1.1.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Theme files -->
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Oswald:300,400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=PT+Sans:400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Fugaz+One"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
<!----font-Awesome----->
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<!----font-Awesome----->
<!--light-box-files -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.chocolat.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chocolat.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
<!-- css of the background video !-->
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/backgroundVideo.css"), "html", null, true);
        echo "\" type=\"text/css\"/> 
<!-- end of css of the background video !-->
<!--light-box-files -->
<!----drop down----->
";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 446
        echo " 
    </head>
    <body>
         
        ";
        // line 450
        $this->displayBlock('content', $context, $blocks);
        // line 748
        echo "    </body>
</html>
<!-- end of footerrr !-->
";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
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
      
    
       function AuRevoir(){
           alert(\"Au Revoir,Merci d'etre un Administrateur Fidèle du All For Deal\");
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
          
         if(!\$(\"#email\").val().match(/^[a-zA-Z0-9]|\\s+\$/)){
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

    // line 450
    public function block_content($context, array $blocks = array())
    {
        echo " 
        <div class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-sm-3 logo\">
                            <h1><a href=\"";
        // line 454
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAcceuil");
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
\t\t\t<span class=\"menu\"></span>
\t\t\t<div class=\"top-menu\">
\t\t\t\t<ul>

\t\t\t\t\t<li><a href=\"";
        // line 469
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_LoginAdmin");
        echo "\" class=\"btn btn-default btn-default_2 pull-right\" data-toggle=\"modal\" onclick=\"AuRevoir()\">Logout</a></li>                                       
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t\t
                           
\t\t\t\t <!-- Modal -->
                 
                     </div>
\t\t         </div>
\t\t     </div>
\t\t\t 
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
        // line 498
        $this->displayBlock('tabs', $context, $blocks);
        // line 529
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
<script type=\"text/javascript\">
 (function() {
  /**
   * Video element
   * @type {HTMLElement}
   */
  var video = document.getElementById(\"my-video\");

  /**
   * Check if video can play, and play it
   */
  video.addEventListener( \"canplay\", function() {
    video.play();
  });
})();  
</script>
<div class=\"demo\">
  <marquee behavior=\"scroll\" style=\"background:#F3DB28; color:#000;\" direction=\"left\" onmouseover=\"this.stop();\" onmouseout=\"this.start();\">\t\t\t\t
    Mauris volutpat sagittis dolor, ac cursus nibh ultricies ac. Mauris lacinia nunc non venenatis aliquam. Aliquam id interdum risus. Integer tempor nulla suscipit congue commodo. Nam congue enim purus, non scelerisque odio mollis sed. Ut quis felis non lectus dignissim tristique. 
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
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/4.png"), "html", null, true);
        echo "\" alt=\"\"/></div>
\t\t</li>
\t\t<li clearfix>
\t\t\t<div class=\"col-sm-6\"><img src=\"";
        // line 577
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
<video id=\"my-video\" class=\"video\" muted loop>
  <source src=\"media/demo.mp4\" type=\"video/mp4\">
</video><!-- /video -->
<!-- end of headerrrr !-->
        <!-- start of my profile !-->
      
        <!-- end of my profile !-->
        
<!-- start of footerrr !-->
<div class=\"footer_widget\">
\t<div class=\"container\">
\t\t<div class=\"col-md-4\">
\t\t\t<aside id=\"text-1\" class=\"widget widget_text\">
\t\t\t\t<h3 class=\"widget-title\"><span>COME VISIT US</span></h3>
\t\t\t\t<div class=\"textwidget\"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
\t\t\t\t   <p><em style=\"color: #fff;\">standard chunk.,<br> Finibus Bonorum,<br> Ipsum generators, treatise</em></p>
\t\t\t\t</div> 
\t\t\t</aside>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<aside id=\"text-2\" class=\"widget widget_text\">
\t\t\t\t<h3 class=\"widget-title\"><span>MORE ABOUT US</span></h3>
\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.</p></div>
\t\t    </aside>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<aside>
\t\t\t\t<h3 class=\"widget-title\"><span>FLICKR FEED</span></h3>
\t\t\t\t<ul class=\"gallery\">
\t\t\t\t\t<li><a href=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t   <a href=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t    </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 651
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
\t<div class=\"container\">
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
            <form novalidate=\"\" target=\"_blank\" name=\"newsletter-subscribe-form\" id=\"newsletter-subscribe-form\" method=\"post\" class=\"form-inline validate\">
              <input type=\"email\" required=\"\" placeholder=\"Subscribe to our newsletter\" class=\"form-control\" name=\"EMAIL\" value=\"\">
              <input type=\"submit\" id=\"newsletter-subscribe\" name=\"subscribe\" value=\"SUBSCRIBE\">
            </form>
          </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>\t\t
<div class=\"footer_bottom\">
\t<div class=\"container\">
\t\t<div class=\"copy\">
            <p>Copyright © 2016 Community. All Rights Reserved | Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
\t    </div>
\t</div>
\t<a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\">Top </span></a>
      <script type=\"text/javascript\" src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 690
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
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.grid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.lcd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<!-- Source -->
<script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.utils.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.lcd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.languagefilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.regionfilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 718
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
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<script defer src=\"";
        // line 732
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

    // line 498
    public function block_tabs($context, array $blocks = array())
    {
        // line 499
        echo "    <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
        <ul class=\"nav navbar-nav nav_1\">
            <li class=\"current_page\"><a href=\"";
        // line 501
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAcceuil");
        echo "\">Home</a></li>
            <li><a href=\"about.html\">About</a></li>
    \t    <li><a href=\"classified.html\">News</a></li>
\t   <!-- <li><a href=\"classified_database.html\">Database</a></li> !-->
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gestion Des Utilistaeurs<span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu drop_menu\" role=\"menu\">
                <li><a href=\"";
        // line 508
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminAllListUser");
        echo "\">Utilisateurs Inscrits</a></li>
                <li><a href=\"";
        // line 509
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EditableEspaceAdminAllListUser");
        echo "\">Réglages Utilisateurs</a></li>
               <!-- <li><a href=\"faq.html\">Profiles Utilisateurs</a></li>
                <li><a href=\"career.html\">Accés Profiles Utilisateurs</a></li>!-->
                <li><a href=\"";
        // line 512
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdminListeUsersBloques");
        echo "\">Liste Des Utilisateurs Bloqués</a></li>
                <li><a href=\"sitemap.html\">Sitemap</a></li>        
              </ul>
            </li>
            <li><a href=\"videos.html\">Video</a></li>
             ";
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 518
            echo "       <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "idAdmin", array()), "html", null, true);
            echo "\" name=\"username_id\" hidden>
       <input type=\"text\" value=\"";
            // line 519
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "loginAdmin", array()), "html", null, true);
            echo "\" name=\"username_id\" hidden>
       <input type=\"text\" value=\"";
            // line 520
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "pwdAdmin", array()), "html", null, true);
            echo "\" name=\"password_id\" hidden> 
            <li><a href=\"";
            // line 521
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_all_for_deal_AccesAdminCompte", array("login" => $this->getAttribute($context["a"], "loginAdmin", array()), "pwd" => $this->getAttribute($context["a"], "pwdAdmin", array()))), "html", null, true);
            echo "\">Mon Compte Personnelle</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "                ";
        $this->displayBlock('compteUser', $context, $blocks);
        // line 525
        echo "        </ul>
        <div class=\"help_line\"><div id=\"txtblnk\"><p>HELP LINE : (+216) 198 / 197</p></div></div> 
     </div><!-- /.navbar-collapse -->
     ";
    }

    // line 523
    public function block_compteUser($context, array $blocks = array())
    {
        // line 524
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:Admin:AdminSpace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  986 => 524,  983 => 523,  976 => 525,  973 => 523,  965 => 521,  961 => 520,  957 => 519,  952 => 518,  948 => 517,  940 => 512,  934 => 509,  930 => 508,  920 => 501,  916 => 499,  913 => 498,  893 => 732,  889 => 731,  873 => 718,  869 => 717,  865 => 716,  861 => 715,  857 => 714,  853 => 713,  848 => 711,  844 => 710,  840 => 709,  836 => 708,  815 => 690,  811 => 689,  770 => 651,  766 => 650,  759 => 646,  755 => 645,  748 => 641,  744 => 640,  737 => 636,  733 => 635,  726 => 631,  722 => 630,  715 => 626,  711 => 625,  705 => 622,  701 => 621,  695 => 618,  691 => 617,  648 => 577,  642 => 574,  595 => 529,  593 => 498,  561 => 469,  543 => 454,  535 => 450,  121 => 36,  118 => 35,  111 => 748,  109 => 450,  103 => 446,  101 => 35,  94 => 31,  89 => 29,  85 => 28,  79 => 25,  74 => 23,  70 => 22,  65 => 20,  61 => 19,  57 => 18,  52 => 16,  47 => 14,  43 => 13,  39 => 12,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>                */
/* <title>Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Home :: w3layouts</title>*/
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
/* <!-- css of the background video !-->*/
/* <link rel="stylesheet" href="{{asset('css/backgroundVideo.css')}}" type="text/css"/> */
/* <!-- end of css of the background video !-->*/
/* <!--light-box-files -->*/
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
/*       }*/
/*       */
/*     */
/*        function AuRevoir(){*/
/*            alert("Au Revoir,Merci d'etre un Administrateur Fidèle du All For Deal");*/
/*        }*/
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
/*          if(!$("#email").val().match(/^[a-zA-Z0-9]|\s+$/)){*/
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
/*     </head>*/
/*     <body>*/
/*          */
/*         {% block content %} */
/*         <div class="header">*/
/* 		<div class="container">*/
/* 			<div class="col-sm-3 logo">*/
/*                             <h1><a href="{{ path("pidev_all_for_deal_EspaceAdminAcceuil") }}"><span class="highlight">A</span>ll<span class="highlight">F</span>or<span class="highlight">D</span>eal</a></h1>*/
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
/* 			<span class="menu"></span>*/
/* 			<div class="top-menu">*/
/* 				<ul>*/
/* */
/* 					<li><a href="{{ path("pidev_all_for_deal_LoginAdmin") }}" class="btn btn-default btn-default_2 pull-right" data-toggle="modal" onclick="AuRevoir()">Logout</a></li>                                       */
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="clearfix"> </div>*/
/* 			*/
/*                            */
/* 				 <!-- Modal -->*/
/*                  */
/*                      </div>*/
/* 		         </div>*/
/* 		     </div>*/
/* 			 */
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
/*             <li class="current_page"><a href="{{ path("pidev_all_for_deal_EspaceAdminAcceuil") }}">Home</a></li>*/
/*             <li><a href="about.html">About</a></li>*/
/*     	    <li><a href="classified.html">News</a></li>*/
/* 	   <!-- <li><a href="classified_database.html">Database</a></li> !-->*/
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion Des Utilistaeurs<span class="caret"></span></a>*/
/*               <ul class="dropdown-menu drop_menu" role="menu">*/
/*                 <li><a href="{{ path("pidev_all_for_deal_EspaceAdminAllListUser") }}">Utilisateurs Inscrits</a></li>*/
/*                 <li><a href="{{ path("pidev_all_for_deal_EditableEspaceAdminAllListUser") }}">Réglages Utilisateurs</a></li>*/
/*                <!-- <li><a href="faq.html">Profiles Utilisateurs</a></li>*/
/*                 <li><a href="career.html">Accés Profiles Utilisateurs</a></li>!-->*/
/*                 <li><a href="{{ path("pidev_all_for_deal_EspaceAdminListeUsersBloques") }}">Liste Des Utilisateurs Bloqués</a></li>*/
/*                 <li><a href="sitemap.html">Sitemap</a></li>        */
/*               </ul>*/
/*             </li>*/
/*             <li><a href="videos.html">Video</a></li>*/
/*              {% for a in admin %}*/
/*        <input type="text" value="{{a.idAdmin}}" name="username_id" hidden>*/
/*        <input type="text" value="{{a.loginAdmin}}" name="username_id" hidden>*/
/*        <input type="text" value="{{a.pwdAdmin}}" name="password_id" hidden> */
/*             <li><a href="{{ path("pidev_all_for_deal_AccesAdminCompte",{'login':a.loginAdmin,'pwd':a.pwdAdmin}) }}">Mon Compte Personnelle</a></li>*/
/*             {% endfor %}*/
/*                 {% block compteUser %}*/
/*                    {% endblock %}*/
/*         </ul>*/
/*         <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+216) 198 / 197</p></div></div> */
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
/* <script type="text/javascript">*/
/*  (function() {*/
/*   /***/
/*    * Video element*/
/*    * @type {HTMLElement}*/
/*    *//* */
/*   var video = document.getElementById("my-video");*/
/* */
/*   /***/
/*    * Check if video can play, and play it*/
/*    *//* */
/*   video.addEventListener( "canplay", function() {*/
/*     video.play();*/
/*   });*/
/* })();  */
/* </script>*/
/* <div class="demo">*/
/*   <marquee behavior="scroll" style="background:#F3DB28; color:#000;" direction="left" onmouseover="this.stop();" onmouseout="this.start();">				*/
/*     Mauris volutpat sagittis dolor, ac cursus nibh ultricies ac. Mauris lacinia nunc non venenatis aliquam. Aliquam id interdum risus. Integer tempor nulla suscipit congue commodo. Nam congue enim purus, non scelerisque odio mollis sed. Ut quis felis non lectus dignissim tristique. */
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
/* <video id="my-video" class="video" muted loop>*/
/*   <source src="media/demo.mp4" type="video/mp4">*/
/* </video><!-- /video -->*/
/* <!-- end of headerrrr !-->*/
/*         <!-- start of my profile !-->*/
/*       */
/*         <!-- end of my profile !-->*/
/*         */
/* <!-- start of footerrr !-->*/
/* <div class="footer_widget">*/
/* 	<div class="container">*/
/* 		<div class="col-md-4">*/
/* 			<aside id="text-1" class="widget widget_text">*/
/* 				<h3 class="widget-title"><span>COME VISIT US</span></h3>*/
/* 				<div class="textwidget"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>*/
/* 				   <p><em style="color: #fff;">standard chunk.,<br> Finibus Bonorum,<br> Ipsum generators, treatise</em></p>*/
/* 				</div> */
/* 			</aside>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<aside id="text-2" class="widget widget_text">*/
/* 				<h3 class="widget-title"><span>MORE ABOUT US</span></h3>*/
/* 				<div class="textwidget">*/
/* 					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.</p></div>*/
/* 		    </aside>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<aside>*/
/* 				<h3 class="widget-title"><span>FLICKR FEED</span></h3>*/
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
/* 	<div class="container">*/
/*         <div class="col-sm-7">*/
/*           <div class="footer-icons"> */
/*           	<a href="https://twitter.com/?lang=en" class="social-icon"><i class="fa fa-twitter has-circle"></i></a> */
/*           	<a href="https://www.facebook.com" class="social-icon"><i class="fa fa-facebook has-circle"></i></a> */
/*           	<a href="https://www.google.tn/" class="social-icon"><i class="fa fa-google-plus has-circle"></i></a> */
/*           	<a href="https://www.linkedin.com/nhome/" class="social-icon"><i class="fa fa-linkedin has-circle"></i></a> */
/*           	<div class="clearfix"> </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-sm-5">*/
/*           <div class="newsletter_signup">*/
/*             <form novalidate="" target="_blank" name="newsletter-subscribe-form" id="newsletter-subscribe-form" method="post" class="form-inline validate">*/
/*               <input type="email" required="" placeholder="Subscribe to our newsletter" class="form-control" name="EMAIL" value="">*/
/*               <input type="submit" id="newsletter-subscribe" name="subscribe" value="SUBSCRIBE">*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*         <div class="clearfix"> </div>*/
/*     </div>*/
/* </div>		*/
/* <div class="footer_bottom">*/
/* 	<div class="container">*/
/* 		<div class="copy">*/
/*             <p>Copyright © 2016 Community. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>*/
/* 	    </div>*/
/* 	</div>*/
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
/* <!-- end of footerrr !-->*/
/* */
