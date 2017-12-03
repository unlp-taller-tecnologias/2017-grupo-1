<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7f9ef577faef357a172e6ba4d7892a15a1e56f5fd91733d4526b6a90faecf3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f34abd91a0a1397d14c45f96cf23a960411d4ce6efdce88ea3b0df69ca7e1413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34abd91a0a1397d14c45f96cf23a960411d4ce6efdce88ea3b0df69ca7e1413->enter($__internal_f34abd91a0a1397d14c45f96cf23a960411d4ce6efdce88ea3b0df69ca7e1413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_19b1dfe22e1d935755f6cae2b8de0e7dd5c94447db3e196a924f9384df50b351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b1dfe22e1d935755f6cae2b8de0e7dd5c94447db3e196a924f9384df50b351->enter($__internal_19b1dfe22e1d935755f6cae2b8de0e7dd5c94447db3e196a924f9384df50b351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f34abd91a0a1397d14c45f96cf23a960411d4ce6efdce88ea3b0df69ca7e1413->leave($__internal_f34abd91a0a1397d14c45f96cf23a960411d4ce6efdce88ea3b0df69ca7e1413_prof);

        
        $__internal_19b1dfe22e1d935755f6cae2b8de0e7dd5c94447db3e196a924f9384df50b351->leave($__internal_19b1dfe22e1d935755f6cae2b8de0e7dd5c94447db3e196a924f9384df50b351_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4024bd9aa6d9677dc74427d00c3ca14cc4c8771a5c8e0568a631b3b6b1aef218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4024bd9aa6d9677dc74427d00c3ca14cc4c8771a5c8e0568a631b3b6b1aef218->enter($__internal_4024bd9aa6d9677dc74427d00c3ca14cc4c8771a5c8e0568a631b3b6b1aef218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cdc2f93f9ed41d1e653dc0968acce9b5cf037f55a075cf85fe0a1500b3023b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc2f93f9ed41d1e653dc0968acce9b5cf037f55a075cf85fe0a1500b3023b2f->enter($__internal_cdc2f93f9ed41d1e653dc0968acce9b5cf037f55a075cf85fe0a1500b3023b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cdc2f93f9ed41d1e653dc0968acce9b5cf037f55a075cf85fe0a1500b3023b2f->leave($__internal_cdc2f93f9ed41d1e653dc0968acce9b5cf037f55a075cf85fe0a1500b3023b2f_prof);

        
        $__internal_4024bd9aa6d9677dc74427d00c3ca14cc4c8771a5c8e0568a631b3b6b1aef218->leave($__internal_4024bd9aa6d9677dc74427d00c3ca14cc4c8771a5c8e0568a631b3b6b1aef218_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
