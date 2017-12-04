<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_21beb0befd43773c3738948864fe0207c6fef779643484b330ad6414f6558b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21beb0befd43773c3738948864fe0207c6fef779643484b330ad6414f6558b72->enter($__internal_21beb0befd43773c3738948864fe0207c6fef779643484b330ad6414f6558b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ab8e9c9c3e28aa088c4a552e8c1244b49fd4e9101f4edb45f89ba8e99b9bdd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8e9c9c3e28aa088c4a552e8c1244b49fd4e9101f4edb45f89ba8e99b9bdd0b->enter($__internal_ab8e9c9c3e28aa088c4a552e8c1244b49fd4e9101f4edb45f89ba8e99b9bdd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21beb0befd43773c3738948864fe0207c6fef779643484b330ad6414f6558b72->leave($__internal_21beb0befd43773c3738948864fe0207c6fef779643484b330ad6414f6558b72_prof);

        
        $__internal_ab8e9c9c3e28aa088c4a552e8c1244b49fd4e9101f4edb45f89ba8e99b9bdd0b->leave($__internal_ab8e9c9c3e28aa088c4a552e8c1244b49fd4e9101f4edb45f89ba8e99b9bdd0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75e7daa138f60d576b27e61afc7ecac2f2d21f2f1b6db15cb13e30775388632e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e7daa138f60d576b27e61afc7ecac2f2d21f2f1b6db15cb13e30775388632e->enter($__internal_75e7daa138f60d576b27e61afc7ecac2f2d21f2f1b6db15cb13e30775388632e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8b64eea09c145f3cf9fe59456220ea687c95859c1b2565e6869d097368bedf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b64eea09c145f3cf9fe59456220ea687c95859c1b2565e6869d097368bedf05->enter($__internal_8b64eea09c145f3cf9fe59456220ea687c95859c1b2565e6869d097368bedf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b64eea09c145f3cf9fe59456220ea687c95859c1b2565e6869d097368bedf05->leave($__internal_8b64eea09c145f3cf9fe59456220ea687c95859c1b2565e6869d097368bedf05_prof);

        
        $__internal_75e7daa138f60d576b27e61afc7ecac2f2d21f2f1b6db15cb13e30775388632e->leave($__internal_75e7daa138f60d576b27e61afc7ecac2f2d21f2f1b6db15cb13e30775388632e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d05a9ddee6c0fab1f412a566974b8f2c730ddf40d58a96eeea7a9a5553d67cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05a9ddee6c0fab1f412a566974b8f2c730ddf40d58a96eeea7a9a5553d67cb7->enter($__internal_d05a9ddee6c0fab1f412a566974b8f2c730ddf40d58a96eeea7a9a5553d67cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_499b7c52ca950ae3dd17fb96cee526e78ca0ac431ee64b85bc72f1cbfa4e15b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499b7c52ca950ae3dd17fb96cee526e78ca0ac431ee64b85bc72f1cbfa4e15b9->enter($__internal_499b7c52ca950ae3dd17fb96cee526e78ca0ac431ee64b85bc72f1cbfa4e15b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_499b7c52ca950ae3dd17fb96cee526e78ca0ac431ee64b85bc72f1cbfa4e15b9->leave($__internal_499b7c52ca950ae3dd17fb96cee526e78ca0ac431ee64b85bc72f1cbfa4e15b9_prof);

        
        $__internal_d05a9ddee6c0fab1f412a566974b8f2c730ddf40d58a96eeea7a9a5553d67cb7->leave($__internal_d05a9ddee6c0fab1f412a566974b8f2c730ddf40d58a96eeea7a9a5553d67cb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74db0bd4c356df32b16deac295e6712be712148895184d87d4413ae52f7f2df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74db0bd4c356df32b16deac295e6712be712148895184d87d4413ae52f7f2df3->enter($__internal_74db0bd4c356df32b16deac295e6712be712148895184d87d4413ae52f7f2df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_231cd74aad8b7cbec6a604d2a412c0145269cfa4d5d987dbe9d1ee161e1dc997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231cd74aad8b7cbec6a604d2a412c0145269cfa4d5d987dbe9d1ee161e1dc997->enter($__internal_231cd74aad8b7cbec6a604d2a412c0145269cfa4d5d987dbe9d1ee161e1dc997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_231cd74aad8b7cbec6a604d2a412c0145269cfa4d5d987dbe9d1ee161e1dc997->leave($__internal_231cd74aad8b7cbec6a604d2a412c0145269cfa4d5d987dbe9d1ee161e1dc997_prof);

        
        $__internal_74db0bd4c356df32b16deac295e6712be712148895184d87d4413ae52f7f2df3->leave($__internal_74db0bd4c356df32b16deac295e6712be712148895184d87d4413ae52f7f2df3_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
