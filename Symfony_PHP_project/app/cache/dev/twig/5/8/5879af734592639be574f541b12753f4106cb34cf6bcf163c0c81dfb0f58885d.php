<?php

/* IPBundle:Cours:showCours.html.twig */
class __TwigTemplate_887f9054622ac0aedf165d1b712e35501a66daeb45e830ff0d0db0d68a62c998 extends Twig_Template
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
        $__internal_4734c2018b268020c7f7cae5e6c1af5a743c8faaca26d7c7fee87f9d0dffd83f = $this->env->getExtension("native_profiler");
        $__internal_4734c2018b268020c7f7cae5e6c1af5a743c8faaca26d7c7fee87f9d0dffd83f->enter($__internal_4734c2018b268020c7f7cae5e6c1af5a743c8faaca26d7c7fee87f9d0dffd83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showCours.html.twig"));

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
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><img id=\"logo\" src=\"../img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
        <nav>
            <ul id=\"menu\">

                <li><a href=\"#\">Cours</a>
                    <ul>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("showAllCours");
        echo "\">Trouver un cours</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("newCours");
        echo "\">Ajouter un cours</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("newChapitre");
        echo "\">Ajouter un chapitre</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("exercises");
        echo "\">Exercices</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("progression");
        echo "\">Progression</a></li>
                <li><a href=\"#\">Forum</a></li>
            </ul>
        </nav>
    </header>

    <div id=\"content\">

        <div id=\"welcome\">
            <h1 id=\"titreChapter\">Cours : ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo "</h1>
            <p id=\"chapterText\">Ici vous pouvez consulter les chapitres du cours ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo "</p>
        </div>

        <aside id = \"chapter\">
            <h1> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo " </h1>
            <ul>

                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 55
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
        // line 57
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



    </div>
</div>
</body>
</html>";
        
        $__internal_4734c2018b268020c7f7cae5e6c1af5a743c8faaca26d7c7fee87f9d0dffd83f->leave($__internal_4734c2018b268020c7f7cae5e6c1af5a743c8faaca26d7c7fee87f9d0dffd83f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_895ba380700aaca8258bf83964666fbe1f1c0c00877e67b7437251dc1da05d17 = $this->env->getExtension("native_profiler");
        $__internal_895ba380700aaca8258bf83964666fbe1f1c0c00877e67b7437251dc1da05d17->enter($__internal_895ba380700aaca8258bf83964666fbe1f1c0c00877e67b7437251dc1da05d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_895ba380700aaca8258bf83964666fbe1f1c0c00877e67b7437251dc1da05d17->leave($__internal_895ba380700aaca8258bf83964666fbe1f1c0c00877e67b7437251dc1da05d17_prof);

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
        return array (  167 => 6,  161 => 5,  130 => 57,  119 => 55,  115 => 54,  109 => 51,  102 => 47,  98 => 46,  86 => 37,  82 => 36,  76 => 33,  72 => 32,  68 => 31,  59 => 25,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/*         <a href="{{ path('index')}}"><img id="logo" src="../img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*         <nav>*/
/*             <ul id="menu">*/
/* */
/*                 <li><a href="#">Cours</a>*/
/*                     <ul>*/
/*                         <li><a href="{{ path('showAllCours')}}">Trouver un cours</a></li>*/
/*                         <li><a href="{{ path('newCours')}}">Ajouter un cours</a></li>*/
/*                         <li><a href="{{ path('newChapitre')}}">Ajouter un chapitre</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="{{ path('exercises')}}">Exercices</a></li>*/
/*                 <li><a href="{{  path('progression')}}">Progression</a></li>*/
/*                 <li><a href="#">Forum</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <div id="content">*/
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
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/