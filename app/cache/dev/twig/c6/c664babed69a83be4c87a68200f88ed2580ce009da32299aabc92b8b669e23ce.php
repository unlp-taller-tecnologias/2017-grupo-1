<?php

/* :common:topbar.html.twig */
class __TwigTemplate_653e3770e4a7e5da8c14f7b2f79f32058a15997e1e120d2b7b00bb7b8fc753cf extends Twig_Template
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
        $__internal_7b7335114f11a5b0f297897ecbdfc38940b4d8a2ad1c03ecce26732d7153124f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7335114f11a5b0f297897ecbdfc38940b4d8a2ad1c03ecce26732d7153124f->enter($__internal_7b7335114f11a5b0f297897ecbdfc38940b4d8a2ad1c03ecce26732d7153124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":common:topbar.html.twig"));

        // line 1
        echo "<!-- start: TOPBAR -->
<header class=\"topbar navbar navbar-inverse navbar-fixed-top inner\">
    <!-- start: TOPBAR CONTAINER -->
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"sb-toggle-left hidden-md hidden-lg\" href=\"#main-navbar\">
                <i class=\"fa fa-bars\"></i>
            </a>
            <!-- start: LOGO -->
            <a class=\"navbar-brand\" href=\"index.html\">
                Sistema de Control de Vacunación
            </a>
            <!-- end: LOGO -->
        </div>
        <div class=\"topbar-tools\">
            <!-- start: TOP NAVIGATION MENU -->
            <ul class=\"nav navbar-right\">
                <!-- start: USER DROPDOWN -->
                <li class=\"dropdown current-user\">
                    <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-1-small.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> <span class=\"username hidden-xs\">Silvia Ayala</span> <i class=\"fa fa-caret-down \"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-dark\">
                        <li>
                            <a href=\"login_login.html\">
                                Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- end: TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- end: TOPBAR CONTAINER -->
</header>
<!-- end: TOPBAR -->";
        
        $__internal_7b7335114f11a5b0f297897ecbdfc38940b4d8a2ad1c03ecce26732d7153124f->leave($__internal_7b7335114f11a5b0f297897ecbdfc38940b4d8a2ad1c03ecce26732d7153124f_prof);

    }

    public function getTemplateName()
    {
        return ":common:topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- start: TOPBAR -->
<header class=\"topbar navbar navbar-inverse navbar-fixed-top inner\">
    <!-- start: TOPBAR CONTAINER -->
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"sb-toggle-left hidden-md hidden-lg\" href=\"#main-navbar\">
                <i class=\"fa fa-bars\"></i>
            </a>
            <!-- start: LOGO -->
            <a class=\"navbar-brand\" href=\"index.html\">
                Sistema de Control de Vacunación
            </a>
            <!-- end: LOGO -->
        </div>
        <div class=\"topbar-tools\">
            <!-- start: TOP NAVIGATION MENU -->
            <ul class=\"nav navbar-right\">
                <!-- start: USER DROPDOWN -->
                <li class=\"dropdown current-user\">
                    <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                        <img src=\"{{ asset('rapido/images/avatar-1-small.jpg') }}\" class=\"img-circle\" alt=\"\"> <span class=\"username hidden-xs\">Silvia Ayala</span> <i class=\"fa fa-caret-down \"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-dark\">
                        <li>
                            <a href=\"login_login.html\">
                                Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- end: TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- end: TOPBAR CONTAINER -->
</header>
<!-- end: TOPBAR -->", ":common:topbar.html.twig", "/var/www/html/scv/app/Resources/views/common/topbar.html.twig");
    }
}
