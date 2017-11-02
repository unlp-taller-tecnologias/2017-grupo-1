<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ccb34ab3af5b6747c61d4f50ff54132a059c12a0d3a198d0a5a6ba58165d8feb extends Twig_Template
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
        $__internal_a4ff73e3062684572b23937334ca582b7ca3f8a14c8cba37a041fe98a2f2ee41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ff73e3062684572b23937334ca582b7ca3f8a14c8cba37a041fe98a2f2ee41->enter($__internal_a4ff73e3062684572b23937334ca582b7ca3f8a14c8cba37a041fe98a2f2ee41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_a4ff73e3062684572b23937334ca582b7ca3f8a14c8cba37a041fe98a2f2ee41->leave($__internal_a4ff73e3062684572b23937334ca582b7ca3f8a14c8cba37a041fe98a2f2ee41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
