<?php

/* scripts.html.twig */
class __TwigTemplate_252fd46b9daa9c4df4160198eeefa1356b4828230b052c255d597bd2456cf7d2 extends Twig_Template
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
        $__internal_6441d741291d2b1804577d3eb98244c0ced12dec21e7c3a800ef1e70bc3189af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6441d741291d2b1804577d3eb98244c0ced12dec21e7c3a800ef1e70bc3189af->enter($__internal_6441d741291d2b1804577d3eb98244c0ced12dec21e7c3a800ef1e70bc3189af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "scripts.html.twig"));

        $__internal_4bb0ffc9ea6d45a0b3204c3834f15137b46d638a478110be40641a0a97578b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb0ffc9ea6d45a0b3204c3834f15137b46d638a478110be40641a0a97578b5f->enter($__internal_4bb0ffc9ea6d45a0b3204c3834f15137b46d638a478110be40641a0a97578b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "scripts.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6441d741291d2b1804577d3eb98244c0ced12dec21e7c3a800ef1e70bc3189af->leave($__internal_6441d741291d2b1804577d3eb98244c0ced12dec21e7c3a800ef1e70bc3189af_prof);

        
        $__internal_4bb0ffc9ea6d45a0b3204c3834f15137b46d638a478110be40641a0a97578b5f->leave($__internal_4bb0ffc9ea6d45a0b3204c3834f15137b46d638a478110be40641a0a97578b5f_prof);

    }

    public function getTemplateName()
    {
        return "scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{  asset('vendor/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{  asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script src=\"{{  asset('js/main.js') }}\"></script>
", "scripts.html.twig", "/var/www/html/scv/app/Resources/views/scripts.html.twig");
    }
}
