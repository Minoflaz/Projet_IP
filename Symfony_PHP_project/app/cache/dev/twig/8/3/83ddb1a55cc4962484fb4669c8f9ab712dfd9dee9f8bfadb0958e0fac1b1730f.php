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
        $__internal_a3bc1821081dbed9613a6e388cfdf8ae3e2063be30529bfc3d784271e5d23dd0 = $this->env->getExtension("native_profiler");
        $__internal_a3bc1821081dbed9613a6e388cfdf8ae3e2063be30529bfc3d784271e5d23dd0->enter($__internal_a3bc1821081dbed9613a6e388cfdf8ae3e2063be30529bfc3d784271e5d23dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3bc1821081dbed9613a6e388cfdf8ae3e2063be30529bfc3d784271e5d23dd0->leave($__internal_a3bc1821081dbed9613a6e388cfdf8ae3e2063be30529bfc3d784271e5d23dd0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31e3477111fdc40d5595f6907f93fed02f03c2f13b49253d044bc39f504e85f7 = $this->env->getExtension("native_profiler");
        $__internal_31e3477111fdc40d5595f6907f93fed02f03c2f13b49253d044bc39f504e85f7->enter($__internal_31e3477111fdc40d5595f6907f93fed02f03c2f13b49253d044bc39f504e85f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_31e3477111fdc40d5595f6907f93fed02f03c2f13b49253d044bc39f504e85f7->leave($__internal_31e3477111fdc40d5595f6907f93fed02f03c2f13b49253d044bc39f504e85f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9e31178739695c65e5afb8d5e8a40a3dc79adee91b79d912beca57f0c28eba7 = $this->env->getExtension("native_profiler");
        $__internal_a9e31178739695c65e5afb8d5e8a40a3dc79adee91b79d912beca57f0c28eba7->enter($__internal_a9e31178739695c65e5afb8d5e8a40a3dc79adee91b79d912beca57f0c28eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9e31178739695c65e5afb8d5e8a40a3dc79adee91b79d912beca57f0c28eba7->leave($__internal_a9e31178739695c65e5afb8d5e8a40a3dc79adee91b79d912beca57f0c28eba7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_921a78543da1521324251922b3bb3c81145fcc84d54f9ce23fd2fb22b2719a96 = $this->env->getExtension("native_profiler");
        $__internal_921a78543da1521324251922b3bb3c81145fcc84d54f9ce23fd2fb22b2719a96->enter($__internal_921a78543da1521324251922b3bb3c81145fcc84d54f9ce23fd2fb22b2719a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_921a78543da1521324251922b3bb3c81145fcc84d54f9ce23fd2fb22b2719a96->leave($__internal_921a78543da1521324251922b3bb3c81145fcc84d54f9ce23fd2fb22b2719a96_prof);

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
