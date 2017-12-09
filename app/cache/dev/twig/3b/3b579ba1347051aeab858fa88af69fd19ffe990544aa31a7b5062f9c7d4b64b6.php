<?php

/* UsnNewsletterBundle:Default:unsubscribe.html.twig */
class __TwigTemplate_5b0250e7dfedeb4cf2887796559ae338befb8097e3b3894085dfa365824b75d5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm-unsubscribe"), "html", null, true);
        echo "</h2>
      
            <p><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usn_newsletter_unsubscribe_complete", array("access_key" => (isset($context["access_key"]) ? $context["access_key"] : $this->getContext($context, "access_key")))), "html", null, true);
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
        return "UsnNewsletterBundle:Default:unsubscribe.html.twig";
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
/*             <h2>{{ 'confirm-unsubscribe' | trans }}</h2>*/
/*       */
/*             <p><a href="{{ path('usn_newsletter_unsubscribe_complete', {'access_key':access_key}) }}">Yes</a></p>*/
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
