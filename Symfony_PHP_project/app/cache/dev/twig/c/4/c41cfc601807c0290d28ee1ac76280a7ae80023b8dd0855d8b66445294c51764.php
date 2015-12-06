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
        $__internal_8a583cea3291919397ef73ffe1a4f9af717b13d4603393be814c44e9d4eeec9e = $this->env->getExtension("native_profiler");
        $__internal_8a583cea3291919397ef73ffe1a4f9af717b13d4603393be814c44e9d4eeec9e->enter($__internal_8a583cea3291919397ef73ffe1a4f9af717b13d4603393be814c44e9d4eeec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoClass.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "bytes", array()), "html", null, true);
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_8a583cea3291919397ef73ffe1a4f9af717b13d4603393be814c44e9d4eeec9e->leave($__internal_8a583cea3291919397ef73ffe1a4f9af717b13d4603393be814c44e9d4eeec9e_prof);

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
/* {{ip.bytes}}*/
/* {{form(form)}}*/
/* */
