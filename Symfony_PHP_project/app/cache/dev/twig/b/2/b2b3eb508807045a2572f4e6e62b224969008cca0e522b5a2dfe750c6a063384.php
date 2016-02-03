<?php

/* base.html.twig */
class __TwigTemplate_d98dfb7905519a22b6568fe66ddb098608d5d51d2a2f633c21917938dde4ea17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4369c45e86bb01723b34bffebdcb7197c15048456172cf8f5164c6da8bd60ab = $this->env->getExtension("native_profiler");
        $__internal_f4369c45e86bb01723b34bffebdcb7197c15048456172cf8f5164c6da8bd60ab->enter($__internal_f4369c45e86bb01723b34bffebdcb7197c15048456172cf8f5164c6da8bd60ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f4369c45e86bb01723b34bffebdcb7197c15048456172cf8f5164c6da8bd60ab->leave($__internal_f4369c45e86bb01723b34bffebdcb7197c15048456172cf8f5164c6da8bd60ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c4ce3176fd29e4b35b5aaa4b834362aed6ff3520cd3b64ceb5c197b1642754d = $this->env->getExtension("native_profiler");
        $__internal_1c4ce3176fd29e4b35b5aaa4b834362aed6ff3520cd3b64ceb5c197b1642754d->enter($__internal_1c4ce3176fd29e4b35b5aaa4b834362aed6ff3520cd3b64ceb5c197b1642754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c4ce3176fd29e4b35b5aaa4b834362aed6ff3520cd3b64ceb5c197b1642754d->leave($__internal_1c4ce3176fd29e4b35b5aaa4b834362aed6ff3520cd3b64ceb5c197b1642754d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3925ea81a6d7d7227504365ba212a3109c9423eb8ea64260f7355fe5e032fcd2 = $this->env->getExtension("native_profiler");
        $__internal_3925ea81a6d7d7227504365ba212a3109c9423eb8ea64260f7355fe5e032fcd2->enter($__internal_3925ea81a6d7d7227504365ba212a3109c9423eb8ea64260f7355fe5e032fcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3925ea81a6d7d7227504365ba212a3109c9423eb8ea64260f7355fe5e032fcd2->leave($__internal_3925ea81a6d7d7227504365ba212a3109c9423eb8ea64260f7355fe5e032fcd2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d358d862da08dd69554b66f712c54a9e7466e7d9e94ddd90a12630c0a6453d55 = $this->env->getExtension("native_profiler");
        $__internal_d358d862da08dd69554b66f712c54a9e7466e7d9e94ddd90a12630c0a6453d55->enter($__internal_d358d862da08dd69554b66f712c54a9e7466e7d9e94ddd90a12630c0a6453d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d358d862da08dd69554b66f712c54a9e7466e7d9e94ddd90a12630c0a6453d55->leave($__internal_d358d862da08dd69554b66f712c54a9e7466e7d9e94ddd90a12630c0a6453d55_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6c171ddf22c8a3037ed618cd8c54ebd3bc2f97dbf09a43736faec2a72649b8c = $this->env->getExtension("native_profiler");
        $__internal_a6c171ddf22c8a3037ed618cd8c54ebd3bc2f97dbf09a43736faec2a72649b8c->enter($__internal_a6c171ddf22c8a3037ed618cd8c54ebd3bc2f97dbf09a43736faec2a72649b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6c171ddf22c8a3037ed618cd8c54ebd3bc2f97dbf09a43736faec2a72649b8c->leave($__internal_a6c171ddf22c8a3037ed618cd8c54ebd3bc2f97dbf09a43736faec2a72649b8c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
