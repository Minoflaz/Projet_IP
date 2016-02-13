<?php

/* IPBundle:Exercices:convertPrint.html.twig */
class __TwigTemplate_409f036fd658f2cd5437c74c4bdc42955fa4ccb954240c952960695d2a2e0452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:convertPrint.html.twig", 1);
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
        $__internal_c9af0769fa15b04cc3c006d568df3cc17f0025055c0e83ef6cd9603464ddec95 = $this->env->getExtension("native_profiler");
        $__internal_c9af0769fa15b04cc3c006d568df3cc17f0025055c0e83ef6cd9603464ddec95->enter($__internal_c9af0769fa15b04cc3c006d568df3cc17f0025055c0e83ef6cd9603464ddec95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:convertPrint.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9af0769fa15b04cc3c006d568df3cc17f0025055c0e83ef6cd9603464ddec95->leave($__internal_c9af0769fa15b04cc3c006d568df3cc17f0025055c0e83ef6cd9603464ddec95_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_faca5b1a58bd8f8d3140fb7d93dd6b6a1ffe387d2bb9a0018252fd39bb7564a7 = $this->env->getExtension("native_profiler");
        $__internal_faca5b1a58bd8f8d3140fb7d93dd6b6a1ffe387d2bb9a0018252fd39bb7564a7->enter($__internal_faca5b1a58bd8f8d3140fb7d93dd6b6a1ffe387d2bb9a0018252fd39bb7564a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
        </div>

        <aside id = \"chapter\">
            <h1>Exercices</h1>
            <ul>

                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Exo classe</a></li>

                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Exo masque</a></li>

                <li><a href=\"#\">Exo table de routage</a></li>

                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Exo conversion</a></li>

            </ul>
        </aside>

        <section>
            <article>
                <p> IP de base : ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo " </p>
                <p>IP rentrée : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ipFourStr"]) ? $context["ipFourStr"] : $this->getContext($context, "ipFourStr")), "bytes", array()), "html", null, true);
        echo "</p>
            </article>
        </section>

    ";
        
        $__internal_faca5b1a58bd8f8d3140fb7d93dd6b6a1ffe387d2bb9a0018252fd39bb7564a7->leave($__internal_faca5b1a58bd8f8d3140fb7d93dd6b6a1ffe387d2bb9a0018252fd39bb7564a7_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:convertPrint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  74 => 27,  64 => 20,  57 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Faire des exercices</h1>*/
/*             <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1>Exercices</h1>*/
/*             <ul>*/
/* */
/*                 <li><a href="{{ path('exoClass')}}">Exo classe</a></li>*/
/* */
/*                 <li><a href="{{ path('exoMask')}}">Exo masque</a></li>*/
/* */
/*                 <li><a href="#">Exo table de routage</a></li>*/
/* */
/*                 <li><a href="{{ path('convert') }}">Exo conversion</a></li>*/
/* */
/*             </ul>*/
/*         </aside>*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <p> IP de base : {{ ip }} </p>*/
/*                 <p>IP rentrée : {{ ipFourStr.bytes }}</p>*/
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
