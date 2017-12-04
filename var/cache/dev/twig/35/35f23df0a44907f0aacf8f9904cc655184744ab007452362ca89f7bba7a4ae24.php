<?php

/* sidebar.html.twig */
class __TwigTemplate_2d6dad235461de77ac53f9d16d253c7acf58c45e781f8d3373eab034f71ed29f extends Twig_Template
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
        $__internal_f10a61fd9e2eeff84168f530d48af299ee767ef821e402442d433d1d00f0240f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10a61fd9e2eeff84168f530d48af299ee767ef821e402442d433d1d00f0240f->enter($__internal_f10a61fd9e2eeff84168f530d48af299ee767ef821e402442d433d1d00f0240f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_a3cf1f47ffc2ec3754546c5fa2a3bf216641a50edab0af1ce7e7cdc69bbba236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cf1f47ffc2ec3754546c5fa2a3bf216641a50edab0af1ce7e7cdc69bbba236->enter($__internal_a3cf1f47ffc2ec3754546c5fa2a3bf216641a50edab0af1ce7e7cdc69bbba236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class=\"absolute-wrapper\"> </div> -->
    <!-- Menu -->
    <div class=\"side-menu\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <div class=\"brand-wrapper\">
                    <!-- Hamburger -->
                    <button type=\"button\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                    <!-- Brand -->
                    <div class=\"brand-name-wrapper\">
                        <a class=\"navbar-brand\" href=\"#\">
                            Bienvenido/a
                        </a>
                    </div>
                </div>

            </div>

            <!-- Main Menu -->
            <div class=\"side-menu-container\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span>Inicio</a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>Usuarios</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visitante");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Visitantes</a></li>
                    <li class=\"active\"><a href=\"#\"><span class=\"glyphicon glyphicon-calendar\"></span>Calendario</a></li>
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vacuna");
        echo "\"><span class=\"glyphicon glyphicon-plus-sign\"></span>Vacunas</a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-plus\"></span>Enfermedades</a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-plus-sign\"></span>Grupos de Riesgo</a></li>

                    <!-- Dropdown-->
                    <li class=\"panel panel-default\" id=\"dropdown\">
                        <a data-toggle=\"collapse\" href=\"#dropdown-lvl1\">
                            <span class=\"glyphicon glyphicon-th-list\"></span>Reportes<span class=\"caret\"></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id=\"dropdown-lvl1\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"#\">Reporte I</a></li>
                                    <li><a href=\"#\">Reporte II</a></li>
                                    <li><a href=\"#\">Repoerte III</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>";
        
        $__internal_f10a61fd9e2eeff84168f530d48af299ee767ef821e402442d433d1d00f0240f->leave($__internal_f10a61fd9e2eeff84168f530d48af299ee767ef821e402442d433d1d00f0240f_prof);

        
        $__internal_a3cf1f47ffc2ec3754546c5fa2a3bf216641a50edab0af1ce7e7cdc69bbba236->leave($__internal_a3cf1f47ffc2ec3754546c5fa2a3bf216641a50edab0af1ce7e7cdc69bbba236_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 35,  62 => 33,  57 => 31,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class=\"absolute-wrapper\"> </div> -->
    <!-- Menu -->
    <div class=\"side-menu\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <div class=\"brand-wrapper\">
                    <!-- Hamburger -->
                    <button type=\"button\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                    <!-- Brand -->
                    <div class=\"brand-name-wrapper\">
                        <a class=\"navbar-brand\" href=\"#\">
                            Bienvenido/a
                        </a>
                    </div>
                </div>

            </div>

            <!-- Main Menu -->
            <div class=\"side-menu-container\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"{{ path('homepage') }}\"><span class=\"glyphicon glyphicon-home\"></span>Inicio</a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>Usuarios</a></li>
                    <li><a href=\"{{ path('visitante') }}\"><span class=\"glyphicon glyphicon-user\"></span>Visitantes</a></li>
                    <li class=\"active\"><a href=\"#\"><span class=\"glyphicon glyphicon-calendar\"></span>Calendario</a></li>
                    <li><a href=\"{{ path('vacuna') }}\"><span class=\"glyphicon glyphicon-plus-sign\"></span>Vacunas</a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-plus\"></span>Enfermedades</a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-plus-sign\"></span>Grupos de Riesgo</a></li>

                    <!-- Dropdown-->
                    <li class=\"panel panel-default\" id=\"dropdown\">
                        <a data-toggle=\"collapse\" href=\"#dropdown-lvl1\">
                            <span class=\"glyphicon glyphicon-th-list\"></span>Reportes<span class=\"caret\"></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id=\"dropdown-lvl1\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"#\">Reporte I</a></li>
                                    <li><a href=\"#\">Reporte II</a></li>
                                    <li><a href=\"#\">Repoerte III</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>", "sidebar.html.twig", "/var/www/html/scv/app/Resources/views/sidebar.html.twig");
    }
}
