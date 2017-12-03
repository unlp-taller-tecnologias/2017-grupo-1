<?php

/* :visitante:altaExcel.html.twig */
class __TwigTemplate_26a46642bad25b8b25a4746b23015017fa6329c47960c6f4b51c0808bcfaf424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":visitante:altaExcel.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e7b00b5b115be80791e906fd77f792a5c4a97530ebb0c4edba5f8523477aba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7b00b5b115be80791e906fd77f792a5c4a97530ebb0c4edba5f8523477aba0->enter($__internal_1e7b00b5b115be80791e906fd77f792a5c4a97530ebb0c4edba5f8523477aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":visitante:altaExcel.html.twig"));

        $__internal_0352b4da9976ea3865cdb714a571d0948599f60be6744faf79432260fea4983b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0352b4da9976ea3865cdb714a571d0948599f60be6744faf79432260fea4983b->enter($__internal_0352b4da9976ea3865cdb714a571d0948599f60be6744faf79432260fea4983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":visitante:altaExcel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e7b00b5b115be80791e906fd77f792a5c4a97530ebb0c4edba5f8523477aba0->leave($__internal_1e7b00b5b115be80791e906fd77f792a5c4a97530ebb0c4edba5f8523477aba0_prof);

        
        $__internal_0352b4da9976ea3865cdb714a571d0948599f60be6744faf79432260fea4983b->leave($__internal_0352b4da9976ea3865cdb714a571d0948599f60be6744faf79432260fea4983b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_55b7415033e5cf4ea78db363f6b00fb6661d86a1a2ed445f1396ac6e6960e984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b7415033e5cf4ea78db363f6b00fb6661d86a1a2ed445f1396ac6e6960e984->enter($__internal_55b7415033e5cf4ea78db363f6b00fb6661d86a1a2ed445f1396ac6e6960e984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be7a49b4b628af2a3ec1635ab7c28984a806fe19f1d415bde3831945d81650cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7a49b4b628af2a3ec1635ab7c28984a806fe19f1d415bde3831945d81650cc->enter($__internal_be7a49b4b628af2a3ec1635ab7c28984a806fe19f1d415bde3831945d81650cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"main-container inner\">
        <div class=\"main-content\">
            <div class=\"container\">
                 <form class=\"form-horizontal\" enctype=\"multipart/form-data\" name=\"formHosp\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExcelToPhp");
        echo "\" method=\"POST\">
                    <input type=\"file\" name=\"excel\" />
                    <input type='submit' name='enviar' value=\"Importar\" />
                    <input type=\"hidden\" value=\"upload\" name=\"action\" />
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_be7a49b4b628af2a3ec1635ab7c28984a806fe19f1d415bde3831945d81650cc->leave($__internal_be7a49b4b628af2a3ec1635ab7c28984a806fe19f1d415bde3831945d81650cc_prof);

        
        $__internal_55b7415033e5cf4ea78db363f6b00fb6661d86a1a2ed445f1396ac6e6960e984->leave($__internal_55b7415033e5cf4ea78db363f6b00fb6661d86a1a2ed445f1396ac6e6960e984_prof);

    }

    public function getTemplateName()
    {
        return ":visitante:altaExcel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block content %}

    <div class=\"main-container inner\">
        <div class=\"main-content\">
            <div class=\"container\">
                 <form class=\"form-horizontal\" enctype=\"multipart/form-data\" name=\"formHosp\" action=\"{{path (\"ExcelToPhp\") }}\" method=\"POST\">
                    <input type=\"file\" name=\"excel\" />
                    <input type='submit' name='enviar' value=\"Importar\" />
                    <input type=\"hidden\" value=\"upload\" name=\"action\" />
                </form>
            </div>
        </div>
    </div>

{% endblock %}
", ":visitante:altaExcel.html.twig", "/var/www/html/scv/app/Resources/views/visitante/altaExcel.html.twig");
    }
}
