<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_74e5e92bb73b0589dd411d7604a6b8447790c421cae6f2ced36d19c3694d3894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e5e92bb73b0589dd411d7604a6b8447790c421cae6f2ced36d19c3694d3894->enter($__internal_74e5e92bb73b0589dd411d7604a6b8447790c421cae6f2ced36d19c3694d3894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_993c8f57bac28f19c95b74c82e5b9c620f3ed990914cfeccf57a11355d579a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993c8f57bac28f19c95b74c82e5b9c620f3ed990914cfeccf57a11355d579a6a->enter($__internal_993c8f57bac28f19c95b74c82e5b9c620f3ed990914cfeccf57a11355d579a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74e5e92bb73b0589dd411d7604a6b8447790c421cae6f2ced36d19c3694d3894->leave($__internal_74e5e92bb73b0589dd411d7604a6b8447790c421cae6f2ced36d19c3694d3894_prof);

        
        $__internal_993c8f57bac28f19c95b74c82e5b9c620f3ed990914cfeccf57a11355d579a6a->leave($__internal_993c8f57bac28f19c95b74c82e5b9c620f3ed990914cfeccf57a11355d579a6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e96e4ef17d68b29d22a22e557bcb6bffb3a2fe0108006103d3447ff1d4b4edc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96e4ef17d68b29d22a22e557bcb6bffb3a2fe0108006103d3447ff1d4b4edc4->enter($__internal_e96e4ef17d68b29d22a22e557bcb6bffb3a2fe0108006103d3447ff1d4b4edc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64a235b0fd81055122cf4109112c3973fc7938a37850d4cfe352313d39f4d865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a235b0fd81055122cf4109112c3973fc7938a37850d4cfe352313d39f4d865->enter($__internal_64a235b0fd81055122cf4109112c3973fc7938a37850d4cfe352313d39f4d865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_64a235b0fd81055122cf4109112c3973fc7938a37850d4cfe352313d39f4d865->leave($__internal_64a235b0fd81055122cf4109112c3973fc7938a37850d4cfe352313d39f4d865_prof);

        
        $__internal_e96e4ef17d68b29d22a22e557bcb6bffb3a2fe0108006103d3447ff1d4b4edc4->leave($__internal_e96e4ef17d68b29d22a22e557bcb6bffb3a2fe0108006103d3447ff1d4b4edc4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e94b8e9721dbececdfdef644be6c41af7dafebfe77b0b65f4d993fe30ff7ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e94b8e9721dbececdfdef644be6c41af7dafebfe77b0b65f4d993fe30ff7ced->enter($__internal_5e94b8e9721dbececdfdef644be6c41af7dafebfe77b0b65f4d993fe30ff7ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d3bb691addf4f294e7d854594b182790e9be5a68d95baa6cb7486dabdc12b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3bb691addf4f294e7d854594b182790e9be5a68d95baa6cb7486dabdc12b0a->enter($__internal_7d3bb691addf4f294e7d854594b182790e9be5a68d95baa6cb7486dabdc12b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7d3bb691addf4f294e7d854594b182790e9be5a68d95baa6cb7486dabdc12b0a->leave($__internal_7d3bb691addf4f294e7d854594b182790e9be5a68d95baa6cb7486dabdc12b0a_prof);

        
        $__internal_5e94b8e9721dbececdfdef644be6c41af7dafebfe77b0b65f4d993fe30ff7ced->leave($__internal_5e94b8e9721dbececdfdef644be6c41af7dafebfe77b0b65f4d993fe30ff7ced_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
