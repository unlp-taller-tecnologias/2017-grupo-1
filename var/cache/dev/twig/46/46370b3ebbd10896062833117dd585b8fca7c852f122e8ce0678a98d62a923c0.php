<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8b80adb9338105607039f313a2856d066d8cef22f533aa2350d29cd16cb1d358 extends Twig_Template
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
        $__internal_400801cbdd5d334a2dbcdec50fc5f060bd907048b16b46ea0e6b4fb4e43ff082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400801cbdd5d334a2dbcdec50fc5f060bd907048b16b46ea0e6b4fb4e43ff082->enter($__internal_400801cbdd5d334a2dbcdec50fc5f060bd907048b16b46ea0e6b4fb4e43ff082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e2d759fc1e13d63567352959a9abb91543c8883ccf11a9fba0939f9fa770cb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d759fc1e13d63567352959a9abb91543c8883ccf11a9fba0939f9fa770cb04->enter($__internal_e2d759fc1e13d63567352959a9abb91543c8883ccf11a9fba0939f9fa770cb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_400801cbdd5d334a2dbcdec50fc5f060bd907048b16b46ea0e6b4fb4e43ff082->leave($__internal_400801cbdd5d334a2dbcdec50fc5f060bd907048b16b46ea0e6b4fb4e43ff082_prof);

        
        $__internal_e2d759fc1e13d63567352959a9abb91543c8883ccf11a9fba0939f9fa770cb04->leave($__internal_e2d759fc1e13d63567352959a9abb91543c8883ccf11a9fba0939f9fa770cb04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
