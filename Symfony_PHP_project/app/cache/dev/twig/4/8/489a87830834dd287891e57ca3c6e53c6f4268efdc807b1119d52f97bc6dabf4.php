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
        $__internal_364e3eacf57c4c808800d71b84a800005d36e2490d398d52881785f9efaf019a = $this->env->getExtension("native_profiler");
        $__internal_364e3eacf57c4c808800d71b84a800005d36e2490d398d52881785f9efaf019a->enter($__internal_364e3eacf57c4c808800d71b84a800005d36e2490d398d52881785f9efaf019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exercises.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364e3eacf57c4c808800d71b84a800005d36e2490d398d52881785f9efaf019a->leave($__internal_364e3eacf57c4c808800d71b84a800005d36e2490d398d52881785f9efaf019a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9477f80fe4d91b8e8016ada9db66dc353d05f9230ce83aff18df54b9262b14a = $this->env->getExtension("native_profiler");
        $__internal_c9477f80fe4d91b8e8016ada9db66dc353d05f9230ce83aff18df54b9262b14a->enter($__internal_c9477f80fe4d91b8e8016ada9db66dc353d05f9230ce83aff18df54b9262b14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

    ";
        
        $__internal_c9477f80fe4d91b8e8016ada9db66dc353d05f9230ce83aff18df54b9262b14a->leave($__internal_c9477f80fe4d91b8e8016ada9db66dc353d05f9230ce83aff18df54b9262b14a_prof);

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
/*     {% endblock %}*/
