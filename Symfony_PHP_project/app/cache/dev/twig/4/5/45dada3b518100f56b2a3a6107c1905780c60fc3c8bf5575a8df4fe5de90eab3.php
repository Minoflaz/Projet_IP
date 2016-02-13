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
        $__internal_9c7d796b5126a73d63a37467f7a9e6ab769606e9a852debf04a6fe210bddbe3b = $this->env->getExtension("native_profiler");
        $__internal_9c7d796b5126a73d63a37467f7a9e6ab769606e9a852debf04a6fe210bddbe3b->enter($__internal_9c7d796b5126a73d63a37467f7a9e6ab769606e9a852debf04a6fe210bddbe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoClass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c7d796b5126a73d63a37467f7a9e6ab769606e9a852debf04a6fe210bddbe3b->leave($__internal_9c7d796b5126a73d63a37467f7a9e6ab769606e9a852debf04a6fe210bddbe3b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_33c631c8442815586ccdb7dc9a84c66c93157e47b2e970b8ab2d80f0ac59183c = $this->env->getExtension("native_profiler");
        $__internal_33c631c8442815586ccdb7dc9a84c66c93157e47b2e970b8ab2d80f0ac59183c->enter($__internal_33c631c8442815586ccdb7dc9a84c66c93157e47b2e970b8ab2d80f0ac59183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Faire des exercices</h1>
            <p>Ici vous pouvez faire des exercices sur nimporte quel chapitre.</p>
        </div>

        <aside id = \"chapter\">
            <h1>Exercices</h1>
            <ul>

                <li><a href=\"exoClass\">Exo classe</a></li>

                <li><a href=\"exoMask\">Exo masque</a></li>

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
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "getBytes", array(), "method"), "html", null, true);
        echo "<br>
                        <p>
                        Donnez la classe de cette adresse IP
                        </p>
                        <br>

                        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                        <p>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "class", array()), 'label');
        echo " :
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "class", array()), 'widget');
        echo "</p>

                        <p id=\"btns\">
                            <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                            ";
        // line 44
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 45
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </p>

                    </p>




            </article>
        </section>


    ";
        
        $__internal_33c631c8442815586ccdb7dc9a84c66c93157e47b2e970b8ab2d80f0ac59183c->leave($__internal_33c631c8442815586ccdb7dc9a84c66c93157e47b2e970b8ab2d80f0ac59183c_prof);

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
        return array (  99 => 45,  97 => 44,  90 => 40,  86 => 39,  81 => 37,  77 => 36,  68 => 30,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <li><a href="exoClass">Exo classe</a></li>*/
/* */
/*                 <li><a href="exoMask">Exo masque</a></li>*/
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
