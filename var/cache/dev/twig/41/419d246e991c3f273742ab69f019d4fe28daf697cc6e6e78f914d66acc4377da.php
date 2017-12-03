<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_420662ea07c7eb31eafbc2e4c79560047a4af17b2eea2a28471cad821cd71dc7 extends Twig_Template
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
        $__internal_939e9a1bc85902ab4b36d95b3f5865a9f8e909b927dc430600a03e63b1f74408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939e9a1bc85902ab4b36d95b3f5865a9f8e909b927dc430600a03e63b1f74408->enter($__internal_939e9a1bc85902ab4b36d95b3f5865a9f8e909b927dc430600a03e63b1f74408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a3bb32c3944ee8bf360b0fba506f2326539b9a9c4d9f011c382933b4f0c625d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bb32c3944ee8bf360b0fba506f2326539b9a9c4d9f011c382933b4f0c625d0->enter($__internal_a3bb32c3944ee8bf360b0fba506f2326539b9a9c4d9f011c382933b4f0c625d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_939e9a1bc85902ab4b36d95b3f5865a9f8e909b927dc430600a03e63b1f74408->leave($__internal_939e9a1bc85902ab4b36d95b3f5865a9f8e909b927dc430600a03e63b1f74408_prof);

        
        $__internal_a3bb32c3944ee8bf360b0fba506f2326539b9a9c4d9f011c382933b4f0c625d0->leave($__internal_a3bb32c3944ee8bf360b0fba506f2326539b9a9c4d9f011c382933b4f0c625d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
