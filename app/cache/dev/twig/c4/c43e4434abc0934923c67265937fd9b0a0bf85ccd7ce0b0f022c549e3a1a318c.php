<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5fca53c765f1a70be5a6f5d311968457cf2107ee5bb9741142682d29e7379cd extends Twig_Template
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
        $__internal_43dd34d91e9c8046e5cf778b9f0729631b11f17b685ceff91666ad7e6f0fff69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dd34d91e9c8046e5cf778b9f0729631b11f17b685ceff91666ad7e6f0fff69->enter($__internal_43dd34d91e9c8046e5cf778b9f0729631b11f17b685ceff91666ad7e6f0fff69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43dd34d91e9c8046e5cf778b9f0729631b11f17b685ceff91666ad7e6f0fff69->leave($__internal_43dd34d91e9c8046e5cf778b9f0729631b11f17b685ceff91666ad7e6f0fff69_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e19b4406cfbe372952d41492e813eb2b57270ed81a1f67c8ec4be51c119b4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e19b4406cfbe372952d41492e813eb2b57270ed81a1f67c8ec4be51c119b4f9->enter($__internal_9e19b4406cfbe372952d41492e813eb2b57270ed81a1f67c8ec4be51c119b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e19b4406cfbe372952d41492e813eb2b57270ed81a1f67c8ec4be51c119b4f9->leave($__internal_9e19b4406cfbe372952d41492e813eb2b57270ed81a1f67c8ec4be51c119b4f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cfce31d1f276efefff4adb9cb98ebe097e0c93686598fc46ab3c652b2fa55c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfce31d1f276efefff4adb9cb98ebe097e0c93686598fc46ab3c652b2fa55c56->enter($__internal_cfce31d1f276efefff4adb9cb98ebe097e0c93686598fc46ab3c652b2fa55c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfce31d1f276efefff4adb9cb98ebe097e0c93686598fc46ab3c652b2fa55c56->leave($__internal_cfce31d1f276efefff4adb9cb98ebe097e0c93686598fc46ab3c652b2fa55c56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab879517a8fe2e31fe033803c3b4b0b5912880b2a9c78a2d68a789dbab34a4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab879517a8fe2e31fe033803c3b4b0b5912880b2a9c78a2d68a789dbab34a4a2->enter($__internal_ab879517a8fe2e31fe033803c3b4b0b5912880b2a9c78a2d68a789dbab34a4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ab879517a8fe2e31fe033803c3b4b0b5912880b2a9c78a2d68a789dbab34a4a2->leave($__internal_ab879517a8fe2e31fe033803c3b4b0b5912880b2a9c78a2d68a789dbab34a4a2_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
