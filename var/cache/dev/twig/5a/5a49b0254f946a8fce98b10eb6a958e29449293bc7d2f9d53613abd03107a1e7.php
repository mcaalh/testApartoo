<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_441bbdb21af9855844a7e6ca5eff08c8aad182ade098bbdb9937bff7a2dfc678 extends Twig_Template
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
        $__internal_a588b13fdb190b3adc542f1a06d10e423474aefdc7e1646c6e6f4fbff8ca4339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a588b13fdb190b3adc542f1a06d10e423474aefdc7e1646c6e6f4fbff8ca4339->enter($__internal_a588b13fdb190b3adc542f1a06d10e423474aefdc7e1646c6e6f4fbff8ca4339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a588b13fdb190b3adc542f1a06d10e423474aefdc7e1646c6e6f4fbff8ca4339->leave($__internal_a588b13fdb190b3adc542f1a06d10e423474aefdc7e1646c6e6f4fbff8ca4339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
