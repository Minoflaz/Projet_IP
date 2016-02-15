<?php

/* IPBundle:Exercices:classFailed.html.twig */
class __TwigTemplate_882c36e35c4e47841e4360a2a9fcece6f457717754a9ba5405c6d2586f5a2b4f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (isset($context["ipClass"]) ? $context["ipClass"] : null), "html", null, true);
        echo " Pour l'adresse ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : null), "bytes", array()), "html", null, true);
        echo "</p>
                <br>

                <p><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Réessayer l'éxercice</a></p>

            </article>
        </section>



    ";
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
        return array (  57 => 20,  49 => 17,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
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
