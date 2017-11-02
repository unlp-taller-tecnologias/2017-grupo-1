<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5f4b4f129db1757a2d3c8497582a706c30bd64ba36a26df544dcd87ea12cfcc7 extends Twig_Template
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
        $__internal_d92d600025df012fa2970bc6fe01ed89a672781ecf9c6e4cc776e59e1b6e11a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92d600025df012fa2970bc6fe01ed89a672781ecf9c6e4cc776e59e1b6e11a0->enter($__internal_d92d600025df012fa2970bc6fe01ed89a672781ecf9c6e4cc776e59e1b6e11a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d92d600025df012fa2970bc6fe01ed89a672781ecf9c6e4cc776e59e1b6e11a0->leave($__internal_d92d600025df012fa2970bc6fe01ed89a672781ecf9c6e4cc776e59e1b6e11a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
