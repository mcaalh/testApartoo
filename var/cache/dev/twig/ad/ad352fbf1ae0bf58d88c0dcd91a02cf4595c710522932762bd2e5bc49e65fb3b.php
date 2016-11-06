<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cf7034ef980c98ea3773cc98b8ee5fe971167635064e6ca471fe443cd5a9ab83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_29434a265d480ab5c158c1cd821b792d26d5e9adb1cb86dada3e4360e9f45893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29434a265d480ab5c158c1cd821b792d26d5e9adb1cb86dada3e4360e9f45893->enter($__internal_29434a265d480ab5c158c1cd821b792d26d5e9adb1cb86dada3e4360e9f45893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29434a265d480ab5c158c1cd821b792d26d5e9adb1cb86dada3e4360e9f45893->leave($__internal_29434a265d480ab5c158c1cd821b792d26d5e9adb1cb86dada3e4360e9f45893_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f77e0ebbe22cfe342b2d995067b946a5b4a76b3aefad1c9ab734f7c28827c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f77e0ebbe22cfe342b2d995067b946a5b4a76b3aefad1c9ab734f7c28827c9e->enter($__internal_0f77e0ebbe22cfe342b2d995067b946a5b4a76b3aefad1c9ab734f7c28827c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0f77e0ebbe22cfe342b2d995067b946a5b4a76b3aefad1c9ab734f7c28827c9e->leave($__internal_0f77e0ebbe22cfe342b2d995067b946a5b4a76b3aefad1c9ab734f7c28827c9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
