<?php

/* IPBundle:Progression:Progression.html.twig */
class __TwigTemplate_cc61d1b914b524f92942daa82498212010778c16eca9342317aeecfc66e536c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Progression:Progression.html.twig", 1);
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
        $__internal_98e29eba820649a7078ed5c8312ab403f8e9163c3dc40f9996ba8f31af76ce15 = $this->env->getExtension("native_profiler");
        $__internal_98e29eba820649a7078ed5c8312ab403f8e9163c3dc40f9996ba8f31af76ce15->enter($__internal_98e29eba820649a7078ed5c8312ab403f8e9163c3dc40f9996ba8f31af76ce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Progression:Progression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e29eba820649a7078ed5c8312ab403f8e9163c3dc40f9996ba8f31af76ce15->leave($__internal_98e29eba820649a7078ed5c8312ab403f8e9163c3dc40f9996ba8f31af76ce15_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_834e209d5cdfbcf049301aeb29686860afa4c4b8298e5907b947b161dadf0a3a = $this->env->getExtension("native_profiler");
        $__internal_834e209d5cdfbcf049301aeb29686860afa4c4b8298e5907b947b161dadf0a3a->enter($__internal_834e209d5cdfbcf049301aeb29686860afa4c4b8298e5907b947b161dadf0a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <script src=\"Chart.js\"></script>

        <aside id = \"chapter\">
            <h1> Reseau </h1>
            <ul>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 11
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
        // line 13
        echo "            </ul>
        </aside>
            <section>
            <article>
                <header>
                    <h1>Votre progression</h1>
                    <hr>
                </header>
                <div class=\"content\">

                    <!-- <div style=\"width:100%\">
                        <canvas id=\"canvas\" height=\"450\" width=\"600\"></canvas>
                    </div>
                    <script src=\"jquery-2.2.0.js\"></script>
                 <script>
                        var valeurs = [];

                        \$.get('";
        // line 30
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
        
        $__internal_834e209d5cdfbcf049301aeb29686860afa4c4b8298e5907b947b161dadf0a3a->leave($__internal_834e209d5cdfbcf049301aeb29686860afa4c4b8298e5907b947b161dadf0a3a_prof);

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
        return array (  82 => 30,  63 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
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
/*             <section>*/
/*             <article>*/
/*                 <header>*/
/*                     <h1>Votre progression</h1>*/
/*                     <hr>*/
/*                 </header>*/
/*                 <div class="content">*/
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
/*                     </script> -->*/
/*                 </div>*/
/*             </article>*/
/*         </section>*/
/*     {% endblock %}*/
