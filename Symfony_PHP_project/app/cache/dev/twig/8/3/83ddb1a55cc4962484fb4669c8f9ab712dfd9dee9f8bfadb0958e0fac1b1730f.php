<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_73cf8f0077f0fc96ecc03e6ee5e746234940338722a048e0832a584bb6ea217d extends Twig_Template
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
        $__internal_740f0ec3ddee583fccb4bce4820bdee8474c5e4763b8d271e8d736eb146b6d4e = $this->env->getExtension("native_profiler");
        $__internal_740f0ec3ddee583fccb4bce4820bdee8474c5e4763b8d271e8d736eb146b6d4e->enter($__internal_740f0ec3ddee583fccb4bce4820bdee8474c5e4763b8d271e8d736eb146b6d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_740f0ec3ddee583fccb4bce4820bdee8474c5e4763b8d271e8d736eb146b6d4e->leave($__internal_740f0ec3ddee583fccb4bce4820bdee8474c5e4763b8d271e8d736eb146b6d4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2cb060f4c626914da272f20c35033cd1c8c60e4bb2e89e08ff9ed6f661898f0 = $this->env->getExtension("native_profiler");
        $__internal_b2cb060f4c626914da272f20c35033cd1c8c60e4bb2e89e08ff9ed6f661898f0->enter($__internal_b2cb060f4c626914da272f20c35033cd1c8c60e4bb2e89e08ff9ed6f661898f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b2cb060f4c626914da272f20c35033cd1c8c60e4bb2e89e08ff9ed6f661898f0->leave($__internal_b2cb060f4c626914da272f20c35033cd1c8c60e4bb2e89e08ff9ed6f661898f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b1c7bf352f17a1aa3e06e1db3961f8e19bb0cba5be0dd3d56e9238b349ae090 = $this->env->getExtension("native_profiler");
        $__internal_2b1c7bf352f17a1aa3e06e1db3961f8e19bb0cba5be0dd3d56e9238b349ae090->enter($__internal_2b1c7bf352f17a1aa3e06e1db3961f8e19bb0cba5be0dd3d56e9238b349ae090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b1c7bf352f17a1aa3e06e1db3961f8e19bb0cba5be0dd3d56e9238b349ae090->leave($__internal_2b1c7bf352f17a1aa3e06e1db3961f8e19bb0cba5be0dd3d56e9238b349ae090_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fa3a19140c80257035f3bea5eafa80cdad7348f841b452fd4037521d4753e1e = $this->env->getExtension("native_profiler");
        $__internal_9fa3a19140c80257035f3bea5eafa80cdad7348f841b452fd4037521d4753e1e->enter($__internal_9fa3a19140c80257035f3bea5eafa80cdad7348f841b452fd4037521d4753e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9fa3a19140c80257035f3bea5eafa80cdad7348f841b452fd4037521d4753e1e->leave($__internal_9fa3a19140c80257035f3bea5eafa80cdad7348f841b452fd4037521d4753e1e_prof);

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
