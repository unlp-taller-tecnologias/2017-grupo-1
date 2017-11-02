<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bd30bb8ff7f2e4c07791cdf8318020cd338bf9fc938bc703304ba492be5c77fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d9c18ca544e528c9387853deab54e498101404e81f6965701337643a017b0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9c18ca544e528c9387853deab54e498101404e81f6965701337643a017b0f9->enter($__internal_0d9c18ca544e528c9387853deab54e498101404e81f6965701337643a017b0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0d9c18ca544e528c9387853deab54e498101404e81f6965701337643a017b0f9->leave($__internal_0d9c18ca544e528c9387853deab54e498101404e81f6965701337643a017b0f9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b7b42ddd887e347eb38ce4ee591617777f7cbf7354a00666fac6e54334340f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7b42ddd887e347eb38ce4ee591617777f7cbf7354a00666fac6e54334340f0->enter($__internal_4b7b42ddd887e347eb38ce4ee591617777f7cbf7354a00666fac6e54334340f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b7b42ddd887e347eb38ce4ee591617777f7cbf7354a00666fac6e54334340f0->leave($__internal_4b7b42ddd887e347eb38ce4ee591617777f7cbf7354a00666fac6e54334340f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
