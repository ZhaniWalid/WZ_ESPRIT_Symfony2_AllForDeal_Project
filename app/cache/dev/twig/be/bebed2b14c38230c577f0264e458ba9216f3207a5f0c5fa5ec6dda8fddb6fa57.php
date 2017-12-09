<?php

/* UsnNewsletterBundle:Default:complete.html.twig */
class __TwigTemplate_fdffa3a1af49064bb711d15ec384534cef6a2fc1fd80d1e94e940a13ed3d2434 extends Twig_Template
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
        return "UsnNewsletterBundle:Default:complete.html.twig";
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
