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
        $__internal_d322a18baf1d1969c91168b5f5710471efb9ba1d1b5e42ec97aee6970f41826d = $this->env->getExtension("native_profiler");
        $__internal_d322a18baf1d1969c91168b5f5710471efb9ba1d1b5e42ec97aee6970f41826d->enter($__internal_d322a18baf1d1969c91168b5f5710471efb9ba1d1b5e42ec97aee6970f41826d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d322a18baf1d1969c91168b5f5710471efb9ba1d1b5e42ec97aee6970f41826d->leave($__internal_d322a18baf1d1969c91168b5f5710471efb9ba1d1b5e42ec97aee6970f41826d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7f6b4c3da9668411a08d366edbf0ab3bef0b566d17c567e72915181dc1af6f7 = $this->env->getExtension("native_profiler");
        $__internal_b7f6b4c3da9668411a08d366edbf0ab3bef0b566d17c567e72915181dc1af6f7->enter($__internal_b7f6b4c3da9668411a08d366edbf0ab3bef0b566d17c567e72915181dc1af6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b7f6b4c3da9668411a08d366edbf0ab3bef0b566d17c567e72915181dc1af6f7->leave($__internal_b7f6b4c3da9668411a08d366edbf0ab3bef0b566d17c567e72915181dc1af6f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_655186ed2ffd1c397bc0fd59e26fc0adba421448deae67b791d986116d3044d7 = $this->env->getExtension("native_profiler");
        $__internal_655186ed2ffd1c397bc0fd59e26fc0adba421448deae67b791d986116d3044d7->enter($__internal_655186ed2ffd1c397bc0fd59e26fc0adba421448deae67b791d986116d3044d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_655186ed2ffd1c397bc0fd59e26fc0adba421448deae67b791d986116d3044d7->leave($__internal_655186ed2ffd1c397bc0fd59e26fc0adba421448deae67b791d986116d3044d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2788b7c27b42c79f1c386dcb7c359f6dd0139aa1120f208c629bbde3dfc1037 = $this->env->getExtension("native_profiler");
        $__internal_b2788b7c27b42c79f1c386dcb7c359f6dd0139aa1120f208c629bbde3dfc1037->enter($__internal_b2788b7c27b42c79f1c386dcb7c359f6dd0139aa1120f208c629bbde3dfc1037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b2788b7c27b42c79f1c386dcb7c359f6dd0139aa1120f208c629bbde3dfc1037->leave($__internal_b2788b7c27b42c79f1c386dcb7c359f6dd0139aa1120f208c629bbde3dfc1037_prof);

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
