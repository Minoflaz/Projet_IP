<?php

/* base.html.twig */
class __TwigTemplate_e8f192c1220b2a30b50d0d5a861f56d981bd853deda23154f331739a304999db extends Twig_Template
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
        $__internal_44f8832e737dee291da5d55421630e667385405d525a54e68715d349b11a2533 = $this->env->getExtension("native_profiler");
        $__internal_44f8832e737dee291da5d55421630e667385405d525a54e68715d349b11a2533->enter($__internal_44f8832e737dee291da5d55421630e667385405d525a54e68715d349b11a2533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_44f8832e737dee291da5d55421630e667385405d525a54e68715d349b11a2533->leave($__internal_44f8832e737dee291da5d55421630e667385405d525a54e68715d349b11a2533_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc1fcf67ab36516a2be17c3885bdb94687f893741f89bd1aa865e1fabaae82df = $this->env->getExtension("native_profiler");
        $__internal_bc1fcf67ab36516a2be17c3885bdb94687f893741f89bd1aa865e1fabaae82df->enter($__internal_bc1fcf67ab36516a2be17c3885bdb94687f893741f89bd1aa865e1fabaae82df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc1fcf67ab36516a2be17c3885bdb94687f893741f89bd1aa865e1fabaae82df->leave($__internal_bc1fcf67ab36516a2be17c3885bdb94687f893741f89bd1aa865e1fabaae82df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d974d6afc2258725c4c7f1afa914a9cecfc2396dcf490524620e40c2944b5368 = $this->env->getExtension("native_profiler");
        $__internal_d974d6afc2258725c4c7f1afa914a9cecfc2396dcf490524620e40c2944b5368->enter($__internal_d974d6afc2258725c4c7f1afa914a9cecfc2396dcf490524620e40c2944b5368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d974d6afc2258725c4c7f1afa914a9cecfc2396dcf490524620e40c2944b5368->leave($__internal_d974d6afc2258725c4c7f1afa914a9cecfc2396dcf490524620e40c2944b5368_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e37ad5985b63682e244d62c955203a3f9f800acc3f43986b637a786d77fe025e = $this->env->getExtension("native_profiler");
        $__internal_e37ad5985b63682e244d62c955203a3f9f800acc3f43986b637a786d77fe025e->enter($__internal_e37ad5985b63682e244d62c955203a3f9f800acc3f43986b637a786d77fe025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e37ad5985b63682e244d62c955203a3f9f800acc3f43986b637a786d77fe025e->leave($__internal_e37ad5985b63682e244d62c955203a3f9f800acc3f43986b637a786d77fe025e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66573da262434abfb06a460feadb025fe92762a5fa45f71c91a41719e567b999 = $this->env->getExtension("native_profiler");
        $__internal_66573da262434abfb06a460feadb025fe92762a5fa45f71c91a41719e567b999->enter($__internal_66573da262434abfb06a460feadb025fe92762a5fa45f71c91a41719e567b999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_66573da262434abfb06a460feadb025fe92762a5fa45f71c91a41719e567b999->leave($__internal_66573da262434abfb06a460feadb025fe92762a5fa45f71c91a41719e567b999_prof);

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
