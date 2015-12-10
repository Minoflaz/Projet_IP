<?php

/* IPBundle:Default:exoMask.html.twig */
class __TwigTemplate_2faa1d4be897fb094d0e4b49fb1485110c9f9e829f6cfa857720ed511fa83284 extends Twig_Template
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
        $__internal_d3beb7a9dd34455f4f04e22f37496e0edf9f768c2404136f3ec9f3ae8af94ae5 = $this->env->getExtension("native_profiler");
        $__internal_d3beb7a9dd34455f4f04e22f37496e0edf9f768c2404136f3ec9f3ae8af94ae5->enter($__internal_d3beb7a9dd34455f4f04e22f37496e0edf9f768c2404136f3ec9f3ae8af94ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoMask.html.twig"));

        // line 1
        echo "<div>

\tDonnez le masque de sous réseau pour une adresse ip : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, (isset($context["nbSubNet"]) ? $context["nbSubNet"] : $this->getContext($context, "nbSubNet")), "html", null, true);
        echo " sous réseaux

\t</br>

</div>

<div>
\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>\t";
        
        $__internal_d3beb7a9dd34455f4f04e22f37496e0edf9f768c2404136f3ec9f3ae8af94ae5->leave($__internal_d3beb7a9dd34455f4f04e22f37496e0edf9f768c2404136f3ec9f3ae8af94ae5_prof);

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
        return array (  38 => 10,  26 => 3,  22 => 1,);
    }
}
/* <div>*/
/* */
/* 	Donnez le masque de sous réseau pour une adresse ip : {{ip.getBytes()}} avec {{nbSubNet}} sous réseaux*/
/* */
/* 	</br>*/
/* */
/* </div>*/
/* */
/* <div>*/
/* 	{{form(form)}}*/
/* </div>	*/
