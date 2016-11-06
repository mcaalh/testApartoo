<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_435d3f70826e02c0922dff02a5150b72014c2cc31a766102d4917e3a5a10a15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7fa45eb4ec6887980bcbae0db2e36d823da9ba65b6a886c7cf520a4606759fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fa45eb4ec6887980bcbae0db2e36d823da9ba65b6a886c7cf520a4606759fb->enter($__internal_f7fa45eb4ec6887980bcbae0db2e36d823da9ba65b6a886c7cf520a4606759fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f7fa45eb4ec6887980bcbae0db2e36d823da9ba65b6a886c7cf520a4606759fb->leave($__internal_f7fa45eb4ec6887980bcbae0db2e36d823da9ba65b6a886c7cf520a4606759fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
