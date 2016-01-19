<?php

/* IPBundle:Default:testCours.html.twig */
class __TwigTemplate_3b76773db21f142c83d862a38c2515f62d7f1fb318b57cedd5c7c782c93487f3 extends Twig_Template
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
        $__internal_7415773d2deec8dc3e62782cb646bc0a3121993e4a713a114a115680131095f3 = $this->env->getExtension("native_profiler");
        $__internal_7415773d2deec8dc3e62782cb646bc0a3121993e4a713a114a115680131095f3->enter($__internal_7415773d2deec8dc3e62782cb646bc0a3121993e4a713a114a115680131095f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:testCours.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_7415773d2deec8dc3e62782cb646bc0a3121993e4a713a114a115680131095f3->leave($__internal_7415773d2deec8dc3e62782cb646bc0a3121993e4a713a114a115680131095f3_prof);

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
