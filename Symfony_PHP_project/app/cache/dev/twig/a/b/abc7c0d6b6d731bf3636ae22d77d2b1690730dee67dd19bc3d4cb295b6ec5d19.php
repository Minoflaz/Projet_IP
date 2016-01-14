<?php

/* base.html.twig */
class __TwigTemplate_1f3ee9328b9e021acd33531148069c1856fec3ef980c22281ccc2161d2b86525 extends Twig_Template
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
        $__internal_ed2275fb9af971bcbdc327c454f356b9a86bd8ebf8a84d3d9e324badaa2d45a6 = $this->env->getExtension("native_profiler");
        $__internal_ed2275fb9af971bcbdc327c454f356b9a86bd8ebf8a84d3d9e324badaa2d45a6->enter($__internal_ed2275fb9af971bcbdc327c454f356b9a86bd8ebf8a84d3d9e324badaa2d45a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ed2275fb9af971bcbdc327c454f356b9a86bd8ebf8a84d3d9e324badaa2d45a6->leave($__internal_ed2275fb9af971bcbdc327c454f356b9a86bd8ebf8a84d3d9e324badaa2d45a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c78c6a0edae3fdd1165c17a4f30cbf49af55aa43c656dd2f214432e5eb9de90 = $this->env->getExtension("native_profiler");
        $__internal_3c78c6a0edae3fdd1165c17a4f30cbf49af55aa43c656dd2f214432e5eb9de90->enter($__internal_3c78c6a0edae3fdd1165c17a4f30cbf49af55aa43c656dd2f214432e5eb9de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c78c6a0edae3fdd1165c17a4f30cbf49af55aa43c656dd2f214432e5eb9de90->leave($__internal_3c78c6a0edae3fdd1165c17a4f30cbf49af55aa43c656dd2f214432e5eb9de90_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f5446d39f706a4ad94709d895e2784f1d5744ed224d381b62fc0729cca8bf85 = $this->env->getExtension("native_profiler");
        $__internal_1f5446d39f706a4ad94709d895e2784f1d5744ed224d381b62fc0729cca8bf85->enter($__internal_1f5446d39f706a4ad94709d895e2784f1d5744ed224d381b62fc0729cca8bf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f5446d39f706a4ad94709d895e2784f1d5744ed224d381b62fc0729cca8bf85->leave($__internal_1f5446d39f706a4ad94709d895e2784f1d5744ed224d381b62fc0729cca8bf85_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_79c940e74bd1a80e5d5c5f872cc5171ff6f040cc7908bc68bcf9783a27590e85 = $this->env->getExtension("native_profiler");
        $__internal_79c940e74bd1a80e5d5c5f872cc5171ff6f040cc7908bc68bcf9783a27590e85->enter($__internal_79c940e74bd1a80e5d5c5f872cc5171ff6f040cc7908bc68bcf9783a27590e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79c940e74bd1a80e5d5c5f872cc5171ff6f040cc7908bc68bcf9783a27590e85->leave($__internal_79c940e74bd1a80e5d5c5f872cc5171ff6f040cc7908bc68bcf9783a27590e85_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c757b53e36200c99098042b1e50ef06183c8fc6d299641f690160b203bbd37a = $this->env->getExtension("native_profiler");
        $__internal_2c757b53e36200c99098042b1e50ef06183c8fc6d299641f690160b203bbd37a->enter($__internal_2c757b53e36200c99098042b1e50ef06183c8fc6d299641f690160b203bbd37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c757b53e36200c99098042b1e50ef06183c8fc6d299641f690160b203bbd37a->leave($__internal_2c757b53e36200c99098042b1e50ef06183c8fc6d299641f690160b203bbd37a_prof);

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
