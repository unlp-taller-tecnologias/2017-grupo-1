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
        $__internal_5493394edeaf8b5ddeae6004f733284e8b60dde9bda0ddc937b006d8cf6aa324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5493394edeaf8b5ddeae6004f733284e8b60dde9bda0ddc937b006d8cf6aa324->enter($__internal_5493394edeaf8b5ddeae6004f733284e8b60dde9bda0ddc937b006d8cf6aa324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_20536319dc06063bb08332c9dcf855b4202274930c8c26d907885e4ffc6a17cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20536319dc06063bb08332c9dcf855b4202274930c8c26d907885e4ffc6a17cb->enter($__internal_20536319dc06063bb08332c9dcf855b4202274930c8c26d907885e4ffc6a17cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5493394edeaf8b5ddeae6004f733284e8b60dde9bda0ddc937b006d8cf6aa324->leave($__internal_5493394edeaf8b5ddeae6004f733284e8b60dde9bda0ddc937b006d8cf6aa324_prof);

        
        $__internal_20536319dc06063bb08332c9dcf855b4202274930c8c26d907885e4ffc6a17cb->leave($__internal_20536319dc06063bb08332c9dcf855b4202274930c8c26d907885e4ffc6a17cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c73b3ffcac0b6c0569a7be24484c88b0d257fe18399977ace889e07cc97eac09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73b3ffcac0b6c0569a7be24484c88b0d257fe18399977ace889e07cc97eac09->enter($__internal_c73b3ffcac0b6c0569a7be24484c88b0d257fe18399977ace889e07cc97eac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3fd0552a27762950f045b0821fe34ecebc646d123e6e2a8ca9df802c8b10ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fd0552a27762950f045b0821fe34ecebc646d123e6e2a8ca9df802c8b10ebb->enter($__internal_a3fd0552a27762950f045b0821fe34ecebc646d123e6e2a8ca9df802c8b10ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a3fd0552a27762950f045b0821fe34ecebc646d123e6e2a8ca9df802c8b10ebb->leave($__internal_a3fd0552a27762950f045b0821fe34ecebc646d123e6e2a8ca9df802c8b10ebb_prof);

        
        $__internal_c73b3ffcac0b6c0569a7be24484c88b0d257fe18399977ace889e07cc97eac09->leave($__internal_c73b3ffcac0b6c0569a7be24484c88b0d257fe18399977ace889e07cc97eac09_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfb65661485ba912b2a939ee668d4d1123a0cabef9dd3f7423979f8921a0dc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb65661485ba912b2a939ee668d4d1123a0cabef9dd3f7423979f8921a0dc06->enter($__internal_dfb65661485ba912b2a939ee668d4d1123a0cabef9dd3f7423979f8921a0dc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae86e22cd2c4e41e79fdcc2a5049597f0802085242676544924315a2d2d99a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae86e22cd2c4e41e79fdcc2a5049597f0802085242676544924315a2d2d99a6f->enter($__internal_ae86e22cd2c4e41e79fdcc2a5049597f0802085242676544924315a2d2d99a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ae86e22cd2c4e41e79fdcc2a5049597f0802085242676544924315a2d2d99a6f->leave($__internal_ae86e22cd2c4e41e79fdcc2a5049597f0802085242676544924315a2d2d99a6f_prof);

        
        $__internal_dfb65661485ba912b2a939ee668d4d1123a0cabef9dd3f7423979f8921a0dc06->leave($__internal_dfb65661485ba912b2a939ee668d4d1123a0cabef9dd3f7423979f8921a0dc06_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28928f57c6ae66f52ef858cf45364769b6d945cb5a7b942ef163d9d8d86d9d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28928f57c6ae66f52ef858cf45364769b6d945cb5a7b942ef163d9d8d86d9d23->enter($__internal_28928f57c6ae66f52ef858cf45364769b6d945cb5a7b942ef163d9d8d86d9d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ce9c6a1a85e39fe1a989f1a478895a9ca6090880010360c9368c6bfdb7f85ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce9c6a1a85e39fe1a989f1a478895a9ca6090880010360c9368c6bfdb7f85ba->enter($__internal_5ce9c6a1a85e39fe1a989f1a478895a9ca6090880010360c9368c6bfdb7f85ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5ce9c6a1a85e39fe1a989f1a478895a9ca6090880010360c9368c6bfdb7f85ba->leave($__internal_5ce9c6a1a85e39fe1a989f1a478895a9ca6090880010360c9368c6bfdb7f85ba_prof);

        
        $__internal_28928f57c6ae66f52ef858cf45364769b6d945cb5a7b942ef163d9d8d86d9d23->leave($__internal_28928f57c6ae66f52ef858cf45364769b6d945cb5a7b942ef163d9d8d86d9d23_prof);

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
