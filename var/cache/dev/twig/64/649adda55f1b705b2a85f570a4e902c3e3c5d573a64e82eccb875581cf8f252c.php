<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_9534243999873891a6a7b1857b807620ccb6171bc0c76cb4a002b3e61fb8ac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9534243999873891a6a7b1857b807620ccb6171bc0c76cb4a002b3e61fb8ac6e->enter($__internal_9534243999873891a6a7b1857b807620ccb6171bc0c76cb4a002b3e61fb8ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2f57586ef07fcb5017ce1cfe37ac701fd0bae4127d87b44cbf689da515624172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f57586ef07fcb5017ce1cfe37ac701fd0bae4127d87b44cbf689da515624172->enter($__internal_2f57586ef07fcb5017ce1cfe37ac701fd0bae4127d87b44cbf689da515624172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9534243999873891a6a7b1857b807620ccb6171bc0c76cb4a002b3e61fb8ac6e->leave($__internal_9534243999873891a6a7b1857b807620ccb6171bc0c76cb4a002b3e61fb8ac6e_prof);

        
        $__internal_2f57586ef07fcb5017ce1cfe37ac701fd0bae4127d87b44cbf689da515624172->leave($__internal_2f57586ef07fcb5017ce1cfe37ac701fd0bae4127d87b44cbf689da515624172_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5bf2bd4b7a975fa5ca41134312c4f05260516dde64586e1472aec8ff711810e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf2bd4b7a975fa5ca41134312c4f05260516dde64586e1472aec8ff711810e5->enter($__internal_5bf2bd4b7a975fa5ca41134312c4f05260516dde64586e1472aec8ff711810e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7165fed5e8b3e7c88fc1e2df9e9a64d354e3bdb13dee008e68cfebd8ff01fb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7165fed5e8b3e7c88fc1e2df9e9a64d354e3bdb13dee008e68cfebd8ff01fb53->enter($__internal_7165fed5e8b3e7c88fc1e2df9e9a64d354e3bdb13dee008e68cfebd8ff01fb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7165fed5e8b3e7c88fc1e2df9e9a64d354e3bdb13dee008e68cfebd8ff01fb53->leave($__internal_7165fed5e8b3e7c88fc1e2df9e9a64d354e3bdb13dee008e68cfebd8ff01fb53_prof);

        
        $__internal_5bf2bd4b7a975fa5ca41134312c4f05260516dde64586e1472aec8ff711810e5->leave($__internal_5bf2bd4b7a975fa5ca41134312c4f05260516dde64586e1472aec8ff711810e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46f6a8da8dfdf73ad476b98dcc6370a33c77691524edc754dcc6083a3ad49cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f6a8da8dfdf73ad476b98dcc6370a33c77691524edc754dcc6083a3ad49cdf->enter($__internal_46f6a8da8dfdf73ad476b98dcc6370a33c77691524edc754dcc6083a3ad49cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b430ebac024478b6b894aff5e248a3f5ecd6b17fb3ef314bc29b9d8a467bee07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b430ebac024478b6b894aff5e248a3f5ecd6b17fb3ef314bc29b9d8a467bee07->enter($__internal_b430ebac024478b6b894aff5e248a3f5ecd6b17fb3ef314bc29b9d8a467bee07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b430ebac024478b6b894aff5e248a3f5ecd6b17fb3ef314bc29b9d8a467bee07->leave($__internal_b430ebac024478b6b894aff5e248a3f5ecd6b17fb3ef314bc29b9d8a467bee07_prof);

        
        $__internal_46f6a8da8dfdf73ad476b98dcc6370a33c77691524edc754dcc6083a3ad49cdf->leave($__internal_46f6a8da8dfdf73ad476b98dcc6370a33c77691524edc754dcc6083a3ad49cdf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88294ba13e127d675ae4e6bc6c4bcd2fbf27e8a53b78763a4a6e27ce3f874f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88294ba13e127d675ae4e6bc6c4bcd2fbf27e8a53b78763a4a6e27ce3f874f0f->enter($__internal_88294ba13e127d675ae4e6bc6c4bcd2fbf27e8a53b78763a4a6e27ce3f874f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f405ac4fb46b80ddbb09dd2fcc6cd87cad07216b2d3e9a986aad6d801099050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f405ac4fb46b80ddbb09dd2fcc6cd87cad07216b2d3e9a986aad6d801099050->enter($__internal_4f405ac4fb46b80ddbb09dd2fcc6cd87cad07216b2d3e9a986aad6d801099050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f405ac4fb46b80ddbb09dd2fcc6cd87cad07216b2d3e9a986aad6d801099050->leave($__internal_4f405ac4fb46b80ddbb09dd2fcc6cd87cad07216b2d3e9a986aad6d801099050_prof);

        
        $__internal_88294ba13e127d675ae4e6bc6c4bcd2fbf27e8a53b78763a4a6e27ce3f874f0f->leave($__internal_88294ba13e127d675ae4e6bc6c4bcd2fbf27e8a53b78763a4a6e27ce3f874f0f_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
