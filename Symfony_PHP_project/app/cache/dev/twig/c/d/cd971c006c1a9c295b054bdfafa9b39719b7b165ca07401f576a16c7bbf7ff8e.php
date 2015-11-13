<?php

/* IPBundle:Default:exoMask.html.twig */
class __TwigTemplate_92fdfae19b94de5c9dc9d356b255bb4daf35e72af0d9bd0e4aafe2e1b3579113 extends Twig_Template
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
        $__internal_b5c22cc228e74134dfb819505783f3b67f3cc25c49682bc3acba787a4ca0f463 = $this->env->getExtension("native_profiler");
        $__internal_b5c22cc228e74134dfb819505783f3b67f3cc25c49682bc3acba787a4ca0f463->enter($__internal_b5c22cc228e74134dfb819505783f3b67f3cc25c49682bc3acba787a4ca0f463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoMask.html.twig"));

        // line 1
        echo "<div>

\tDonnez le masque de sous réseau pour une adresse ip : 192.168.1.1 avec 20 sous réseaux

\t</br>

</div>

<div>
\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>\t";
        
        $__internal_b5c22cc228e74134dfb819505783f3b67f3cc25c49682bc3acba787a4ca0f463->leave($__internal_b5c22cc228e74134dfb819505783f3b67f3cc25c49682bc3acba787a4ca0f463_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:exoMask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  22 => 1,);
    }
}
/* <div>*/
/* */
/* 	Donnez le masque de sous réseau pour une adresse ip : 192.168.1.1 avec 20 sous réseaux*/
/* */
/* 	</br>*/
/* */
/* </div>*/
/* */
/* <div>*/
/* 	{{form(form)}}*/
/* </div>	*/
