<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9eeb79ca09f5b7c9f52007dbc393e6790429d227a73e32b3985e4bd163abcf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eeb79ca09f5b7c9f52007dbc393e6790429d227a73e32b3985e4bd163abcf92->enter($__internal_9eeb79ca09f5b7c9f52007dbc393e6790429d227a73e32b3985e4bd163abcf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4f263353d82aec776c7f6a45c1d94efea568e6ecf6dedfb8d23a7ede1f1ed0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f263353d82aec776c7f6a45c1d94efea568e6ecf6dedfb8d23a7ede1f1ed0dd->enter($__internal_4f263353d82aec776c7f6a45c1d94efea568e6ecf6dedfb8d23a7ede1f1ed0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->loadTemplate("head.html.twig", "base.html.twig", 3)->display($context);
        // line 4
        echo "    <body>

        ";
        // line 6
        $this->displayBlock('navbar', $context, $blocks);
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>";
        
        $__internal_9eeb79ca09f5b7c9f52007dbc393e6790429d227a73e32b3985e4bd163abcf92->leave($__internal_9eeb79ca09f5b7c9f52007dbc393e6790429d227a73e32b3985e4bd163abcf92_prof);

        
        $__internal_4f263353d82aec776c7f6a45c1d94efea568e6ecf6dedfb8d23a7ede1f1ed0dd->leave($__internal_4f263353d82aec776c7f6a45c1d94efea568e6ecf6dedfb8d23a7ede1f1ed0dd_prof);

    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_dd98ab8d217ab17decf854ca45e3625e0f7f9f102895bbd0952cb314df54be65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd98ab8d217ab17decf854ca45e3625e0f7f9f102895bbd0952cb314df54be65->enter($__internal_dd98ab8d217ab17decf854ca45e3625e0f7f9f102895bbd0952cb314df54be65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_fcbb486952b99e2878fcf5b687f8edf9296dbfceb5edfbdc805be348b0b4e38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbb486952b99e2878fcf5b687f8edf9296dbfceb5edfbdc805be348b0b4e38b->enter($__internal_fcbb486952b99e2878fcf5b687f8edf9296dbfceb5edfbdc805be348b0b4e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
            ";
        // line 7
        $this->loadTemplate("navbar.html.twig", "base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        
        $__internal_fcbb486952b99e2878fcf5b687f8edf9296dbfceb5edfbdc805be348b0b4e38b->leave($__internal_fcbb486952b99e2878fcf5b687f8edf9296dbfceb5edfbdc805be348b0b4e38b_prof);

        
        $__internal_dd98ab8d217ab17decf854ca45e3625e0f7f9f102895bbd0952cb314df54be65->leave($__internal_dd98ab8d217ab17decf854ca45e3625e0f7f9f102895bbd0952cb314df54be65_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7062d671a4ddda09e0e99a573d6b8a50886ffce7c3018db886272fd132dcbf10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7062d671a4ddda09e0e99a573d6b8a50886ffce7c3018db886272fd132dcbf10->enter($__internal_7062d671a4ddda09e0e99a573d6b8a50886ffce7c3018db886272fd132dcbf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_e0c43a265fe68caa23c105e7a56fde1961a499846314e9f18d0c0f134eff16de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c43a265fe68caa23c105e7a56fde1961a499846314e9f18d0c0f134eff16de->enter($__internal_e0c43a265fe68caa23c105e7a56fde1961a499846314e9f18d0c0f134eff16de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "            ";
        $this->loadTemplate("sidebar.html.twig", "base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        
        $__internal_e0c43a265fe68caa23c105e7a56fde1961a499846314e9f18d0c0f134eff16de->leave($__internal_e0c43a265fe68caa23c105e7a56fde1961a499846314e9f18d0c0f134eff16de_prof);

        
        $__internal_7062d671a4ddda09e0e99a573d6b8a50886ffce7c3018db886272fd132dcbf10->leave($__internal_7062d671a4ddda09e0e99a573d6b8a50886ffce7c3018db886272fd132dcbf10_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_938bb722727cafc45d851035bb3c320f057ed8c000ba30428b2667dfe890ce84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938bb722727cafc45d851035bb3c320f057ed8c000ba30428b2667dfe890ce84->enter($__internal_938bb722727cafc45d851035bb3c320f057ed8c000ba30428b2667dfe890ce84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_59fcb7612f2fc747b33ac92e50f6f7768e5bced373c337da4ff789b1a4e76760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fcb7612f2fc747b33ac92e50f6f7768e5bced373c337da4ff789b1a4e76760->enter($__internal_59fcb7612f2fc747b33ac92e50f6f7768e5bced373c337da4ff789b1a4e76760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " dsfgsdfg";
        
        $__internal_59fcb7612f2fc747b33ac92e50f6f7768e5bced373c337da4ff789b1a4e76760->leave($__internal_59fcb7612f2fc747b33ac92e50f6f7768e5bced373c337da4ff789b1a4e76760_prof);

        
        $__internal_938bb722727cafc45d851035bb3c320f057ed8c000ba30428b2667dfe890ce84->leave($__internal_938bb722727cafc45d851035bb3c320f057ed8c000ba30428b2667dfe890ce84_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf5f38bb06cee002339d8cf43b47b0f6fcae6ea3f373cb4e22a638e2c9822ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5f38bb06cee002339d8cf43b47b0f6fcae6ea3f373cb4e22a638e2c9822ec4->enter($__internal_bf5f38bb06cee002339d8cf43b47b0f6fcae6ea3f373cb4e22a638e2c9822ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61a387cc3c1dc3df9eb46cf7a5def86d7020d0561ce6d3e0b4365d5225ff2683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a387cc3c1dc3df9eb46cf7a5def86d7020d0561ce6d3e0b4365d5225ff2683->enter($__internal_61a387cc3c1dc3df9eb46cf7a5def86d7020d0561ce6d3e0b4365d5225ff2683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        $this->loadTemplate("scripts.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_61a387cc3c1dc3df9eb46cf7a5def86d7020d0561ce6d3e0b4365d5225ff2683->leave($__internal_61a387cc3c1dc3df9eb46cf7a5def86d7020d0561ce6d3e0b4365d5225ff2683_prof);

        
        $__internal_bf5f38bb06cee002339d8cf43b47b0f6fcae6ea3f373cb4e22a638e2c9822ec4->leave($__internal_bf5f38bb06cee002339d8cf43b47b0f6fcae6ea3f373cb4e22a638e2c9822ec4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 18,  139 => 17,  130 => 16,  112 => 14,  102 => 12,  99 => 11,  90 => 10,  80 => 8,  78 => 7,  67 => 6,  56 => 19,  54 => 16,  51 => 15,  49 => 14,  46 => 13,  44 => 10,  41 => 9,  39 => 6,  35 => 4,  33 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    {% include 'head.html.twig' %}
    <body>

        {% block navbar %} 
            {% include 'navbar.html.twig' %}
        {% endblock %}

        {% block sidebar %}
            {% include 'sidebar.html.twig' %}
        {% endblock %}

        {% block content %} dsfgsdfg{% endblock %}

        {% block javascripts %}
            {% include 'scripts.html.twig' %}
        {% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/html/scv/app/Resources/views/base.html.twig");
    }
}
