<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5eaff93b6dbfb510b8a66df852f7f2163a28d3dae41c679e814d4bb542cbeeeb extends Twig_Template
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
        $__internal_c8379c62f7bc60cfc377324295e65e2913a24bbd4051529462ee1c3f536f3bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8379c62f7bc60cfc377324295e65e2913a24bbd4051529462ee1c3f536f3bf3->enter($__internal_c8379c62f7bc60cfc377324295e65e2913a24bbd4051529462ee1c3f536f3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c8379c62f7bc60cfc377324295e65e2913a24bbd4051529462ee1c3f536f3bf3->leave($__internal_c8379c62f7bc60cfc377324295e65e2913a24bbd4051529462ee1c3f536f3bf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
