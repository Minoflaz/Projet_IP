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
        $__internal_12c7e98363a63d1e7b8567683a5e762e0594f9cb3dfe7a48ef2bf8aeed516163 = $this->env->getExtension("native_profiler");
        $__internal_12c7e98363a63d1e7b8567683a5e762e0594f9cb3dfe7a48ef2bf8aeed516163->enter($__internal_12c7e98363a63d1e7b8567683a5e762e0594f9cb3dfe7a48ef2bf8aeed516163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c7e98363a63d1e7b8567683a5e762e0594f9cb3dfe7a48ef2bf8aeed516163->leave($__internal_12c7e98363a63d1e7b8567683a5e762e0594f9cb3dfe7a48ef2bf8aeed516163_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47c1a51b68d9289ba5ba50c6b8a31ff6e687184ccb123e8044593af6b9b8e2bf = $this->env->getExtension("native_profiler");
        $__internal_47c1a51b68d9289ba5ba50c6b8a31ff6e687184ccb123e8044593af6b9b8e2bf->enter($__internal_47c1a51b68d9289ba5ba50c6b8a31ff6e687184ccb123e8044593af6b9b8e2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_47c1a51b68d9289ba5ba50c6b8a31ff6e687184ccb123e8044593af6b9b8e2bf->leave($__internal_47c1a51b68d9289ba5ba50c6b8a31ff6e687184ccb123e8044593af6b9b8e2bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e9cbde1fd76c08aaf8dc5a2da7028900b2b17fa81714b25f494dfd1b195a89 = $this->env->getExtension("native_profiler");
        $__internal_a8e9cbde1fd76c08aaf8dc5a2da7028900b2b17fa81714b25f494dfd1b195a89->enter($__internal_a8e9cbde1fd76c08aaf8dc5a2da7028900b2b17fa81714b25f494dfd1b195a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8e9cbde1fd76c08aaf8dc5a2da7028900b2b17fa81714b25f494dfd1b195a89->leave($__internal_a8e9cbde1fd76c08aaf8dc5a2da7028900b2b17fa81714b25f494dfd1b195a89_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9d1aa129d937bfd335c8eaf7813c604772db14d37661e4511f9b0b9f6aa5849 = $this->env->getExtension("native_profiler");
        $__internal_f9d1aa129d937bfd335c8eaf7813c604772db14d37661e4511f9b0b9f6aa5849->enter($__internal_f9d1aa129d937bfd335c8eaf7813c604772db14d37661e4511f9b0b9f6aa5849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f9d1aa129d937bfd335c8eaf7813c604772db14d37661e4511f9b0b9f6aa5849->leave($__internal_f9d1aa129d937bfd335c8eaf7813c604772db14d37661e4511f9b0b9f6aa5849_prof);

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
