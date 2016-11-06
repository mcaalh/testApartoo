<?php

/* default/users.html.twig */
class __TwigTemplate_eae07b54d35830cff7bdec27bbde5e6f7a00a5dad017838c2011d0d1f375b010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/users.html.twig", 1);
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
        $__internal_58480b1973615d9774dc58ac10a2ed0b476cbafbaf6c6e0b6fe53597eb40248f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58480b1973615d9774dc58ac10a2ed0b476cbafbaf6c6e0b6fe53597eb40248f->enter($__internal_58480b1973615d9774dc58ac10a2ed0b476cbafbaf6c6e0b6fe53597eb40248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58480b1973615d9774dc58ac10a2ed0b476cbafbaf6c6e0b6fe53597eb40248f->leave($__internal_58480b1973615d9774dc58ac10a2ed0b476cbafbaf6c6e0b6fe53597eb40248f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_684555c0e10c6a5c569664c6e5708086493cd34c0b678e1b078d5d04339d57d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684555c0e10c6a5c569664c6e5708086493cd34c0b678e1b078d5d04339d57d8->enter($__internal_684555c0e10c6a5c569664c6e5708086493cd34c0b678e1b078d5d04339d57d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/users.html.twig"));

        // line 4
        echo "    <h1>users</h1>
";
        
        $__internal_684555c0e10c6a5c569664c6e5708086493cd34c0b678e1b078d5d04339d57d8->leave($__internal_684555c0e10c6a5c569664c6e5708086493cd34c0b678e1b078d5d04339d57d8_prof);

    }

    public function getTemplateName()
    {
        return "default/users.html.twig";
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
    <h1>users</h1>
{% endblock %}
", "default/users.html.twig", "/var/www/adressBook/app/Resources/views/default/users.html.twig");
    }
}
