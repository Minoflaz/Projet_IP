<?php

/* base.html.twig */
class __TwigTemplate_1f3ee9328b9e021acd33531148069c1856fec3ef980c22281ccc2161d2b86525 extends Twig_Template
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
        $__internal_3efa9ed42a38418202e2320d03c9cd4e45132d775bdfcac40a1edc5a01b38ffb = $this->env->getExtension("native_profiler");
        $__internal_3efa9ed42a38418202e2320d03c9cd4e45132d775bdfcac40a1edc5a01b38ffb->enter($__internal_3efa9ed42a38418202e2320d03c9cd4e45132d775bdfcac40a1edc5a01b38ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo "                    <a href=\"#\">";
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
        echo $this->env->getExtension('routing')->getPath("newChapitre");
        echo "\">Ajouter un chapitre</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("exercises");
        echo "\">Exercices</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("progression");
        echo "\">Progression</a></li>
                        <li><a href=\"#\">Forum</a></li>
                    </ul>
                </nav>
            </header>

            <div id=\"content\">";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

        </div>
    </body>
</html>";
        
        $__internal_3efa9ed42a38418202e2320d03c9cd4e45132d775bdfcac40a1edc5a01b38ffb->leave($__internal_3efa9ed42a38418202e2320d03c9cd4e45132d775bdfcac40a1edc5a01b38ffb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff2f01dc28f6bfb982d23e1c0e28f84539be9289dfdaf1973ee16bdb1e6cb345 = $this->env->getExtension("native_profiler");
        $__internal_ff2f01dc28f6bfb982d23e1c0e28f84539be9289dfdaf1973ee16bdb1e6cb345->enter($__internal_ff2f01dc28f6bfb982d23e1c0e28f84539be9289dfdaf1973ee16bdb1e6cb345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_ff2f01dc28f6bfb982d23e1c0e28f84539be9289dfdaf1973ee16bdb1e6cb345->leave($__internal_ff2f01dc28f6bfb982d23e1c0e28f84539be9289dfdaf1973ee16bdb1e6cb345_prof);

    }

    // line 28
    public function block_logo($context, array $blocks = array())
    {
        $__internal_cb739e9f3a9c4ff914cda7e2fe50b5feb09a0d2026a8a5733b846a39ef5706a7 = $this->env->getExtension("native_profiler");
        $__internal_cb739e9f3a9c4ff914cda7e2fe50b5feb09a0d2026a8a5733b846a39ef5706a7->enter($__internal_cb739e9f3a9c4ff914cda7e2fe50b5feb09a0d2026a8a5733b846a39ef5706a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 29
        echo "                <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
                ";
        
        $__internal_cb739e9f3a9c4ff914cda7e2fe50b5feb09a0d2026a8a5733b846a39ef5706a7->leave($__internal_cb739e9f3a9c4ff914cda7e2fe50b5feb09a0d2026a8a5733b846a39ef5706a7_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e2b28914b06badc56a4db4dca690450d7207358f2ae51b3cca7cd6751e0c0d0 = $this->env->getExtension("native_profiler");
        $__internal_1e2b28914b06badc56a4db4dca690450d7207358f2ae51b3cca7cd6751e0c0d0->enter($__internal_1e2b28914b06badc56a4db4dca690450d7207358f2ae51b3cca7cd6751e0c0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1e2b28914b06badc56a4db4dca690450d7207358f2ae51b3cca7cd6751e0c0d0->leave($__internal_1e2b28914b06badc56a4db4dca690450d7207358f2ae51b3cca7cd6751e0c0d0_prof);

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
        return array (  139 => 46,  131 => 29,  125 => 28,  115 => 7,  109 => 6,  97 => 46,  88 => 40,  84 => 39,  78 => 36,  74 => 35,  68 => 31,  66 => 28,  60 => 24,  54 => 22,  48 => 20,  46 => 19,  34 => 9,  32 => 6,  25 => 1,);
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
/*                     <a href="#">{{ app.user.nom }}</a> | <a href="logout">Deconnexion</a>*/
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
