<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4d3863039d8085def8aad26cf90d1536a7d5bbc05af45479a3af116b09b0f250 extends Twig_Template
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
        $__internal_3fb1b3d27633422e8cbce203cf3d072155f39beaaf14bfb957c37dcd8760f6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb1b3d27633422e8cbce203cf3d072155f39beaaf14bfb957c37dcd8760f6b5->enter($__internal_3fb1b3d27633422e8cbce203cf3d072155f39beaaf14bfb957c37dcd8760f6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3fb1b3d27633422e8cbce203cf3d072155f39beaaf14bfb957c37dcd8760f6b5->leave($__internal_3fb1b3d27633422e8cbce203cf3d072155f39beaaf14bfb957c37dcd8760f6b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
