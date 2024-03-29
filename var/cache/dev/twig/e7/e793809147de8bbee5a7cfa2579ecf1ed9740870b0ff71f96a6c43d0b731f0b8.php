<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f7caaddfdad84e10b0b3eb6f2eb1b407347f42dd9b35c634b242bac1bb790408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f706352414bc2ea8c0c6c967a1ac8803b85f0080969e3c2fa1035386936376b5 = $this->env->getExtension("native_profiler");
        $__internal_f706352414bc2ea8c0c6c967a1ac8803b85f0080969e3c2fa1035386936376b5->enter($__internal_f706352414bc2ea8c0c6c967a1ac8803b85f0080969e3c2fa1035386936376b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f706352414bc2ea8c0c6c967a1ac8803b85f0080969e3c2fa1035386936376b5->leave($__internal_f706352414bc2ea8c0c6c967a1ac8803b85f0080969e3c2fa1035386936376b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9dfe5237cf0142ca4b930c12a11d25f1d9fc534c022ac53b1958ed6d0414e26 = $this->env->getExtension("native_profiler");
        $__internal_d9dfe5237cf0142ca4b930c12a11d25f1d9fc534c022ac53b1958ed6d0414e26->enter($__internal_d9dfe5237cf0142ca4b930c12a11d25f1d9fc534c022ac53b1958ed6d0414e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d9dfe5237cf0142ca4b930c12a11d25f1d9fc534c022ac53b1958ed6d0414e26->leave($__internal_d9dfe5237cf0142ca4b930c12a11d25f1d9fc534c022ac53b1958ed6d0414e26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_27fb5c5dca7f9f4b2b798c86ab980d0e68be7793ba7787787f3d4d0d59d2f56b = $this->env->getExtension("native_profiler");
        $__internal_27fb5c5dca7f9f4b2b798c86ab980d0e68be7793ba7787787f3d4d0d59d2f56b->enter($__internal_27fb5c5dca7f9f4b2b798c86ab980d0e68be7793ba7787787f3d4d0d59d2f56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_27fb5c5dca7f9f4b2b798c86ab980d0e68be7793ba7787787f3d4d0d59d2f56b->leave($__internal_27fb5c5dca7f9f4b2b798c86ab980d0e68be7793ba7787787f3d4d0d59d2f56b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae7323c67d8d858dc42f3cf68b6383cc65a61f46bb922faa4a5c3b996d1d109b = $this->env->getExtension("native_profiler");
        $__internal_ae7323c67d8d858dc42f3cf68b6383cc65a61f46bb922faa4a5c3b996d1d109b->enter($__internal_ae7323c67d8d858dc42f3cf68b6383cc65a61f46bb922faa4a5c3b996d1d109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ae7323c67d8d858dc42f3cf68b6383cc65a61f46bb922faa4a5c3b996d1d109b->leave($__internal_ae7323c67d8d858dc42f3cf68b6383cc65a61f46bb922faa4a5c3b996d1d109b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
