<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4053e72a1286c1ed6e2ab4ae559b7f04769d17233045b8a660b08c87c987d9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4053e72a1286c1ed6e2ab4ae559b7f04769d17233045b8a660b08c87c987d9d6->enter($__internal_4053e72a1286c1ed6e2ab4ae559b7f04769d17233045b8a660b08c87c987d9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c2d65a6681ae172b558468bcf76acd06907a17e4750f50c369b88bf2cef8b311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d65a6681ae172b558468bcf76acd06907a17e4750f50c369b88bf2cef8b311->enter($__internal_c2d65a6681ae172b558468bcf76acd06907a17e4750f50c369b88bf2cef8b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4053e72a1286c1ed6e2ab4ae559b7f04769d17233045b8a660b08c87c987d9d6->leave($__internal_4053e72a1286c1ed6e2ab4ae559b7f04769d17233045b8a660b08c87c987d9d6_prof);

        
        $__internal_c2d65a6681ae172b558468bcf76acd06907a17e4750f50c369b88bf2cef8b311->leave($__internal_c2d65a6681ae172b558468bcf76acd06907a17e4750f50c369b88bf2cef8b311_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf4b324a8d627ad93f8c1540becd7f495e9845221baa3e45c9185783d6a926f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4b324a8d627ad93f8c1540becd7f495e9845221baa3e45c9185783d6a926f5->enter($__internal_cf4b324a8d627ad93f8c1540becd7f495e9845221baa3e45c9185783d6a926f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f95197ad3b90c18df13bff37fa6ea47d68a8910e04282a552ed49c3c3bcd8a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95197ad3b90c18df13bff37fa6ea47d68a8910e04282a552ed49c3c3bcd8a1e->enter($__internal_f95197ad3b90c18df13bff37fa6ea47d68a8910e04282a552ed49c3c3bcd8a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f95197ad3b90c18df13bff37fa6ea47d68a8910e04282a552ed49c3c3bcd8a1e->leave($__internal_f95197ad3b90c18df13bff37fa6ea47d68a8910e04282a552ed49c3c3bcd8a1e_prof);

        
        $__internal_cf4b324a8d627ad93f8c1540becd7f495e9845221baa3e45c9185783d6a926f5->leave($__internal_cf4b324a8d627ad93f8c1540becd7f495e9845221baa3e45c9185783d6a926f5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae3a04068607dae80b41f4e5bb756770a9c7f92da770d55e425023276de6bac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3a04068607dae80b41f4e5bb756770a9c7f92da770d55e425023276de6bac7->enter($__internal_ae3a04068607dae80b41f4e5bb756770a9c7f92da770d55e425023276de6bac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2918716534042eb5c50ee88f74bfb608334d016e9a12ee2d8af5105b9e6226b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2918716534042eb5c50ee88f74bfb608334d016e9a12ee2d8af5105b9e6226b->enter($__internal_a2918716534042eb5c50ee88f74bfb608334d016e9a12ee2d8af5105b9e6226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a2918716534042eb5c50ee88f74bfb608334d016e9a12ee2d8af5105b9e6226b->leave($__internal_a2918716534042eb5c50ee88f74bfb608334d016e9a12ee2d8af5105b9e6226b_prof);

        
        $__internal_ae3a04068607dae80b41f4e5bb756770a9c7f92da770d55e425023276de6bac7->leave($__internal_ae3a04068607dae80b41f4e5bb756770a9c7f92da770d55e425023276de6bac7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd44ccf492546110899b782fe9c906dfefa4c9746bc4b46f1885161fdc2053a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd44ccf492546110899b782fe9c906dfefa4c9746bc4b46f1885161fdc2053a6->enter($__internal_bd44ccf492546110899b782fe9c906dfefa4c9746bc4b46f1885161fdc2053a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_239d5366a46d13b0c9d02ee4c8f2a0df4743c46042d4d1e9ff6731a3a02df55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239d5366a46d13b0c9d02ee4c8f2a0df4743c46042d4d1e9ff6731a3a02df55a->enter($__internal_239d5366a46d13b0c9d02ee4c8f2a0df4743c46042d4d1e9ff6731a3a02df55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_239d5366a46d13b0c9d02ee4c8f2a0df4743c46042d4d1e9ff6731a3a02df55a->leave($__internal_239d5366a46d13b0c9d02ee4c8f2a0df4743c46042d4d1e9ff6731a3a02df55a_prof);

        
        $__internal_bd44ccf492546110899b782fe9c906dfefa4c9746bc4b46f1885161fdc2053a6->leave($__internal_bd44ccf492546110899b782fe9c906dfefa4c9746bc4b46f1885161fdc2053a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
