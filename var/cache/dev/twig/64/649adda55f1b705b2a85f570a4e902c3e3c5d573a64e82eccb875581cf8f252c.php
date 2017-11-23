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
        $__internal_86d0e9645700a2bbfba3cd620ef0281a791a4a422e086943700cad5a65b1bd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d0e9645700a2bbfba3cd620ef0281a791a4a422e086943700cad5a65b1bd41->enter($__internal_86d0e9645700a2bbfba3cd620ef0281a791a4a422e086943700cad5a65b1bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b2995a3449f0ae8a395a717aff9e4988a9120541a44f4954ffd40da6f9fdf274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2995a3449f0ae8a395a717aff9e4988a9120541a44f4954ffd40da6f9fdf274->enter($__internal_b2995a3449f0ae8a395a717aff9e4988a9120541a44f4954ffd40da6f9fdf274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d0e9645700a2bbfba3cd620ef0281a791a4a422e086943700cad5a65b1bd41->leave($__internal_86d0e9645700a2bbfba3cd620ef0281a791a4a422e086943700cad5a65b1bd41_prof);

        
        $__internal_b2995a3449f0ae8a395a717aff9e4988a9120541a44f4954ffd40da6f9fdf274->leave($__internal_b2995a3449f0ae8a395a717aff9e4988a9120541a44f4954ffd40da6f9fdf274_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf3fbf9b5724d6508b0d9f081a5797993f8f4356d3beeeab46b852dc6323513d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3fbf9b5724d6508b0d9f081a5797993f8f4356d3beeeab46b852dc6323513d->enter($__internal_bf3fbf9b5724d6508b0d9f081a5797993f8f4356d3beeeab46b852dc6323513d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc3e3dd57c0884001dffc779ebc1fea0ca8cf9426c015ffbcf4b4cc1f38be7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3e3dd57c0884001dffc779ebc1fea0ca8cf9426c015ffbcf4b4cc1f38be7f4->enter($__internal_cc3e3dd57c0884001dffc779ebc1fea0ca8cf9426c015ffbcf4b4cc1f38be7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc3e3dd57c0884001dffc779ebc1fea0ca8cf9426c015ffbcf4b4cc1f38be7f4->leave($__internal_cc3e3dd57c0884001dffc779ebc1fea0ca8cf9426c015ffbcf4b4cc1f38be7f4_prof);

        
        $__internal_bf3fbf9b5724d6508b0d9f081a5797993f8f4356d3beeeab46b852dc6323513d->leave($__internal_bf3fbf9b5724d6508b0d9f081a5797993f8f4356d3beeeab46b852dc6323513d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_158878c0e8bfa6be1d4dbf2a2b39c79c97eeca4e4f5bc0cb7b66674a83f024f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158878c0e8bfa6be1d4dbf2a2b39c79c97eeca4e4f5bc0cb7b66674a83f024f9->enter($__internal_158878c0e8bfa6be1d4dbf2a2b39c79c97eeca4e4f5bc0cb7b66674a83f024f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e39fb0b123cf65eb0a799f0cdcc5fc01cebf09e0a7725106428f675fbadfc06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39fb0b123cf65eb0a799f0cdcc5fc01cebf09e0a7725106428f675fbadfc06d->enter($__internal_e39fb0b123cf65eb0a799f0cdcc5fc01cebf09e0a7725106428f675fbadfc06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e39fb0b123cf65eb0a799f0cdcc5fc01cebf09e0a7725106428f675fbadfc06d->leave($__internal_e39fb0b123cf65eb0a799f0cdcc5fc01cebf09e0a7725106428f675fbadfc06d_prof);

        
        $__internal_158878c0e8bfa6be1d4dbf2a2b39c79c97eeca4e4f5bc0cb7b66674a83f024f9->leave($__internal_158878c0e8bfa6be1d4dbf2a2b39c79c97eeca4e4f5bc0cb7b66674a83f024f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c31beffdaec0a112cfef03c1a015d4a8d697772b89b8d9bd3be453373078a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c31beffdaec0a112cfef03c1a015d4a8d697772b89b8d9bd3be453373078a10->enter($__internal_7c31beffdaec0a112cfef03c1a015d4a8d697772b89b8d9bd3be453373078a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52dfe79135410ca313a6f8ffb33933bf9df7cdbe640f4611e10ee3bcff164f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dfe79135410ca313a6f8ffb33933bf9df7cdbe640f4611e10ee3bcff164f32->enter($__internal_52dfe79135410ca313a6f8ffb33933bf9df7cdbe640f4611e10ee3bcff164f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52dfe79135410ca313a6f8ffb33933bf9df7cdbe640f4611e10ee3bcff164f32->leave($__internal_52dfe79135410ca313a6f8ffb33933bf9df7cdbe640f4611e10ee3bcff164f32_prof);

        
        $__internal_7c31beffdaec0a112cfef03c1a015d4a8d697772b89b8d9bd3be453373078a10->leave($__internal_7c31beffdaec0a112cfef03c1a015d4a8d697772b89b8d9bd3be453373078a10_prof);

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
