<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_548e46893541c256be12827d1bbb4c92347208daed45531f18038cc218b1b11e extends Twig_Template
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
        $__internal_2cad388ae5d012b9064e38f6bf4eef28223e5c611dc628cdc113a1666a0ae2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cad388ae5d012b9064e38f6bf4eef28223e5c611dc628cdc113a1666a0ae2f9->enter($__internal_2cad388ae5d012b9064e38f6bf4eef28223e5c611dc628cdc113a1666a0ae2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2cad388ae5d012b9064e38f6bf4eef28223e5c611dc628cdc113a1666a0ae2f9->leave($__internal_2cad388ae5d012b9064e38f6bf4eef28223e5c611dc628cdc113a1666a0ae2f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
