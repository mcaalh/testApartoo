<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_531fa227aa5714e761a95a59e319656226683272b3087bc8fbe3d9f81f15f362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e4cd3adef89d51aa706af8160b4f7081829b4a23d8602a71b8ca0c017abc2cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cd3adef89d51aa706af8160b4f7081829b4a23d8602a71b8ca0c017abc2cbc->enter($__internal_e4cd3adef89d51aa706af8160b4f7081829b4a23d8602a71b8ca0c017abc2cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4cd3adef89d51aa706af8160b4f7081829b4a23d8602a71b8ca0c017abc2cbc->leave($__internal_e4cd3adef89d51aa706af8160b4f7081829b4a23d8602a71b8ca0c017abc2cbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50765809406117103843668fd6075cb379cdf228a7f35b12af06c4c548d1dd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50765809406117103843668fd6075cb379cdf228a7f35b12af06c4c548d1dd72->enter($__internal_50765809406117103843668fd6075cb379cdf228a7f35b12af06c4c548d1dd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_50765809406117103843668fd6075cb379cdf228a7f35b12af06c4c548d1dd72->leave($__internal_50765809406117103843668fd6075cb379cdf228a7f35b12af06c4c548d1dd72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
