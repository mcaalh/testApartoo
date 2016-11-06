<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_7692670dda086038b1df5f6e92cece61d4a6667b4dd95238f0218c0238e1de80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_39be52314efdd61e394f949245bbf6490ff9be87285720f0ac54d0a41b2224ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39be52314efdd61e394f949245bbf6490ff9be87285720f0ac54d0a41b2224ba->enter($__internal_39be52314efdd61e394f949245bbf6490ff9be87285720f0ac54d0a41b2224ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39be52314efdd61e394f949245bbf6490ff9be87285720f0ac54d0a41b2224ba->leave($__internal_39be52314efdd61e394f949245bbf6490ff9be87285720f0ac54d0a41b2224ba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea3c03a7b21f174c427248ebe4fc6be344a0615c803ad1cff5d416e11abf830d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3c03a7b21f174c427248ebe4fc6be344a0615c803ad1cff5d416e11abf830d->enter($__internal_ea3c03a7b21f174c427248ebe4fc6be344a0615c803ad1cff5d416e11abf830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ea3c03a7b21f174c427248ebe4fc6be344a0615c803ad1cff5d416e11abf830d->leave($__internal_ea3c03a7b21f174c427248ebe4fc6be344a0615c803ad1cff5d416e11abf830d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
