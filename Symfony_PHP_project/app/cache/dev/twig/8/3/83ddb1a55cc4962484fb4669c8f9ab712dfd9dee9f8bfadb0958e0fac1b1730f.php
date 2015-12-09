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
        $__internal_afc271e4256e70773af021aa3798f0651190244ac814ef7ad06fdfa88c9a9ebf = $this->env->getExtension("native_profiler");
        $__internal_afc271e4256e70773af021aa3798f0651190244ac814ef7ad06fdfa88c9a9ebf->enter($__internal_afc271e4256e70773af021aa3798f0651190244ac814ef7ad06fdfa88c9a9ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc271e4256e70773af021aa3798f0651190244ac814ef7ad06fdfa88c9a9ebf->leave($__internal_afc271e4256e70773af021aa3798f0651190244ac814ef7ad06fdfa88c9a9ebf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0415ea366bfafccbb159fe1961e7d83e34dfd9eabd5c12ce973b85cf59f843fb = $this->env->getExtension("native_profiler");
        $__internal_0415ea366bfafccbb159fe1961e7d83e34dfd9eabd5c12ce973b85cf59f843fb->enter($__internal_0415ea366bfafccbb159fe1961e7d83e34dfd9eabd5c12ce973b85cf59f843fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0415ea366bfafccbb159fe1961e7d83e34dfd9eabd5c12ce973b85cf59f843fb->leave($__internal_0415ea366bfafccbb159fe1961e7d83e34dfd9eabd5c12ce973b85cf59f843fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b83915cfc269134b7b082229a596b635893999f32318e53bbedc6d64c34b9d37 = $this->env->getExtension("native_profiler");
        $__internal_b83915cfc269134b7b082229a596b635893999f32318e53bbedc6d64c34b9d37->enter($__internal_b83915cfc269134b7b082229a596b635893999f32318e53bbedc6d64c34b9d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b83915cfc269134b7b082229a596b635893999f32318e53bbedc6d64c34b9d37->leave($__internal_b83915cfc269134b7b082229a596b635893999f32318e53bbedc6d64c34b9d37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a90aac0be047783525a8dc8db528169a998b0ee99b73238eb0e1b2cc969e2675 = $this->env->getExtension("native_profiler");
        $__internal_a90aac0be047783525a8dc8db528169a998b0ee99b73238eb0e1b2cc969e2675->enter($__internal_a90aac0be047783525a8dc8db528169a998b0ee99b73238eb0e1b2cc969e2675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a90aac0be047783525a8dc8db528169a998b0ee99b73238eb0e1b2cc969e2675->leave($__internal_a90aac0be047783525a8dc8db528169a998b0ee99b73238eb0e1b2cc969e2675_prof);

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
