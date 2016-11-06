<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_72ec82d2ed9e757eec4cd55a01949c3c1ce75089031726e1a735302812cd0e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_9d605f2fe05b9a16b10d3fa3d3736346e67a9c4495837cc096d2272a068f29df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d605f2fe05b9a16b10d3fa3d3736346e67a9c4495837cc096d2272a068f29df->enter($__internal_9d605f2fe05b9a16b10d3fa3d3736346e67a9c4495837cc096d2272a068f29df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d605f2fe05b9a16b10d3fa3d3736346e67a9c4495837cc096d2272a068f29df->leave($__internal_9d605f2fe05b9a16b10d3fa3d3736346e67a9c4495837cc096d2272a068f29df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2205c3bf762c8ba6f210f51232adfa59e59afc573d778c60eb927bfd93f4a10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2205c3bf762c8ba6f210f51232adfa59e59afc573d778c60eb927bfd93f4a10e->enter($__internal_2205c3bf762c8ba6f210f51232adfa59e59afc573d778c60eb927bfd93f4a10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2205c3bf762c8ba6f210f51232adfa59e59afc573d778c60eb927bfd93f4a10e->leave($__internal_2205c3bf762c8ba6f210f51232adfa59e59afc573d778c60eb927bfd93f4a10e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
