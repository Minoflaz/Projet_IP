<?php

/* IPBundle:Default:testAffichage.html.twig */
class __TwigTemplate_88c50906b62b95c713511c263a8b472208e8fdf7803d165f8bf7c6efc96d2346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af70fe471c1905ff5e514ee7344a3509d1d0c3f66ce2137690e0f05ad1ce9abe = $this->env->getExtension("native_profiler");
        $__internal_af70fe471c1905ff5e514ee7344a3509d1d0c3f66ce2137690e0f05ad1ce9abe->enter($__internal_af70fe471c1905ff5e514ee7344a3509d1d0c3f66ce2137690e0f05ad1ce9abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:testAffichage.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_af70fe471c1905ff5e514ee7344a3509d1d0c3f66ce2137690e0f05ad1ce9abe->leave($__internal_af70fe471c1905ff5e514ee7344a3509d1d0c3f66ce2137690e0f05ad1ce9abe_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:testAffichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{form(form)}}*/
