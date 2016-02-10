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
        $__internal_4af59b7f37e906230d7f6828c1f5a40f599245488d09449b99a31c19b3451c2d = $this->env->getExtension("native_profiler");
        $__internal_4af59b7f37e906230d7f6828c1f5a40f599245488d09449b99a31c19b3451c2d->enter($__internal_4af59b7f37e906230d7f6828c1f5a40f599245488d09449b99a31c19b3451c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af59b7f37e906230d7f6828c1f5a40f599245488d09449b99a31c19b3451c2d->leave($__internal_4af59b7f37e906230d7f6828c1f5a40f599245488d09449b99a31c19b3451c2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c1b65b4d23e56796001db4bfe63b60a72ea50c183a822d609cb3a96d727b836 = $this->env->getExtension("native_profiler");
        $__internal_4c1b65b4d23e56796001db4bfe63b60a72ea50c183a822d609cb3a96d727b836->enter($__internal_4c1b65b4d23e56796001db4bfe63b60a72ea50c183a822d609cb3a96d727b836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c1b65b4d23e56796001db4bfe63b60a72ea50c183a822d609cb3a96d727b836->leave($__internal_4c1b65b4d23e56796001db4bfe63b60a72ea50c183a822d609cb3a96d727b836_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dc58d59794ac2603e790b7d1ede3c3505973b25fa2cbf08d8b2c464c3cd76a4 = $this->env->getExtension("native_profiler");
        $__internal_2dc58d59794ac2603e790b7d1ede3c3505973b25fa2cbf08d8b2c464c3cd76a4->enter($__internal_2dc58d59794ac2603e790b7d1ede3c3505973b25fa2cbf08d8b2c464c3cd76a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2dc58d59794ac2603e790b7d1ede3c3505973b25fa2cbf08d8b2c464c3cd76a4->leave($__internal_2dc58d59794ac2603e790b7d1ede3c3505973b25fa2cbf08d8b2c464c3cd76a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f2c08ea2b56671355d7d3b8e606ccea72a2d37f9ecfbc0b79cb0cd4361738dc = $this->env->getExtension("native_profiler");
        $__internal_7f2c08ea2b56671355d7d3b8e606ccea72a2d37f9ecfbc0b79cb0cd4361738dc->enter($__internal_7f2c08ea2b56671355d7d3b8e606ccea72a2d37f9ecfbc0b79cb0cd4361738dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7f2c08ea2b56671355d7d3b8e606ccea72a2d37f9ecfbc0b79cb0cd4361738dc->leave($__internal_7f2c08ea2b56671355d7d3b8e606ccea72a2d37f9ecfbc0b79cb0cd4361738dc_prof);

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
