<?php

/* FOSUserBundle:default:test.html.twig */
class __TwigTemplate_587ecc555940d4f7250aad607e23654d6ef74adedafdca0c2d8d9086d7f95121 extends Twig_Template
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
        $__internal_3e8fea7b173c387e557f346bdc527aac0c6a6cfc69e01938e40c9fd511c392c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8fea7b173c387e557f346bdc527aac0c6a6cfc69e01938e40c9fd511c392c1->enter($__internal_3e8fea7b173c387e557f346bdc527aac0c6a6cfc69e01938e40c9fd511c392c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:default:test.html.twig"));

        // line 1
        echo "<p>test aat</p>";
        
        $__internal_3e8fea7b173c387e557f346bdc527aac0c6a6cfc69e01938e40c9fd511c392c1->leave($__internal_3e8fea7b173c387e557f346bdc527aac0c6a6cfc69e01938e40c9fd511c392c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:default:test.html.twig";
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
        return new Twig_Source("<p>test aat</p>", "FOSUserBundle:default:test.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/default/test.html.twig");
    }
}
