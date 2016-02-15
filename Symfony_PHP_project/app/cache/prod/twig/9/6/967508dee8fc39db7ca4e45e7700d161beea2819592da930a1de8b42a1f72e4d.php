<?php

/* IPBundle:Exercices:exoMask.html.twig */
class __TwigTemplate_1513bceac5a02c197b5b7f3566229f7bac0b6307a3858ef2ea835d915030cccf extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : null), "getBytes", array(), "method"), "html", null, true);
        echo "<br>
                <p>
                    On veut un masque de sous réseau pour ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["nbSubNet"]) ? $context["nbSubNet"] : null), "html", null, true);
        echo " sous réseaux
                </p>
                <br>

                ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                <p>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bytes", array()), 'label', array("label" => "Masque "));
        echo " :
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bytes", array()), 'widget');
        echo "
                </p>

                <p id=\"btns\">
                    <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                    ";
        // line 34
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), "setRendered", array());
        // line 35
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </p>

                </p>




            </article>
        </section>

    ";
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
        return array (  86 => 35,  84 => 34,  76 => 29,  72 => 28,  67 => 26,  63 => 25,  56 => 21,  51 => 19,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
