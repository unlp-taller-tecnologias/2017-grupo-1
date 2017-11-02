<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e8e43cad799283a6a1f43e33922942aadf3fa7a9246e30f0df550cf711e789d4 extends Twig_Template
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
        $__internal_acbf264b28b6221941f54f5667f96820586764cf42ff21cf340cb9c67807b175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbf264b28b6221941f54f5667f96820586764cf42ff21cf340cb9c67807b175->enter($__internal_acbf264b28b6221941f54f5667f96820586764cf42ff21cf340cb9c67807b175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_acbf264b28b6221941f54f5667f96820586764cf42ff21cf340cb9c67807b175->leave($__internal_acbf264b28b6221941f54f5667f96820586764cf42ff21cf340cb9c67807b175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
