<?php

/* IPBundle:Accueil:index.html.twig */
class __TwigTemplate_0f3399b445c08923a1ebeb1f3857e806e83e32ce1b40df0794d99c5af9a49174 extends Twig_Template
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
        $__internal_71fd24450512fe0bd1e4066539d3bb7d342760e25806c0dcff482a0d7099de8a = $this->env->getExtension("native_profiler");
        $__internal_71fd24450512fe0bd1e4066539d3bb7d342760e25806c0dcff482a0d7099de8a->enter($__internal_71fd24450512fe0bd1e4066539d3bb7d342760e25806c0dcff482a0d7099de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fd24450512fe0bd1e4066539d3bb7d342760e25806c0dcff482a0d7099de8a->leave($__internal_71fd24450512fe0bd1e4066539d3bb7d342760e25806c0dcff482a0d7099de8a_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae4002f0b501ca888ad8a6231cbc02d4a04f7a967e2d1a7300283dada1bdf229 = $this->env->getExtension("native_profiler");
        $__internal_ae4002f0b501ca888ad8a6231cbc02d4a04f7a967e2d1a7300283dada1bdf229->enter($__internal_ae4002f0b501ca888ad8a6231cbc02d4a04f7a967e2d1a7300283dada1bdf229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 17
            echo "\t\t\t\t\t\t\t<li class=\"chapterName\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showChapitre", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "nom", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
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
        
        $__internal_ae4002f0b501ca888ad8a6231cbc02d4a04f7a967e2d1a7300283dada1bdf229->leave($__internal_ae4002f0b501ca888ad8a6231cbc02d4a04f7a967e2d1a7300283dada1bdf229_prof);

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
        return array (  66 => 19,  55 => 17,  51 => 16,  40 => 7,  34 => 6,  11 => 1,);
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
/* 						{% for chapitre in cours.chapitres %}*/
/* 							<li class="chapterName"><a href="{{ path('showChapitre', {"id": chapitre.id}) }}">{{ chapitre.nom }}</a></li>*/
/* 						{% endfor %}*/
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
