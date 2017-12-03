<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_877508cad7d200fcf78773b6eb6f491100e7815a9640bc823c2181189114503d extends Twig_Template
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
        $__internal_966d33d3e27678f88915ee233da8db69d90b57112d1d29f3dee31a993aaa6419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966d33d3e27678f88915ee233da8db69d90b57112d1d29f3dee31a993aaa6419->enter($__internal_966d33d3e27678f88915ee233da8db69d90b57112d1d29f3dee31a993aaa6419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_84793c8abd350b40c7bf38a6de93b430b0952c5206a18e1dd17b01dc4bae76ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84793c8abd350b40c7bf38a6de93b430b0952c5206a18e1dd17b01dc4bae76ec->enter($__internal_84793c8abd350b40c7bf38a6de93b430b0952c5206a18e1dd17b01dc4bae76ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_966d33d3e27678f88915ee233da8db69d90b57112d1d29f3dee31a993aaa6419->leave($__internal_966d33d3e27678f88915ee233da8db69d90b57112d1d29f3dee31a993aaa6419_prof);

        
        $__internal_84793c8abd350b40c7bf38a6de93b430b0952c5206a18e1dd17b01dc4bae76ec->leave($__internal_84793c8abd350b40c7bf38a6de93b430b0952c5206a18e1dd17b01dc4bae76ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
