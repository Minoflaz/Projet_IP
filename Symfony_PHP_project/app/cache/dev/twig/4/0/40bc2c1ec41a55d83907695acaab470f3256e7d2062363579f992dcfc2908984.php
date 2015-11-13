<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0eaae2bca6a169fad4034363c49d6eaf831c2529850c99bb17e5053efc17f30a extends Twig_Template
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
        $__internal_343167425cda74d74bd39e81748cd00105e94315a7b36d337b8fdf328248d44b = $this->env->getExtension("native_profiler");
        $__internal_343167425cda74d74bd39e81748cd00105e94315a7b36d337b8fdf328248d44b->enter($__internal_343167425cda74d74bd39e81748cd00105e94315a7b36d337b8fdf328248d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343167425cda74d74bd39e81748cd00105e94315a7b36d337b8fdf328248d44b->leave($__internal_343167425cda74d74bd39e81748cd00105e94315a7b36d337b8fdf328248d44b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99bc170b5f1cf560b71aec04dd89506a7bf513219098efa538d20dea93490c77 = $this->env->getExtension("native_profiler");
        $__internal_99bc170b5f1cf560b71aec04dd89506a7bf513219098efa538d20dea93490c77->enter($__internal_99bc170b5f1cf560b71aec04dd89506a7bf513219098efa538d20dea93490c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_99bc170b5f1cf560b71aec04dd89506a7bf513219098efa538d20dea93490c77->leave($__internal_99bc170b5f1cf560b71aec04dd89506a7bf513219098efa538d20dea93490c77_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de53ce2f73eda44285dc0ab0162199be367e845113b12b1ab0f2a97814569060 = $this->env->getExtension("native_profiler");
        $__internal_de53ce2f73eda44285dc0ab0162199be367e845113b12b1ab0f2a97814569060->enter($__internal_de53ce2f73eda44285dc0ab0162199be367e845113b12b1ab0f2a97814569060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de53ce2f73eda44285dc0ab0162199be367e845113b12b1ab0f2a97814569060->leave($__internal_de53ce2f73eda44285dc0ab0162199be367e845113b12b1ab0f2a97814569060_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e663f1073f0e81b1b6f0e5543ac7ffcc4b0045324c6661932f1bcdb7ab856df1 = $this->env->getExtension("native_profiler");
        $__internal_e663f1073f0e81b1b6f0e5543ac7ffcc4b0045324c6661932f1bcdb7ab856df1->enter($__internal_e663f1073f0e81b1b6f0e5543ac7ffcc4b0045324c6661932f1bcdb7ab856df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e663f1073f0e81b1b6f0e5543ac7ffcc4b0045324c6661932f1bcdb7ab856df1->leave($__internal_e663f1073f0e81b1b6f0e5543ac7ffcc4b0045324c6661932f1bcdb7ab856df1_prof);

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
