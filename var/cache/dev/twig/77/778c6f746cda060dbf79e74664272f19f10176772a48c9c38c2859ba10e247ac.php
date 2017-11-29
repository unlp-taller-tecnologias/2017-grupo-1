<?php

/* enfermedad/index.html.twig */
class __TwigTemplate_371f1bf24bc278521a134d5c601e597646aec308f8d45d79038feaf2e8d396fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enfermedad/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98d3786a0935ae177bd18d689b135087eb66248182af7d3167a255c37a077ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d3786a0935ae177bd18d689b135087eb66248182af7d3167a255c37a077ff2->enter($__internal_98d3786a0935ae177bd18d689b135087eb66248182af7d3167a255c37a077ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enfermedad/index.html.twig"));

        $__internal_6717615a0fba866418107c0cc925c2ed1a182aa87b60d0fd1a022c2f35537d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6717615a0fba866418107c0cc925c2ed1a182aa87b60d0fd1a022c2f35537d86->enter($__internal_6717615a0fba866418107c0cc925c2ed1a182aa87b60d0fd1a022c2f35537d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enfermedad/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98d3786a0935ae177bd18d689b135087eb66248182af7d3167a255c37a077ff2->leave($__internal_98d3786a0935ae177bd18d689b135087eb66248182af7d3167a255c37a077ff2_prof);

        
        $__internal_6717615a0fba866418107c0cc925c2ed1a182aa87b60d0fd1a022c2f35537d86->leave($__internal_6717615a0fba866418107c0cc925c2ed1a182aa87b60d0fd1a022c2f35537d86_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_aea592022059bfa1a322acc55e2ed415de5501f57cb529aee7753ac713e25cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea592022059bfa1a322acc55e2ed415de5501f57cb529aee7753ac713e25cae->enter($__internal_aea592022059bfa1a322acc55e2ed415de5501f57cb529aee7753ac713e25cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c8c8aed91623590c631d2c1d55f543b6d994406937b4d82a7e611a1f66b15d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c8aed91623590c631d2c1d55f543b6d994406937b4d82a7e611a1f66b15d96->enter($__internal_c8c8aed91623590c631d2c1d55f543b6d994406937b4d82a7e611a1f66b15d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Enfermedads list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enfermedads"] ?? $this->getContext($context, "enfermedads")));
        foreach ($context['_seq'] as $context["_key"] => $context["enfermedad"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_show", array("id" => $this->getAttribute($context["enfermedad"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfermedad"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfermedad"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfermedad"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_show", array("id" => $this->getAttribute($context["enfermedad"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_edit", array("id" => $this->getAttribute($context["enfermedad"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enfermedad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_new");
        echo "\">Create a new enfermedad</a>
        </li>
    </ul>
";
        
        $__internal_c8c8aed91623590c631d2c1d55f543b6d994406937b4d82a7e611a1f66b15d96->leave($__internal_c8c8aed91623590c631d2c1d55f543b6d994406937b4d82a7e611a1f66b15d96_prof);

        
        $__internal_aea592022059bfa1a322acc55e2ed415de5501f57cb529aee7753ac713e25cae->leave($__internal_aea592022059bfa1a322acc55e2ed415de5501f57cb529aee7753ac713e25cae_prof);

    }

    public function getTemplateName()
    {
        return "enfermedad/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
    <h1>Enfermedads list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for enfermedad in enfermedads %}
            <tr>
                <td><a href=\"{{ path('enfermedad_show', { 'id': enfermedad.id }) }}\">{{ enfermedad.id }}</a></td>
                <td>{{ enfermedad.nombre }}</td>
                <td>{{ enfermedad.descripcion }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('enfermedad_show', { 'id': enfermedad.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('enfermedad_edit', { 'id': enfermedad.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('enfermedad_new') }}\">Create a new enfermedad</a>
        </li>
    </ul>
{% endblock %}
", "enfermedad/index.html.twig", "/var/www/html/scv/app/Resources/views/enfermedad/index.html.twig");
    }
}
