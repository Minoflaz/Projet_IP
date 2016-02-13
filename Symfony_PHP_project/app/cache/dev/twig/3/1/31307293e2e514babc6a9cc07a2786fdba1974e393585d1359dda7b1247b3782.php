<?php

/* IPBundle:Exercices:convertSuccess.html.twig */
class __TwigTemplate_67315dd5340c2b9cbbc7f8c22b3d461f150f6fca5c9472c064a20cddc9ddf917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:convertSuccess.html.twig", 1);
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
        $__internal_f506cb621f7a3a614062188f3147318f2ad5d666f0ec6700357c51fb087f5ce7 = $this->env->getExtension("native_profiler");
        $__internal_f506cb621f7a3a614062188f3147318f2ad5d666f0ec6700357c51fb087f5ce7->enter($__internal_f506cb621f7a3a614062188f3147318f2ad5d666f0ec6700357c51fb087f5ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:convertSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f506cb621f7a3a614062188f3147318f2ad5d666f0ec6700357c51fb087f5ce7->leave($__internal_f506cb621f7a3a614062188f3147318f2ad5d666f0ec6700357c51fb087f5ce7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b05828b1f1afeae07c94861a2676664fdd3108f5c415f867d8961c2851be1252 = $this->env->getExtension("native_profiler");
        $__internal_b05828b1f1afeae07c94861a2676664fdd3108f5c415f867d8961c2851be1252->enter($__internal_b05828b1f1afeae07c94861a2676664fdd3108f5c415f867d8961c2851be1252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <br>
                <p>C'est la bonne réponse !</p>
                <p> IP de base : ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo " </p>
                <p>IP rentrée : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ipFourStr"]) ? $context["ipFourStr"] : $this->getContext($context, "ipFourStr")), "bytes", array()), "html", null, true);
        echo "</p>
                <br>
                <p><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Réessayer l'éxercice</a></p>
            </article>
        </section>

    ";
        
        $__internal_b05828b1f1afeae07c94861a2676664fdd3108f5c415f867d8961c2851be1252->leave($__internal_b05828b1f1afeae07c94861a2676664fdd3108f5c415f867d8961c2851be1252_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:convertSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  80 => 30,  76 => 29,  64 => 20,  57 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <br>*/
/*                 <p>C'est la bonne réponse !</p>*/
/*                 <p> IP de base : {{ ip }} </p>*/
/*                 <p>IP rentrée : {{ ipFourStr.bytes }}</p>*/
/*                 <br>*/
/*                 <p><a href="{{ path('convert')}}">Réessayer l'éxercice</a></p>*/
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
