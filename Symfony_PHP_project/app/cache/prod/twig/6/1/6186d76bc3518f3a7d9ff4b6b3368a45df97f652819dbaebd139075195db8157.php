<?php

/* IPBundle:Exercices:maskFailed.html.twig */
class __TwigTemplate_d8601fa6fa490617d4377c3993a2408297fd1b0daefa08092dfcfa432da01314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:maskFailed.html.twig", 1);
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
        // line 10
        $this->displayParentBlock("content", $context, $blocks);
        echo "

        <section>
            <article>
                <br>
                <p>Ce n'est pas le bon masque</p>
                <p>En effet le bon masque était : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mask"]) ? $context["mask"] : null), "bytes", array()), "html", null, true);
        echo "</p>
                <br>
                <p><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:maskFailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  48 => 16,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
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
/*                 <p>Ce n'est pas le bon masque</p>*/
/*                 <p>En effet le bon masque était : {{ mask.bytes }}</p>*/
/*                 <br>*/
/*                 <p><a href="{{ path('exoMask')}}">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
