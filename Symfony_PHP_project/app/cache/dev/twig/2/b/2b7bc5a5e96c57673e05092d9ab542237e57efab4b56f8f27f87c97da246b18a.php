<?php

/* IPBundle:Exercices:classFailed.html.twig */
class __TwigTemplate_334c7c59a78d2441eac41b86fcd70cefd3b66136ffddaade6757fae506e4536d extends Twig_Template
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
        $__internal_4c50ee1be713ceb694fc8cb87dc5ad719ecfde3a2a19a24a0280a2aea2803ba6 = $this->env->getExtension("native_profiler");
        $__internal_4c50ee1be713ceb694fc8cb87dc5ad719ecfde3a2a19a24a0280a2aea2803ba6->enter($__internal_4c50ee1be713ceb694fc8cb87dc5ad719ecfde3a2a19a24a0280a2aea2803ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:classFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c50ee1be713ceb694fc8cb87dc5ad719ecfde3a2a19a24a0280a2aea2803ba6->leave($__internal_4c50ee1be713ceb694fc8cb87dc5ad719ecfde3a2a19a24a0280a2aea2803ba6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_05fb3cc431933482129974ebce7d544999ac2a4a1811888b72b28984a7bbf88e = $this->env->getExtension("native_profiler");
        $__internal_05fb3cc431933482129974ebce7d544999ac2a4a1811888b72b28984a7bbf88e->enter($__internal_05fb3cc431933482129974ebce7d544999ac2a4a1811888b72b28984a7bbf88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <p>Ce n'est pas la bonne classe ! </p>
                <p>En effet la bonne classe était ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["ipClass"]) ? $context["ipClass"] : $this->getContext($context, "ipClass")), "html", null, true);
        echo " Pour l'adresse ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "bytes", array()), "html", null, true);
        echo "</p>
                <br>

                <p><a href=\"exoClass\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
        
        $__internal_05fb3cc431933482129974ebce7d544999ac2a4a1811888b72b28984a7bbf88e->leave($__internal_05fb3cc431933482129974ebce7d544999ac2a4a1811888b72b28984a7bbf88e_prof);

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
/*                 <p>Ce n'est pas la bonne classe ! </p>*/
/*                 <p>En effet la bonne classe était {{ ipClass }} Pour l'adresse {{ ip.bytes }}</p>*/
/*                 <br>*/
/* */
/*                 <p><a href="exoClass">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
