<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_831631f5f0037d2c821f2af27e7de28239bd97c2c53c5692934580ad2377de5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_33d8d4984fd6db6398735054ee86b14034c4917a3dca1a77d338499257bec026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d8d4984fd6db6398735054ee86b14034c4917a3dca1a77d338499257bec026->enter($__internal_33d8d4984fd6db6398735054ee86b14034c4917a3dca1a77d338499257bec026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d8d4984fd6db6398735054ee86b14034c4917a3dca1a77d338499257bec026->leave($__internal_33d8d4984fd6db6398735054ee86b14034c4917a3dca1a77d338499257bec026_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b02c9a9fd04894d2c9dc9dd1c28b485e2dab9d4ad45413baa3b7397675139ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02c9a9fd04894d2c9dc9dd1c28b485e2dab9d4ad45413baa3b7397675139ac1->enter($__internal_b02c9a9fd04894d2c9dc9dd1c28b485e2dab9d4ad45413baa3b7397675139ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b02c9a9fd04894d2c9dc9dd1c28b485e2dab9d4ad45413baa3b7397675139ac1->leave($__internal_b02c9a9fd04894d2c9dc9dd1c28b485e2dab9d4ad45413baa3b7397675139ac1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
