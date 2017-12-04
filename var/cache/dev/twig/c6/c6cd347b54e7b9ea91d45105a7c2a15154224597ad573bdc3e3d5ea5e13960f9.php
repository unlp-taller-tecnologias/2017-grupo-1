<?php

/* navbar.html.twig */
class __TwigTemplate_8fbd91eb93690c7ab036e15545f110d47e83d51547aa0f584d2f7e14f05850c6 extends Twig_Template
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
        $__internal_a81e07069d8edba9fd5897deb9e559a96cc6270e4358e3169eaaf2ba8158d924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81e07069d8edba9fd5897deb9e559a96cc6270e4358e3169eaaf2ba8158d924->enter($__internal_a81e07069d8edba9fd5897deb9e559a96cc6270e4358e3169eaaf2ba8158d924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_bb64a7d2c8073f7885a7048c6567f8e58d041a41e9f074195e81ed16f3d0b379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb64a7d2c8073f7885a7048c6567f8e58d041a41e9f074195e81ed16f3d0b379->enter($__internal_bb64a7d2c8073f7885a7048c6567f8e58d041a41e9f074195e81ed16f3d0b379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Silvia Ayala <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Mi Cuenta</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Cerrar Sesion</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_a81e07069d8edba9fd5897deb9e559a96cc6270e4358e3169eaaf2ba8158d924->leave($__internal_a81e07069d8edba9fd5897deb9e559a96cc6270e4358e3169eaaf2ba8158d924_prof);

        
        $__internal_bb64a7d2c8073f7885a7048c6567f8e58d041a41e9f074195e81ed16f3d0b379->leave($__internal_bb64a7d2c8073f7885a7048c6567f8e58d041a41e9f074195e81ed16f3d0b379_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Silvia Ayala <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Mi Cuenta</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Cerrar Sesion</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>", "navbar.html.twig", "/var/www/html/scv/app/Resources/views/navbar.html.twig");
    }
}
