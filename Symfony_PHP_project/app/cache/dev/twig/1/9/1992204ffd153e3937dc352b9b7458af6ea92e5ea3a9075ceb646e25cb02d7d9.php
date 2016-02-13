<?php

/* IPBundle:Cours:AjoutCours.html.twig */
class __TwigTemplate_ba695e390edffb6e89f16a3b0f61031b1aac6174fbc4f9c340d609afb8126768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Cours:AjoutCours.html.twig", 1);
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
        $__internal_f2374297ea813b9dfe8ff71668364a7c51e7dfda452a25266132b4d76d6dcb4a = $this->env->getExtension("native_profiler");
        $__internal_f2374297ea813b9dfe8ff71668364a7c51e7dfda452a25266132b4d76d6dcb4a->enter($__internal_f2374297ea813b9dfe8ff71668364a7c51e7dfda452a25266132b4d76d6dcb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Cours:AjoutCours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2374297ea813b9dfe8ff71668364a7c51e7dfda452a25266132b4d76d6dcb4a->leave($__internal_f2374297ea813b9dfe8ff71668364a7c51e7dfda452a25266132b4d76d6dcb4a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_afbf63ce6280ab86ec9fb2365decab998fcc38cef57ba890f272fbb3bde99ed8 = $this->env->getExtension("native_profiler");
        $__internal_afbf63ce6280ab86ec9fb2365decab998fcc38cef57ba890f272fbb3bde99ed8->enter($__internal_afbf63ce6280ab86ec9fb2365decab998fcc38cef57ba890f272fbb3bde99ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1>Enregistrer un nouveau cours</h1>
            <p>Ici vous pouvez ajouter votre cours. Il sera enregistré et vous pourrez y ajouter des chapitres.</p>
        </div>



        <form id=\"AjoutCours\" method=\"post\">
            <aside id = \"chapter\">
                <h1> Reseau </h1>
                <ul>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 17
            echo "                        <li class=\"chapterName\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showCours", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </ul>
            </aside>

            <section>
                <article>
                    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <header>
                        <h1><label for=\"texte\">Nom du cours : </label></h1>
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                        <hr>
                        <p>
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'label', array("label" => "Submit lesson"));
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </p>
                    </header>




                </article>
            </section>
        </form>
    ";
        
        $__internal_afbf63ce6280ab86ec9fb2365decab998fcc38cef57ba890f272fbb3bde99ed8->leave($__internal_afbf63ce6280ab86ec9fb2365decab998fcc38cef57ba890f272fbb3bde99ed8_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Cours:AjoutCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  96 => 32,  92 => 31,  86 => 28,  80 => 25,  76 => 24,  69 => 19,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1>Enregistrer un nouveau cours</h1>*/
/*             <p>Ici vous pouvez ajouter votre cours. Il sera enregistré et vous pourrez y ajouter des chapitres.</p>*/
/*         </div>*/
/* */
/* */
/* */
/*         <form id="AjoutCours" method="post">*/
/*             <aside id = "chapter">*/
/*                 <h1> Reseau </h1>*/
/*                 <ul>*/
/*                     {% for cour in cours %}*/
/*                         <li class="chapterName"><a href="{{ path('showCours', {"id": cour.id}) }}">{{ cour.nom }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </aside>*/
/* */
/*             <section>*/
/*                 <article>*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/*                     <header>*/
/*                         <h1><label for="texte">Nom du cours : </label></h1>*/
/*                         {{ form_widget(form.nom) }}*/
/*                         <hr>*/
/*                         <p>*/
/*                             {{ form_label(form.save, 'Submit lesson') }}*/
/*                             {{ form_widget(form.save) }}*/
/*                             {{ form_end(form) }}*/
/*                         </p>*/
/*                     </header>*/
/* */
/* */
/* */
/* */
/*                 </article>*/
/*             </section>*/
/*         </form>*/
/*     {% endblock %}*/
/* */
