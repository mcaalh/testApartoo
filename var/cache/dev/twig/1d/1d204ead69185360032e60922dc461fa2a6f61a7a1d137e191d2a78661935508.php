<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0324da3bf0265d083cc1371f67bd5d065f52bca647ff8ab16d64b113677ee40b extends Twig_Template
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
        $__internal_f91723c28efe3e8af4f820d467e821036ac0d401b3a44ce9f48395a4cdf0d78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91723c28efe3e8af4f820d467e821036ac0d401b3a44ce9f48395a4cdf0d78f->enter($__internal_f91723c28efe3e8af4f820d467e821036ac0d401b3a44ce9f48395a4cdf0d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f91723c28efe3e8af4f820d467e821036ac0d401b3a44ce9f48395a4cdf0d78f->leave($__internal_f91723c28efe3e8af4f820d467e821036ac0d401b3a44ce9f48395a4cdf0d78f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/adressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
