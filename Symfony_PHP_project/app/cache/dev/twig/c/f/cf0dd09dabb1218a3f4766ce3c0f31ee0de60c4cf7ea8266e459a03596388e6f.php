<?php

/* IPBundle:Default:index.html.twig */
class __TwigTemplate_586a3dba508f0f284884b088dc1bfcbfa553925e5a2c6fa19f3dbdea6febd973 extends Twig_Template
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
        $__internal_6d12c3b3e4651a9f96332558ee88ea4faf8b4a3ce3c8e63c8bd78f1952d8ac91 = $this->env->getExtension("native_profiler");
        $__internal_6d12c3b3e4651a9f96332558ee88ea4faf8b4a3ce3c8e63c8bd78f1952d8ac91->enter($__internal_6d12c3b3e4651a9f96332558ee88ea4faf8b4a3ce3c8e63c8bd78f1952d8ac91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t\t<title>IP13</title>
\t</head>

\t<body>
\t
\t\t<div id=\"container\">
\t\t\t
\t\t\t<div id=\"account\">

                ";
        // line 17
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 18
            echo "                    <a href=\"login\">Connexion</a> | <a href=\"newEleve\">Inscription</a>
                ";
        } else {
            // line 20
            echo "                    <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</a> | <a href=\"logout\">Deconnexion</a>
                ";
        }
        // line 22
        echo "
\t\t\t</div>
\t\t\t<header>
\t\t\t\t<a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
\t\t\t\t<nav>
\t\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t\t<li><a href=\"newChapitre\">Cours</a></li>
\t\t\t\t\t\t<li><a href=\"exercises\">Exercices</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Progression</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Forum</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t
\t\t\t<div id=\"content\">
\t\t
\t\t\t\t<div id=\"welcome\">
\t\t\t\t\t<h1>Consolide tes bases en Reseau avec IP13</h1>
\t\t\t\t\t<p>Bienvenue à toi petit padawan. Sur ce site tu pourras suivre ton apprentissage dans le domaine du réseau,  apprendre et t'exercer, à continuer... </p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<aside id = \"chapter\">
\t\t\t\t\t<h1>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 47
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "nom", array()), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</ul>
\t\t\t\t</aside>
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
\t\t\t\t</div>
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
\t\t\t</div>
\t\t\t
\t\t</div>
\t</body>
</html> 
";
        
        $__internal_6d12c3b3e4651a9f96332558ee88ea4faf8b4a3ce3c8e63c8bd78f1952d8ac91->leave($__internal_6d12c3b3e4651a9f96332558ee88ea4faf8b4a3ce3c8e63c8bd78f1952d8ac91_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_441fd99314686a914f2afe3fd65fe7fdd8af437f039338d44149926f856e15e7 = $this->env->getExtension("native_profiler");
        $__internal_441fd99314686a914f2afe3fd65fe7fdd8af437f039338d44149926f856e15e7->enter($__internal_441fd99314686a914f2afe3fd65fe7fdd8af437f039338d44149926f856e15e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t\t";
        
        $__internal_441fd99314686a914f2afe3fd65fe7fdd8af437f039338d44149926f856e15e7->leave($__internal_441fd99314686a914f2afe3fd65fe7fdd8af437f039338d44149926f856e15e7_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 6,  161 => 5,  96 => 49,  87 => 47,  83 => 46,  78 => 44,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8"/>*/
/* 		{% block stylesheets %}*/
/* 		<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/* 		{% endblock %}*/
/* 		<title>IP13</title>*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 	*/
/* 		<div id="container">*/
/* 			*/
/* 			<div id="account">*/
/* */
/*                 {% if user == null %}*/
/*                     <a href="login">Connexion</a> | <a href="newEleve">Inscription</a>*/
/*                 {% else %}*/
/*                     <a href="#">{{ user.nom }}</a> | <a href="logout">Deconnexion</a>*/
/*                 {% endif %}*/
/* */
/* 			</div>*/
/* 			<header>*/
/* 				<a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/* 				<nav>*/
/* 					<ul id="menu">*/
/* 						<li><a href="newChapitre">Cours</a></li>*/
/* 						<li><a href="exercises">Exercices</a></li>*/
/* 						<li><a href="#">Progression</a></li>*/
/* 						<li><a href="#">Forum</a></li>*/
/* 					</ul>*/
/* 				</nav>*/
/* 			</header>*/
/* 			*/
/* 			<div id="content">*/
/* 		*/
/* 				<div id="welcome">*/
/* 					<h1>Consolide tes bases en Reseau avec IP13</h1>*/
/* 					<p>Bienvenue à toi petit padawan. Sur ce site tu pourras suivre ton apprentissage dans le domaine du réseau,  apprendre et t'exercer, à continuer... </p>*/
/* 				</div>*/
/* 				*/
/* 				<aside id = "chapter">*/
/* 					<h1>{{ cours.nom }}</h1>*/
/* 					<ul>*/
/* 						{% for chapitre in cours.chapitres %}*/
/*                             <li>{{ chapitre.nom }}</li>*/
/*                         {% endfor %}*/
/* 					</ul>*/
/* 				</aside>*/
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
/* 				</div>*/
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
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 	</body>*/
/* </html> */
/* */
