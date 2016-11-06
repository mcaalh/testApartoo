<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_10c3df3a5107ef29cd31142be181129f2e433ca928c97906fb456fa698e2f958 extends Twig_Template
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
        $__internal_0000172e7b595e4ae8b11f5e4f2c9dc8adbb3605325b2bb8d7c9e14c0d6dd6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0000172e7b595e4ae8b11f5e4f2c9dc8adbb3605325b2bb8d7c9e14c0d6dd6fd->enter($__internal_0000172e7b595e4ae8b11f5e4f2c9dc8adbb3605325b2bb8d7c9e14c0d6dd6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0000172e7b595e4ae8b11f5e4f2c9dc8adbb3605325b2bb8d7c9e14c0d6dd6fd->leave($__internal_0000172e7b595e4ae8b11f5e4f2c9dc8adbb3605325b2bb8d7c9e14c0d6dd6fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_628c10d2d2770cad73f93008c23d47a658824f6c2db31d6b941ffe4b7de8262a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628c10d2d2770cad73f93008c23d47a658824f6c2db31d6b941ffe4b7de8262a->enter($__internal_628c10d2d2770cad73f93008c23d47a658824f6c2db31d6b941ffe4b7de8262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_628c10d2d2770cad73f93008c23d47a658824f6c2db31d6b941ffe4b7de8262a->leave($__internal_628c10d2d2770cad73f93008c23d47a658824f6c2db31d6b941ffe4b7de8262a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff6ca412e40a476af875c81fc86975d609470a33292bc88ea3b5ff257785947a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6ca412e40a476af875c81fc86975d609470a33292bc88ea3b5ff257785947a->enter($__internal_ff6ca412e40a476af875c81fc86975d609470a33292bc88ea3b5ff257785947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff6ca412e40a476af875c81fc86975d609470a33292bc88ea3b5ff257785947a->leave($__internal_ff6ca412e40a476af875c81fc86975d609470a33292bc88ea3b5ff257785947a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29b99b15b1efb275dfb491191a6ca9a9adc5ed664257a921903a0cfc01c82c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b99b15b1efb275dfb491191a6ca9a9adc5ed664257a921903a0cfc01c82c0c->enter($__internal_29b99b15b1efb275dfb491191a6ca9a9adc5ed664257a921903a0cfc01c82c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_29b99b15b1efb275dfb491191a6ca9a9adc5ed664257a921903a0cfc01c82c0c->leave($__internal_29b99b15b1efb275dfb491191a6ca9a9adc5ed664257a921903a0cfc01c82c0c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
