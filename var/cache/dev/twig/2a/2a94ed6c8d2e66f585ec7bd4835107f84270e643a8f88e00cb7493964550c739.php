<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_10069d97b74f1b18892ac1995e426b5bf02dbe430de0ded193fcbea77d627467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10069d97b74f1b18892ac1995e426b5bf02dbe430de0ded193fcbea77d627467->enter($__internal_10069d97b74f1b18892ac1995e426b5bf02dbe430de0ded193fcbea77d627467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_06c3ba30c3275e602a14079b82575323a3a37ab6e850ae15e81910854a62faea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c3ba30c3275e602a14079b82575323a3a37ab6e850ae15e81910854a62faea->enter($__internal_06c3ba30c3275e602a14079b82575323a3a37ab6e850ae15e81910854a62faea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_10069d97b74f1b18892ac1995e426b5bf02dbe430de0ded193fcbea77d627467->leave($__internal_10069d97b74f1b18892ac1995e426b5bf02dbe430de0ded193fcbea77d627467_prof);

        
        $__internal_06c3ba30c3275e602a14079b82575323a3a37ab6e850ae15e81910854a62faea->leave($__internal_06c3ba30c3275e602a14079b82575323a3a37ab6e850ae15e81910854a62faea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
