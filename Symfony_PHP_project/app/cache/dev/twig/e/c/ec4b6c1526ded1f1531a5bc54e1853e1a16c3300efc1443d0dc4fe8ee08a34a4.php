<?php

/* IPBundle:Exercices:maskSuccess.html.twig */
class __TwigTemplate_d0dad951a16a0abdaa5e69e807e744c5ac74928c1587c945e29b9122c0871a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:maskSuccess.html.twig", 1);
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
        $__internal_3a566597d192ae3de9b382d94db7115d8bffd2c990488c65193997dd06208f03 = $this->env->getExtension("native_profiler");
        $__internal_3a566597d192ae3de9b382d94db7115d8bffd2c990488c65193997dd06208f03->enter($__internal_3a566597d192ae3de9b382d94db7115d8bffd2c990488c65193997dd06208f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:maskSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a566597d192ae3de9b382d94db7115d8bffd2c990488c65193997dd06208f03->leave($__internal_3a566597d192ae3de9b382d94db7115d8bffd2c990488c65193997dd06208f03_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3812563312f48b5e345c13e4c41b75ee1f38059e33c4928d6a4c9e73a65184fa = $this->env->getExtension("native_profiler");
        $__internal_3812563312f48b5e345c13e4c41b75ee1f38059e33c4928d6a4c9e73a65184fa->enter($__internal_3812563312f48b5e345c13e4c41b75ee1f38059e33c4928d6a4c9e73a65184fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
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

                C'est le bon masque ! Bien joué :)
                <br>
                <p><a href=\"exoMask\">Réessayer l'éxercice</a></p>

            </article>
        </section>

   ";
        
        $__internal_3812563312f48b5e345c13e4c41b75ee1f38059e33c4928d6a4c9e73a65184fa->leave($__internal_3812563312f48b5e345c13e4c41b75ee1f38059e33c4928d6a4c9e73a65184fa_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:maskSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*                 C'est le bon masque ! Bien joué :)*/
/*                 <br>*/
/*                 <p><a href="exoMask">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*    {% endblock %}*/
