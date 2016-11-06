<?php

/* default/users.html.twig */
class __TwigTemplate_a5eccf4f8d70135057fdd002fa8075fabdfef037b6e9d602dfc6986c9400aaa6 extends Twig_Template
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
        $__internal_3a2d18ceeb56021d8c0fd608ce72a88c6812f70c797cb2707e52abd3b30ab74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2d18ceeb56021d8c0fd608ce72a88c6812f70c797cb2707e52abd3b30ab74e->enter($__internal_3a2d18ceeb56021d8c0fd608ce72a88c6812f70c797cb2707e52abd3b30ab74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2d18ceeb56021d8c0fd608ce72a88c6812f70c797cb2707e52abd3b30ab74e->leave($__internal_3a2d18ceeb56021d8c0fd608ce72a88c6812f70c797cb2707e52abd3b30ab74e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_459aa26b1db68840756fec16870a49c81cf0680ab96186ca16347d97b3e128fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459aa26b1db68840756fec16870a49c81cf0680ab96186ca16347d97b3e128fe->enter($__internal_459aa26b1db68840756fec16870a49c81cf0680ab96186ca16347d97b3e128fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/users.html.twig"));

        // line 4
        echo "    <h1>users</h1>
";
        
        $__internal_459aa26b1db68840756fec16870a49c81cf0680ab96186ca16347d97b3e128fe->leave($__internal_459aa26b1db68840756fec16870a49c81cf0680ab96186ca16347d97b3e128fe_prof);

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
", "default/users.html.twig", "/var/www/adressBook_1/app/Resources/views/default/users.html.twig");
    }
}
