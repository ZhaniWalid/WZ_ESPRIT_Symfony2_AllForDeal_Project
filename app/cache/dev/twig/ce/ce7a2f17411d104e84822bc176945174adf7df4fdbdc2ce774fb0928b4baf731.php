<?php

/* UsnNewsletterBundle:Default:confirmation_mail.html.twig */
class __TwigTemplate_095e2cd83996a1c0d836ca7c7fcdfc9bca0e2cab2dc2325cf74afc3a28695bb9 extends Twig_Template
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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Merci d'etre inscrit à notre site All For Deal,Nous Allons Vous enovoyés les News sur Votre Boite Email"), "html", null, true);
        echo "</p>
    <p><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("usn_newsletter_unsubscribe", array("access_key" => (isset($context["access_key"]) ? $context["access_key"] : $this->getContext($context, "access_key")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Désincrire du NewsLetter du All For Deal"), "html", null, true);
        echo "</a></p>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "UsnNewsletterBundle:Default:confirmation_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* </head>*/
/* <body>*/
/*     <p>{{ "Merci d'etre inscrit à notre site All For Deal,Nous Allons Vous enovoyés les News sur Votre Boite Email" | trans }}</p>*/
/*     <p><a href="{{ url('usn_newsletter_unsubscribe',{ 'access_key' : access_key }) }}">{{ 'Désincrire du NewsLetter du All For Deal' | trans }}</a></p>*/
/* */
/* </body>*/
/* </html>*/
/* */
