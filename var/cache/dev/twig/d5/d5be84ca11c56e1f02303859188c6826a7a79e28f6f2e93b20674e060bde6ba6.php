<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_7f9b44369fdc555e5b7b8f36489996c06752e9b061475d5e19e06580205bafe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9b44369fdc555e5b7b8f36489996c06752e9b061475d5e19e06580205bafe8->enter($__internal_7f9b44369fdc555e5b7b8f36489996c06752e9b061475d5e19e06580205bafe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_56104dcd50cb4c7c13285001ecd9b5b5cb3418e94e2980959473c07b07c3565b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56104dcd50cb4c7c13285001ecd9b5b5cb3418e94e2980959473c07b07c3565b->enter($__internal_56104dcd50cb4c7c13285001ecd9b5b5cb3418e94e2980959473c07b07c3565b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f9b44369fdc555e5b7b8f36489996c06752e9b061475d5e19e06580205bafe8->leave($__internal_7f9b44369fdc555e5b7b8f36489996c06752e9b061475d5e19e06580205bafe8_prof);

        
        $__internal_56104dcd50cb4c7c13285001ecd9b5b5cb3418e94e2980959473c07b07c3565b->leave($__internal_56104dcd50cb4c7c13285001ecd9b5b5cb3418e94e2980959473c07b07c3565b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41710802c47ca73e9cd58d43847abb14fa8125700be57976db3cbf40d399e01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41710802c47ca73e9cd58d43847abb14fa8125700be57976db3cbf40d399e01d->enter($__internal_41710802c47ca73e9cd58d43847abb14fa8125700be57976db3cbf40d399e01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7625860db2599b83dde5df7c09c9a4bd0c04d16e46e0603bd82b962dc9969cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7625860db2599b83dde5df7c09c9a4bd0c04d16e46e0603bd82b962dc9969cea->enter($__internal_7625860db2599b83dde5df7c09c9a4bd0c04d16e46e0603bd82b962dc9969cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7625860db2599b83dde5df7c09c9a4bd0c04d16e46e0603bd82b962dc9969cea->leave($__internal_7625860db2599b83dde5df7c09c9a4bd0c04d16e46e0603bd82b962dc9969cea_prof);

        
        $__internal_41710802c47ca73e9cd58d43847abb14fa8125700be57976db3cbf40d399e01d->leave($__internal_41710802c47ca73e9cd58d43847abb14fa8125700be57976db3cbf40d399e01d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9be775f0a1c9f3853d208b65c7de0573777e2e0fe4023c74ae211580b10d843b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be775f0a1c9f3853d208b65c7de0573777e2e0fe4023c74ae211580b10d843b->enter($__internal_9be775f0a1c9f3853d208b65c7de0573777e2e0fe4023c74ae211580b10d843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86913d10d6aedef4074b4a09aa9e43b862093b8db56d5bee4b4bc7ab048511eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86913d10d6aedef4074b4a09aa9e43b862093b8db56d5bee4b4bc7ab048511eb->enter($__internal_86913d10d6aedef4074b4a09aa9e43b862093b8db56d5bee4b4bc7ab048511eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_86913d10d6aedef4074b4a09aa9e43b862093b8db56d5bee4b4bc7ab048511eb->leave($__internal_86913d10d6aedef4074b4a09aa9e43b862093b8db56d5bee4b4bc7ab048511eb_prof);

        
        $__internal_9be775f0a1c9f3853d208b65c7de0573777e2e0fe4023c74ae211580b10d843b->leave($__internal_9be775f0a1c9f3853d208b65c7de0573777e2e0fe4023c74ae211580b10d843b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f6e97651dd539756cdb9ed543be96f93a0f09730a2ce8865f4fdbfb86475335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6e97651dd539756cdb9ed543be96f93a0f09730a2ce8865f4fdbfb86475335->enter($__internal_0f6e97651dd539756cdb9ed543be96f93a0f09730a2ce8865f4fdbfb86475335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15d5f1aa52c1acc489ed0ac9becdc4767384925c39691a1052cc980e73d292ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d5f1aa52c1acc489ed0ac9becdc4767384925c39691a1052cc980e73d292ef->enter($__internal_15d5f1aa52c1acc489ed0ac9becdc4767384925c39691a1052cc980e73d292ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_15d5f1aa52c1acc489ed0ac9becdc4767384925c39691a1052cc980e73d292ef->leave($__internal_15d5f1aa52c1acc489ed0ac9becdc4767384925c39691a1052cc980e73d292ef_prof);

        
        $__internal_0f6e97651dd539756cdb9ed543be96f93a0f09730a2ce8865f4fdbfb86475335->leave($__internal_0f6e97651dd539756cdb9ed543be96f93a0f09730a2ce8865f4fdbfb86475335_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
