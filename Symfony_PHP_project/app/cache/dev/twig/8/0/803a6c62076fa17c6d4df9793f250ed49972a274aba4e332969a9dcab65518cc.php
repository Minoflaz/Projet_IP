<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_77716c92794dee679ecabcbfe4eb8a878f373a312cb2586cb892a972231c3af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b53640f2a106a98b9df50078348f46dcec151f39fdf3b8a92bbbae5da4c3a115 = $this->env->getExtension("native_profiler");
        $__internal_b53640f2a106a98b9df50078348f46dcec151f39fdf3b8a92bbbae5da4c3a115->enter($__internal_b53640f2a106a98b9df50078348f46dcec151f39fdf3b8a92bbbae5da4c3a115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineBundle:Collector:explain.html.twig"));

        // line 1
        echo "<strong>Explanation:</strong>

";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")) > 1)) {
            // line 4
            echo "    ";
            // line 5
            echo "    <table style=\"margin: 5px 0;\">
        <thead>
            <tr>
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 9
                echo "                    <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 15
                echo "            <tr>
                ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 17
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["item"], array("," => ", ")), "html", null, true);
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </tbody>
    </table>
";
        } else {
            // line 24
            echo "    ";
            // line 25
            echo "    <pre style=\"margin: 5px 0;\">";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 27
                echo twig_escape_filter($this->env, twig_first($this->env, $context["row"]), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</pre>
";
        }
        
        $__internal_b53640f2a106a98b9df50078348f46dcec151f39fdf3b8a92bbbae5da4c3a115->leave($__internal_b53640f2a106a98b9df50078348f46dcec151f39fdf3b8a92bbbae5da4c3a115_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  93 => 27,  89 => 26,  87 => 25,  85 => 24,  80 => 21,  73 => 19,  64 => 17,  60 => 16,  57 => 15,  53 => 14,  48 => 11,  39 => 9,  35 => 8,  30 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <strong>Explanation:</strong>*/
/* */
/* {% if data[0]|length > 1 %}*/
/*     {# The platform returns a table for the explanation (e.g. MySQL), display all columns #}*/
/*     <table style="margin: 5px 0;">*/
/*         <thead>*/
/*             <tr>*/
/*                 {% for label in data[0]|keys %}*/
/*                     <th>{{ label }}</th>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for row in data %}*/
/*             <tr>*/
/*                 {% for key, item in row %}*/
/*                     <td>{{ item|replace({',': ', '}) }}</td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% else %}*/
/*     {# The Platform returns a single column for a textual explanation (e.g. PostgreSQL), display all lines #}*/
/*     <pre style="margin: 5px 0;">*/
/*         {%- for row in data -%}*/
/*             {{ row|first }}{{ "\n" }}*/
/*         {%- endfor -%}*/
/*     </pre>*/
/* {% endif %}*/
/* */
