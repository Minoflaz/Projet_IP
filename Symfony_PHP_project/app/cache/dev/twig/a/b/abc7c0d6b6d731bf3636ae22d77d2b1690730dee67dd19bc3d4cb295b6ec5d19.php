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
        $__internal_f62ea5e4b7238712d09f02460937683e3850932db2bf4d2f19ae89608f31b3a9 = $this->env->getExtension("native_profiler");
        $__internal_f62ea5e4b7238712d09f02460937683e3850932db2bf4d2f19ae89608f31b3a9->enter($__internal_f62ea5e4b7238712d09f02460937683e3850932db2bf4d2f19ae89608f31b3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f62ea5e4b7238712d09f02460937683e3850932db2bf4d2f19ae89608f31b3a9->leave($__internal_f62ea5e4b7238712d09f02460937683e3850932db2bf4d2f19ae89608f31b3a9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_279caefd5573abc6ad8cafa80f33845885a71b3ba202cacc2fc6780bf77edd05 = $this->env->getExtension("native_profiler");
        $__internal_279caefd5573abc6ad8cafa80f33845885a71b3ba202cacc2fc6780bf77edd05->enter($__internal_279caefd5573abc6ad8cafa80f33845885a71b3ba202cacc2fc6780bf77edd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_279caefd5573abc6ad8cafa80f33845885a71b3ba202cacc2fc6780bf77edd05->leave($__internal_279caefd5573abc6ad8cafa80f33845885a71b3ba202cacc2fc6780bf77edd05_prof);

    }

    // line 28
    public function block_logo($context, array $blocks = array())
    {
        $__internal_5cd783a798f4e781f77ba698264b26334a8696a45c2fccfb896b27996d6f042f = $this->env->getExtension("native_profiler");
        $__internal_5cd783a798f4e781f77ba698264b26334a8696a45c2fccfb896b27996d6f042f->enter($__internal_5cd783a798f4e781f77ba698264b26334a8696a45c2fccfb896b27996d6f042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 29
        echo "                <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
                ";
        
        $__internal_5cd783a798f4e781f77ba698264b26334a8696a45c2fccfb896b27996d6f042f->leave($__internal_5cd783a798f4e781f77ba698264b26334a8696a45c2fccfb896b27996d6f042f_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_900e9b69a2196c09ed33439590c3a384ee02a4ea9de04428420021bc2cb19197 = $this->env->getExtension("native_profiler");
        $__internal_900e9b69a2196c09ed33439590c3a384ee02a4ea9de04428420021bc2cb19197->enter($__internal_900e9b69a2196c09ed33439590c3a384ee02a4ea9de04428420021bc2cb19197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_900e9b69a2196c09ed33439590c3a384ee02a4ea9de04428420021bc2cb19197->leave($__internal_900e9b69a2196c09ed33439590c3a384ee02a4ea9de04428420021bc2cb19197_prof);

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
