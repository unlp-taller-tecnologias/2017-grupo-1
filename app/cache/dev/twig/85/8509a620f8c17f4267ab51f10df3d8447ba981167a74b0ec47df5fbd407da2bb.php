<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4b86e5a6aaa5951513c7732af6c6fc18f06c72d6a075c6f600011590aa9a660e extends Twig_Template
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
        $__internal_d91e1743c20bf8cdf5add555a2deac8134b8b0a63b0aae8e8bc079bf2697a74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91e1743c20bf8cdf5add555a2deac8134b8b0a63b0aae8e8bc079bf2697a74f->enter($__internal_d91e1743c20bf8cdf5add555a2deac8134b8b0a63b0aae8e8bc079bf2697a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d91e1743c20bf8cdf5add555a2deac8134b8b0a63b0aae8e8bc079bf2697a74f->leave($__internal_d91e1743c20bf8cdf5add555a2deac8134b8b0a63b0aae8e8bc079bf2697a74f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
