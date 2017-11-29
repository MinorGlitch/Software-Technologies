<?php

/* base.html.twig */
class __TwigTemplate_4bc9cbd528f0b9c50a19d31f71c5967c7f87e37aec9f5353e36fce5120612c5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08160970120a6b52315cff22f3b17090332bd92ccd4fbb987978ba0e617d4c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08160970120a6b52315cff22f3b17090332bd92ccd4fbb987978ba0e617d4c70->enter($__internal_08160970120a6b52315cff22f3b17090332bd92ccd4fbb987978ba0e617d4c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_08160970120a6b52315cff22f3b17090332bd92ccd4fbb987978ba0e617d4c70->leave($__internal_08160970120a6b52315cff22f3b17090332bd92ccd4fbb987978ba0e617d4c70_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5707609873c652f819cac0ffd7e43808165a9f5d6c49f51804476f591a4e7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5707609873c652f819cac0ffd7e43808165a9f5d6c49f51804476f591a4e7a5->enter($__internal_d5707609873c652f819cac0ffd7e43808165a9f5d6c49f51804476f591a4e7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_d5707609873c652f819cac0ffd7e43808165a9f5d6c49f51804476f591a4e7a5->leave($__internal_d5707609873c652f819cac0ffd7e43808165a9f5d6c49f51804476f591a4e7a5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bff8893c0e514a39491c2cabe8534bc0fa2d69ca90acbc3932aea75f082f745a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff8893c0e514a39491c2cabe8534bc0fa2d69ca90acbc3932aea75f082f745a->enter($__internal_bff8893c0e514a39491c2cabe8534bc0fa2d69ca90acbc3932aea75f082f745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_bff8893c0e514a39491c2cabe8534bc0fa2d69ca90acbc3932aea75f082f745a->leave($__internal_bff8893c0e514a39491c2cabe8534bc0fa2d69ca90acbc3932aea75f082f745a_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a9ec1fc0900fc7b45590af8715d07e7a3929a5dcdb7abdfaf14a52398bee9faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ec1fc0900fc7b45590af8715d07e7a3929a5dcdb7abdfaf14a52398bee9faa->enter($__internal_a9ec1fc0900fc7b45590af8715d07e7a3929a5dcdb7abdfaf14a52398bee9faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_a9ec1fc0900fc7b45590af8715d07e7a3929a5dcdb7abdfaf14a52398bee9faa->leave($__internal_a9ec1fc0900fc7b45590af8715d07e7a3929a5dcdb7abdfaf14a52398bee9faa_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_2430f4e6b74900b69184bd54224cc5f8fefc888a02ce3f1b1338b1be799cea3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2430f4e6b74900b69184bd54224cc5f8fefc888a02ce3f1b1338b1be799cea3c->enter($__internal_2430f4e6b74900b69184bd54224cc5f8fefc888a02ce3f1b1338b1be799cea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_2430f4e6b74900b69184bd54224cc5f8fefc888a02ce3f1b1338b1be799cea3c->leave($__internal_2430f4e6b74900b69184bd54224cc5f8fefc888a02ce3f1b1338b1be799cea3c_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_618c1eeaedc2f30e3554be3c0aad8a6628a4a25b668efc919862a608d2fecab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618c1eeaedc2f30e3554be3c0aad8a6628a4a25b668efc919862a608d2fecab7->enter($__internal_618c1eeaedc2f30e3554be3c0aad8a6628a4a25b668efc919862a608d2fecab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_618c1eeaedc2f30e3554be3c0aad8a6628a4a25b668efc919862a608d2fecab7->leave($__internal_618c1eeaedc2f30e3554be3c0aad8a6628a4a25b668efc919862a608d2fecab7_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_871544ab445d2de4a2f04724d36d2117838494ac21f59d307bfcb9ee58fccfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871544ab445d2de4a2f04724d36d2117838494ac21f59d307bfcb9ee58fccfb9->enter($__internal_871544ab445d2de4a2f04724d36d2117838494ac21f59d307bfcb9ee58fccfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_871544ab445d2de4a2f04724d36d2117838494ac21f59d307bfcb9ee58fccfb9->leave($__internal_871544ab445d2de4a2f04724d36d2117838494ac21f59d307bfcb9ee58fccfb9_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a28763ebbb25b35d5cda61ee1367d3a6686cd6bccecfcae8234562355ee3bf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28763ebbb25b35d5cda61ee1367d3a6686cd6bccecfcae8234562355ee3bf22->enter($__internal_a28763ebbb25b35d5cda61ee1367d3a6686cd6bccecfcae8234562355ee3bf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a28763ebbb25b35d5cda61ee1367d3a6686cd6bccecfcae8234562355ee3bf22->leave($__internal_a28763ebbb25b35d5cda61ee1367d3a6686cd6bccecfcae8234562355ee3bf22_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
