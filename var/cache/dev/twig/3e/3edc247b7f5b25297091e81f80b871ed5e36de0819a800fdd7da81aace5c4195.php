<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_80aa85c9342b5734ac08499604ef7cfb25b9a72df65b68cea2612f7e06ffbd02 extends Twig_Template
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
        $__internal_b1ec824ed0f3c5c4c62b1b82829615602fbfbee24e96f4910f4b2f92727d0365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ec824ed0f3c5c4c62b1b82829615602fbfbee24e96f4910f4b2f92727d0365->enter($__internal_b1ec824ed0f3c5c4c62b1b82829615602fbfbee24e96f4910f4b2f92727d0365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b1ec824ed0f3c5c4c62b1b82829615602fbfbee24e96f4910f4b2f92727d0365->leave($__internal_b1ec824ed0f3c5c4c62b1b82829615602fbfbee24e96f4910f4b2f92727d0365_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
