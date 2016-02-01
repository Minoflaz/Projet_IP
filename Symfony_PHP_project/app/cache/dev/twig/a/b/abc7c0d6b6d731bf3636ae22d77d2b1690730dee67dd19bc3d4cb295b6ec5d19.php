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
        $__internal_04ab57fafb9a96af87c757be5b6d6360606bae6a8d51b9e30b093b75db5fecaf = $this->env->getExtension("native_profiler");
        $__internal_04ab57fafb9a96af87c757be5b6d6360606bae6a8d51b9e30b093b75db5fecaf->enter($__internal_04ab57fafb9a96af87c757be5b6d6360606bae6a8d51b9e30b093b75db5fecaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_04ab57fafb9a96af87c757be5b6d6360606bae6a8d51b9e30b093b75db5fecaf->leave($__internal_04ab57fafb9a96af87c757be5b6d6360606bae6a8d51b9e30b093b75db5fecaf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d581d31562899b71e160a24864af01141176c954a17d160885fee5375062d765 = $this->env->getExtension("native_profiler");
        $__internal_d581d31562899b71e160a24864af01141176c954a17d160885fee5375062d765->enter($__internal_d581d31562899b71e160a24864af01141176c954a17d160885fee5375062d765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d581d31562899b71e160a24864af01141176c954a17d160885fee5375062d765->leave($__internal_d581d31562899b71e160a24864af01141176c954a17d160885fee5375062d765_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b35b55d72afeb7c18897e1383e028f683736fcd788c956eb0d87eae4e7899b9f = $this->env->getExtension("native_profiler");
        $__internal_b35b55d72afeb7c18897e1383e028f683736fcd788c956eb0d87eae4e7899b9f->enter($__internal_b35b55d72afeb7c18897e1383e028f683736fcd788c956eb0d87eae4e7899b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b35b55d72afeb7c18897e1383e028f683736fcd788c956eb0d87eae4e7899b9f->leave($__internal_b35b55d72afeb7c18897e1383e028f683736fcd788c956eb0d87eae4e7899b9f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0e03946bee2d1ce822c24acc90e2479660c7f561abcb03d63ba46d8724341b = $this->env->getExtension("native_profiler");
        $__internal_df0e03946bee2d1ce822c24acc90e2479660c7f561abcb03d63ba46d8724341b->enter($__internal_df0e03946bee2d1ce822c24acc90e2479660c7f561abcb03d63ba46d8724341b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df0e03946bee2d1ce822c24acc90e2479660c7f561abcb03d63ba46d8724341b->leave($__internal_df0e03946bee2d1ce822c24acc90e2479660c7f561abcb03d63ba46d8724341b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c50d2a03f67caf3fbe2425ffe96c5d1bd14ae9b27733be743df53fd7b0def81 = $this->env->getExtension("native_profiler");
        $__internal_0c50d2a03f67caf3fbe2425ffe96c5d1bd14ae9b27733be743df53fd7b0def81->enter($__internal_0c50d2a03f67caf3fbe2425ffe96c5d1bd14ae9b27733be743df53fd7b0def81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0c50d2a03f67caf3fbe2425ffe96c5d1bd14ae9b27733be743df53fd7b0def81->leave($__internal_0c50d2a03f67caf3fbe2425ffe96c5d1bd14ae9b27733be743df53fd7b0def81_prof);

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
