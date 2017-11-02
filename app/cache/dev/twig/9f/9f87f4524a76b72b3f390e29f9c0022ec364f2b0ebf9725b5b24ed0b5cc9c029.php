<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5adb379ac667c362006295831c0f43c267431774818258f10a63d52fa00fb0ee extends Twig_Template
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
        $__internal_321c127e7a9cf290174267e3773819c584b6977772fabf7422f380a8c6a5ed0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321c127e7a9cf290174267e3773819c584b6977772fabf7422f380a8c6a5ed0a->enter($__internal_321c127e7a9cf290174267e3773819c584b6977772fabf7422f380a8c6a5ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_321c127e7a9cf290174267e3773819c584b6977772fabf7422f380a8c6a5ed0a->leave($__internal_321c127e7a9cf290174267e3773819c584b6977772fabf7422f380a8c6a5ed0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
