<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_57254c37569cb4e2e0c79fc83e29aff3e6e66903637d83589131f00dd9345683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57254c37569cb4e2e0c79fc83e29aff3e6e66903637d83589131f00dd9345683->enter($__internal_57254c37569cb4e2e0c79fc83e29aff3e6e66903637d83589131f00dd9345683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_84f2336f0094f4ad0b5411e6d77d91662c0066aaf1c9a7934daf21f50c46ab33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f2336f0094f4ad0b5411e6d77d91662c0066aaf1c9a7934daf21f50c46ab33->enter($__internal_84f2336f0094f4ad0b5411e6d77d91662c0066aaf1c9a7934daf21f50c46ab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_57254c37569cb4e2e0c79fc83e29aff3e6e66903637d83589131f00dd9345683->leave($__internal_57254c37569cb4e2e0c79fc83e29aff3e6e66903637d83589131f00dd9345683_prof);

        
        $__internal_84f2336f0094f4ad0b5411e6d77d91662c0066aaf1c9a7934daf21f50c46ab33->leave($__internal_84f2336f0094f4ad0b5411e6d77d91662c0066aaf1c9a7934daf21f50c46ab33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
