<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_3cb713865e2ca59ad9aa8c3d2cc0a754d9e1185c99d575b23474330de384d7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb713865e2ca59ad9aa8c3d2cc0a754d9e1185c99d575b23474330de384d7dc->enter($__internal_3cb713865e2ca59ad9aa8c3d2cc0a754d9e1185c99d575b23474330de384d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a8259e0ba38c2183765b53268c47eb103eb5694cb838fd05005f06d92223fdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8259e0ba38c2183765b53268c47eb103eb5694cb838fd05005f06d92223fdf5->enter($__internal_a8259e0ba38c2183765b53268c47eb103eb5694cb838fd05005f06d92223fdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3cb713865e2ca59ad9aa8c3d2cc0a754d9e1185c99d575b23474330de384d7dc->leave($__internal_3cb713865e2ca59ad9aa8c3d2cc0a754d9e1185c99d575b23474330de384d7dc_prof);

        
        $__internal_a8259e0ba38c2183765b53268c47eb103eb5694cb838fd05005f06d92223fdf5->leave($__internal_a8259e0ba38c2183765b53268c47eb103eb5694cb838fd05005f06d92223fdf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
