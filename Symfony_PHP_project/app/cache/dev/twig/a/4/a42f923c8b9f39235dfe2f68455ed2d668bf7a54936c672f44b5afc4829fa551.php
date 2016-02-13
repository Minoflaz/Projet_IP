<?php

/* IPBundle:Inscription:SubscriptionSuccess.html.twig */
class __TwigTemplate_7b962b603510138449b9eeba846a1a40f774fb1711fb6022ba21293fc2d0352f extends Twig_Template
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
        $__internal_a42ca08eb720edea19ae35e763a0bc6e26844405b2c5563237805627fd435fcd = $this->env->getExtension("native_profiler");
        $__internal_a42ca08eb720edea19ae35e763a0bc6e26844405b2c5563237805627fd435fcd->enter($__internal_a42ca08eb720edea19ae35e763a0bc6e26844405b2c5563237805627fd435fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Inscription:SubscriptionSuccess.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <title>IP13</title>
</head>

<body>

<div id=\"container\">

    <div id=\"account\">

        ";
        // line 17
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 18
            echo "            <a href=\"login\">Connexion</a> | <a href=\"newEleve\">Inscription</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</a> | <a href=\"logout\">Deconnexion</a>
        ";
        }
        // line 22
        echo "
    </div>

    <header>
        <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
        <nav>
            <ul id=\"menu\">
                <li><a href=\"#\">Cours</a>
                    <ul>
                        <li><a href=\"showCours\">Trouver un cours</a></li>
                        <li><a href=\"newChapitre\">Ajouter un cours</a></li>
                    </ul>
                </li>
                <li><a href=\"exercises\">Exercices</a></li>
                <li><a href=\"progression\">Progression</a></li>
                <li><a href=\"#\">Forum</a></li>
            </ul>
        </nav>
    </header>

    <div id=\"content\">

        <div id=\"welcome\">
            <h1>Inscritpion</h1>
            <p>Vous vous êtes enregistré avec succès !</p>
            <p><a href=\"index\">Revenir a l'accueil</a></p>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_a42ca08eb720edea19ae35e763a0bc6e26844405b2c5563237805627fd435fcd->leave($__internal_a42ca08eb720edea19ae35e763a0bc6e26844405b2c5563237805627fd435fcd_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5309b1639457779d0dbaf889e537810c85ade2a0f6fd5718a61482f8e9ae93b = $this->env->getExtension("native_profiler");
        $__internal_c5309b1639457779d0dbaf889e537810c85ade2a0f6fd5718a61482f8e9ae93b->enter($__internal_c5309b1639457779d0dbaf889e537810c85ade2a0f6fd5718a61482f8e9ae93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_c5309b1639457779d0dbaf889e537810c85ade2a0f6fd5718a61482f8e9ae93b->leave($__internal_c5309b1639457779d0dbaf889e537810c85ade2a0f6fd5718a61482f8e9ae93b_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Inscription:SubscriptionSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 6,  91 => 5,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/*     {% endblock %}*/
/*     <title>IP13</title>*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div id="container">*/
/* */
/*     <div id="account">*/
/* */
/*         {% if user == null %}*/
/*             <a href="login">Connexion</a> | <a href="newEleve">Inscription</a>*/
/*         {% else %}*/
/*             <a href="#">{{ user.nom }}</a> | <a href="logout">Deconnexion</a>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <header>*/
/*         <a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*         <nav>*/
/*             <ul id="menu">*/
/*                 <li><a href="#">Cours</a>*/
/*                     <ul>*/
/*                         <li><a href="showCours">Trouver un cours</a></li>*/
/*                         <li><a href="newChapitre">Ajouter un cours</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="exercises">Exercices</a></li>*/
/*                 <li><a href="progression">Progression</a></li>*/
/*                 <li><a href="#">Forum</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <div id="content">*/
/* */
/*         <div id="welcome">*/
/*             <h1>Inscritpion</h1>*/
/*             <p>Vous vous êtes enregistré avec succès !</p>*/
/*             <p><a href="index">Revenir a l'accueil</a></p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
