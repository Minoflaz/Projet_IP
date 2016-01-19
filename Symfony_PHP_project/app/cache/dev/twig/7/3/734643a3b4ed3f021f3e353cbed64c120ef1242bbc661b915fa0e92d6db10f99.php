<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9b01e4c7fa15ac83e7e492ea423bf0791207dfc851690201c49a3d42538494fe extends Twig_Template
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
        $__internal_a3937ba349099d6d05bd26e414792f8208349349ce5c76a5dc14941251f7455c = $this->env->getExtension("native_profiler");
        $__internal_a3937ba349099d6d05bd26e414792f8208349349ce5c76a5dc14941251f7455c->enter($__internal_a3937ba349099d6d05bd26e414792f8208349349ce5c76a5dc14941251f7455c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3937ba349099d6d05bd26e414792f8208349349ce5c76a5dc14941251f7455c->leave($__internal_a3937ba349099d6d05bd26e414792f8208349349ce5c76a5dc14941251f7455c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76a8abe283616f7048f41411b9c984babd1144bc4a5a309e70f97562f665022e = $this->env->getExtension("native_profiler");
        $__internal_76a8abe283616f7048f41411b9c984babd1144bc4a5a309e70f97562f665022e->enter($__internal_76a8abe283616f7048f41411b9c984babd1144bc4a5a309e70f97562f665022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_76a8abe283616f7048f41411b9c984babd1144bc4a5a309e70f97562f665022e->leave($__internal_76a8abe283616f7048f41411b9c984babd1144bc4a5a309e70f97562f665022e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6750196ff47f16e353fa974557a6ca53bb9ee70d8550f374cfad76668482052a = $this->env->getExtension("native_profiler");
        $__internal_6750196ff47f16e353fa974557a6ca53bb9ee70d8550f374cfad76668482052a->enter($__internal_6750196ff47f16e353fa974557a6ca53bb9ee70d8550f374cfad76668482052a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6750196ff47f16e353fa974557a6ca53bb9ee70d8550f374cfad76668482052a->leave($__internal_6750196ff47f16e353fa974557a6ca53bb9ee70d8550f374cfad76668482052a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5772a1b555da17f9e201316d129db7362e2e8de5d9a14479e2541e2539432e2 = $this->env->getExtension("native_profiler");
        $__internal_e5772a1b555da17f9e201316d129db7362e2e8de5d9a14479e2541e2539432e2->enter($__internal_e5772a1b555da17f9e201316d129db7362e2e8de5d9a14479e2541e2539432e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e5772a1b555da17f9e201316d129db7362e2e8de5d9a14479e2541e2539432e2->leave($__internal_e5772a1b555da17f9e201316d129db7362e2e8de5d9a14479e2541e2539432e2_prof);

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
