<?php

/* IPBundle:Exercices:convert.html.twig */
class __TwigTemplate_bbf3a5e6470825fb98d3d613674800a13c869ad1cb98842c0523bd95261c8d82 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : null), "html", null, true);
        echo " en decimal</p>

                ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                <p>IP : ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "string1", array()), 'widget');
        echo ".";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "string2", array()), 'widget');
        echo ".";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "string3", array()), 'widget');
        echo ".";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "string4", array()), 'widget');
        echo "</p>

                <p id=\"btns\">
                    <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                    ";
        // line 24
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), "setRendered", array());
        // line 25
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </p>
            </article>
        </section>

    ";
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
        return array (  76 => 25,  74 => 24,  61 => 20,  56 => 18,  52 => 17,  47 => 15,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
