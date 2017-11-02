<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_36b64577e846b122593e9974b6c738edb59c00855aefafb0bf62a37b09be37ef extends Twig_Template
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
        $__internal_a15bf53b12693bce5326a9aafc267ed539a6b0b9d1e324f5cfeafa8f7249dfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15bf53b12693bce5326a9aafc267ed539a6b0b9d1e324f5cfeafa8f7249dfa0->enter($__internal_a15bf53b12693bce5326a9aafc267ed539a6b0b9d1e324f5cfeafa8f7249dfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a15bf53b12693bce5326a9aafc267ed539a6b0b9d1e324f5cfeafa8f7249dfa0->leave($__internal_a15bf53b12693bce5326a9aafc267ed539a6b0b9d1e324f5cfeafa8f7249dfa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
