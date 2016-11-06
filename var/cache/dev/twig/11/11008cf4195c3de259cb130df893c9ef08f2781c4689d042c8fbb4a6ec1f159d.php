<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_add4d4d7ab7d65fdcd7e5343a9335b7338db8c517a276c9b9d684bf0931039d8 extends Twig_Template
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
        $__internal_9235f0395e943f8ab2bbe0f64e897ceda8a948bbd7c3bf79ce9d06c42be42a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9235f0395e943f8ab2bbe0f64e897ceda8a948bbd7c3bf79ce9d06c42be42a48->enter($__internal_9235f0395e943f8ab2bbe0f64e897ceda8a948bbd7c3bf79ce9d06c42be42a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9235f0395e943f8ab2bbe0f64e897ceda8a948bbd7c3bf79ce9d06c42be42a48->leave($__internal_9235f0395e943f8ab2bbe0f64e897ceda8a948bbd7c3bf79ce9d06c42be42a48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
