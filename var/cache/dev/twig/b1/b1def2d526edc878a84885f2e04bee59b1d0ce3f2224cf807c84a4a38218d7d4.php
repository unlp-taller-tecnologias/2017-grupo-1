<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_5ffee1c169d5912e1dc6eb13b98f8410269cf7c6abe8a9316bfb86006e3e0428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffee1c169d5912e1dc6eb13b98f8410269cf7c6abe8a9316bfb86006e3e0428->enter($__internal_5ffee1c169d5912e1dc6eb13b98f8410269cf7c6abe8a9316bfb86006e3e0428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_50816ca653c5e9e32ec11e3c87858fb2cf7211eaae7d6d0fad9ff68b96c56ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50816ca653c5e9e32ec11e3c87858fb2cf7211eaae7d6d0fad9ff68b96c56ea7->enter($__internal_50816ca653c5e9e32ec11e3c87858fb2cf7211eaae7d6d0fad9ff68b96c56ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5ffee1c169d5912e1dc6eb13b98f8410269cf7c6abe8a9316bfb86006e3e0428->leave($__internal_5ffee1c169d5912e1dc6eb13b98f8410269cf7c6abe8a9316bfb86006e3e0428_prof);

        
        $__internal_50816ca653c5e9e32ec11e3c87858fb2cf7211eaae7d6d0fad9ff68b96c56ea7->leave($__internal_50816ca653c5e9e32ec11e3c87858fb2cf7211eaae7d6d0fad9ff68b96c56ea7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
