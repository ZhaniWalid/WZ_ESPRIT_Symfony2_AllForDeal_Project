<?php

/* PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig */
class __TwigTemplate_0472e39c955120090c4183560c446f55e17aef965f14be7cb9a62ca8c29a3a4d extends Twig_Template
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
        // line 2
        echo "<!-- script for menu -->                           
<!DOCTYPE html>
<html>
<head>  
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.css"), "html", null, true);
        echo "\"/>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!--<link href=\"";
        // line 12
        echo "\" rel='stylesheet' type='text/css' /> !-->

<!--webfont-->
<link href='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Oswald:300,400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=PT+Sans:400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Fugaz+One"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.chocolat.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chocolat.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />

    <!--  start of auto video player backrgound script!-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Theme files -->
<!-- Custom Theme files -->
<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!--webfont-->

<script type=\"text/javascript\">
var vid = document.getElementById(\"bgvid\");
var pauseButton = document.querySelector(\"#polina button\");

function vidFade() {
  vid.classList.add(\"stopfade\");
}

vid.addEventListener('ended', function()
{
// only functional if \"loop\" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener(\"click\", function() {
  vid.classList.toggle(\"stopfade\");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = \"Pause\";
  } else {
    vid.pause();
    pauseButton.innerHTML = \"Paused\";
  }
})
</script>
<!--  end of auto video player backrgound script!-->
<!-- Verification des champs du saisie avec jquery !-->
<script>
\$(function(){
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
</head>
<body>
      
    <!--  start of auto video player backrgound style!-->

    <style>
        body {
  margin: 0;
  background: #000; 
}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 //background: url('images/background.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}

#polina { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover { 
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(0,0,0,0.9);
}
@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media screen and (max-device-width: 800px) {
  //html { background: url(images/background.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}
        
</style>
    <!--  end of auto video player backrgound style!-->

          <!-- Start Login !-->

\t\t<div class=\"clearfix\"> </div>
\t\t\t<!-- Modal -->
                           <!-- Start Login !-->
                         
\t\t\t\t<div class=\"modal fade\" id=\"applyModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"applyModalLabel\" aria-hidden=\"true\">
\t\t\t\t  \t<div class=\"modal-dialog modal-dialog_2\">
\t\t\t\t    \t<div class=\"modal-content\">
\t\t\t\t\t      \t<div class=\"modal-header\">
\t\t\t\t\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\">
\t\t\t\t\t        \t\t<div class=\"head_4\">
\t\t\t                          <p style=\"color:red;text-align:right\">Login Admin</p>
\t\t\t                        </div>
\t\t\t                    </h4>
\t\t\t\t\t      \t</div>
\t                        <div class=\"modal-body\">
                                    
                        <form class=\"register\" method=\"post\" action=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_EspaceAdmin2");
        echo "\">
                               <div class=\"section\">
                                <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"username_id\" id=\"usr\" placeholder=\"Username\" class=\"input-medium search-query\">
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
                                   <div class=\"submit\"><input type=\"reset\" value=\"Reset\" name=\"submit\" class=\"btn btn-warning btn-lg btn-block\"></div> 
                             </div>
                            <span class=\"error\" name=\"errorLogin\">  </span>
                             
                           </form>
                        </div>
\t\t\t\t    </div>
\t\t\t\t </div>
\t\t\t\t
    
    
    
    <!--  start of auto video player backrgound body html !-->
<video autoplay  poster=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/background.jpg"), "html", null, true);
        echo "\" id=\"bgvid\" loop>
<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the \"Pause\" button  -->
<source src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("videos/dreamscapes.webm"), "html", null, true);
        echo "\" type=\"video/webm\">
";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "
<source src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("videos/dreamscapes.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
</video>

               <!--  end of video player background body html!-->
      
                                 
                            
       </body>                     
</html>        ";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:AdminNew:LoginAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 259,  342 => 258,  338 => 257,  333 => 255,  285 => 210,  103 => 31,  97 => 28,  93 => 27,  89 => 26,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  25 => 6,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!-- script for menu -->                           */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>  */
/* <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />*/
/* <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* <link href="{{asset('js/bootstrap.css')}}"/>*/
/* <script src="{{asset('js/jquery.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>*/
/* <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />*/
/* <!--<link href="{#{asset('css/bootstrap-3.1.1.min.css')}#}" rel='stylesheet' type='text/css' /> !-->*/
/* */
/* <!--webfont-->*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=Oswald:300,400,700')}}' rel='stylesheet' type='text/css'>*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=PT+Sans:400,700')}}' rel='stylesheet' type='text/css'>*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=Fugaz+One')}}' rel='stylesheet' type='text/css'>*/
/* <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>*/
/* <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> */
/* <script src="{{asset('js/jquery.chocolat.js')}}"></script>*/
/* <link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8" />*/
/* */
/*     <!--  start of auto video player backrgound script!-->*/
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script src="{{asset('js/jquery.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* <!-- Custom Theme files -->*/
/* <!-- Custom Theme files -->*/
/* <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />*/
/* <!--webfont-->*/
/* */
/* <script type="text/javascript">*/
/* var vid = document.getElementById("bgvid");*/
/* var pauseButton = document.querySelector("#polina button");*/
/* */
/* function vidFade() {*/
/*   vid.classList.add("stopfade");*/
/* }*/
/* */
/* vid.addEventListener('ended', function()*/
/* {*/
/* // only functional if "loop" is removed */
/* vid.pause();*/
/* // to capture IE10*/
/* vidFade();*/
/* }); */
/* */
/* */
/* pauseButton.addEventListener("click", function() {*/
/*   vid.classList.toggle("stopfade");*/
/*   if (vid.paused) {*/
/*     vid.play();*/
/*     pauseButton.innerHTML = "Pause";*/
/*   } else {*/
/*     vid.pause();*/
/*     pauseButton.innerHTML = "Paused";*/
/*   }*/
/* })*/
/* </script>*/
/* <!--  end of auto video player backrgound script!-->*/
/* <!-- Verification des champs du saisie avec jquery !-->*/
/* <script>*/
/* $(function(){*/
/*       /// vérification lors de la connexion*/
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
/* }); */
/* </script>*/
/* </head>*/
/* <body>*/
/*       */
/*     <!--  start of auto video player backrgound style!-->*/
/* */
/*     <style>*/
/*         body {*/
/*   margin: 0;*/
/*   background: #000; */
/* }*/
/* video { */
/*     position: fixed;*/
/*     top: 50%;*/
/*     left: 50%;*/
/*     min-width: 100%;*/
/*     min-height: 100%;*/
/*     width: auto;*/
/*     height: auto;*/
/*     z-index: -100;*/
/*     transform: translateX(-50%) translateY(-50%);*/
/*  //background: url('images/background.jpg') no-repeat;*/
/*   background-size: cover;*/
/*   transition: 1s opacity;*/
/* }*/
/* .stopfade { */
/*    opacity: .5;*/
/* }*/
/* */
/* #polina { */
/*   font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;*/
/*   font-weight:100; */
/*   background: rgba(0,0,0,0.3);*/
/*   color: white;*/
/*   padding: 2rem;*/
/*   width: 33%;*/
/*   margin:2rem;*/
/*   float: right;*/
/*   font-size: 1.2rem;*/
/* }*/
/* h1 {*/
/*   font-size: 3rem;*/
/*   text-transform: uppercase;*/
/*   margin-top: 0;*/
/*   letter-spacing: .3rem;*/
/* }*/
/* #polina button { */
/*   display: block;*/
/*   width: 80%;*/
/*   padding: .4rem;*/
/*   border: none; */
/*   margin: 1rem auto; */
/*   font-size: 1.3rem;*/
/*   background: rgba(255,255,255,0.23);*/
/*   color: #fff;*/
/*   border-radius: 3px; */
/*   cursor: pointer;*/
/*   transition: .3s background;*/
/* }*/
/* #polina button:hover { */
/*    background: rgba(0,0,0,0.5);*/
/* }*/
/* */
/* a {*/
/*   display: inline-block;*/
/*   color: #fff;*/
/*   text-decoration: none;*/
/*   background:rgba(0,0,0,0.5);*/
/*   padding: .5rem;*/
/*   transition: .6s background; */
/* }*/
/* a:hover{*/
/*   background:rgba(0,0,0,0.9);*/
/* }*/
/* @media screen and (max-width: 500px) { */
/*   div{width:70%;} */
/* }*/
/* @media screen and (max-device-width: 800px) {*/
/*   //html { background: url(images/background.jpg) #000 no-repeat center center fixed; }*/
/*   #bgvid { display: none; }*/
/* }*/
/*         */
/* </style>*/
/*     <!--  end of auto video player backrgound style!-->*/
/* */
/*           <!-- Start Login !-->*/
/* */
/* 		<div class="clearfix"> </div>*/
/* 			<!-- Modal -->*/
/*                            <!-- Start Login !-->*/
/*                          */
/* 				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">*/
/* 				  	<div class="modal-dialog modal-dialog_2">*/
/* 				    	<div class="modal-content">*/
/* 					      	<div class="modal-header">*/
/* 					        	<h4 class="modal-title" id="myModalLabel">*/
/* 					        		<div class="head_4">*/
/* 			                          <p style="color:red;text-align:right">Login Admin</p>*/
/* 			                        </div>*/
/* 			                    </h4>*/
/* 					      	</div>*/
/* 	                        <div class="modal-body">*/
/*                                     */
/*                         <form class="register" method="post" action="{{path("pidev_all_for_deal_EspaceAdmin2")}}">*/
/*                                <div class="section">*/
/*                                 <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="username_id" id="usr" placeholder="Username" class="input-medium search-query">*/
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
/*                                    <div class="submit"><input type="reset" value="Reset" name="submit" class="btn btn-warning btn-lg btn-block"></div> */
/*                              </div>*/
/*                             <span class="error" name="errorLogin">  </span>*/
/*                              */
/*                            </form>*/
/*                         </div>*/
/* 				    </div>*/
/* 				 </div>*/
/* 				*/
/*     */
/*     */
/*     */
/*     <!--  start of auto video player backrgound body html !-->*/
/* <video autoplay  poster="{{asset('images/background.jpg')}}" id="bgvid" loop>*/
/* <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->*/
/* <source src="{{asset('videos/dreamscapes.webm')}}" type="video/webm">*/
/* {{asset('css/font-awesome.css')}}*/
/* <source src="{{asset('videos/dreamscapes.mp4')}}" type="video/mp4">*/
/* </video>*/
/* */
/*                <!--  end of video player background body html!-->*/
/*       */
/*                                  */
/*                             */
/*        </body>                     */
/* </html>        */
