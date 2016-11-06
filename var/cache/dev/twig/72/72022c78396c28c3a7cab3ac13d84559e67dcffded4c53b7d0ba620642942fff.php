<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_10194b20e2142d80bc354ff305c552e61c080ac8e9600686ed2b735286ad90bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9faf4adbfe8392bff7689d3b85408fb9b93c624223ccd82429604fdb20fbc39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faf4adbfe8392bff7689d3b85408fb9b93c624223ccd82429604fdb20fbc39e->enter($__internal_9faf4adbfe8392bff7689d3b85408fb9b93c624223ccd82429604fdb20fbc39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9faf4adbfe8392bff7689d3b85408fb9b93c624223ccd82429604fdb20fbc39e->leave($__internal_9faf4adbfe8392bff7689d3b85408fb9b93c624223ccd82429604fdb20fbc39e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4acfdc5420ada40a6b492265b14d82a49cb3a5de2a346c6d8760572d76306130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acfdc5420ada40a6b492265b14d82a49cb3a5de2a346c6d8760572d76306130->enter($__internal_4acfdc5420ada40a6b492265b14d82a49cb3a5de2a346c6d8760572d76306130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4acfdc5420ada40a6b492265b14d82a49cb3a5de2a346c6d8760572d76306130->leave($__internal_4acfdc5420ada40a6b492265b14d82a49cb3a5de2a346c6d8760572d76306130_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
