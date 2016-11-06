<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_97b5cc3411a2015c37c386d1ab44c8167a64d19d7958db04d8e835e1e24a7158 extends Twig_Template
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
        $__internal_ed084657bcf2d7de8bfd287d04909d1162ddc439dd6024971da84308d6fa28c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed084657bcf2d7de8bfd287d04909d1162ddc439dd6024971da84308d6fa28c9->enter($__internal_ed084657bcf2d7de8bfd287d04909d1162ddc439dd6024971da84308d6fa28c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ed084657bcf2d7de8bfd287d04909d1162ddc439dd6024971da84308d6fa28c9->leave($__internal_ed084657bcf2d7de8bfd287d04909d1162ddc439dd6024971da84308d6fa28c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
