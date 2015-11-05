<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8db71395daba5a981120a0d592a0876bce6a9a4f90a56fc6ce32d2fd6b642a55 extends Twig_Template
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
        $__internal_4d55115d552ae8a5ed191ad9ca8c261c24f8dbc69d2ea5fb69bf80d6b1ceea56 = $this->env->getExtension("native_profiler");
        $__internal_4d55115d552ae8a5ed191ad9ca8c261c24f8dbc69d2ea5fb69bf80d6b1ceea56->enter($__internal_4d55115d552ae8a5ed191ad9ca8c261c24f8dbc69d2ea5fb69bf80d6b1ceea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4d55115d552ae8a5ed191ad9ca8c261c24f8dbc69d2ea5fb69bf80d6b1ceea56->leave($__internal_4d55115d552ae8a5ed191ad9ca8c261c24f8dbc69d2ea5fb69bf80d6b1ceea56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
