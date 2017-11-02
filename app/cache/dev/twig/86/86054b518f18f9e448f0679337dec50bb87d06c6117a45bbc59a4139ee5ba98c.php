<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4fd37df13f85254c05ca4f837ad89aeeacc0eda7b342eb00da0fdf1c2e6c8550 extends Twig_Template
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
        $__internal_5b8928d7326ffc32964efb26c1ec9ed7b3b66d023a1ac8071b8959b6538f4345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8928d7326ffc32964efb26c1ec9ed7b3b66d023a1ac8071b8959b6538f4345->enter($__internal_5b8928d7326ffc32964efb26c1ec9ed7b3b66d023a1ac8071b8959b6538f4345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5b8928d7326ffc32964efb26c1ec9ed7b3b66d023a1ac8071b8959b6538f4345->leave($__internal_5b8928d7326ffc32964efb26c1ec9ed7b3b66d023a1ac8071b8959b6538f4345_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
