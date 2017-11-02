<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_53ae0495eacfecc0493def889d5db4072a56ec7eb06d8696542fafd7a1bbe60c extends Twig_Template
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
        $__internal_e1f1db50d787563d9b49131d0594ccc11380664236badb1e8a15aabe51f357cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f1db50d787563d9b49131d0594ccc11380664236badb1e8a15aabe51f357cd->enter($__internal_e1f1db50d787563d9b49131d0594ccc11380664236badb1e8a15aabe51f357cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e1f1db50d787563d9b49131d0594ccc11380664236badb1e8a15aabe51f357cd->leave($__internal_e1f1db50d787563d9b49131d0594ccc11380664236badb1e8a15aabe51f357cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
