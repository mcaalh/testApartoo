<?php

/* adress/details.html.twig */
class __TwigTemplate_c1a909a63c9c893b663f90e0c36d6cc92299ec0443bbd82a9b7b51be2ea143f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/details.html.twig", 1);
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
        $__internal_ac3c6835f5134365de92680d76c6e201cc8204e34f2bf087aacefe4280d85b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3c6835f5134365de92680d76c6e201cc8204e34f2bf087aacefe4280d85b30->enter($__internal_ac3c6835f5134365de92680d76c6e201cc8204e34f2bf087aacefe4280d85b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3c6835f5134365de92680d76c6e201cc8204e34f2bf087aacefe4280d85b30->leave($__internal_ac3c6835f5134365de92680d76c6e201cc8204e34f2bf087aacefe4280d85b30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2544fc32f54d39c493bb04414eaf456499eebee85e0be4e6ddf935cfd06d9ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2544fc32f54d39c493bb04414eaf456499eebee85e0be4e6ddf935cfd06d9ae3->enter($__internal_2544fc32f54d39c493bb04414eaf456499eebee85e0be4e6ddf935cfd06d9ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adress/details.html.twig"));

        // line 4
        echo "    <a href=\"/adressbook\" class='btn'>retour a la liste de contact</a>
    <hr>
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"collection\">
        <li class=\"collection-item\">adresse: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "adresse", array()), "html", null, true);
        echo "</li>
        <li class=\"collection-item\">telephone: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "telephone", array()), "html", null, true);
        echo "</li>
        <li class=\"collection-item\">website: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "website", array()), "html", null, true);
        echo "</li>
        <li class=\"collection-item\">email: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "email", array()), "html", null, true);
        echo "</li>

    </ul>
";
        
        $__internal_2544fc32f54d39c493bb04414eaf456499eebee85e0be4e6ddf935cfd06d9ae3->leave($__internal_2544fc32f54d39c493bb04414eaf456499eebee85e0be4e6ddf935cfd06d9ae3_prof);

    }

    public function getTemplateName()
    {
        return "adress/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <a href=\"/adressbook\" class='btn'>retour a la liste de contact</a>
    <hr>
    <h2>{{adresse.name}}</h2>
    <ul class=\"collection\">
        <li class=\"collection-item\">adresse: {{adresse.adresse}}</li>
        <li class=\"collection-item\">telephone: {{adresse.telephone}}</li>
        <li class=\"collection-item\">website: {{adresse.website}}</li>
        <li class=\"collection-item\">email: {{adresse.email}}</li>

    </ul>
{% endblock %}
", "adress/details.html.twig", "/var/www/adressBook_1/app/Resources/views/adress/details.html.twig");
    }
}
