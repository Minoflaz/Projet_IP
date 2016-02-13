<?php

/* IPBundle:Exercices:exoClass.html.twig */
class __TwigTemplate_32de1e95ac70db3349d7f7752eb46edf68961c66a5bd9624d1af0373b1d7b5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:exoClass.html.twig", 1);
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
        $__internal_1ec39fae90df17e75ceeca6f0ab797e28be7bbc9710c0cf56093c1eb2c1837bd = $this->env->getExtension("native_profiler");
        $__internal_1ec39fae90df17e75ceeca6f0ab797e28be7bbc9710c0cf56093c1eb2c1837bd->enter($__internal_1ec39fae90df17e75ceeca6f0ab797e28be7bbc9710c0cf56093c1eb2c1837bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoClass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec39fae90df17e75ceeca6f0ab797e28be7bbc9710c0cf56093c1eb2c1837bd->leave($__internal_1ec39fae90df17e75ceeca6f0ab797e28be7bbc9710c0cf56093c1eb2c1837bd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_24eab6cff256cfb79e88a18fcce9609dbc421aae93f82a2a131fa72cf949512d = $this->env->getExtension("native_profiler");
        $__internal_24eab6cff256cfb79e88a18fcce9609dbc421aae93f82a2a131fa72cf949512d->enter($__internal_24eab6cff256cfb79e88a18fcce9609dbc421aae93f82a2a131fa72cf949512d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <header>
                        <h1>Exercice : Class IP</h1>
                    </header>

                    <p>
                        Soit une adresse IP : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "<br>
                        <p>
                        Donnez la classe de cette adresse IP
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "class", array()), 'label');
        echo " :
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "class", array()), 'widget');
        echo "</p>

                        <p id=\"btns\">
                            <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                            ";
        // line 33
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 34
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </p>

                    </p>




            </article>
        </section>

    ";
        
        $__internal_24eab6cff256cfb79e88a18fcce9609dbc421aae93f82a2a131fa72cf949512d->leave($__internal_24eab6cff256cfb79e88a18fcce9609dbc421aae93f82a2a131fa72cf949512d_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:exoClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  89 => 33,  82 => 29,  78 => 28,  73 => 26,  69 => 25,  60 => 19,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <header>*/
/*                         <h1>Exercice : Class IP</h1>*/
/*                     </header>*/
/* */
/*                     <p>*/
/*                         Soit une adresse IP : {{ip.getBytes()}}<br>*/
/*                         <p>*/
/*                         Donnez la classe de cette adresse IP*/
/*                         </p>*/
/*                         <br>*/
/* */
/*                         {{ form_start(form) }}*/
/*                         {{ form_errors(form) }}*/
/* */
/*                         <p>{{ form_label(form.class) }} :*/
/*                         {{ form_widget(form.class) }}</p>*/
/* */
/*                         <p id="btns">*/
/*                             <input type="submit" id="form_save" name="form[save]" value="Valider" />*/
/*                             {% do form.save.setRendered %}*/
/*                             {{ form_end(form) }}*/
/*                         </p>*/
/* */
/*                     </p>*/
/* */
/* */
/* */
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
