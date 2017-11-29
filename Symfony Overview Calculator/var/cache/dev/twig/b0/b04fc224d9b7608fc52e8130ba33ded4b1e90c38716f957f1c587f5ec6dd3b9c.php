<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d2a23a22bda39ebc6b877c73dd95e3b25f448a8c7aba63448b26e72bccaba91a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_795c770bbbfaaf18514d128abe915a806a8146ae43ee9d401d4c9652f6a775ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795c770bbbfaaf18514d128abe915a806a8146ae43ee9d401d4c9652f6a775ce->enter($__internal_795c770bbbfaaf18514d128abe915a806a8146ae43ee9d401d4c9652f6a775ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795c770bbbfaaf18514d128abe915a806a8146ae43ee9d401d4c9652f6a775ce->leave($__internal_795c770bbbfaaf18514d128abe915a806a8146ae43ee9d401d4c9652f6a775ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9e51a37034fdd69025aaf191be11caf93998f734c5559a552cb885dcb3e5db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e51a37034fdd69025aaf191be11caf93998f734c5559a552cb885dcb3e5db5->enter($__internal_f9e51a37034fdd69025aaf191be11caf93998f734c5559a552cb885dcb3e5db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9e51a37034fdd69025aaf191be11caf93998f734c5559a552cb885dcb3e5db5->leave($__internal_f9e51a37034fdd69025aaf191be11caf93998f734c5559a552cb885dcb3e5db5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4132dfdef60214c7402ee1618531cd9e4c12863ebc42aa8315b5e8e0be9eb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4132dfdef60214c7402ee1618531cd9e4c12863ebc42aa8315b5e8e0be9eb41->enter($__internal_c4132dfdef60214c7402ee1618531cd9e4c12863ebc42aa8315b5e8e0be9eb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4132dfdef60214c7402ee1618531cd9e4c12863ebc42aa8315b5e8e0be9eb41->leave($__internal_c4132dfdef60214c7402ee1618531cd9e4c12863ebc42aa8315b5e8e0be9eb41_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcbbe64e2b3eb7fe5e1c4ced08cddf7aa465bf308a17aab82a3046a4b936497a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbbe64e2b3eb7fe5e1c4ced08cddf7aa465bf308a17aab82a3046a4b936497a->enter($__internal_dcbbe64e2b3eb7fe5e1c4ced08cddf7aa465bf308a17aab82a3046a4b936497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dcbbe64e2b3eb7fe5e1c4ced08cddf7aa465bf308a17aab82a3046a4b936497a->leave($__internal_dcbbe64e2b3eb7fe5e1c4ced08cddf7aa465bf308a17aab82a3046a4b936497a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
