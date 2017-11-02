<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6bc71e920eb3d42e81876b0f4969cd805f7656ad133c2e48ae2f6716be0b675e extends Twig_Template
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
        $__internal_e3f5f4c36b0143a2de56f3201759752f7e95f18af5fc3ec2a56da9107bc3e59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f5f4c36b0143a2de56f3201759752f7e95f18af5fc3ec2a56da9107bc3e59d->enter($__internal_e3f5f4c36b0143a2de56f3201759752f7e95f18af5fc3ec2a56da9107bc3e59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_e3f5f4c36b0143a2de56f3201759752f7e95f18af5fc3ec2a56da9107bc3e59d->leave($__internal_e3f5f4c36b0143a2de56f3201759752f7e95f18af5fc3ec2a56da9107bc3e59d_prof);

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
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
