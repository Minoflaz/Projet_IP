<?php

/* IPBundle:Default:exoMask.html.twig */
class __TwigTemplate_af6da7fb28684b2b5ad485a8238954c5ab4d6dfbd9e1d46bc184d14921d233bc extends Twig_Template
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
        $__internal_6738cf1cde82cc8d06bdf75c743f14a7a693485ed65f4ad1359b70918d22f02b = $this->env->getExtension("native_profiler");
        $__internal_6738cf1cde82cc8d06bdf75c743f14a7a693485ed65f4ad1359b70918d22f02b->enter($__internal_6738cf1cde82cc8d06bdf75c743f14a7a693485ed65f4ad1359b70918d22f02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoMask.html.twig"));

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
\t\t\t\t<li><a href=\"newChapitre\">Cours</a></li>
\t\t\t\t<li><a href=\"exercises\">Exercices</a></li>
\t\t\t\t<li><a href=\"#\">Progression</a></li>
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
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, (isset($context["nbSubNet"]) ? $context["nbSubNet"] : $this->getContext($context, "nbSubNet")), "html", null, true);
        echo " sous réseaux

                    </br>

                </div>

                <div>
                    ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                </div>

            </article>
        </section>

    </div>
</div>
</body>
</html>";
        
        $__internal_6738cf1cde82cc8d06bdf75c743f14a7a693485ed65f4ad1359b70918d22f02b->leave($__internal_6738cf1cde82cc8d06bdf75c743f14a7a693485ed65f4ad1359b70918d22f02b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a4f64691ebda14eca9c4dba8c2635a5d26c9d53b40dee37503e0e046e675be1 = $this->env->getExtension("native_profiler");
        $__internal_1a4f64691ebda14eca9c4dba8c2635a5d26c9d53b40dee37503e0e046e675be1->enter($__internal_1a4f64691ebda14eca9c4dba8c2635a5d26c9d53b40dee37503e0e046e675be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t";
        
        $__internal_1a4f64691ebda14eca9c4dba8c2635a5d26c9d53b40dee37503e0e046e675be1->leave($__internal_1a4f64691ebda14eca9c4dba8c2635a5d26c9d53b40dee37503e0e046e675be1_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:exoMask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 6,  125 => 5,  107 => 68,  95 => 61,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/* 				<li><a href="newChapitre">Cours</a></li>*/
/* 				<li><a href="exercises">Exercices</a></li>*/
/* 				<li><a href="#">Progression</a></li>*/
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
