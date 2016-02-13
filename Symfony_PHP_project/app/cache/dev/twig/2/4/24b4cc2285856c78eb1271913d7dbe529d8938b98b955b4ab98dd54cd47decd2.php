<?php

/* IPBundle:Exercices:testRoutingTable.html.twig */
class __TwigTemplate_68de29aa15a6d59797421c199537569a63069f495ce05aeba12a40b96e7df155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("exo.html.twig", "IPBundle:Exercices:testRoutingTable.html.twig", 1);
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
        $__internal_ddb638047d90c0238520a9059d05cb63d3b156e7e93cb5ad95d92ea09b0bcba3 = $this->env->getExtension("native_profiler");
        $__internal_ddb638047d90c0238520a9059d05cb63d3b156e7e93cb5ad95d92ea09b0bcba3->enter($__internal_ddb638047d90c0238520a9059d05cb63d3b156e7e93cb5ad95d92ea09b0bcba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Exercices:testRoutingTable.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb638047d90c0238520a9059d05cb63d3b156e7e93cb5ad95d92ea09b0bcba3->leave($__internal_ddb638047d90c0238520a9059d05cb63d3b156e7e93cb5ad95d92ea09b0bcba3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e9d661240c66339354b193530439cbcbc68c738ac499694b4729d0aed861a13 = $this->env->getExtension("native_profiler");
        $__internal_4e9d661240c66339354b193530439cbcbc68c738ac499694b4729d0aed861a13->enter($__internal_4e9d661240c66339354b193530439cbcbc68c738ac499694b4729d0aed861a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <div id=\"welcome\" >
            <h1>Remplir cette table de routage.</h1>
            <p></p>
        </div>

        ";
        // line 10
        $this->displayParentBlock("content", $context, $blocks);
        echo "

        <section>
            <article>
                <form id=\"routage\" method=\"post\">

                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <table>
                        <thead>
                        <tr>
                            <th id=\"destination\">
                                <label for=\"destination\">Destination</label>
                            </th>
                            <th id=\"gateway\">
                                <label for=\"gateway\">Gateway</label>
                            </th>
                            <th id=\"netmask\">
                                <label for=\"netmask\">Netmask</label>
                            </th>
                            <th id=\"flags\">
                                <label for=\"flags\">Flags</label>
                            </th>
                            <th id=\"interface\">
                                <label for=\"interface\">Interface</label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ip", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gateway", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mask", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "flag", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interface", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <p id=\"btns\">
                        <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                        ";
        // line 62
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 63
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </p>

                </form>

            </article>
        </section>


    ";
        
        $__internal_4e9d661240c66339354b193530439cbcbc68c738ac499694b4729d0aed861a13->leave($__internal_4e9d661240c66339354b193530439cbcbc68c738ac499694b4729d0aed861a13_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Exercices:testRoutingTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 63,  124 => 62,  113 => 54,  107 => 51,  101 => 48,  95 => 45,  89 => 42,  61 => 17,  57 => 16,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "exo.html.twig" %}*/
/* */
/*     {% block content %}*/
/* */
/*         <div id="welcome" >*/
/*             <h1>Remplir cette table de routage.</h1>*/
/*             <p></p>*/
/*         </div>*/
/* */
/*         {{ parent() }}*/
/* */
/*         <section>*/
/*             <article>*/
/*                 <form id="routage" method="post">*/
/* */
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/*                     <table>*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th id="destination">*/
/*                                 <label for="destination">Destination</label>*/
/*                             </th>*/
/*                             <th id="gateway">*/
/*                                 <label for="gateway">Gateway</label>*/
/*                             </th>*/
/*                             <th id="netmask">*/
/*                                 <label for="netmask">Netmask</label>*/
/*                             </th>*/
/*                             <th id="flags">*/
/*                                 <label for="flags">Flags</label>*/
/*                             </th>*/
/*                             <th id="interface">*/
/*                                 <label for="interface">Interface</label>*/
/*                             </th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ form_widget(form.ip) }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ form_widget(form.gateway) }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ form_widget(form.mask) }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ form_widget(form.flag) }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ form_widget(form.interface) }}*/
/*                             </td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                     <p id="btns">*/
/*                         <input type="submit" id="form_save" name="form[save]" value="Valider" />*/
/*                         {% do form.save.setRendered %}*/
/*                         {{ form_end(form) }}*/
/*                     </p>*/
/* */
/*                 </form>*/
/* */
/*             </article>*/
/*         </section>*/
/* */
/* */
/*     {% endblock %}*/
