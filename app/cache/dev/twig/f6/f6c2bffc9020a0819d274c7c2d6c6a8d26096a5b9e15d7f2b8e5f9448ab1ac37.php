<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1d98f749e7513bf70496261eb2fd711b83903a02be834b2600362fd717cd43ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d34cdead311254bb536fb619ac594b6c708cb43bb342750e3e6ed41b02e670aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34cdead311254bb536fb619ac594b6c708cb43bb342750e3e6ed41b02e670aa->enter($__internal_d34cdead311254bb536fb619ac594b6c708cb43bb342750e3e6ed41b02e670aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d34cdead311254bb536fb619ac594b6c708cb43bb342750e3e6ed41b02e670aa->leave($__internal_d34cdead311254bb536fb619ac594b6c708cb43bb342750e3e6ed41b02e670aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9abd3f2e05b27bb62b8c1362fa11d65aaeb0de3a9e923db35f41bfc4fabd12a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abd3f2e05b27bb62b8c1362fa11d65aaeb0de3a9e923db35f41bfc4fabd12a1->enter($__internal_9abd3f2e05b27bb62b8c1362fa11d65aaeb0de3a9e923db35f41bfc4fabd12a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9abd3f2e05b27bb62b8c1362fa11d65aaeb0de3a9e923db35f41bfc4fabd12a1->leave($__internal_9abd3f2e05b27bb62b8c1362fa11d65aaeb0de3a9e923db35f41bfc4fabd12a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6071344493ff350dc16e16f3b5f3343acc0632d3290096aa171017cb745f80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6071344493ff350dc16e16f3b5f3343acc0632d3290096aa171017cb745f80e->enter($__internal_a6071344493ff350dc16e16f3b5f3343acc0632d3290096aa171017cb745f80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a6071344493ff350dc16e16f3b5f3343acc0632d3290096aa171017cb745f80e->leave($__internal_a6071344493ff350dc16e16f3b5f3343acc0632d3290096aa171017cb745f80e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_566912192310223a2b8083bb8e1d6a450d57e3397e2b6762e1f8cb17f5505e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566912192310223a2b8083bb8e1d6a450d57e3397e2b6762e1f8cb17f5505e68->enter($__internal_566912192310223a2b8083bb8e1d6a450d57e3397e2b6762e1f8cb17f5505e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_566912192310223a2b8083bb8e1d6a450d57e3397e2b6762e1f8cb17f5505e68->leave($__internal_566912192310223a2b8083bb8e1d6a450d57e3397e2b6762e1f8cb17f5505e68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
