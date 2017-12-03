<?php

/* :vacuna:index.html.twig */
class __TwigTemplate_9fc21c8f38cb81045aaef5ede579f2ea45bef559b139ce78286f0b111e98f2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":vacuna:index.html.twig", 1);
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
        $__internal_33aceefbb5f815716cb125f246995bc71b96a5ed461892834d10bed581f3adfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33aceefbb5f815716cb125f246995bc71b96a5ed461892834d10bed581f3adfb->enter($__internal_33aceefbb5f815716cb125f246995bc71b96a5ed461892834d10bed581f3adfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vacuna:index.html.twig"));

        $__internal_960465a29afb10b6fcce67ee8a399ab3237e6df907d385bb604e5ad1cd08e547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960465a29afb10b6fcce67ee8a399ab3237e6df907d385bb604e5ad1cd08e547->enter($__internal_960465a29afb10b6fcce67ee8a399ab3237e6df907d385bb604e5ad1cd08e547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vacuna:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33aceefbb5f815716cb125f246995bc71b96a5ed461892834d10bed581f3adfb->leave($__internal_33aceefbb5f815716cb125f246995bc71b96a5ed461892834d10bed581f3adfb_prof);

        
        $__internal_960465a29afb10b6fcce67ee8a399ab3237e6df907d385bb604e5ad1cd08e547->leave($__internal_960465a29afb10b6fcce67ee8a399ab3237e6df907d385bb604e5ad1cd08e547_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d5deaad182008b615e240c30db45d6d36ee8a80516d977a08e8dc3a049dc773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5deaad182008b615e240c30db45d6d36ee8a80516d977a08e8dc3a049dc773->enter($__internal_1d5deaad182008b615e240c30db45d6d36ee8a80516d977a08e8dc3a049dc773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7ed6287c1322ce2d61339d868aacbcba2cfe74cd283a59fe6ff45afea0688024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed6287c1322ce2d61339d868aacbcba2cfe74cd283a59fe6ff45afea0688024->enter($__internal_7ed6287c1322ce2d61339d868aacbcba2cfe74cd283a59fe6ff45afea0688024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <!-- Main Content -->
    <div class=\"container-fluid\">
        <div class=\"side-body\">

          <h2 class=\"text-center\">Vacunas</h2>
          <table class=\"table table-hover table-striped table-bordered\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dosis Requeridas</th>
                    <th>Vencimiento?</th>
                    <th>Acciones</th>

                </tr>
            </thead>

            <tbody>

                <tr class=\"active\">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("altaVacuna");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Agregar</button></a></td>
                </tr>
               
                <tr class=\"active\">
                    <td>BCG</td>
                    <td>1</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
               </tr>

                <tr class=\"active\">
                    <td>Hepatitis B</td>
                    <td>2 </td>
                    <td>No</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificarVacuna");
        echo "\"><button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button></a>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>
            
                <tr class=\"active\">
                    <td>Neumococo Conjugada</td>
                    <td>3</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

                <tr class=\"active\">
                    <td>Quintuple Pentavolente</td>
                    <td>2</td>
                    <td>No</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

                <tr class=\"active\">
                    <td>Polio IPV</td>
                    <td>2</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

                <tr class=\"active\">
                    <td>Polio OPV</td>
                    <td>3</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

               <tr class=\"active\">
                  <td>Rotavirus</td>
                  <td>2</td>
                  <td>No</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>

";
        
        $__internal_7ed6287c1322ce2d61339d868aacbcba2cfe74cd283a59fe6ff45afea0688024->leave($__internal_7ed6287c1322ce2d61339d868aacbcba2cfe74cd283a59fe6ff45afea0688024_prof);

        
        $__internal_1d5deaad182008b615e240c30db45d6d36ee8a80516d977a08e8dc3a049dc773->leave($__internal_1d5deaad182008b615e240c30db45d6d36ee8a80516d977a08e8dc3a049dc773_prof);

    }

    public function getTemplateName()
    {
        return ":vacuna:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 48,  74 => 28,  49 => 5,  40 => 4,  11 => 1,);
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

          <h2 class=\"text-center\">Vacunas</h2>
          <table class=\"table table-hover table-striped table-bordered\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dosis Requeridas</th>
                    <th>Vencimiento?</th>
                    <th>Acciones</th>

                </tr>
            </thead>

            <tbody>

                <tr class=\"active\">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href=\"{{ path('altaVacuna') }}\"><button type=\"button\" class=\"btn btn-success\">Agregar</button></a></td>
                </tr>
               
                <tr class=\"active\">
                    <td>BCG</td>
                    <td>1</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
               </tr>

                <tr class=\"active\">
                    <td>Hepatitis B</td>
                    <td>2 </td>
                    <td>No</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <a href=\"{{ path('modificarVacuna') }}\"><button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button></a>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>
            
                <tr class=\"active\">
                    <td>Neumococo Conjugada</td>
                    <td>3</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

                <tr class=\"active\">
                    <td>Quintuple Pentavolente</td>
                    <td>2</td>
                    <td>No</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

                <tr class=\"active\">
                    <td>Polio IPV</td>
                    <td>2</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

                <tr class=\"active\">
                    <td>Polio OPV</td>
                    <td>3</td>
                    <td>Si</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
                </tr>

               <tr class=\"active\">
                  <td>Rotavirus</td>
                  <td>2</td>
                  <td>No</td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Detalle</button>
                        <button type=\"button\" class=\"btn btn-sm btn-warning\">Modificar</button>
                        <button type=\"button\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>

{% endblock %}", ":vacuna:index.html.twig", "/var/www/html/scv/app/Resources/views/vacuna/index.html.twig");
    }
}
