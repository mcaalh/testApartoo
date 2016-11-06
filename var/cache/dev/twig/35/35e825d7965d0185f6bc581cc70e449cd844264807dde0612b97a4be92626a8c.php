<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8e861e62bbfab9654951876aef07cb2c04e0b07b4fd2ed0d8b7df73ed9225811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5bd7803c03c49c2f91928e018120397cbaca822f15b490c2ed3f6aa9b506d57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd7803c03c49c2f91928e018120397cbaca822f15b490c2ed3f6aa9b506d57d->enter($__internal_5bd7803c03c49c2f91928e018120397cbaca822f15b490c2ed3f6aa9b506d57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd7803c03c49c2f91928e018120397cbaca822f15b490c2ed3f6aa9b506d57d->leave($__internal_5bd7803c03c49c2f91928e018120397cbaca822f15b490c2ed3f6aa9b506d57d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc103f1bc5a487193f81457617d3b9a1709bed627c8f1fca60fb11fc269b0bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc103f1bc5a487193f81457617d3b9a1709bed627c8f1fca60fb11fc269b0bef->enter($__internal_bc103f1bc5a487193f81457617d3b9a1709bed627c8f1fca60fb11fc269b0bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_bc103f1bc5a487193f81457617d3b9a1709bed627c8f1fca60fb11fc269b0bef->leave($__internal_bc103f1bc5a487193f81457617d3b9a1709bed627c8f1fca60fb11fc269b0bef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4980bdf8987357e33d313187c484ccc6e949eab28b14a05fd964bcf8a2d10f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4980bdf8987357e33d313187c484ccc6e949eab28b14a05fd964bcf8a2d10f68->enter($__internal_4980bdf8987357e33d313187c484ccc6e949eab28b14a05fd964bcf8a2d10f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4980bdf8987357e33d313187c484ccc6e949eab28b14a05fd964bcf8a2d10f68->leave($__internal_4980bdf8987357e33d313187c484ccc6e949eab28b14a05fd964bcf8a2d10f68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
