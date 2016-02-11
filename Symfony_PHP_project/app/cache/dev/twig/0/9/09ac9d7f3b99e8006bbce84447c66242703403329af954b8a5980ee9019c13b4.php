<?php

/* IPBundle:Exercices:exoMask.html.twig */
class __TwigTemplate_79def68019f37c1bf8cb8e10e160ea3758ae790504f00ee4ed6a271170830652 extends Twig_Template
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
        $__internal_072fc887754a2a0dcf2480e13d6f5b3f21a86153de450da24f7f13d233253345 = $this->env->getExtension("native_profiler");
        $__internal_072fc887754a2a0dcf2480e13d6f5b3f21a86153de450da24f7f13d233253345->enter($__internal_072fc887754a2a0dcf2480e13d6f5b3f21a86153de450da24f7f13d233253345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoMask.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\"/>
\t";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t<title>IP13</title>
</head>

<body>

<div id=\"container\">

\t<div id=\"account\">

\t\t";
        // line 17
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 18
            echo "\t\t\t<a href=\"login\">Connexion</a> | <a href=\"newEleve\">Inscription</a>
\t\t";
        } else {
            // line 20
            echo "\t\t\t<a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</a> | <a href=\"logout\">Deconnexion</a>
\t\t";
        }
        // line 22
        echo "
\t</div>
\t<header>
\t\t<a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
\t\t<nav>
\t\t\t<ul id=\"menu\">
\t\t\t\t<li><a href=\"#\">Cours</a>
                    <ul>
                        <li><a href=\"showCours\">Trouver un cours</a></li>
                        <li><a href=\"newChapitre\">Ajouter un cours</a></li>
                    </ul>
                </li>
\t\t\t\t<li><a href=\"exercises\">Exercices</a></li>
\t\t\t\t<li><a href=\"progression\">Progression</a></li>
\t\t\t\t<li><a href=\"#\">Forum</a></li>
\t\t\t</ul>
\t\t</nav>
\t</header>

\t<div id=\"content\">

\t\t<div id=\"welcome\">
\t\t\t<h1>Faire des exercices</h1>
\t\t\t<p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
\t\t</div>

\t\t<aside id = \"chapter\">
\t\t\t<h1>Exercices</h1>
\t\t\t<ul>

\t\t\t\t<li><a href=\"exoClass\">Exo classe</a></li>

\t\t\t\t<li><a href=\"exoMask\">Exo masque</a></li>

\t\t\t\t<li><a href=\"#\">Exo table de routage</a></li>

\t\t\t</ul>
\t\t</aside>

        <section>
            <article>

                <div>

                    Donnez le masque de sous réseau pour une adresse ip : ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, (isset($context["nbSubNet"]) ? $context["nbSubNet"] : $this->getContext($context, "nbSubNet")), "html", null, true);
        echo " sous réseaux

                    </br>

                </div>

                <div>
                    ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                </div>

            </article>
        </section>

    </div>
</div>
</body>
</html>";
        
        $__internal_072fc887754a2a0dcf2480e13d6f5b3f21a86153de450da24f7f13d233253345->leave($__internal_072fc887754a2a0dcf2480e13d6f5b3f21a86153de450da24f7f13d233253345_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7095e3a6ad981d40fa5b210e548980d97b3dc9d22b4003fe05e3c49080da0da2 = $this->env->getExtension("native_profiler");
        $__internal_7095e3a6ad981d40fa5b210e548980d97b3dc9d22b4003fe05e3c49080da0da2->enter($__internal_7095e3a6ad981d40fa5b210e548980d97b3dc9d22b4003fe05e3c49080da0da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t";
        
        $__internal_7095e3a6ad981d40fa5b210e548980d97b3dc9d22b4003fe05e3c49080da0da2->leave($__internal_7095e3a6ad981d40fa5b210e548980d97b3dc9d22b4003fe05e3c49080da0da2_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:exoMask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 6,  130 => 5,  112 => 73,  100 => 66,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="UTF-8"/>*/
/* 	{% block stylesheets %}*/
/* 		<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/* 	{% endblock %}*/
/* 	<title>IP13</title>*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div id="container">*/
/* */
/* 	<div id="account">*/
/* */
/* 		{% if user == null %}*/
/* 			<a href="login">Connexion</a> | <a href="newEleve">Inscription</a>*/
/* 		{% else %}*/
/* 			<a href="#">{{ user.nom }}</a> | <a href="logout">Deconnexion</a>*/
/* 		{% endif %}*/
/* */
/* 	</div>*/
/* 	<header>*/
/* 		<a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/* 		<nav>*/
/* 			<ul id="menu">*/
/* 				<li><a href="#">Cours</a>*/
/*                     <ul>*/
/*                         <li><a href="showCours">Trouver un cours</a></li>*/
/*                         <li><a href="newChapitre">Ajouter un cours</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/* 				<li><a href="exercises">Exercices</a></li>*/
/* 				<li><a href="progression">Progression</a></li>*/
/* 				<li><a href="#">Forum</a></li>*/
/* 			</ul>*/
/* 		</nav>*/
/* 	</header>*/
/* */
/* 	<div id="content">*/
/* */
/* 		<div id="welcome">*/
/* 			<h1>Faire des exercices</h1>*/
/* 			<p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/* 		</div>*/
/* */
/* 		<aside id = "chapter">*/
/* 			<h1>Exercices</h1>*/
/* 			<ul>*/
/* */
/* 				<li><a href="exoClass">Exo classe</a></li>*/
/* */
/* 				<li><a href="exoMask">Exo masque</a></li>*/
/* */
/* 				<li><a href="#">Exo table de routage</a></li>*/
/* */
/* 			</ul>*/
/* 		</aside>*/
/* */
/*         <section>*/
/*             <article>*/
/* */
/*                 <div>*/
/* */
/*                     Donnez le masque de sous réseau pour une adresse ip : {{ip.getBytes()}} avec {{nbSubNet}} sous réseaux*/
/* */
/*                     </br>*/
/* */
/*                 </div>*/
/* */
/*                 <div>*/
/*                     {{form(form)}}*/
/* */
/*                 </div>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
