<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ad33fd8c80d0fd0c8f07fb573cff855e34868a8757b865d6034c7aafbe954f5c extends Twig_Template
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
        $__internal_a6a2be127f0d2c37cd032ac91c65ba546e5dd25ae8168f0ccdbbd15d34459041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a2be127f0d2c37cd032ac91c65ba546e5dd25ae8168f0ccdbbd15d34459041->enter($__internal_a6a2be127f0d2c37cd032ac91c65ba546e5dd25ae8168f0ccdbbd15d34459041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a2be127f0d2c37cd032ac91c65ba546e5dd25ae8168f0ccdbbd15d34459041->leave($__internal_a6a2be127f0d2c37cd032ac91c65ba546e5dd25ae8168f0ccdbbd15d34459041_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_740c6f860df10de24632d5701690b88bd6b714c08bb65421779b76bed047b5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740c6f860df10de24632d5701690b88bd6b714c08bb65421779b76bed047b5c2->enter($__internal_740c6f860df10de24632d5701690b88bd6b714c08bb65421779b76bed047b5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_740c6f860df10de24632d5701690b88bd6b714c08bb65421779b76bed047b5c2->leave($__internal_740c6f860df10de24632d5701690b88bd6b714c08bb65421779b76bed047b5c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e127496040100b1bfb98c6f919b2076a2a21c8573b258c0eb2489fb5e8b030b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e127496040100b1bfb98c6f919b2076a2a21c8573b258c0eb2489fb5e8b030b0->enter($__internal_e127496040100b1bfb98c6f919b2076a2a21c8573b258c0eb2489fb5e8b030b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e127496040100b1bfb98c6f919b2076a2a21c8573b258c0eb2489fb5e8b030b0->leave($__internal_e127496040100b1bfb98c6f919b2076a2a21c8573b258c0eb2489fb5e8b030b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d50cb320eb12cda2f694cd3cf5a8f5fde39b50a4ae5d6184cfce9a8d383f453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d50cb320eb12cda2f694cd3cf5a8f5fde39b50a4ae5d6184cfce9a8d383f453->enter($__internal_9d50cb320eb12cda2f694cd3cf5a8f5fde39b50a4ae5d6184cfce9a8d383f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d50cb320eb12cda2f694cd3cf5a8f5fde39b50a4ae5d6184cfce9a8d383f453->leave($__internal_9d50cb320eb12cda2f694cd3cf5a8f5fde39b50a4ae5d6184cfce9a8d383f453_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/adressBook_1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
