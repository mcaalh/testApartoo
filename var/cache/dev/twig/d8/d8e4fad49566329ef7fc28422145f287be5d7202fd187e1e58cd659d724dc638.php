<?php

/* FOSUserBundle::base.html.twig */
class __TwigTemplate_6bd69fc418df7cff6a7acaa8b034bb475165df78abcab8a9b6834636d6da63dc extends Twig_Template
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
        $__internal_9a0cb0716d35c2839a051fddbcc8099da9b04c41b24c9cb6e0fbebb78ebaf0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0cb0716d35c2839a051fddbcc8099da9b04c41b24c9cb6e0fbebb78ebaf0de->enter($__internal_9a0cb0716d35c2839a051fddbcc8099da9b04c41b24c9cb6e0fbebb78ebaf0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->

        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "

        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_9a0cb0716d35c2839a051fddbcc8099da9b04c41b24c9cb6e0fbebb78ebaf0de->leave($__internal_9a0cb0716d35c2839a051fddbcc8099da9b04c41b24c9cb6e0fbebb78ebaf0de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7bdf59325028bef0d8facf186c7268c38a3185c7cc80dfc309f5e0d66ead575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bdf59325028bef0d8facf186c7268c38a3185c7cc80dfc309f5e0d66ead575->enter($__internal_a7bdf59325028bef0d8facf186c7268c38a3185c7cc80dfc309f5e0d66ead575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::base.html.twig"));

        echo "Welcome!";
        
        $__internal_a7bdf59325028bef0d8facf186c7268c38a3185c7cc80dfc309f5e0d66ead575->leave($__internal_a7bdf59325028bef0d8facf186c7268c38a3185c7cc80dfc309f5e0d66ead575_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4d095108e28b1acca3a486b0d5b10a3061c911a1f7341a16d12ff0d0fa26cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d095108e28b1acca3a486b0d5b10a3061c911a1f7341a16d12ff0d0fa26cff->enter($__internal_c4d095108e28b1acca3a486b0d5b10a3061c911a1f7341a16d12ff0d0fa26cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::base.html.twig"));

        
        $__internal_c4d095108e28b1acca3a486b0d5b10a3061c911a1f7341a16d12ff0d0fa26cff->leave($__internal_c4d095108e28b1acca3a486b0d5b10a3061c911a1f7341a16d12ff0d0fa26cff_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_59b70cd82bcbd64c1e05fb19cfa6cc5883bdb25f974a03862743e362fc885453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b70cd82bcbd64c1e05fb19cfa6cc5883bdb25f974a03862743e362fc885453->enter($__internal_59b70cd82bcbd64c1e05fb19cfa6cc5883bdb25f974a03862743e362fc885453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::base.html.twig"));

        
        $__internal_59b70cd82bcbd64c1e05fb19cfa6cc5883bdb25f974a03862743e362fc885453->leave($__internal_59b70cd82bcbd64c1e05fb19cfa6cc5883bdb25f974a03862743e362fc885453_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18e49f025d82959f9814b3a0f020936b6a921960bfe3db3cab624acde8eac213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e49f025d82959f9814b3a0f020936b6a921960bfe3db3cab624acde8eac213->enter($__internal_18e49f025d82959f9814b3a0f020936b6a921960bfe3db3cab624acde8eac213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::base.html.twig"));

        
        $__internal_18e49f025d82959f9814b3a0f020936b6a921960bfe3db3cab624acde8eac213->leave($__internal_18e49f025d82959f9814b3a0f020936b6a921960bfe3db3cab624acde8eac213_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  119 => 42,  108 => 9,  96 => 5,  87 => 47,  85 => 46,  80 => 43,  78 => 42,  44 => 10,  42 => 9,  37 => 7,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}
    </head>
    <body>
            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->

        {% block body %}{% endblock %}


        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "FOSUserBundle::base.html.twig", "/var/www/adressBook/app/Resources/FOSUserBundle/views/base.html.twig");
    }
}
