<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4ab8e2b045d8f8d03aceda1028ab3749b60fb271183e590b2f09f1a376e10bdd extends Twig_Template
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
        $__internal_c3a764e3d1f31d81a16c86d08721c911ef1d8f66cadd821fe863f7d49c29569a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a764e3d1f31d81a16c86d08721c911ef1d8f66cadd821fe863f7d49c29569a->enter($__internal_c3a764e3d1f31d81a16c86d08721c911ef1d8f66cadd821fe863f7d49c29569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c3a764e3d1f31d81a16c86d08721c911ef1d8f66cadd821fe863f7d49c29569a->leave($__internal_c3a764e3d1f31d81a16c86d08721c911ef1d8f66cadd821fe863f7d49c29569a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
