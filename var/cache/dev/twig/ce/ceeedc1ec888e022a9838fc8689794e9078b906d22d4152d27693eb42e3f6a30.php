<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_97b610b7b0b317c3df7c32825be26ed62b4400c9a99a93678cff843e00a59d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b610b7b0b317c3df7c32825be26ed62b4400c9a99a93678cff843e00a59d36->enter($__internal_97b610b7b0b317c3df7c32825be26ed62b4400c9a99a93678cff843e00a59d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_765e7d39d66dee491ac3f90e6970dc5eb0a41ccd0231a852aac741666e9364a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765e7d39d66dee491ac3f90e6970dc5eb0a41ccd0231a852aac741666e9364a4->enter($__internal_765e7d39d66dee491ac3f90e6970dc5eb0a41ccd0231a852aac741666e9364a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_97b610b7b0b317c3df7c32825be26ed62b4400c9a99a93678cff843e00a59d36->leave($__internal_97b610b7b0b317c3df7c32825be26ed62b4400c9a99a93678cff843e00a59d36_prof);

        
        $__internal_765e7d39d66dee491ac3f90e6970dc5eb0a41ccd0231a852aac741666e9364a4->leave($__internal_765e7d39d66dee491ac3f90e6970dc5eb0a41ccd0231a852aac741666e9364a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
