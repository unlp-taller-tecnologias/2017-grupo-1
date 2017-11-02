<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fe4d4bc8e86c3577b60fd00bd1cdf6752c375104dd943ad66ecd08b9e830ff08 extends Twig_Template
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
        $__internal_272e4ce8f5cef5af935745aeb7be318b2a82426219cb4d95f4d050efdb5c392f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272e4ce8f5cef5af935745aeb7be318b2a82426219cb4d95f4d050efdb5c392f->enter($__internal_272e4ce8f5cef5af935745aeb7be318b2a82426219cb4d95f4d050efdb5c392f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_272e4ce8f5cef5af935745aeb7be318b2a82426219cb4d95f4d050efdb5c392f->leave($__internal_272e4ce8f5cef5af935745aeb7be318b2a82426219cb4d95f4d050efdb5c392f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
