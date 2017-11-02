<?php

/* default/index.html.twig */
class __TwigTemplate_65c244b6b93d009454e75143f640dbf4544501da54013f7341770ee87d851d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common/layout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "common/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fbaefce2277a8b8a4a23fc68632db2ce5450ae50b2ec4d83ad9316d8a437b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbaefce2277a8b8a4a23fc68632db2ce5450ae50b2ec4d83ad9316d8a437b67->enter($__internal_7fbaefce2277a8b8a4a23fc68632db2ce5450ae50b2ec4d83ad9316d8a437b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbaefce2277a8b8a4a23fc68632db2ce5450ae50b2ec4d83ad9316d8a437b67->leave($__internal_7fbaefce2277a8b8a4a23fc68632db2ce5450ae50b2ec4d83ad9316d8a437b67_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'common/layout.html.twig' %}", "default/index.html.twig", "/var/www/html/scv/app/Resources/views/default/index.html.twig");
    }
}
