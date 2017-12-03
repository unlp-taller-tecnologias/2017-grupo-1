<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_21b8042756721182784ae707593a0ab2deb7df562861f83796845331a1fa2b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b8042756721182784ae707593a0ab2deb7df562861f83796845331a1fa2b56->enter($__internal_21b8042756721182784ae707593a0ab2deb7df562861f83796845331a1fa2b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2da021c806363deb4700759162c19f42bf2ec9ba03f9bb8e16a449e4bb12b070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da021c806363deb4700759162c19f42bf2ec9ba03f9bb8e16a449e4bb12b070->enter($__internal_2da021c806363deb4700759162c19f42bf2ec9ba03f9bb8e16a449e4bb12b070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_21b8042756721182784ae707593a0ab2deb7df562861f83796845331a1fa2b56->leave($__internal_21b8042756721182784ae707593a0ab2deb7df562861f83796845331a1fa2b56_prof);

        
        $__internal_2da021c806363deb4700759162c19f42bf2ec9ba03f9bb8e16a449e4bb12b070->leave($__internal_2da021c806363deb4700759162c19f42bf2ec9ba03f9bb8e16a449e4bb12b070_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
