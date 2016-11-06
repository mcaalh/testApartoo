<?php

/* adress/edit.html.twig */
class __TwigTemplate_859b53ca4d6f3d228bd4756fbd89140e1636e0c03a59e85f220880dbecbd3571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/edit.html.twig", 1);
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
        $__internal_ad4efa49cc482e231c5b92d756511cc2b1e45f97e462db10d7563f8ac94c5c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4efa49cc482e231c5b92d756511cc2b1e45f97e462db10d7563f8ac94c5c3c->enter($__internal_ad4efa49cc482e231c5b92d756511cc2b1e45f97e462db10d7563f8ac94c5c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4efa49cc482e231c5b92d756511cc2b1e45f97e462db10d7563f8ac94c5c3c->leave($__internal_ad4efa49cc482e231c5b92d756511cc2b1e45f97e462db10d7563f8ac94c5c3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d414c07ee0bcdd6f7fd4fbf16aaf40770c4a48ef6983a9b6962f2a680e1b64e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d414c07ee0bcdd6f7fd4fbf16aaf40770c4a48ef6983a9b6962f2a680e1b64e5->enter($__internal_d414c07ee0bcdd6f7fd4fbf16aaf40770c4a48ef6983a9b6962f2a680e1b64e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adress/edit.html.twig"));

        // line 4
        echo "<h1 class=\"page-header\">modifier contact</h1>
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
        
        $__internal_d414c07ee0bcdd6f7fd4fbf16aaf40770c4a48ef6983a9b6962f2a680e1b64e5->leave($__internal_d414c07ee0bcdd6f7fd4fbf16aaf40770c4a48ef6983a9b6962f2a680e1b64e5_prof);

    }

    public function getTemplateName()
    {
        return "adress/edit.html.twig";
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
<h1 class=\"page-header\">modifier contact</h1>
    {{form_start(form)}}
    {{form_widget(form)}}
    {{form_end(form)}}
{% endblock %}
", "adress/edit.html.twig", "/var/www/adressBook_1/app/Resources/views/adress/edit.html.twig");
    }
}
