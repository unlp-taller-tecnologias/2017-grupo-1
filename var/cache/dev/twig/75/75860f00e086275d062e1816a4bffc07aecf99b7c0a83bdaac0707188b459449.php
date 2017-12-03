<?php

/* :vacuna:modificar.html.twig */
class __TwigTemplate_b78184b37333d6176d603b7f23536b057ef8e7ae706d1a20f0b980e4ad0fd2a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":vacuna:modificar.html.twig", 1);
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
        $__internal_61a9d7207bf098f40527e6bd6efbef7239d55f63373fb98a371ac7203a3b1062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a9d7207bf098f40527e6bd6efbef7239d55f63373fb98a371ac7203a3b1062->enter($__internal_61a9d7207bf098f40527e6bd6efbef7239d55f63373fb98a371ac7203a3b1062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vacuna:modificar.html.twig"));

        $__internal_7f0f14e09023745b31c46d14b4d29607d8fd911f81c834689286a881f6d6d25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0f14e09023745b31c46d14b4d29607d8fd911f81c834689286a881f6d6d25c->enter($__internal_7f0f14e09023745b31c46d14b4d29607d8fd911f81c834689286a881f6d6d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vacuna:modificar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a9d7207bf098f40527e6bd6efbef7239d55f63373fb98a371ac7203a3b1062->leave($__internal_61a9d7207bf098f40527e6bd6efbef7239d55f63373fb98a371ac7203a3b1062_prof);

        
        $__internal_7f0f14e09023745b31c46d14b4d29607d8fd911f81c834689286a881f6d6d25c->leave($__internal_7f0f14e09023745b31c46d14b4d29607d8fd911f81c834689286a881f6d6d25c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_339e633e900c97c6723e14cb7726e308aa3509bf31702b01db9fc1a1dcf766ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339e633e900c97c6723e14cb7726e308aa3509bf31702b01db9fc1a1dcf766ac->enter($__internal_339e633e900c97c6723e14cb7726e308aa3509bf31702b01db9fc1a1dcf766ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3f6b6450953fa0bd5b30d598e4b735dbace3d8e302d6e86af425b375afbf9486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6b6450953fa0bd5b30d598e4b735dbace3d8e302d6e86af425b375afbf9486->enter($__internal_3f6b6450953fa0bd5b30d598e4b735dbace3d8e302d6e86af425b375afbf9486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"main-container inner\">
\t<div class=\"main-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<h2 class=\"text-center\">Modificar Vacuna</h2>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<form role=\"form\" class=\"col-md-6 col-md-offset-3\" style=\"background: white; padding: 50px;\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"nombre\">Nombre</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"Hepatitis B\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"abreviatura\">Abreviatura</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"abreviatura\" placeholder=\"HB\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"docis\">Docis requeridas</label>
\t\t\t\t\t\t<input type=\"number\" name=\"docis\" id=\"docis\" min=\"1\" max=\"10\" placeholder=\"2\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\" checked> Pertenece al calendario naciona de vacunacion?
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\"> Tiene Vencimiento?
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Guardar</button>

\t\t\t\t</form>
\t\t\t</div>

\t\t</div>
\t</div>
</div>

";
        
        $__internal_3f6b6450953fa0bd5b30d598e4b735dbace3d8e302d6e86af425b375afbf9486->leave($__internal_3f6b6450953fa0bd5b30d598e4b735dbace3d8e302d6e86af425b375afbf9486_prof);

        
        $__internal_339e633e900c97c6723e14cb7726e308aa3509bf31702b01db9fc1a1dcf766ac->leave($__internal_339e633e900c97c6723e14cb7726e308aa3509bf31702b01db9fc1a1dcf766ac_prof);

    }

    public function getTemplateName()
    {
        return ":vacuna:modificar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
\t<div class=\"main-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<h2 class=\"text-center\">Modificar Vacuna</h2>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<form role=\"form\" class=\"col-md-6 col-md-offset-3\" style=\"background: white; padding: 50px;\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"nombre\">Nombre</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"Hepatitis B\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"abreviatura\">Abreviatura</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"abreviatura\" placeholder=\"HB\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"docis\">Docis requeridas</label>
\t\t\t\t\t\t<input type=\"number\" name=\"docis\" id=\"docis\" min=\"1\" max=\"10\" placeholder=\"2\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\" checked> Pertenece al calendario naciona de vacunacion?
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\"> Tiene Vencimiento?
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Guardar</button>

\t\t\t\t</form>
\t\t\t</div>

\t\t</div>
\t</div>
</div>

{% endblock %}", ":vacuna:modificar.html.twig", "/var/www/html/scv/app/Resources/views/vacuna/modificar.html.twig");
    }
}
