<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f164f86d4d2676de1524a5742227b55f734d308321f30cfd297bf7bf224fbc1a extends Twig_Template
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
        $__internal_eee10f105983b5a99239cfef07eda48687505aa7109711e31a3b52fa3a88257c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee10f105983b5a99239cfef07eda48687505aa7109711e31a3b52fa3a88257c->enter($__internal_eee10f105983b5a99239cfef07eda48687505aa7109711e31a3b52fa3a88257c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_eee10f105983b5a99239cfef07eda48687505aa7109711e31a3b52fa3a88257c->leave($__internal_eee10f105983b5a99239cfef07eda48687505aa7109711e31a3b52fa3a88257c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
