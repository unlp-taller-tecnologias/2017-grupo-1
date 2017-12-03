<?php

/* :vacuna:alta.html.twig */
class __TwigTemplate_cf715f17101db73e4aa53837d35be906d36e2109adb7cf41b2be9ea1bf634697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":vacuna:alta.html.twig", 1);
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
        $__internal_cdd0366e4006156f2f014534507660a867b9e4145a9d8581635d073d8084becc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd0366e4006156f2f014534507660a867b9e4145a9d8581635d073d8084becc->enter($__internal_cdd0366e4006156f2f014534507660a867b9e4145a9d8581635d073d8084becc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vacuna:alta.html.twig"));

        $__internal_bd4c252123493c6bfff964a20ab2d6f6c25e1cb7b718d70763016c80e9655ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4c252123493c6bfff964a20ab2d6f6c25e1cb7b718d70763016c80e9655ae3->enter($__internal_bd4c252123493c6bfff964a20ab2d6f6c25e1cb7b718d70763016c80e9655ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vacuna:alta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd0366e4006156f2f014534507660a867b9e4145a9d8581635d073d8084becc->leave($__internal_cdd0366e4006156f2f014534507660a867b9e4145a9d8581635d073d8084becc_prof);

        
        $__internal_bd4c252123493c6bfff964a20ab2d6f6c25e1cb7b718d70763016c80e9655ae3->leave($__internal_bd4c252123493c6bfff964a20ab2d6f6c25e1cb7b718d70763016c80e9655ae3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dba12d6812a8847218995bfc9688fa084069fd45baaec49423f71044b39d747f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba12d6812a8847218995bfc9688fa084069fd45baaec49423f71044b39d747f->enter($__internal_dba12d6812a8847218995bfc9688fa084069fd45baaec49423f71044b39d747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d73602b88675d8149492d294a2560a1cba56d4e9317399c4dcd4cce2998fc9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73602b88675d8149492d294a2560a1cba56d4e9317399c4dcd4cce2998fc9a5->enter($__internal_d73602b88675d8149492d294a2560a1cba56d4e9317399c4dcd4cce2998fc9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Main Content -->
    <div class=\"container-fluid\">
        <div class=\"side-body\">
\t\t\t<div class=\"row\">

\t\t\t\t<h2 class=\"text-center\">Alta Vacuna</h2>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<form role=\"form\" class=\"col-md-6 col-md-offset-3\" style=\"background: white; padding: 50px;\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"nombre\">Nombre</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"Nombre de la vacuna\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"abreviatura\">Abreviatura</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"abreviatura\" placeholder=\"Abreviatura de la vacuna\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"docis\">Docis requeridas</label>
\t\t\t\t\t\t<input type=\"number\" name=\"docis\" id=\"docis\" min=\"1\" max=\"10\" placeholder=\"1\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\"> Pertenece al calendario naciona de vacunacion?
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\"> Tiene Vencimiento?
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>

\t\t\t\t</form>
\t\t\t</div>

\t\t</div>
\t</div>


";
        
        $__internal_d73602b88675d8149492d294a2560a1cba56d4e9317399c4dcd4cce2998fc9a5->leave($__internal_d73602b88675d8149492d294a2560a1cba56d4e9317399c4dcd4cce2998fc9a5_prof);

        
        $__internal_dba12d6812a8847218995bfc9688fa084069fd45baaec49423f71044b39d747f->leave($__internal_dba12d6812a8847218995bfc9688fa084069fd45baaec49423f71044b39d747f_prof);

    }

    public function getTemplateName()
    {
        return ":vacuna:alta.html.twig";
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

    <!-- Main Content -->
    <div class=\"container-fluid\">
        <div class=\"side-body\">
\t\t\t<div class=\"row\">

\t\t\t\t<h2 class=\"text-center\">Alta Vacuna</h2>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<form role=\"form\" class=\"col-md-6 col-md-offset-3\" style=\"background: white; padding: 50px;\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"nombre\">Nombre</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"Nombre de la vacuna\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"abreviatura\">Abreviatura</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"abreviatura\" placeholder=\"Abreviatura de la vacuna\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"docis\">Docis requeridas</label>
\t\t\t\t\t\t<input type=\"number\" name=\"docis\" id=\"docis\" min=\"1\" max=\"10\" placeholder=\"1\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\"> Pertenece al calendario naciona de vacunacion?
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"Obligatioria\"> Tiene Vencimiento?
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>

\t\t\t\t</form>
\t\t\t</div>

\t\t</div>
\t</div>


{% endblock %}", ":vacuna:alta.html.twig", "/var/www/html/scv/app/Resources/views/vacuna/alta.html.twig");
    }
}
