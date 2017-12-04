<?php

/* base.html.twig */
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
        $__internal_5a9c95d196390aadef49e8ba93764c3d1c9b3f57a66df5f9c250776df22e5772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9c95d196390aadef49e8ba93764c3d1c9b3f57a66df5f9c250776df22e5772->enter($__internal_5a9c95d196390aadef49e8ba93764c3d1c9b3f57a66df5f9c250776df22e5772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a59fdcff27ae2b6c4310537dc2cd634fc7ec2e3908310cd8b7345fd499703fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59fdcff27ae2b6c4310537dc2cd634fc7ec2e3908310cd8b7345fd499703fee->enter($__internal_a59fdcff27ae2b6c4310537dc2cd634fc7ec2e3908310cd8b7345fd499703fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->loadTemplate("head.html.twig", "base.html.twig", 3)->display($context);
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
        
        $__internal_5a9c95d196390aadef49e8ba93764c3d1c9b3f57a66df5f9c250776df22e5772->leave($__internal_5a9c95d196390aadef49e8ba93764c3d1c9b3f57a66df5f9c250776df22e5772_prof);

        
        $__internal_a59fdcff27ae2b6c4310537dc2cd634fc7ec2e3908310cd8b7345fd499703fee->leave($__internal_a59fdcff27ae2b6c4310537dc2cd634fc7ec2e3908310cd8b7345fd499703fee_prof);

    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_e10855b61deeec41a6239da66190d66ad83664b8884bf82735aed5257805572a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10855b61deeec41a6239da66190d66ad83664b8884bf82735aed5257805572a->enter($__internal_e10855b61deeec41a6239da66190d66ad83664b8884bf82735aed5257805572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_d245da91123ca6c65814292bab07450c3f01f3d32d46fe2c783f209340f1147c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d245da91123ca6c65814292bab07450c3f01f3d32d46fe2c783f209340f1147c->enter($__internal_d245da91123ca6c65814292bab07450c3f01f3d32d46fe2c783f209340f1147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
            ";
        // line 7
        $this->loadTemplate("navbar.html.twig", "base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        
        $__internal_d245da91123ca6c65814292bab07450c3f01f3d32d46fe2c783f209340f1147c->leave($__internal_d245da91123ca6c65814292bab07450c3f01f3d32d46fe2c783f209340f1147c_prof);

        
        $__internal_e10855b61deeec41a6239da66190d66ad83664b8884bf82735aed5257805572a->leave($__internal_e10855b61deeec41a6239da66190d66ad83664b8884bf82735aed5257805572a_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1dd07e60cf7a9b0e252e39c12faa617b7eb5c959103cfc730727fb73fd14a4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd07e60cf7a9b0e252e39c12faa617b7eb5c959103cfc730727fb73fd14a4bb->enter($__internal_1dd07e60cf7a9b0e252e39c12faa617b7eb5c959103cfc730727fb73fd14a4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_cee072dac960b6a5aaac35e48453a1bfcdd38d7111298e14eac697948de9e006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee072dac960b6a5aaac35e48453a1bfcdd38d7111298e14eac697948de9e006->enter($__internal_cee072dac960b6a5aaac35e48453a1bfcdd38d7111298e14eac697948de9e006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "            ";
        $this->loadTemplate("sidebar.html.twig", "base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        
        $__internal_cee072dac960b6a5aaac35e48453a1bfcdd38d7111298e14eac697948de9e006->leave($__internal_cee072dac960b6a5aaac35e48453a1bfcdd38d7111298e14eac697948de9e006_prof);

        
        $__internal_1dd07e60cf7a9b0e252e39c12faa617b7eb5c959103cfc730727fb73fd14a4bb->leave($__internal_1dd07e60cf7a9b0e252e39c12faa617b7eb5c959103cfc730727fb73fd14a4bb_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d9032ef9454504b8a8d762312a8f3d034fce9aa3209f0d5fe3eefa5c6e4853e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9032ef9454504b8a8d762312a8f3d034fce9aa3209f0d5fe3eefa5c6e4853e->enter($__internal_4d9032ef9454504b8a8d762312a8f3d034fce9aa3209f0d5fe3eefa5c6e4853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5277389929a90838d41403f3c05c7ba1dd9d97e327ca7bd1996455e6e52cc390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5277389929a90838d41403f3c05c7ba1dd9d97e327ca7bd1996455e6e52cc390->enter($__internal_5277389929a90838d41403f3c05c7ba1dd9d97e327ca7bd1996455e6e52cc390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_5277389929a90838d41403f3c05c7ba1dd9d97e327ca7bd1996455e6e52cc390->leave($__internal_5277389929a90838d41403f3c05c7ba1dd9d97e327ca7bd1996455e6e52cc390_prof);

        
        $__internal_4d9032ef9454504b8a8d762312a8f3d034fce9aa3209f0d5fe3eefa5c6e4853e->leave($__internal_4d9032ef9454504b8a8d762312a8f3d034fce9aa3209f0d5fe3eefa5c6e4853e_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca296b7fae9c7d986812efeaa4fbc151ad5e51f96d5f9232a563cba1e522fde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca296b7fae9c7d986812efeaa4fbc151ad5e51f96d5f9232a563cba1e522fde5->enter($__internal_ca296b7fae9c7d986812efeaa4fbc151ad5e51f96d5f9232a563cba1e522fde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5446183e523f6685bef5c193c07bd0c707fde32cfc75adf0d646d9fea6d43ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5446183e523f6685bef5c193c07bd0c707fde32cfc75adf0d646d9fea6d43ee6->enter($__internal_5446183e523f6685bef5c193c07bd0c707fde32cfc75adf0d646d9fea6d43ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        $this->loadTemplate("scripts.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_5446183e523f6685bef5c193c07bd0c707fde32cfc75adf0d646d9fea6d43ee6->leave($__internal_5446183e523f6685bef5c193c07bd0c707fde32cfc75adf0d646d9fea6d43ee6_prof);

        
        $__internal_ca296b7fae9c7d986812efeaa4fbc151ad5e51f96d5f9232a563cba1e522fde5->leave($__internal_ca296b7fae9c7d986812efeaa4fbc151ad5e51f96d5f9232a563cba1e522fde5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
</html>", "base.html.twig", "/var/www/html/scv/app/Resources/views/base.html.twig");
    }
}
