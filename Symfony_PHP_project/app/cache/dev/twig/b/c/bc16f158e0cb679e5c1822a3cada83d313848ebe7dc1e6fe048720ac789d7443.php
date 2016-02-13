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
        $__internal_a691a8b0b1dec7d001101a3e0b11af47cd72224c1b0ff8b4a4adc5b083aef1ad = $this->env->getExtension("native_profiler");
        $__internal_a691a8b0b1dec7d001101a3e0b11af47cd72224c1b0ff8b4a4adc5b083aef1ad->enter($__internal_a691a8b0b1dec7d001101a3e0b11af47cd72224c1b0ff8b4a4adc5b083aef1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a691a8b0b1dec7d001101a3e0b11af47cd72224c1b0ff8b4a4adc5b083aef1ad->leave($__internal_a691a8b0b1dec7d001101a3e0b11af47cd72224c1b0ff8b4a4adc5b083aef1ad_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_15eb5b5d65e8b900e6d6f4475ef3ea1188d46fe3f2c85e3c7d8970c6d0512f1f = $this->env->getExtension("native_profiler");
        $__internal_15eb5b5d65e8b900e6d6f4475ef3ea1188d46fe3f2c85e3c7d8970c6d0512f1f->enter($__internal_15eb5b5d65e8b900e6d6f4475ef3ea1188d46fe3f2c85e3c7d8970c6d0512f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t\t\t\t<article>
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t<h1>Nom premier chapitre</h1>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</header>

\t\t\t\t\t\t<p>Résumé du premier chapitre LoremIpsum na que si no na prout ehiuer eoijje eiojdhbdi duj hçuh doidiju dj duhjgdp jfdpj oidj jdi pfdijoijpoi opij ijfio ofdpijo ij oijoi joij opidj oij ijodi jpoij oijoi joi joij oijop fdijo gopjp.</p>

\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t<p>> <a href=\"#\">Lien vers le cours</a></p>
\t\t\t\t\t\t</footer>
\t\t\t\t\t</article>
\t\t\t\t\t<article>
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t<h1>Nom premier chapitre</h1>
\t\t\t\t\t\t</header>

\t\t\t\t\t\t<p>Résumé du premier chapitre LoremIpsum na que si no na prout ehiuer eoijje eiojdhbdi duj hçuh doidiju dj duhjgdp jfdpj oidj jdi pfdijoijpoi opij ijfio ofdpijo ij oijoi joij opidj oij ijodi jpoij oijoi joi joij oijop fdijo gopjp.</p>

\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t<p>> <a href=\"#\">Lien vers le cours</a></p>
\t\t\t\t\t\t</footer>
\t\t\t\t\t</article>
\t\t\t\t\t<article>
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t<h1>Nom premier chapitre</h1>
\t\t\t\t\t\t</header>

\t\t\t\t\t\t<p>Résumé du premier chapitre LoremIpsum na que si no na prout ehiuer eoijje eiojdhbdi duj hçuh doidiju dj duhjgdp jfdpj oidj jdi pfdijoijpoi opij ijfio ofdpijo ij oijoi joij opidj oij ijodi jpoij oijoi joi joij oijop fdijo gopjp.</p>

\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t<p>> <a href=\"#\">Lien vers le cours</a></p>
\t\t\t\t\t\t</footer>
\t\t\t\t\t</article>
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<div id=\"all_courses\">
\t\t\t\t
\t\t\t\t\t<div id=\"chapter1\" class=\"courses\">
\t\t
\t\t\t\t\t</div>
\t\t
\t\t\t\t\t<div id=\"chapter2\" class=\"courses\">
\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t";
        
        $__internal_15eb5b5d65e8b900e6d6f4475ef3ea1188d46fe3f2c85e3c7d8970c6d0512f1f->leave($__internal_15eb5b5d65e8b900e6d6f4475ef3ea1188d46fe3f2c85e3c7d8970c6d0512f1f_prof);

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
        return array (  72 => 21,  69 => 20,  58 => 18,  53 => 17,  51 => 16,  40 => 7,  34 => 6,  11 => 1,);
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
/* 					<article>*/
/* 						<header>*/
/* 							<h1>Nom premier chapitre</h1>*/
/* 							<hr>*/
/* 						</header>*/
/* */
/* 						<p>Résumé du premier chapitre LoremIpsum na que si no na prout ehiuer eoijje eiojdhbdi duj hçuh doidiju dj duhjgdp jfdpj oidj jdi pfdijoijpoi opij ijfio ofdpijo ij oijoi joij opidj oij ijodi jpoij oijoi joi joij oijop fdijo gopjp.</p>*/
/* */
/* 						<footer>*/
/* 							<p>> <a href="#">Lien vers le cours</a></p>*/
/* 						</footer>*/
/* 					</article>*/
/* 					<article>*/
/* 						<header>*/
/* 							<h1>Nom premier chapitre</h1>*/
/* 						</header>*/
/* */
/* 						<p>Résumé du premier chapitre LoremIpsum na que si no na prout ehiuer eoijje eiojdhbdi duj hçuh doidiju dj duhjgdp jfdpj oidj jdi pfdijoijpoi opij ijfio ofdpijo ij oijoi joij opidj oij ijodi jpoij oijoi joi joij oijop fdijo gopjp.</p>*/
/* */
/* 						<footer>*/
/* 							<p>> <a href="#">Lien vers le cours</a></p>*/
/* 						</footer>*/
/* 					</article>*/
/* 					<article>*/
/* 						<header>*/
/* 							<h1>Nom premier chapitre</h1>*/
/* 						</header>*/
/* */
/* 						<p>Résumé du premier chapitre LoremIpsum na que si no na prout ehiuer eoijje eiojdhbdi duj hçuh doidiju dj duhjgdp jfdpj oidj jdi pfdijoijpoi opij ijfio ofdpijo ij oijoi joij opidj oij ijodi jpoij oijoi joi joij oijop fdijo gopjp.</p>*/
/* */
/* 						<footer>*/
/* 							<p>> <a href="#">Lien vers le cours</a></p>*/
/* 						</footer>*/
/* 					</article>*/
/* 				</section>*/
/* 				*/
/* 				<div id="all_courses">*/
/* 				*/
/* 					<div id="chapter1" class="courses">*/
/* 		*/
/* 					</div>*/
/* 		*/
/* 					<div id="chapter2" class="courses">*/
/* 		*/
/* 					</div>*/
/* 				*/
/* 				</div>*/
/* 			*/
/* 			{% endblock %}*/
/* */
