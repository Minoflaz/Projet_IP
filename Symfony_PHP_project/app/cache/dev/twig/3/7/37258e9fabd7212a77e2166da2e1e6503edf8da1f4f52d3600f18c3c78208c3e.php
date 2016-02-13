<?php

/* IPBundle:Cours:AjoutChapitre.html.twig */
class __TwigTemplate_1df0ac1789db86cedfb657b07979623b408ddedaf6b68ac6ed6ffe8027a4582a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Cours:AjoutChapitre.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cb87813a3620b1eacc9d9bda0ec6d3c67d1b320d8e1baef11c19159bbdd5738 = $this->env->getExtension("native_profiler");
        $__internal_1cb87813a3620b1eacc9d9bda0ec6d3c67d1b320d8e1baef11c19159bbdd5738->enter($__internal_1cb87813a3620b1eacc9d9bda0ec6d3c67d1b320d8e1baef11c19159bbdd5738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:AjoutChapitre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb87813a3620b1eacc9d9bda0ec6d3c67d1b320d8e1baef11c19159bbdd5738->leave($__internal_1cb87813a3620b1eacc9d9bda0ec6d3c67d1b320d8e1baef11c19159bbdd5738_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7e935f0772f3064f56382fb43ce5953f9210cd4a6f5de8afe2f7676cba656bb = $this->env->getExtension("native_profiler");
        $__internal_e7e935f0772f3064f56382fb43ce5953f9210cd4a6f5de8afe2f7676cba656bb->enter($__internal_e7e935f0772f3064f56382fb43ce5953f9210cd4a6f5de8afe2f7676cba656bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Enregistrer un nouveau chapitre</h1>
            <p>Ici vous pouvez ajouter votre chapitre. Il sera enregistré et consultable immédiatement après.</p>
        </div>



        <form id=\"AjoutCours\" method=\"post\">
            <aside>
                <h4> Nom du Cours ? </h4>
                <p >
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'row');
        echo "
                </p>
            </aside>

            <section>
                <article>
                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <header>
                        <h1><label for=\"texte\">Nom du chapitre : </label></h1>
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                        <hr>
                    </header>

                    <p>
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget');
        echo "
                    </p>

                    <footer>
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("label" => "Submit chapter"));
        echo "
                        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </footer>
                </article>
            </section>
        </form>
    ";
        
        $__internal_e7e935f0772f3064f56382fb43ce5953f9210cd4a6f5de8afe2f7676cba656bb->leave($__internal_e7e935f0772f3064f56382fb43ce5953f9210cd4a6f5de8afe2f7676cba656bb_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:AjoutChapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  88 => 35,  81 => 31,  73 => 26,  67 => 23,  63 => 22,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
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
/*                 <p >*/
/*                     {{ form_row(form.cours) }}*/
/*                 </p>*/
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
/*     {% endblock %}*/
/* */
