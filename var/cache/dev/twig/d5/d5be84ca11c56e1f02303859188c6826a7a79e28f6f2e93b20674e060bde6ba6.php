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
        $__internal_fb037e372b0b5c2588daff9491ef3ae6af31cc943e33675521c79ccdddace086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb037e372b0b5c2588daff9491ef3ae6af31cc943e33675521c79ccdddace086->enter($__internal_fb037e372b0b5c2588daff9491ef3ae6af31cc943e33675521c79ccdddace086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_94b4a8dd70b0cba281db30fd26f435550645ad83894145f2cb4691fa1eedebe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b4a8dd70b0cba281db30fd26f435550645ad83894145f2cb4691fa1eedebe9->enter($__internal_94b4a8dd70b0cba281db30fd26f435550645ad83894145f2cb4691fa1eedebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb037e372b0b5c2588daff9491ef3ae6af31cc943e33675521c79ccdddace086->leave($__internal_fb037e372b0b5c2588daff9491ef3ae6af31cc943e33675521c79ccdddace086_prof);

        
        $__internal_94b4a8dd70b0cba281db30fd26f435550645ad83894145f2cb4691fa1eedebe9->leave($__internal_94b4a8dd70b0cba281db30fd26f435550645ad83894145f2cb4691fa1eedebe9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_304d8d22b401bf479fe294dd60dc1a2978a07b7c7fe8e808c4b755d6eb666113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304d8d22b401bf479fe294dd60dc1a2978a07b7c7fe8e808c4b755d6eb666113->enter($__internal_304d8d22b401bf479fe294dd60dc1a2978a07b7c7fe8e808c4b755d6eb666113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87614c7220435736cc6b26aea213bff700b02c5954cc8bdea41f558ce568f02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87614c7220435736cc6b26aea213bff700b02c5954cc8bdea41f558ce568f02c->enter($__internal_87614c7220435736cc6b26aea213bff700b02c5954cc8bdea41f558ce568f02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_87614c7220435736cc6b26aea213bff700b02c5954cc8bdea41f558ce568f02c->leave($__internal_87614c7220435736cc6b26aea213bff700b02c5954cc8bdea41f558ce568f02c_prof);

        
        $__internal_304d8d22b401bf479fe294dd60dc1a2978a07b7c7fe8e808c4b755d6eb666113->leave($__internal_304d8d22b401bf479fe294dd60dc1a2978a07b7c7fe8e808c4b755d6eb666113_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f04e7b9bc042168dde6623dd67728d719d6b654f12a9bd5525aba209898b2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f04e7b9bc042168dde6623dd67728d719d6b654f12a9bd5525aba209898b2e3->enter($__internal_4f04e7b9bc042168dde6623dd67728d719d6b654f12a9bd5525aba209898b2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_59917349317e2c2a77d8ccceb95edbc0170f385247a1ce6d77517291efad0943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59917349317e2c2a77d8ccceb95edbc0170f385247a1ce6d77517291efad0943->enter($__internal_59917349317e2c2a77d8ccceb95edbc0170f385247a1ce6d77517291efad0943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_59917349317e2c2a77d8ccceb95edbc0170f385247a1ce6d77517291efad0943->leave($__internal_59917349317e2c2a77d8ccceb95edbc0170f385247a1ce6d77517291efad0943_prof);

        
        $__internal_4f04e7b9bc042168dde6623dd67728d719d6b654f12a9bd5525aba209898b2e3->leave($__internal_4f04e7b9bc042168dde6623dd67728d719d6b654f12a9bd5525aba209898b2e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b24384f60f2487bc34b54abbb1aa13084ae842d3fb50aaa96655bd1b555b958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b24384f60f2487bc34b54abbb1aa13084ae842d3fb50aaa96655bd1b555b958->enter($__internal_3b24384f60f2487bc34b54abbb1aa13084ae842d3fb50aaa96655bd1b555b958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b06c8a57a74e6d99782ede17765a7d7d5811c0b8d659c378387eb62b9b832f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b06c8a57a74e6d99782ede17765a7d7d5811c0b8d659c378387eb62b9b832f1->enter($__internal_4b06c8a57a74e6d99782ede17765a7d7d5811c0b8d659c378387eb62b9b832f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4b06c8a57a74e6d99782ede17765a7d7d5811c0b8d659c378387eb62b9b832f1->leave($__internal_4b06c8a57a74e6d99782ede17765a7d7d5811c0b8d659c378387eb62b9b832f1_prof);

        
        $__internal_3b24384f60f2487bc34b54abbb1aa13084ae842d3fb50aaa96655bd1b555b958->leave($__internal_3b24384f60f2487bc34b54abbb1aa13084ae842d3fb50aaa96655bd1b555b958_prof);

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
