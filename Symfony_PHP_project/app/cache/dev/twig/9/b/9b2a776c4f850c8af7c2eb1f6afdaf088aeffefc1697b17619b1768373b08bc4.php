<?php

/* IPBundle:Cours:showCours.html.twig */
class __TwigTemplate_2e7033b7451fb294ea3752cb10a9dcfc9ac48d9b97d67ae27c414240218987ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Cours:showCours.html.twig", 1);
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
        $__internal_a418b34b74245f6673aa67c647c2cced45790ab46bbb8c231c0c44084b085d01 = $this->env->getExtension("native_profiler");
        $__internal_a418b34b74245f6673aa67c647c2cced45790ab46bbb8c231c0c44084b085d01->enter($__internal_a418b34b74245f6673aa67c647c2cced45790ab46bbb8c231c0c44084b085d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showCours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a418b34b74245f6673aa67c647c2cced45790ab46bbb8c231c0c44084b085d01->leave($__internal_a418b34b74245f6673aa67c647c2cced45790ab46bbb8c231c0c44084b085d01_prof);

    }

    // line 3
    public function block_logo($context, array $blocks = array())
    {
        $__internal_1252d177974241ecc08ccae614857845aa93065212a6e262877cbebd56d7d117 = $this->env->getExtension("native_profiler");
        $__internal_1252d177974241ecc08ccae614857845aa93065212a6e262877cbebd56d7d117->enter($__internal_1252d177974241ecc08ccae614857845aa93065212a6e262877cbebd56d7d117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 4
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><img id=\"logo\" src=\"../img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
    ";
        
        $__internal_1252d177974241ecc08ccae614857845aa93065212a6e262877cbebd56d7d117->leave($__internal_1252d177974241ecc08ccae614857845aa93065212a6e262877cbebd56d7d117_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_62d91a94c1831dc67fc0fb77d3a79e8bd599f57b878a26fcc8f3a6f987cb85ec = $this->env->getExtension("native_profiler");
        $__internal_62d91a94c1831dc67fc0fb77d3a79e8bd599f57b878a26fcc8f3a6f987cb85ec->enter($__internal_62d91a94c1831dc67fc0fb77d3a79e8bd599f57b878a26fcc8f3a6f987cb85ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 19
            echo "                        <li class=\"chapterName\"><a href=\"";
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
        echo "
            </ul>
        </aside>

        <!--<script>
            var titreChapter = document.getElementById(\"titreChapter\");
            var chapterText = document.getElementById(\"chapterText\")

            var chapter = document.getElementsByClassName(\"chapterName\");

            for(var i=0;i<chapter.length;i++) {

                chapter[i].onclick = function (e) {
                    var nom = ((e.target).innerText);

                };
            }
        </script> -->



    ";
        
        $__internal_62d91a94c1831dc67fc0fb77d3a79e8bd599f57b878a26fcc8f3a6f987cb85ec->leave($__internal_62d91a94c1831dc67fc0fb77d3a79e8bd599f57b878a26fcc8f3a6f987cb85ec_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:showCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  82 => 19,  78 => 18,  72 => 15,  65 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/*                     {% for chapitre in cours.chapitres %}*/
/*                         <li class="chapterName"><a href="{{ path('showChapitre', {"id": chapitre.id}) }}">{{ chapitre.nom }}</a></li>*/
/*                     {% endfor %}*/
/* */
/*             </ul>*/
/*         </aside>*/
/* */
/*         <!--<script>*/
/*             var titreChapter = document.getElementById("titreChapter");*/
/*             var chapterText = document.getElementById("chapterText")*/
/* */
/*             var chapter = document.getElementsByClassName("chapterName");*/
/* */
/*             for(var i=0;i<chapter.length;i++) {*/
/* */
/*                 chapter[i].onclick = function (e) {*/
/*                     var nom = ((e.target).innerText);*/
/* */
/*                 };*/
/*             }*/
/*         </script> -->*/
/* */
/* */
/* */
/*     {% endblock %}*/
