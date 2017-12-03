<?php

/* :enfermedad:index.html.twig */
class __TwigTemplate_371f1bf24bc278521a134d5c601e597646aec308f8d45d79038feaf2e8d396fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enfermedad:index.html.twig", 1);
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
        $__internal_13589a8b3f48b59c3e56f728451fda7ee125f6316cde786cbbe25857bd975643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13589a8b3f48b59c3e56f728451fda7ee125f6316cde786cbbe25857bd975643->enter($__internal_13589a8b3f48b59c3e56f728451fda7ee125f6316cde786cbbe25857bd975643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:index.html.twig"));

        $__internal_c1c753c7e98629fd5a139a5b01f1a3709741324812a8cb7f447015ae32461666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c753c7e98629fd5a139a5b01f1a3709741324812a8cb7f447015ae32461666->enter($__internal_c1c753c7e98629fd5a139a5b01f1a3709741324812a8cb7f447015ae32461666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13589a8b3f48b59c3e56f728451fda7ee125f6316cde786cbbe25857bd975643->leave($__internal_13589a8b3f48b59c3e56f728451fda7ee125f6316cde786cbbe25857bd975643_prof);

        
        $__internal_c1c753c7e98629fd5a139a5b01f1a3709741324812a8cb7f447015ae32461666->leave($__internal_c1c753c7e98629fd5a139a5b01f1a3709741324812a8cb7f447015ae32461666_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a99a45c9eff8959d24b0586d876b7ea4c1802905ff42f2dc3b2c840607a6891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a99a45c9eff8959d24b0586d876b7ea4c1802905ff42f2dc3b2c840607a6891->enter($__internal_0a99a45c9eff8959d24b0586d876b7ea4c1802905ff42f2dc3b2c840607a6891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9769f7dc0f6fdfac3ff58589688e203c86a56ca16b01b856d579fcb0a383b7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9769f7dc0f6fdfac3ff58589688e203c86a56ca16b01b856d579fcb0a383b7a8->enter($__internal_9769f7dc0f6fdfac3ff58589688e203c86a56ca16b01b856d579fcb0a383b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Main Content -->
    <div class=\"container-fluid\">
        <div class=\"side-body\">
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
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enfermedads"] ?? $this->getContext($context, "enfermedads")));
        foreach ($context['_seq'] as $context["_key"] => $context["enfermedad"]) {
            // line 21
            echo "                    <tr>
                        <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_show", array("id" => $this->getAttribute($context["enfermedad"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfermedad"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfermedad"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["enfermedad"], "descripcion", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_show", array("id" => $this->getAttribute($context["enfermedad"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 31
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
        // line 37
        echo "                </tbody>
            </table>

            <ul>
                <li>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_new");
        echo "\">Create a new enfermedad</a>
                </li>
            </ul>

                </div>
            </div>
        </div>
";
        
        $__internal_9769f7dc0f6fdfac3ff58589688e203c86a56ca16b01b856d579fcb0a383b7a8->leave($__internal_9769f7dc0f6fdfac3ff58589688e203c86a56ca16b01b856d579fcb0a383b7a8_prof);

        
        $__internal_0a99a45c9eff8959d24b0586d876b7ea4c1802905ff42f2dc3b2c840607a6891->leave($__internal_0a99a45c9eff8959d24b0586d876b7ea4c1802905ff42f2dc3b2c840607a6891_prof);

    }

    public function getTemplateName()
    {
        return ":enfermedad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  109 => 37,  97 => 31,  91 => 28,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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

    <!-- Main Content -->
    <div class=\"container-fluid\">
        <div class=\"side-body\">
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

                </div>
            </div>
        </div>
{% endblock %}
", ":enfermedad:index.html.twig", "/var/www/html/scv/app/Resources/views/enfermedad/index.html.twig");
    }
}
