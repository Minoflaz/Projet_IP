<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_05f6c71796af4e20be42b0048b137e69c23cb1b89a170cdb7a10894e40e5ca19 extends Twig_Template
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
        $__internal_5e0b3a2b83822e9813247143fcceb9b08ae896e911dbf2dee89b9a15e22a5cde = $this->env->getExtension("native_profiler");
        $__internal_5e0b3a2b83822e9813247143fcceb9b08ae896e911dbf2dee89b9a15e22a5cde->enter($__internal_5e0b3a2b83822e9813247143fcceb9b08ae896e911dbf2dee89b9a15e22a5cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e0b3a2b83822e9813247143fcceb9b08ae896e911dbf2dee89b9a15e22a5cde->leave($__internal_5e0b3a2b83822e9813247143fcceb9b08ae896e911dbf2dee89b9a15e22a5cde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f68d037b9af2434de97481f5723df49696fd80512208c7974ac95905505ae9fe = $this->env->getExtension("native_profiler");
        $__internal_f68d037b9af2434de97481f5723df49696fd80512208c7974ac95905505ae9fe->enter($__internal_f68d037b9af2434de97481f5723df49696fd80512208c7974ac95905505ae9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f68d037b9af2434de97481f5723df49696fd80512208c7974ac95905505ae9fe->leave($__internal_f68d037b9af2434de97481f5723df49696fd80512208c7974ac95905505ae9fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ffe59da0b97d3c9f8ef24cf212e5d81be28282c73eac0da9ed432e32dccd31e = $this->env->getExtension("native_profiler");
        $__internal_6ffe59da0b97d3c9f8ef24cf212e5d81be28282c73eac0da9ed432e32dccd31e->enter($__internal_6ffe59da0b97d3c9f8ef24cf212e5d81be28282c73eac0da9ed432e32dccd31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ffe59da0b97d3c9f8ef24cf212e5d81be28282c73eac0da9ed432e32dccd31e->leave($__internal_6ffe59da0b97d3c9f8ef24cf212e5d81be28282c73eac0da9ed432e32dccd31e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e9f5634992747910a16836cf0f26f154f496237ac4f412228967b6d6266336 = $this->env->getExtension("native_profiler");
        $__internal_70e9f5634992747910a16836cf0f26f154f496237ac4f412228967b6d6266336->enter($__internal_70e9f5634992747910a16836cf0f26f154f496237ac4f412228967b6d6266336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_70e9f5634992747910a16836cf0f26f154f496237ac4f412228967b6d6266336->leave($__internal_70e9f5634992747910a16836cf0f26f154f496237ac4f412228967b6d6266336_prof);

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
