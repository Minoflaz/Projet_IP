<?php

/* IPBundle:Default:exoClass.html.twig */
class __TwigTemplate_6563b426948f9b24b8ee5cfb65e0da2a4aa7cfc166d06772439870168f3f58ef extends Twig_Template
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
        $__internal_cceba8e50baf2331a5ed4c73ceed4a3bd807b085f1260d99cc7cf3e6b2fa680e = $this->env->getExtension("native_profiler");
        $__internal_cceba8e50baf2331a5ed4c73ceed4a3bd807b085f1260d99cc7cf3e6b2fa680e->enter($__internal_cceba8e50baf2331a5ed4c73ceed4a3bd807b085f1260d99cc7cf3e6b2fa680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoClass.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cceba8e50baf2331a5ed4c73ceed4a3bd807b085f1260d99cc7cf3e6b2fa680e->leave($__internal_cceba8e50baf2331a5ed4c73ceed4a3bd807b085f1260d99cc7cf3e6b2fa680e_prof);

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
        return array (  26 => 2,  22 => 1,);
    }
}
/* {{ip.getBytes()}}*/
/* {{form(form)}}*/
/* */
