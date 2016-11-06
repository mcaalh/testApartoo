<?php

/* adress/create.html.twig */
class __TwigTemplate_124a24790b945f296efa677345a21b1efc995b594aeec9dc9ddf1d638519254e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/create.html.twig", 1);
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
        $__internal_cb76759640c1aee291f04a34946dc937c46ca01c412c2d30f65d08f88be0af87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb76759640c1aee291f04a34946dc937c46ca01c412c2d30f65d08f88be0af87->enter($__internal_cb76759640c1aee291f04a34946dc937c46ca01c412c2d30f65d08f88be0af87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb76759640c1aee291f04a34946dc937c46ca01c412c2d30f65d08f88be0af87->leave($__internal_cb76759640c1aee291f04a34946dc937c46ca01c412c2d30f65d08f88be0af87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d58d73cbcd44503be641184393001dc6d40bc08fcce9df022b8be8202b55f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d58d73cbcd44503be641184393001dc6d40bc08fcce9df022b8be8202b55f7a->enter($__internal_0d58d73cbcd44503be641184393001dc6d40bc08fcce9df022b8be8202b55f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adress/create.html.twig"));

        // line 4
        echo "<h1 class=\"page-header\">ajouter un contact</h1>
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0d58d73cbcd44503be641184393001dc6d40bc08fcce9df022b8be8202b55f7a->leave($__internal_0d58d73cbcd44503be641184393001dc6d40bc08fcce9df022b8be8202b55f7a_prof);

    }

    public function getTemplateName()
    {
        return "adress/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<h1 class=\"page-header\">ajouter un contact</h1>
    {{form_start(form)}}
    {{form_widget(form)}}
    {{form_end(form)}}
{% endblock %}
", "adress/create.html.twig", "/var/www/adressBook_1/app/Resources/views/adress/create.html.twig");
    }
}
