<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fa40800630749d0529fb189a1c51ce54963ce1a6a97922905de5951b2a8888ff extends Twig_Template
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
        $__internal_7f91dd251db4358d62030635be0647f77d32da06a99480c7f39eeffe81234a29 = $this->env->getExtension("native_profiler");
        $__internal_7f91dd251db4358d62030635be0647f77d32da06a99480c7f39eeffe81234a29->enter($__internal_7f91dd251db4358d62030635be0647f77d32da06a99480c7f39eeffe81234a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f91dd251db4358d62030635be0647f77d32da06a99480c7f39eeffe81234a29->leave($__internal_7f91dd251db4358d62030635be0647f77d32da06a99480c7f39eeffe81234a29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b118dcd763734ed3771b279e545086d44bbdfb35816ae2bdc029dc14efc19848 = $this->env->getExtension("native_profiler");
        $__internal_b118dcd763734ed3771b279e545086d44bbdfb35816ae2bdc029dc14efc19848->enter($__internal_b118dcd763734ed3771b279e545086d44bbdfb35816ae2bdc029dc14efc19848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b118dcd763734ed3771b279e545086d44bbdfb35816ae2bdc029dc14efc19848->leave($__internal_b118dcd763734ed3771b279e545086d44bbdfb35816ae2bdc029dc14efc19848_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aedb4d3b8bc8c1f7a8b87bc2867c131da42e35b069f3b989d7e8e4761f119db = $this->env->getExtension("native_profiler");
        $__internal_3aedb4d3b8bc8c1f7a8b87bc2867c131da42e35b069f3b989d7e8e4761f119db->enter($__internal_3aedb4d3b8bc8c1f7a8b87bc2867c131da42e35b069f3b989d7e8e4761f119db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3aedb4d3b8bc8c1f7a8b87bc2867c131da42e35b069f3b989d7e8e4761f119db->leave($__internal_3aedb4d3b8bc8c1f7a8b87bc2867c131da42e35b069f3b989d7e8e4761f119db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1d8554a481c675effd4615f647cd7d1d88cfef061453458ea3855e59ccc01cb = $this->env->getExtension("native_profiler");
        $__internal_f1d8554a481c675effd4615f647cd7d1d88cfef061453458ea3855e59ccc01cb->enter($__internal_f1d8554a481c675effd4615f647cd7d1d88cfef061453458ea3855e59ccc01cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f1d8554a481c675effd4615f647cd7d1d88cfef061453458ea3855e59ccc01cb->leave($__internal_f1d8554a481c675effd4615f647cd7d1d88cfef061453458ea3855e59ccc01cb_prof);

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
