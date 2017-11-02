<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0bf8cd405b812e3a1e278edbc684334545a92d10dd326b0763c98b34e962cc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acc1fff9619ccf744c84b45912ead07e44bdc8209a427b3d6f4524045f1b5e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc1fff9619ccf744c84b45912ead07e44bdc8209a427b3d6f4524045f1b5e04->enter($__internal_acc1fff9619ccf744c84b45912ead07e44bdc8209a427b3d6f4524045f1b5e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc1fff9619ccf744c84b45912ead07e44bdc8209a427b3d6f4524045f1b5e04->leave($__internal_acc1fff9619ccf744c84b45912ead07e44bdc8209a427b3d6f4524045f1b5e04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50a00bb5604437372f88a8d6ff09c915d2f891a1ccf4221f76a480f354df32d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a00bb5604437372f88a8d6ff09c915d2f891a1ccf4221f76a480f354df32d1->enter($__internal_50a00bb5604437372f88a8d6ff09c915d2f891a1ccf4221f76a480f354df32d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_50a00bb5604437372f88a8d6ff09c915d2f891a1ccf4221f76a480f354df32d1->leave($__internal_50a00bb5604437372f88a8d6ff09c915d2f891a1ccf4221f76a480f354df32d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7a90f03cb960b1bc8e5f1abb4023fcae16a89635561cdf2ec0c613ee93a2d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a90f03cb960b1bc8e5f1abb4023fcae16a89635561cdf2ec0c613ee93a2d7d->enter($__internal_c7a90f03cb960b1bc8e5f1abb4023fcae16a89635561cdf2ec0c613ee93a2d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c7a90f03cb960b1bc8e5f1abb4023fcae16a89635561cdf2ec0c613ee93a2d7d->leave($__internal_c7a90f03cb960b1bc8e5f1abb4023fcae16a89635561cdf2ec0c613ee93a2d7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f54d7768f89b27633f3c92e2db58bb62840d54597908520294d633a07413ffbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54d7768f89b27633f3c92e2db58bb62840d54597908520294d633a07413ffbb->enter($__internal_f54d7768f89b27633f3c92e2db58bb62840d54597908520294d633a07413ffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f54d7768f89b27633f3c92e2db58bb62840d54597908520294d633a07413ffbb->leave($__internal_f54d7768f89b27633f3c92e2db58bb62840d54597908520294d633a07413ffbb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
