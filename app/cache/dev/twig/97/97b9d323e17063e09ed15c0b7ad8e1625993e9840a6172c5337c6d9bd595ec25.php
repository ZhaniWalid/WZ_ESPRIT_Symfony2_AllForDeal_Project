<?php

/* UsnNewsletterBundle:Default:unsubscribe_complete.html.twig */
class __TwigTemplate_56b1c57c9c090e4ad238e3b45a75d4d2780f76379791beadf50d4003bc4182b0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("unsubscribe-success"), "html", null, true);
        echo "</h2>

          </section>       

        </article>

        <footer></footer> 
      </main> 

        
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UsnNewsletterBundle:Default:unsubscribe_complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
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
/*             <h2>{{ 'unsubscribe-success' | trans }}</h2>*/
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
/* */
