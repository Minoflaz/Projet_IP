<?php

/* exo.html.twig */
class __TwigTemplate_f5ce710b40351f7f6e84e1130388ded3768b4dfaf2d8b58351f0c873afc39658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "exo.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07159877629d04366ef328620cab678baf0db6c6adcb0f3c740eb141a967da1e = $this->env->getExtension("native_profiler");
        $__internal_07159877629d04366ef328620cab678baf0db6c6adcb0f3c740eb141a967da1e->enter($__internal_07159877629d04366ef328620cab678baf0db6c6adcb0f3c740eb141a967da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "exo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07159877629d04366ef328620cab678baf0db6c6adcb0f3c740eb141a967da1e->leave($__internal_07159877629d04366ef328620cab678baf0db6c6adcb0f3c740eb141a967da1e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_029919ef7ef4c6d3865b5a79c64725402d7bb849a8527a1f3f0099f10c8f0a1d = $this->env->getExtension("native_profiler");
        $__internal_029919ef7ef4c6d3865b5a79c64725402d7bb849a8527a1f3f0099f10c8f0a1d->enter($__internal_029919ef7ef4c6d3865b5a79c64725402d7bb849a8527a1f3f0099f10c8f0a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <aside id = \"chapter\">
            <h1>Exercices</h1>
            <ul>

                <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Exo conversion</a></li>

                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Exo classe</a></li>

                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Exo masque</a></li>

                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("routingTable");
        echo "\">Exo table de routage</a></li>

            </ul>
        </aside>
    ";
        
        $__internal_029919ef7ef4c6d3865b5a79c64725402d7bb849a8527a1f3f0099f10c8f0a1d->leave($__internal_029919ef7ef4c6d3865b5a79c64725402d7bb849a8527a1f3f0099f10c8f0a1d_prof);

    }

    public function getTemplateName()
    {
        return "exo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  56 => 12,  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/*         <aside id = "chapter">*/
/*             <h1>Exercices</h1>*/
/*             <ul>*/
/* */
/*                 <li><a href="{{ path('convert') }}">Exo conversion</a></li>*/
/* */
/*                 <li><a href="{{ path('exoClass')}}">Exo classe</a></li>*/
/* */
/*                 <li><a href="{{ path('exoMask')}}">Exo masque</a></li>*/
/* */
/*                 <li><a href="{{ path('routingTable')}}">Exo table de routage</a></li>*/
/* */
/*             </ul>*/
/*         </aside>*/
/*     {% endblock %}*/
