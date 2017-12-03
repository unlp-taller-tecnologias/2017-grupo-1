<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_763dc69fd0900ca8b7cba3811e7bc98fd306ad8f288deef280e0375066ba5034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763dc69fd0900ca8b7cba3811e7bc98fd306ad8f288deef280e0375066ba5034->enter($__internal_763dc69fd0900ca8b7cba3811e7bc98fd306ad8f288deef280e0375066ba5034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ae45f37505b618cfd913279085529a366e67254d7bf0f32ddd4a03eb5011389f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae45f37505b618cfd913279085529a366e67254d7bf0f32ddd4a03eb5011389f->enter($__internal_ae45f37505b618cfd913279085529a366e67254d7bf0f32ddd4a03eb5011389f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_763dc69fd0900ca8b7cba3811e7bc98fd306ad8f288deef280e0375066ba5034->leave($__internal_763dc69fd0900ca8b7cba3811e7bc98fd306ad8f288deef280e0375066ba5034_prof);

        
        $__internal_ae45f37505b618cfd913279085529a366e67254d7bf0f32ddd4a03eb5011389f->leave($__internal_ae45f37505b618cfd913279085529a366e67254d7bf0f32ddd4a03eb5011389f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
