<?php

/* :visitante:index.html.twig */
class __TwigTemplate_841df28e13b1f9f82fecd7f34982d64c94c5465002a8e36bc2c979bbf22ec930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":visitante:index.html.twig", 1);
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
        $__internal_4d51b15e1c632867301008a6c709ec09f4215d362039d1519196fee40c3d79b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d51b15e1c632867301008a6c709ec09f4215d362039d1519196fee40c3d79b6->enter($__internal_4d51b15e1c632867301008a6c709ec09f4215d362039d1519196fee40c3d79b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":visitante:index.html.twig"));

        $__internal_2aee657e940ad65f3a7527fe52f124364e93ff5703554d6deb7aa32bfcb46da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aee657e940ad65f3a7527fe52f124364e93ff5703554d6deb7aa32bfcb46da5->enter($__internal_2aee657e940ad65f3a7527fe52f124364e93ff5703554d6deb7aa32bfcb46da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":visitante:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d51b15e1c632867301008a6c709ec09f4215d362039d1519196fee40c3d79b6->leave($__internal_4d51b15e1c632867301008a6c709ec09f4215d362039d1519196fee40c3d79b6_prof);

        
        $__internal_2aee657e940ad65f3a7527fe52f124364e93ff5703554d6deb7aa32bfcb46da5->leave($__internal_2aee657e940ad65f3a7527fe52f124364e93ff5703554d6deb7aa32bfcb46da5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_755d69bcfedd0ace7146c8c12c39fa0615659a2656003a08508b8c1dce6d964b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755d69bcfedd0ace7146c8c12c39fa0615659a2656003a08508b8c1dce6d964b->enter($__internal_755d69bcfedd0ace7146c8c12c39fa0615659a2656003a08508b8c1dce6d964b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_13323f8456c260e25868849ee9787ef53b0fef3a344bc900cc7b4bd3dbb95a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13323f8456c260e25868849ee9787ef53b0fef3a344bc900cc7b4bd3dbb95a11->enter($__internal_13323f8456c260e25868849ee9787ef53b0fef3a344bc900cc7b4bd3dbb95a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Main Content -->
    <div class=\"container-fluid\">
        <div class=\"side-body\">

         <h2 class=\"text-center\"> Visitantes </h2>

         <form class=\"navbar-form navbar-right\" role=\"search\">
            <div class=\"form-group\">
               <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\">
            </div>
            <button type=\"submit\" class=\"btn btn-default\">Aceptar</button>
         </form>

         <table class=\"table table-hover table-striped table-bordered\">
            <thead>
            <tr>
                <th>N° Ficha</th> 
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Acciones</th>

            </tr>
            </thead>

            <tbody>


            <tr class=\"active\">
                <td width=\"75px\">12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\" style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-info\">Modificar Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-info\">Modificar Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\"  style=\"width: 400px;\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>
            </tbody>
         </table>





         <table class=\"table table-hover table-striped table-bordered\">
            <thead>
               <tr>
                  <th></th>
               </tr>
            </thead>

            <tbody>

            <tr class=\"active\">
                <td>
                    <ul class=\"pagination\">
                        <li><a href=\"#\">&laquo;</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
         </table>

         
      </div>
   </div>
";
        
        $__internal_13323f8456c260e25868849ee9787ef53b0fef3a344bc900cc7b4bd3dbb95a11->leave($__internal_13323f8456c260e25868849ee9787ef53b0fef3a344bc900cc7b4bd3dbb95a11_prof);

        
        $__internal_755d69bcfedd0ace7146c8c12c39fa0615659a2656003a08508b8c1dce6d964b->leave($__internal_755d69bcfedd0ace7146c8c12c39fa0615659a2656003a08508b8c1dce6d964b_prof);

    }

    public function getTemplateName()
    {
        return ":visitante:index.html.twig";
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

         <h2 class=\"text-center\"> Visitantes </h2>

         <form class=\"navbar-form navbar-right\" role=\"search\">
            <div class=\"form-group\">
               <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\">
            </div>
            <button type=\"submit\" class=\"btn btn-default\">Aceptar</button>
         </form>

         <table class=\"table table-hover table-striped table-bordered\">
            <thead>
            <tr>
                <th>N° Ficha</th> 
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Acciones</th>

            </tr>
            </thead>

            <tbody>


            <tr class=\"active\">
                <td width=\"75px\">12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\" style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-info\">Modificar Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-info\">Modificar Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\"  style=\"width: 400px;\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>

            <tr class=\"active\">
                <td>12</td>
                <td>Nahuel</td>
                <td>Zanelli</td>
                <td>12345678</td>
                <td class=\"text-center\"  style=\"width: 400px;\">
                    <button type=\"button\" class=\"btn btn-sm btn-success\">Alta Registro</button>
                    <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                    <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                </td>
            </tr>
            </tbody>
         </table>





         <table class=\"table table-hover table-striped table-bordered\">
            <thead>
               <tr>
                  <th></th>
               </tr>
            </thead>

            <tbody>

            <tr class=\"active\">
                <td>
                    <ul class=\"pagination\">
                        <li><a href=\"#\">&laquo;</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
         </table>

         
      </div>
   </div>
{% endblock %}
", ":visitante:index.html.twig", "/var/www/html/scv/app/Resources/views/visitante/index.html.twig");
    }
}
