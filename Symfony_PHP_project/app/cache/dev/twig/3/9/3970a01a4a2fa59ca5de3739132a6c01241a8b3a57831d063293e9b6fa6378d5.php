<?php

/* IPBundle:Exercices:exoMask.html.twig */
class __TwigTemplate_280381bd97a9d535b342c21ba1344bc8a0726eb28864f6a5204f2f7311cec495 extends Twig_Template
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
        $__internal_fb8932e235f53fe92feee697ac8668168a2b343b6e071e09e2ce5250bfbb8d7f = $this->env->getExtension("native_profiler");
        $__internal_fb8932e235f53fe92feee697ac8668168a2b343b6e071e09e2ce5250bfbb8d7f->enter($__internal_fb8932e235f53fe92feee697ac8668168a2b343b6e071e09e2ce5250bfbb8d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoMask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8932e235f53fe92feee697ac8668168a2b343b6e071e09e2ce5250bfbb8d7f->leave($__internal_fb8932e235f53fe92feee697ac8668168a2b343b6e071e09e2ce5250bfbb8d7f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0b3a0ba339c5fa71aba08bf7f3c048ad0cd2ee44f2c6690f26de144277f8c48 = $this->env->getExtension("native_profiler");
        $__internal_e0b3a0ba339c5fa71aba08bf7f3c048ad0cd2ee44f2c6690f26de144277f8c48->enter($__internal_e0b3a0ba339c5fa71aba08bf7f3c048ad0cd2ee44f2c6690f26de144277f8c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t\t<div id=\"welcome\">
\t\t\t<h1>Faire des exercices</h1>
\t\t\t<p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
\t\t</div>

\t\t<aside id = \"chapter\">
\t\t\t<h1>Exercices</h1>
\t\t\t<ul>

                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Exo conversion</a></li>

                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Exo classe</a></li>

                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Exo masque</a></li>

                <li><a href=\"#\">Exo table de routage</a></li>

\t\t\t</ul>
\t\t</aside>

            <section>
                <article>
                    <header>
                        <h1>Exercice : Class IP</h1>
                    </header>

                    <p>
                        Soit une adresse IP : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "<br>
                    <p>
                        On veut un masque de sous réseau pour ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["nbSubNet"]) ? $context["nbSubNet"] : $this->getContext($context, "nbSubNet")), "html", null, true);
        echo " sous réseaux
                    </p>
                    <br>

                    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <p>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bytes", array()), 'label', array("label" => "Masque "));
        echo " :
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bytes", array()), 'widget');
        echo "</p>

                    <p id=\"btns\">
                        <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                        ";
        // line 49
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 50
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </p>

                    </p>




                </article>
            </section>

    ";
        
        $__internal_e0b3a0ba339c5fa71aba08bf7f3c048ad0cd2ee44f2c6690f26de144277f8c48->leave($__internal_e0b3a0ba339c5fa71aba08bf7f3c048ad0cd2ee44f2c6690f26de144277f8c48_prof);

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
        return array (  113 => 50,  111 => 49,  104 => 45,  100 => 44,  95 => 42,  91 => 41,  84 => 37,  79 => 35,  62 => 21,  57 => 19,  52 => 17,  40 => 7,  34 => 6,  11 => 1,);
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
/*                 <li><a href="{{ path('convert') }}">Exo conversion</a></li>*/
/* */
/*                 <li><a href="{{ path('exoClass')}}">Exo classe</a></li>*/
/* */
/*                 <li><a href="{{ path('exoMask')}}">Exo masque</a></li>*/
/* */
/*                 <li><a href="#">Exo table de routage</a></li>*/
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
