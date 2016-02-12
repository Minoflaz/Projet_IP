<?php

/* IPBundle:Progression:Progression.html.twig */
class __TwigTemplate_cc61d1b914b524f92942daa82498212010778c16eca9342317aeecfc66e536c9 extends Twig_Template
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
        $__internal_99378dd52cbe567c7f8168f37aa2e61fefff7f6359b69dd4a7394ecb148f25c5 = $this->env->getExtension("native_profiler");
        $__internal_99378dd52cbe567c7f8168f37aa2e61fefff7f6359b69dd4a7394ecb148f25c5->enter($__internal_99378dd52cbe567c7f8168f37aa2e61fefff7f6359b69dd4a7394ecb148f25c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Progression:Progression.html.twig"));

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
                        <li><a href=\"showCours\">Trouver un cours</a></li>
                        <li><a href=\"newChapitre\">Ajouter un cours</a></li>
                    </ul>
                </li>
                <li><a href=\"exercises\">Exercices</a></li>
                <li><a href=\"#\">Progression</a></li>
                <li><a href=\"#\">Forum</a></li>
            </ul>
        </nav>
    </header>

    <script src=\"Chart.js\"></script>

    <div id=\"content\">

        <aside id = \"chapter\">
            <h1> Reseau </h1>
            <ul>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 50
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
        // line 52
        echo "            </ul>
        </aside>
            <section>
            <article>
                <header>
                    <h1>Votre progression</h1>
                    <hr>
                </header>
                <div class=\"content\">
                    <div style=\"width:100%\">
                        <canvas id=\"canvas\" height=\"450\" width=\"600\"></canvas>
                    </div>
                    <script src=\"jquery-2.2.0.js\"></script>
                <script>
                        var valeurs = [];

                        \$.get('";
        // line 68
        echo $this->env->getExtension('routing')->getPath("recupNotes");
        echo "', function(data) {

                            for (var note in data) {

                                valeurs.push(note.valeur);
                            }

                            console.log(valeurs);

                        });

                        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
                        var lineChartData = {
                            labels : [\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\"],
                            datasets : [
                                {
                                    label: \"My First dataset\",
                                    fillColor : \"rgba(220,220,220,0.2)\",
                                    strokeColor : \"rgba(220,220,220,1)\",
                                    pointColor : \"rgba(220,220,220,1)\",
                                    pointStrokeColor : \"#fff\",
                                    pointHighlightFill : \"#fff\",
                                    pointHighlightStroke : \"rgba(220,220,220,1)\",
                                    data : valeurs
                                }/*,
                                {
                                    label: \"My Second dataset\",
                                    fillColor : \"rgba(151,187,205,0.2)\",
                                    strokeColor : \"rgba(151,187,205,1)\",
                                    pointColor : \"rgba(151,187,205,1)\",
                                    pointStrokeColor : \"#fff\",
                                    pointHighlightFill : \"#fff\",
                                    pointHighlightStroke : \"rgba(151,187,205,1)\",
                                    data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),          randomScalingFactor(),randomScalingFactor()]
                                }*/
                            ]
                
                        }
                
                    window.onload = function(){
                        var ctx = document.getElementById(\"canvas\").getContext(\"2d\");
                        window.myLine = new Chart(ctx).Line(lineChartData, {
                            responsive: true
                        });

                    }
                
                
                    </script>
                </div>
            </article>
        </section>
    </div>
</div>
</body>
</html>";
        
        $__internal_99378dd52cbe567c7f8168f37aa2e61fefff7f6359b69dd4a7394ecb148f25c5->leave($__internal_99378dd52cbe567c7f8168f37aa2e61fefff7f6359b69dd4a7394ecb148f25c5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45a9e63fcdc3587303e7ecd2d5eb7a616f006a14fe807593a79332afce60a498 = $this->env->getExtension("native_profiler");
        $__internal_45a9e63fcdc3587303e7ecd2d5eb7a616f006a14fe807593a79332afce60a498->enter($__internal_45a9e63fcdc3587303e7ecd2d5eb7a616f006a14fe807593a79332afce60a498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_45a9e63fcdc3587303e7ecd2d5eb7a616f006a14fe807593a79332afce60a498->leave($__internal_45a9e63fcdc3587303e7ecd2d5eb7a616f006a14fe807593a79332afce60a498_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Progression:Progression.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 6,  179 => 5,  116 => 68,  98 => 52,  87 => 50,  83 => 49,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/*                         <li><a href="showCours">Trouver un cours</a></li>*/
/*                         <li><a href="newChapitre">Ajouter un cours</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="exercises">Exercices</a></li>*/
/*                 <li><a href="#">Progression</a></li>*/
/*                 <li><a href="#">Forum</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <script src="Chart.js"></script>*/
/* */
/*     <div id="content">*/
/* */
/*         <aside id = "chapter">*/
/*             <h1> Reseau </h1>*/
/*             <ul>*/
/*                 {% for cour in cours %}*/
/*                     <li class="chapterName"><a href="{{ path('showCours', {"id": cour.id}) }}">{{ cour.nom }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </aside>*/
/*             <section>*/
/*             <article>*/
/*                 <header>*/
/*                     <h1>Votre progression</h1>*/
/*                     <hr>*/
/*                 </header>*/
/*                 <div class="content">*/
/*                     <div style="width:100%">*/
/*                         <canvas id="canvas" height="450" width="600"></canvas>*/
/*                     </div>*/
/*                     <script src="jquery-2.2.0.js"></script>*/
/*                 <script>*/
/*                         var valeurs = [];*/
/* */
/*                         $.get('{{ path('recupNotes') }}', function(data) {*/
/* */
/*                             for (var note in data) {*/
/* */
/*                                 valeurs.push(note.valeur);*/
/*                             }*/
/* */
/*                             console.log(valeurs);*/
/* */
/*                         });*/
/* */
/*                         var randomScalingFactor = function(){ return Math.round(Math.random()*100)};*/
/*                         var lineChartData = {*/
/*                             labels : ["January","February","March","April","May","June","July"],*/
/*                             datasets : [*/
/*                                 {*/
/*                                     label: "My First dataset",*/
/*                                     fillColor : "rgba(220,220,220,0.2)",*/
/*                                     strokeColor : "rgba(220,220,220,1)",*/
/*                                     pointColor : "rgba(220,220,220,1)",*/
/*                                     pointStrokeColor : "#fff",*/
/*                                     pointHighlightFill : "#fff",*/
/*                                     pointHighlightStroke : "rgba(220,220,220,1)",*/
/*                                     data : valeurs*/
/*                                 }/*,*/
/*                                 {*/
/*                                     label: "My Second dataset",*/
/*                                     fillColor : "rgba(151,187,205,0.2)",*/
/*                                     strokeColor : "rgba(151,187,205,1)",*/
/*                                     pointColor : "rgba(151,187,205,1)",*/
/*                                     pointStrokeColor : "#fff",*/
/*                                     pointHighlightFill : "#fff",*/
/*                                     pointHighlightStroke : "rgba(151,187,205,1)",*/
/*                                     data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),          randomScalingFactor(),randomScalingFactor()]*/
/*                                 }*//* */
/*                             ]*/
/*                 */
/*                         }*/
/*                 */
/*                     window.onload = function(){*/
/*                         var ctx = document.getElementById("canvas").getContext("2d");*/
/*                         window.myLine = new Chart(ctx).Line(lineChartData, {*/
/*                             responsive: true*/
/*                         });*/
/* */
/*                     }*/
/*                 */
/*                 */
/*                     </script>*/
/*                 </div>*/
/*             </article>*/
/*         </section>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
