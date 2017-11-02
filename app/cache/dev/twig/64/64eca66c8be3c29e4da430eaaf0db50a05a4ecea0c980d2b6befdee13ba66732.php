<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4e2555868879635c253210dd7d4f9676b5620fc25adb77ed5e3a0fd68d35f242 extends Twig_Template
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
        $__internal_74e9520b7b51d54ff969dc7df2987b8e030e22edcb50106d5c38c80a0a937d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e9520b7b51d54ff969dc7df2987b8e030e22edcb50106d5c38c80a0a937d2d->enter($__internal_74e9520b7b51d54ff969dc7df2987b8e030e22edcb50106d5c38c80a0a937d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_74e9520b7b51d54ff969dc7df2987b8e030e22edcb50106d5c38c80a0a937d2d->leave($__internal_74e9520b7b51d54ff969dc7df2987b8e030e22edcb50106d5c38c80a0a937d2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
