<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d1614a6926bfe6f0a3ad149c2021759abde4b8c204fc60b834919bd80da1502c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be47baa78d4f274b1925bf98452e889d0856646bd45abee5a1e56c698a42fa2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be47baa78d4f274b1925bf98452e889d0856646bd45abee5a1e56c698a42fa2c->enter($__internal_be47baa78d4f274b1925bf98452e889d0856646bd45abee5a1e56c698a42fa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be47baa78d4f274b1925bf98452e889d0856646bd45abee5a1e56c698a42fa2c->leave($__internal_be47baa78d4f274b1925bf98452e889d0856646bd45abee5a1e56c698a42fa2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93a23c7e6a074d7dc7bc9403fa10c1f3897d4fe65b14f9e6b7f5395452edd6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a23c7e6a074d7dc7bc9403fa10c1f3897d4fe65b14f9e6b7f5395452edd6cc->enter($__internal_93a23c7e6a074d7dc7bc9403fa10c1f3897d4fe65b14f9e6b7f5395452edd6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_93a23c7e6a074d7dc7bc9403fa10c1f3897d4fe65b14f9e6b7f5395452edd6cc->leave($__internal_93a23c7e6a074d7dc7bc9403fa10c1f3897d4fe65b14f9e6b7f5395452edd6cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ab6c1c05b8bc44aff0e5ba55871bebfdc177eb1486735ab3d4160125b83f74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab6c1c05b8bc44aff0e5ba55871bebfdc177eb1486735ab3d4160125b83f74f->enter($__internal_8ab6c1c05b8bc44aff0e5ba55871bebfdc177eb1486735ab3d4160125b83f74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8ab6c1c05b8bc44aff0e5ba55871bebfdc177eb1486735ab3d4160125b83f74f->leave($__internal_8ab6c1c05b8bc44aff0e5ba55871bebfdc177eb1486735ab3d4160125b83f74f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_20ce2f688b986e733bec60b4ec8933d8478d737cb2257c62748698cf7bbe3fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ce2f688b986e733bec60b4ec8933d8478d737cb2257c62748698cf7bbe3fc9->enter($__internal_20ce2f688b986e733bec60b4ec8933d8478d737cb2257c62748698cf7bbe3fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
";
        
        $__internal_20ce2f688b986e733bec60b4ec8933d8478d737cb2257c62748698cf7bbe3fc9->leave($__internal_20ce2f688b986e733bec60b4ec8933d8478d737cb2257c62748698cf7bbe3fc9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1a52d245c092f7527151515531e3a78890dcbb76fcfe39c29dc22f1fbc275f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a52d245c092f7527151515531e3a78890dcbb76fcfe39c29dc22f1fbc275f2e->enter($__internal_1a52d245c092f7527151515531e3a78890dcbb76fcfe39c29dc22f1fbc275f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1a52d245c092f7527151515531e3a78890dcbb76fcfe39c29dc22f1fbc275f2e->leave($__internal_1a52d245c092f7527151515531e3a78890dcbb76fcfe39c29dc22f1fbc275f2e_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/var/www/html/scv/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
