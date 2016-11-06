<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bee19a4a4c6f799aa75f0fc8448af4fa5dfe7e7a0447591f83b700407cea1583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72244d8f4448cdb3c58bcf9a9d70657e8ac26850de76a881b9909095540aa391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72244d8f4448cdb3c58bcf9a9d70657e8ac26850de76a881b9909095540aa391->enter($__internal_72244d8f4448cdb3c58bcf9a9d70657e8ac26850de76a881b9909095540aa391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_72244d8f4448cdb3c58bcf9a9d70657e8ac26850de76a881b9909095540aa391->leave($__internal_72244d8f4448cdb3c58bcf9a9d70657e8ac26850de76a881b9909095540aa391_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aa175862c73edc29ba03d599058ee1c99f09a8897d72b71e1816ae32ba65c8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa175862c73edc29ba03d599058ee1c99f09a8897d72b71e1816ae32ba65c8bd->enter($__internal_aa175862c73edc29ba03d599058ee1c99f09a8897d72b71e1816ae32ba65c8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aa175862c73edc29ba03d599058ee1c99f09a8897d72b71e1816ae32ba65c8bd->leave($__internal_aa175862c73edc29ba03d599058ee1c99f09a8897d72b71e1816ae32ba65c8bd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_687afb0f7228e86039eba8ae7af1e3b22ab1b81c8e68cf69d3b01e61eefa3b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687afb0f7228e86039eba8ae7af1e3b22ab1b81c8e68cf69d3b01e61eefa3b63->enter($__internal_687afb0f7228e86039eba8ae7af1e3b22ab1b81c8e68cf69d3b01e61eefa3b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_687afb0f7228e86039eba8ae7af1e3b22ab1b81c8e68cf69d3b01e61eefa3b63->leave($__internal_687afb0f7228e86039eba8ae7af1e3b22ab1b81c8e68cf69d3b01e61eefa3b63_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3c764bf55014d7a18c9f73f18bc9adbb162c38755c79292b76cccf9d1f42fddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c764bf55014d7a18c9f73f18bc9adbb162c38755c79292b76cccf9d1f42fddf->enter($__internal_3c764bf55014d7a18c9f73f18bc9adbb162c38755c79292b76cccf9d1f42fddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_3c764bf55014d7a18c9f73f18bc9adbb162c38755c79292b76cccf9d1f42fddf->leave($__internal_3c764bf55014d7a18c9f73f18bc9adbb162c38755c79292b76cccf9d1f42fddf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
