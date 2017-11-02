<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c6cd9329df5ad04d0e5276687b57c249db7188f2d445369e00bca3e55e6d5f35 extends Twig_Template
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
        $__internal_133b96ebd18d8edd6549c8e2c72aa9dd470a2ee175676e06ce6af72d57a629bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133b96ebd18d8edd6549c8e2c72aa9dd470a2ee175676e06ce6af72d57a629bf->enter($__internal_133b96ebd18d8edd6549c8e2c72aa9dd470a2ee175676e06ce6af72d57a629bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_133b96ebd18d8edd6549c8e2c72aa9dd470a2ee175676e06ce6af72d57a629bf->leave($__internal_133b96ebd18d8edd6549c8e2c72aa9dd470a2ee175676e06ce6af72d57a629bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
