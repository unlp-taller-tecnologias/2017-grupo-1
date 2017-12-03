<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64944efebac913bbefb3b640f1e8e566395966ba9983cff1438a008bf5e01af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64944efebac913bbefb3b640f1e8e566395966ba9983cff1438a008bf5e01af->enter($__internal_e64944efebac913bbefb3b640f1e8e566395966ba9983cff1438a008bf5e01af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_303dd50a5e9ac25c8da37c6cc179a3a3f9a1dd0628d5101e8274cd90b312bf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303dd50a5e9ac25c8da37c6cc179a3a3f9a1dd0628d5101e8274cd90b312bf10->enter($__internal_303dd50a5e9ac25c8da37c6cc179a3a3f9a1dd0628d5101e8274cd90b312bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64944efebac913bbefb3b640f1e8e566395966ba9983cff1438a008bf5e01af->leave($__internal_e64944efebac913bbefb3b640f1e8e566395966ba9983cff1438a008bf5e01af_prof);

        
        $__internal_303dd50a5e9ac25c8da37c6cc179a3a3f9a1dd0628d5101e8274cd90b312bf10->leave($__internal_303dd50a5e9ac25c8da37c6cc179a3a3f9a1dd0628d5101e8274cd90b312bf10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01a72839b61b0fbf49e371e70cbc72ff52c8fa3b3c6684457d87c898888f8996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a72839b61b0fbf49e371e70cbc72ff52c8fa3b3c6684457d87c898888f8996->enter($__internal_01a72839b61b0fbf49e371e70cbc72ff52c8fa3b3c6684457d87c898888f8996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3b08a1c62f07cceea78731f649269a16cc88b310002762fea303a9c3218c44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b08a1c62f07cceea78731f649269a16cc88b310002762fea303a9c3218c44d->enter($__internal_d3b08a1c62f07cceea78731f649269a16cc88b310002762fea303a9c3218c44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d3b08a1c62f07cceea78731f649269a16cc88b310002762fea303a9c3218c44d->leave($__internal_d3b08a1c62f07cceea78731f649269a16cc88b310002762fea303a9c3218c44d_prof);

        
        $__internal_01a72839b61b0fbf49e371e70cbc72ff52c8fa3b3c6684457d87c898888f8996->leave($__internal_01a72839b61b0fbf49e371e70cbc72ff52c8fa3b3c6684457d87c898888f8996_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_179b712f23174dfbbf3ce34fa7609572b310d818111620287678c353c0ec4300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179b712f23174dfbbf3ce34fa7609572b310d818111620287678c353c0ec4300->enter($__internal_179b712f23174dfbbf3ce34fa7609572b310d818111620287678c353c0ec4300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6356f7a702b21387bef6cb54de868574621b6c8d6e819a76b5e5b55b43ad99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6356f7a702b21387bef6cb54de868574621b6c8d6e819a76b5e5b55b43ad99d->enter($__internal_d6356f7a702b21387bef6cb54de868574621b6c8d6e819a76b5e5b55b43ad99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d6356f7a702b21387bef6cb54de868574621b6c8d6e819a76b5e5b55b43ad99d->leave($__internal_d6356f7a702b21387bef6cb54de868574621b6c8d6e819a76b5e5b55b43ad99d_prof);

        
        $__internal_179b712f23174dfbbf3ce34fa7609572b310d818111620287678c353c0ec4300->leave($__internal_179b712f23174dfbbf3ce34fa7609572b310d818111620287678c353c0ec4300_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
