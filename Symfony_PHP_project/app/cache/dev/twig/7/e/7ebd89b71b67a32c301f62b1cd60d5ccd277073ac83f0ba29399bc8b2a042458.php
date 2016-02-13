<?php

/* IPBundle:Exercices:exoClass.html.twig */
class __TwigTemplate_b4f8ce44fbb6f0ea23b9d46f02c513934953d67eeeecd8f9d6365a9306b7866c extends Twig_Template
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
        $__internal_4e97df2f622b6eab35ff56fd63d4ab645ad1af1772ca275afc30600d881c75a3 = $this->env->getExtension("native_profiler");
        $__internal_4e97df2f622b6eab35ff56fd63d4ab645ad1af1772ca275afc30600d881c75a3->enter($__internal_4e97df2f622b6eab35ff56fd63d4ab645ad1af1772ca275afc30600d881c75a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exoClass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e97df2f622b6eab35ff56fd63d4ab645ad1af1772ca275afc30600d881c75a3->leave($__internal_4e97df2f622b6eab35ff56fd63d4ab645ad1af1772ca275afc30600d881c75a3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b7fe5d11f5a602522082e738956d818fc4763d02da9a3763d2198498f008de0 = $this->env->getExtension("native_profiler");
        $__internal_4b7fe5d11f5a602522082e738956d818fc4763d02da9a3763d2198498f008de0->enter($__internal_4b7fe5d11f5a602522082e738956d818fc4763d02da9a3763d2198498f008de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4b7fe5d11f5a602522082e738956d818fc4763d02da9a3763d2198498f008de0->leave($__internal_4b7fe5d11f5a602522082e738956d818fc4763d02da9a3763d2198498f008de0_prof);

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
