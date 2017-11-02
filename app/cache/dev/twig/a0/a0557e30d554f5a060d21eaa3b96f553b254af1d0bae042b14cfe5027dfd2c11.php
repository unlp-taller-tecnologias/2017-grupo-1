<?php

/* :default:index.html.twig */
class __TwigTemplate_c0a77053d8023272cff60de315ba1b90e5958a7c6ce4fbe6334f967d13884b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common/layout.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "common/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c793d0d80dc08316e6493e5db8e9e78f19df703d5e7a245d2a495ceb80467a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c793d0d80dc08316e6493e5db8e9e78f19df703d5e7a245d2a495ceb80467a7->enter($__internal_1c793d0d80dc08316e6493e5db8e9e78f19df703d5e7a245d2a495ceb80467a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c793d0d80dc08316e6493e5db8e9e78f19df703d5e7a245d2a495ceb80467a7->leave($__internal_1c793d0d80dc08316e6493e5db8e9e78f19df703d5e7a245d2a495ceb80467a7_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
        return new Twig_Source("{% extends 'common/layout.html.twig' %}", ":default:index.html.twig", "/var/www/html/scv/app/Resources/views/default/index.html.twig");
    }
}
