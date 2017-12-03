<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_17cee3fb5af5d1d0234e692cb592edafeff660265657cca57cfa1ef8c7e2250b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cee3fb5af5d1d0234e692cb592edafeff660265657cca57cfa1ef8c7e2250b->enter($__internal_17cee3fb5af5d1d0234e692cb592edafeff660265657cca57cfa1ef8c7e2250b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4d833c41279c88a301c3870c13e935e5c5f4878c4d23959ea04553975336fad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d833c41279c88a301c3870c13e935e5c5f4878c4d23959ea04553975336fad8->enter($__internal_4d833c41279c88a301c3870c13e935e5c5f4878c4d23959ea04553975336fad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_17cee3fb5af5d1d0234e692cb592edafeff660265657cca57cfa1ef8c7e2250b->leave($__internal_17cee3fb5af5d1d0234e692cb592edafeff660265657cca57cfa1ef8c7e2250b_prof);

        
        $__internal_4d833c41279c88a301c3870c13e935e5c5f4878c4d23959ea04553975336fad8->leave($__internal_4d833c41279c88a301c3870c13e935e5c5f4878c4d23959ea04553975336fad8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
