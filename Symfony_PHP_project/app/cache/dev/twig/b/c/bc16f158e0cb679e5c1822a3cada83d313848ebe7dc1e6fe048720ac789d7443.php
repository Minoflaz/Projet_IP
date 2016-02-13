<?php

/* IPBundle:Accueil:index.html.twig */
class __TwigTemplate_39031de988d9f82136a77f2aba48fce26fa4532cca9bd7ce1e3472f83ab8b84b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Accueil:index.html.twig", 1);
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
        $__internal_103f014ee370d07e8789a11e9a0d7cc271c8276729e9a63fb5506d511dd1f0ea = $this->env->getExtension("native_profiler");
        $__internal_103f014ee370d07e8789a11e9a0d7cc271c8276729e9a63fb5506d511dd1f0ea->enter($__internal_103f014ee370d07e8789a11e9a0d7cc271c8276729e9a63fb5506d511dd1f0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103f014ee370d07e8789a11e9a0d7cc271c8276729e9a63fb5506d511dd1f0ea->leave($__internal_103f014ee370d07e8789a11e9a0d7cc271c8276729e9a63fb5506d511dd1f0ea_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_217624e04f3cc014953c47b666592bd7ee21238a7e948518e782c20f7b3808bc = $this->env->getExtension("native_profiler");
        $__internal_217624e04f3cc014953c47b666592bd7ee21238a7e948518e782c20f7b3808bc->enter($__internal_217624e04f3cc014953c47b666592bd7ee21238a7e948518e782c20f7b3808bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "\t\t
\t\t\t\t<div id=\"welcome\">
\t\t\t\t\t<h1>Consolide tes bases en Reseau avec IP13</h1>
\t\t\t\t\t<p>Bienvenue à toi petit padawan. Sur ce site tu pourras suivre ton apprentissage dans le domaine du réseau,  apprendre et t'exercer, à continuer... </p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<aside id = \"chapter\">
\t\t\t\t\t<h1> Reseau </h1>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 16
        if (((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")) != null)) {
            // line 17
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
            foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                // line 18
                echo "                                <li class=\"chapterName\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showCours", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                        ";
        }
        // line 21
        echo "\t\t\t\t\t</ul>
        \t\t</aside>
\t\t\t\t\t
\t\t\t\t<section>

                    ";
        // line 26
        if (((isset($context["chapitres"]) ? $context["chapitres"] : $this->getContext($context, "chapitres")) != null)) {
            // line 27
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chapitres"]) ? $context["chapitres"] : $this->getContext($context, "chapitres")));
            foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
                // line 28
                echo "                            <article>
                                <header>
                                    <h1>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "nom", array()), "html", null, true);
                echo "</h1>
                                    <hr>
                                </header>

                                <p>";
                // line 34
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["chapitre"], "text", array()), 0, 225), "html", null, true);
                echo "...</p>

                                <footer>
                                    <p><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showChapitre", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
                echo "\">>Lien vers le chapitre</a></p>
                                </footer>
                            </article>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    ";
        }
        // line 42
        echo "
\t\t\t\t</section>
\t\t\t
\t\t\t";
        
        $__internal_217624e04f3cc014953c47b666592bd7ee21238a7e948518e782c20f7b3808bc->leave($__internal_217624e04f3cc014953c47b666592bd7ee21238a7e948518e782c20f7b3808bc_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  113 => 41,  103 => 37,  97 => 34,  90 => 30,  86 => 28,  81 => 27,  79 => 26,  72 => 21,  69 => 20,  58 => 18,  53 => 17,  51 => 16,  40 => 7,  34 => 6,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* */
/* */
/* 			*/
/* 			{% block content %}*/
/* 		*/
/* 				<div id="welcome">*/
/* 					<h1>Consolide tes bases en Reseau avec IP13</h1>*/
/* 					<p>Bienvenue à toi petit padawan. Sur ce site tu pourras suivre ton apprentissage dans le domaine du réseau,  apprendre et t'exercer, à continuer... </p>*/
/* 				</div>*/
/* 				*/
/* 				<aside id = "chapter">*/
/* 					<h1> Reseau </h1>*/
/* 					<ul>*/
/* 						{% if cours != null %}*/
/*                             {% for cour in cours %}*/
/*                                 <li class="chapterName"><a href="{{ path('showCours', {"id": cour.id}) }}">{{ cour.nom }}</a></li>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/* 					</ul>*/
/*         		</aside>*/
/* 					*/
/* 				<section>*/
/* */
/*                     {% if chapitres != null %}*/
/*                         {% for chapitre in chapitres %}*/
/*                             <article>*/
/*                                 <header>*/
/*                                     <h1>{{ chapitre.nom }}</h1>*/
/*                                     <hr>*/
/*                                 </header>*/
/* */
/*                                 <p>{{ chapitre.text[:225] }}...</p>*/
/* */
/*                                 <footer>*/
/*                                     <p><a href="{{ path('showChapitre', {"id": chapitre.id}) }}">>Lien vers le chapitre</a></p>*/
/*                                 </footer>*/
/*                             </article>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/* 				</section>*/
/* 			*/
/* 			{% endblock %}*/
/* */
