<?php

/* PidevAllForDealBundle:CompteUser:CompteUser.html.twig */
class __TwigTemplate_2f908678fcbd8375b69337d3f9269b5297fe2716a0ab716a0ee90139c3c4abb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PidevAllForDealBundle:Acceuil:Acceuil.html.twig", "PidevAllForDealBundle:CompteUser:CompteUser.html.twig", 2);
        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'fless' => array($this, 'block_fless'),
            'A' => array($this, 'block_A'),
            'B' => array($this, 'block_B'),
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

    // line 3
    public function block_script($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\">
 function AuRevoir(){
    alert(\"Au Revoir,Merci d'etre un client fidèle du All For Deal,Nous Vous Souhaite le Retour\");
 }       
</script>
";
    }

    // line 12
    public function block_fless($context, array $blocks = array())
    {
        // line 13
        echo "     ";
        $this->displayBlock('A', $context, $blocks);
        // line 16
        echo "     ";
        $this->displayBlock('B', $context, $blocks);
    }

    // line 13
    public function block_A($context, array $blocks = array())
    {
        // line 14
        echo "       \t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_logoutUser");
        echo "\" class=\"btn btn-default btn-default_2 pull-right\" data-toggle=\"modal\" onclick=\"AuRevoir()\">Logout</a></li>     
     ";
    }

    // line 16
    public function block_B($context, array $blocks = array())
    {
        // line 17
        echo "     ";
    }

    // line 19
    public function block_tabs($context, array $blocks = array())
    {
        echo " 
 
 <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
        <ul class=\"nav navbar-nav nav_1\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 24
            echo "                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "idUser", array()), "html", null, true);
            echo "\"> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            ";
        $this->displayBlock('home', $context, $blocks);
        // line 29
        echo "         <!--   <li><a href=\"about.html\">About</a></li>
    \t\t<li><a href=\"classified.html\">Classified Ads</a></li>
\t\t\t<li><a href=\"classified_database.html\">Database</a></li>!-->
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mes Données<span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu drop_menu\" role=\"menu\">
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_AccesCompteUserTest");
        echo "\" width=\"50\">Mon Compte Personnelle</a></li>
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_ConnectedUserContactUs");
        echo "\">Contact Us</a></li>   
         <!--   <li><a href=\"article.html\">Articles</a></li>
            <li><a href=\"forum.html\">Forum</a></li>
            <li><a href=\"videos.html\">Video</a></li>
            <li><a href=\"advertise.html\">Advertising</a></li>  !-->      
           <!-- <li><a href=\"";
        // line 50
        echo "\">Mon Compte Personnelle</a></li> !-->

    ";
        // line 60
        echo "  ";
    }

    // line 26
    public function block_home($context, array $blocks = array())
    {
        // line 27
        echo "            <li class=\"current_page\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pidev_all_for_deal_homeUserConnected");
        echo "\">Home</a></li>
            ";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:CompteUser:CompteUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 27,  134 => 26,  130 => 60,  126 => 50,  118 => 45,  105 => 35,  97 => 29,  94 => 26,  85 => 24,  81 => 23,  73 => 19,  69 => 17,  66 => 16,  59 => 14,  56 => 13,  51 => 16,  48 => 13,  45 => 12,  36 => 4,  33 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "PidevAllForDealBundle:Acceuil:Acceuil.html.twig" %}*/
/* {% block script %}*/
/* <script type="text/javascript">*/
/*  function AuRevoir(){*/
/*     alert("Au Revoir,Merci d'etre un client fidèle du All For Deal,Nous Vous Souhaite le Retour");*/
/*  }       */
/* </script>*/
/* {% endblock %}*/
/* {#% block tabs %}*/
/*     {{ parent() }#}*/
/*  {% block fless %}*/
/*      {% block A %}*/
/*        	<li><a href="{{ path("pidev_all_for_deal_logoutUser") }}" class="btn btn-default btn-default_2 pull-right" data-toggle="modal" onclick="AuRevoir()">Logout</a></li>     */
/*      {% endblock %}*/
/*      {% block B %}*/
/*      {% endblock %}*/
/* {% endblock %}   */
/*  {% block tabs %} */
/*  */
/*  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">*/
/*         <ul class="nav navbar-nav nav_1">*/
/*             {% for u in usr %}*/
/*                 <input type="text" value="{{u.idUser}}"> */
/*             {% endfor %}*/
/*             {% block home %}*/
/*             <li class="current_page"><a href="{{ path("pidev_all_for_deal_homeUserConnected") }}">Home</a></li>*/
/*             {% endblock %}*/
/*          <!--   <li><a href="about.html">About</a></li>*/
/*     		<li><a href="classified.html">Classified Ads</a></li>*/
/* 			<li><a href="classified_database.html">Database</a></li>!-->*/
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mes Données<span class="caret"></span></a>*/
/*               <ul class="dropdown-menu drop_menu" role="menu">*/
/*                 <li><a href="{{ path("pidev_all_for_deal_AccesCompteUserTest")}}" width="50">Mon Compte Personnelle</a></li>*/
/*                <!-- <li><a href="faq.html">Faq</a></li>*/
/*                 <li><a href="career.html">Career</a></li>*/
/*                 <li><a href="terms.html">Terms of use</a></li> */
/*                 <li><a href="sitemap.html">Sitemap</a></li>*/
/*                 <li><a href="testimonials.html">Testimonials</a></li>*/
/*                 <li><a href="grids.html">Grids</a></li> !-->*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="news.html">News</a></li>*/
/*             <li><a href="{{ path("pidev_all_for_deal_ConnectedUserContactUs") }}">Contact Us</a></li>   */
/*          <!--   <li><a href="article.html">Articles</a></li>*/
/*             <li><a href="forum.html">Forum</a></li>*/
/*             <li><a href="videos.html">Video</a></li>*/
/*             <li><a href="advertise.html">Advertising</a></li>  !-->      */
/*            <!-- <li><a href="{#{ path("pidev_all_for_deal_AccesCompteUserTest")}#}">Mon Compte Personnelle</a></li> !-->*/
/* */
/*     {#% block compteUser %} {{ parent() }} */
/*        {% for u in user %}*/
/*        <input type="text" value="{{u.idUser}}" name="username_id" hidden>*/
/*        <input type="text" value="{{u.loginUser}}" name="username_id" hidden>*/
/*        <input type="text" value="{{u.pwdUser}}" name="password_id" hidden> */
/*     <li><a href="{{ path("pidev_all_for_deal_AccesCompteUser",{'login':u.loginUser,'pwd':u.pwdUser}) }}">Mon Compte Personnelle</a></li>*/
/*        {% endfor %}*/
/*     {% endblock %#}*/
/*   {% endblock %}  */
/* {#% endblock %#}     */
