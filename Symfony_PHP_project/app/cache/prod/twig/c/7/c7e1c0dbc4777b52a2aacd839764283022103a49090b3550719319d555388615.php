<?php

/* IPBundle:Inscription:inscription.html.twig */
class __TwigTemplate_bfe9ebd538e3c21c0e5c0dde039c4bca1dd340f75e77a50f83c806c415eb3122 extends Twig_Template
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
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t\t<title>IP13</title>
\t</head>

\t<body>
\t
\t\t<div id=\"container\">
\t\t\t
\t\t\t<header>
                <a href=\"index\"><img id=\"logo\" src=\"img/logo.png\" alt=\"IP13\" height=\"60\" width=\"60\"></a><span>IP13</span>
\t\t\t</header>
\t\t\t
\t\t\t<div id=\"content\">
\t\t
\t\t\t\t<div id=\"welcome\" class=\"identification\">
\t\t\t\t\t<h1>Consolide tes bases en Reseau avec IP13</h1>
\t\t\t\t\t
\t\t\t\t\t<form id=\"identification\" method=\"post\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"nom\">
                                ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"prenom\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"username\">
\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"password\">
\t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<td id=\"dateNaissance\">
\t\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateNaissance", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateNaissance", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td id=\"sexe\">
\t\t\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'label');
        echo " :
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t\t<p id=\"btns\">
                            <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Inscription\" />
                            ";
        // line 77
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), "setRendered", array());
        // line 78
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</body>
</html> 
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t\t";
    }

    public function getTemplateName()
    {
        return "IPBundle:Inscription:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 6,  160 => 5,  143 => 78,  141 => 77,  131 => 70,  125 => 67,  118 => 63,  112 => 60,  105 => 56,  99 => 53,  91 => 48,  85 => 45,  77 => 40,  71 => 37,  64 => 33,  58 => 30,  54 => 29,  50 => 28,  28 => 8,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8"/>*/
/* 		{% block stylesheets %}*/
/* 			<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all">*/
/* 		{% endblock %}*/
/* 		<title>IP13</title>*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 	*/
/* 		<div id="container">*/
/* 			*/
/* 			<header>*/
/*                 <a href="index"><img id="logo" src="img/logo.png" alt="IP13" height="60" width="60"></a><span>IP13</span>*/
/* 			</header>*/
/* 			*/
/* 			<div id="content">*/
/* 		*/
/* 				<div id="welcome" class="identification">*/
/* 					<h1>Consolide tes bases en Reseau avec IP13</h1>*/
/* 					*/
/* 					<form id="identification" method="post">*/
/* 						<table>*/
/* 							<tr>*/
/* 							<td id="nom">*/
/*                                 {{ form_start(form) }}*/
/*                                 {{ form_errors(form) }}*/
/* 								{{ form_label(form.nom) }} :*/
/* 							</td>*/
/* 							<td class="fields">*/
/* 								{{ form_widget(form.nom) }}*/
/* 							</td>*/
/* 							<tr>*/
/* 							<td id="prenom">*/
/* 								{{ form_label(form.prenom) }} :*/
/* 							</td>*/
/* 							<td class="fields">*/
/* 								{{ form_widget(form.prenom) }}*/
/* 							</td>*/
/* 							</tr>*/
/* 							<tr>*/
/* 							<td id="username">*/
/* 								{{ form_label(form.username) }} :*/
/* 							</td>*/
/* 							<td class="fields">*/
/* 								{{ form_widget(form.username) }}*/
/* 							</td>*/
/* 							</tr>*/
/* 							<tr>*/
/* 							<td id="password">*/
/* 								{{ form_label(form.password) }} :*/
/* 							</td>*/
/* 							<td class="fields">*/
/* 								{{ form_widget(form.password) }}*/
/* 							</td>*/
/* 							</tr>*/
/* 							<td id="dateNaissance">*/
/* 								{{ form_label(form.dateNaissance) }} :*/
/* 							</td>*/
/* 							<td class="fields">*/
/* 								{{ form_widget(form.dateNaissance) }}*/
/* 							</td>*/
/* 							<tr>*/
/* 								<td id="sexe">*/
/* 									{{ form_label(form.sexe) }} :*/
/* 								</td>*/
/* 								<td class="fields">*/
/* 									{{ form_widget(form.sexe) }}*/
/* 								</td>*/
/* 							<tr>*/
/* 						</table>*/
/* 						*/
/* 						<p id="btns">*/
/*                             <input type="submit" id="form_save" name="form[save]" value="Inscription" />*/
/*                             {% do form.save.setRendered %}*/
/*                             {{ form_end(form) }}*/
/* 						</p>*/
/* 					</form>*/
/* */
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 	</body>*/
/* </html> */
/* */
