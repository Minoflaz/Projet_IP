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
        $__internal_af8083296debee06f92cb0ca865496f291368c4d87345c34e7ce981f78395cfe = $this->env->getExtension("native_profiler");
        $__internal_af8083296debee06f92cb0ca865496f291368c4d87345c34e7ce981f78395cfe->enter($__internal_af8083296debee06f92cb0ca865496f291368c4d87345c34e7ce981f78395cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af8083296debee06f92cb0ca865496f291368c4d87345c34e7ce981f78395cfe->leave($__internal_af8083296debee06f92cb0ca865496f291368c4d87345c34e7ce981f78395cfe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33da30063baa9e5d5e2b9a9e803e1ad474274f859ee5bba749f30269e419a148 = $this->env->getExtension("native_profiler");
        $__internal_33da30063baa9e5d5e2b9a9e803e1ad474274f859ee5bba749f30269e419a148->enter($__internal_33da30063baa9e5d5e2b9a9e803e1ad474274f859ee5bba749f30269e419a148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33da30063baa9e5d5e2b9a9e803e1ad474274f859ee5bba749f30269e419a148->leave($__internal_33da30063baa9e5d5e2b9a9e803e1ad474274f859ee5bba749f30269e419a148_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31f477f981b88261e453bedd3e79fdc652496b2bada340401f8382720335d27b = $this->env->getExtension("native_profiler");
        $__internal_31f477f981b88261e453bedd3e79fdc652496b2bada340401f8382720335d27b->enter($__internal_31f477f981b88261e453bedd3e79fdc652496b2bada340401f8382720335d27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31f477f981b88261e453bedd3e79fdc652496b2bada340401f8382720335d27b->leave($__internal_31f477f981b88261e453bedd3e79fdc652496b2bada340401f8382720335d27b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed0763884fc1233dce8c53404833059e49a296443c9c9e0b3de251637473ab9 = $this->env->getExtension("native_profiler");
        $__internal_1ed0763884fc1233dce8c53404833059e49a296443c9c9e0b3de251637473ab9->enter($__internal_1ed0763884fc1233dce8c53404833059e49a296443c9c9e0b3de251637473ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1ed0763884fc1233dce8c53404833059e49a296443c9c9e0b3de251637473ab9->leave($__internal_1ed0763884fc1233dce8c53404833059e49a296443c9c9e0b3de251637473ab9_prof);

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
