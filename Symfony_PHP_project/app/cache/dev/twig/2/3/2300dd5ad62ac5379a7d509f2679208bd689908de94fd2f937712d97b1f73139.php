<?php

/* IPBundle:Inscription:SubscriptionSuccess.html.twig */
class __TwigTemplate_cadbf1ce73db523d312c5292b222adabfca4da5389d3625ec761050465423f00 extends Twig_Template
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
        $__internal_39ba06307e8d746bc6f1dd20df7df86d19c1f65620ba05969a335c49405bae2e = $this->env->getExtension("native_profiler");
        $__internal_39ba06307e8d746bc6f1dd20df7df86d19c1f65620ba05969a335c49405bae2e->enter($__internal_39ba06307e8d746bc6f1dd20df7df86d19c1f65620ba05969a335c49405bae2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Inscription:SubscriptionSuccess.html.twig"));

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
        
        $__internal_39ba06307e8d746bc6f1dd20df7df86d19c1f65620ba05969a335c49405bae2e->leave($__internal_39ba06307e8d746bc6f1dd20df7df86d19c1f65620ba05969a335c49405bae2e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_096d1c8092e410893d6b2a971cd290cdbd01d59bc334ed7a6cdbc6e15c7da6ed = $this->env->getExtension("native_profiler");
        $__internal_096d1c8092e410893d6b2a971cd290cdbd01d59bc334ed7a6cdbc6e15c7da6ed->enter($__internal_096d1c8092e410893d6b2a971cd290cdbd01d59bc334ed7a6cdbc6e15c7da6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_096d1c8092e410893d6b2a971cd290cdbd01d59bc334ed7a6cdbc6e15c7da6ed->leave($__internal_096d1c8092e410893d6b2a971cd290cdbd01d59bc334ed7a6cdbc6e15c7da6ed_prof);

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
