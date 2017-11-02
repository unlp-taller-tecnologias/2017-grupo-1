<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1bbc2a34683334fb8941a6cf800c1979a5a88ee472f2d2fe35f78d7a06bcf764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_380b0fc012cb139886d78994395c123f7acde94384a7b9238e9573de04efa811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380b0fc012cb139886d78994395c123f7acde94384a7b9238e9573de04efa811->enter($__internal_380b0fc012cb139886d78994395c123f7acde94384a7b9238e9573de04efa811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_380b0fc012cb139886d78994395c123f7acde94384a7b9238e9573de04efa811->leave($__internal_380b0fc012cb139886d78994395c123f7acde94384a7b9238e9573de04efa811_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adc13c78f0863c334ea7aabe92f874c66dc80874d38178e964d083023902c3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc13c78f0863c334ea7aabe92f874c66dc80874d38178e964d083023902c3bf->enter($__internal_adc13c78f0863c334ea7aabe92f874c66dc80874d38178e964d083023902c3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_adc13c78f0863c334ea7aabe92f874c66dc80874d38178e964d083023902c3bf->leave($__internal_adc13c78f0863c334ea7aabe92f874c66dc80874d38178e964d083023902c3bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_26810a5e7e820965ded5a1bc1d2e28f54d595cba471e4c0a115c9736f16b4d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26810a5e7e820965ded5a1bc1d2e28f54d595cba471e4c0a115c9736f16b4d79->enter($__internal_26810a5e7e820965ded5a1bc1d2e28f54d595cba471e4c0a115c9736f16b4d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_26810a5e7e820965ded5a1bc1d2e28f54d595cba471e4c0a115c9736f16b4d79->leave($__internal_26810a5e7e820965ded5a1bc1d2e28f54d595cba471e4c0a115c9736f16b4d79_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
