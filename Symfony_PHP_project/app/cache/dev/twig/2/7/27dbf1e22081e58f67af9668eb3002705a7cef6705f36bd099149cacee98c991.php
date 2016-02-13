<?php

/* IPBundle:Exercices:classSuccess.html.twig */
class __TwigTemplate_97070f30ec28d4a5ed99272ba9b34a525c9fc79050561f4030a881291087403f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:classSuccess.html.twig", 1);
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
        $__internal_42511cefd4971d1659825ac2f1241fd133be4de32324d013c8244f1ae49724df = $this->env->getExtension("native_profiler");
        $__internal_42511cefd4971d1659825ac2f1241fd133be4de32324d013c8244f1ae49724df->enter($__internal_42511cefd4971d1659825ac2f1241fd133be4de32324d013c8244f1ae49724df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:classSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42511cefd4971d1659825ac2f1241fd133be4de32324d013c8244f1ae49724df->leave($__internal_42511cefd4971d1659825ac2f1241fd133be4de32324d013c8244f1ae49724df_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7820bf894c039b9f4884b6a103c9163f89667582770279179a40230423c5c1ea = $this->env->getExtension("native_profiler");
        $__internal_7820bf894c039b9f4884b6a103c9163f89667582770279179a40230423c5c1ea->enter($__internal_7820bf894c039b9f4884b6a103c9163f89667582770279179a40230423c5c1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                C'est la bonne classe ! Bien joué :)
                <br>
                <p><a href=\"exoClass\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
        
        $__internal_7820bf894c039b9f4884b6a103c9163f89667582770279179a40230423c5c1ea->leave($__internal_7820bf894c039b9f4884b6a103c9163f89667582770279179a40230423c5c1ea_prof);

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
/*                 C'est la bonne classe ! Bien joué :)*/
/*                 <br>*/
/*                 <p><a href="exoClass">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
