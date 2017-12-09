<?php

/* UsnNewsletterBundle:Default:confirmation_mail.txt.twig */
class __TwigTemplate_7eded5f5775d40dc7b084d007dd2d7e0c47698effd7ca9c7494254db0f334f1d extends Twig_Template
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
        echo $this->env->getExtension('translator')->trans("confirmation-email-message");
        echo "

";
        // line 3
        echo $this->env->getExtension('translator')->trans("unsubscribe");
        echo ":
";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("usn_newsletter_unsubscribe", array("access_key" => (isset($context["access_key"]) ? $context["access_key"] : $this->getContext($context, "access_key"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "UsnNewsletterBundle:Default:confirmation_mail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ 'confirmation-email-message' | trans }}*/
/* */
/* {{ 'unsubscribe' | trans }}:*/
/* {{ url('usn_newsletter_unsubscribe',{ 'access_key' : access_key }) }}*/
/* */
