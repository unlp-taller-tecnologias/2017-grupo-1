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
        $__internal_a0d5d80bdac733451e746ea8afbdf7daafd1481569611009444eebea0dce550f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d5d80bdac733451e746ea8afbdf7daafd1481569611009444eebea0dce550f->enter($__internal_a0d5d80bdac733451e746ea8afbdf7daafd1481569611009444eebea0dce550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cf25423d077952bdf9239ccde98631e9023e57daf024023e68368bf9b0dec86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf25423d077952bdf9239ccde98631e9023e57daf024023e68368bf9b0dec86c->enter($__internal_cf25423d077952bdf9239ccde98631e9023e57daf024023e68368bf9b0dec86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a0d5d80bdac733451e746ea8afbdf7daafd1481569611009444eebea0dce550f->leave($__internal_a0d5d80bdac733451e746ea8afbdf7daafd1481569611009444eebea0dce550f_prof);

        
        $__internal_cf25423d077952bdf9239ccde98631e9023e57daf024023e68368bf9b0dec86c->leave($__internal_cf25423d077952bdf9239ccde98631e9023e57daf024023e68368bf9b0dec86c_prof);

    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_5e4b58842535fa7218fcaf0594147f732c932ee5f9b289f8fbfeea109767022d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4b58842535fa7218fcaf0594147f732c932ee5f9b289f8fbfeea109767022d->enter($__internal_5e4b58842535fa7218fcaf0594147f732c932ee5f9b289f8fbfeea109767022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_822a5c7708e32f35e0436467206429cc42496afcf8aca5d32d3d3b0b9b86933e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822a5c7708e32f35e0436467206429cc42496afcf8aca5d32d3d3b0b9b86933e->enter($__internal_822a5c7708e32f35e0436467206429cc42496afcf8aca5d32d3d3b0b9b86933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
            ";
        // line 7
        $this->loadTemplate("navbar.html.twig", "base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        
        $__internal_822a5c7708e32f35e0436467206429cc42496afcf8aca5d32d3d3b0b9b86933e->leave($__internal_822a5c7708e32f35e0436467206429cc42496afcf8aca5d32d3d3b0b9b86933e_prof);

        
        $__internal_5e4b58842535fa7218fcaf0594147f732c932ee5f9b289f8fbfeea109767022d->leave($__internal_5e4b58842535fa7218fcaf0594147f732c932ee5f9b289f8fbfeea109767022d_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1c088a63fc29e2de3075e6581296a8d63a044aa37b16acc4a480840b57ed437b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c088a63fc29e2de3075e6581296a8d63a044aa37b16acc4a480840b57ed437b->enter($__internal_1c088a63fc29e2de3075e6581296a8d63a044aa37b16acc4a480840b57ed437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_bbc5260279533e892d03658ab9931b31ff4ae3e0475f5d4c16e1f2712810e68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc5260279533e892d03658ab9931b31ff4ae3e0475f5d4c16e1f2712810e68a->enter($__internal_bbc5260279533e892d03658ab9931b31ff4ae3e0475f5d4c16e1f2712810e68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "            ";
        $this->loadTemplate("sidebar.html.twig", "base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        
        $__internal_bbc5260279533e892d03658ab9931b31ff4ae3e0475f5d4c16e1f2712810e68a->leave($__internal_bbc5260279533e892d03658ab9931b31ff4ae3e0475f5d4c16e1f2712810e68a_prof);

        
        $__internal_1c088a63fc29e2de3075e6581296a8d63a044aa37b16acc4a480840b57ed437b->leave($__internal_1c088a63fc29e2de3075e6581296a8d63a044aa37b16acc4a480840b57ed437b_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a5774d54499e74abb9144434d1f38d6a672765b1025d127cb371374d7be195f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5774d54499e74abb9144434d1f38d6a672765b1025d127cb371374d7be195f->enter($__internal_4a5774d54499e74abb9144434d1f38d6a672765b1025d127cb371374d7be195f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cea9928a79ae797b466d16385af7468a5cf239c4d41a253bd85cd6c0e995b756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea9928a79ae797b466d16385af7468a5cf239c4d41a253bd85cd6c0e995b756->enter($__internal_cea9928a79ae797b466d16385af7468a5cf239c4d41a253bd85cd6c0e995b756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_cea9928a79ae797b466d16385af7468a5cf239c4d41a253bd85cd6c0e995b756->leave($__internal_cea9928a79ae797b466d16385af7468a5cf239c4d41a253bd85cd6c0e995b756_prof);

        
        $__internal_4a5774d54499e74abb9144434d1f38d6a672765b1025d127cb371374d7be195f->leave($__internal_4a5774d54499e74abb9144434d1f38d6a672765b1025d127cb371374d7be195f_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbf126faf059d015df1d247a13e7b6104966a79ad1ca2974a229767908451563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf126faf059d015df1d247a13e7b6104966a79ad1ca2974a229767908451563->enter($__internal_cbf126faf059d015df1d247a13e7b6104966a79ad1ca2974a229767908451563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca9eaec5baaa42323fbb9d946e372e831f8834cf8539082d34f1dda03c67c5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9eaec5baaa42323fbb9d946e372e831f8834cf8539082d34f1dda03c67c5a2->enter($__internal_ca9eaec5baaa42323fbb9d946e372e831f8834cf8539082d34f1dda03c67c5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        $this->loadTemplate("scripts.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_ca9eaec5baaa42323fbb9d946e372e831f8834cf8539082d34f1dda03c67c5a2->leave($__internal_ca9eaec5baaa42323fbb9d946e372e831f8834cf8539082d34f1dda03c67c5a2_prof);

        
        $__internal_cbf126faf059d015df1d247a13e7b6104966a79ad1ca2974a229767908451563->leave($__internal_cbf126faf059d015df1d247a13e7b6104966a79ad1ca2974a229767908451563_prof);

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

        {% block content %} {% endblock %}

        {% block javascripts %}
            {% include 'scripts.html.twig' %}
        {% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/html/scv/app/Resources/views/base.html.twig");
    }
}
