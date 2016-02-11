<?php

/* IPBundle:Accueil:base.html.twig */
class __TwigTemplate_cbc5c39a206187d5fbc018e04368fff293897dacee9f2d9db28ddc60e9032d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd807a85057a7b98ba6b3bbebc7b80694d121023ae97934d7f8370573f9e5e42 = $this->env->getExtension("native_profiler");
        $__internal_cd807a85057a7b98ba6b3bbebc7b80694d121023ae97934d7f8370573f9e5e42->enter($__internal_cd807a85057a7b98ba6b3bbebc7b80694d121023ae97934d7f8370573f9e5e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Accueil:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

        <meta charset=\"UTF-8\"/>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <title>IP13</title>

</head>
<body>

<div id=\"container\">

    <div id=\"account\">

        ";
        // line 18
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 19
            echo "            <a href=\"login\">Connexion</a> | <a href=\"newEleve\">Inscription</a>
        ";
        } else {
            // line 21
            echo "            <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</a> | <a href=\"logout\">Deconnexion</a>
        ";
        }
        // line 23
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
</div>

<div id=\"content\">";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
</body>
</html>";
        
        $__internal_cd807a85057a7b98ba6b3bbebc7b80694d121023ae97934d7f8370573f9e5e42->leave($__internal_cd807a85057a7b98ba6b3bbebc7b80694d121023ae97934d7f8370573f9e5e42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b79db8847bbb2fe94daf4b5d80b56ff2f2f3cbed822b7a5a4eb1eb813ef1ffea = $this->env->getExtension("native_profiler");
        $__internal_b79db8847bbb2fe94daf4b5d80b56ff2f2f3cbed822b7a5a4eb1eb813ef1ffea->enter($__internal_b79db8847bbb2fe94daf4b5d80b56ff2f2f3cbed822b7a5a4eb1eb813ef1ffea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_b79db8847bbb2fe94daf4b5d80b56ff2f2f3cbed822b7a5a4eb1eb813ef1ffea->leave($__internal_b79db8847bbb2fe94daf4b5d80b56ff2f2f3cbed822b7a5a4eb1eb813ef1ffea_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_b61aa85e9410acd8da2a378b7ed8257de621860a28db95262c74e7416b872ebc = $this->env->getExtension("native_profiler");
        $__internal_b61aa85e9410acd8da2a378b7ed8257de621860a28db95262c74e7416b872ebc->enter($__internal_b61aa85e9410acd8da2a378b7ed8257de621860a28db95262c74e7416b872ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b61aa85e9410acd8da2a378b7ed8257de621860a28db95262c74e7416b872ebc->leave($__internal_b61aa85e9410acd8da2a378b7ed8257de621860a28db95262c74e7416b872ebc_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Accueil:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  95 => 7,  89 => 6,  79 => 44,  56 => 23,  50 => 21,  46 => 19,  44 => 18,  33 => 9,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*         <meta charset="UTF-8"/>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/*         {% endblock %}*/
/*         <title>IP13</title>*/
/* */
/* </head>*/
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
/* </div>*/
/* */
/* <div id="content">{% block content %}{% endblock %}</div>*/
/* </body>*/
/* </html>*/
