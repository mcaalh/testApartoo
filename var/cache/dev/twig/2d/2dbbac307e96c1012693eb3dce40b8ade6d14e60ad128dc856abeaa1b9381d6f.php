<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e55a62fbc501722e3af5fc5142c8294d825380efaa4ad8eae476c6c553ba9c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8c0364774c96ca734f1f31d85f930a17080746d4d7f54f1840cfa7ed46882a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c0364774c96ca734f1f31d85f930a17080746d4d7f54f1840cfa7ed46882a7->enter($__internal_d8c0364774c96ca734f1f31d85f930a17080746d4d7f54f1840cfa7ed46882a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c0364774c96ca734f1f31d85f930a17080746d4d7f54f1840cfa7ed46882a7->leave($__internal_d8c0364774c96ca734f1f31d85f930a17080746d4d7f54f1840cfa7ed46882a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3a8705d5867ceaede7e25995a9403d102b02341eceeaf2bd1d414853241bfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a8705d5867ceaede7e25995a9403d102b02341eceeaf2bd1d414853241bfbe->enter($__internal_c3a8705d5867ceaede7e25995a9403d102b02341eceeaf2bd1d414853241bfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_c3a8705d5867ceaede7e25995a9403d102b02341eceeaf2bd1d414853241bfbe->leave($__internal_c3a8705d5867ceaede7e25995a9403d102b02341eceeaf2bd1d414853241bfbe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9466bb9d7fc4c4d3565557ab8ba2684f146013eaceeefced932af07c62d53b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9466bb9d7fc4c4d3565557ab8ba2684f146013eaceeefced932af07c62d53b6->enter($__internal_c9466bb9d7fc4c4d3565557ab8ba2684f146013eaceeefced932af07c62d53b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9466bb9d7fc4c4d3565557ab8ba2684f146013eaceeefced932af07c62d53b6->leave($__internal_c9466bb9d7fc4c4d3565557ab8ba2684f146013eaceeefced932af07c62d53b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_118661a3cd4f4c59751a3a04f3ca56f77bda3f864ec6d0d41e22f741abfc24c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118661a3cd4f4c59751a3a04f3ca56f77bda3f864ec6d0d41e22f741abfc24c1->enter($__internal_118661a3cd4f4c59751a3a04f3ca56f77bda3f864ec6d0d41e22f741abfc24c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_118661a3cd4f4c59751a3a04f3ca56f77bda3f864ec6d0d41e22f741abfc24c1->leave($__internal_118661a3cd4f4c59751a3a04f3ca56f77bda3f864ec6d0d41e22f741abfc24c1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
