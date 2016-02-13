<?php

/* IPBundle:Exercices:maskFailed.html.twig */
class __TwigTemplate_40f887e8b750b89f0d4c2f930a8c74845bc4e878ff4b58a810e06f84645bb095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:maskFailed.html.twig", 1);
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
        $__internal_276be819db97a2eecadb72099b50eea262b223d9560eef062b6482a2ccd21290 = $this->env->getExtension("native_profiler");
        $__internal_276be819db97a2eecadb72099b50eea262b223d9560eef062b6482a2ccd21290->enter($__internal_276be819db97a2eecadb72099b50eea262b223d9560eef062b6482a2ccd21290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:maskFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276be819db97a2eecadb72099b50eea262b223d9560eef062b6482a2ccd21290->leave($__internal_276be819db97a2eecadb72099b50eea262b223d9560eef062b6482a2ccd21290_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d44e25c4beae8b451b6025ff7b4c150d67f53ecf4845379ffbf5c731a2d3d86 = $this->env->getExtension("native_profiler");
        $__internal_3d44e25c4beae8b451b6025ff7b4c150d67f53ecf4845379ffbf5c731a2d3d86->enter($__internal_3d44e25c4beae8b451b6025ff7b4c150d67f53ecf4845379ffbf5c731a2d3d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1></h1>
            <p></p>
        </div>

        ";
        // line 10
        $this->displayParentBlock("content", $context, $blocks);
        echo "

        <section>
            <article>
                <br>
                <p>Ce n'est pas le bon masque</p>
                <p>En effet le bon masque était : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mask"]) ? $context["mask"] : $this->getContext($context, "mask")), "bytes", array()), "html", null, true);
        echo "</p>
                <br>
                <p><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
        
        $__internal_3d44e25c4beae8b451b6025ff7b4c150d67f53ecf4845379ffbf5c731a2d3d86->leave($__internal_3d44e25c4beae8b451b6025ff7b4c150d67f53ecf4845379ffbf5c731a2d3d86_prof);

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
        return array (  62 => 18,  57 => 16,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1></h1>*/
/*             <p></p>*/
/*         </div>*/
/* */
/*         {{ parent() }}*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <br>*/
/*                 <p>Ce n'est pas le bon masque</p>*/
/*                 <p>En effet le bon masque était : {{ mask.bytes }}</p>*/
/*                 <br>*/
/*                 <p><a href="{{ path('exoMask')}}">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
