<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_47f3d8ce11d5faf7b075c2d6b6a1a4c6ca6e7f5212fe37eb22235f1e95c7dcea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4e818928b4b206e9db2f34de498ffc428293a3849dfb2df9fc9d4e1ecb3fb3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e818928b4b206e9db2f34de498ffc428293a3849dfb2df9fc9d4e1ecb3fb3a3->enter($__internal_4e818928b4b206e9db2f34de498ffc428293a3849dfb2df9fc9d4e1ecb3fb3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e818928b4b206e9db2f34de498ffc428293a3849dfb2df9fc9d4e1ecb3fb3a3->leave($__internal_4e818928b4b206e9db2f34de498ffc428293a3849dfb2df9fc9d4e1ecb3fb3a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5be11bb9858603dc0ca4b77ddc8399bd001bfc02fe4ba24fa59928cd3724eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5be11bb9858603dc0ca4b77ddc8399bd001bfc02fe4ba24fa59928cd3724eea->enter($__internal_c5be11bb9858603dc0ca4b77ddc8399bd001bfc02fe4ba24fa59928cd3724eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c5be11bb9858603dc0ca4b77ddc8399bd001bfc02fe4ba24fa59928cd3724eea->leave($__internal_c5be11bb9858603dc0ca4b77ddc8399bd001bfc02fe4ba24fa59928cd3724eea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
