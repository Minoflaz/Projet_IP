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
        $__internal_dead0a252d67230433bdeaf59a16500964a96e12f39d56fd00fd3912663e2820 = $this->env->getExtension("native_profiler");
        $__internal_dead0a252d67230433bdeaf59a16500964a96e12f39d56fd00fd3912663e2820->enter($__internal_dead0a252d67230433bdeaf59a16500964a96e12f39d56fd00fd3912663e2820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 20
            echo "                    <a href=\"login\">Connexion</a> | <a href=\"newEleve\">Inscription</a>
                ";
        } else {
            // line 22
            echo "                    <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
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

            <div id=\"content\">";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

        </div>
    </body>
</html>";
        
        $__internal_dead0a252d67230433bdeaf59a16500964a96e12f39d56fd00fd3912663e2820->leave($__internal_dead0a252d67230433bdeaf59a16500964a96e12f39d56fd00fd3912663e2820_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be122a2bd7b2dc96d6eb083b8e70287c75f974d2144d8cc9ab101918af584e69 = $this->env->getExtension("native_profiler");
        $__internal_be122a2bd7b2dc96d6eb083b8e70287c75f974d2144d8cc9ab101918af584e69->enter($__internal_be122a2bd7b2dc96d6eb083b8e70287c75f974d2144d8cc9ab101918af584e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_be122a2bd7b2dc96d6eb083b8e70287c75f974d2144d8cc9ab101918af584e69->leave($__internal_be122a2bd7b2dc96d6eb083b8e70287c75f974d2144d8cc9ab101918af584e69_prof);

    }

    // line 28
    public function block_logo($context, array $blocks = array())
    {
        $__internal_426eb0b24a568d1d3a09fb520ce746be63eee267e7ee0f8a89f4baea027e4740 = $this->env->getExtension("native_profiler");
        $__internal_426eb0b24a568d1d3a09fb520ce746be63eee267e7ee0f8a89f4baea027e4740->enter($__internal_426eb0b24a568d1d3a09fb520ce746be63eee267e7ee0f8a89f4baea027e4740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 29
        echo "                <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
                ";
        
        $__internal_426eb0b24a568d1d3a09fb520ce746be63eee267e7ee0f8a89f4baea027e4740->leave($__internal_426eb0b24a568d1d3a09fb520ce746be63eee267e7ee0f8a89f4baea027e4740_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3f15276d3ea827af31853fc1ec673aa80b36dab73a84b32eb39e9f38a7f2b63 = $this->env->getExtension("native_profiler");
        $__internal_b3f15276d3ea827af31853fc1ec673aa80b36dab73a84b32eb39e9f38a7f2b63->enter($__internal_b3f15276d3ea827af31853fc1ec673aa80b36dab73a84b32eb39e9f38a7f2b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b3f15276d3ea827af31853fc1ec673aa80b36dab73a84b32eb39e9f38a7f2b63->leave($__internal_b3f15276d3ea827af31853fc1ec673aa80b36dab73a84b32eb39e9f38a7f2b63_prof);

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
        return array (  125 => 46,  117 => 29,  111 => 28,  101 => 7,  95 => 6,  83 => 46,  66 => 31,  64 => 28,  58 => 24,  52 => 22,  48 => 20,  46 => 19,  34 => 9,  32 => 6,  25 => 1,);
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
/*                 {% if user == null %}*/
/*                     <a href="login">Connexion</a> | <a href="newEleve">Inscription</a>*/
/*                 {% else %}*/
/*                     <a href="#">{{ user.nom }}</a> | <a href="logout">Deconnexion</a>*/
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
/*                                 <li><a href="showCours">Trouver un cours</a></li>*/
/*                                 <li><a href="newChapitre">Ajouter un cours</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li><a href="exercises">Exercices</a></li>*/
/*                         <li><a href="progression">Progression</a></li>*/
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
