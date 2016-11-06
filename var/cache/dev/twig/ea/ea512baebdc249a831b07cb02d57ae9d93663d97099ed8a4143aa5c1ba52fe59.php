<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_84eb11c7eb76c970ce291388f6158b829e58a2f45c01d4d508c0a3c0f407e7a6 extends Twig_Template
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
        $__internal_8c0147209eda1f7966eb3bb843ca8e613bc44dd82d4ffca6fceb6e72f5271e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0147209eda1f7966eb3bb843ca8e613bc44dd82d4ffca6fceb6e72f5271e19->enter($__internal_8c0147209eda1f7966eb3bb843ca8e613bc44dd82d4ffca6fceb6e72f5271e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8c0147209eda1f7966eb3bb843ca8e613bc44dd82d4ffca6fceb6e72f5271e19->leave($__internal_8c0147209eda1f7966eb3bb843ca8e613bc44dd82d4ffca6fceb6e72f5271e19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
