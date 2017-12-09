<?php

/* PidevAllForDealBundle:CompteUser:HomeOfUserConnected.html.twig */
class __TwigTemplate_7b108c952571b2a8e0251e39a416a848d03fea936112002959a2fa82311dfd8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PidevAllForDealBundle:Acceuil:Acceuil.html.twig", "PidevAllForDealBundle:CompteUser:HomeOfUserConnected.html.twig", 1);
        $this->blocks = array(
            'fless' => array($this, 'block_fless'),
            'tabs' => array($this, 'block_tabs'),
            'home' => array($this, 'block_home'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevAllForDealBundle:Acceuil:Acceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fless($context, array $blocks = array())
    {
        echo "  
       \t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_logoutUser");
        echo "\" class=\"btn btn-default btn-default_2 pull-right\" data-toggle=\"modal\">Logout</a></li>     
 ";
    }

    // line 5
    public function block_tabs($context, array $blocks = array())
    {
        // line 6
        echo " <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
        <ul class=\"nav navbar-nav nav_1\">
            ";
        // line 8
        $this->displayBlock('home', $context, $blocks);
        // line 11
        echo "           <!-- <li><a href=\"about.html\">About</a></li>
    \t\t<li><a href=\"classified.html\">Classified Ads</a></li>
\t\t\t<li><a href=\"classified_database.html\">Database</a></li>!-->
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mes Données<span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu drop_menu\" role=\"menu\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_AccesCompteUserTest");
        echo "\">Mon Compte Personnelle</a></li>
               <!-- <li><a href=\"faq.html\">Faq</a></li>
                <li><a href=\"career.html\">Career</a></li>
                <li><a href=\"terms.html\">Terms of use</a></li>
                <li><a href=\"sitemap.html\">Sitemap</a></li>
                <li><a href=\"testimonials.html\">Testimonials</a></li>
                <li><a href=\"grids.html\">Grids</a></li> !-->
              </ul>
            </li>
            <li><a href=\"news.html\">News</a></li>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_ConnectedUserContactUs");
        echo "\">Contact Us</a></li>
          <!--  <li><a href=\"article.html\">Articles</a></li>
            <li><a href=\"forum.html\">Forum</a></li>
            <li><a href=\"videos.html\">Video</a></li>
            <li><a href=\"advertise.html\">Advertising</a></li>   !-->     

          
     
 ";
    }

    // line 8
    public function block_home($context, array $blocks = array())
    {
        // line 9
        echo "            <li class=\"current_page\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_homeUserConnected");
        echo "\">Home</a></li>
            ";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:CompteUser:HomeOfUserConnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 9,  84 => 8,  71 => 27,  58 => 17,  50 => 11,  48 => 8,  44 => 6,  41 => 5,  35 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "PidevAllForDealBundle:Acceuil:Acceuil.html.twig" %}*/
/* {% block fless %}  */
/*        	<li><a href="{{ path("pidev_all_for_deal_logoutUser") }}" class="btn btn-default btn-default_2 pull-right" data-toggle="modal">Logout</a></li>     */
/*  {% endblock %} */
/* {% block tabs %}*/
/*  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">*/
/*         <ul class="nav navbar-nav nav_1">*/
/*             {% block home %}*/
/*             <li class="current_page"><a href="{{ path("pidev_all_for_deal_homeUserConnected") }}">Home</a></li>*/
/*             {% endblock %}*/
/*            <!-- <li><a href="about.html">About</a></li>*/
/*     		<li><a href="classified.html">Classified Ads</a></li>*/
/* 			<li><a href="classified_database.html">Database</a></li>!-->*/
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mes Données<span class="caret"></span></a>*/
/*               <ul class="dropdown-menu drop_menu" role="menu">*/
/*                 <li><a href="{{ path("pidev_all_for_deal_AccesCompteUserTest")}}">Mon Compte Personnelle</a></li>*/
/*                <!-- <li><a href="faq.html">Faq</a></li>*/
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
/*             <li><a href="advertise.html">Advertising</a></li>   !-->     */
/* */
/*           */
/*      */
/*  {% endblock %}*/
/*  */
/*  */
