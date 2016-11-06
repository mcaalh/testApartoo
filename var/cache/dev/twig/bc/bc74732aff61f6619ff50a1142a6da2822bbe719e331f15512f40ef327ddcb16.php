<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_99e7d4311d9a6397adea21d73ac9884b4f4968409e1d41f12a59ac9f854104f6 extends Twig_Template
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
        $__internal_e5aa8645891fdafac1732424d0e6c0eab2dc533905633c97084495ed62f7928b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5aa8645891fdafac1732424d0e6c0eab2dc533905633c97084495ed62f7928b->enter($__internal_e5aa8645891fdafac1732424d0e6c0eab2dc533905633c97084495ed62f7928b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "register")));
        echo "
  <div class=\"row\">
    <div class=\"input-field col s12\">
      ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
      ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
    </div>
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
  </div>
  <div class=\"row\">
    <div class=\"input-field col s12\">
      ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
    </div>
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
      ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
    </div>
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
      ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
    </div>
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
      ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
    </div>
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
  </div>
  <div align=\"center\" class=\"button-wrap\">
    <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">
      ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
      <i class=\"material-icons\">send</i>
    </button>
  </div>
";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_e5aa8645891fdafac1732424d0e6c0eab2dc533905633c97084495ed62f7928b->leave($__internal_e5aa8645891fdafac1732424d0e6c0eab2dc533905633c97084495ed62f7928b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  108 => 40,  101 => 36,  96 => 34,  92 => 33,  85 => 29,  80 => 27,  76 => 26,  69 => 22,  64 => 20,  60 => 19,  53 => 15,  48 => 13,  44 => 12,  37 => 8,  32 => 6,  28 => 5,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{{form_start(form, {'method': 'POST', 'attr':{'class': 'register'}})}}
  <div class=\"row\">
    <div class=\"input-field col s12\">
      {{ form_label(form.username) }}
      {{ form_widget(form.username) }}
    </div>
    {{ form_errors(form.username) }}
  </div>
  <div class=\"row\">
    <div class=\"input-field col s12\">
      {{ form_label(form.nom) }}
      {{ form_widget(form.nom) }}
    </div>
    {{ form_errors(form.username) }}
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      {{ form_label(form.email) }}
      {{ form_widget(form.email) }}
    </div>
    {{ form_errors(form.email) }}
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      {{ form_label(form.plainPassword.first) }}
      {{ form_widget(form.plainPassword.first) }}
    </div>
    {{ form_errors(form.plainPassword.first) }}
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      {{ form_label(form.plainPassword.second) }}
      {{ form_widget(form.plainPassword.second) }}
    </div>
    {{ form_errors(form.plainPassword.second) }}
  </div>
  <div align=\"center\" class=\"button-wrap\">
    <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">
      {{ 'registration.submit'|trans }}
      <i class=\"material-icons\">send</i>
    </button>
  </div>
{{ form_end(form) }}", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
