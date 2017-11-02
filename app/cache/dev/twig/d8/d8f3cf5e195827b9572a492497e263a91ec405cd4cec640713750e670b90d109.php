<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8c7edc757c14aec6637c6efeb41a651098cab266b609048f65f39bf737c27add extends Twig_Template
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
        $__internal_9e8462cab16139637c6bc22d4e51ebc51f88a681bef14c9979ed31e3d17528bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8462cab16139637c6bc22d4e51ebc51f88a681bef14c9979ed31e3d17528bc->enter($__internal_9e8462cab16139637c6bc22d4e51ebc51f88a681bef14c9979ed31e3d17528bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9e8462cab16139637c6bc22d4e51ebc51f88a681bef14c9979ed31e3d17528bc->leave($__internal_9e8462cab16139637c6bc22d4e51ebc51f88a681bef14c9979ed31e3d17528bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
