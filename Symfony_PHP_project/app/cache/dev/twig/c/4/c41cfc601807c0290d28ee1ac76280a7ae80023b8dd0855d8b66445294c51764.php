<?php

/* IPBundle:Default:exoClass.html.twig */
class __TwigTemplate_ce49e8687a2c328575373b6b517207f4de033ec7e665be019f729d45d703b2c0 extends Twig_Template
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
        $__internal_60189f67a925377f9b70ad1622aa6852377e10764c29c7a96e587e047eef07c0 = $this->env->getExtension("native_profiler");
        $__internal_60189f67a925377f9b70ad1622aa6852377e10764c29c7a96e587e047eef07c0->enter($__internal_60189f67a925377f9b70ad1622aa6852377e10764c29c7a96e587e047eef07c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoClass.html.twig"));

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
        
        $__internal_60189f67a925377f9b70ad1622aa6852377e10764c29c7a96e587e047eef07c0->leave($__internal_60189f67a925377f9b70ad1622aa6852377e10764c29c7a96e587e047eef07c0_prof);

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
