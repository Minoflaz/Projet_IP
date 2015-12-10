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
        $__internal_c5813dd31aaf3a8251db90e7587e51b4b2142d7133072b21e487f34a15a9b08e = $this->env->getExtension("native_profiler");
        $__internal_c5813dd31aaf3a8251db90e7587e51b4b2142d7133072b21e487f34a15a9b08e->enter($__internal_c5813dd31aaf3a8251db90e7587e51b4b2142d7133072b21e487f34a15a9b08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoClass.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_c5813dd31aaf3a8251db90e7587e51b4b2142d7133072b21e487f34a15a9b08e->leave($__internal_c5813dd31aaf3a8251db90e7587e51b4b2142d7133072b21e487f34a15a9b08e_prof);

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
