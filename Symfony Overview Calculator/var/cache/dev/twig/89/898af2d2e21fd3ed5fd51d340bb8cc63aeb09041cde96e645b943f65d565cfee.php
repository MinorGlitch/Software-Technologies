<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1d178e4ba48d804f8f0925a434ce932cfc5cc7128f3a34c52ae84d14712d494b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_253fcada938ac019044bf3dd9e13b1e735fdcb39540bdad6f8b2472ab11496b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253fcada938ac019044bf3dd9e13b1e735fdcb39540bdad6f8b2472ab11496b4->enter($__internal_253fcada938ac019044bf3dd9e13b1e735fdcb39540bdad6f8b2472ab11496b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_253fcada938ac019044bf3dd9e13b1e735fdcb39540bdad6f8b2472ab11496b4->leave($__internal_253fcada938ac019044bf3dd9e13b1e735fdcb39540bdad6f8b2472ab11496b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b023bf72a80fe3fbc7b1676fc7946c561c28c7fd9af51b212e06ae046f837c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b023bf72a80fe3fbc7b1676fc7946c561c28c7fd9af51b212e06ae046f837c99->enter($__internal_b023bf72a80fe3fbc7b1676fc7946c561c28c7fd9af51b212e06ae046f837c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b023bf72a80fe3fbc7b1676fc7946c561c28c7fd9af51b212e06ae046f837c99->leave($__internal_b023bf72a80fe3fbc7b1676fc7946c561c28c7fd9af51b212e06ae046f837c99_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e67b7253c45ab95a4c434085884f48edfa2866f223b420c6aa8fb1f9cc5e677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e67b7253c45ab95a4c434085884f48edfa2866f223b420c6aa8fb1f9cc5e677->enter($__internal_3e67b7253c45ab95a4c434085884f48edfa2866f223b420c6aa8fb1f9cc5e677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e67b7253c45ab95a4c434085884f48edfa2866f223b420c6aa8fb1f9cc5e677->leave($__internal_3e67b7253c45ab95a4c434085884f48edfa2866f223b420c6aa8fb1f9cc5e677_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_92f80640bdcd7a0bc10eb36be75ed2078ee4a3356c9442c8b3749168ca195aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f80640bdcd7a0bc10eb36be75ed2078ee4a3356c9442c8b3749168ca195aa6->enter($__internal_92f80640bdcd7a0bc10eb36be75ed2078ee4a3356c9442c8b3749168ca195aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_92f80640bdcd7a0bc10eb36be75ed2078ee4a3356c9442c8b3749168ca195aa6->leave($__internal_92f80640bdcd7a0bc10eb36be75ed2078ee4a3356c9442c8b3749168ca195aa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
