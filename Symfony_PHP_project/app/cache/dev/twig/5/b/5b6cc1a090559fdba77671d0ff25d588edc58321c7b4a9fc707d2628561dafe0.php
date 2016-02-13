<?php

/* IPBundle:Progression:compte.html.twig */
class __TwigTemplate_2ba305ad11377afb6fa32fff475ad615bb6fd38bda8abe79ae8e59c52ff61b47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Progression:compte.html.twig", 1);
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
        $__internal_df17d164553e98416e3d6ead8bf89bcc1f170359ff5a3ace9fc461a90e648d6f = $this->env->getExtension("native_profiler");
        $__internal_df17d164553e98416e3d6ead8bf89bcc1f170359ff5a3ace9fc461a90e648d6f->enter($__internal_df17d164553e98416e3d6ead8bf89bcc1f170359ff5a3ace9fc461a90e648d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Progression:compte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df17d164553e98416e3d6ead8bf89bcc1f170359ff5a3ace9fc461a90e648d6f->leave($__internal_df17d164553e98416e3d6ead8bf89bcc1f170359ff5a3ace9fc461a90e648d6f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_74b66e543a95518dea854f8a159d255eec85ab053200af7309317fe33a45f0f1 = $this->env->getExtension("native_profiler");
        $__internal_74b66e543a95518dea854f8a159d255eec85ab053200af7309317fe33a45f0f1->enter($__internal_74b66e543a95518dea854f8a159d255eec85ab053200af7309317fe33a45f0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <script src=\"chart.js\"></script>

        <div id=\"welcome\">
            <h1>Votre compte</h1>
            <p>Vous pouvez trouver ici les détails de votre progression.</p>
        </div>

        <aside id=\"infos\">
            <h1>Informations</h1>
            <ul style=\"margin-top: 2em;\">
                <li>[LOGIN]</li>
                <li>[CLASSE]</li>
                <li>[PROFESSEUR]</li>
                <li id=\"modifier\"><input type=\"button\" id=\"modifier\" name=\"modifier\" value=\"Modifier\" onclick=\"self.location.href='modifier.html'\"></li>
            </ul>
        </aside>

        <section>
            <article>
                <header>
                    <h1>Details</h1>
                    <hr>
                </header>

                <table id=\"progression\">
                    <tbody>
                    <tr>
                        <td>
                            <div class=\"canvas\" id=\"canvas-chapitre\">
                                <canvas id=\"chart-chapitre\" width=\"500\" height=\"500\"/>
                            </div>
                        </td>
                        <td>
                            <div class=\"canvas\" id=\"canvas-cours\">
                                <canvas id=\"chart-cours\" width=\"500\" height=\"500\"/>
                            </div>
                        </td>
                        <td>
                            <div class=\"canvas\" id=\"canvas-exos\">
                                <canvas id=\"chart-exos\" width=\"500\" height=\"500\"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class=\"doughnut_name\">Chapitre 1</span></td>
                        <td><span class=\"doughnut_name\">Cours</span></td>
                        <td><span class=\"doughnut_name\">Exercices</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class=\"canvas\" id=\"canvas-chapitre2\">
                                <canvas id=\"chart-chapitre2\" width=\"500\" height=\"500\"/>
                            </div>
                        </td>
                        <td>
                            <div class=\"canvas\" id=\"canvas-cours2\">
                                <canvas id=\"chart-cours2\" width=\"500\" height=\"500\"/>
                            </div>
                        </td>
                        <td>
                            <div class=\"canvas\" id=\"canvas-exos2\">
                                <canvas id=\"chart-exos2\" width=\"500\" height=\"500\"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class=\"doughnut_name\">Chapitre 2</span></td>
                        <td><span class=\"doughnut_name\">Cours</span></td>
                        <td><span class=\"doughnut_name\">Exercices</span></td>
                    </tr>
                    </tbody>
                </table>


                <script src=\"doughnut.js\"></script>

            </article>
        </section>

    ";
        
        $__internal_74b66e543a95518dea854f8a159d255eec85ab053200af7309317fe33a45f0f1->leave($__internal_74b66e543a95518dea854f8a159d255eec85ab053200af7309317fe33a45f0f1_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Progression:compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <script src="chart.js"></script>*/
/* */
/*         <div id="welcome">*/
/*             <h1>Votre compte</h1>*/
/*             <p>Vous pouvez trouver ici les détails de votre progression.</p>*/
/*         </div>*/
/* */
/*         <aside id="infos">*/
/*             <h1>Informations</h1>*/
/*             <ul style="margin-top: 2em;">*/
/*                 <li>[LOGIN]</li>*/
/*                 <li>[CLASSE]</li>*/
/*                 <li>[PROFESSEUR]</li>*/
/*                 <li id="modifier"><input type="button" id="modifier" name="modifier" value="Modifier" onclick="self.location.href='modifier.html'"></li>*/
/*             </ul>*/
/*         </aside>*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <header>*/
/*                     <h1>Details</h1>*/
/*                     <hr>*/
/*                 </header>*/
/* */
/*                 <table id="progression">*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <div class="canvas" id="canvas-chapitre">*/
/*                                 <canvas id="chart-chapitre" width="500" height="500"/>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             <div class="canvas" id="canvas-cours">*/
/*                                 <canvas id="chart-cours" width="500" height="500"/>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             <div class="canvas" id="canvas-exos">*/
/*                                 <canvas id="chart-exos" width="500" height="500"/>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td><span class="doughnut_name">Chapitre 1</span></td>*/
/*                         <td><span class="doughnut_name">Cours</span></td>*/
/*                         <td><span class="doughnut_name">Exercices</span></td>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/*                         <td>*/
/*                             <div class="canvas" id="canvas-chapitre2">*/
/*                                 <canvas id="chart-chapitre2" width="500" height="500"/>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             <div class="canvas" id="canvas-cours2">*/
/*                                 <canvas id="chart-cours2" width="500" height="500"/>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             <div class="canvas" id="canvas-exos2">*/
/*                                 <canvas id="chart-exos2" width="500" height="500"/>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td><span class="doughnut_name">Chapitre 2</span></td>*/
/*                         <td><span class="doughnut_name">Cours</span></td>*/
/*                         <td><span class="doughnut_name">Exercices</span></td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/* */
/*                 <script src="doughnut.js"></script>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
