<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c61e4d453816d19e92bd60a6291e376f0118f26a650566d492d624be11256b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e0ea8a18a5c67cdcdcb6dd49d10d9843487b54e5f49668e87c6cdb4637590849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ea8a18a5c67cdcdcb6dd49d10d9843487b54e5f49668e87c6cdb4637590849->enter($__internal_e0ea8a18a5c67cdcdcb6dd49d10d9843487b54e5f49668e87c6cdb4637590849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ea8a18a5c67cdcdcb6dd49d10d9843487b54e5f49668e87c6cdb4637590849->leave($__internal_e0ea8a18a5c67cdcdcb6dd49d10d9843487b54e5f49668e87c6cdb4637590849_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10e6d7d80b2b259241d37734793dd7cb94fed4888c71258b2006ce7d8a21429a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e6d7d80b2b259241d37734793dd7cb94fed4888c71258b2006ce7d8a21429a->enter($__internal_10e6d7d80b2b259241d37734793dd7cb94fed4888c71258b2006ce7d8a21429a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_10e6d7d80b2b259241d37734793dd7cb94fed4888c71258b2006ce7d8a21429a->leave($__internal_10e6d7d80b2b259241d37734793dd7cb94fed4888c71258b2006ce7d8a21429a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
