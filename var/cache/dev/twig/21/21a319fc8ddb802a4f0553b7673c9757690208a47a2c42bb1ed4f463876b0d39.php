<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_bf55c7491d1da6e317ff9957c0306292c4b91632d175c2a11f6ad0723baeb8da extends Twig_Template
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
        $__internal_279bcdbf003cdca2f6ec264cb3bdbe4b6ee6e47da3ee9cb4d512de4cc910e76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279bcdbf003cdca2f6ec264cb3bdbe4b6ee6e47da3ee9cb4d512de4cc910e76f->enter($__internal_279bcdbf003cdca2f6ec264cb3bdbe4b6ee6e47da3ee9cb4d512de4cc910e76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_279bcdbf003cdca2f6ec264cb3bdbe4b6ee6e47da3ee9cb4d512de4cc910e76f->leave($__internal_279bcdbf003cdca2f6ec264cb3bdbe4b6ee6e47da3ee9cb4d512de4cc910e76f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
