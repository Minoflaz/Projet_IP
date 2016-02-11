<?php

/* IPBundle:Cours:showChapitre.html.twig */
class __TwigTemplate_fcead67b767d67cb7afe5d29856b9ebaf1fd8e069e370f35cfedfb27c33214b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Cours:showChapitre.html.twig", 1);
        $this->blocks = array(
            'logo' => array($this, 'block_logo'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8adc590c68f10a6ab07c8efc7f6f14143762b9bbeb559a4d427d6077c5cc18c = $this->env->getExtension("native_profiler");
        $__internal_d8adc590c68f10a6ab07c8efc7f6f14143762b9bbeb559a4d427d6077c5cc18c->enter($__internal_d8adc590c68f10a6ab07c8efc7f6f14143762b9bbeb559a4d427d6077c5cc18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showChapitre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8adc590c68f10a6ab07c8efc7f6f14143762b9bbeb559a4d427d6077c5cc18c->leave($__internal_d8adc590c68f10a6ab07c8efc7f6f14143762b9bbeb559a4d427d6077c5cc18c_prof);

    }

    // line 3
    public function block_logo($context, array $blocks = array())
    {
        $__internal_004e9b47972f867262423214dd1759d0951992943b429c749e4d165258a8a703 = $this->env->getExtension("native_profiler");
        $__internal_004e9b47972f867262423214dd1759d0951992943b429c749e4d165258a8a703->enter($__internal_004e9b47972f867262423214dd1759d0951992943b429c749e4d165258a8a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 4
        echo "        <a href=\"index\"><img id=\"logo\" src=\"../img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
    ";
        
        $__internal_004e9b47972f867262423214dd1759d0951992943b429c749e4d165258a8a703->leave($__internal_004e9b47972f867262423214dd1759d0951992943b429c749e4d165258a8a703_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f795f908b66bad76e1167e52c9ba8d2f92604029eea35e01cb734efb304c2697 = $this->env->getExtension("native_profiler");
        $__internal_f795f908b66bad76e1167e52c9ba8d2f92604029eea35e01cb734efb304c2697->enter($__internal_f795f908b66bad76e1167e52c9ba8d2f92604029eea35e01cb734efb304c2697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "

        <div id=\"welcome\">
            <h1 id=\"titreChapter\"></h1>
            <p id=\"chapterText\"></p>
        </div>

        <aside id = \"chapter\">
            <h1> Reseau </h1>
            <ul>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 19
            echo "                    <li class=\"chapterName\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showChapitre", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "nom", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
        </aside>

        <section>
            <article>
               ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")), "text", array()), "html", null, true);
        echo "
            </article>
        </section>

    ";
        
        $__internal_f795f908b66bad76e1167e52c9ba8d2f92604029eea35e01cb734efb304c2697->leave($__internal_f795f908b66bad76e1167e52c9ba8d2f92604029eea35e01cb734efb304c2697_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:showChapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  82 => 21,  71 => 19,  67 => 18,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block logo %}*/
/*         <a href="index"><img id="logo" src="../img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/* */
/* */
/*         <div id="welcome">*/
/*             <h1 id="titreChapter"></h1>*/
/*             <p id="chapterText"></p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1> Reseau </h1>*/
/*             <ul>*/
/*                 {% for chapitre in cours.chapitres %}*/
/*                     <li class="chapterName"><a href="{{ path('showChapitre', {"id": chapitre.id}) }}">{{ chapitre.nom }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </aside>*/
/* */
/*         <section>*/
/*             <article>*/
/*                {{chapitre.text}}*/
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
