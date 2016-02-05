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
        $__internal_d8ed555940381293d1b22286d9e2baea6fe80c521b00a23f74f23ea299f5c86a = $this->env->getExtension("native_profiler");
        $__internal_d8ed555940381293d1b22286d9e2baea6fe80c521b00a23f74f23ea299f5c86a->enter($__internal_d8ed555940381293d1b22286d9e2baea6fe80c521b00a23f74f23ea299f5c86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:AjoutChapitre.html.twig"));

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
                    <option value=\"1\" selected>Cours 1</option>
                    <option value=\"2\">Cours 2</option>
                    <option value=\"3\">Cours 3</option>
                </select>
            </aside>

            <section>
                <article>
                    ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <header>
                        <h1><label for=\"texte\">Nom du chapitre : </label></h1>
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                        <hr>
                    </header>

                    <p>
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget');
        echo "
                    </p>

                    <footer>
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("label" => "Submit chapter"));
        echo "
                        ";
        // line 65
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
        
        $__internal_d8ed555940381293d1b22286d9e2baea6fe80c521b00a23f74f23ea299f5c86a->leave($__internal_d8ed555940381293d1b22286d9e2baea6fe80c521b00a23f74f23ea299f5c86a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70bc2ab61f5918d456ad871c38198d2f044cb258cecd14a10da3b37011b64aa3 = $this->env->getExtension("native_profiler");
        $__internal_70bc2ab61f5918d456ad871c38198d2f044cb258cecd14a10da3b37011b64aa3->enter($__internal_70bc2ab61f5918d456ad871c38198d2f044cb258cecd14a10da3b37011b64aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    ";
        
        $__internal_70bc2ab61f5918d456ad871c38198d2f044cb258cecd14a10da3b37011b64aa3->leave($__internal_70bc2ab61f5918d456ad871c38198d2f044cb258cecd14a10da3b37011b64aa3_prof);

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
        return array (  127 => 6,  121 => 5,  105 => 65,  101 => 64,  94 => 60,  86 => 55,  80 => 52,  76 => 51,  31 => 8,  29 => 5,  23 => 1,);
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
/*                     <option value="1" selected>Cours 1</option>*/
/*                     <option value="2">Cours 2</option>*/
/*                     <option value="3">Cours 3</option>*/
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
