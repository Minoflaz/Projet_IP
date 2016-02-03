<?php

/* IPBundle:Default:testAffichage.html.twig */
class __TwigTemplate_edb18b18f06920984464ee870e77cd19a8f18711336e4ac97fb135d7bbb4b202 extends Twig_Template
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
        $__internal_154ca7cc550a15d27fe67337508b07c423f204e9ad056d14de7fabf3cf43fa80 = $this->env->getExtension("native_profiler");
        $__internal_154ca7cc550a15d27fe67337508b07c423f204e9ad056d14de7fabf3cf43fa80->enter($__internal_154ca7cc550a15d27fe67337508b07c423f204e9ad056d14de7fabf3cf43fa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:testAffichage.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_154ca7cc550a15d27fe67337508b07c423f204e9ad056d14de7fabf3cf43fa80->leave($__internal_154ca7cc550a15d27fe67337508b07c423f204e9ad056d14de7fabf3cf43fa80_prof);

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
