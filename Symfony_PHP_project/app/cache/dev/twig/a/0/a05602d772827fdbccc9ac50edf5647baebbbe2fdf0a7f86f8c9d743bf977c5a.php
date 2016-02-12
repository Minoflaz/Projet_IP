<?php

/* IPBundle:Exercices:maskFailed.html.twig */
class __TwigTemplate_b859434e942786f43ded2537ad42dfa608deec257ba72b6034cf8da74121e8d0 extends Twig_Template
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
        $__internal_f68c4642fb2847e55b8ef9fe42dfd24e88ab646d3d9562801707f2b457892aba = $this->env->getExtension("native_profiler");
        $__internal_f68c4642fb2847e55b8ef9fe42dfd24e88ab646d3d9562801707f2b457892aba->enter($__internal_f68c4642fb2847e55b8ef9fe42dfd24e88ab646d3d9562801707f2b457892aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:maskFailed.html.twig"));

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

                Ce n'est pas le bon masque :o
                <br>
                <a href=\"exoMask\">Réessayer l'éxercice</a>

            </article>
        </section>

    </div>
</div>
</body>
</html>";
        
        $__internal_f68c4642fb2847e55b8ef9fe42dfd24e88ab646d3d9562801707f2b457892aba->leave($__internal_f68c4642fb2847e55b8ef9fe42dfd24e88ab646d3d9562801707f2b457892aba_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83d473adf62e93982c2b689b5166baf4e8e8ec8df83e0866b7fb408918a6ea3a = $this->env->getExtension("native_profiler");
        $__internal_83d473adf62e93982c2b689b5166baf4e8e8ec8df83e0866b7fb408918a6ea3a->enter($__internal_83d473adf62e93982c2b689b5166baf4e8e8ec8df83e0866b7fb408918a6ea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_83d473adf62e93982c2b689b5166baf4e8e8ec8df83e0866b7fb408918a6ea3a->leave($__internal_83d473adf62e93982c2b689b5166baf4e8e8ec8df83e0866b7fb408918a6ea3a_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:maskFailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 6,  113 => 5,  54 => 22,  48 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/*                 Ce n'est pas le bon masque :o*/
/*                 <br>*/
/*                 <a href="exoMask">Réessayer l'éxercice</a>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
