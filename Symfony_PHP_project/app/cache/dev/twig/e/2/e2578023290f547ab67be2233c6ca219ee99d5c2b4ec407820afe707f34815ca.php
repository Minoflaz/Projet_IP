<?php

/* IPBundle:Exercices:maskFailed.html.twig */
class __TwigTemplate_40f887e8b750b89f0d4c2f930a8c74845bc4e878ff4b58a810e06f84645bb095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:maskFailed.html.twig", 1);
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
        $__internal_c8c07f027763edb940556b81c8aa5efaec40d60a541dad653ad53a0a74f3db1d = $this->env->getExtension("native_profiler");
        $__internal_c8c07f027763edb940556b81c8aa5efaec40d60a541dad653ad53a0a74f3db1d->enter($__internal_c8c07f027763edb940556b81c8aa5efaec40d60a541dad653ad53a0a74f3db1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:maskFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c07f027763edb940556b81c8aa5efaec40d60a541dad653ad53a0a74f3db1d->leave($__internal_c8c07f027763edb940556b81c8aa5efaec40d60a541dad653ad53a0a74f3db1d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3256afcce7a62c60a0152bcaf6bebacd29a232fca11046c61fa4c13c194502ad = $this->env->getExtension("native_profiler");
        $__internal_3256afcce7a62c60a0152bcaf6bebacd29a232fca11046c61fa4c13c194502ad->enter($__internal_3256afcce7a62c60a0152bcaf6bebacd29a232fca11046c61fa4c13c194502ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1></h1>
            <p></p>
        </div>

        <aside id = \"chapter\">
            <h1>Exercices</h1>
            <ul>

                <li><a href=\"exoClass\">Exo classe</a></li>

                <li><a href=\"exoMask\">Exo masque</a></li>

                <li><a href=\"#\">Exo table de routage</a></li>

            </ul>
        </aside>

        <section>
            <article>
                <h1></h1>
                <p>Ce n'est pas le bon masque</p>
                <p>En effet le bon masque était : ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mask"]) ? $context["mask"] : $this->getContext($context, "mask")), "bytes", array()), "html", null, true);
        echo "</p>
                <br>
                <p><a href=\"exoMask\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
        
        $__internal_3256afcce7a62c60a0152bcaf6bebacd29a232fca11046c61fa4c13c194502ad->leave($__internal_3256afcce7a62c60a0152bcaf6bebacd29a232fca11046c61fa4c13c194502ad_prof);

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
        return array (  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1></h1>*/
/*             <p></p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1>Exercices</h1>*/
/*             <ul>*/
/* */
/*                 <li><a href="exoClass">Exo classe</a></li>*/
/* */
/*                 <li><a href="exoMask">Exo masque</a></li>*/
/* */
/*                 <li><a href="#">Exo table de routage</a></li>*/
/* */
/*             </ul>*/
/*         </aside>*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <h1></h1>*/
/*                 <p>Ce n'est pas le bon masque</p>*/
/*                 <p>En effet le bon masque était : {{ mask.bytes }}</p>*/
/*                 <br>*/
/*                 <p><a href="exoMask">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
