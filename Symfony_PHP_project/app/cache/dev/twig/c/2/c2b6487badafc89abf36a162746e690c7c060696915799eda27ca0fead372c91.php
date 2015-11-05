<?php

/* IPBundle:Default:testAffichage.html.twig */
class __TwigTemplate_453b6d79b1be4a80737f6f5815ead82407f06f14b542e33a8ff80da300bc4b35 extends Twig_Template
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
        $__internal_2faad7929d79576c8f377bdc0d8ce2d5a07960596851fcdd99789a4827e32bfa = $this->env->getExtension("native_profiler");
        $__internal_2faad7929d79576c8f377bdc0d8ce2d5a07960596851fcdd99789a4827e32bfa->enter($__internal_2faad7929d79576c8f377bdc0d8ce2d5a07960596851fcdd99789a4827e32bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:testAffichage.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_2faad7929d79576c8f377bdc0d8ce2d5a07960596851fcdd99789a4827e32bfa->leave($__internal_2faad7929d79576c8f377bdc0d8ce2d5a07960596851fcdd99789a4827e32bfa_prof);

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
