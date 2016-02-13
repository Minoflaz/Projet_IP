<?php

/* IPBundle:Exercices:classFailed.html.twig */
class __TwigTemplate_334c7c59a78d2441eac41b86fcd70cefd3b66136ffddaade6757fae506e4536d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:classFailed.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "exo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02a81459faac0de8f34bf0040773dcb68874c488d48857fe443e4b6aa40146e8 = $this->env->getExtension("native_profiler");
        $__internal_02a81459faac0de8f34bf0040773dcb68874c488d48857fe443e4b6aa40146e8->enter($__internal_02a81459faac0de8f34bf0040773dcb68874c488d48857fe443e4b6aa40146e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:classFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02a81459faac0de8f34bf0040773dcb68874c488d48857fe443e4b6aa40146e8->leave($__internal_02a81459faac0de8f34bf0040773dcb68874c488d48857fe443e4b6aa40146e8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b65a5627bfe89e3f58799de5f5382c8452cfc6c1d0750a33e0fa59bec30be20 = $this->env->getExtension("native_profiler");
        $__internal_2b65a5627bfe89e3f58799de5f5382c8452cfc6c1d0750a33e0fa59bec30be20->enter($__internal_2b65a5627bfe89e3f58799de5f5382c8452cfc6c1d0750a33e0fa59bec30be20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        

        <div id=\"welcome\">
            <h1></h1>
            <p></p>
        </div>

        ";
        // line 11
        $this->displayParentBlock("content", $context, $blocks);
        echo "

        <section>
            <article>
                <br>
                <p>Ce n'est pas la bonne classe ! </p>
                <p>En effet la bonne classe était ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["ipClass"]) ? $context["ipClass"] : $this->getContext($context, "ipClass")), "html", null, true);
        echo " Pour l'adresse ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "bytes", array()), "html", null, true);
        echo "</p>
                <br>

                <p><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Réessayer l'éxercice</a></p>

            </article>
        </section>



    ";
        
        $__internal_2b65a5627bfe89e3f58799de5f5382c8452cfc6c1d0750a33e0fa59bec30be20->leave($__internal_2b65a5627bfe89e3f58799de5f5382c8452cfc6c1d0750a33e0fa59bec30be20_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:classFailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  58 => 17,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/*         */
/* */
/*         <div id="welcome">*/
/*             <h1></h1>*/
/*             <p></p>*/
/*         </div>*/
/* */
/*         {{ parent() }}*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <br>*/
/*                 <p>Ce n'est pas la bonne classe ! </p>*/
/*                 <p>En effet la bonne classe était {{ ipClass }} Pour l'adresse {{ ip.bytes }}</p>*/
/*                 <br>*/
/* */
/*                 <p><a href="{{ path('exoClass')}}">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/* */
/* */
/*     {% endblock %}*/
/* */
