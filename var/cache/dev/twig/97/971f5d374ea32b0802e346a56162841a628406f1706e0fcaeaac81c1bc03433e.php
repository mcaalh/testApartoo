<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_00e7993016e903d07e71aee7d0e33db599f8f263391c5370e44fd49748cbc1c9 extends Twig_Template
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
        $__internal_6278cd05a6e8fcbd892cb9dddfe836e7c681770b293bb2e646d1501d7d91091b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6278cd05a6e8fcbd892cb9dddfe836e7c681770b293bb2e646d1501d7d91091b->enter($__internal_6278cd05a6e8fcbd892cb9dddfe836e7c681770b293bb2e646d1501d7d91091b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6278cd05a6e8fcbd892cb9dddfe836e7c681770b293bb2e646d1501d7d91091b->leave($__internal_6278cd05a6e8fcbd892cb9dddfe836e7c681770b293bb2e646d1501d7d91091b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1afa679643c40999722c6c9d737e7592bd994e8f8834e751524ee658e1f060a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afa679643c40999722c6c9d737e7592bd994e8f8834e751524ee658e1f060a5->enter($__internal_1afa679643c40999722c6c9d737e7592bd994e8f8834e751524ee658e1f060a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1afa679643c40999722c6c9d737e7592bd994e8f8834e751524ee658e1f060a5->leave($__internal_1afa679643c40999722c6c9d737e7592bd994e8f8834e751524ee658e1f060a5_prof);

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
