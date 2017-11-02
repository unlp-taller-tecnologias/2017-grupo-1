<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_978d67f2e9657a44412631b6a77082065b12e922b397735a1172a7b981ac65cd extends Twig_Template
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
        $__internal_0ddd416d58f8ba007d7ae6b6bcbbe29ddd9443c86752febc46e618341ac9cbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddd416d58f8ba007d7ae6b6bcbbe29ddd9443c86752febc46e618341ac9cbaf->enter($__internal_0ddd416d58f8ba007d7ae6b6bcbbe29ddd9443c86752febc46e618341ac9cbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0ddd416d58f8ba007d7ae6b6bcbbe29ddd9443c86752febc46e618341ac9cbaf->leave($__internal_0ddd416d58f8ba007d7ae6b6bcbbe29ddd9443c86752febc46e618341ac9cbaf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
