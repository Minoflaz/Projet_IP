<?php

/* IPBundle:Access:AccessDenied.html.twig */
class __TwigTemplate_4dfbfe8ab2e6bfb41e0b3f549a04eafb23f14f7fe1d07704ecee09b697f6f60c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Access:AccessDenied.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd14124cb4246c6f89f36f5624b2ad7978fb8fb11c7d9d2f1a8e9a81a30945eb = $this->env->getExtension("native_profiler");
        $__internal_dd14124cb4246c6f89f36f5624b2ad7978fb8fb11c7d9d2f1a8e9a81a30945eb->enter($__internal_dd14124cb4246c6f89f36f5624b2ad7978fb8fb11c7d9d2f1a8e9a81a30945eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Access:AccessDenied.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd14124cb4246c6f89f36f5624b2ad7978fb8fb11c7d9d2f1a8e9a81a30945eb->leave($__internal_dd14124cb4246c6f89f36f5624b2ad7978fb8fb11c7d9d2f1a8e9a81a30945eb_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9b9a0b48d7685a4d040b8597de0e99e34ea9d0be065612659863d754de66ba7 = $this->env->getExtension("native_profiler");
        $__internal_e9b9a0b48d7685a4d040b8597de0e99e34ea9d0be065612659863d754de66ba7->enter($__internal_e9b9a0b48d7685a4d040b8597de0e99e34ea9d0be065612659863d754de66ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
        <div id=\"welcome\">
            <h1>Acces non authorise</h1>
            <p>Merci de bien vouloir vous connecter pour accéder a cette partie du site</p>
        </div>
    ";
        
        $__internal_e9b9a0b48d7685a4d040b8597de0e99e34ea9d0be065612659863d754de66ba7->leave($__internal_e9b9a0b48d7685a4d040b8597de0e99e34ea9d0be065612659863d754de66ba7_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Access:AccessDenied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 6,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* */
/* */
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Acces non authorise</h1>*/
/*             <p>Merci de bien vouloir vous connecter pour accéder a cette partie du site</p>*/
/*         </div>*/
/*     {% endblock %}*/
