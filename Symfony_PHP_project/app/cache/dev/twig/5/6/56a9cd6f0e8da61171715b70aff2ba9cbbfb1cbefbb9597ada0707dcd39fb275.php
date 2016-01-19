<?php

/* IPBundle:Default:exoClass2.html.twig */
class __TwigTemplate_2cf062fb67e47ae809d5af38953a8877e1575532a46c9941c37935284e41aad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd3eca754dcf5463ef156c19128e5f306055516742580c33648c95ed23ce9cdb = $this->env->getExtension("native_profiler");
        $__internal_cd3eca754dcf5463ef156c19128e5f306055516742580c33648c95ed23ce9cdb->enter($__internal_cd3eca754dcf5463ef156c19128e5f306055516742580c33648c95ed23ce9cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoClass2.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cd3eca754dcf5463ef156c19128e5f306055516742580c33648c95ed23ce9cdb->leave($__internal_cd3eca754dcf5463ef156c19128e5f306055516742580c33648c95ed23ce9cdb_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:exoClass2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {{ip.getBytes()}}*/
/* {{form(form)}}*/
/* */
