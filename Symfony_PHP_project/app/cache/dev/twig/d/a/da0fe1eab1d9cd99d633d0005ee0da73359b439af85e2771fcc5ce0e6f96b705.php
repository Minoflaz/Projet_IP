<?php

/* IPBundle:Cours:showAllCours.html.twig */
class __TwigTemplate_59f712e588294c538beccd0f0a9eddaa28a3a18e99be22d165e896d3ccb0ed74 extends Twig_Template
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
        $__internal_1fc1aef69b4384ad11456e3f98cef9843ef18b78b737e67447b3a08117e0df37 = $this->env->getExtension("native_profiler");
        $__internal_1fc1aef69b4384ad11456e3f98cef9843ef18b78b737e67447b3a08117e0df37->enter($__internal_1fc1aef69b4384ad11456e3f98cef9843ef18b78b737e67447b3a08117e0df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showAllCours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc1aef69b4384ad11456e3f98cef9843ef18b78b737e67447b3a08117e0df37->leave($__internal_1fc1aef69b4384ad11456e3f98cef9843ef18b78b737e67447b3a08117e0df37_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae1a939cd13770af678f16f4f8c55d336ea7a87b7220c5b83d77577393d5c5bc = $this->env->getExtension("native_profiler");
        $__internal_ae1a939cd13770af678f16f4f8c55d336ea7a87b7220c5b83d77577393d5c5bc->enter($__internal_ae1a939cd13770af678f16f4f8c55d336ea7a87b7220c5b83d77577393d5c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ae1a939cd13770af678f16f4f8c55d336ea7a87b7220c5b83d77577393d5c5bc->leave($__internal_ae1a939cd13770af678f16f4f8c55d336ea7a87b7220c5b83d77577393d5c5bc_prof);

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
