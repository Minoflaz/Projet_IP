<?php

/* IPBundle:Cours:ChapterAddSuccess.html.twig */
class __TwigTemplate_a48d03d366b600d69bbbc8d570f0804bd23543e55d3c2afa6ced6f264ad16ba4 extends Twig_Template
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
        $__internal_e5a0caa223293d764c1bbaddef72bf60609c1493ab6636ca0fe1e5ff89845e5b = $this->env->getExtension("native_profiler");
        $__internal_e5a0caa223293d764c1bbaddef72bf60609c1493ab6636ca0fe1e5ff89845e5b->enter($__internal_e5a0caa223293d764c1bbaddef72bf60609c1493ab6636ca0fe1e5ff89845e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:ChapterAddSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a0caa223293d764c1bbaddef72bf60609c1493ab6636ca0fe1e5ff89845e5b->leave($__internal_e5a0caa223293d764c1bbaddef72bf60609c1493ab6636ca0fe1e5ff89845e5b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_28a748e4e073573c4ce143227e002940d43486632b62d7d4ee097f681b0b9512 = $this->env->getExtension("native_profiler");
        $__internal_28a748e4e073573c4ce143227e002940d43486632b62d7d4ee097f681b0b9512->enter($__internal_28a748e4e073573c4ce143227e002940d43486632b62d7d4ee097f681b0b9512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Enregistrer un nouveau chapitre</h1>
            <p>Chapitre enregistré avec succès</p>
        </div>

    ";
        
        $__internal_28a748e4e073573c4ce143227e002940d43486632b62d7d4ee097f681b0b9512->leave($__internal_28a748e4e073573c4ce143227e002940d43486632b62d7d4ee097f681b0b9512_prof);

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
