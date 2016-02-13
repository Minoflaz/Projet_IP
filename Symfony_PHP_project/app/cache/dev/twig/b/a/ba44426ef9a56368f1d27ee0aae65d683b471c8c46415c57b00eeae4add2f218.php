<?php

/* IPBundle:Exercices:convert.html.twig */
class __TwigTemplate_ab526283c10416fd4b291cb206d6937f69a0d791894a6407067438dbc084ceaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:convert.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "exo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3787f309abfa918ae520c894a5504a8ad1aaff14f5f134d015117a1a7eeaf4f6 = $this->env->getExtension("native_profiler");
        $__internal_3787f309abfa918ae520c894a5504a8ad1aaff14f5f134d015117a1a7eeaf4f6->enter($__internal_3787f309abfa918ae520c894a5504a8ad1aaff14f5f134d015117a1a7eeaf4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:convert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3787f309abfa918ae520c894a5504a8ad1aaff14f5f134d015117a1a7eeaf4f6->leave($__internal_3787f309abfa918ae520c894a5504a8ad1aaff14f5f134d015117a1a7eeaf4f6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1f29320eb60596659df8af9db702a2cfe557ad98a525d89fe704a39aef98aa8 = $this->env->getExtension("native_profiler");
        $__internal_e1f29320eb60596659df8af9db702a2cfe557ad98a525d89fe704a39aef98aa8->enter($__internal_e1f29320eb60596659df8af9db702a2cfe557ad98a525d89fe704a39aef98aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
        </div>

        ";
        // line 10
        $this->displayParentBlock("content", $context, $blocks);
        echo "

        <section>
            <article>
                <br>
                <p>Convertir l'adresse IP : ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo " en decimal</p>

                ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <p>IP : ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "string1", array()), 'widget');
        echo ".";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "string2", array()), 'widget');
        echo ".";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "string3", array()), 'widget');
        echo ".";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "string4", array()), 'widget');
        echo "</p>

                <p id=\"btns\">
                    <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                    ";
        // line 24
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 25
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </p>
            </article>
        </section>

    ";
        
        $__internal_e1f29320eb60596659df8af9db702a2cfe557ad98a525d89fe704a39aef98aa8->leave($__internal_e1f29320eb60596659df8af9db702a2cfe557ad98a525d89fe704a39aef98aa8_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:convert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  83 => 24,  70 => 20,  65 => 18,  61 => 17,  56 => 15,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Faire des exercices</h1>*/
/*             <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/*         </div>*/
/* */
/*         {{ parent() }}*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <br>*/
/*                 <p>Convertir l'adresse IP : {{ ip }} en decimal</p>*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 <p>IP : {{ form_widget(form.string1) }}.{{ form_widget(form.string2) }}.{{ form_widget(form.string3) }}.{{ form_widget(form.string4) }}</p>*/
/* */
/*                 <p id="btns">*/
/*                     <input type="submit" id="form_save" name="form[save]" value="Valider" />*/
/*                     {% do form.save.setRendered %}*/
/*                     {{ form_end(form) }}*/
/*                 </p>*/
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
