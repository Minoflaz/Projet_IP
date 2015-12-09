<?php

/* IPBundle:Default:exoClass.html.twig */
class __TwigTemplate_612dc6c680f7b19f9729d501e7f529c189f1e971e37254ce67d1f79308404dea extends Twig_Template
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
        $__internal_11d03c1bfb460ef6578a94967e8203059ef8a68aeff03a9936a1d525afd24031 = $this->env->getExtension("native_profiler");
        $__internal_11d03c1bfb460ef6578a94967e8203059ef8a68aeff03a9936a1d525afd24031->enter($__internal_11d03c1bfb460ef6578a94967e8203059ef8a68aeff03a9936a1d525afd24031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoClass.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "giveClass", array(), "method"), "html", null, true);
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_11d03c1bfb460ef6578a94967e8203059ef8a68aeff03a9936a1d525afd24031->leave($__internal_11d03c1bfb460ef6578a94967e8203059ef8a68aeff03a9936a1d525afd24031_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:exoClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ip.getBytes()}}*/
/* {{ip.giveClass()}}*/
/* {{form(form)}}*/
/* */
