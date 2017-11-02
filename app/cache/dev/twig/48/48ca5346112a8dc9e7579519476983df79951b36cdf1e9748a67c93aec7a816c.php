<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2ceb00477ca3a8ea9bc6afcef8c64dbcfd675b3ad06ab7128dcc62b860b0b128 extends Twig_Template
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
        $__internal_08599d6397d12c3caae8c4ba02588113bc90d04afa4d09951517cd619c2378b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08599d6397d12c3caae8c4ba02588113bc90d04afa4d09951517cd619c2378b4->enter($__internal_08599d6397d12c3caae8c4ba02588113bc90d04afa4d09951517cd619c2378b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_08599d6397d12c3caae8c4ba02588113bc90d04afa4d09951517cd619c2378b4->leave($__internal_08599d6397d12c3caae8c4ba02588113bc90d04afa4d09951517cd619c2378b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
