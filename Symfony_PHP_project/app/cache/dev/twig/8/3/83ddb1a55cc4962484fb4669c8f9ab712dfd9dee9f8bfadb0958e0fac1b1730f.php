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
        $__internal_1567890e46ff64e2b75bae0ef3514ee86ca611b65d582c3a2ddbdaf01ac0609a = $this->env->getExtension("native_profiler");
        $__internal_1567890e46ff64e2b75bae0ef3514ee86ca611b65d582c3a2ddbdaf01ac0609a->enter($__internal_1567890e46ff64e2b75bae0ef3514ee86ca611b65d582c3a2ddbdaf01ac0609a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1567890e46ff64e2b75bae0ef3514ee86ca611b65d582c3a2ddbdaf01ac0609a->leave($__internal_1567890e46ff64e2b75bae0ef3514ee86ca611b65d582c3a2ddbdaf01ac0609a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_209d8c87d19449134ffa56bb83ef81e88d103fb955b3bf127888bbf6621ccf86 = $this->env->getExtension("native_profiler");
        $__internal_209d8c87d19449134ffa56bb83ef81e88d103fb955b3bf127888bbf6621ccf86->enter($__internal_209d8c87d19449134ffa56bb83ef81e88d103fb955b3bf127888bbf6621ccf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_209d8c87d19449134ffa56bb83ef81e88d103fb955b3bf127888bbf6621ccf86->leave($__internal_209d8c87d19449134ffa56bb83ef81e88d103fb955b3bf127888bbf6621ccf86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ad7b36896d6b752cb7962032d4ed6faf23d4048dc792f95af3c584de7c825fc = $this->env->getExtension("native_profiler");
        $__internal_3ad7b36896d6b752cb7962032d4ed6faf23d4048dc792f95af3c584de7c825fc->enter($__internal_3ad7b36896d6b752cb7962032d4ed6faf23d4048dc792f95af3c584de7c825fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ad7b36896d6b752cb7962032d4ed6faf23d4048dc792f95af3c584de7c825fc->leave($__internal_3ad7b36896d6b752cb7962032d4ed6faf23d4048dc792f95af3c584de7c825fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_107a481b1342702b0be98cd7a6873fe3194d6c7e0ffcfc4f065395f659e673ab = $this->env->getExtension("native_profiler");
        $__internal_107a481b1342702b0be98cd7a6873fe3194d6c7e0ffcfc4f065395f659e673ab->enter($__internal_107a481b1342702b0be98cd7a6873fe3194d6c7e0ffcfc4f065395f659e673ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_107a481b1342702b0be98cd7a6873fe3194d6c7e0ffcfc4f065395f659e673ab->leave($__internal_107a481b1342702b0be98cd7a6873fe3194d6c7e0ffcfc4f065395f659e673ab_prof);

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
