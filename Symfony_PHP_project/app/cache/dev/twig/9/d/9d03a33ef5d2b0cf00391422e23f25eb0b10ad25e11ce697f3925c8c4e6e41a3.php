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
        $__internal_a8cd9834b46bc2f5153eca1e6b70b106306dedc26d4890aab835f29f38edbbce = $this->env->getExtension("native_profiler");
        $__internal_a8cd9834b46bc2f5153eca1e6b70b106306dedc26d4890aab835f29f38edbbce->enter($__internal_a8cd9834b46bc2f5153eca1e6b70b106306dedc26d4890aab835f29f38edbbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showChapitre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8cd9834b46bc2f5153eca1e6b70b106306dedc26d4890aab835f29f38edbbce->leave($__internal_a8cd9834b46bc2f5153eca1e6b70b106306dedc26d4890aab835f29f38edbbce_prof);

    }

    // line 3
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0e1b207128a3119cfd25b565b1131f7bee5b5e99600bbfd9372f2a1b15373567 = $this->env->getExtension("native_profiler");
        $__internal_0e1b207128a3119cfd25b565b1131f7bee5b5e99600bbfd9372f2a1b15373567->enter($__internal_0e1b207128a3119cfd25b565b1131f7bee5b5e99600bbfd9372f2a1b15373567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 4
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><img id=\"logo\" src=\"../img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
    ";
        
        $__internal_0e1b207128a3119cfd25b565b1131f7bee5b5e99600bbfd9372f2a1b15373567->leave($__internal_0e1b207128a3119cfd25b565b1131f7bee5b5e99600bbfd9372f2a1b15373567_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d28af945086137e6521a984893b9e93d70f29478d03600ad4cdd1ebc589e2282 = $this->env->getExtension("native_profiler");
        $__internal_d28af945086137e6521a984893b9e93d70f29478d03600ad4cdd1ebc589e2282->enter($__internal_d28af945086137e6521a984893b9e93d70f29478d03600ad4cdd1ebc589e2282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
        <div id=\"welcome\">
            <h1 id=\"titreChapter\">Cours : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo "</h1>
            <p id=\"chapterText\">Ici vous pouvez consulter les chapitres du cours ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo "</p>
        </div>

        <aside id = \"chapter\">
            <h1> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo " </h1>
            <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 18
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
        // line 20
        echo "            </ul>
        </aside>

        <section>
            <article>
                <header>
                    <h1>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")), "nom", array()), "html", null, true);
        echo "</h1>
                    <hr>
                </header>
                <p>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")), "text", array()), "html", null, true);
        echo "
                </p>
            </article>
        </section>

    ";
        
        $__internal_d28af945086137e6521a984893b9e93d70f29478d03600ad4cdd1ebc589e2282->leave($__internal_d28af945086137e6521a984893b9e93d70f29478d03600ad4cdd1ebc589e2282_prof);

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
        return array (  107 => 30,  100 => 26,  92 => 20,  81 => 18,  77 => 17,  72 => 15,  65 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block logo %}*/
/*         <a href="{{ path('index')}}"><img id="logo" src="../img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1 id="titreChapter">Cours : {{ cours.nom }}</h1>*/
/*             <p id="chapterText">Ici vous pouvez consulter les chapitres du cours {{ cours.nom }}</p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1> {{ cours.nom }} </h1>*/
/*             <ul>*/
/*                 {% for chapitre in cours.chapitres %}*/
/*                     <li class="chapterName"><a href="{{ path('showChapitre', {"id": chapitre.id}) }}">{{ chapitre.nom }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </aside>*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <header>*/
/*                     <h1>{{ chapitre.nom }}</h1>*/
/*                     <hr>*/
/*                 </header>*/
/*                 <p>*/
/*                     {{chapitre.text}}*/
/*                 </p>*/
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
