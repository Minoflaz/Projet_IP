<?php

/* IPBundle:Exercices:classSuccess.html.twig */
class __TwigTemplate_b1833cba7121a87111f0abe23ccb707f169b442bdacac39480d30e18ca3d1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:classSuccess.html.twig", 1);
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
                <p>C'est la bonne classe ! Bien joué </p>
                <br>
                <p><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:classSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
/*                 <p>C'est la bonne classe ! Bien joué </p>*/
/*                 <br>*/
/*                 <p><a href="{{ path('exoClass')}}">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
