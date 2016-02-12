<?php

/* IPBundle:Cours:LessonSubscriptionSuccess.html.twig */
class __TwigTemplate_c43ab51bdf277dd746ef92f85c90e4790dd5593c0732d74af1f0554bbd498313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Cours:LessonSubscriptionSuccess.html.twig", 1);
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
        $__internal_f4d1fb1a559f05aa71ae43f83b4e544520de8098ee187cef9834469f9055e40b = $this->env->getExtension("native_profiler");
        $__internal_f4d1fb1a559f05aa71ae43f83b4e544520de8098ee187cef9834469f9055e40b->enter($__internal_f4d1fb1a559f05aa71ae43f83b4e544520de8098ee187cef9834469f9055e40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:LessonSubscriptionSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d1fb1a559f05aa71ae43f83b4e544520de8098ee187cef9834469f9055e40b->leave($__internal_f4d1fb1a559f05aa71ae43f83b4e544520de8098ee187cef9834469f9055e40b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_720fbaba0bece9cf96974db8de7ccfe29c1dd7a8d36596959d3b57db4190a0a8 = $this->env->getExtension("native_profiler");
        $__internal_720fbaba0bece9cf96974db8de7ccfe29c1dd7a8d36596959d3b57db4190a0a8->enter($__internal_720fbaba0bece9cf96974db8de7ccfe29c1dd7a8d36596959d3b57db4190a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Enregistrer un nouveau cours</h1>
            <p>Cours enregistré avec succès</p>
        </div>

    ";
        
        $__internal_720fbaba0bece9cf96974db8de7ccfe29c1dd7a8d36596959d3b57db4190a0a8->leave($__internal_720fbaba0bece9cf96974db8de7ccfe29c1dd7a8d36596959d3b57db4190a0a8_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:LessonSubscriptionSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Enregistrer un nouveau cours</h1>*/
/*             <p>Cours enregistré avec succès</p>*/
/*         </div>*/
/* */
/*     {% endblock %}*/
