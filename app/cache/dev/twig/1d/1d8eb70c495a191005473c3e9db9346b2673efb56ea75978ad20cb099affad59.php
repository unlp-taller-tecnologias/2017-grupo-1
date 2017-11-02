<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d998a0dfc6d8a8f43c0463805bf5472654045299d0f7237b3bc37c43d9e795d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_968d5058c0d6575f6f6b4b902512ab696e970f28637926bbc153329623e1e66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968d5058c0d6575f6f6b4b902512ab696e970f28637926bbc153329623e1e66d->enter($__internal_968d5058c0d6575f6f6b4b902512ab696e970f28637926bbc153329623e1e66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_968d5058c0d6575f6f6b4b902512ab696e970f28637926bbc153329623e1e66d->leave($__internal_968d5058c0d6575f6f6b4b902512ab696e970f28637926bbc153329623e1e66d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
