<?php

/* default/index.html.twig */
class __TwigTemplate_18774156a79dc0f2821dfc8d5a01b05d1eaa898a97590a4a47d438bcdb9a979c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64c705289957eb826c5f895fff68de7726075155f8d8be3890cf4f2807f1b9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c705289957eb826c5f895fff68de7726075155f8d8be3890cf4f2807f1b9fd->enter($__internal_64c705289957eb826c5f895fff68de7726075155f8d8be3890cf4f2807f1b9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c705289957eb826c5f895fff68de7726075155f8d8be3890cf4f2807f1b9fd->leave($__internal_64c705289957eb826c5f895fff68de7726075155f8d8be3890cf4f2807f1b9fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a887947ec4bc9da33eeba643c17536bc79b986b4269ac2a772813fb54fd77c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a887947ec4bc9da33eeba643c17536bc79b986b4269ac2a772813fb54fd77c4b->enter($__internal_a887947ec4bc9da33eeba643c17536bc79b986b4269ac2a772813fb54fd77c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "
";
        
        $__internal_a887947ec4bc9da33eeba643c17536bc79b986b4269ac2a772813fb54fd77c4b->leave($__internal_a887947ec4bc9da33eeba643c17536bc79b986b4269ac2a772813fb54fd77c4b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% endblock %}
", "default/index.html.twig", "/var/www/adressBook_1/app/Resources/views/default/index.html.twig");
    }
}
