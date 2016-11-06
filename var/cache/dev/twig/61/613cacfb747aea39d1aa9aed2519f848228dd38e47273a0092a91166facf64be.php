<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_f40c20067f84cbecb8c84672c6b6f62c0fa0a37d3a89c635a96805ba67f44a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_c58064eae1b18c93d2b656358002ca44c281719e80e53009a30a242a58f58494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58064eae1b18c93d2b656358002ca44c281719e80e53009a30a242a58f58494->enter($__internal_c58064eae1b18c93d2b656358002ca44c281719e80e53009a30a242a58f58494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58064eae1b18c93d2b656358002ca44c281719e80e53009a30a242a58f58494->leave($__internal_c58064eae1b18c93d2b656358002ca44c281719e80e53009a30a242a58f58494_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_549aa5a39446960051275feeea03544dd4d73238e32a25f8ea0bd6dee55df38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549aa5a39446960051275feeea03544dd4d73238e32a25f8ea0bd6dee55df38e->enter($__internal_549aa5a39446960051275feeea03544dd4d73238e32a25f8ea0bd6dee55df38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_549aa5a39446960051275feeea03544dd4d73238e32a25f8ea0bd6dee55df38e->leave($__internal_549aa5a39446960051275feeea03544dd4d73238e32a25f8ea0bd6dee55df38e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
