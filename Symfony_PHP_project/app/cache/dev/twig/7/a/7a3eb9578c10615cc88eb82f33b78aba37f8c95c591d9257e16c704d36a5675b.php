<?php

/* IPBundle:Cours:showAllCours.html.twig */
class __TwigTemplate_1c4de1ee09b0ad8bc60a53b547c9335fd150bf3289b1961498fce1bf02d357de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5089fe6a3854b2dc0f627d588f90a4da19acc63fe05b8a064ef93fe311c6b59d = $this->env->getExtension("native_profiler");
        $__internal_5089fe6a3854b2dc0f627d588f90a4da19acc63fe05b8a064ef93fe311c6b59d->enter($__internal_5089fe6a3854b2dc0f627d588f90a4da19acc63fe05b8a064ef93fe311c6b59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showAllCours.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <title>IP13</title>
</head>

<body>

<div id=\"container\">

    <div id=\"account\">

        ";
        // line 17
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 18
            echo "            <a href=\"login\">Connexion</a> | <a href=\"newEleve\">Inscription</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</a> | <a href=\"logout\">Deconnexion</a>
        ";
        }
        // line 22
        echo "
    </div>
    <header>
        <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
        <nav>
            <ul id=\"menu\">

                <li><a href=\"#\">Cours</a>
                    <ul>
                        <li><a href=\"showAllCours\">Trouver un cours</a></li>
                        <li><a href=\"newChapitre\">Ajouter un cours</a></li>
                    </ul>
                </li>
                <li><a href=\"exercises\">Exercices</a></li>
                <li><a href=\"progression\">Progression</a></li>
                <li><a href=\"#\">Forum</a></li>
            </ul>
        </nav>
    </header>

    <div id=\"content\">

        <div id=\"welcome\">
            <h1 id=\"titreChapter\"></h1>
            <p id=\"chapterText\"></p>
        </div>

        <aside id = \"chapter\">
            <h1> Reseau </h1>
            <ul>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 53
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
        // line 55
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



    </div>
</div>
</body>
</html>";
        
        $__internal_5089fe6a3854b2dc0f627d588f90a4da19acc63fe05b8a064ef93fe311c6b59d->leave($__internal_5089fe6a3854b2dc0f627d588f90a4da19acc63fe05b8a064ef93fe311c6b59d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea52115bd1c4950d316e5fed2072ab048cc9b06aa664158cca947eb7b81e8d4e = $this->env->getExtension("native_profiler");
        $__internal_ea52115bd1c4950d316e5fed2072ab048cc9b06aa664158cca947eb7b81e8d4e->enter($__internal_ea52115bd1c4950d316e5fed2072ab048cc9b06aa664158cca947eb7b81e8d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_ea52115bd1c4950d316e5fed2072ab048cc9b06aa664158cca947eb7b81e8d4e->leave($__internal_ea52115bd1c4950d316e5fed2072ab048cc9b06aa664158cca947eb7b81e8d4e_prof);

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
        return array (  137 => 6,  131 => 5,  101 => 55,  90 => 53,  86 => 52,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/*     {% endblock %}*/
/*     <title>IP13</title>*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div id="container">*/
/* */
/*     <div id="account">*/
/* */
/*         {% if user == null %}*/
/*             <a href="login">Connexion</a> | <a href="newEleve">Inscription</a>*/
/*         {% else %}*/
/*             <a href="#">{{ user.nom }}</a> | <a href="logout">Deconnexion</a>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/*     <header>*/
/*         <a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*         <nav>*/
/*             <ul id="menu">*/
/* */
/*                 <li><a href="#">Cours</a>*/
/*                     <ul>*/
/*                         <li><a href="showAllCours">Trouver un cours</a></li>*/
/*                         <li><a href="newChapitre">Ajouter un cours</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="exercises">Exercices</a></li>*/
/*                 <li><a href="progression">Progression</a></li>*/
/*                 <li><a href="#">Forum</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <div id="content">*/
/* */
/*         <div id="welcome">*/
/*             <h1 id="titreChapter"></h1>*/
/*             <p id="chapterText"></p>*/
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
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
