<?php

/* IPBundle:Default:testCours.html.twig */
class __TwigTemplate_705cf120d622672865f4dc1ffed624098dc9ed66ae8e3d57e772db26357323f8 extends Twig_Template
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
        $__internal_c68f69c53c1b9e91d604c2607408a84ae7071b15e58da80545e8d7eeacbb2eee = $this->env->getExtension("native_profiler");
        $__internal_c68f69c53c1b9e91d604c2607408a84ae7071b15e58da80545e8d7eeacbb2eee->enter($__internal_c68f69c53c1b9e91d604c2607408a84ae7071b15e58da80545e8d7eeacbb2eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:testCours.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_c68f69c53c1b9e91d604c2607408a84ae7071b15e58da80545e8d7eeacbb2eee->leave($__internal_c68f69c53c1b9e91d604c2607408a84ae7071b15e58da80545e8d7eeacbb2eee_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:testCours.html.twig";
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
