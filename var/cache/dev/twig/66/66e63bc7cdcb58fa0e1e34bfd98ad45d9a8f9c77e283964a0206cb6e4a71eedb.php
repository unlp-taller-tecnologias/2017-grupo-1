<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_01b88c23518ab1d9decc2ce6cf813526f402148d5b7612d7a2d1242fa753b9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b88c23518ab1d9decc2ce6cf813526f402148d5b7612d7a2d1242fa753b9bc->enter($__internal_01b88c23518ab1d9decc2ce6cf813526f402148d5b7612d7a2d1242fa753b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_69e15afcac5bce5d68f73fc5a204aa657ab203876e77e1150896dace30085880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e15afcac5bce5d68f73fc5a204aa657ab203876e77e1150896dace30085880->enter($__internal_69e15afcac5bce5d68f73fc5a204aa657ab203876e77e1150896dace30085880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_01b88c23518ab1d9decc2ce6cf813526f402148d5b7612d7a2d1242fa753b9bc->leave($__internal_01b88c23518ab1d9decc2ce6cf813526f402148d5b7612d7a2d1242fa753b9bc_prof);

        
        $__internal_69e15afcac5bce5d68f73fc5a204aa657ab203876e77e1150896dace30085880->leave($__internal_69e15afcac5bce5d68f73fc5a204aa657ab203876e77e1150896dace30085880_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
