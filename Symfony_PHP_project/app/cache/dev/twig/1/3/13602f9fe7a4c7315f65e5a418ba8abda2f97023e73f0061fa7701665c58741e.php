<?php

/* IPBundle:Default:index.html.twig */
class __TwigTemplate_fc72c25f1c02dab7d946519cbb459023a504356a6ee1ce51dbe510d1d860d2f6 extends Twig_Template
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
        $__internal_4dd80d00a07b9c87757b194ba4d2efab11ba4e0fab06b2e0e55a750773df3d2c = $this->env->getExtension("native_profiler");
        $__internal_4dd80d00a07b9c87757b194ba4d2efab11ba4e0fab06b2e0e55a750773df3d2c->enter($__internal_4dd80d00a07b9c87757b194ba4d2efab11ba4e0fab06b2e0e55a750773df3d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:index.html.twig"));

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
\t\t\t\t\t\t<li><a href=\"#\">Cours</a>
\t\t                    <ul>
\t\t                        <li><a href=\"showCours\">Trouver un cours</a></li>
\t\t                        <li><a href=\"newChapitre\">Ajouter un cours</a></li>
\t\t                    </ul>
                \t\t</li>
\t\t\t\t\t\t<li><a href=\"exercises\">Exercices</a></li>
\t\t\t\t\t\t<li><a href=\"progression\">Progression</a></li>
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
            <h1> Reseau </h1>
            <ul>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 52
            echo "                    <li class=\"chapterName\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showChapitre", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "nom", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
        </aside>
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
        
        $__internal_4dd80d00a07b9c87757b194ba4d2efab11ba4e0fab06b2e0e55a750773df3d2c->leave($__internal_4dd80d00a07b9c87757b194ba4d2efab11ba4e0fab06b2e0e55a750773df3d2c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d91e0dace652b247f64711fd2b9162967cece32bf0af2e42e65e9e2cb2cbc11 = $this->env->getExtension("native_profiler");
        $__internal_4d91e0dace652b247f64711fd2b9162967cece32bf0af2e42e65e9e2cb2cbc11->enter($__internal_4d91e0dace652b247f64711fd2b9162967cece32bf0af2e42e65e9e2cb2cbc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t\t";
        
        $__internal_4d91e0dace652b247f64711fd2b9162967cece32bf0af2e42e65e9e2cb2cbc11->leave($__internal_4d91e0dace652b247f64711fd2b9162967cece32bf0af2e42e65e9e2cb2cbc11_prof);

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
        return array (  171 => 6,  165 => 5,  100 => 54,  89 => 52,  85 => 51,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/* 						<li><a href="#">Cours</a>*/
/* 		                    <ul>*/
/* 		                        <li><a href="showCours">Trouver un cours</a></li>*/
/* 		                        <li><a href="newChapitre">Ajouter un cours</a></li>*/
/* 		                    </ul>*/
/*                 		</li>*/
/* 						<li><a href="exercises">Exercices</a></li>*/
/* 						<li><a href="progression">Progression</a></li>*/
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
/*             <h1> Reseau </h1>*/
/*             <ul>*/
/*                 {% for chapitre in cours.chapitres %}*/
/*                     <li class="chapterName"><a href="{{ path('showChapitre', {"id": chapitre.id}) }}">{{ chapitre.nom }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </aside>*/
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
