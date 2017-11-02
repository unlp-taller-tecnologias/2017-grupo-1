<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2424d6b393ed10874820ecf28a473a2bce4b75caf574672973fbaeabfdd148e4 extends Twig_Template
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
        $__internal_c915918b79bc63b0767ec5edbd1c34a08a194f723a4c4e2c0fdd31a7a472a848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c915918b79bc63b0767ec5edbd1c34a08a194f723a4c4e2c0fdd31a7a472a848->enter($__internal_c915918b79bc63b0767ec5edbd1c34a08a194f723a4c4e2c0fdd31a7a472a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c915918b79bc63b0767ec5edbd1c34a08a194f723a4c4e2c0fdd31a7a472a848->leave($__internal_c915918b79bc63b0767ec5edbd1c34a08a194f723a4c4e2c0fdd31a7a472a848_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
