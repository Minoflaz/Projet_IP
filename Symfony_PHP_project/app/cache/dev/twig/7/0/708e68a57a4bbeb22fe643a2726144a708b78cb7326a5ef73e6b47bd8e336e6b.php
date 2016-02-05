<?php

/* IPBundle:Default:AjoutChapitre.html.twig */
class __TwigTemplate_61c8bda53271ad7fc6f92454496655e1904a78c99ab4ed5e713c28b6cc990ec6 extends Twig_Template
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
        $__internal_ac86be2ffc22d4bc231d291637a6775fc0bb3df336230556cdd0d953941034fa = $this->env->getExtension("native_profiler");
        $__internal_ac86be2ffc22d4bc231d291637a6775fc0bb3df336230556cdd0d953941034fa->enter($__internal_ac86be2ffc22d4bc231d291637a6775fc0bb3df336230556cdd0d953941034fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:AjoutChapitre.html.twig"));

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
            <p>Ici vous pouvez ajouter votre chapitre. Il sera enregistré et consultable immédiatement après.</p>
        </div>



        <form id=\"AjoutCours\" method=\"post\">
            <aside>
                <h4> Nom du Cours ? </h4>
                <select name=\"select\">
                    <option value=\"1\" selected>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo "</option>
                </select>
            </aside>

            <section>
                <article>
                    ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <header>
                        <h1><label for=\"texte\">Nom du chapitre : </label></h1>
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                        <hr>
                    </header>

                    <p>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget');
        echo "
                    </p>

                    <footer>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("label" => "Submit chapter"));
        echo "
                        ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </footer>
                </article>
            </section>
        </form>
    </div>
</div>
</body>
</html>";
        
        $__internal_ac86be2ffc22d4bc231d291637a6775fc0bb3df336230556cdd0d953941034fa->leave($__internal_ac86be2ffc22d4bc231d291637a6775fc0bb3df336230556cdd0d953941034fa_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e336eccdfac9eea1177944514f2146abd1fc1dc64601d5b5d0accd9f9584880 = $this->env->getExtension("native_profiler");
        $__internal_2e336eccdfac9eea1177944514f2146abd1fc1dc64601d5b5d0accd9f9584880->enter($__internal_2e336eccdfac9eea1177944514f2146abd1fc1dc64601d5b5d0accd9f9584880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_2e336eccdfac9eea1177944514f2146abd1fc1dc64601d5b5d0accd9f9584880->leave($__internal_2e336eccdfac9eea1177944514f2146abd1fc1dc64601d5b5d0accd9f9584880_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:AjoutChapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 6,  122 => 5,  106 => 63,  102 => 62,  95 => 58,  87 => 53,  81 => 50,  77 => 49,  68 => 43,  31 => 8,  29 => 5,  23 => 1,);
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
/*             <p>Ici vous pouvez ajouter votre chapitre. Il sera enregistré et consultable immédiatement après.</p>*/
/*         </div>*/
/* */
/* */
/* */
/*         <form id="AjoutCours" method="post">*/
/*             <aside>*/
/*                 <h4> Nom du Cours ? </h4>*/
/*                 <select name="select">*/
/*                     <option value="1" selected>{{ cours.nom }}</option>*/
/*                 </select>*/
/*             </aside>*/
/* */
/*             <section>*/
/*                 <article>*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/*                     <header>*/
/*                         <h1><label for="texte">Nom du chapitre : </label></h1>*/
/*                             {{ form_widget(form.nom) }}*/
/*                         <hr>*/
/*                     </header>*/
/* */
/*                     <p>*/
/*                         {{ form_widget(form.text) }}*/
/*                     </p>*/
/* */
/*                     <footer>*/
/*                         {{ form_row(form.save, { 'label': 'Submit chapter' }) }}*/
/*                         {{ form_end(form) }}*/
/*                     </footer>*/
/*                 </article>*/
/*             </section>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
