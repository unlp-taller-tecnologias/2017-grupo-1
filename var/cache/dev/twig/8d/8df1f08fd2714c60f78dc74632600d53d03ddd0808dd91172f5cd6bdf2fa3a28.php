<?php

/* :enfermedad:show.html.twig */
class __TwigTemplate_10733bfb66c87bff9c7db39674c1e6a03c55bd9fd1b83b037987fa0bfd7cfce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enfermedad:show.html.twig", 1);
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
        $__internal_0c2c63b261742a7fbc5b33eb6f4c4a5bdfcaa84c420783063e930c40ab68720b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2c63b261742a7fbc5b33eb6f4c4a5bdfcaa84c420783063e930c40ab68720b->enter($__internal_0c2c63b261742a7fbc5b33eb6f4c4a5bdfcaa84c420783063e930c40ab68720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:show.html.twig"));

        $__internal_51a2984e337e3e7b4b945e5e288b4d70dae20c21ca5ed463b8f61433106e3f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a2984e337e3e7b4b945e5e288b4d70dae20c21ca5ed463b8f61433106e3f52->enter($__internal_51a2984e337e3e7b4b945e5e288b4d70dae20c21ca5ed463b8f61433106e3f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2c63b261742a7fbc5b33eb6f4c4a5bdfcaa84c420783063e930c40ab68720b->leave($__internal_0c2c63b261742a7fbc5b33eb6f4c4a5bdfcaa84c420783063e930c40ab68720b_prof);

        
        $__internal_51a2984e337e3e7b4b945e5e288b4d70dae20c21ca5ed463b8f61433106e3f52->leave($__internal_51a2984e337e3e7b4b945e5e288b4d70dae20c21ca5ed463b8f61433106e3f52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8be5044f69ef4a21db0ac679549aa01f6d67da6985d6698d7d7b421dbeb99004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be5044f69ef4a21db0ac679549aa01f6d67da6985d6698d7d7b421dbeb99004->enter($__internal_8be5044f69ef4a21db0ac679549aa01f6d67da6985d6698d7d7b421dbeb99004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ba7ff715bc2bdb8e28157bbd381865accea456cff3d895f6cd851aac6457f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba7ff715bc2bdb8e28157bbd381865accea456cff3d895f6cd851aac6457f22->enter($__internal_5ba7ff715bc2bdb8e28157bbd381865accea456cff3d895f6cd851aac6457f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enfermedad</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enfermedad"] ?? $this->getContext($context, "enfermedad")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enfermedad"] ?? $this->getContext($context, "enfermedad")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enfermedad"] ?? $this->getContext($context, "enfermedad")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_edit", array("id" => $this->getAttribute(($context["enfermedad"] ?? $this->getContext($context, "enfermedad")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5ba7ff715bc2bdb8e28157bbd381865accea456cff3d895f6cd851aac6457f22->leave($__internal_5ba7ff715bc2bdb8e28157bbd381865accea456cff3d895f6cd851aac6457f22_prof);

        
        $__internal_8be5044f69ef4a21db0ac679549aa01f6d67da6985d6698d7d7b421dbeb99004->leave($__internal_8be5044f69ef4a21db0ac679549aa01f6d67da6985d6698d7d7b421dbeb99004_prof);

    }

    public function getTemplateName()
    {
        return ":enfermedad:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Enfermedad</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ enfermedad.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ enfermedad.nombre }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ enfermedad.descripcion }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('enfermedad_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('enfermedad_edit', { 'id': enfermedad.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":enfermedad:show.html.twig", "/var/www/html/scv/app/Resources/views/enfermedad/show.html.twig");
    }
}
