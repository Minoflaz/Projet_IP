<?php

/* IPBundle:Default:classSuccess.html.twig */
class __TwigTemplate_9e7b0c9836c3d1c22ba2d0822459db44589358946409a8c66160d853741d4f4d extends Twig_Template
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
        $__internal_139d8ccb00ad985655af6293ee8bf51dd480ae8bcbb2870d0148540947739c9d = $this->env->getExtension("native_profiler");
        $__internal_139d8ccb00ad985655af6293ee8bf51dd480ae8bcbb2870d0148540947739c9d->enter($__internal_139d8ccb00ad985655af6293ee8bf51dd480ae8bcbb2870d0148540947739c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:classSuccess.html.twig"));

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
                <li><a href=\"newChapitre\">Cours</a></li>
                <li><a href=\"exercises\">Exercices</a></li>
                <li><a href=\"#\">Progression</a></li>
                <li><a href=\"#\">Forum</a></li>
            </ul>
        </nav>
    </header>

    <div id=\"content\">

        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
        </div>

        <aside id = \"chapter\">
            <h1>Exercices</h1>
            <ul>

                <li><a href=\"exoClass\">Exo classe</a></li>

                <li><a href=\"exoMask\">Exo masque</a></li>

                <li><a href=\"#\">Exo table de routage</a></li>

            </ul>
        </aside>

        <section>
            <article>

                C'est la bonne classe ! Bien joué :)
                <br>
                <a href=\"exoClass\">Réessayer l'éxercice</a>

            </article>
        </section>

    </div>
</div>
</body>
</html>
";
        
        $__internal_139d8ccb00ad985655af6293ee8bf51dd480ae8bcbb2870d0148540947739c9d->leave($__internal_139d8ccb00ad985655af6293ee8bf51dd480ae8bcbb2870d0148540947739c9d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f401009997353d720fcc2f5cdd2c6ceb36a66626568f41f25a095dc750589cc = $this->env->getExtension("native_profiler");
        $__internal_3f401009997353d720fcc2f5cdd2c6ceb36a66626568f41f25a095dc750589cc->enter($__internal_3f401009997353d720fcc2f5cdd2c6ceb36a66626568f41f25a095dc750589cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_3f401009997353d720fcc2f5cdd2c6ceb36a66626568f41f25a095dc750589cc->leave($__internal_3f401009997353d720fcc2f5cdd2c6ceb36a66626568f41f25a095dc750589cc_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:classSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 6,  109 => 5,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/*     <header>*/
/*         <a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*         <nav>*/
/*             <ul id="menu">*/
/*                 <li><a href="newChapitre">Cours</a></li>*/
/*                 <li><a href="exercises">Exercices</a></li>*/
/*                 <li><a href="#">Progression</a></li>*/
/*                 <li><a href="#">Forum</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <div id="content">*/
/* */
/*         <div id="welcome">*/
/*             <h1>Faire des exercices</h1>*/
/*             <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1>Exercices</h1>*/
/*             <ul>*/
/* */
/*                 <li><a href="exoClass">Exo classe</a></li>*/
/* */
/*                 <li><a href="exoMask">Exo masque</a></li>*/
/* */
/*                 <li><a href="#">Exo table de routage</a></li>*/
/* */
/*             </ul>*/
/*         </aside>*/
/* */
/*         <section>*/
/*             <article>*/
/* */
/*                 C'est la bonne classe ! Bien joué :)*/
/*                 <br>*/
/*                 <a href="exoClass">Réessayer l'éxercice</a>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
