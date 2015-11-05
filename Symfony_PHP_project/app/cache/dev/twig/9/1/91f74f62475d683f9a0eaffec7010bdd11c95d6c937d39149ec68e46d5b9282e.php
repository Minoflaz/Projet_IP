<?php

/* base.html.twig */
class __TwigTemplate_622998b269f9b397ad1cb80fd4efadbd5ed7e334d5f29a7170b708475c1b039f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c220888f4a5d8cbafa582e32894f01bd33d6bde1a96bcb840a3c9cad5717d7 = $this->env->getExtension("native_profiler");
        $__internal_54c220888f4a5d8cbafa582e32894f01bd33d6bde1a96bcb840a3c9cad5717d7->enter($__internal_54c220888f4a5d8cbafa582e32894f01bd33d6bde1a96bcb840a3c9cad5717d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_54c220888f4a5d8cbafa582e32894f01bd33d6bde1a96bcb840a3c9cad5717d7->leave($__internal_54c220888f4a5d8cbafa582e32894f01bd33d6bde1a96bcb840a3c9cad5717d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fba34a115026fa6b7228913456433b9b22e429590bd89d48729dc942bb9eec6 = $this->env->getExtension("native_profiler");
        $__internal_6fba34a115026fa6b7228913456433b9b22e429590bd89d48729dc942bb9eec6->enter($__internal_6fba34a115026fa6b7228913456433b9b22e429590bd89d48729dc942bb9eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6fba34a115026fa6b7228913456433b9b22e429590bd89d48729dc942bb9eec6->leave($__internal_6fba34a115026fa6b7228913456433b9b22e429590bd89d48729dc942bb9eec6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07c8d36aefc2ae42b9c8cd645f55785b4e31138c07bfdc027fdd5982ec984d65 = $this->env->getExtension("native_profiler");
        $__internal_07c8d36aefc2ae42b9c8cd645f55785b4e31138c07bfdc027fdd5982ec984d65->enter($__internal_07c8d36aefc2ae42b9c8cd645f55785b4e31138c07bfdc027fdd5982ec984d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07c8d36aefc2ae42b9c8cd645f55785b4e31138c07bfdc027fdd5982ec984d65->leave($__internal_07c8d36aefc2ae42b9c8cd645f55785b4e31138c07bfdc027fdd5982ec984d65_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec4f6a7f25bec0b549b8712a8f8d3058d21b5d3f9848744c777700632838931 = $this->env->getExtension("native_profiler");
        $__internal_6ec4f6a7f25bec0b549b8712a8f8d3058d21b5d3f9848744c777700632838931->enter($__internal_6ec4f6a7f25bec0b549b8712a8f8d3058d21b5d3f9848744c777700632838931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ec4f6a7f25bec0b549b8712a8f8d3058d21b5d3f9848744c777700632838931->leave($__internal_6ec4f6a7f25bec0b549b8712a8f8d3058d21b5d3f9848744c777700632838931_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_352a4afdfdfa69f8c340e0ea734015c1d9be8b5eb6515667de4d7487e3f9a70e = $this->env->getExtension("native_profiler");
        $__internal_352a4afdfdfa69f8c340e0ea734015c1d9be8b5eb6515667de4d7487e3f9a70e->enter($__internal_352a4afdfdfa69f8c340e0ea734015c1d9be8b5eb6515667de4d7487e3f9a70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_352a4afdfdfa69f8c340e0ea734015c1d9be8b5eb6515667de4d7487e3f9a70e->leave($__internal_352a4afdfdfa69f8c340e0ea734015c1d9be8b5eb6515667de4d7487e3f9a70e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
