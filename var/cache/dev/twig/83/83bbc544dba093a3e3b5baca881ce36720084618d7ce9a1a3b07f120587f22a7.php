<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_365409018ab92ace7889f7fea05429b7a6fb5dfa71fa90abcca0f5b97c4c6c04 extends Twig_Template
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
        $__internal_98bbc83e4bc9d51ec8834ba2849af0d905a11231734f0dd1fa26b5ae5749e2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bbc83e4bc9d51ec8834ba2849af0d905a11231734f0dd1fa26b5ae5749e2fa->enter($__internal_98bbc83e4bc9d51ec8834ba2849af0d905a11231734f0dd1fa26b5ae5749e2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_f3a54a1a4aa8adf100cf31dca54ed48f6d09f53416303b3e9ffff3688c16d76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a54a1a4aa8adf100cf31dca54ed48f6d09f53416303b3e9ffff3688c16d76a->enter($__internal_f3a54a1a4aa8adf100cf31dca54ed48f6d09f53416303b3e9ffff3688c16d76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_98bbc83e4bc9d51ec8834ba2849af0d905a11231734f0dd1fa26b5ae5749e2fa->leave($__internal_98bbc83e4bc9d51ec8834ba2849af0d905a11231734f0dd1fa26b5ae5749e2fa_prof);

        
        $__internal_f3a54a1a4aa8adf100cf31dca54ed48f6d09f53416303b3e9ffff3688c16d76a->leave($__internal_f3a54a1a4aa8adf100cf31dca54ed48f6d09f53416303b3e9ffff3688c16d76a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
