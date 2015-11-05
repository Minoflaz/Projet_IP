<?php

/* IPBundle:Default:taskFailed.html.twig */
class __TwigTemplate_9de8b753ae2f5f9683cf490ec345158e4b50fec16e2b7110d739420313bd5108 extends Twig_Template
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
        $__internal_fb396255aac00fef753b33dd79424d7f05c3d5189d592e5e974854deac20eee5 = $this->env->getExtension("native_profiler");
        $__internal_fb396255aac00fef753b33dd79424d7f05c3d5189d592e5e974854deac20eee5->enter($__internal_fb396255aac00fef753b33dd79424d7f05c3d5189d592e5e974854deac20eee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:taskFailed.html.twig"));

        // line 1
        echo "<div>
\t";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
\t
<div>
\tLa case prenom est vide !
</div>\t";
        
        $__internal_fb396255aac00fef753b33dd79424d7f05c3d5189d592e5e974854deac20eee5->leave($__internal_fb396255aac00fef753b33dd79424d7f05c3d5189d592e5e974854deac20eee5_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:taskFailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div>*/
/* 	{{form(form)}}*/
/* </div>*/
/* 	*/
/* <div>*/
/* 	La case prenom est vide !*/
/* </div>	*/
