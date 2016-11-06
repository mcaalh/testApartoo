<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f6666396695de8417fb3858ac679e5bdc3ad8fbb4d4bce0a02d104751f8bb3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3626ef6acfbda148640c7d117a9909ee68cf95ef745eb0158e15fabebd56aad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3626ef6acfbda148640c7d117a9909ee68cf95ef745eb0158e15fabebd56aad8->enter($__internal_3626ef6acfbda148640c7d117a9909ee68cf95ef745eb0158e15fabebd56aad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3626ef6acfbda148640c7d117a9909ee68cf95ef745eb0158e15fabebd56aad8->leave($__internal_3626ef6acfbda148640c7d117a9909ee68cf95ef745eb0158e15fabebd56aad8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3708ca90f0defafb3a3bd14a0abaa50885baab2a15c67aeee6d9385e5d87a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3708ca90f0defafb3a3bd14a0abaa50885baab2a15c67aeee6d9385e5d87a23->enter($__internal_e3708ca90f0defafb3a3bd14a0abaa50885baab2a15c67aeee6d9385e5d87a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_e3708ca90f0defafb3a3bd14a0abaa50885baab2a15c67aeee6d9385e5d87a23->leave($__internal_e3708ca90f0defafb3a3bd14a0abaa50885baab2a15c67aeee6d9385e5d87a23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b27244015e46d1058bebf4b2239e402ec7cf8066fa711efa9c45b7d481eee1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27244015e46d1058bebf4b2239e402ec7cf8066fa711efa9c45b7d481eee1d3->enter($__internal_b27244015e46d1058bebf4b2239e402ec7cf8066fa711efa9c45b7d481eee1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b27244015e46d1058bebf4b2239e402ec7cf8066fa711efa9c45b7d481eee1d3->leave($__internal_b27244015e46d1058bebf4b2239e402ec7cf8066fa711efa9c45b7d481eee1d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7ec771d2ab99156c8374fe3ec8bd147e5b62c959571a437eeec8eaf906dc344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ec771d2ab99156c8374fe3ec8bd147e5b62c959571a437eeec8eaf906dc344->enter($__internal_d7ec771d2ab99156c8374fe3ec8bd147e5b62c959571a437eeec8eaf906dc344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7ec771d2ab99156c8374fe3ec8bd147e5b62c959571a437eeec8eaf906dc344->leave($__internal_d7ec771d2ab99156c8374fe3ec8bd147e5b62c959571a437eeec8eaf906dc344_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
