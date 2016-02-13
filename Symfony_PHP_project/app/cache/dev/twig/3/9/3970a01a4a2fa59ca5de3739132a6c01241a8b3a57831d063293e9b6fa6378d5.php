<?php

/* IPBundle:Exercices:exoMask.html.twig */
class __TwigTemplate_280381bd97a9d535b342c21ba1344bc8a0726eb28864f6a5204f2f7311cec495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:exoMask.html.twig", 1);
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
        $__internal_2459ac1bf7e91054f606b8ef2140f66c0d95f95c793c217558c1e38d3f9596a7 = $this->env->getExtension("native_profiler");
        $__internal_2459ac1bf7e91054f606b8ef2140f66c0d95f95c793c217558c1e38d3f9596a7->enter($__internal_2459ac1bf7e91054f606b8ef2140f66c0d95f95c793c217558c1e38d3f9596a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoMask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2459ac1bf7e91054f606b8ef2140f66c0d95f95c793c217558c1e38d3f9596a7->leave($__internal_2459ac1bf7e91054f606b8ef2140f66c0d95f95c793c217558c1e38d3f9596a7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_11d59fda85f31726e60dbcb3f078ce6005cd03073494b78b2afeb8ac8fc9a6f8 = $this->env->getExtension("native_profiler");
        $__internal_11d59fda85f31726e60dbcb3f078ce6005cd03073494b78b2afeb8ac8fc9a6f8->enter($__internal_11d59fda85f31726e60dbcb3f078ce6005cd03073494b78b2afeb8ac8fc9a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t\t<div id=\"welcome\">
\t\t\t<h1>Faire des exercices</h1>
\t\t\t<p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
\t\t</div>

        ";
        // line 10
        $this->displayParentBlock("content", $context, $blocks);
        echo "

        <section>
            <article>
                <header>
                    <h1>Exercice : Class IP</h1>
                </header>

                <p>
                    Soit une adresse IP : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "<br>
                <p>
                    On veut un masque de sous réseau pour ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["nbSubNet"]) ? $context["nbSubNet"] : $this->getContext($context, "nbSubNet")), "html", null, true);
        echo " sous réseaux
                </p>
                <br>

                ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <p>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bytes", array()), 'label', array("label" => "Masque "));
        echo " :
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bytes", array()), 'widget');
        echo "
                </p>

                <p id=\"btns\">
                    <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                    ";
        // line 34
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 35
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </p>

                </p>




            </article>
        </section>

    ";
        
        $__internal_11d59fda85f31726e60dbcb3f078ce6005cd03073494b78b2afeb8ac8fc9a6f8->leave($__internal_11d59fda85f31726e60dbcb3f078ce6005cd03073494b78b2afeb8ac8fc9a6f8_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:exoMask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  93 => 34,  85 => 29,  81 => 28,  76 => 26,  72 => 25,  65 => 21,  60 => 19,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/* 		<div id="welcome">*/
/* 			<h1>Faire des exercices</h1>*/
/* 			<p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/* 		</div>*/
/* */
/*         {{ parent() }}*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <header>*/
/*                     <h1>Exercice : Class IP</h1>*/
/*                 </header>*/
/* */
/*                 <p>*/
/*                     Soit une adresse IP : {{ip.getBytes()}}<br>*/
/*                 <p>*/
/*                     On veut un masque de sous réseau pour {{ nbSubNet }} sous réseaux*/
/*                 </p>*/
/*                 <br>*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 <p>{{ form_label(form.bytes, 'Masque ') }} :*/
/*                     {{ form_widget(form.bytes) }}*/
/*                 </p>*/
/* */
/*                 <p id="btns">*/
/*                     <input type="submit" id="form_save" name="form[save]" value="Valider" />*/
/*                     {% do form.save.setRendered %}*/
/*                     {{ form_end(form) }}*/
/*                 </p>*/
/* */
/*                 </p>*/
/* */
/* */
/* */
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
