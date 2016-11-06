<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d336ce455b8e7ff1882cfa6875e9ca8efffd0a710df23140d77c680e2119bf29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7310817f03a01588e1d8154dae3130793c900dbd04c8d343d67ed70ed03c7ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7310817f03a01588e1d8154dae3130793c900dbd04c8d343d67ed70ed03c7ce7->enter($__internal_7310817f03a01588e1d8154dae3130793c900dbd04c8d343d67ed70ed03c7ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7310817f03a01588e1d8154dae3130793c900dbd04c8d343d67ed70ed03c7ce7->leave($__internal_7310817f03a01588e1d8154dae3130793c900dbd04c8d343d67ed70ed03c7ce7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3792ad96592be440f7f024031296ef1c08b3cf424203b7b97b11c0e0fe9b7ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3792ad96592be440f7f024031296ef1c08b3cf424203b7b97b11c0e0fe9b7ff7->enter($__internal_3792ad96592be440f7f024031296ef1c08b3cf424203b7b97b11c0e0fe9b7ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_3792ad96592be440f7f024031296ef1c08b3cf424203b7b97b11c0e0fe9b7ff7->leave($__internal_3792ad96592be440f7f024031296ef1c08b3cf424203b7b97b11c0e0fe9b7ff7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
