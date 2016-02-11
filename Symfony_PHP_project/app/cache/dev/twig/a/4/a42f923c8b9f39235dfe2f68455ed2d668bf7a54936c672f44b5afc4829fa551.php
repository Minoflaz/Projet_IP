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
        $__internal_093c7450edc47b305433ffe5a706cf8d05c9cf58f1d6b499d617333f1debe122 = $this->env->getExtension("native_profiler");
        $__internal_093c7450edc47b305433ffe5a706cf8d05c9cf58f1d6b499d617333f1debe122->enter($__internal_093c7450edc47b305433ffe5a706cf8d05c9cf58f1d6b499d617333f1debe122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Inscription:SubscriptionSuccess.html.twig"));

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
            <p>Vous vous êtes enregistré avec susccès !</p>
            <a href=\"index\">Revenir a l'accueil</a>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_093c7450edc47b305433ffe5a706cf8d05c9cf58f1d6b499d617333f1debe122->leave($__internal_093c7450edc47b305433ffe5a706cf8d05c9cf58f1d6b499d617333f1debe122_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_247f29224738aa1d24d9f3b07a1f8d12d71d03d4fa14b54f08156770d0c3839f = $this->env->getExtension("native_profiler");
        $__internal_247f29224738aa1d24d9f3b07a1f8d12d71d03d4fa14b54f08156770d0c3839f->enter($__internal_247f29224738aa1d24d9f3b07a1f8d12d71d03d4fa14b54f08156770d0c3839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_247f29224738aa1d24d9f3b07a1f8d12d71d03d4fa14b54f08156770d0c3839f->leave($__internal_247f29224738aa1d24d9f3b07a1f8d12d71d03d4fa14b54f08156770d0c3839f_prof);

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
/*             <p>Vous vous êtes enregistré avec susccès !</p>*/
/*             <a href="index">Revenir a l'accueil</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
