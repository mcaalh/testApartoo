<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_145a39bf5923bd78b9c2fcc186e515d824804a34bfe28c3e91bb8e89acf652ec extends Twig_Template
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
        $__internal_d77602703dc7ff0936dcb2cf7fb24bddd58e108d05453aea40aa5307ddba9fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77602703dc7ff0936dcb2cf7fb24bddd58e108d05453aea40aa5307ddba9fbe->enter($__internal_d77602703dc7ff0936dcb2cf7fb24bddd58e108d05453aea40aa5307ddba9fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77602703dc7ff0936dcb2cf7fb24bddd58e108d05453aea40aa5307ddba9fbe->leave($__internal_d77602703dc7ff0936dcb2cf7fb24bddd58e108d05453aea40aa5307ddba9fbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdf365389fcea2abeb9fb8c57fabe76605dabafd80b553da14a5ccdd6608ea63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf365389fcea2abeb9fb8c57fabe76605dabafd80b553da14a5ccdd6608ea63->enter($__internal_cdf365389fcea2abeb9fb8c57fabe76605dabafd80b553da14a5ccdd6608ea63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cdf365389fcea2abeb9fb8c57fabe76605dabafd80b553da14a5ccdd6608ea63->leave($__internal_cdf365389fcea2abeb9fb8c57fabe76605dabafd80b553da14a5ccdd6608ea63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ac0453749f3525541f2468e7ac7578e9c837fbecc058c82462c9fa6a5227471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac0453749f3525541f2468e7ac7578e9c837fbecc058c82462c9fa6a5227471->enter($__internal_9ac0453749f3525541f2468e7ac7578e9c837fbecc058c82462c9fa6a5227471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ac0453749f3525541f2468e7ac7578e9c837fbecc058c82462c9fa6a5227471->leave($__internal_9ac0453749f3525541f2468e7ac7578e9c837fbecc058c82462c9fa6a5227471_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6949447f3f452121d61050fcc2de9e84d4d731773830f0ce7e4d451aa062327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6949447f3f452121d61050fcc2de9e84d4d731773830f0ce7e4d451aa062327->enter($__internal_f6949447f3f452121d61050fcc2de9e84d4d731773830f0ce7e4d451aa062327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f6949447f3f452121d61050fcc2de9e84d4d731773830f0ce7e4d451aa062327->leave($__internal_f6949447f3f452121d61050fcc2de9e84d4d731773830f0ce7e4d451aa062327_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/adressBook_1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
