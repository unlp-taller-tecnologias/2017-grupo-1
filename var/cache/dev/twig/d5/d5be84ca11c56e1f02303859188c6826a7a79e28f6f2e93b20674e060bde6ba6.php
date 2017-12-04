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
        $__internal_6b65cc631ed356e15cde0ae0e72fff2819f9447d2edb8c99d1049aac2b0ba360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b65cc631ed356e15cde0ae0e72fff2819f9447d2edb8c99d1049aac2b0ba360->enter($__internal_6b65cc631ed356e15cde0ae0e72fff2819f9447d2edb8c99d1049aac2b0ba360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0220101bfec2fc69838da7e6275fe89dbbfa05d652ce3deb6ab66ec00a9de43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0220101bfec2fc69838da7e6275fe89dbbfa05d652ce3deb6ab66ec00a9de43e->enter($__internal_0220101bfec2fc69838da7e6275fe89dbbfa05d652ce3deb6ab66ec00a9de43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b65cc631ed356e15cde0ae0e72fff2819f9447d2edb8c99d1049aac2b0ba360->leave($__internal_6b65cc631ed356e15cde0ae0e72fff2819f9447d2edb8c99d1049aac2b0ba360_prof);

        
        $__internal_0220101bfec2fc69838da7e6275fe89dbbfa05d652ce3deb6ab66ec00a9de43e->leave($__internal_0220101bfec2fc69838da7e6275fe89dbbfa05d652ce3deb6ab66ec00a9de43e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1835864ed04818fe2b37240cfbbaab93af427adf6b39d5f87232a1e926aea1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1835864ed04818fe2b37240cfbbaab93af427adf6b39d5f87232a1e926aea1bd->enter($__internal_1835864ed04818fe2b37240cfbbaab93af427adf6b39d5f87232a1e926aea1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3edbddee3c7a55903d8256c32f20e1a0b00aa7e06ac691a771e214f302575988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edbddee3c7a55903d8256c32f20e1a0b00aa7e06ac691a771e214f302575988->enter($__internal_3edbddee3c7a55903d8256c32f20e1a0b00aa7e06ac691a771e214f302575988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3edbddee3c7a55903d8256c32f20e1a0b00aa7e06ac691a771e214f302575988->leave($__internal_3edbddee3c7a55903d8256c32f20e1a0b00aa7e06ac691a771e214f302575988_prof);

        
        $__internal_1835864ed04818fe2b37240cfbbaab93af427adf6b39d5f87232a1e926aea1bd->leave($__internal_1835864ed04818fe2b37240cfbbaab93af427adf6b39d5f87232a1e926aea1bd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9449330d7802eca2658c61caefec298ac24a60b2c6cebd32f519c1d723b16c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9449330d7802eca2658c61caefec298ac24a60b2c6cebd32f519c1d723b16c1e->enter($__internal_9449330d7802eca2658c61caefec298ac24a60b2c6cebd32f519c1d723b16c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_06bbd249178374d007c68e0bcd13b26368e0b93dfa1ab1165a80d5c3030e083a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bbd249178374d007c68e0bcd13b26368e0b93dfa1ab1165a80d5c3030e083a->enter($__internal_06bbd249178374d007c68e0bcd13b26368e0b93dfa1ab1165a80d5c3030e083a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_06bbd249178374d007c68e0bcd13b26368e0b93dfa1ab1165a80d5c3030e083a->leave($__internal_06bbd249178374d007c68e0bcd13b26368e0b93dfa1ab1165a80d5c3030e083a_prof);

        
        $__internal_9449330d7802eca2658c61caefec298ac24a60b2c6cebd32f519c1d723b16c1e->leave($__internal_9449330d7802eca2658c61caefec298ac24a60b2c6cebd32f519c1d723b16c1e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d54994358f2343ced520a205ba18aa8c65c2a2be621cf9199841542bdbd9e895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54994358f2343ced520a205ba18aa8c65c2a2be621cf9199841542bdbd9e895->enter($__internal_d54994358f2343ced520a205ba18aa8c65c2a2be621cf9199841542bdbd9e895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99ccd2f943443c4ceec58a1daec06f29c6c8aba2454977be8b3b4e90f3d389dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ccd2f943443c4ceec58a1daec06f29c6c8aba2454977be8b3b4e90f3d389dc->enter($__internal_99ccd2f943443c4ceec58a1daec06f29c6c8aba2454977be8b3b4e90f3d389dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_99ccd2f943443c4ceec58a1daec06f29c6c8aba2454977be8b3b4e90f3d389dc->leave($__internal_99ccd2f943443c4ceec58a1daec06f29c6c8aba2454977be8b3b4e90f3d389dc_prof);

        
        $__internal_d54994358f2343ced520a205ba18aa8c65c2a2be621cf9199841542bdbd9e895->leave($__internal_d54994358f2343ced520a205ba18aa8c65c2a2be621cf9199841542bdbd9e895_prof);

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
