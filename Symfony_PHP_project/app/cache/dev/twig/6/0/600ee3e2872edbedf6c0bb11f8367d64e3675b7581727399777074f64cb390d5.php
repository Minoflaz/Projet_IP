<?php

/* IPBundle:Exercices:classSuccess.html.twig */
class __TwigTemplate_04e5efdc5ed0f143d670fcb8353b1532117f1ccab569a23281c53e4e87b2db91 extends Twig_Template
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
        $__internal_caa30d31c143e7e66dbac43be4240a7d7d07e1b1eab76791f3f44c5330241d8a = $this->env->getExtension("native_profiler");
        $__internal_caa30d31c143e7e66dbac43be4240a7d7d07e1b1eab76791f3f44c5330241d8a->enter($__internal_caa30d31c143e7e66dbac43be4240a7d7d07e1b1eab76791f3f44c5330241d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:classSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa30d31c143e7e66dbac43be4240a7d7d07e1b1eab76791f3f44c5330241d8a->leave($__internal_caa30d31c143e7e66dbac43be4240a7d7d07e1b1eab76791f3f44c5330241d8a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_17fbe5e28306efcf0cc925e1e7529abe23959410dc961fb87a35767177dc39a6 = $this->env->getExtension("native_profiler");
        $__internal_17fbe5e28306efcf0cc925e1e7529abe23959410dc961fb87a35767177dc39a6->enter($__internal_17fbe5e28306efcf0cc925e1e7529abe23959410dc961fb87a35767177dc39a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_17fbe5e28306efcf0cc925e1e7529abe23959410dc961fb87a35767177dc39a6->leave($__internal_17fbe5e28306efcf0cc925e1e7529abe23959410dc961fb87a35767177dc39a6_prof);

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
        return array (  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
