<?php

/* IPBundle:Exercices:classFailed.html.twig */
class __TwigTemplate_610c761d5254e67848ba127b8503b149aaf6ff55d80107db9bc847e64cef57c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:classFailed.html.twig", 1);
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
        $__internal_bfe410a3d04d8f0c29df5530224ccd84cc136fc863ddf0995f8fba7527529122 = $this->env->getExtension("native_profiler");
        $__internal_bfe410a3d04d8f0c29df5530224ccd84cc136fc863ddf0995f8fba7527529122->enter($__internal_bfe410a3d04d8f0c29df5530224ccd84cc136fc863ddf0995f8fba7527529122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:classFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe410a3d04d8f0c29df5530224ccd84cc136fc863ddf0995f8fba7527529122->leave($__internal_bfe410a3d04d8f0c29df5530224ccd84cc136fc863ddf0995f8fba7527529122_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_759a1516e3ff4a1aca5b2d1341c32b19864a6654bc1f66b8bf700854ed4553f4 = $this->env->getExtension("native_profiler");
        $__internal_759a1516e3ff4a1aca5b2d1341c32b19864a6654bc1f66b8bf700854ed4553f4->enter($__internal_759a1516e3ff4a1aca5b2d1341c32b19864a6654bc1f66b8bf700854ed4553f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                Ce n'est pas la bonne classe ! :o
                <br>

                <p><a href=\"exoClass\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
        
        $__internal_759a1516e3ff4a1aca5b2d1341c32b19864a6654bc1f66b8bf700854ed4553f4->leave($__internal_759a1516e3ff4a1aca5b2d1341c32b19864a6654bc1f66b8bf700854ed4553f4_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:classFailed.html.twig";
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
/*                 Ce n'est pas la bonne classe ! :o*/
/*                 <br>*/
/* */
/*                 <p><a href="exoClass">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
