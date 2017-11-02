<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_64e473747811316ec058bd7f889043a04caa4b403ca763861ac8c5a319102bae extends Twig_Template
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
        $__internal_068e7fe908909e8822605fd0bb30411f1babbe7dc99e8e5efc1ef4dce461be7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068e7fe908909e8822605fd0bb30411f1babbe7dc99e8e5efc1ef4dce461be7d->enter($__internal_068e7fe908909e8822605fd0bb30411f1babbe7dc99e8e5efc1ef4dce461be7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_068e7fe908909e8822605fd0bb30411f1babbe7dc99e8e5efc1ef4dce461be7d->leave($__internal_068e7fe908909e8822605fd0bb30411f1babbe7dc99e8e5efc1ef4dce461be7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
