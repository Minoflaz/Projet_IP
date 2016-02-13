<?php

/* IPBundle:Cours:AjoutChapitre.html.twig */
class __TwigTemplate_2d772f199265e392acd035b752214b48acd848e1c0ffefaf47150c7697527080 extends Twig_Template
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
        $__internal_f0676811b20eb93837cec68863f4ab72e793acd7f665d5f5af31786efaa97e34 = $this->env->getExtension("native_profiler");
        $__internal_f0676811b20eb93837cec68863f4ab72e793acd7f665d5f5af31786efaa97e34->enter($__internal_f0676811b20eb93837cec68863f4ab72e793acd7f665d5f5af31786efaa97e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:AjoutChapitre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0676811b20eb93837cec68863f4ab72e793acd7f665d5f5af31786efaa97e34->leave($__internal_f0676811b20eb93837cec68863f4ab72e793acd7f665d5f5af31786efaa97e34_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_295260e9750bc183fdb1d66379f1d24781ac0a0a9e890ebef7bf1a57fabb0f3e = $this->env->getExtension("native_profiler");
        $__internal_295260e9750bc183fdb1d66379f1d24781ac0a0a9e890ebef7bf1a57fabb0f3e->enter($__internal_295260e9750bc183fdb1d66379f1d24781ac0a0a9e890ebef7bf1a57fabb0f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_295260e9750bc183fdb1d66379f1d24781ac0a0a9e890ebef7bf1a57fabb0f3e->leave($__internal_295260e9750bc183fdb1d66379f1d24781ac0a0a9e890ebef7bf1a57fabb0f3e_prof);

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
