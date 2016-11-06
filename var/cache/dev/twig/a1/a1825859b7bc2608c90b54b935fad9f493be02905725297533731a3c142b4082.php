<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_abea27c89699cd838e96b11aa9ba027b73cb70cc0bd7a23e97d70b3d2ae11756 extends Twig_Template
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
        $__internal_c645d86c6a9202d0039109fa498efa33a4257d5f201e4ade2c79311e7e1a7a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c645d86c6a9202d0039109fa498efa33a4257d5f201e4ade2c79311e7e1a7a7f->enter($__internal_c645d86c6a9202d0039109fa498efa33a4257d5f201e4ade2c79311e7e1a7a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c645d86c6a9202d0039109fa498efa33a4257d5f201e4ade2c79311e7e1a7a7f->leave($__internal_c645d86c6a9202d0039109fa498efa33a4257d5f201e4ade2c79311e7e1a7a7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
