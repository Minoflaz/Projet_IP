<?php

/* base.html.twig */
class __TwigTemplate_d98dfb7905519a22b6568fe66ddb098608d5d51d2a2f633c21917938dde4ea17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43021b29ec1e6661c4b0ce1af5b1af3d6b4c0019a510146f53f06d63adf07479 = $this->env->getExtension("native_profiler");
        $__internal_43021b29ec1e6661c4b0ce1af5b1af3d6b4c0019a510146f53f06d63adf07479->enter($__internal_43021b29ec1e6661c4b0ce1af5b1af3d6b4c0019a510146f53f06d63adf07479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 19
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 20
            echo "                    <a href=\"login\">Connexion</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("newEleve");
            echo "\">Inscription</a>
                ";
        } else {
            // line 22
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("compte");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</a> | <a href=\"logout\">Deconnexion</a>
                ";
        }
        // line 24
        echo "
            </div>

            <header>
                ";
        // line 28
        $this->displayBlock('logo', $context, $blocks);
        // line 31
        echo "                <nav>
                    <ul id=\"menu\">
                        <li><a href=\"#\">Cours</a>
                            <ul>
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("showAllCours");
        echo "\">Trouver un cours</a></li>
                                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("newCours");
        echo "\">Ajouter un cours</a></li>
                                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("newChapitre");
        echo "\">Ajouter un chapitre</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("exercises");
        echo "\">Exercices</a></li>
                        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("progression");
        echo "\">Progression</a></li>
                        <li><a href=\"#\">Forum</a></li>
                    </ul>
                </nav>
            </header>

            <div id=\"content\">";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

        </div>
    </body>
</html>";
        
        $__internal_43021b29ec1e6661c4b0ce1af5b1af3d6b4c0019a510146f53f06d63adf07479->leave($__internal_43021b29ec1e6661c4b0ce1af5b1af3d6b4c0019a510146f53f06d63adf07479_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e62e74d94c1bb07ad18377f2b4c057f7af9aebb2c72a573bf4c131ce7d2b387 = $this->env->getExtension("native_profiler");
        $__internal_2e62e74d94c1bb07ad18377f2b4c057f7af9aebb2c72a573bf4c131ce7d2b387->enter($__internal_2e62e74d94c1bb07ad18377f2b4c057f7af9aebb2c72a573bf4c131ce7d2b387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_2e62e74d94c1bb07ad18377f2b4c057f7af9aebb2c72a573bf4c131ce7d2b387->leave($__internal_2e62e74d94c1bb07ad18377f2b4c057f7af9aebb2c72a573bf4c131ce7d2b387_prof);

    }

    // line 28
    public function block_logo($context, array $blocks = array())
    {
        $__internal_225227b5d30840c124e3251ffda2aef3d902a34911a730292a712e5c51bcbc5a = $this->env->getExtension("native_profiler");
        $__internal_225227b5d30840c124e3251ffda2aef3d902a34911a730292a712e5c51bcbc5a->enter($__internal_225227b5d30840c124e3251ffda2aef3d902a34911a730292a712e5c51bcbc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 29
        echo "                <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
                ";
        
        $__internal_225227b5d30840c124e3251ffda2aef3d902a34911a730292a712e5c51bcbc5a->leave($__internal_225227b5d30840c124e3251ffda2aef3d902a34911a730292a712e5c51bcbc5a_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_875862b0a5d30444e7e7b6e7be1461f283bf7253b80828e16dedd90b0bb1ea12 = $this->env->getExtension("native_profiler");
        $__internal_875862b0a5d30444e7e7b6e7be1461f283bf7253b80828e16dedd90b0bb1ea12->enter($__internal_875862b0a5d30444e7e7b6e7be1461f283bf7253b80828e16dedd90b0bb1ea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_875862b0a5d30444e7e7b6e7be1461f283bf7253b80828e16dedd90b0bb1ea12->leave($__internal_875862b0a5d30444e7e7b6e7be1461f283bf7253b80828e16dedd90b0bb1ea12_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 47,  137 => 29,  131 => 28,  121 => 7,  115 => 6,  103 => 47,  94 => 41,  90 => 40,  84 => 37,  80 => 36,  76 => 35,  70 => 31,  68 => 28,  62 => 24,  54 => 22,  48 => 20,  46 => 19,  34 => 9,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*         <meta charset="UTF-8"/>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/*         {% endblock %}*/
/*         <title>IP13</title>*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <div id="container">*/
/* */
/*             <div id="account">*/
/* */
/*                 {% if app.user == null %}*/
/*                     <a href="login">Connexion</a> | <a href="{{ path('newEleve')}}">Inscription</a>*/
/*                 {% else %}*/
/*                     <a href="{{ path('compte')}}">{{ app.user.nom }}</a> | <a href="logout">Deconnexion</a>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*             <header>*/
/*                 {% block logo %}*/
/*                 <a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*                 {% endblock %}*/
/*                 <nav>*/
/*                     <ul id="menu">*/
/*                         <li><a href="#">Cours</a>*/
/*                             <ul>*/
/*                                 <li><a href="{{ path('showAllCours')}}">Trouver un cours</a></li>*/
/*                                 <li><a href="{{ path('newCours')}}">Ajouter un cours</a></li>*/
/*                                 <li><a href="{{ path('newChapitre')}}">Ajouter un chapitre</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li><a href="{{ path('exercises')}}">Exercices</a></li>*/
/*                         <li><a href="{{ path('progression')}}">Progression</a></li>*/
/*                         <li><a href="#">Forum</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </header>*/
/* */
/*             <div id="content">{% block content %}{% endblock %}</div>*/
/* */
/*         </div>*/
/*     </body>*/
/* </html>*/
