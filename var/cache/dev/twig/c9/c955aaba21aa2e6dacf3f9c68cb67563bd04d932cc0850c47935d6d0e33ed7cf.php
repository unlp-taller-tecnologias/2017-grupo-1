<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1a7fd2a3da7b53b8fe318ca359a31e9bfa9d928236123d7d38e625027f7dc1c4 extends Twig_Template
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
        $__internal_13a29593b6e3e3ee286a612c19dafa7883cfe12a141cd1dd298e6a904455a699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a29593b6e3e3ee286a612c19dafa7883cfe12a141cd1dd298e6a904455a699->enter($__internal_13a29593b6e3e3ee286a612c19dafa7883cfe12a141cd1dd298e6a904455a699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_a2565d29db6c366b89403f16a54770e3141c8bcba79820f122d2f2ace857acb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2565d29db6c366b89403f16a54770e3141c8bcba79820f122d2f2ace857acb6->enter($__internal_a2565d29db6c366b89403f16a54770e3141c8bcba79820f122d2f2ace857acb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_13a29593b6e3e3ee286a612c19dafa7883cfe12a141cd1dd298e6a904455a699->leave($__internal_13a29593b6e3e3ee286a612c19dafa7883cfe12a141cd1dd298e6a904455a699_prof);

        
        $__internal_a2565d29db6c366b89403f16a54770e3141c8bcba79820f122d2f2ace857acb6->leave($__internal_a2565d29db6c366b89403f16a54770e3141c8bcba79820f122d2f2ace857acb6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
