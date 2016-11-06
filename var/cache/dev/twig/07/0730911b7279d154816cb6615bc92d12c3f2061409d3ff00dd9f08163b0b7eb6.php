<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1d62ca4a3c9e9c6ce61d04f0f8602daaacccb8a2b4a72d67f7ed971f68ce31cb extends Twig_Template
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
        $__internal_b3871f9e959968d4f4c15cb6b013032edbf98973df50eb1ab6dd5e93f74db29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3871f9e959968d4f4c15cb6b013032edbf98973df50eb1ab6dd5e93f74db29f->enter($__internal_b3871f9e959968d4f4c15cb6b013032edbf98973df50eb1ab6dd5e93f74db29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b3871f9e959968d4f4c15cb6b013032edbf98973df50eb1ab6dd5e93f74db29f->leave($__internal_b3871f9e959968d4f4c15cb6b013032edbf98973df50eb1ab6dd5e93f74db29f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
