<?php

/* IPBundle:Exercices:convertFailed.html.twig */
class __TwigTemplate_60f40dec5f657c783380181c18524de3e7e87338237f5b2f37cb5be729beb4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:convertFailed.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "exo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
        </div>

        ";
        // line 10
        $this->displayParentBlock("content", $context, $blocks);
        echo "

        <section>
            <article>
                <br>
                <p>Ce n'est pas la bonne réponse !</p>
                <p> IP de base : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : null), "html", null, true);
        echo " </p>
                <p>IP rentrée : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ipFourStr"]) ? $context["ipFourStr"] : null), "bytes", array()), "html", null, true);
        echo "</p>
                <br>
                <p><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Réessayer l'éxercice</a></p>
            </article>
        </section>

    ";
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
        return array (  57 => 19,  52 => 17,  48 => 16,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Faire des exercices</h1>*/
/*             <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/*         </div>*/
/* */
/*         {{ parent() }}*/
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
