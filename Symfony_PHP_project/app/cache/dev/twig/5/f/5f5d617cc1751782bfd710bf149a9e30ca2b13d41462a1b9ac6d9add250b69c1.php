<?php

/* IPBundle:Default:ChapterAddSuccess.html.twig */
class __TwigTemplate_693f2ac1c85c3172e63f1f370a0d836388b2afec8723d4738ea59ab8ba59bb73 extends Twig_Template
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
        $__internal_05274d6bf30a5b70dcf206b0b51b3b19dbc8a929a25c54b38b48c1515204cbc5 = $this->env->getExtension("native_profiler");
        $__internal_05274d6bf30a5b70dcf206b0b51b3b19dbc8a929a25c54b38b48c1515204cbc5->enter($__internal_05274d6bf30a5b70dcf206b0b51b3b19dbc8a929a25c54b38b48c1515204cbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:ChapterAddSuccess.html.twig"));

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
            <h1>Enregistrer un nouveau chapitre</h1>
            <p>Chapitre enregistré avec succès</p>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_05274d6bf30a5b70dcf206b0b51b3b19dbc8a929a25c54b38b48c1515204cbc5->leave($__internal_05274d6bf30a5b70dcf206b0b51b3b19dbc8a929a25c54b38b48c1515204cbc5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9253b39df90cc498608c9366edaaa6aa20ff693d3ebe48748725ad05306022cb = $this->env->getExtension("native_profiler");
        $__internal_9253b39df90cc498608c9366edaaa6aa20ff693d3ebe48748725ad05306022cb->enter($__internal_9253b39df90cc498608c9366edaaa6aa20ff693d3ebe48748725ad05306022cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_9253b39df90cc498608c9366edaaa6aa20ff693d3ebe48748725ad05306022cb->leave($__internal_9253b39df90cc498608c9366edaaa6aa20ff693d3ebe48748725ad05306022cb_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:ChapterAddSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 6,  90 => 5,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/*             <h1>Enregistrer un nouveau chapitre</h1>*/
/*             <p>Chapitre enregistré avec succès</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
