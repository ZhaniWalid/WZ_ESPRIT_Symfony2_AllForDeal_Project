<?php

/* UsnNewsletterBundle:Default:subscribe.html.twig */
class __TwigTemplate_63177345a02a5875b1e505cb6711a9541806149442b880f298570723b77ffb58 extends Twig_Template
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
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "newsletter")));
        echo "
  ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("email-address"))));
        echo "
  ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<div id=\"newsletter-response\" style=\"color:red;\"></div>";
    }

    public function getTemplateName()
    {
        return "UsnNewsletterBundle:Default:subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, { 'attr': {'novalidate': 'novalidate', 'id' : 'newsletter'}}) }}*/
/*   {{ form_widget(form.email, {'attr': {'placeholder': 'email-address' | trans }}) }}*/
/*   {{ form_errors(form.email) }}*/
/* {{ form_end(form) }}*/
/* */
/* <div id="newsletter-response" style="color:red;"></div>*/
