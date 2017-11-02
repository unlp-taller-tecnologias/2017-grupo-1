<?php

/* common/topbar.html.twig */
class __TwigTemplate_45efd2a48c4aba9a4c13b9d49438955cf1a695926e1dc7f86bb6446027044fec extends Twig_Template
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
        $__internal_5acb87a2fb6bbdcc77654b8f9a76072def1842f777eb0ad8855b7424c14fb953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acb87a2fb6bbdcc77654b8f9a76072def1842f777eb0ad8855b7424c14fb953->enter($__internal_5acb87a2fb6bbdcc77654b8f9a76072def1842f777eb0ad8855b7424c14fb953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common/topbar.html.twig"));

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
        
        $__internal_5acb87a2fb6bbdcc77654b8f9a76072def1842f777eb0ad8855b7424c14fb953->leave($__internal_5acb87a2fb6bbdcc77654b8f9a76072def1842f777eb0ad8855b7424c14fb953_prof);

    }

    public function getTemplateName()
    {
        return "common/topbar.html.twig";
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
<!-- end: TOPBAR -->", "common/topbar.html.twig", "/var/www/html/scv/app/Resources/views/common/topbar.html.twig");
    }
}
