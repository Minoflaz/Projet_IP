<?php

/* IPBundle:Exercices:exoClass.html.twig */
class __TwigTemplate_32de1e95ac70db3349d7f7752eb46edf68961c66a5bd9624d1af0373b1d7b5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:exoClass.html.twig", 1);
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
        $__internal_00627678cab00d83c8078592a734f7f81be4651fb56851194f501518e39db37b = $this->env->getExtension("native_profiler");
        $__internal_00627678cab00d83c8078592a734f7f81be4651fb56851194f501518e39db37b->enter($__internal_00627678cab00d83c8078592a734f7f81be4651fb56851194f501518e39db37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoClass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00627678cab00d83c8078592a734f7f81be4651fb56851194f501518e39db37b->leave($__internal_00627678cab00d83c8078592a734f7f81be4651fb56851194f501518e39db37b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8157ad68a75889efb7525d3abf6eca482ec497ac6b45d41141af2f31896575c7 = $this->env->getExtension("native_profiler");
        $__internal_8157ad68a75889efb7525d3abf6eca482ec497ac6b45d41141af2f31896575c7->enter($__internal_8157ad68a75889efb7525d3abf6eca482ec497ac6b45d41141af2f31896575c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('routing')->getPath("convert");
        echo "\">Exo conversion</a></li>

                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("exoClass");
        echo "\">Exo classe</a></li>

                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("exoMask");
        echo "\">Exo masque</a></li>

                <li><a href=\"#\">Exo table de routage</a></li>

            </ul>
        </aside>

        <section>
            <article>
                    <header>
                        <h1>Exercice : Class IP</h1>
                    </header>

                    <p>
                        Soit une adresse IP : ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "<br>
                        <p>
                        Donnez la classe de cette adresse IP
                        </p>
                        <br>

                        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                        <p>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "class", array()), 'label');
        echo " :
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "class", array()), 'widget');
        echo "</p>

                        <p id=\"btns\">
                            <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                            ";
        // line 46
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 47
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </p>

                    </p>




            </article>
        </section>


    ";
        
        $__internal_8157ad68a75889efb7525d3abf6eca482ec497ac6b45d41141af2f31896575c7->leave($__internal_8157ad68a75889efb7525d3abf6eca482ec497ac6b45d41141af2f31896575c7_prof);

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
        return array (  110 => 47,  108 => 46,  101 => 42,  97 => 41,  92 => 39,  88 => 38,  79 => 32,  62 => 18,  57 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <li><a href="{{ path('convert') }}">Exo conversion</a></li>*/
/* */
/*                 <li><a href="{{ path('exoClass')}}">Exo classe</a></li>*/
/* */
/*                 <li><a href="{{ path('exoMask')}}">Exo masque</a></li>*/
/* */
/*                 <li><a href="#">Exo table de routage</a></li>*/
/* */
/*             </ul>*/
/*         </aside>*/
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
/* */
/*     {% endblock %}*/
/* */
