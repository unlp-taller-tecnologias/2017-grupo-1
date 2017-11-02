<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_445a2bbeec1392e06a43299134d0d612800d0f56f934745b39e442fa324976a2 extends Twig_Template
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
        $__internal_506f52fa54200a50c669e38beedc360e889bd221ecb432359cb1989cdc6a8561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506f52fa54200a50c669e38beedc360e889bd221ecb432359cb1989cdc6a8561->enter($__internal_506f52fa54200a50c669e38beedc360e889bd221ecb432359cb1989cdc6a8561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_506f52fa54200a50c669e38beedc360e889bd221ecb432359cb1989cdc6a8561->leave($__internal_506f52fa54200a50c669e38beedc360e889bd221ecb432359cb1989cdc6a8561_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
