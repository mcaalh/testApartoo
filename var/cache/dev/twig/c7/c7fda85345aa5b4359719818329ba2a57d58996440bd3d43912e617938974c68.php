<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e73b15f6f14999019f883c1d68b315e0eb9709d5b7dcc0e4b7d0fc6956a215c9 extends Twig_Template
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
        $__internal_ae3a274e35080df863132edcebcbd6c1931c25c08fedcc16f67adb4ecfd5466a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3a274e35080df863132edcebcbd6c1931c25c08fedcc16f67adb4ecfd5466a->enter($__internal_ae3a274e35080df863132edcebcbd6c1931c25c08fedcc16f67adb4ecfd5466a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ae3a274e35080df863132edcebcbd6c1931c25c08fedcc16f67adb4ecfd5466a->leave($__internal_ae3a274e35080df863132edcebcbd6c1931c25c08fedcc16f67adb4ecfd5466a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_91b4978eee695f3be1d257d20a2189b5b023ea843ccb4b30f4e22f34966bc15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b4978eee695f3be1d257d20a2189b5b023ea843ccb4b30f4e22f34966bc15d->enter($__internal_91b4978eee695f3be1d257d20a2189b5b023ea843ccb4b30f4e22f34966bc15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_91b4978eee695f3be1d257d20a2189b5b023ea843ccb4b30f4e22f34966bc15d->leave($__internal_91b4978eee695f3be1d257d20a2189b5b023ea843ccb4b30f4e22f34966bc15d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6e4c9ae4d2ac7f591f700796518023e54ed0363f4f7976ddfa43eaab0d833454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4c9ae4d2ac7f591f700796518023e54ed0363f4f7976ddfa43eaab0d833454->enter($__internal_6e4c9ae4d2ac7f591f700796518023e54ed0363f4f7976ddfa43eaab0d833454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6e4c9ae4d2ac7f591f700796518023e54ed0363f4f7976ddfa43eaab0d833454->leave($__internal_6e4c9ae4d2ac7f591f700796518023e54ed0363f4f7976ddfa43eaab0d833454_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_37dab81563c11b2c22b8ad22347939e3a662ba04c3b00c37079d57047a4377b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dab81563c11b2c22b8ad22347939e3a662ba04c3b00c37079d57047a4377b4->enter($__internal_37dab81563c11b2c22b8ad22347939e3a662ba04c3b00c37079d57047a4377b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_37dab81563c11b2c22b8ad22347939e3a662ba04c3b00c37079d57047a4377b4->leave($__internal_37dab81563c11b2c22b8ad22347939e3a662ba04c3b00c37079d57047a4377b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
