<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b99f64a418a8398f1e91a814b4ad8798a48d729c532a1343720dd4f7168fea13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f107997c0745330500f5d4778102014782ace40bb86b794207196ea07e7533db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f107997c0745330500f5d4778102014782ace40bb86b794207196ea07e7533db->enter($__internal_f107997c0745330500f5d4778102014782ace40bb86b794207196ea07e7533db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f107997c0745330500f5d4778102014782ace40bb86b794207196ea07e7533db->leave($__internal_f107997c0745330500f5d4778102014782ace40bb86b794207196ea07e7533db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76f72a5b2890c7206e95af9903540273ed823b8021c234991453e95e438b8e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f72a5b2890c7206e95af9903540273ed823b8021c234991453e95e438b8e8c->enter($__internal_76f72a5b2890c7206e95af9903540273ed823b8021c234991453e95e438b8e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_76f72a5b2890c7206e95af9903540273ed823b8021c234991453e95e438b8e8c->leave($__internal_76f72a5b2890c7206e95af9903540273ed823b8021c234991453e95e438b8e8c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4dd0ef435d5be37a597951912f0329e920f5f57909f3ee6dd9f95e5af1b3bdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd0ef435d5be37a597951912f0329e920f5f57909f3ee6dd9f95e5af1b3bdd5->enter($__internal_4dd0ef435d5be37a597951912f0329e920f5f57909f3ee6dd9f95e5af1b3bdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4dd0ef435d5be37a597951912f0329e920f5f57909f3ee6dd9f95e5af1b3bdd5->leave($__internal_4dd0ef435d5be37a597951912f0329e920f5f57909f3ee6dd9f95e5af1b3bdd5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85d86f22257119d0130a7e849b236abb1f0dc88850a837b2ef590d3d5820f44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d86f22257119d0130a7e849b236abb1f0dc88850a837b2ef590d3d5820f44b->enter($__internal_85d86f22257119d0130a7e849b236abb1f0dc88850a837b2ef590d3d5820f44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_85d86f22257119d0130a7e849b236abb1f0dc88850a837b2ef590d3d5820f44b->leave($__internal_85d86f22257119d0130a7e849b236abb1f0dc88850a837b2ef590d3d5820f44b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
