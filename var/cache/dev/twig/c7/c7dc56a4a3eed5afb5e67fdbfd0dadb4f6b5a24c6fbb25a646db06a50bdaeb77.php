<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4829cd68332c53f5ea7258b267dd75c9cb14b519a3c1028ecc03e5d1d3924100 extends Twig_Template
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
        $__internal_59e4c23f28f7f5455089cf267ef94adc7e0dd8460327d7a058b70f10b8d70274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e4c23f28f7f5455089cf267ef94adc7e0dd8460327d7a058b70f10b8d70274->enter($__internal_59e4c23f28f7f5455089cf267ef94adc7e0dd8460327d7a058b70f10b8d70274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_59e4c23f28f7f5455089cf267ef94adc7e0dd8460327d7a058b70f10b8d70274->leave($__internal_59e4c23f28f7f5455089cf267ef94adc7e0dd8460327d7a058b70f10b8d70274_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
