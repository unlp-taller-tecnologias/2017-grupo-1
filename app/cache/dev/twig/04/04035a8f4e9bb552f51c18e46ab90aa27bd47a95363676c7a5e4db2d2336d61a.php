<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a774366fa572d8e2c0c7fafab632a9767479151590e49d43ecdcf19c23b5aa20 extends Twig_Template
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
        $__internal_8a7a2db7d47e1b8d78d1778eb232310314da6b27d0777b84efdc516629977705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7a2db7d47e1b8d78d1778eb232310314da6b27d0777b84efdc516629977705->enter($__internal_8a7a2db7d47e1b8d78d1778eb232310314da6b27d0777b84efdc516629977705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8a7a2db7d47e1b8d78d1778eb232310314da6b27d0777b84efdc516629977705->leave($__internal_8a7a2db7d47e1b8d78d1778eb232310314da6b27d0777b84efdc516629977705_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
