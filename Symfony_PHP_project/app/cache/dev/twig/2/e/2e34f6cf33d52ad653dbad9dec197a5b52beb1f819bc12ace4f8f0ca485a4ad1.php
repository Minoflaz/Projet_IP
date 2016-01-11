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
        $__internal_40a9ddaf316969a4f733ea41ce35192712141d3850855d1d132f0c09b5644905 = $this->env->getExtension("native_profiler");
        $__internal_40a9ddaf316969a4f733ea41ce35192712141d3850855d1d132f0c09b5644905->enter($__internal_40a9ddaf316969a4f733ea41ce35192712141d3850855d1d132f0c09b5644905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a9ddaf316969a4f733ea41ce35192712141d3850855d1d132f0c09b5644905->leave($__internal_40a9ddaf316969a4f733ea41ce35192712141d3850855d1d132f0c09b5644905_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0991e2db93f26cc18ce0f81d2b64528c1c94a53f66f5d63b5377ac50331c5bc = $this->env->getExtension("native_profiler");
        $__internal_e0991e2db93f26cc18ce0f81d2b64528c1c94a53f66f5d63b5377ac50331c5bc->enter($__internal_e0991e2db93f26cc18ce0f81d2b64528c1c94a53f66f5d63b5377ac50331c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e0991e2db93f26cc18ce0f81d2b64528c1c94a53f66f5d63b5377ac50331c5bc->leave($__internal_e0991e2db93f26cc18ce0f81d2b64528c1c94a53f66f5d63b5377ac50331c5bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c03636cf7f94e302e1c3ea6305fab02af5298de33da64ee8735b7a411f63393a = $this->env->getExtension("native_profiler");
        $__internal_c03636cf7f94e302e1c3ea6305fab02af5298de33da64ee8735b7a411f63393a->enter($__internal_c03636cf7f94e302e1c3ea6305fab02af5298de33da64ee8735b7a411f63393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c03636cf7f94e302e1c3ea6305fab02af5298de33da64ee8735b7a411f63393a->leave($__internal_c03636cf7f94e302e1c3ea6305fab02af5298de33da64ee8735b7a411f63393a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e85ba767bfc12e2f1bf565a351bf18fc08960ba7a4ba1f19513c3f907ad07d7a = $this->env->getExtension("native_profiler");
        $__internal_e85ba767bfc12e2f1bf565a351bf18fc08960ba7a4ba1f19513c3f907ad07d7a->enter($__internal_e85ba767bfc12e2f1bf565a351bf18fc08960ba7a4ba1f19513c3f907ad07d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e85ba767bfc12e2f1bf565a351bf18fc08960ba7a4ba1f19513c3f907ad07d7a->leave($__internal_e85ba767bfc12e2f1bf565a351bf18fc08960ba7a4ba1f19513c3f907ad07d7a_prof);

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
