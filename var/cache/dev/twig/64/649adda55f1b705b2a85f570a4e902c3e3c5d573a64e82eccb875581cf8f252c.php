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
        $__internal_a9d86e99f17a9f8492c48ed13b3b4e66c930c60fb6d84658ef2435ed0413cfdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d86e99f17a9f8492c48ed13b3b4e66c930c60fb6d84658ef2435ed0413cfdf->enter($__internal_a9d86e99f17a9f8492c48ed13b3b4e66c930c60fb6d84658ef2435ed0413cfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1bb9dacaf80476c0a324f13a84434ee65b6a3dafb92858b873a50a53de88afa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb9dacaf80476c0a324f13a84434ee65b6a3dafb92858b873a50a53de88afa7->enter($__internal_1bb9dacaf80476c0a324f13a84434ee65b6a3dafb92858b873a50a53de88afa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d86e99f17a9f8492c48ed13b3b4e66c930c60fb6d84658ef2435ed0413cfdf->leave($__internal_a9d86e99f17a9f8492c48ed13b3b4e66c930c60fb6d84658ef2435ed0413cfdf_prof);

        
        $__internal_1bb9dacaf80476c0a324f13a84434ee65b6a3dafb92858b873a50a53de88afa7->leave($__internal_1bb9dacaf80476c0a324f13a84434ee65b6a3dafb92858b873a50a53de88afa7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3991dc01ba8f362757435ab9384d8a23d2f1c7ccd26ce14044fdd0b3b14faa36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3991dc01ba8f362757435ab9384d8a23d2f1c7ccd26ce14044fdd0b3b14faa36->enter($__internal_3991dc01ba8f362757435ab9384d8a23d2f1c7ccd26ce14044fdd0b3b14faa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff02233a65f57cb3a6a20310b28210c2c5757d225ead667083f3acc2564201f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff02233a65f57cb3a6a20310b28210c2c5757d225ead667083f3acc2564201f4->enter($__internal_ff02233a65f57cb3a6a20310b28210c2c5757d225ead667083f3acc2564201f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff02233a65f57cb3a6a20310b28210c2c5757d225ead667083f3acc2564201f4->leave($__internal_ff02233a65f57cb3a6a20310b28210c2c5757d225ead667083f3acc2564201f4_prof);

        
        $__internal_3991dc01ba8f362757435ab9384d8a23d2f1c7ccd26ce14044fdd0b3b14faa36->leave($__internal_3991dc01ba8f362757435ab9384d8a23d2f1c7ccd26ce14044fdd0b3b14faa36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5aad8530e4b950c93e8b03cc43fcdc62e4d11ba91ba34c3b3b6dcdb93f3f5898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aad8530e4b950c93e8b03cc43fcdc62e4d11ba91ba34c3b3b6dcdb93f3f5898->enter($__internal_5aad8530e4b950c93e8b03cc43fcdc62e4d11ba91ba34c3b3b6dcdb93f3f5898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c8a26eb4cbd3071ed91619b59f41ae737d6c1d622200f91aaefff136638db771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a26eb4cbd3071ed91619b59f41ae737d6c1d622200f91aaefff136638db771->enter($__internal_c8a26eb4cbd3071ed91619b59f41ae737d6c1d622200f91aaefff136638db771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8a26eb4cbd3071ed91619b59f41ae737d6c1d622200f91aaefff136638db771->leave($__internal_c8a26eb4cbd3071ed91619b59f41ae737d6c1d622200f91aaefff136638db771_prof);

        
        $__internal_5aad8530e4b950c93e8b03cc43fcdc62e4d11ba91ba34c3b3b6dcdb93f3f5898->leave($__internal_5aad8530e4b950c93e8b03cc43fcdc62e4d11ba91ba34c3b3b6dcdb93f3f5898_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7be184171cb6668b293982c5b46f977967d0f2b53d1a4256ed91342907c9508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7be184171cb6668b293982c5b46f977967d0f2b53d1a4256ed91342907c9508->enter($__internal_a7be184171cb6668b293982c5b46f977967d0f2b53d1a4256ed91342907c9508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0712d01280e08f5b081ff93747310941ebe7aaea4f7872d5a73067be29c54e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0712d01280e08f5b081ff93747310941ebe7aaea4f7872d5a73067be29c54e35->enter($__internal_0712d01280e08f5b081ff93747310941ebe7aaea4f7872d5a73067be29c54e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0712d01280e08f5b081ff93747310941ebe7aaea4f7872d5a73067be29c54e35->leave($__internal_0712d01280e08f5b081ff93747310941ebe7aaea4f7872d5a73067be29c54e35_prof);

        
        $__internal_a7be184171cb6668b293982c5b46f977967d0f2b53d1a4256ed91342907c9508->leave($__internal_a7be184171cb6668b293982c5b46f977967d0f2b53d1a4256ed91342907c9508_prof);

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
