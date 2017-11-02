<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fa55ef3128b1cf53ec3fe4b677eeb436799114b9238e863d80fe0f61694e2d9d extends Twig_Template
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
        $__internal_e94995114f97a8fec72a967c2bf290f8acecaca9ae7035c741b7f24b46d7ee9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94995114f97a8fec72a967c2bf290f8acecaca9ae7035c741b7f24b46d7ee9e->enter($__internal_e94995114f97a8fec72a967c2bf290f8acecaca9ae7035c741b7f24b46d7ee9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e94995114f97a8fec72a967c2bf290f8acecaca9ae7035c741b7f24b46d7ee9e->leave($__internal_e94995114f97a8fec72a967c2bf290f8acecaca9ae7035c741b7f24b46d7ee9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
