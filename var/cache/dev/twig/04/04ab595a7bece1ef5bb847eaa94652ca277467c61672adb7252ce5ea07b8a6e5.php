<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1ea129f216a615b913da8deb5ba7a130f6cb04ab03d10b336d6e082c42a314e1 extends Twig_Template
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
        $__internal_31e29fa7a1c18d88f8ce2caf4c5d32ff702026739cc8bceaa6846f677a9c9a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e29fa7a1c18d88f8ce2caf4c5d32ff702026739cc8bceaa6846f677a9c9a70->enter($__internal_31e29fa7a1c18d88f8ce2caf4c5d32ff702026739cc8bceaa6846f677a9c9a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_31e29fa7a1c18d88f8ce2caf4c5d32ff702026739cc8bceaa6846f677a9c9a70->leave($__internal_31e29fa7a1c18d88f8ce2caf4c5d32ff702026739cc8bceaa6846f677a9c9a70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
