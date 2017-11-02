<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_08452d4c211ecb40eec069f7a67fc47479b5e0e2bac87feae46b2b201ac05080 extends Twig_Template
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
        $__internal_8f795961b65807d6257a3b7da3aff95cff2bc05950a977d15cd987e13f4aa13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f795961b65807d6257a3b7da3aff95cff2bc05950a977d15cd987e13f4aa13f->enter($__internal_8f795961b65807d6257a3b7da3aff95cff2bc05950a977d15cd987e13f4aa13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8f795961b65807d6257a3b7da3aff95cff2bc05950a977d15cd987e13f4aa13f->leave($__internal_8f795961b65807d6257a3b7da3aff95cff2bc05950a977d15cd987e13f4aa13f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
