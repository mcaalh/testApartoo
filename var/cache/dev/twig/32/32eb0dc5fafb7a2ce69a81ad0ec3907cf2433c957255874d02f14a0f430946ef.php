<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bcb1d614a665fb35b0fd3d262debc7da3bc4bf16ac587f65cc2ec9355021b699 extends Twig_Template
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
        $__internal_9cf93e27b0ff1c5ffc4f16e2c2600b82d47f64b02930f53ec34a3f88db8ba622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf93e27b0ff1c5ffc4f16e2c2600b82d47f64b02930f53ec34a3f88db8ba622->enter($__internal_9cf93e27b0ff1c5ffc4f16e2c2600b82d47f64b02930f53ec34a3f88db8ba622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9cf93e27b0ff1c5ffc4f16e2c2600b82d47f64b02930f53ec34a3f88db8ba622->leave($__internal_9cf93e27b0ff1c5ffc4f16e2c2600b82d47f64b02930f53ec34a3f88db8ba622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
