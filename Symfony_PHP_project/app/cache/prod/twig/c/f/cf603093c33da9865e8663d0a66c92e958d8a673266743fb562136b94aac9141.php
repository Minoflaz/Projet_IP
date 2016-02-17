<?php

/* IPBundle:Connexion:login.html.twig */
class __TwigTemplate_cf7cf270c50bfc888a368d95c05a1647d5b6a9102713f9185277328c6d276bb0 extends Twig_Template
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
        <div id=\"container\">
            
            <header>
                ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "f7a7b5e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f7a7b5e") : $this->env->getExtension('asset')->getAssetUrl("images/f7a7b5e");
            // line 15
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("index");
            echo "\"><img id=\"logo\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/logo.png"), "html", null, true);
            echo "\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
                ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "            </header>

            <div id=\"content\">
        
                <div id=\"welcome\" class=\"identification\">
                    <h1>Consolide tes bases en Reseau avec IP13</h1>

                    <form id=\"identification\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                        <table>
                            <tr>
                                <td id=\"nom\">
                                    <label for=\"username\">Username:</label>
                                </td>
                                
                                <td class=\"fields\">
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        // line 45
        echo "                                    <input type=\"hidden\" name=\"_target_path\" value=\"/index\" />

                            </tr>
                        </table>

                        ";
        // line 50
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 51
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 53
        echo "

                        <p id=\"btns\">
                            <input id=\"btnConnexion\" type=\"submit\" value=\"Connexion\"/>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
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
        return array (  115 => 6,  112 => 5,  97 => 53,  91 => 51,  89 => 50,  82 => 45,  70 => 32,  59 => 24,  50 => 17,  41 => 15,  36 => 14,  28 => 8,  26 => 5,  20 => 1,);
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
/*         <div id="container">*/
/*             */
/*             <header>*/
/*                 {% image %}*/
/*                     <a href="{{ path('index')}}"><img id="logo" src="{{asset('/img/logo.png')}}" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/*                 {% endimage %}*/
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
/*                         {% if error %}*/
/*                             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                         {% endif %}*/
/* */
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
