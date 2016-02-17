<?php

/* base.html.twig */
class __TwigTemplate_6dbe22361074fb0ea305c879fe2ad959fd040c88eb935fb40ccd4ca8450a5942 extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            // line 20
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("newEleve");
            echo "\">Inscription</a>
                ";
        } else {
            // line 22
            echo "                    <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a>
                ";
        }
        // line 24
        echo "
            </div>

            <header>
                ";
        // line 28
        $this->displayBlock('logo', $context, $blocks);
        // line 33
        echo "                <nav>
                    <ul id=\"menu\">
                        <li><a href=\"#\">Cours</a>
                            <ul>
                                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("showAllCours");
        echo "\">Trouver un cours</a></li>
                                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("newCours");
        echo "\">Ajouter un cours</a></li>
                                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("newChapitre");
        echo "\">Ajouter un chapitre</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("exercises");
        echo "\">Exercices</a></li>

                        ";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "role", array()), 0, array(), "array") == "ROLE_PROF")) {
            // line 45
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("progressionEleves");
            echo "\">Progression</a></li>
                        ";
        } else {
            // line 47
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("progression");
            echo "\">Progression</a></li>
                        ";
        }
        // line 49
        echo "
                        <li><a href=\"#\">Forum</a></li>
                    </ul>
                </nav>
            </header>

            <div id=\"content\">";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    // line 28
    public function block_logo($context, array $blocks = array())
    {
        // line 29
        echo "                    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "f7a7b5e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f7a7b5e") : $this->env->getExtension('asset')->getAssetUrl("images/f7a7b5e");
            // line 30
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("index");
            echo "\"><img id=\"logo\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/logo.png"), "html", null, true);
            echo "\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
                    ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "                ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
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
        return array (  158 => 55,  154 => 32,  145 => 30,  139 => 29,  136 => 28,  129 => 7,  126 => 6,  116 => 55,  108 => 49,  102 => 47,  96 => 45,  94 => 44,  89 => 42,  83 => 39,  79 => 38,  75 => 37,  69 => 33,  67 => 28,  61 => 24,  53 => 22,  45 => 20,  43 => 19,  31 => 9,  29 => 6,  22 => 1,);
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
/*                     <a href="{{ path('login')}}">Connexion</a> | <a href="{{ path('newEleve')}}">Inscription</a>*/
/*                 {% else %}*/
/*                     <a href="#">{{ app.user.username }}</a> | <a href="{{ path('logout')}}">Deconnexion</a>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*             <header>*/
/*                 {% block logo %}*/
/*                     {% image %}*/
/*                         <a href="{{ path('index')}}"><img id="logo" src="{{asset('/img/logo.png')}}" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*                     {% endimage %}*/
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
/* */
/*                         {% if app.user.role[0] == "ROLE_PROF" %}*/
/*                             <li><a href="{{ path('progressionEleves')}}">Progression</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="{{ path('progression')}}">Progression</a></li>*/
/*                         {% endif %}*/
/* */
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
/* */
