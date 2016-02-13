<?php

/* IPBundle:Exercices:convert.html.twig */
class __TwigTemplate_ab526283c10416fd4b291cb206d6937f69a0d791894a6407067438dbc084ceaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:convert.html.twig", 1);
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
        $__internal_199c0a3d7d0791cb58e57f58bc5f0129ec3e58a584ce1e2730145bcc07fdac57 = $this->env->getExtension("native_profiler");
        $__internal_199c0a3d7d0791cb58e57f58bc5f0129ec3e58a584ce1e2730145bcc07fdac57->enter($__internal_199c0a3d7d0791cb58e57f58bc5f0129ec3e58a584ce1e2730145bcc07fdac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:convert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199c0a3d7d0791cb58e57f58bc5f0129ec3e58a584ce1e2730145bcc07fdac57->leave($__internal_199c0a3d7d0791cb58e57f58bc5f0129ec3e58a584ce1e2730145bcc07fdac57_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e002edd6101fdd76ab626b22f8bcc74ba60b78b756bbbf52dc9bca73214c704 = $this->env->getExtension("native_profiler");
        $__internal_1e002edd6101fdd76ab626b22f8bcc74ba60b78b756bbbf52dc9bca73214c704->enter($__internal_1e002edd6101fdd76ab626b22f8bcc74ba60b78b756bbbf52dc9bca73214c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
        </div>

        <aside id = \"chapter\">
            <h1>Exercices</h1>
            <ul>

                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Exo classe</a></li>

                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Exo masque</a></li>

                <li><a href=\"#\">Exo table de routage</a></li>

                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Exo conversion</a></li>

            </ul>
        </aside>

        <section>
            <article>
                <br>
                <p>Convertir l'adresse IP : ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo " en decimal</p>

                ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <p>IP : ";
        // line 33
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
        // line 37
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 38
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </p>
            </article>
        </section>

    ";
        
        $__internal_1e002edd6101fdd76ab626b22f8bcc74ba60b78b756bbbf52dc9bca73214c704->leave($__internal_1e002edd6101fdd76ab626b22f8bcc74ba60b78b756bbbf52dc9bca73214c704_prof);

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
        return array (  104 => 38,  102 => 37,  89 => 33,  84 => 31,  80 => 30,  75 => 28,  64 => 20,  57 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Faire des exercices</h1>*/
/*             <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>*/
/*         </div>*/
/* */
/*         <aside id = "chapter">*/
/*             <h1>Exercices</h1>*/
/*             <ul>*/
/* */
/*                 <li><a href="{{ path('exoClass')}}">Exo classe</a></li>*/
/* */
/*                 <li><a href="{{ path('exoMask')}}">Exo masque</a></li>*/
/* */
/*                 <li><a href="#">Exo table de routage</a></li>*/
/* */
/*                 <li><a href="{{ path('convert') }}">Exo conversion</a></li>*/
/* */
/*             </ul>*/
/*         </aside>*/
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
