<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4fcf0aa3a2b218c66a5454b2d09ec42c34e564c05fb9c98e4bb5206ad42bf7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_0d437bf49d265c84ad3b9480cd55871663b2e74bcddcbeb167e1ad153bd64a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d437bf49d265c84ad3b9480cd55871663b2e74bcddcbeb167e1ad153bd64a94->enter($__internal_0d437bf49d265c84ad3b9480cd55871663b2e74bcddcbeb167e1ad153bd64a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d437bf49d265c84ad3b9480cd55871663b2e74bcddcbeb167e1ad153bd64a94->leave($__internal_0d437bf49d265c84ad3b9480cd55871663b2e74bcddcbeb167e1ad153bd64a94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c18c123c3926d308ce8b3c82279fce1159520435a235cdc4c223ce39125b780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c18c123c3926d308ce8b3c82279fce1159520435a235cdc4c223ce39125b780->enter($__internal_5c18c123c3926d308ce8b3c82279fce1159520435a235cdc4c223ce39125b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c18c123c3926d308ce8b3c82279fce1159520435a235cdc4c223ce39125b780->leave($__internal_5c18c123c3926d308ce8b3c82279fce1159520435a235cdc4c223ce39125b780_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_62b5037f7679e4237617a1c02027bae09a6d69f8cd984850701327961597f2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b5037f7679e4237617a1c02027bae09a6d69f8cd984850701327961597f2e9->enter($__internal_62b5037f7679e4237617a1c02027bae09a6d69f8cd984850701327961597f2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_62b5037f7679e4237617a1c02027bae09a6d69f8cd984850701327961597f2e9->leave($__internal_62b5037f7679e4237617a1c02027bae09a6d69f8cd984850701327961597f2e9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44b88dee31b62668bda96943e63ebaff3c6fca6ee8a052595dfef0c7b267b056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b88dee31b62668bda96943e63ebaff3c6fca6ee8a052595dfef0c7b267b056->enter($__internal_44b88dee31b62668bda96943e63ebaff3c6fca6ee8a052595dfef0c7b267b056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_44b88dee31b62668bda96943e63ebaff3c6fca6ee8a052595dfef0c7b267b056->leave($__internal_44b88dee31b62668bda96943e63ebaff3c6fca6ee8a052595dfef0c7b267b056_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
