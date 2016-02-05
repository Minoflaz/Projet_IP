<?php

/* IPBundle:Default:login.html.twig */
class __TwigTemplate_a7af80e8aa47cdb70adb453e6a12b4263ea05df5bf7844eec91929abcae3d190 extends Twig_Template
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
        $__internal_957001c6a797e906e89ac037a50c073b1b502de747e78e905022d00f40f553f4 = $this->env->getExtension("native_profiler");
        $__internal_957001c6a797e906e89ac037a50c073b1b502de747e78e905022d00f40f553f4->enter($__internal_957001c6a797e906e89ac037a50c073b1b502de747e78e905022d00f40f553f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:login.html.twig"));

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
                <img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"><span>IP13</span>
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
        
        $__internal_957001c6a797e906e89ac037a50c073b1b502de747e78e905022d00f40f553f4->leave($__internal_957001c6a797e906e89ac037a50c073b1b502de747e78e905022d00f40f553f4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b81ab730f9acd120b127150ee31d01b5f19665c70e2b9b301435bc370e9939f3 = $this->env->getExtension("native_profiler");
        $__internal_b81ab730f9acd120b127150ee31d01b5f19665c70e2b9b301435bc370e9939f3->enter($__internal_b81ab730f9acd120b127150ee31d01b5f19665c70e2b9b301435bc370e9939f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
        
        $__internal_b81ab730f9acd120b127150ee31d01b5f19665c70e2b9b301435bc370e9939f3->leave($__internal_b81ab730f9acd120b127150ee31d01b5f19665c70e2b9b301435bc370e9939f3_prof);

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
/*                 <img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"><span>IP13</span>*/
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
