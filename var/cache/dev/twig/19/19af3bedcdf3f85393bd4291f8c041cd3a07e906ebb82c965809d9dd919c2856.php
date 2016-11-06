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
        $__internal_b39f39ab90873a8399711bce305cf70f181a0c8f14572dd2e65e1ca392f0d46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39f39ab90873a8399711bce305cf70f181a0c8f14572dd2e65e1ca392f0d46d->enter($__internal_b39f39ab90873a8399711bce305cf70f181a0c8f14572dd2e65e1ca392f0d46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39f39ab90873a8399711bce305cf70f181a0c8f14572dd2e65e1ca392f0d46d->leave($__internal_b39f39ab90873a8399711bce305cf70f181a0c8f14572dd2e65e1ca392f0d46d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25268da2ad8db457136f523f87f1ec7a98821d8c6db41a855b5d489d8119a318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25268da2ad8db457136f523f87f1ec7a98821d8c6db41a855b5d489d8119a318->enter($__internal_25268da2ad8db457136f523f87f1ec7a98821d8c6db41a855b5d489d8119a318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "<div class=\"card-panel light-blue darken-4\"><h1>Bienvenue sur AddressBook!</h1></div>
<p><h4>Creer votre compte et acceder au carnet d'adresse pour ajouter vos contact et/ou les modifier </h4></p>
";
        
        $__internal_25268da2ad8db457136f523f87f1ec7a98821d8c6db41a855b5d489d8119a318->leave($__internal_25268da2ad8db457136f523f87f1ec7a98821d8c6db41a855b5d489d8119a318_prof);

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
<div class=\"card-panel light-blue darken-4\"><h1>Bienvenue sur AddressBook!</h1></div>
<p><h4>Creer votre compte et acceder au carnet d'adresse pour ajouter vos contact et/ou les modifier </h4></p>
{% endblock %}
", "default/index.html.twig", "/var/www/adressBook_1/app/Resources/views/default/index.html.twig");
    }
}
