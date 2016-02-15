<?php

/* IPBundle:Exercices:testRoutingTable.html.twig */
class __TwigTemplate_f95824adcec064ae6b781a9c8cef3c8725af5a8684de0e3b45bf101038c53275 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ip", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gateway", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mask", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "flag", array()), 'widget');
        echo "
                            </td>
                            <td>
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interface", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <p id=\"btns\">
                        <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Valider\" />
                        ";
        // line 62
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), "setRendered", array());
        // line 63
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    </p>

                </form>

            </article>
        </section>


    ";
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
        return array (  117 => 63,  115 => 62,  104 => 54,  98 => 51,  92 => 48,  86 => 45,  80 => 42,  52 => 17,  48 => 16,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
