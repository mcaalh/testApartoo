<?php

/* adress/index.html.twig */
class __TwigTemplate_af2459958692035162eef77e53eff709a3dc6e46209c060c44d8b350430806c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/index.html.twig", 1);
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
        $__internal_f14d860a572c544de76a27474fcfaa87f811af34ac19b8c6897f08a692c0e3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14d860a572c544de76a27474fcfaa87f811af34ac19b8c6897f08a692c0e3a3->enter($__internal_f14d860a572c544de76a27474fcfaa87f811af34ac19b8c6897f08a692c0e3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f14d860a572c544de76a27474fcfaa87f811af34ac19b8c6897f08a692c0e3a3->leave($__internal_f14d860a572c544de76a27474fcfaa87f811af34ac19b8c6897f08a692c0e3a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e52c77d582e4ec12ff08e11d70c85ac02c24fb1c4f5bebfd4a6e47f99693224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e52c77d582e4ec12ff08e11d70c85ac02c24fb1c4f5bebfd4a6e47f99693224->enter($__internal_9e52c77d582e4ec12ff08e11d70c85ac02c24fb1c4f5bebfd4a6e47f99693224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adress/index.html.twig"));

        // line 4
        echo "    <table class=\"responsive-table\">
    <thead>
    <tr>
        <th data-field=\"name\">Nom</th>
        <th data-field=\"adresse\">Adresse</th>
        <th data-field=\"telephone\">telephone</th>
        <th data-field=\"website\">Site Web</th>
        <th data-field=\"email\">email</th>
    </tr>
     </thead>
     <tbody>
     ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adress"]) ? $context["adress"] : $this->getContext($context, "adress")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 16
            echo "    <tr>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "name", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "adresse", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "telephone", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "website", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "email", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"/adressbook/details/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "id", array()), "html", null, true);
            echo "\" class=\"btn\">View</a>
        <a href=\"/adressbook/edit/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "id", array()), "html", null, true);
            echo "\" class=\"btn\">Edit</a>
        <a href=\"/adressbook/delete/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "id", array()), "html", null, true);
            echo "\" class=\"btn\">Delete</a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "     </tbody>
    </table>
";
        
        $__internal_9e52c77d582e4ec12ff08e11d70c85ac02c24fb1c4f5bebfd4a6e47f99693224->leave($__internal_9e52c77d582e4ec12ff08e11d70c85ac02c24fb1c4f5bebfd4a6e47f99693224_prof);

    }

    public function getTemplateName()
    {
        return "adress/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  89 => 25,  85 => 24,  81 => 23,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <table class=\"responsive-table\">
    <thead>
    <tr>
        <th data-field=\"name\">Nom</th>
        <th data-field=\"adresse\">Adresse</th>
        <th data-field=\"telephone\">telephone</th>
        <th data-field=\"website\">Site Web</th>
        <th data-field=\"email\">email</th>
    </tr>
     </thead>
     <tbody>
     {% for ad in adress %}
    <tr>
      <td>{{ad.name}}</td>
      <td>{{ad.adresse}}</td>
      <td>{{ad.telephone}}</td>
      <td>{{ad.website}}</td>
      <td>{{ad.email}}</td>
      <td>
        <a href=\"/adressbook/details/{{ad.id}}\" class=\"btn\">View</a>
        <a href=\"/adressbook/edit/{{ad.id}}\" class=\"btn\">Edit</a>
        <a href=\"/adressbook/delete/{{ad.id}}\" class=\"btn\">Delete</a>
      </td>
    </tr>
    {% endfor %}
     </tbody>
    </table>
{% endblock %}
", "adress/index.html.twig", "/var/www/adressBook_1/app/Resources/views/adress/index.html.twig");
    }
}
