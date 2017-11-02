<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5910313aacfc54630d083f805d292932fa5f1fb4c43ef5a53e88d1a2be3f9994 extends Twig_Template
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
        $__internal_0435a72926623f0eea39089b13d6b16a8ded74fc425886f0eb25fcc89830d57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0435a72926623f0eea39089b13d6b16a8ded74fc425886f0eb25fcc89830d57a->enter($__internal_0435a72926623f0eea39089b13d6b16a8ded74fc425886f0eb25fcc89830d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0435a72926623f0eea39089b13d6b16a8ded74fc425886f0eb25fcc89830d57a->leave($__internal_0435a72926623f0eea39089b13d6b16a8ded74fc425886f0eb25fcc89830d57a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
