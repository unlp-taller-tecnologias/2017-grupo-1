<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e4126f38c30a7004caf5cdd0f4c4d0a12a5e914c363d8d15265b87b37abb0457 extends Twig_Template
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
        $__internal_5a84b8606c7cdfd3170409573a947d2b884eaf98dd80a0f3e06b036964d8c8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a84b8606c7cdfd3170409573a947d2b884eaf98dd80a0f3e06b036964d8c8bb->enter($__internal_5a84b8606c7cdfd3170409573a947d2b884eaf98dd80a0f3e06b036964d8c8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5a84b8606c7cdfd3170409573a947d2b884eaf98dd80a0f3e06b036964d8c8bb->leave($__internal_5a84b8606c7cdfd3170409573a947d2b884eaf98dd80a0f3e06b036964d8c8bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
