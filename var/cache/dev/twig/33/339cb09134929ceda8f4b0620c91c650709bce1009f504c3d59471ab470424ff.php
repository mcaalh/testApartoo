<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3574237f0b7a29c221a51f5ee288cc4f27678f39f52d3e098b7a25d3884f4b12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d17a9d259c37348afafbf92b31abc0daa7c09c4eb238034bed47f7c3ce054944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17a9d259c37348afafbf92b31abc0daa7c09c4eb238034bed47f7c3ce054944->enter($__internal_d17a9d259c37348afafbf92b31abc0daa7c09c4eb238034bed47f7c3ce054944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17a9d259c37348afafbf92b31abc0daa7c09c4eb238034bed47f7c3ce054944->leave($__internal_d17a9d259c37348afafbf92b31abc0daa7c09c4eb238034bed47f7c3ce054944_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27f2bef9b74d7e59cce95ff481ac7eba5b69c3f40a7f5244bc4308b2dac9ebbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f2bef9b74d7e59cce95ff481ac7eba5b69c3f40a7f5244bc4308b2dac9ebbe->enter($__internal_27f2bef9b74d7e59cce95ff481ac7eba5b69c3f40a7f5244bc4308b2dac9ebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_27f2bef9b74d7e59cce95ff481ac7eba5b69c3f40a7f5244bc4308b2dac9ebbe->leave($__internal_27f2bef9b74d7e59cce95ff481ac7eba5b69c3f40a7f5244bc4308b2dac9ebbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
