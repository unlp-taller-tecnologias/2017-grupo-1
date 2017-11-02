<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1eee7c23431f9d4e181bd3684b30f57724fdcce4d41823748a05a3ccf9f18781 extends Twig_Template
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
        $__internal_ea185bfe01a429b094c13ce2dafb46b8636d4dd968cb0e49c2b050301f142597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea185bfe01a429b094c13ce2dafb46b8636d4dd968cb0e49c2b050301f142597->enter($__internal_ea185bfe01a429b094c13ce2dafb46b8636d4dd968cb0e49c2b050301f142597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ea185bfe01a429b094c13ce2dafb46b8636d4dd968cb0e49c2b050301f142597->leave($__internal_ea185bfe01a429b094c13ce2dafb46b8636d4dd968cb0e49c2b050301f142597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
