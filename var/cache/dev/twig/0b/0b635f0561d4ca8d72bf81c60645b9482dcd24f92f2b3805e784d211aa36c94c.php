<?php

/* :enfermedad:new.html.twig */
class __TwigTemplate_8e53b362b1671aeb47b6eab4dd91f00ebdac9aecbf7103e6173645571f585c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enfermedad:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b34e7198a9b11e1964bde51d6050f1093cee96622bf1826988736c92fa4d634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b34e7198a9b11e1964bde51d6050f1093cee96622bf1826988736c92fa4d634->enter($__internal_0b34e7198a9b11e1964bde51d6050f1093cee96622bf1826988736c92fa4d634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:new.html.twig"));

        $__internal_acdb9ed843fae8322a87f7dc08f3fb0d410a7c00f77c89fd6299dc66f536cdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdb9ed843fae8322a87f7dc08f3fb0d410a7c00f77c89fd6299dc66f536cdbe->enter($__internal_acdb9ed843fae8322a87f7dc08f3fb0d410a7c00f77c89fd6299dc66f536cdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b34e7198a9b11e1964bde51d6050f1093cee96622bf1826988736c92fa4d634->leave($__internal_0b34e7198a9b11e1964bde51d6050f1093cee96622bf1826988736c92fa4d634_prof);

        
        $__internal_acdb9ed843fae8322a87f7dc08f3fb0d410a7c00f77c89fd6299dc66f536cdbe->leave($__internal_acdb9ed843fae8322a87f7dc08f3fb0d410a7c00f77c89fd6299dc66f536cdbe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b754d79d4d183b9f41fc3dc9a35261faa69c593b984085598b5ca8892666aa2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b754d79d4d183b9f41fc3dc9a35261faa69c593b984085598b5ca8892666aa2a->enter($__internal_b754d79d4d183b9f41fc3dc9a35261faa69c593b984085598b5ca8892666aa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_484a334dc8cc66b93a4c554f521832fa417fa35f0b10472a4920b37ad0d064d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484a334dc8cc66b93a4c554f521832fa417fa35f0b10472a4920b37ad0d064d7->enter($__internal_484a334dc8cc66b93a4c554f521832fa417fa35f0b10472a4920b37ad0d064d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enfermedad creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_484a334dc8cc66b93a4c554f521832fa417fa35f0b10472a4920b37ad0d064d7->leave($__internal_484a334dc8cc66b93a4c554f521832fa417fa35f0b10472a4920b37ad0d064d7_prof);

        
        $__internal_b754d79d4d183b9f41fc3dc9a35261faa69c593b984085598b5ca8892666aa2a->leave($__internal_b754d79d4d183b9f41fc3dc9a35261faa69c593b984085598b5ca8892666aa2a_prof);

    }

    public function getTemplateName()
    {
        return ":enfermedad:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Enfermedad creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('enfermedad_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":enfermedad:new.html.twig", "/var/www/html/scv/app/Resources/views/enfermedad/new.html.twig");
    }
}
