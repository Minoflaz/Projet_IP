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
        $__internal_93a4180690b91fa69bf0e3da46a8d8a5a2c086eb48be1208760a03fe269f3be0 = $this->env->getExtension("native_profiler");
        $__internal_93a4180690b91fa69bf0e3da46a8d8a5a2c086eb48be1208760a03fe269f3be0->enter($__internal_93a4180690b91fa69bf0e3da46a8d8a5a2c086eb48be1208760a03fe269f3be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a4180690b91fa69bf0e3da46a8d8a5a2c086eb48be1208760a03fe269f3be0->leave($__internal_93a4180690b91fa69bf0e3da46a8d8a5a2c086eb48be1208760a03fe269f3be0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10cc62ab3fad7d9ecc7ed9cb500c3c9e1296c6fa447d88c06e8a6c8273071c2a = $this->env->getExtension("native_profiler");
        $__internal_10cc62ab3fad7d9ecc7ed9cb500c3c9e1296c6fa447d88c06e8a6c8273071c2a->enter($__internal_10cc62ab3fad7d9ecc7ed9cb500c3c9e1296c6fa447d88c06e8a6c8273071c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_10cc62ab3fad7d9ecc7ed9cb500c3c9e1296c6fa447d88c06e8a6c8273071c2a->leave($__internal_10cc62ab3fad7d9ecc7ed9cb500c3c9e1296c6fa447d88c06e8a6c8273071c2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82efa6c2bfada4aaf99f99e1af6c86bb5a1a403f0c24d946325b5bbe32eafdef = $this->env->getExtension("native_profiler");
        $__internal_82efa6c2bfada4aaf99f99e1af6c86bb5a1a403f0c24d946325b5bbe32eafdef->enter($__internal_82efa6c2bfada4aaf99f99e1af6c86bb5a1a403f0c24d946325b5bbe32eafdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82efa6c2bfada4aaf99f99e1af6c86bb5a1a403f0c24d946325b5bbe32eafdef->leave($__internal_82efa6c2bfada4aaf99f99e1af6c86bb5a1a403f0c24d946325b5bbe32eafdef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdc0e002a46494c998dcd7cb541c69644b00e8119e5755e168c4ad0b0eed43cc = $this->env->getExtension("native_profiler");
        $__internal_cdc0e002a46494c998dcd7cb541c69644b00e8119e5755e168c4ad0b0eed43cc->enter($__internal_cdc0e002a46494c998dcd7cb541c69644b00e8119e5755e168c4ad0b0eed43cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cdc0e002a46494c998dcd7cb541c69644b00e8119e5755e168c4ad0b0eed43cc->leave($__internal_cdc0e002a46494c998dcd7cb541c69644b00e8119e5755e168c4ad0b0eed43cc_prof);

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
