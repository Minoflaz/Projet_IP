<?php

/* base.html.twig */
class __TwigTemplate_4ed529dc6f011993091e398d571927dcc7e0d579e2e8978327b56cd1c3423cb6 extends Twig_Template
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
        $__internal_ceedd9c1e99f94fa7b2621445787f20e4eaac063d9cbd971dc0d6148ec9ab013 = $this->env->getExtension("native_profiler");
        $__internal_ceedd9c1e99f94fa7b2621445787f20e4eaac063d9cbd971dc0d6148ec9ab013->enter($__internal_ceedd9c1e99f94fa7b2621445787f20e4eaac063d9cbd971dc0d6148ec9ab013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ceedd9c1e99f94fa7b2621445787f20e4eaac063d9cbd971dc0d6148ec9ab013->leave($__internal_ceedd9c1e99f94fa7b2621445787f20e4eaac063d9cbd971dc0d6148ec9ab013_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10cfb9846274faa364ae3bebc3612fc67cf1db754b5fa8ec0276e3408183f99f = $this->env->getExtension("native_profiler");
        $__internal_10cfb9846274faa364ae3bebc3612fc67cf1db754b5fa8ec0276e3408183f99f->enter($__internal_10cfb9846274faa364ae3bebc3612fc67cf1db754b5fa8ec0276e3408183f99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_10cfb9846274faa364ae3bebc3612fc67cf1db754b5fa8ec0276e3408183f99f->leave($__internal_10cfb9846274faa364ae3bebc3612fc67cf1db754b5fa8ec0276e3408183f99f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f801c514cf619bf85116a8a1656b4e105edb8d520886d100282411b4c81608a3 = $this->env->getExtension("native_profiler");
        $__internal_f801c514cf619bf85116a8a1656b4e105edb8d520886d100282411b4c81608a3->enter($__internal_f801c514cf619bf85116a8a1656b4e105edb8d520886d100282411b4c81608a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f801c514cf619bf85116a8a1656b4e105edb8d520886d100282411b4c81608a3->leave($__internal_f801c514cf619bf85116a8a1656b4e105edb8d520886d100282411b4c81608a3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f6cabe43234d204da0167f15a7323c4f5b2ac377e36bdd1745f71f7c4a9f2d8 = $this->env->getExtension("native_profiler");
        $__internal_4f6cabe43234d204da0167f15a7323c4f5b2ac377e36bdd1745f71f7c4a9f2d8->enter($__internal_4f6cabe43234d204da0167f15a7323c4f5b2ac377e36bdd1745f71f7c4a9f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f6cabe43234d204da0167f15a7323c4f5b2ac377e36bdd1745f71f7c4a9f2d8->leave($__internal_4f6cabe43234d204da0167f15a7323c4f5b2ac377e36bdd1745f71f7c4a9f2d8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cf9e2eadcd8e70c2a53dd75bda0ab6364e4fc79f8d144a3a60107c97b51a9c4 = $this->env->getExtension("native_profiler");
        $__internal_6cf9e2eadcd8e70c2a53dd75bda0ab6364e4fc79f8d144a3a60107c97b51a9c4->enter($__internal_6cf9e2eadcd8e70c2a53dd75bda0ab6364e4fc79f8d144a3a60107c97b51a9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6cf9e2eadcd8e70c2a53dd75bda0ab6364e4fc79f8d144a3a60107c97b51a9c4->leave($__internal_6cf9e2eadcd8e70c2a53dd75bda0ab6364e4fc79f8d144a3a60107c97b51a9c4_prof);

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
