<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_106381100ca096094ec19a76bf49b8a44bc896a72f685beb71be075e7b303da6 extends Twig_Template
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
        $__internal_8ca23d8c37fea5ebbe0130d72c6e7bb0ed3375ace610bb340ec22747ba039e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca23d8c37fea5ebbe0130d72c6e7bb0ed3375ace610bb340ec22747ba039e4a->enter($__internal_8ca23d8c37fea5ebbe0130d72c6e7bb0ed3375ace610bb340ec22747ba039e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_839b0e61144f05afadb48129e51ba69457b761a0a3c82c9e094c1adeea4595fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839b0e61144f05afadb48129e51ba69457b761a0a3c82c9e094c1adeea4595fc->enter($__internal_839b0e61144f05afadb48129e51ba69457b761a0a3c82c9e094c1adeea4595fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8ca23d8c37fea5ebbe0130d72c6e7bb0ed3375ace610bb340ec22747ba039e4a->leave($__internal_8ca23d8c37fea5ebbe0130d72c6e7bb0ed3375ace610bb340ec22747ba039e4a_prof);

        
        $__internal_839b0e61144f05afadb48129e51ba69457b761a0a3c82c9e094c1adeea4595fc->leave($__internal_839b0e61144f05afadb48129e51ba69457b761a0a3c82c9e094c1adeea4595fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
