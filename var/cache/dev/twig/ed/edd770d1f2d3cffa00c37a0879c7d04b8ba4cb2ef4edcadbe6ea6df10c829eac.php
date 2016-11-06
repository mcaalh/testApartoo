<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dd9c6a92c321e1988802a702ae5847cff900facf9fedc7c7a6b2024865eca00f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8de07afff6e104a8631718837adc8106200bf637b7aa7f619306deaf72a84cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de07afff6e104a8631718837adc8106200bf637b7aa7f619306deaf72a84cb8->enter($__internal_8de07afff6e104a8631718837adc8106200bf637b7aa7f619306deaf72a84cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de07afff6e104a8631718837adc8106200bf637b7aa7f619306deaf72a84cb8->leave($__internal_8de07afff6e104a8631718837adc8106200bf637b7aa7f619306deaf72a84cb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e375de72814bfb04573fbaf5cf633e83069eafffcdc1094ccbb8e2d16993dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e375de72814bfb04573fbaf5cf633e83069eafffcdc1094ccbb8e2d16993dbf->enter($__internal_0e375de72814bfb04573fbaf5cf633e83069eafffcdc1094ccbb8e2d16993dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0e375de72814bfb04573fbaf5cf633e83069eafffcdc1094ccbb8e2d16993dbf->leave($__internal_0e375de72814bfb04573fbaf5cf633e83069eafffcdc1094ccbb8e2d16993dbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
