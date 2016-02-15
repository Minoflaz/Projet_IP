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
        $__internal_44c7cb946fa0b7af372b51994a2f791946de948b8ff0f23350be8003061a7d9e = $this->env->getExtension("native_profiler");
        $__internal_44c7cb946fa0b7af372b51994a2f791946de948b8ff0f23350be8003061a7d9e->enter($__internal_44c7cb946fa0b7af372b51994a2f791946de948b8ff0f23350be8003061a7d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c7cb946fa0b7af372b51994a2f791946de948b8ff0f23350be8003061a7d9e->leave($__internal_44c7cb946fa0b7af372b51994a2f791946de948b8ff0f23350be8003061a7d9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dd08ede29db3c6b52bc9c9ff10e52c209c36a48df5aa114381e3ff80dd32377 = $this->env->getExtension("native_profiler");
        $__internal_7dd08ede29db3c6b52bc9c9ff10e52c209c36a48df5aa114381e3ff80dd32377->enter($__internal_7dd08ede29db3c6b52bc9c9ff10e52c209c36a48df5aa114381e3ff80dd32377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7dd08ede29db3c6b52bc9c9ff10e52c209c36a48df5aa114381e3ff80dd32377->leave($__internal_7dd08ede29db3c6b52bc9c9ff10e52c209c36a48df5aa114381e3ff80dd32377_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02a97ec679f92d682a80baebf37ad2f248d3cc2d05467b096c45d9cccc442d60 = $this->env->getExtension("native_profiler");
        $__internal_02a97ec679f92d682a80baebf37ad2f248d3cc2d05467b096c45d9cccc442d60->enter($__internal_02a97ec679f92d682a80baebf37ad2f248d3cc2d05467b096c45d9cccc442d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02a97ec679f92d682a80baebf37ad2f248d3cc2d05467b096c45d9cccc442d60->leave($__internal_02a97ec679f92d682a80baebf37ad2f248d3cc2d05467b096c45d9cccc442d60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a08ba6116dca8ee159295c11ea13b4744d7d0f533b9e48899251a9675683a711 = $this->env->getExtension("native_profiler");
        $__internal_a08ba6116dca8ee159295c11ea13b4744d7d0f533b9e48899251a9675683a711->enter($__internal_a08ba6116dca8ee159295c11ea13b4744d7d0f533b9e48899251a9675683a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a08ba6116dca8ee159295c11ea13b4744d7d0f533b9e48899251a9675683a711->leave($__internal_a08ba6116dca8ee159295c11ea13b4744d7d0f533b9e48899251a9675683a711_prof);

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
