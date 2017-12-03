<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_cedf2dd2743fa31f57d26c30ce66e38557a09d9994b2462bb35a140dc7e402b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedf2dd2743fa31f57d26c30ce66e38557a09d9994b2462bb35a140dc7e402b1->enter($__internal_cedf2dd2743fa31f57d26c30ce66e38557a09d9994b2462bb35a140dc7e402b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a4e4180e9fb434648fd85dd27f862051f4b9ea6737621aa82fc39f9d5e73f28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e4180e9fb434648fd85dd27f862051f4b9ea6737621aa82fc39f9d5e73f28f->enter($__internal_a4e4180e9fb434648fd85dd27f862051f4b9ea6737621aa82fc39f9d5e73f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_cedf2dd2743fa31f57d26c30ce66e38557a09d9994b2462bb35a140dc7e402b1->leave($__internal_cedf2dd2743fa31f57d26c30ce66e38557a09d9994b2462bb35a140dc7e402b1_prof);

        
        $__internal_a4e4180e9fb434648fd85dd27f862051f4b9ea6737621aa82fc39f9d5e73f28f->leave($__internal_a4e4180e9fb434648fd85dd27f862051f4b9ea6737621aa82fc39f9d5e73f28f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
