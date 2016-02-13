<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f85ee830ef13754d2a0bb05387f1a343b139d2210fd4f706c1e0f3460f4b474e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67055cb4bd1222af0246d845adf9bd03b0d484ebbc76303d25de47832f987168 = $this->env->getExtension("native_profiler");
        $__internal_67055cb4bd1222af0246d845adf9bd03b0d484ebbc76303d25de47832f987168->enter($__internal_67055cb4bd1222af0246d845adf9bd03b0d484ebbc76303d25de47832f987168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67055cb4bd1222af0246d845adf9bd03b0d484ebbc76303d25de47832f987168->leave($__internal_67055cb4bd1222af0246d845adf9bd03b0d484ebbc76303d25de47832f987168_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_feb2ad04ba7a0b868773f0ea6466fb9589319737c81f313c69c04fa92b1648f2 = $this->env->getExtension("native_profiler");
        $__internal_feb2ad04ba7a0b868773f0ea6466fb9589319737c81f313c69c04fa92b1648f2->enter($__internal_feb2ad04ba7a0b868773f0ea6466fb9589319737c81f313c69c04fa92b1648f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_feb2ad04ba7a0b868773f0ea6466fb9589319737c81f313c69c04fa92b1648f2->leave($__internal_feb2ad04ba7a0b868773f0ea6466fb9589319737c81f313c69c04fa92b1648f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
