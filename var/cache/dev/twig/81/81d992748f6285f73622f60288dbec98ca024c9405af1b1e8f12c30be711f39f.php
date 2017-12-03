<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_ccd0af329dca31bc82d73e77f91d145eb8c3be5d7a224318da68e2cbf74759f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd0af329dca31bc82d73e77f91d145eb8c3be5d7a224318da68e2cbf74759f3->enter($__internal_ccd0af329dca31bc82d73e77f91d145eb8c3be5d7a224318da68e2cbf74759f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f91fa85bf48a74885ef14bb3252beeb4379197db8d70fe2ef77be2f9b98f0ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91fa85bf48a74885ef14bb3252beeb4379197db8d70fe2ef77be2f9b98f0ea9->enter($__internal_f91fa85bf48a74885ef14bb3252beeb4379197db8d70fe2ef77be2f9b98f0ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ccd0af329dca31bc82d73e77f91d145eb8c3be5d7a224318da68e2cbf74759f3->leave($__internal_ccd0af329dca31bc82d73e77f91d145eb8c3be5d7a224318da68e2cbf74759f3_prof);

        
        $__internal_f91fa85bf48a74885ef14bb3252beeb4379197db8d70fe2ef77be2f9b98f0ea9->leave($__internal_f91fa85bf48a74885ef14bb3252beeb4379197db8d70fe2ef77be2f9b98f0ea9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
