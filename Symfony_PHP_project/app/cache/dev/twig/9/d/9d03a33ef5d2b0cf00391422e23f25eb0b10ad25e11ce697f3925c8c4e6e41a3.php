<?php

/* IPBundle:Cours:showChapitre.html.twig */
class __TwigTemplate_fcead67b767d67cb7afe5d29856b9ebaf1fd8e069e370f35cfedfb27c33214b1 extends Twig_Template
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
        $__internal_ff3f8e7e6c8ff18549a5b88c9083d22ac9e6ff73270867c98d2c9af708bf5a0b = $this->env->getExtension("native_profiler");
        $__internal_ff3f8e7e6c8ff18549a5b88c9083d22ac9e6ff73270867c98d2c9af708bf5a0b->enter($__internal_ff3f8e7e6c8ff18549a5b88c9083d22ac9e6ff73270867c98d2c9af708bf5a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:showChapitre.html.twig"));

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
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_route");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("newEleve");
            echo "\">Inscription</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a>
        ";
        }
        // line 22
        echo "
    </div>
    <header>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><img id=\"logo\" src=\"../img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
        <nav>
            <ul id=\"menu\">

                <li><a href=\"#\">Cours</a>
                    <ul>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("showCours");
        echo "\">Trouver un cours</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("newChapitre");
        echo "\">Ajouter un cours</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("exercises");
        echo "\">Exercices</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("progression");
        echo "\">Progression</a></li>
                <li><a href=\"#\">Forum</a></li>
            </ul>
        </nav>
    </header>

    <div id=\"content\">

        <div id=\"welcome\">
            <h1 id=\"titreChapter\"></h1>
            <p id=\"chapterText\"></p>
        </div>

        <aside id = \"chapter\">
            <h1> Reseau </h1>
            <ul>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "chapitres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 53
            echo "                    <li class=\"chapterName\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showChapitre", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "nom", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
        </aside>

        <section>
            <article>
               ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")), "text", array()), "html", null, true);
        echo "
            </article>
        </section>

    </div>
</div>
</body>
</html>";
        
        $__internal_ff3f8e7e6c8ff18549a5b88c9083d22ac9e6ff73270867c98d2c9af708bf5a0b->leave($__internal_ff3f8e7e6c8ff18549a5b88c9083d22ac9e6ff73270867c98d2c9af708bf5a0b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea86056490c0f69dcfa306b89de132ef1c325480e58dbd9c0400fd5864a39efd = $this->env->getExtension("native_profiler");
        $__internal_ea86056490c0f69dcfa306b89de132ef1c325480e58dbd9c0400fd5864a39efd->enter($__internal_ea86056490c0f69dcfa306b89de132ef1c325480e58dbd9c0400fd5864a39efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_ea86056490c0f69dcfa306b89de132ef1c325480e58dbd9c0400fd5864a39efd->leave($__internal_ea86056490c0f69dcfa306b89de132ef1c325480e58dbd9c0400fd5864a39efd_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:showChapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 6,  144 => 5,  129 => 60,  122 => 55,  111 => 53,  107 => 52,  88 => 36,  84 => 35,  78 => 32,  74 => 31,  65 => 25,  60 => 22,  52 => 20,  44 => 18,  42 => 17,  31 => 8,  29 => 5,  23 => 1,);
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
/*             <a href="{{ path('login_route')}}">Connexion</a> | <a href="{{ path('newEleve')}}">Inscription</a>*/
/*         {% else %}*/
/*             <a href="#">{{ user.nom }}</a> | <a href="{{ path('logout')}}">Deconnexion</a>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/*     <header>*/
/*         <a href="{{ path('index')}}"><img id="logo" src="../img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*         <nav>*/
/*             <ul id="menu">*/
/* */
/*                 <li><a href="#">Cours</a>*/
/*                     <ul>*/
/*                         <li><a href="{{ path('showCours')}}">Trouver un cours</a></li>*/
/*                         <li><a href="{{ path('newChapitre')}}">Ajouter un cours</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="{{ path('exercises')}}">Exercices</a></li>*/
/*                 <li><a href="{{  path('progression')}}">Progression</a></li>*/
/*                 <li><a href="#">Forum</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <div id="content">*/
/* */
/*         <div id="welcome">*/
/*             <h1 id="titreChapter"></h1>*/
/*             <p id="chapterText"></p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1> Reseau </h1>*/
/*             <ul>*/
/*                 {% for chapitre in cours.chapitres %}*/
/*                     <li class="chapterName"><a href="{{ path('showChapitre', {"id": chapitre.id}) }}">{{ chapitre.nom }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </aside>*/
/* */
/*         <section>*/
/*             <article>*/
/*                {{chapitre.text}}*/
/*             </article>*/
/*         </section>*/
/* */
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
