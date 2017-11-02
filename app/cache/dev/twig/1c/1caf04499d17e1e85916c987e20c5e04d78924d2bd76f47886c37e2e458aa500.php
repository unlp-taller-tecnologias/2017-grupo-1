<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6d533680f20fcb2962e3ce59154b8b4f0fba9670e32ab7397a4dfdb0f9e67274 extends Twig_Template
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
        $__internal_4e835d0c360384e050c3a00a6ec3115331dc13369b9abb674d9ec84b87dd525e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e835d0c360384e050c3a00a6ec3115331dc13369b9abb674d9ec84b87dd525e->enter($__internal_4e835d0c360384e050c3a00a6ec3115331dc13369b9abb674d9ec84b87dd525e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4e835d0c360384e050c3a00a6ec3115331dc13369b9abb674d9ec84b87dd525e->leave($__internal_4e835d0c360384e050c3a00a6ec3115331dc13369b9abb674d9ec84b87dd525e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
