<?php

/* IPBundle:Default:exoMask.html.twig */
class __TwigTemplate_af6da7fb28684b2b5ad485a8238954c5ab4d6dfbd9e1d46bc184d14921d233bc extends Twig_Template
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
        $__internal_ddb16bbbdf8d6873297252cad142051edbf9b494d4ff8a5e84e08dd985da23ed = $this->env->getExtension("native_profiler");
        $__internal_ddb16bbbdf8d6873297252cad142051edbf9b494d4ff8a5e84e08dd985da23ed->enter($__internal_ddb16bbbdf8d6873297252cad142051edbf9b494d4ff8a5e84e08dd985da23ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:exoMask.html.twig"));

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
        
        $__internal_ddb16bbbdf8d6873297252cad142051edbf9b494d4ff8a5e84e08dd985da23ed->leave($__internal_ddb16bbbdf8d6873297252cad142051edbf9b494d4ff8a5e84e08dd985da23ed_prof);

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
