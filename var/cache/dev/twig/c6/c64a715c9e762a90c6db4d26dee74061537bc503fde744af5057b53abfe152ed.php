<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_957fef4de797cb92167ca85712ceb1e14532a9f60538f79c0a826ecee30e14ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a91d817ea581168c0a5309f6811e4eaadbc3f9ad867e2689e7ee8e62a828172a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91d817ea581168c0a5309f6811e4eaadbc3f9ad867e2689e7ee8e62a828172a->enter($__internal_a91d817ea581168c0a5309f6811e4eaadbc3f9ad867e2689e7ee8e62a828172a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91d817ea581168c0a5309f6811e4eaadbc3f9ad867e2689e7ee8e62a828172a->leave($__internal_a91d817ea581168c0a5309f6811e4eaadbc3f9ad867e2689e7ee8e62a828172a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9eac64011b49ff6431474994cb1fe51c96396c595bcc70bf5d52bd45ab000f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9eac64011b49ff6431474994cb1fe51c96396c595bcc70bf5d52bd45ab000f6->enter($__internal_e9eac64011b49ff6431474994cb1fe51c96396c595bcc70bf5d52bd45ab000f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 13
        echo "
<div>
    ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "</div>
";
        
        $__internal_e9eac64011b49ff6431474994cb1fe51c96396c595bcc70bf5d52bd45ab000f6->leave($__internal_e9eac64011b49ff6431474994cb1fe51c96396c595bcc70bf5d52bd45ab000f6_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fa82775e0fd1d0d0cbfefa7b921ac3f040c7c3305653677422ce9df2528e8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa82775e0fd1d0d0cbfefa7b921ac3f040c7c3305653677422ce9df2528e8a3->enter($__internal_7fa82775e0fd1d0d0cbfefa7b921ac3f040c7c3305653677422ce9df2528e8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 16
        echo "    ";
        
        $__internal_7fa82775e0fd1d0d0cbfefa7b921ac3f040c7c3305653677422ce9df2528e8a3->leave($__internal_7fa82775e0fd1d0d0cbfefa7b921ac3f040c7c3305653677422ce9df2528e8a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 16,  88 => 15,  80 => 17,  78 => 15,  74 => 13,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  43 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}

<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
