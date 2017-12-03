<?php

/* ::navbar.html.twig */
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
        $__internal_5784966b677956e0c098500656c4f469ca2c9355e9a94f6bac90a1ed478b7b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5784966b677956e0c098500656c4f469ca2c9355e9a94f6bac90a1ed478b7b69->enter($__internal_5784966b677956e0c098500656c4f469ca2c9355e9a94f6bac90a1ed478b7b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        $__internal_73f280814cdf5543926aab2bcc4fd63a1a4c44682a02558c6f398c0a43f2fcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f280814cdf5543926aab2bcc4fd63a1a4c44682a02558c6f398c0a43f2fcb2->enter($__internal_73f280814cdf5543926aab2bcc4fd63a1a4c44682a02558c6f398c0a43f2fcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

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
        
        $__internal_5784966b677956e0c098500656c4f469ca2c9355e9a94f6bac90a1ed478b7b69->leave($__internal_5784966b677956e0c098500656c4f469ca2c9355e9a94f6bac90a1ed478b7b69_prof);

        
        $__internal_73f280814cdf5543926aab2bcc4fd63a1a4c44682a02558c6f398c0a43f2fcb2->leave($__internal_73f280814cdf5543926aab2bcc4fd63a1a4c44682a02558c6f398c0a43f2fcb2_prof);

    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
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
</nav>", "::navbar.html.twig", "/var/www/html/scv/app/Resources/views/navbar.html.twig");
    }
}
