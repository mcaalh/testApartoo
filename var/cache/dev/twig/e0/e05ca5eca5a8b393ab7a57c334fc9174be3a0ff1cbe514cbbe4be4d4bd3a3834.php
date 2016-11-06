<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_236439f6fd5abb460cb8ab7e6068f6236996bb7122b01c4a4c88f598df7d1b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2acdba7822c1745d1373d94180922cd6dbcff47fd1f207350689a2908db59327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acdba7822c1745d1373d94180922cd6dbcff47fd1f207350689a2908db59327->enter($__internal_2acdba7822c1745d1373d94180922cd6dbcff47fd1f207350689a2908db59327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acdba7822c1745d1373d94180922cd6dbcff47fd1f207350689a2908db59327->leave($__internal_2acdba7822c1745d1373d94180922cd6dbcff47fd1f207350689a2908db59327_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_849ee5563f105449fc27bed7aedce9b87ea86540684218f047baf28d18ac89b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849ee5563f105449fc27bed7aedce9b87ea86540684218f047baf28d18ac89b4->enter($__internal_849ee5563f105449fc27bed7aedce9b87ea86540684218f047baf28d18ac89b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_849ee5563f105449fc27bed7aedce9b87ea86540684218f047baf28d18ac89b4->leave($__internal_849ee5563f105449fc27bed7aedce9b87ea86540684218f047baf28d18ac89b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
