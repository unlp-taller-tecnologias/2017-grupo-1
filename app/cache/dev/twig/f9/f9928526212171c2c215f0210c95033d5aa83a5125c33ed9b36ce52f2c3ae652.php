<?php

/* ::base.html.twig */
class __TwigTemplate_9bad2a0e52d795e884490c0ceb61fabeb1fc6b3612201b9498f1c2d17134f0a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dde334e1d95417904c972e9fdd07f2776bc8a363b9a1cc5cae1292ef5d60d628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde334e1d95417904c972e9fdd07f2776bc8a363b9a1cc5cae1292ef5d60d628->enter($__internal_dde334e1d95417904c972e9fdd07f2776bc8a363b9a1cc5cae1292ef5d60d628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dde334e1d95417904c972e9fdd07f2776bc8a363b9a1cc5cae1292ef5d60d628->leave($__internal_dde334e1d95417904c972e9fdd07f2776bc8a363b9a1cc5cae1292ef5d60d628_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82b38a08c42298c72090aa7f25dfc51deaa766114ceab2f6ca881ea5d4b8e28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b38a08c42298c72090aa7f25dfc51deaa766114ceab2f6ca881ea5d4b8e28a->enter($__internal_82b38a08c42298c72090aa7f25dfc51deaa766114ceab2f6ca881ea5d4b8e28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82b38a08c42298c72090aa7f25dfc51deaa766114ceab2f6ca881ea5d4b8e28a->leave($__internal_82b38a08c42298c72090aa7f25dfc51deaa766114ceab2f6ca881ea5d4b8e28a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8aab94f000b41d0d718623d5d4592eeca846a9d208c44eeb9408592dada6aeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aab94f000b41d0d718623d5d4592eeca846a9d208c44eeb9408592dada6aeeb->enter($__internal_8aab94f000b41d0d718623d5d4592eeca846a9d208c44eeb9408592dada6aeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8aab94f000b41d0d718623d5d4592eeca846a9d208c44eeb9408592dada6aeeb->leave($__internal_8aab94f000b41d0d718623d5d4592eeca846a9d208c44eeb9408592dada6aeeb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d9df6accd49ab3d5cb2cf09ac395ee8581dbca1f13fc458021ccd5332ea99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d9df6accd49ab3d5cb2cf09ac395ee8581dbca1f13fc458021ccd5332ea99c->enter($__internal_c4d9df6accd49ab3d5cb2cf09ac395ee8581dbca1f13fc458021ccd5332ea99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4d9df6accd49ab3d5cb2cf09ac395ee8581dbca1f13fc458021ccd5332ea99c->leave($__internal_c4d9df6accd49ab3d5cb2cf09ac395ee8581dbca1f13fc458021ccd5332ea99c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b2c831fda6bef6257c947415f1632ccae3401b15745176a7a8119cbdb5de9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2c831fda6bef6257c947415f1632ccae3401b15745176a7a8119cbdb5de9ce->enter($__internal_4b2c831fda6bef6257c947415f1632ccae3401b15745176a7a8119cbdb5de9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4b2c831fda6bef6257c947415f1632ccae3401b15745176a7a8119cbdb5de9ce->leave($__internal_4b2c831fda6bef6257c947415f1632ccae3401b15745176a7a8119cbdb5de9ce_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/scv/app/Resources/views/base.html.twig");
    }
}
