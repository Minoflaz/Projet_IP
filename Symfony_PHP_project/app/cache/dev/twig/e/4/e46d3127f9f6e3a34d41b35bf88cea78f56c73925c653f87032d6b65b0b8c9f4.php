<?php

/* IPBundle:Exercices:exercises.html.twig */
class __TwigTemplate_528e119d5da09da80462864a1f9f0afc31e1d984374b5a54ab351bc4b884c1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IPBundle:Exercices:exercises.html.twig", 1);
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
        $__internal_4e48e820749754fece7da2240f4866171e4831743070e878dee39343c91de04c = $this->env->getExtension("native_profiler");
        $__internal_4e48e820749754fece7da2240f4866171e4831743070e878dee39343c91de04c->enter($__internal_4e48e820749754fece7da2240f4866171e4831743070e878dee39343c91de04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:exercises.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e48e820749754fece7da2240f4866171e4831743070e878dee39343c91de04c->leave($__internal_4e48e820749754fece7da2240f4866171e4831743070e878dee39343c91de04c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_46b5fe437a90ff7489cbf141c1e7852cb0f80e0c8399ed9b0a62922fbed3cabd = $this->env->getExtension("native_profiler");
        $__internal_46b5fe437a90ff7489cbf141c1e7852cb0f80e0c8399ed9b0a62922fbed3cabd->enter($__internal_46b5fe437a90ff7489cbf141c1e7852cb0f80e0c8399ed9b0a62922fbed3cabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

    ";
        
        $__internal_46b5fe437a90ff7489cbf141c1e7852cb0f80e0c8399ed9b0a62922fbed3cabd->leave($__internal_46b5fe437a90ff7489cbf141c1e7852cb0f80e0c8399ed9b0a62922fbed3cabd_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:exercises.html.twig";
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
/*     {% endblock %}*/
