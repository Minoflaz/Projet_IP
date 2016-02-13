<?php

/* IPBundle:Progression:ProgressionCours.html.twig */
class __TwigTemplate_75430a9bc6182d61e5ec164c9bbfa4056db98ca67a64ca0daa5b6cee2bd34787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Progression:ProgressionCours.html.twig", 1);
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
        $__internal_6cf66bee7e35fb5e5bdcaa4490259f71616832286cb96f38dbe80438cfc52eeb = $this->env->getExtension("native_profiler");
        $__internal_6cf66bee7e35fb5e5bdcaa4490259f71616832286cb96f38dbe80438cfc52eeb->enter($__internal_6cf66bee7e35fb5e5bdcaa4490259f71616832286cb96f38dbe80438cfc52eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Progression:ProgressionCours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cf66bee7e35fb5e5bdcaa4490259f71616832286cb96f38dbe80438cfc52eeb->leave($__internal_6cf66bee7e35fb5e5bdcaa4490259f71616832286cb96f38dbe80438cfc52eeb_prof);

    }

    // line 3
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0c703ac46500101b87f7e52d451f303120786336782ac56f60b32400d4a3890d = $this->env->getExtension("native_profiler");
        $__internal_0c703ac46500101b87f7e52d451f303120786336782ac56f60b32400d4a3890d->enter($__internal_0c703ac46500101b87f7e52d451f303120786336782ac56f60b32400d4a3890d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 4
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><img id=\"logo\" src=\"../img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
    ";
        
        $__internal_0c703ac46500101b87f7e52d451f303120786336782ac56f60b32400d4a3890d->leave($__internal_0c703ac46500101b87f7e52d451f303120786336782ac56f60b32400d4a3890d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d828fc3fe7fdee0ef71ea67ff6999b6a05b2c3fccb963ae1b17d6c3a66ee971 = $this->env->getExtension("native_profiler");
        $__internal_9d828fc3fe7fdee0ef71ea67ff6999b6a05b2c3fccb963ae1b17d6c3a66ee971->enter($__internal_9d828fc3fe7fdee0ef71ea67ff6999b6a05b2c3fccb963ae1b17d6c3a66ee971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
        <script src=\"Chart.js\"></script>

        <aside id = \"chapter\">
            <h1> Reseau </h1>
            <ul>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 15
            echo "                    <li class=\"chapterName\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progressionCours", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </aside>
        <section>
            <article>
                <header>
                    <h1>Votre progression dans le cours ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cour"]) ? $context["cour"] : $this->getContext($context, "cour")), "nom", array()), "html", null, true);
        echo "</h1>
                    <hr>
                </header>
                <div class=\"content\">
                    <ul>
                        ";
        // line 27
        $context["moyenne"] = 0;
        // line 28
        echo "                        ";
        $context["nbrNote"] = 0;
        // line 29
        echo "
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cour"]) ? $context["cour"] : $this->getContext($context, "cour")), "notes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 31
            echo "                            ";
            if (($this->getAttribute($context["note"], "eleve", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 32
                echo "                                <li class=\"chapterName\">Note : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "valeur", array()), "html", null, true);
                echo "</li>
                                ";
                // line 33
                $context["moyenne"] = ((isset($context["moyenne"]) ? $context["moyenne"] : $this->getContext($context, "moyenne")) + $this->getAttribute($context["note"], "valeur", array()));
                // line 34
                echo "                                ";
                $context["nbrNote"] = ((isset($context["nbrNote"]) ? $context["nbrNote"] : $this->getContext($context, "nbrNote")) + 1);
                // line 35
                echo "                            ";
            }
            // line 36
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </ul>

                    ";
        // line 39
        $context["moyenne"] = ((isset($context["moyenne"]) ? $context["moyenne"] : $this->getContext($context, "moyenne")) / (isset($context["nbrNote"]) ? $context["nbrNote"] : $this->getContext($context, "nbrNote")));
        // line 40
        echo "
                    <p>Moyenne : ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["moyenne"]) ? $context["moyenne"] : $this->getContext($context, "moyenne")), "html", null, true);
        echo "</p>

                    <!-- <div style=\"width:100%\">
                        <canvas id=\"canvas\" height=\"450\" width=\"600\"></canvas>
                    </div>
                    <script src=\"jquery-2.2.0.js\"></script>
                 <script>
                        var valeurs = [];

                        \$.get('";
        // line 50
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


                    </script> -->
                </div>
            </article>
        </section>
    ";
        
        $__internal_9d828fc3fe7fdee0ef71ea67ff6999b6a05b2c3fccb963ae1b17d6c3a66ee971->leave($__internal_9d828fc3fe7fdee0ef71ea67ff6999b6a05b2c3fccb963ae1b17d6c3a66ee971_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Progression:ProgressionCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  138 => 41,  135 => 40,  133 => 39,  129 => 37,  123 => 36,  120 => 35,  117 => 34,  115 => 33,  110 => 32,  107 => 31,  103 => 30,  100 => 29,  97 => 28,  95 => 27,  87 => 22,  80 => 17,  69 => 15,  65 => 14,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*         <script src="Chart.js"></script>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1> Reseau </h1>*/
/*             <ul>*/
/*                 {% for cour in cours %}*/
/*                     <li class="chapterName"><a href="{{ path('progressionCours', {"id": cour.id}) }}">{{ cour.nom }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </aside>*/
/*         <section>*/
/*             <article>*/
/*                 <header>*/
/*                     <h1>Votre progression dans le cours {{ cour.nom }}</h1>*/
/*                     <hr>*/
/*                 </header>*/
/*                 <div class="content">*/
/*                     <ul>*/
/*                         {% set moyenne=0 %}*/
/*                         {% set nbrNote=0 %}*/
/* */
/*                         {% for note in cour.notes %}*/
/*                             {% if note.eleve == app.user %}*/
/*                                 <li class="chapterName">Note : {{ note.valeur }}</li>*/
/*                                 {% set moyenne =  moyenne  +  note.valeur %}*/
/*                                 {% set nbrNote =  nbrNote  + 1 %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/* */
/*                     {% set moyenne = moyenne/nbrNote  %}*/
/* */
/*                     <p>Moyenne : {{ moyenne }}</p>*/
/* */
/*                     <!-- <div style="width:100%">*/
/*                         <canvas id="canvas" height="450" width="600"></canvas>*/
/*                     </div>*/
/*                     <script src="jquery-2.2.0.js"></script>*/
/*                  <script>*/
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
/* */
/*                         }*/
/* */
/*                     window.onload = function(){*/
/*                         var ctx = document.getElementById("canvas").getContext("2d");*/
/*                         window.myLine = new Chart(ctx).Line(lineChartData, {*/
/*                             responsive: true*/
/*                         });*/
/* */
/*                     }*/
/* */
/* */
/*                     </script> -->*/
/*                 </div>*/
/*             </article>*/
/*         </section>*/
/*     {% endblock %}*/
