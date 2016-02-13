<?php

/* IPBundle:Exercices:exercises.html.twig */
class __TwigTemplate_5b85b0237695291a4695faf9238e09151534727d4380ab48c88e93b51d36bb9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:exercises.html.twig", 1);
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
        $__internal_f7ff8c975ef748f98e5cb67da0023c17b3a8ac452dbe3214294c84ff6e434419 = $this->env->getExtension("native_profiler");
        $__internal_f7ff8c975ef748f98e5cb67da0023c17b3a8ac452dbe3214294c84ff6e434419->enter($__internal_f7ff8c975ef748f98e5cb67da0023c17b3a8ac452dbe3214294c84ff6e434419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exercises.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ff8c975ef748f98e5cb67da0023c17b3a8ac452dbe3214294c84ff6e434419->leave($__internal_f7ff8c975ef748f98e5cb67da0023c17b3a8ac452dbe3214294c84ff6e434419_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a64e7ca44dbf789cdacea431dc70dd8929b56e2b40005866e261e7a8a004f6e = $this->env->getExtension("native_profiler");
        $__internal_2a64e7ca44dbf789cdacea431dc70dd8929b56e2b40005866e261e7a8a004f6e->enter($__internal_2a64e7ca44dbf789cdacea431dc70dd8929b56e2b40005866e261e7a8a004f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Exo conversion</a></li>

                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Exo classe</a></li>

                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Exo masque</a></li>

                <li><a href=\"#\">Exo table de routage</a></li>

            </ul>
        </aside>

    ";
        
        $__internal_2a64e7ca44dbf789cdacea431dc70dd8929b56e2b40005866e261e7a8a004f6e->leave($__internal_2a64e7ca44dbf789cdacea431dc70dd8929b56e2b40005866e261e7a8a004f6e_prof);

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
        return array (  62 => 18,  57 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <li><a href="{{ path('convert') }}">Exo conversion</a></li>*/
/* */
/*                 <li><a href="{{ path('exoClass')}}">Exo classe</a></li>*/
/* */
/*                 <li><a href="{{ path('exoMask')}}">Exo masque</a></li>*/
/* */
/*                 <li><a href="#">Exo table de routage</a></li>*/
/* */
/*             </ul>*/
/*         </aside>*/
/* */
/*     {% endblock %}*/
