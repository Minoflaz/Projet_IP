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
        $__internal_3b680ad0196f67210f7e9aeef7b2fc9cdeebcd4780469561baba3ab15354db9c = $this->env->getExtension("native_profiler");
        $__internal_3b680ad0196f67210f7e9aeef7b2fc9cdeebcd4780469561baba3ab15354db9c->enter($__internal_3b680ad0196f67210f7e9aeef7b2fc9cdeebcd4780469561baba3ab15354db9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b680ad0196f67210f7e9aeef7b2fc9cdeebcd4780469561baba3ab15354db9c->leave($__internal_3b680ad0196f67210f7e9aeef7b2fc9cdeebcd4780469561baba3ab15354db9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ab517b02d891a2d347bd44539ab45b6f2378d17002670a7ae25cc39d798c71a = $this->env->getExtension("native_profiler");
        $__internal_1ab517b02d891a2d347bd44539ab45b6f2378d17002670a7ae25cc39d798c71a->enter($__internal_1ab517b02d891a2d347bd44539ab45b6f2378d17002670a7ae25cc39d798c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1ab517b02d891a2d347bd44539ab45b6f2378d17002670a7ae25cc39d798c71a->leave($__internal_1ab517b02d891a2d347bd44539ab45b6f2378d17002670a7ae25cc39d798c71a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_990d8093c085c2a7bf16e90263315d4eb0f37ea2e2d7180bba92c9ffa3467f76 = $this->env->getExtension("native_profiler");
        $__internal_990d8093c085c2a7bf16e90263315d4eb0f37ea2e2d7180bba92c9ffa3467f76->enter($__internal_990d8093c085c2a7bf16e90263315d4eb0f37ea2e2d7180bba92c9ffa3467f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_990d8093c085c2a7bf16e90263315d4eb0f37ea2e2d7180bba92c9ffa3467f76->leave($__internal_990d8093c085c2a7bf16e90263315d4eb0f37ea2e2d7180bba92c9ffa3467f76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd89763e37ab1b2ae266f0d8ba20d82719ebfe525193137fbaf223d4118fc2f = $this->env->getExtension("native_profiler");
        $__internal_edd89763e37ab1b2ae266f0d8ba20d82719ebfe525193137fbaf223d4118fc2f->enter($__internal_edd89763e37ab1b2ae266f0d8ba20d82719ebfe525193137fbaf223d4118fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_edd89763e37ab1b2ae266f0d8ba20d82719ebfe525193137fbaf223d4118fc2f->leave($__internal_edd89763e37ab1b2ae266f0d8ba20d82719ebfe525193137fbaf223d4118fc2f_prof);

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
