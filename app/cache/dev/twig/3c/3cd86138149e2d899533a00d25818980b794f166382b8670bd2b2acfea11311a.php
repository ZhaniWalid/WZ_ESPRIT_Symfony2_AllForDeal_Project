<?php

/* PidevAllForDealBundle:Default:confirmation_mail.html.twig */
class __TwigTemplate_03b4499e492ed2dbefb6507e113f8def31a55a3cf41cbaa250d9fb7ddafcb679 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
</head>
<body>

    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Appuyez sur ce lien  pour activer votre compte :"), "html", null, true);
        echo "</p>
    <p><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("validate_mail_inscription", array("loginUser" => (isset($context["loginUser"]) ? $context["loginUser"] : $this->getContext($context, "loginUser")), "confirm_code" => (isset($context["confirm_code"]) ? $context["confirm_code"] : $this->getContext($context, "confirm_code")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Activer votre compte"), "html", null, true);
        echo "</a></p>
  
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:Default:confirmation_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* </head>*/
/* <body>*/
/* */
/*     <p>{{ "Appuyez sur ce lien  pour activer votre compte :" | trans }}</p>*/
/*     <p><a href="{{ url ('validate_mail_inscription',{ 'loginUser' : loginUser  , 'confirm_code': confirm_code } ) }}">{{ 'Activer votre compte' | trans }}</a></p>*/
/*   */
/* </body>*/
/* </html>*/
/* */
