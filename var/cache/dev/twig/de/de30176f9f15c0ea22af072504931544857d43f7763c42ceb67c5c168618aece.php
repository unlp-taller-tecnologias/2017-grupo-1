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
        $__internal_05b3063f214580f6b4ba18a303c81cb11b6bb7ce4e01cfe45919db5e4e5a1160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b3063f214580f6b4ba18a303c81cb11b6bb7ce4e01cfe45919db5e4e5a1160->enter($__internal_05b3063f214580f6b4ba18a303c81cb11b6bb7ce4e01cfe45919db5e4e5a1160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

        $__internal_29571643c32426bfa066ab423b8336492b966dc73284586fbbb60a5eece61ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29571643c32426bfa066ab423b8336492b966dc73284586fbbb60a5eece61ea1->enter($__internal_29571643c32426bfa066ab423b8336492b966dc73284586fbbb60a5eece61ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

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
        
        $__internal_05b3063f214580f6b4ba18a303c81cb11b6bb7ce4e01cfe45919db5e4e5a1160->leave($__internal_05b3063f214580f6b4ba18a303c81cb11b6bb7ce4e01cfe45919db5e4e5a1160_prof);

        
        $__internal_29571643c32426bfa066ab423b8336492b966dc73284586fbbb60a5eece61ea1->leave($__internal_29571643c32426bfa066ab423b8336492b966dc73284586fbbb60a5eece61ea1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efe5d77feaeecf6c84542a70faef254359d9c6ac6e19abf8a31c5d46452240ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe5d77feaeecf6c84542a70faef254359d9c6ac6e19abf8a31c5d46452240ac->enter($__internal_efe5d77feaeecf6c84542a70faef254359d9c6ac6e19abf8a31c5d46452240ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b796f7642d145ef2f5a7455b447e3892286807967d68102bbe3d666190569ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b796f7642d145ef2f5a7455b447e3892286807967d68102bbe3d666190569ef->enter($__internal_8b796f7642d145ef2f5a7455b447e3892286807967d68102bbe3d666190569ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CSV - UNLP";
        
        $__internal_8b796f7642d145ef2f5a7455b447e3892286807967d68102bbe3d666190569ef->leave($__internal_8b796f7642d145ef2f5a7455b447e3892286807967d68102bbe3d666190569ef_prof);

        
        $__internal_efe5d77feaeecf6c84542a70faef254359d9c6ac6e19abf8a31c5d46452240ac->leave($__internal_efe5d77feaeecf6c84542a70faef254359d9c6ac6e19abf8a31c5d46452240ac_prof);

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
