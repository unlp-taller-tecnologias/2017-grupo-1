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
        $__internal_f25a7b09ab026e79a4b93e31671ee12c775591b3ddcb095393693d575fc1af23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25a7b09ab026e79a4b93e31671ee12c775591b3ddcb095393693d575fc1af23->enter($__internal_f25a7b09ab026e79a4b93e31671ee12c775591b3ddcb095393693d575fc1af23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_06726d3697770f218fff65bb7d30e5b96de567034ad35c67548d2ed8c87c4f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06726d3697770f218fff65bb7d30e5b96de567034ad35c67548d2ed8c87c4f38->enter($__internal_06726d3697770f218fff65bb7d30e5b96de567034ad35c67548d2ed8c87c4f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25a7b09ab026e79a4b93e31671ee12c775591b3ddcb095393693d575fc1af23->leave($__internal_f25a7b09ab026e79a4b93e31671ee12c775591b3ddcb095393693d575fc1af23_prof);

        
        $__internal_06726d3697770f218fff65bb7d30e5b96de567034ad35c67548d2ed8c87c4f38->leave($__internal_06726d3697770f218fff65bb7d30e5b96de567034ad35c67548d2ed8c87c4f38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3d1d570d428e3e78915f747fd0e3a9611ab731b603df5156e5a7a861239089c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d1d570d428e3e78915f747fd0e3a9611ab731b603df5156e5a7a861239089c->enter($__internal_d3d1d570d428e3e78915f747fd0e3a9611ab731b603df5156e5a7a861239089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b30e459f6ac224c929a8dbce214d4f1edd23d12ecdd4bebd036f760306683203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30e459f6ac224c929a8dbce214d4f1edd23d12ecdd4bebd036f760306683203->enter($__internal_b30e459f6ac224c929a8dbce214d4f1edd23d12ecdd4bebd036f760306683203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b30e459f6ac224c929a8dbce214d4f1edd23d12ecdd4bebd036f760306683203->leave($__internal_b30e459f6ac224c929a8dbce214d4f1edd23d12ecdd4bebd036f760306683203_prof);

        
        $__internal_d3d1d570d428e3e78915f747fd0e3a9611ab731b603df5156e5a7a861239089c->leave($__internal_d3d1d570d428e3e78915f747fd0e3a9611ab731b603df5156e5a7a861239089c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ffeb7b41ae1d7ce93b6d729e29866db13b46bef631987696a734a9f26ae2e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffeb7b41ae1d7ce93b6d729e29866db13b46bef631987696a734a9f26ae2e96->enter($__internal_7ffeb7b41ae1d7ce93b6d729e29866db13b46bef631987696a734a9f26ae2e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91e63a197d33af2238e5eec026aaaae29d784e1c9ee4e5221a83a147f79e69c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e63a197d33af2238e5eec026aaaae29d784e1c9ee4e5221a83a147f79e69c3->enter($__internal_91e63a197d33af2238e5eec026aaaae29d784e1c9ee4e5221a83a147f79e69c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91e63a197d33af2238e5eec026aaaae29d784e1c9ee4e5221a83a147f79e69c3->leave($__internal_91e63a197d33af2238e5eec026aaaae29d784e1c9ee4e5221a83a147f79e69c3_prof);

        
        $__internal_7ffeb7b41ae1d7ce93b6d729e29866db13b46bef631987696a734a9f26ae2e96->leave($__internal_7ffeb7b41ae1d7ce93b6d729e29866db13b46bef631987696a734a9f26ae2e96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7827bfda6940afd848c8ca5e9f3d3bc0281640f499241d769b6de54b97c82510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7827bfda6940afd848c8ca5e9f3d3bc0281640f499241d769b6de54b97c82510->enter($__internal_7827bfda6940afd848c8ca5e9f3d3bc0281640f499241d769b6de54b97c82510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_714edfce98e4d0ce2a80efb1ed1f4811eddfd088c4cd6e728130aa0af69e8634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714edfce98e4d0ce2a80efb1ed1f4811eddfd088c4cd6e728130aa0af69e8634->enter($__internal_714edfce98e4d0ce2a80efb1ed1f4811eddfd088c4cd6e728130aa0af69e8634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_714edfce98e4d0ce2a80efb1ed1f4811eddfd088c4cd6e728130aa0af69e8634->leave($__internal_714edfce98e4d0ce2a80efb1ed1f4811eddfd088c4cd6e728130aa0af69e8634_prof);

        
        $__internal_7827bfda6940afd848c8ca5e9f3d3bc0281640f499241d769b6de54b97c82510->leave($__internal_7827bfda6940afd848c8ca5e9f3d3bc0281640f499241d769b6de54b97c82510_prof);

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
