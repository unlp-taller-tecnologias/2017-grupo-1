<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ea36212cf7fcbb586b1d80364f2e8a3dadfb565d40a63d51eabee3a35fb773f0 extends Twig_Template
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
        $__internal_b00004ca38702234cf85f1fc929def37565364fd295c93e4cabbab41cce3512e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00004ca38702234cf85f1fc929def37565364fd295c93e4cabbab41cce3512e->enter($__internal_b00004ca38702234cf85f1fc929def37565364fd295c93e4cabbab41cce3512e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b00004ca38702234cf85f1fc929def37565364fd295c93e4cabbab41cce3512e->leave($__internal_b00004ca38702234cf85f1fc929def37565364fd295c93e4cabbab41cce3512e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
