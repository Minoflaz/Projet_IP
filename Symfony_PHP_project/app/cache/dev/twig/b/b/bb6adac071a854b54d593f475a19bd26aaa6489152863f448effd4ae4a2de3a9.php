<?php

/* IPBundle:Default:login.html.twig */
class __TwigTemplate_87ab2b7147f77d95bd924e1270325ca5675a2d7a1b7903ed1c9837eee327a8fc extends Twig_Template
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
        $__internal_178285bbb48b54c6b1bf9c48d956fa80bcd1a6febeacc31ca00efa0fb20f5d85 = $this->env->getExtension("native_profiler");
        $__internal_178285bbb48b54c6b1bf9c48d956fa80bcd1a6febeacc31ca00efa0fb20f5d85->enter($__internal_178285bbb48b54c6b1bf9c48d956fa80bcd1a6febeacc31ca00efa0fb20f5d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:login.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>GROSSE MERDE</title>
    </head>
    <body>
        ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo " 

        <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            ";
        // line 22
        echo "
            <button type=\"submit\">login</button>
        </form>
    </body>
</html>";
        
        $__internal_178285bbb48b54c6b1bf9c48d956fa80bcd1a6febeacc31ca00efa0fb20f5d85->leave($__internal_178285bbb48b54c6b1bf9c48d956fa80bcd1a6febeacc31ca00efa0fb20f5d85_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  46 => 12,  41 => 10,  37 => 8,  31 => 7,  29 => 6,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <title>GROSSE MERDE</title>*/
/*     </head>*/
/*     <body>*/
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %} */
/* */
/*         <form action="{{ path('login_check') }}" method="post">*/
/*             <label for="username">Username:</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*             <label for="password">Password:</label>*/
/*             <input type="password" id="password" name="_password" />*/
/* */
/*             {#*/
/*                 If you want to control the URL the user*/
/*                 is redirected to on success (more details below)*/
/*                 <input type="hidden" name="_target_path" value="/account" />*/
/*             #}*/
/* */
/*             <button type="submit">login</button>*/
/*         </form>*/
/*     </body>*/
/* </html>*/
