<?php

/* IPBundle:Cours:ChapterAddSuccess.html.twig */
class __TwigTemplate_9f4646df0ad2f65be33f0617cfde46ce85fb7407eac81b25d34cadce73c6d072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Cours:ChapterAddSuccess.html.twig", 1);
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
        $__internal_7a68044386bebd010b1df31d7dd6eccbc4d31c1dbb7f2a3184ef379a327c6805 = $this->env->getExtension("native_profiler");
        $__internal_7a68044386bebd010b1df31d7dd6eccbc4d31c1dbb7f2a3184ef379a327c6805->enter($__internal_7a68044386bebd010b1df31d7dd6eccbc4d31c1dbb7f2a3184ef379a327c6805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:ChapterAddSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a68044386bebd010b1df31d7dd6eccbc4d31c1dbb7f2a3184ef379a327c6805->leave($__internal_7a68044386bebd010b1df31d7dd6eccbc4d31c1dbb7f2a3184ef379a327c6805_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_20b918e53991bfb467cf4b5491f0fdfd38ea344d0b24a8a598bf40af084216a4 = $this->env->getExtension("native_profiler");
        $__internal_20b918e53991bfb467cf4b5491f0fdfd38ea344d0b24a8a598bf40af084216a4->enter($__internal_20b918e53991bfb467cf4b5491f0fdfd38ea344d0b24a8a598bf40af084216a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Enregistrer un nouveau chapitre</h1>
            <p>Chapitre enregistré avec succès</p>
        </div>

    ";
        
        $__internal_20b918e53991bfb467cf4b5491f0fdfd38ea344d0b24a8a598bf40af084216a4->leave($__internal_20b918e53991bfb467cf4b5491f0fdfd38ea344d0b24a8a598bf40af084216a4_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:ChapterAddSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Enregistrer un nouveau chapitre</h1>*/
/*             <p>Chapitre enregistré avec succès</p>*/
/*         </div>*/
/* */
/*     {% endblock %}*/
