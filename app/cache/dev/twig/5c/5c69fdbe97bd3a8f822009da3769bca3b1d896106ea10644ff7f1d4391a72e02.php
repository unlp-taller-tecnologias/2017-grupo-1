<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1ecbffeac175fef12a26e9220dd4cd439f365b40d8ff6c1fdf2bbe43c9221cea extends Twig_Template
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
        $__internal_afa3ad3eabc6ff96715f3b51c6a400ade28d3033d2a189c230573a81ba116b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa3ad3eabc6ff96715f3b51c6a400ade28d3033d2a189c230573a81ba116b80->enter($__internal_afa3ad3eabc6ff96715f3b51c6a400ade28d3033d2a189c230573a81ba116b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_afa3ad3eabc6ff96715f3b51c6a400ade28d3033d2a189c230573a81ba116b80->leave($__internal_afa3ad3eabc6ff96715f3b51c6a400ade28d3033d2a189c230573a81ba116b80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
