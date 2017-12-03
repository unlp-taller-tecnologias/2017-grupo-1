<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ade8a18e153597b3fee723ccfcac60d42189be1eb7161a8299946ee6e0ba6326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade8a18e153597b3fee723ccfcac60d42189be1eb7161a8299946ee6e0ba6326->enter($__internal_ade8a18e153597b3fee723ccfcac60d42189be1eb7161a8299946ee6e0ba6326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_57f834fdc6d45266abd4660156dea88820b1f3d340c4207912ed41362ecaa9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f834fdc6d45266abd4660156dea88820b1f3d340c4207912ed41362ecaa9f5->enter($__internal_57f834fdc6d45266abd4660156dea88820b1f3d340c4207912ed41362ecaa9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->loadTemplate("head.html.twig", "::base.html.twig", 3)->display($context);
        // line 4
        echo "    <body>

        ";
        // line 6
        $this->displayBlock('navbar', $context, $blocks);
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>";
        
        $__internal_ade8a18e153597b3fee723ccfcac60d42189be1eb7161a8299946ee6e0ba6326->leave($__internal_ade8a18e153597b3fee723ccfcac60d42189be1eb7161a8299946ee6e0ba6326_prof);

        
        $__internal_57f834fdc6d45266abd4660156dea88820b1f3d340c4207912ed41362ecaa9f5->leave($__internal_57f834fdc6d45266abd4660156dea88820b1f3d340c4207912ed41362ecaa9f5_prof);

    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_1fdabd2bd8f5a2d3f65cc4b8806eb6f5fe21c51a3dae83e8770af56a30ef2c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdabd2bd8f5a2d3f65cc4b8806eb6f5fe21c51a3dae83e8770af56a30ef2c96->enter($__internal_1fdabd2bd8f5a2d3f65cc4b8806eb6f5fe21c51a3dae83e8770af56a30ef2c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_8c0e56d6f6ff728a00d229e7ed1ee95ba8283ef621600e38d122d692b725b37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0e56d6f6ff728a00d229e7ed1ee95ba8283ef621600e38d122d692b725b37c->enter($__internal_8c0e56d6f6ff728a00d229e7ed1ee95ba8283ef621600e38d122d692b725b37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
            ";
        // line 7
        $this->loadTemplate("navbar.html.twig", "::base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        
        $__internal_8c0e56d6f6ff728a00d229e7ed1ee95ba8283ef621600e38d122d692b725b37c->leave($__internal_8c0e56d6f6ff728a00d229e7ed1ee95ba8283ef621600e38d122d692b725b37c_prof);

        
        $__internal_1fdabd2bd8f5a2d3f65cc4b8806eb6f5fe21c51a3dae83e8770af56a30ef2c96->leave($__internal_1fdabd2bd8f5a2d3f65cc4b8806eb6f5fe21c51a3dae83e8770af56a30ef2c96_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c07e02af36d8fd01e2e277fbff787abf02ffd0d47533bf873b6feb772c804a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07e02af36d8fd01e2e277fbff787abf02ffd0d47533bf873b6feb772c804a17->enter($__internal_c07e02af36d8fd01e2e277fbff787abf02ffd0d47533bf873b6feb772c804a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_373dd67a165da2b73d2ab35c67cd322fc792b4cca12d74deae5d52e46c2264d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373dd67a165da2b73d2ab35c67cd322fc792b4cca12d74deae5d52e46c2264d5->enter($__internal_373dd67a165da2b73d2ab35c67cd322fc792b4cca12d74deae5d52e46c2264d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "            ";
        $this->loadTemplate("sidebar.html.twig", "::base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        
        $__internal_373dd67a165da2b73d2ab35c67cd322fc792b4cca12d74deae5d52e46c2264d5->leave($__internal_373dd67a165da2b73d2ab35c67cd322fc792b4cca12d74deae5d52e46c2264d5_prof);

        
        $__internal_c07e02af36d8fd01e2e277fbff787abf02ffd0d47533bf873b6feb772c804a17->leave($__internal_c07e02af36d8fd01e2e277fbff787abf02ffd0d47533bf873b6feb772c804a17_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb1206c63b5a2539ec8d12db865963a2a2abd208a2d0897185c7404e87a6c026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1206c63b5a2539ec8d12db865963a2a2abd208a2d0897185c7404e87a6c026->enter($__internal_cb1206c63b5a2539ec8d12db865963a2a2abd208a2d0897185c7404e87a6c026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7da9cc3fe4dcc8d92da9151dfb88b53c95ea74f486eade3681d41a1642253d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da9cc3fe4dcc8d92da9151dfb88b53c95ea74f486eade3681d41a1642253d71->enter($__internal_7da9cc3fe4dcc8d92da9151dfb88b53c95ea74f486eade3681d41a1642253d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_7da9cc3fe4dcc8d92da9151dfb88b53c95ea74f486eade3681d41a1642253d71->leave($__internal_7da9cc3fe4dcc8d92da9151dfb88b53c95ea74f486eade3681d41a1642253d71_prof);

        
        $__internal_cb1206c63b5a2539ec8d12db865963a2a2abd208a2d0897185c7404e87a6c026->leave($__internal_cb1206c63b5a2539ec8d12db865963a2a2abd208a2d0897185c7404e87a6c026_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a314e33a09b64cca2985d870ca2b469dca034f628a9e2683999fe749e1f83a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a314e33a09b64cca2985d870ca2b469dca034f628a9e2683999fe749e1f83a4->enter($__internal_0a314e33a09b64cca2985d870ca2b469dca034f628a9e2683999fe749e1f83a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6475a96d1f71650ab0a2f290ed58d3cd0113fdc33273175a65aaf4d8fa53676d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6475a96d1f71650ab0a2f290ed58d3cd0113fdc33273175a65aaf4d8fa53676d->enter($__internal_6475a96d1f71650ab0a2f290ed58d3cd0113fdc33273175a65aaf4d8fa53676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        $this->loadTemplate("scripts.html.twig", "::base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_6475a96d1f71650ab0a2f290ed58d3cd0113fdc33273175a65aaf4d8fa53676d->leave($__internal_6475a96d1f71650ab0a2f290ed58d3cd0113fdc33273175a65aaf4d8fa53676d_prof);

        
        $__internal_0a314e33a09b64cca2985d870ca2b469dca034f628a9e2683999fe749e1f83a4->leave($__internal_0a314e33a09b64cca2985d870ca2b469dca034f628a9e2683999fe749e1f83a4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 18,  139 => 17,  130 => 16,  112 => 14,  102 => 12,  99 => 11,  90 => 10,  80 => 8,  78 => 7,  67 => 6,  56 => 19,  54 => 16,  51 => 15,  49 => 14,  46 => 13,  44 => 10,  41 => 9,  39 => 6,  35 => 4,  33 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    {% include 'head.html.twig' %}
    <body>

        {% block navbar %} 
            {% include 'navbar.html.twig' %}
        {% endblock %}

        {% block sidebar %}
            {% include 'sidebar.html.twig' %}
        {% endblock %}

        {% block content %} {% endblock %}

        {% block javascripts %}
            {% include 'scripts.html.twig' %}
        {% endblock %}
    </body>
</html>", "::base.html.twig", "/var/www/html/scv/app/Resources/views/base.html.twig");
    }
}
