<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b9aa624d3903cde4f69c6c9915681e297f5fdb570aae3c61e8055c2036d8b017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8585665a8efdfbd28eb1199f20cbc2999340c7353ce47dd4ffb5501cf29b164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8585665a8efdfbd28eb1199f20cbc2999340c7353ce47dd4ffb5501cf29b164->enter($__internal_f8585665a8efdfbd28eb1199f20cbc2999340c7353ce47dd4ffb5501cf29b164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8585665a8efdfbd28eb1199f20cbc2999340c7353ce47dd4ffb5501cf29b164->leave($__internal_f8585665a8efdfbd28eb1199f20cbc2999340c7353ce47dd4ffb5501cf29b164_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe8f82bc36e6637dee1829b7c80faa0315fcb83c0646018917b2c89aa5bfc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8f82bc36e6637dee1829b7c80faa0315fcb83c0646018917b2c89aa5bfc70->enter($__internal_7fe8f82bc36e6637dee1829b7c80faa0315fcb83c0646018917b2c89aa5bfc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">Signup</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
    </div>
";
        
        $__internal_7fe8f82bc36e6637dee1829b7c80faa0315fcb83c0646018917b2c89aa5bfc70->leave($__internal_7fe8f82bc36e6637dee1829b7c80faa0315fcb83c0646018917b2c89aa5bfc70_prof);

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
        return array (  51 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">Signup</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
        </div>
    </div>
{% endblock body %}", "FOSUserBundle:Registration:register.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
