<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_19f52107fb076a5e42472b44d50a141ef4d801184eee8c70e4826a972a4e0fde extends Twig_Template
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
        $__internal_0969294ebdca3dc31c6e5ef660ac454051ab8d73274ef93a0b3e5238664e947b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0969294ebdca3dc31c6e5ef660ac454051ab8d73274ef93a0b3e5238664e947b->enter($__internal_0969294ebdca3dc31c6e5ef660ac454051ab8d73274ef93a0b3e5238664e947b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0969294ebdca3dc31c6e5ef660ac454051ab8d73274ef93a0b3e5238664e947b->leave($__internal_0969294ebdca3dc31c6e5ef660ac454051ab8d73274ef93a0b3e5238664e947b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
