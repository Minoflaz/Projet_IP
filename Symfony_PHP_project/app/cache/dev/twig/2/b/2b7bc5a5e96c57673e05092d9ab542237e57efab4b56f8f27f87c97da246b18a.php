<?php

/* IPBundle:Exercices:classFailed.html.twig */
class __TwigTemplate_334c7c59a78d2441eac41b86fcd70cefd3b66136ffddaade6757fae506e4536d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:classFailed.html.twig", 1);
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
        $__internal_4acde212dc0210e3c519c85e15f382ac169a50dcb6fd0e15480896341f05bf52 = $this->env->getExtension("native_profiler");
        $__internal_4acde212dc0210e3c519c85e15f382ac169a50dcb6fd0e15480896341f05bf52->enter($__internal_4acde212dc0210e3c519c85e15f382ac169a50dcb6fd0e15480896341f05bf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:classFailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4acde212dc0210e3c519c85e15f382ac169a50dcb6fd0e15480896341f05bf52->leave($__internal_4acde212dc0210e3c519c85e15f382ac169a50dcb6fd0e15480896341f05bf52_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_aefe93dcfca30827415bd973fea03e733f05833d5014a438c6c294356d2368da = $this->env->getExtension("native_profiler");
        $__internal_aefe93dcfca30827415bd973fea03e733f05833d5014a438c6c294356d2368da->enter($__internal_aefe93dcfca30827415bd973fea03e733f05833d5014a438c6c294356d2368da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\">
            <h1></h1>
            <p></p>
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

                Ce n'est pas la bonne classe ! :o
                <br>

                <p><a href=\"exoClass\">Réessayer l'éxercice</a></p>

            </article>
        </section>

    ";
        
        $__internal_aefe93dcfca30827415bd973fea03e733f05833d5014a438c6c294356d2368da->leave($__internal_aefe93dcfca30827415bd973fea03e733f05833d5014a438c6c294356d2368da_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:classFailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome">*/
/*             <h1></h1>*/
/*             <p></p>*/
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
/* */
/*                 Ce n'est pas la bonne classe ! :o*/
/*                 <br>*/
/* */
/*                 <p><a href="exoClass">Réessayer l'éxercice</a></p>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/*     {% endblock %}*/
/* */
