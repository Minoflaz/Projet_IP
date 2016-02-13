<?php

/* IPBundle:Cours:showAllCours.html.twig */
class __TwigTemplate_1c4de1ee09b0ad8bc60a53b547c9335fd150bf3289b1961498fce1bf02d357de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Cours:showAllCours.html.twig", 1);
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
        $__internal_54b33b594fa845ee6423ebb16a34220ac6fec1d8ae254a75cde463fc38c39e95 = $this->env->getExtension("native_profiler");
        $__internal_54b33b594fa845ee6423ebb16a34220ac6fec1d8ae254a75cde463fc38c39e95->enter($__internal_54b33b594fa845ee6423ebb16a34220ac6fec1d8ae254a75cde463fc38c39e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showAllCours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b33b594fa845ee6423ebb16a34220ac6fec1d8ae254a75cde463fc38c39e95->leave($__internal_54b33b594fa845ee6423ebb16a34220ac6fec1d8ae254a75cde463fc38c39e95_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_de1615a5be55e002a67311bbbadf4ab33ba3d552d8be38067d01ab8f11f3028a = $this->env->getExtension("native_profiler");
        $__internal_de1615a5be55e002a67311bbbadf4ab33ba3d552d8be38067d01ab8f11f3028a->enter($__internal_de1615a5be55e002a67311bbbadf4ab33ba3d552d8be38067d01ab8f11f3028a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1 id=\"titreChapter\">Trouver un cours</h1>
            <p id=\"chapterText\">Ici vous pouvez consulter la liste des cours et cliquer sur un pour accéder au chapitres correspondants</p>
        </div>

        <aside id = \"chapter\">
            <h1> Reseau </h1>
            <ul>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 14
            echo "                    <li class=\"chapterName\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showCours", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
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
        
        $__internal_de1615a5be55e002a67311bbbadf4ab33ba3d552d8be38067d01ab8f11f3028a->leave($__internal_de1615a5be55e002a67311bbbadf4ab33ba3d552d8be38067d01ab8f11f3028a_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:showAllCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1 id="titreChapter">Trouver un cours</h1>*/
/*             <p id="chapterText">Ici vous pouvez consulter la liste des cours et cliquer sur un pour accéder au chapitres correspondants</p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1> Reseau </h1>*/
/*             <ul>*/
/*                 {% for cour in cours %}*/
/*                     <li class="chapterName"><a href="{{ path('showCours', {"id": cour.id}) }}">{{ cour.nom }}</a></li>*/
/*                 {% endfor %}*/
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
/*   {% endblock %}*/
