<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_daf9d969ecfa25eb7d04c7f676c58dc329c1618ae1218663651f2ee2cce689db extends Twig_Template
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
        $__internal_58aff1a8202ce34342a2a0538316ce0e9d616b82dbcebd30b715447efa4591f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58aff1a8202ce34342a2a0538316ce0e9d616b82dbcebd30b715447efa4591f5->enter($__internal_58aff1a8202ce34342a2a0538316ce0e9d616b82dbcebd30b715447efa4591f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_58aff1a8202ce34342a2a0538316ce0e9d616b82dbcebd30b715447efa4591f5->leave($__internal_58aff1a8202ce34342a2a0538316ce0e9d616b82dbcebd30b715447efa4591f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
