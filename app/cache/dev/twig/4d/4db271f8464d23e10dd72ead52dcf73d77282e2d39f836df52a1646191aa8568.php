<?php

/* PidevAllForDealBundle:Default:validateAccount.html.twig */
class __TwigTemplate_f4071f6708c226774d04692d6a054c0310e9586171a2cc9a3cb6a4caafc49a86 extends Twig_Template
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
  <div class=\"wrapper\"> 
      
      <nav></nav>

      <main>
        <header></header>   

        <article>

          <section>
            
            <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm-activation"), "html", null, true);
        echo "</h2>
       
            <p><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validate_mail_inscription_complete", array("loginUser" => (isset($context["loginUser"]) ? $context["loginUser"] : $this->getContext($context, "loginUser")), "confirm_code" => (isset($context["confirm_code"]) ? $context["confirm_code"] : $this->getContext($context, "confirm_code")))), "html", null, true);
        echo "\">Yes</a></p>

          </section>       

        </article>

        <footer></footer> 
      </main> 

        
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "PidevAllForDealBundle:Default:validateAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  33 => 13,  19 => 1,);
    }
}
/* */
/*   <div class="wrapper"> */
/*       */
/*       <nav></nav>*/
/* */
/*       <main>*/
/*         <header></header>   */
/* */
/*         <article>*/
/* */
/*           <section>*/
/*             */
/*             <h2>{{ 'confirm-activation' | trans }}</h2>*/
/*        */
/*             <p><a href="{{ path('validate_mail_inscription_complete', { 'loginUser' : loginUser,'confirm_code':confirm_code }) }}">Yes</a></p>*/
/* */
/*           </section>       */
/* */
/*         </article>*/
/* */
/*         <footer></footer> */
/*       </main> */
/* */
/*         */
/*       </div>*/
/*     </div>*/
