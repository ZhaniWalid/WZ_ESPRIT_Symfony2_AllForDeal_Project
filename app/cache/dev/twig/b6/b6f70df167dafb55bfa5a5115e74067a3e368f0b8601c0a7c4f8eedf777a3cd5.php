<?php

/* PidevAllForDealBundle:NewsLetter:complete.html.twig */
class __TwigTemplate_7c02bc0bdc9af30e0609e4d0a4cb9be5c7482ee4b8bda7662c0b6ae3b82a9e56 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("thank-you-for-your-registration"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:NewsLetter:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ 'thank-you-for-your-registration' | trans }}*/
