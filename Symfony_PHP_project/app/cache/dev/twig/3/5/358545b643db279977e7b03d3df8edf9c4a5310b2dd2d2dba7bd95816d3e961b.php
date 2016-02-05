<?php

/* IPBundle:Default:ChapterAddSuccess.html.twig */
class __TwigTemplate_14a3b785c609757d8585e49791e75247df796cc6577336fbae38650eb086f8a3 extends Twig_Template
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
        $__internal_627a3f85de6334b38999951f33e12791f26f5c57599d3d73f9f1f004d6ded56f = $this->env->getExtension("native_profiler");
        $__internal_627a3f85de6334b38999951f33e12791f26f5c57599d3d73f9f1f004d6ded56f->enter($__internal_627a3f85de6334b38999951f33e12791f26f5c57599d3d73f9f1f004d6ded56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:ChapterAddSuccess.html.twig"));

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
        <a href=\"../../../../../../Projet_IP_HTML/Maquette/connexion.html\">Connexion</a> | <a href=\"../../../../../../Projet_IP_HTML/Maquette/inscription.html\">Inscription</a>
    </div>
    <header>
        <img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"><span>IP13</span>
        <nav>
            <ul id=\"menu\">
                <li><a href=\"#\">Cours</a></li>
                <li><a href=\"#\">Exercices</a></li>
                <li><a href=\"#\">Progression</a></li>
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
        
        $__internal_627a3f85de6334b38999951f33e12791f26f5c57599d3d73f9f1f004d6ded56f->leave($__internal_627a3f85de6334b38999951f33e12791f26f5c57599d3d73f9f1f004d6ded56f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31ed176c2f97736b97ba431c4e568dc3e1f66e9eddf8c650623bccc1e194ceaa = $this->env->getExtension("native_profiler");
        $__internal_31ed176c2f97736b97ba431c4e568dc3e1f66e9eddf8c650623bccc1e194ceaa->enter($__internal_31ed176c2f97736b97ba431c4e568dc3e1f66e9eddf8c650623bccc1e194ceaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_31ed176c2f97736b97ba431c4e568dc3e1f66e9eddf8c650623bccc1e194ceaa->leave($__internal_31ed176c2f97736b97ba431c4e568dc3e1f66e9eddf8c650623bccc1e194ceaa_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:ChapterAddSuccess.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  69 => 5,  31 => 8,  29 => 5,  23 => 1,);
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
/*         <a href="../../../../../../Projet_IP_HTML/Maquette/connexion.html">Connexion</a> | <a href="../../../../../../Projet_IP_HTML/Maquette/inscription.html">Inscription</a>*/
/*     </div>*/
/*     <header>*/
/*         <img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"><span>IP13</span>*/
/*         <nav>*/
/*             <ul id="menu">*/
/*                 <li><a href="#">Cours</a></li>*/
/*                 <li><a href="#">Exercices</a></li>*/
/*                 <li><a href="#">Progression</a></li>*/
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
