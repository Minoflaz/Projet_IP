<?php

/* IPBundle:Exercices:convertFailed.html.twig */
class __TwigTemplate_9ae3ca726c00a26ce55d36c4481cd40c0a67bd1dddb1745d17f1ab2ccae47eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:convertFailed.html.twig", 1);
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
        $__internal_3169b4b2000e9c78c45142e7636e6f4e7ab766a8450ef5ca615746a16db2063a = $this->env->getExtension("native_profiler");
        $__internal_3169b4b2000e9c78c45142e7636e6f4e7ab766a8450ef5ca615746a16db2063a->enter($__internal_3169b4b2000e9c78c45142e7636e6f4e7ab766a8450ef5ca615746a16db2063a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:convertFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3169b4b2000e9c78c45142e7636e6f4e7ab766a8450ef5ca615746a16db2063a->leave($__internal_3169b4b2000e9c78c45142e7636e6f4e7ab766a8450ef5ca615746a16db2063a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d52bb2a50d6fbec8100e1f65f6e2068d92a8c51cc05b42c9707d6e20a3e734b0 = $this->env->getExtension("native_profiler");
        $__internal_d52bb2a50d6fbec8100e1f65f6e2068d92a8c51cc05b42c9707d6e20a3e734b0->enter($__internal_d52bb2a50d6fbec8100e1f65f6e2068d92a8c51cc05b42c9707d6e20a3e734b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <p>Ce n'est pas la bonne réponse !</p>
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
        
        $__internal_d52bb2a50d6fbec8100e1f65f6e2068d92a8c51cc05b42c9707d6e20a3e734b0->leave($__internal_d52bb2a50d6fbec8100e1f65f6e2068d92a8c51cc05b42c9707d6e20a3e734b0_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:convertFailed.html.twig";
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
/*                 <p>Ce n'est pas la bonne réponse !</p>*/
/*                 <p> IP de base : {{ ip }} </p>*/
/*                 <p>IP rentrée : {{ ipFourStr.bytes }}</p>*/
/*                 <br>*/
/*                 <p><a href="{{ path('convert')}}">Réessayer l'éxercice</a></p>*/
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
