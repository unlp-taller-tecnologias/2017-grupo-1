<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4fa71f05655d2e5d71179142ccc47252470a51ad7689382ad7a47262061373db extends Twig_Template
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
        $__internal_488f84d36da7ed846aa218b7399bd614b2eeddfb1e8d7b1c2884ef8544367eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488f84d36da7ed846aa218b7399bd614b2eeddfb1e8d7b1c2884ef8544367eeb->enter($__internal_488f84d36da7ed846aa218b7399bd614b2eeddfb1e8d7b1c2884ef8544367eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_488f84d36da7ed846aa218b7399bd614b2eeddfb1e8d7b1c2884ef8544367eeb->leave($__internal_488f84d36da7ed846aa218b7399bd614b2eeddfb1e8d7b1c2884ef8544367eeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
