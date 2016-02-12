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
        $__internal_f8432f9a2fb0b1eaa50cf0786f57dee184f03f69747df5227bb28dfe750f1d0c = $this->env->getExtension("native_profiler");
        $__internal_f8432f9a2fb0b1eaa50cf0786f57dee184f03f69747df5227bb28dfe750f1d0c->enter($__internal_f8432f9a2fb0b1eaa50cf0786f57dee184f03f69747df5227bb28dfe750f1d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:AjoutChapitre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8432f9a2fb0b1eaa50cf0786f57dee184f03f69747df5227bb28dfe750f1d0c->leave($__internal_f8432f9a2fb0b1eaa50cf0786f57dee184f03f69747df5227bb28dfe750f1d0c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9586a49643ed1e6c3d26e04fc3e4ed4ddba35298ca60f5756f3d0b0d37a80a8 = $this->env->getExtension("native_profiler");
        $__internal_c9586a49643ed1e6c3d26e04fc3e4ed4ddba35298ca60f5756f3d0b0d37a80a8->enter($__internal_c9586a49643ed1e6c3d26e04fc3e4ed4ddba35298ca60f5756f3d0b0d37a80a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c9586a49643ed1e6c3d26e04fc3e4ed4ddba35298ca60f5756f3d0b0d37a80a8->leave($__internal_c9586a49643ed1e6c3d26e04fc3e4ed4ddba35298ca60f5756f3d0b0d37a80a8_prof);

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
