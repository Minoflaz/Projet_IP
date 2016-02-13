<?php

/* IPBundle:Exercices:exoMask.html.twig */
class __TwigTemplate_79def68019f37c1bf8cb8e10e160ea3758ae790504f00ee4ed6a271170830652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:exoMask.html.twig", 1);
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
        $__internal_fc450e0419ede604af60b40c9df84107d6dddfafe94be51614e975c0dba09d97 = $this->env->getExtension("native_profiler");
        $__internal_fc450e0419ede604af60b40c9df84107d6dddfafe94be51614e975c0dba09d97->enter($__internal_fc450e0419ede604af60b40c9df84107d6dddfafe94be51614e975c0dba09d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoMask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc450e0419ede604af60b40c9df84107d6dddfafe94be51614e975c0dba09d97->leave($__internal_fc450e0419ede604af60b40c9df84107d6dddfafe94be51614e975c0dba09d97_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_473a33bfc033c79533cb239be98f0b58203ce115a2c44844aa06ae6dc7cf3164 = $this->env->getExtension("native_profiler");
        $__internal_473a33bfc033c79533cb239be98f0b58203ce115a2c44844aa06ae6dc7cf3164->enter($__internal_473a33bfc033c79533cb239be98f0b58203ce115a2c44844aa06ae6dc7cf3164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t\t<div id=\"welcome\">
\t\t\t<h1>Faire des exercices</h1>
\t\t\t<p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
\t\t</div>

\t\t<aside id = \"chapter\">
\t\t\t<h1>Exercices</h1>
\t\t\t<ul>

\t\t\t\t<li><a href=\"exoClass\">Exo classe</a></li>

\t\t\t\t<li><a href=\"exoMask\">Exo masque</a></li>

\t\t\t\t<li><a href=\"#\">Exo table de routage</a></li>

\t\t\t</ul>
\t\t</aside>

            <section>
                <article>
                    <header>
                        <h1>Exercice : Class IP</h1>
                    </header>

                    <p>
                        Soit une adresse IP : ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "<br>
                    <p>
                        On veut un masque de sous réseau pour ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["nbSubNet"]) ? $context["nbSubNet"] : $this->getContext($context, "nbSubNet")), "html", null, true);
        echo " sous réseaux
                    </p>
                    <br>

                    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <p>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bytes", array()), 'label', array("label" => "Masque "));
        echo " :
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bytes", array()), 'widget');
        echo "</p>

                    <p id=\"btns\">
                        <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                        ";
        // line 47
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 48
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </p>

                    </p>




                </article>
            </section>

    ";
        
        $__internal_473a33bfc033c79533cb239be98f0b58203ce115a2c44844aa06ae6dc7cf3164->leave($__internal_473a33bfc033c79533cb239be98f0b58203ce115a2c44844aa06ae6dc7cf3164_prof);

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
        return array (  102 => 48,  100 => 47,  93 => 43,  89 => 42,  84 => 40,  80 => 39,  73 => 35,  68 => 33,  40 => 7,  34 => 6,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* */
/* */
/* */
/*     {% block content %}*/
/* */
/* 		<div id="welcome">*/
/* 			<h1>Faire des exercices</h1>*/
/* 			<p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/* 		</div>*/
/* */
/* 		<aside id = "chapter">*/
/* 			<h1>Exercices</h1>*/
/* 			<ul>*/
/* */
/* 				<li><a href="exoClass">Exo classe</a></li>*/
/* */
/* 				<li><a href="exoMask">Exo masque</a></li>*/
/* */
/* 				<li><a href="#">Exo table de routage</a></li>*/
/* */
/* 			</ul>*/
/* 		</aside>*/
/* */
/*             <section>*/
/*                 <article>*/
/*                     <header>*/
/*                         <h1>Exercice : Class IP</h1>*/
/*                     </header>*/
/* */
/*                     <p>*/
/*                         Soit une adresse IP : {{ip.getBytes()}}<br>*/
/*                     <p>*/
/*                         On veut un masque de sous réseau pour {{ nbSubNet }} sous réseaux*/
/*                     </p>*/
/*                     <br>*/
/* */
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/*                     <p>{{ form_label(form.bytes, 'Masque ') }} :*/
/*                         {{ form_widget(form.bytes) }}</p>*/
/* */
/*                     <p id="btns">*/
/*                         <input type="submit" id="form_save" name="form[save]" value="Valider" />*/
/*                         {% do form.save.setRendered %}*/
/*                         {{ form_end(form) }}*/
/*                     </p>*/
/* */
/*                     </p>*/
/* */
/* */
/* */
/* */
/*                 </article>*/
/*             </section>*/
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
