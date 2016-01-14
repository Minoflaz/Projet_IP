<?php

/* IPBundle:Default:testAffichage.html.twig */
class __TwigTemplate_76e0e5540fdfdcf6e1e156af49c4229f80322d90b54cd6a0855347874c148b07 extends Twig_Template
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
        $__internal_b285b823a616d34c456649cc1f607b23af2a60957367c3654bb41a5d2b2dd052 = $this->env->getExtension("native_profiler");
        $__internal_b285b823a616d34c456649cc1f607b23af2a60957367c3654bb41a5d2b2dd052->enter($__internal_b285b823a616d34c456649cc1f607b23af2a60957367c3654bb41a5d2b2dd052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:testAffichage.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_b285b823a616d34c456649cc1f607b23af2a60957367c3654bb41a5d2b2dd052->leave($__internal_b285b823a616d34c456649cc1f607b23af2a60957367c3654bb41a5d2b2dd052_prof);

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
