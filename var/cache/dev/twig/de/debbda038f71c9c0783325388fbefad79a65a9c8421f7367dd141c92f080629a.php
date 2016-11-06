<?php

/* base.html.twig */
class __TwigTemplate_2bf57d09e446991ff72489fed17af64044ec96489d8f137c28012c79721f8d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2c3ec48255a6f018b81356d75e3d994f89536cece53e63324d20bb47047fcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c3ec48255a6f018b81356d75e3d994f89536cece53e63324d20bb47047fcc6->enter($__internal_c2c3ec48255a6f018b81356d75e3d994f89536cece53e63324d20bb47047fcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  <nav class=\"\" role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/register\">Register</a></li>
      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"/register\">Register</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>

  <div>
            ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 35
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 37
        echo "        </div>

  <div class=\"container\">
  ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "  </div>
  <footer class=\"page-footer\">
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js\"></script>
  <script type=\"text/javascript\">
    (function(\$){
  \$(function(){

    \$('.button-collapse').sideNav();

  }); // end of document ready
    })(jQuery); // end of jQuery name space
  </script>
  ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "  </body>
</html>";
        
        $__internal_c2c3ec48255a6f018b81356d75e3d994f89536cece53e63324d20bb47047fcc6->leave($__internal_c2c3ec48255a6f018b81356d75e3d994f89536cece53e63324d20bb47047fcc6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6769e58b8da0bec51dd24f3f1c90bf927e28be0d7d95832636ba497a51508688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6769e58b8da0bec51dd24f3f1c90bf927e28be0d7d95832636ba497a51508688->enter($__internal_6769e58b8da0bec51dd24f3f1c90bf927e28be0d7d95832636ba497a51508688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_6769e58b8da0bec51dd24f3f1c90bf927e28be0d7d95832636ba497a51508688->leave($__internal_6769e58b8da0bec51dd24f3f1c90bf927e28be0d7d95832636ba497a51508688_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55801b939f1fbd4854e39646ee490877e7ba83dd01f12dfe98817acc72be219f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55801b939f1fbd4854e39646ee490877e7ba83dd01f12dfe98817acc72be219f->enter($__internal_55801b939f1fbd4854e39646ee490877e7ba83dd01f12dfe98817acc72be219f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_55801b939f1fbd4854e39646ee490877e7ba83dd01f12dfe98817acc72be219f->leave($__internal_55801b939f1fbd4854e39646ee490877e7ba83dd01f12dfe98817acc72be219f_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5cb003a01f8fb8cea0c92ec77908f5422450372fe992c81a024465b0672d8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cb003a01f8fb8cea0c92ec77908f5422450372fe992c81a024465b0672d8a6->enter($__internal_e5cb003a01f8fb8cea0c92ec77908f5422450372fe992c81a024465b0672d8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e5cb003a01f8fb8cea0c92ec77908f5422450372fe992c81a024465b0672d8a6->leave($__internal_e5cb003a01f8fb8cea0c92ec77908f5422450372fe992c81a024465b0672d8a6_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d880f68e8832156e30aead404e9c06470e6fba8823111f30046c2486108236b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d880f68e8832156e30aead404e9c06470e6fba8823111f30046c2486108236b8->enter($__internal_d880f68e8832156e30aead404e9c06470e6fba8823111f30046c2486108236b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d880f68e8832156e30aead404e9c06470e6fba8823111f30046c2486108236b8->leave($__internal_d880f68e8832156e30aead404e9c06470e6fba8823111f30046c2486108236b8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 62,  152 => 40,  141 => 11,  129 => 6,  121 => 63,  119 => 62,  96 => 41,  94 => 40,  89 => 37,  81 => 35,  75 => 32,  71 => 31,  66 => 30,  64 => 29,  43 => 12,  41 => 11,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>{% block title %}Welcome!{% endblock %}</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
  {% block stylesheets %}{% endblock %}
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
  <nav class=\"\" role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/register\">Register</a></li>
      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"/register\">Register</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>

  <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

  <div class=\"container\">
  {% block body %}{% endblock %}
  </div>
  <footer class=\"page-footer\">
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js\"></script>
  <script type=\"text/javascript\">
    (function(\$){
  \$(function(){

    \$('.button-collapse').sideNav();

  }); // end of document ready
    })(jQuery); // end of jQuery name space
  </script>
  {% block javascripts %}{% endblock %}
  </body>
</html>", "base.html.twig", "/var/www/adressBook/app/Resources/views/base.html.twig");
    }
}
