<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c9a37e35ef982159d809a253c88d45e9e9e2b4e56bfb998cb78c9f1809e29a47 extends Twig_Template
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
        $__internal_e458443c6f491bb856aa848aaed40037eb8688aab6cf943dd9b885b3c05befa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e458443c6f491bb856aa848aaed40037eb8688aab6cf943dd9b885b3c05befa9->enter($__internal_e458443c6f491bb856aa848aaed40037eb8688aab6cf943dd9b885b3c05befa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e458443c6f491bb856aa848aaed40037eb8688aab6cf943dd9b885b3c05befa9->leave($__internal_e458443c6f491bb856aa848aaed40037eb8688aab6cf943dd9b885b3c05befa9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be06b3e758f653e96d1a7a3f06eff191d2b7ffe96646faf495b80b4a7d3459ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be06b3e758f653e96d1a7a3f06eff191d2b7ffe96646faf495b80b4a7d3459ea->enter($__internal_be06b3e758f653e96d1a7a3f06eff191d2b7ffe96646faf495b80b4a7d3459ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_be06b3e758f653e96d1a7a3f06eff191d2b7ffe96646faf495b80b4a7d3459ea->leave($__internal_be06b3e758f653e96d1a7a3f06eff191d2b7ffe96646faf495b80b4a7d3459ea_prof);

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
