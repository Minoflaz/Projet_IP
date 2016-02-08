<?php

/* IPBundle:Default:Progression.html.twig */
class __TwigTemplate_097a8e394bb5b34bf23dd058e4be1ca2dcd84ecb7c7d282cf1b55f521f68d97e extends Twig_Template
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
        $__internal_9a313b38e02c548b5a89e1526cbe3c04832cd400cf2e19ab1154abf6edb60f94 = $this->env->getExtension("native_profiler");
        $__internal_9a313b38e02c548b5a89e1526cbe3c04832cd400cf2e19ab1154abf6edb60f94->enter($__internal_9a313b38e02c548b5a89e1526cbe3c04832cd400cf2e19ab1154abf6edb60f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:Progression.html.twig"));

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
                        <li><a href=\"#\">Trouver un cours</a></li>
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 50
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "nom", array()), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
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
            
            
                <script>
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
                                    data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),          randomScalingFactor(),randomScalingFactor()]
                                },
                                {
                                    label: \"My Second dataset\",
                                    fillColor : \"rgba(151,187,205,0.2)\",
                                    strokeColor : \"rgba(151,187,205,1)\",
                                    pointColor : \"rgba(151,187,205,1)\",
                                    pointStrokeColor : \"#fff\",
                                    pointHighlightFill : \"#fff\",
                                    pointHighlightStroke : \"rgba(151,187,205,1)\",
                                    data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),          randomScalingFactor(),randomScalingFactor()]
                                }
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
        
        $__internal_9a313b38e02c548b5a89e1526cbe3c04832cd400cf2e19ab1154abf6edb60f94->leave($__internal_9a313b38e02c548b5a89e1526cbe3c04832cd400cf2e19ab1154abf6edb60f94_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5af0f9d344049f1fb98beb0c21d7d7dfe1ce82a946a470fed2fac23502b640b2 = $this->env->getExtension("native_profiler");
        $__internal_5af0f9d344049f1fb98beb0c21d7d7dfe1ce82a946a470fed2fac23502b640b2->enter($__internal_5af0f9d344049f1fb98beb0c21d7d7dfe1ce82a946a470fed2fac23502b640b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_5af0f9d344049f1fb98beb0c21d7d7dfe1ce82a946a470fed2fac23502b640b2->leave($__internal_5af0f9d344049f1fb98beb0c21d7d7dfe1ce82a946a470fed2fac23502b640b2_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:Progression.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 6,  161 => 5,  96 => 52,  87 => 50,  83 => 49,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/*                         <li><a href="#">Trouver un cours</a></li>*/
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
/*                 {% for chapitre in cours.chapitres %}*/
/*                     <li>{{ chapitre.nom }}</li>*/
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
/*             */
/*             */
/*                 <script>*/
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
/*                                     data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),          randomScalingFactor(),randomScalingFactor()]*/
/*                                 },*/
/*                                 {*/
/*                                     label: "My Second dataset",*/
/*                                     fillColor : "rgba(151,187,205,0.2)",*/
/*                                     strokeColor : "rgba(151,187,205,1)",*/
/*                                     pointColor : "rgba(151,187,205,1)",*/
/*                                     pointStrokeColor : "#fff",*/
/*                                     pointHighlightFill : "#fff",*/
/*                                     pointHighlightStroke : "rgba(151,187,205,1)",*/
/*                                     data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),          randomScalingFactor(),randomScalingFactor()]*/
/*                                 }*/
/*                             ]*/
/*                 */
/*                         }*/
/*                 */
/*                     window.onload = function(){*/
/*                         var ctx = document.getElementById("canvas").getContext("2d");*/
/*                         window.myLine = new Chart(ctx).Line(lineChartData, {*/
/*                             responsive: true*/
/*                         });*/
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
