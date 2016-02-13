<?php

/* IPBundle:Exercices:exercises.html.twig */
class __TwigTemplate_5b85b0237695291a4695faf9238e09151534727d4380ab48c88e93b51d36bb9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:exercises.html.twig", 1);
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
        $__internal_41bba68a2fec48f9e2f9e5d09a05d5ffbf70bbc5525dba7bb30839748f4a5cce = $this->env->getExtension("native_profiler");
        $__internal_41bba68a2fec48f9e2f9e5d09a05d5ffbf70bbc5525dba7bb30839748f4a5cce->enter($__internal_41bba68a2fec48f9e2f9e5d09a05d5ffbf70bbc5525dba7bb30839748f4a5cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exercises.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41bba68a2fec48f9e2f9e5d09a05d5ffbf70bbc5525dba7bb30839748f4a5cce->leave($__internal_41bba68a2fec48f9e2f9e5d09a05d5ffbf70bbc5525dba7bb30839748f4a5cce_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7cc0ed66e8a18deca404447f540460973e50a3c54b3db592b3be79f3cdc73265 = $this->env->getExtension("native_profiler");
        $__internal_7cc0ed66e8a18deca404447f540460973e50a3c54b3db592b3be79f3cdc73265->enter($__internal_7cc0ed66e8a18deca404447f540460973e50a3c54b3db592b3be79f3cdc73265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
        </div>

        ";
        // line 10
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        
        $__internal_7cc0ed66e8a18deca404447f540460973e50a3c54b3db592b3be79f3cdc73265->leave($__internal_7cc0ed66e8a18deca404447f540460973e50a3c54b3db592b3be79f3cdc73265_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:exercises.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Faire des exercices</h1>*/
/*             <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/*         </div>*/
/* */
/*         {{ parent() }}*/
/* */
/*     {% endblock %}*/
