<?php

/* IPBundle:Default:inscription.html.twig */
class __TwigTemplate_f5a54f26c5d39387ea9c21d6d7a6cc2059681e4d97842de3650cff22e0e6ef53 extends Twig_Template
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
        $__internal_f9d8efc92723fd09af588de2a7d1b0bff0089ba003e8c644c25cb7601d42352b = $this->env->getExtension("native_profiler");
        $__internal_f9d8efc92723fd09af588de2a7d1b0bff0089ba003e8c644c25cb7601d42352b->enter($__internal_f9d8efc92723fd09af588de2a7d1b0bff0089ba003e8c644c25cb7601d42352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPBundle:Default:inscription.html.twig"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"prenom\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"username\">
\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"password\">
\t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<td id=\"dateNaissance\">
\t\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label');
        echo " :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget');
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td id=\"sexe\">
\t\t\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label');
        echo " :
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"fields\">
\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t\t<p id=\"btns\">
                            <input type=\"submit\" id=\"form_save\" name=\"form[save]\" value=\"Inscription\" />
                            ";
        // line 77
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), "setRendered", array());
        // line 78
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_f9d8efc92723fd09af588de2a7d1b0bff0089ba003e8c644c25cb7601d42352b->leave($__internal_f9d8efc92723fd09af588de2a7d1b0bff0089ba003e8c644c25cb7601d42352b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e28f294be0ace6a4f6346e275c0cc7613dfe7fe0ce4bcf9487863a680e7006d1 = $this->env->getExtension("native_profiler");
        $__internal_e28f294be0ace6a4f6346e275c0cc7613dfe7fe0ce4bcf9487863a680e7006d1->enter($__internal_e28f294be0ace6a4f6346e275c0cc7613dfe7fe0ce4bcf9487863a680e7006d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t\t";
        
        $__internal_e28f294be0ace6a4f6346e275c0cc7613dfe7fe0ce4bcf9487863a680e7006d1->leave($__internal_e28f294be0ace6a4f6346e275c0cc7613dfe7fe0ce4bcf9487863a680e7006d1_prof);

    }

    public function getTemplateName()
    {
        return "IPBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 6,  166 => 5,  146 => 78,  144 => 77,  134 => 70,  128 => 67,  121 => 63,  115 => 60,  108 => 56,  102 => 53,  94 => 48,  88 => 45,  80 => 40,  74 => 37,  67 => 33,  61 => 30,  57 => 29,  53 => 28,  31 => 8,  29 => 5,  23 => 1,);
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
