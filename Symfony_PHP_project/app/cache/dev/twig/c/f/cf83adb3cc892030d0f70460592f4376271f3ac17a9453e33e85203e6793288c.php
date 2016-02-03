<?php

/* IPBundle:Default:testCours.html.twig */
class __TwigTemplate_7531fd41e1961852ae08988dc2e2ecac8cdbadb195a293a5aa269a64546645a1 extends Twig_Template
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
        $__internal_ca69bef57071972a2692802fef747117e97c878d5d15379849ee5bc05f9b2b69 = $this->env->getExtension("native_profiler");
        $__internal_ca69bef57071972a2692802fef747117e97c878d5d15379849ee5bc05f9b2b69->enter($__internal_ca69bef57071972a2692802fef747117e97c878d5d15379849ee5bc05f9b2b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:testCours.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_ca69bef57071972a2692802fef747117e97c878d5d15379849ee5bc05f9b2b69->leave($__internal_ca69bef57071972a2692802fef747117e97c878d5d15379849ee5bc05f9b2b69_prof);

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
