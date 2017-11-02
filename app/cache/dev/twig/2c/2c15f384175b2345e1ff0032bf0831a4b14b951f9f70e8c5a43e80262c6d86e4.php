<?php

/* :common:pageSlideLeft.html.twig */
class __TwigTemplate_93d34a6c19ca0f43146943ec04c83c3cf9fe58a7b408c18c3d164be37d8352ef extends Twig_Template
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
        $__internal_49dfd6a4e895937613869c6fdd4c89e7f398d21ee8965877e9d48089e3765a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49dfd6a4e895937613869c6fdd4c89e7f398d21ee8965877e9d48089e3765a47->enter($__internal_49dfd6a4e895937613869c6fdd4c89e7f398d21ee8965877e9d48089e3765a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":common:pageSlideLeft.html.twig"));

        // line 1
        echo "<!-- start: PAGESLIDE LEFT -->
<a class=\"closedbar inner hidden-sm hidden-xs\" href=\"#\">
</a>
<nav id=\"pageslide-left\" class=\"pageslide inner\">
    <div class=\"navbar-content\">
        <!-- start: SIDEBAR -->
        <div class=\"main-navigation left-wrapper transition-left\">
            <div class=\"navigation-toggler hidden-sm hidden-xs\">
                <a href=\"#main-navbar\" class=\"sb-toggle-left\">
                </a>
            </div>
            <div class=\"user-profile border-top padding-horizontal-10 block\">
                <div class=\"inline-block\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"inline-block\">
                    <h5 class=\"no-margin\"> Bienvenido/a </h5>
                    <h4 class=\"no-margin\"> Silvia </h4>
                </div>
            </div>
            <!-- start: MAIN NAVIGATION MENU -->
            <ul class=\"main-navigation-menu\">
                <li class=\"active open\">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Inicio </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-users\"></i> <span class=\"title\"> Usuarios </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-calendar\"></i> <span class=\"title\"> Calendario Nacional </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Vacunas </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Enfermedades </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Grupos de Riesgos </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><i class=\"fa fa-pie-chart\"></i> <span class=\"title\"> Reportes </span><i class=\"icon-arrow\"></i> </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"layouts_sidebar_closed.html\">
                                <span class=\"title\"> <i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i>
                                    Reporte I </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"layouts_sidebar_not_fixed.html\">
                                <span class=\"title\"><i class=\"fa fa-area-chart\" aria-hidden=\"true\"></i>
                                    Reporte II</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"layouts_boxed_layout.html\">
                                <span class=\"title\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>
                                    Reporte III</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
    </div>
    <div class=\"slide-tools\">
        <div class=\"col-xs-6 text-left no-padding\">

        </div>
        <div class=\"col-xs-6 text-right no-padding\">
            <a class=\"btn btn-sm log-out text-right\" href=\"login_login.html\">
                <i class=\"fa fa-power-off\"></i> Cerrrar Sesión
            </a>
        </div>
    </div>
</nav>
<!-- end: PAGESLIDE LEFT -->";
        
        $__internal_49dfd6a4e895937613869c6fdd4c89e7f398d21ee8965877e9d48089e3765a47->leave($__internal_49dfd6a4e895937613869c6fdd4c89e7f398d21ee8965877e9d48089e3765a47_prof);

    }

    public function getTemplateName()
    {
        return ":common:pageSlideLeft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- start: PAGESLIDE LEFT -->
<a class=\"closedbar inner hidden-sm hidden-xs\" href=\"#\">
</a>
<nav id=\"pageslide-left\" class=\"pageslide inner\">
    <div class=\"navbar-content\">
        <!-- start: SIDEBAR -->
        <div class=\"main-navigation left-wrapper transition-left\">
            <div class=\"navigation-toggler hidden-sm hidden-xs\">
                <a href=\"#main-navbar\" class=\"sb-toggle-left\">
                </a>
            </div>
            <div class=\"user-profile border-top padding-horizontal-10 block\">
                <div class=\"inline-block\">
                    <img src=\"{{ asset('rapido/images/avatar-1.jpg') }}\" alt=\"\">
                </div>
                <div class=\"inline-block\">
                    <h5 class=\"no-margin\"> Bienvenido/a </h5>
                    <h4 class=\"no-margin\"> Silvia </h4>
                </div>
            </div>
            <!-- start: MAIN NAVIGATION MENU -->
            <ul class=\"main-navigation-menu\">
                <li class=\"active open\">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Inicio </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-users\"></i> <span class=\"title\"> Usuarios </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-calendar\"></i> <span class=\"title\"> Calendario Nacional </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Vacunas </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Enfermedades </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li class=\" \">
                    <a href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"title\"> Grupos de Riesgos </span><span class=\"label label-default pull-right \">Ir</span> </a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><i class=\"fa fa-pie-chart\"></i> <span class=\"title\"> Reportes </span><i class=\"icon-arrow\"></i> </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"layouts_sidebar_closed.html\">
                                <span class=\"title\"> <i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i>
                                    Reporte I </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"layouts_sidebar_not_fixed.html\">
                                <span class=\"title\"><i class=\"fa fa-area-chart\" aria-hidden=\"true\"></i>
                                    Reporte II</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"layouts_boxed_layout.html\">
                                <span class=\"title\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>
                                    Reporte III</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
    </div>
    <div class=\"slide-tools\">
        <div class=\"col-xs-6 text-left no-padding\">

        </div>
        <div class=\"col-xs-6 text-right no-padding\">
            <a class=\"btn btn-sm log-out text-right\" href=\"login_login.html\">
                <i class=\"fa fa-power-off\"></i> Cerrrar Sesión
            </a>
        </div>
    </div>
</nav>
<!-- end: PAGESLIDE LEFT -->", ":common:pageSlideLeft.html.twig", "/var/www/html/scv/app/Resources/views/common/pageSlideLeft.html.twig");
    }
}
