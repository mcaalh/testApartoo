<?php

/* base.html.twig */
class __TwigTemplate_63390750636bd8856425fa762941910301e4ce24272ec1da6549754fd543abe9 extends Twig_Template
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
        $__internal_acec1d5e5aa7f7639100f3ce2001b99b33edfdd373748109505f58e915e6515d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acec1d5e5aa7f7639100f3ce2001b99b33edfdd373748109505f58e915e6515d->enter($__internal_acec1d5e5aa7f7639100f3ce2001b99b33edfdd373748109505f58e915e6515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"/\" class=\"brand-logo\">AddressBook</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/adressbook\">Carnet d'adresse</a></li>
        <li><a href=\"/adressbook/create\">Ajouter un contact</a></li>
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
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 37
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 39
        echo "        </div>

  <div class=\"container\">
  ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
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
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "  </body>
</html>";
        
        $__internal_acec1d5e5aa7f7639100f3ce2001b99b33edfdd373748109505f58e915e6515d->leave($__internal_acec1d5e5aa7f7639100f3ce2001b99b33edfdd373748109505f58e915e6515d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_07b215b0db39202deec3be24e9148cb8d7e3369bf72f2efce1cb267d0ded822b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b215b0db39202deec3be24e9148cb8d7e3369bf72f2efce1cb267d0ded822b->enter($__internal_07b215b0db39202deec3be24e9148cb8d7e3369bf72f2efce1cb267d0ded822b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_07b215b0db39202deec3be24e9148cb8d7e3369bf72f2efce1cb267d0ded822b->leave($__internal_07b215b0db39202deec3be24e9148cb8d7e3369bf72f2efce1cb267d0ded822b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02c226f10f5024b7aa510a9843351103bdff677b51eeeb8674e92332c2307cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c226f10f5024b7aa510a9843351103bdff677b51eeeb8674e92332c2307cf3->enter($__internal_02c226f10f5024b7aa510a9843351103bdff677b51eeeb8674e92332c2307cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_02c226f10f5024b7aa510a9843351103bdff677b51eeeb8674e92332c2307cf3->leave($__internal_02c226f10f5024b7aa510a9843351103bdff677b51eeeb8674e92332c2307cf3_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ca66976f272803d94d10a6f938448d5fa95eba73949452de9c44cb465db288f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca66976f272803d94d10a6f938448d5fa95eba73949452de9c44cb465db288f->enter($__internal_4ca66976f272803d94d10a6f938448d5fa95eba73949452de9c44cb465db288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_4ca66976f272803d94d10a6f938448d5fa95eba73949452de9c44cb465db288f->leave($__internal_4ca66976f272803d94d10a6f938448d5fa95eba73949452de9c44cb465db288f_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84c3afc022f5e79c2c160328a1165d8ffc6f59bfce3e8bd2d8059833289a88fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c3afc022f5e79c2c160328a1165d8ffc6f59bfce3e8bd2d8059833289a88fc->enter($__internal_84c3afc022f5e79c2c160328a1165d8ffc6f59bfce3e8bd2d8059833289a88fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_84c3afc022f5e79c2c160328a1165d8ffc6f59bfce3e8bd2d8059833289a88fc->leave($__internal_84c3afc022f5e79c2c160328a1165d8ffc6f59bfce3e8bd2d8059833289a88fc_prof);

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
        return array (  165 => 64,  154 => 42,  143 => 11,  131 => 6,  123 => 65,  121 => 64,  98 => 43,  96 => 42,  91 => 39,  83 => 37,  77 => 34,  73 => 33,  68 => 32,  66 => 31,  43 => 12,  41 => 11,  33 => 6,  26 => 1,);
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
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"/\" class=\"brand-logo\">AddressBook</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/adressbook\">Carnet d'adresse</a></li>
        <li><a href=\"/adressbook/create\">Ajouter un contact</a></li>
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
</html>", "base.html.twig", "/var/www/adressBook_1/app/Resources/views/base.html.twig");
    }
}
