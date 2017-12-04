<?php

/* head.html.twig */
class __TwigTemplate_28a350a88fbfba8f8c411b615fd8d9f9b179538cdd21cf584e98fb8c0d6f7264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe3a93258189f3607f7c1819efeeadbfbe7cb7171bcd9ebcc0e3a7840ce13d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3a93258189f3607f7c1819efeeadbfbe7cb7171bcd9ebcc0e3a7840ce13d30->enter($__internal_fe3a93258189f3607f7c1819efeeadbfbe7cb7171bcd9ebcc0e3a7840ce13d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

        $__internal_0598f01f2ea395cfc4f08f8c242bca310b4e5f41ed1978dfc101c55a6ba23410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0598f01f2ea395cfc4f08f8c242bca310b4e5f41ed1978dfc101c55a6ba23410->enter($__internal_0598f01f2ea395cfc4f08f8c242bca310b4e5f41ed1978dfc101c55a6ba23410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

        // line 1
        echo "<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/dist/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome-4.7.0/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
</head>";
        
        $__internal_fe3a93258189f3607f7c1819efeeadbfbe7cb7171bcd9ebcc0e3a7840ce13d30->leave($__internal_fe3a93258189f3607f7c1819efeeadbfbe7cb7171bcd9ebcc0e3a7840ce13d30_prof);

        
        $__internal_0598f01f2ea395cfc4f08f8c242bca310b4e5f41ed1978dfc101c55a6ba23410->leave($__internal_0598f01f2ea395cfc4f08f8c242bca310b4e5f41ed1978dfc101c55a6ba23410_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b22b965d852b07a7979df4c4b7e8d170fa78b9fe0eded081b5995477784e9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b22b965d852b07a7979df4c4b7e8d170fa78b9fe0eded081b5995477784e9df->enter($__internal_7b22b965d852b07a7979df4c4b7e8d170fa78b9fe0eded081b5995477784e9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd7adbd09ca422ca0859b5b9ebc4285544b2c903d6ba475d7587ebedf9942c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7adbd09ca422ca0859b5b9ebc4285544b2c903d6ba475d7587ebedf9942c24->enter($__internal_cd7adbd09ca422ca0859b5b9ebc4285544b2c903d6ba475d7587ebedf9942c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CSV - UNLP";
        
        $__internal_cd7adbd09ca422ca0859b5b9ebc4285544b2c903d6ba475d7587ebedf9942c24->leave($__internal_cd7adbd09ca422ca0859b5b9ebc4285544b2c903d6ba475d7587ebedf9942c24_prof);

        
        $__internal_7b22b965d852b07a7979df4c4b7e8d170fa78b9fe0eded081b5995477784e9df->leave($__internal_7b22b965d852b07a7979df4c4b7e8d170fa78b9fe0eded081b5995477784e9df_prof);

    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  30 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}CSV - UNLP{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link href=\"{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('vendor/bootstrap/dist/css/bootstrap-theme.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('vendor/font-awesome-4.7.0/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('css/sidebar.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
</head>", "head.html.twig", "/var/www/html/scv/app/Resources/views/head.html.twig");
    }
}
