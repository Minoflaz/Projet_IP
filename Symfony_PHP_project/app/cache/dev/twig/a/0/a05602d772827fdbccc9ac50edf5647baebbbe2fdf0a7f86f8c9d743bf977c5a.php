<?php

/* IPBundle:Exercices:maskFailed.html.twig */
class __TwigTemplate_b859434e942786f43ded2537ad42dfa608deec257ba72b6034cf8da74121e8d0 extends Twig_Template
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
        $__internal_0a1dd9e72ded81eebed2ba1686780f966ed5541e48b328ff120ae6bf3e59f352 = $this->env->getExtension("native_profiler");
        $__internal_0a1dd9e72ded81eebed2ba1686780f966ed5541e48b328ff120ae6bf3e59f352->enter($__internal_0a1dd9e72ded81eebed2ba1686780f966ed5541e48b328ff120ae6bf3e59f352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:maskFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a1dd9e72ded81eebed2ba1686780f966ed5541e48b328ff120ae6bf3e59f352->leave($__internal_0a1dd9e72ded81eebed2ba1686780f966ed5541e48b328ff120ae6bf3e59f352_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f6fe531b2143296809b1c8a78389ddd090f29b768dba1753358d7387e2cc216 = $this->env->getExtension("native_profiler");
        $__internal_0f6fe531b2143296809b1c8a78389ddd090f29b768dba1753358d7387e2cc216->enter($__internal_0f6fe531b2143296809b1c8a78389ddd090f29b768dba1753358d7387e2cc216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                Ce n'est pas le bon masque :o
                <br>
                <p><a href=\"exoMask\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
        
        $__internal_0f6fe531b2143296809b1c8a78389ddd090f29b768dba1753358d7387e2cc216->leave($__internal_0f6fe531b2143296809b1c8a78389ddd090f29b768dba1753358d7387e2cc216_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*                 Ce n'est pas le bon masque :o*/
/*                 <br>*/
/*                 <p><a href="exoMask">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
