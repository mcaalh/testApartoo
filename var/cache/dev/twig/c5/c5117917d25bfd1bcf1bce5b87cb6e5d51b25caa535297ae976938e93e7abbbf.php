<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_39ba8623460b3696649aeb427df0a1f5229c8aa7e7501771e07f6a5be2291c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_87b1dccda2cd23e62725ac34b4201f1e66e4399c99fb1789a0f356570ac86c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b1dccda2cd23e62725ac34b4201f1e66e4399c99fb1789a0f356570ac86c60->enter($__internal_87b1dccda2cd23e62725ac34b4201f1e66e4399c99fb1789a0f356570ac86c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b1dccda2cd23e62725ac34b4201f1e66e4399c99fb1789a0f356570ac86c60->leave($__internal_87b1dccda2cd23e62725ac34b4201f1e66e4399c99fb1789a0f356570ac86c60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83bf8785add08b261d55a807ced46048f2a4d21fe9350cac6bb59247f9d96501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bf8785add08b261d55a807ced46048f2a4d21fe9350cac6bb59247f9d96501->enter($__internal_83bf8785add08b261d55a807ced46048f2a4d21fe9350cac6bb59247f9d96501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_83bf8785add08b261d55a807ced46048f2a4d21fe9350cac6bb59247f9d96501->leave($__internal_83bf8785add08b261d55a807ced46048f2a4d21fe9350cac6bb59247f9d96501_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
