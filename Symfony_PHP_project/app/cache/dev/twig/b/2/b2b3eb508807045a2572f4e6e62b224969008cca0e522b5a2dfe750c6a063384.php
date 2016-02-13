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
        $__internal_180fb94288e39b30072c7db2ab952876699bdf5ddee43abf0ba1d0c1ea16d29b = $this->env->getExtension("native_profiler");
        $__internal_180fb94288e39b30072c7db2ab952876699bdf5ddee43abf0ba1d0c1ea16d29b->enter($__internal_180fb94288e39b30072c7db2ab952876699bdf5ddee43abf0ba1d0c1ea16d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_180fb94288e39b30072c7db2ab952876699bdf5ddee43abf0ba1d0c1ea16d29b->leave($__internal_180fb94288e39b30072c7db2ab952876699bdf5ddee43abf0ba1d0c1ea16d29b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59b92de9a41b326367f68fc9188c5696dad80a94ac957f2d61029e4eeee49c34 = $this->env->getExtension("native_profiler");
        $__internal_59b92de9a41b326367f68fc9188c5696dad80a94ac957f2d61029e4eeee49c34->enter($__internal_59b92de9a41b326367f68fc9188c5696dad80a94ac957f2d61029e4eeee49c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_59b92de9a41b326367f68fc9188c5696dad80a94ac957f2d61029e4eeee49c34->leave($__internal_59b92de9a41b326367f68fc9188c5696dad80a94ac957f2d61029e4eeee49c34_prof);

    }

    // line 28
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ef40d662819a40fbedd36f6e2e245d7cac9c25ad4929598625eef954e2b1b90d = $this->env->getExtension("native_profiler");
        $__internal_ef40d662819a40fbedd36f6e2e245d7cac9c25ad4929598625eef954e2b1b90d->enter($__internal_ef40d662819a40fbedd36f6e2e245d7cac9c25ad4929598625eef954e2b1b90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 29
        echo "                <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
                ";
        
        $__internal_ef40d662819a40fbedd36f6e2e245d7cac9c25ad4929598625eef954e2b1b90d->leave($__internal_ef40d662819a40fbedd36f6e2e245d7cac9c25ad4929598625eef954e2b1b90d_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_a695a60705883c8619425fbdc44a0c00591bac4018235788e55c02b22a03781f = $this->env->getExtension("native_profiler");
        $__internal_a695a60705883c8619425fbdc44a0c00591bac4018235788e55c02b22a03781f->enter($__internal_a695a60705883c8619425fbdc44a0c00591bac4018235788e55c02b22a03781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a695a60705883c8619425fbdc44a0c00591bac4018235788e55c02b22a03781f->leave($__internal_a695a60705883c8619425fbdc44a0c00591bac4018235788e55c02b22a03781f_prof);

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
        return array (  143 => 47,  135 => 29,  129 => 28,  119 => 7,  113 => 6,  101 => 47,  92 => 41,  88 => 40,  82 => 37,  78 => 36,  74 => 35,  68 => 31,  66 => 28,  60 => 24,  54 => 22,  48 => 20,  46 => 19,  34 => 9,  32 => 6,  25 => 1,);
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
