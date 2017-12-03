<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_03b76b6584a3d50ff3f377a4c90d73bb6df23ed2279a420e810df9dd78e64e9d extends Twig_Template
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
        $__internal_2473f574d7ffd21f73b95494d1beba19ff735532bf53d5136a718bbea4c6a64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2473f574d7ffd21f73b95494d1beba19ff735532bf53d5136a718bbea4c6a64b->enter($__internal_2473f574d7ffd21f73b95494d1beba19ff735532bf53d5136a718bbea4c6a64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ad8a2d1e6e5a64f2802e0add92a3e997f7c5b288eb673bb78ca7af8122ab53a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8a2d1e6e5a64f2802e0add92a3e997f7c5b288eb673bb78ca7af8122ab53a3->enter($__internal_ad8a2d1e6e5a64f2802e0add92a3e997f7c5b288eb673bb78ca7af8122ab53a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2473f574d7ffd21f73b95494d1beba19ff735532bf53d5136a718bbea4c6a64b->leave($__internal_2473f574d7ffd21f73b95494d1beba19ff735532bf53d5136a718bbea4c6a64b_prof);

        
        $__internal_ad8a2d1e6e5a64f2802e0add92a3e997f7c5b288eb673bb78ca7af8122ab53a3->leave($__internal_ad8a2d1e6e5a64f2802e0add92a3e997f7c5b288eb673bb78ca7af8122ab53a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
