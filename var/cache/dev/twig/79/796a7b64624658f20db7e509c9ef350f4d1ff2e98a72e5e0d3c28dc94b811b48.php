<?php

/* :enfermedad:edit.html.twig */
class __TwigTemplate_13c486d7aec5a8e854d3614e991460161107f495b5d03c644dfa38594f14458f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enfermedad:edit.html.twig", 1);
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
        $__internal_cc5b56199acf0fefd283b1370c6a81bb290b013990af38ecb27818f55a2f1d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5b56199acf0fefd283b1370c6a81bb290b013990af38ecb27818f55a2f1d73->enter($__internal_cc5b56199acf0fefd283b1370c6a81bb290b013990af38ecb27818f55a2f1d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:edit.html.twig"));

        $__internal_6744f6c56469e63dfdb55926a65a7e79df75ec7b7c646e1649c6e7ffc4d28004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6744f6c56469e63dfdb55926a65a7e79df75ec7b7c646e1649c6e7ffc4d28004->enter($__internal_6744f6c56469e63dfdb55926a65a7e79df75ec7b7c646e1649c6e7ffc4d28004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enfermedad:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5b56199acf0fefd283b1370c6a81bb290b013990af38ecb27818f55a2f1d73->leave($__internal_cc5b56199acf0fefd283b1370c6a81bb290b013990af38ecb27818f55a2f1d73_prof);

        
        $__internal_6744f6c56469e63dfdb55926a65a7e79df75ec7b7c646e1649c6e7ffc4d28004->leave($__internal_6744f6c56469e63dfdb55926a65a7e79df75ec7b7c646e1649c6e7ffc4d28004_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e1e2286b6aa63d256c05ad543916e0ca9ce3a132643a9e15a93cd89ef9af8f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1e2286b6aa63d256c05ad543916e0ca9ce3a132643a9e15a93cd89ef9af8f4->enter($__internal_8e1e2286b6aa63d256c05ad543916e0ca9ce3a132643a9e15a93cd89ef9af8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2368a4be7693bd81ae9d0689aed752aae4789e4434a805c4ff1794acba99daf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2368a4be7693bd81ae9d0689aed752aae4789e4434a805c4ff1794acba99daf4->enter($__internal_2368a4be7693bd81ae9d0689aed752aae4789e4434a805c4ff1794acba99daf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enfermedad edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfermedad_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2368a4be7693bd81ae9d0689aed752aae4789e4434a805c4ff1794acba99daf4->leave($__internal_2368a4be7693bd81ae9d0689aed752aae4789e4434a805c4ff1794acba99daf4_prof);

        
        $__internal_8e1e2286b6aa63d256c05ad543916e0ca9ce3a132643a9e15a93cd89ef9af8f4->leave($__internal_8e1e2286b6aa63d256c05ad543916e0ca9ce3a132643a9e15a93cd89ef9af8f4_prof);

    }

    public function getTemplateName()
    {
        return ":enfermedad:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Enfermedad edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('enfermedad_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":enfermedad:edit.html.twig", "/var/www/html/scv/app/Resources/views/enfermedad/edit.html.twig");
    }
}
