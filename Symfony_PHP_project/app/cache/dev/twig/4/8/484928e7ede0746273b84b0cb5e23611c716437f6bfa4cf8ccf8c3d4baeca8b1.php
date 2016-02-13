<?php

/* IPBundle:Connexion:login.html.twig */
class __TwigTemplate_5cafc71f97ec1956edd905fc6290ca938bda0384fd070150deb5647c8817e578 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4412344c4920a1a43f4136fb7e240aec818f6bf57b855a4ccf66003d0b2a6e70 = $this->env->getExtension("native_profiler");
        $__internal_4412344c4920a1a43f4136fb7e240aec818f6bf57b855a4ccf66003d0b2a6e70->enter($__internal_4412344c4920a1a43f4136fb7e240aec818f6bf57b855a4ccf66003d0b2a6e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Connexion:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <title>IP13</title>
    </head>
    <body>
        ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo " 

        <div id=\"container\">
            
            <header>
                <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
            </header>

            <div id=\"content\">
        
                <div id=\"welcome\" class=\"identification\">
                    <h1>Consolide tes bases en Reseau avec IP13</h1>

                    <form id=\"identification\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                        <table>
                            <tr>
                                <td id=\"nom\">
                                    <label for=\"username\">Username:</label>
                                </td>
                                
                                <td class=\"fields\">
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                                </td>
                                <tr>
                                <td id=\"mdp\">
                                    <label for=\"password\">Password:</label>
                                </td>
                                <td class=\"fields\">
                                    <input type=\"password\" id=\"password\" name=\"_password\" />
                                </td>
                                ";
        // line 47
        echo "                                    <input type=\"hidden\" name=\"_target_path\" value=\"/index\" />

                            </tr>
                        </table>

                        <p id=\"btns\">
                            <input id=\"btnConnexion\" type=\"submit\" value=\"Connexion\"/>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_4412344c4920a1a43f4136fb7e240aec818f6bf57b855a4ccf66003d0b2a6e70->leave($__internal_4412344c4920a1a43f4136fb7e240aec818f6bf57b855a4ccf66003d0b2a6e70_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f71f6ed2ebce3a12df32fdd14d4e8b4d3a4faf608b16719d69ccc6008265df04 = $this->env->getExtension("native_profiler");
        $__internal_f71f6ed2ebce3a12df32fdd14d4e8b4d3a4faf608b16719d69ccc6008265df04->enter($__internal_f71f6ed2ebce3a12df32fdd14d4e8b4d3a4faf608b16719d69ccc6008265df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_f71f6ed2ebce3a12df32fdd14d4e8b4d3a4faf608b16719d69ccc6008265df04->leave($__internal_f71f6ed2ebce3a12df32fdd14d4e8b4d3a4faf608b16719d69ccc6008265df04_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Connexion:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 6,  103 => 5,  82 => 47,  70 => 34,  59 => 26,  44 => 13,  38 => 12,  36 => 11,  31 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/*         {% endblock %}*/
/*         <title>IP13</title>*/
/*     </head>*/
/*     <body>*/
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %} */
/* */
/*         <div id="container">*/
/*             */
/*             <header>*/
/*                 <a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*             </header>*/
/* */
/*             <div id="content">*/
/*         */
/*                 <div id="welcome" class="identification">*/
/*                     <h1>Consolide tes bases en Reseau avec IP13</h1>*/
/* */
/*                     <form id="identification" action="{{ path('login_check') }}" method="post">*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <td id="nom">*/
/*                                     <label for="username">Username:</label>*/
/*                                 </td>*/
/*                                 */
/*                                 <td class="fields">*/
/*                                     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*                                 </td>*/
/*                                 <tr>*/
/*                                 <td id="mdp">*/
/*                                     <label for="password">Password:</label>*/
/*                                 </td>*/
/*                                 <td class="fields">*/
/*                                     <input type="password" id="password" name="_password" />*/
/*                                 </td>*/
/*                                 {#*/
/*                                     If you want to control the URL the user*/
/*                                     is redirected to on success (more details below)*/
/*                                 #}*/
/*                                     <input type="hidden" name="_target_path" value="/index" />*/
/* */
/*                             </tr>*/
/*                         </table>*/
/* */
/*                         <p id="btns">*/
/*                             <input id="btnConnexion" type="submit" value="Connexion"/>*/
/*                         </p>*/
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
