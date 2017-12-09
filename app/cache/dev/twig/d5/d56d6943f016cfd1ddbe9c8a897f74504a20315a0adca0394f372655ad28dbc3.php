<?php

/* PidevAllForDealBundle:Default:confirmation_mail.txt.twig */
class __TwigTemplate_2ba1fc0637738455188db7550572cf771c211a39ef0fdc144a9784804fc4d4e4 extends Twig_Template
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
        echo $this->env->getExtension('translator')->trans("activate-account");
        echo ":

";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("validate_mail_inscription", array("loginUser" => (isset($context["loginUser"]) ? $context["loginUser"] : $this->getContext($context, "loginUser")), "confirm_code" => (isset($context["confirm_code"]) ? $context["confirm_code"] : $this->getContext($context, "confirm_code"))));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:Default:confirmation_mail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ 'confirmation-email-message' | trans }}*/
/* */
/* {{ 'activate-account' | trans }}:*/
/* */
/* {{ url ('validate_mail_inscription',{ 'loginUser' : loginUser , 'confirm_code': confirm_code }) }}*/
/*       */
