<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_43a8ba4919bebbb89148111448a42654498087b1a3f19e4b9e32078af410d70c extends Twig_Template
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
        $__internal_55826077bca7a5d552f719deeb11152d9a89c773ed229fc8ad659b5c30cbe25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55826077bca7a5d552f719deeb11152d9a89c773ed229fc8ad659b5c30cbe25b->enter($__internal_55826077bca7a5d552f719deeb11152d9a89c773ed229fc8ad659b5c30cbe25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c582f9d3916a5c473640058811b49b4eb15b1be5c5046457b81cbd52e549cee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c582f9d3916a5c473640058811b49b4eb15b1be5c5046457b81cbd52e549cee1->enter($__internal_c582f9d3916a5c473640058811b49b4eb15b1be5c5046457b81cbd52e549cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_55826077bca7a5d552f719deeb11152d9a89c773ed229fc8ad659b5c30cbe25b->leave($__internal_55826077bca7a5d552f719deeb11152d9a89c773ed229fc8ad659b5c30cbe25b_prof);

        
        $__internal_c582f9d3916a5c473640058811b49b4eb15b1be5c5046457b81cbd52e549cee1->leave($__internal_c582f9d3916a5c473640058811b49b4eb15b1be5c5046457b81cbd52e549cee1_prof);

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
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
