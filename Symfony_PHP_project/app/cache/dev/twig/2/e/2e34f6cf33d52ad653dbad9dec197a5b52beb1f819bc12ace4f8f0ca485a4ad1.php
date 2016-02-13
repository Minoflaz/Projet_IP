<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fb2fe9a345eaab29f452be37362df86267f1d631e212670ee8766cf74b721e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c31bb0338ed9cd01ae3a14088860ede97cbee49d2e3ed3498f7f838e2960fbcf = $this->env->getExtension("native_profiler");
        $__internal_c31bb0338ed9cd01ae3a14088860ede97cbee49d2e3ed3498f7f838e2960fbcf->enter($__internal_c31bb0338ed9cd01ae3a14088860ede97cbee49d2e3ed3498f7f838e2960fbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c31bb0338ed9cd01ae3a14088860ede97cbee49d2e3ed3498f7f838e2960fbcf->leave($__internal_c31bb0338ed9cd01ae3a14088860ede97cbee49d2e3ed3498f7f838e2960fbcf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e0923724f48847cf399c46ac16ea32980cd4dfe3290cd176045e9b12cf728dc = $this->env->getExtension("native_profiler");
        $__internal_5e0923724f48847cf399c46ac16ea32980cd4dfe3290cd176045e9b12cf728dc->enter($__internal_5e0923724f48847cf399c46ac16ea32980cd4dfe3290cd176045e9b12cf728dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e0923724f48847cf399c46ac16ea32980cd4dfe3290cd176045e9b12cf728dc->leave($__internal_5e0923724f48847cf399c46ac16ea32980cd4dfe3290cd176045e9b12cf728dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b41e9f0bd0aa76d823c389004f3643bfb5a9d5ce26c5c504d92a9af7ddd4546 = $this->env->getExtension("native_profiler");
        $__internal_9b41e9f0bd0aa76d823c389004f3643bfb5a9d5ce26c5c504d92a9af7ddd4546->enter($__internal_9b41e9f0bd0aa76d823c389004f3643bfb5a9d5ce26c5c504d92a9af7ddd4546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b41e9f0bd0aa76d823c389004f3643bfb5a9d5ce26c5c504d92a9af7ddd4546->leave($__internal_9b41e9f0bd0aa76d823c389004f3643bfb5a9d5ce26c5c504d92a9af7ddd4546_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdfc93b4df4e0a260145f733deba90f8073b4907d4dd6b436c898011575d8fc8 = $this->env->getExtension("native_profiler");
        $__internal_cdfc93b4df4e0a260145f733deba90f8073b4907d4dd6b436c898011575d8fc8->enter($__internal_cdfc93b4df4e0a260145f733deba90f8073b4907d4dd6b436c898011575d8fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cdfc93b4df4e0a260145f733deba90f8073b4907d4dd6b436c898011575d8fc8->leave($__internal_cdfc93b4df4e0a260145f733deba90f8073b4907d4dd6b436c898011575d8fc8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
