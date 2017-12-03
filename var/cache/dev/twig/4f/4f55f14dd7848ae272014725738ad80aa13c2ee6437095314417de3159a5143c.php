<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_5b594e5b52af58ffa652de40327c4300537e2f6b538ae46d670884988693b711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b594e5b52af58ffa652de40327c4300537e2f6b538ae46d670884988693b711->enter($__internal_5b594e5b52af58ffa652de40327c4300537e2f6b538ae46d670884988693b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d8ec244f5c590aa5db0edc99cf7567b0aa10b884657146e1d21ece59d68fb82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ec244f5c590aa5db0edc99cf7567b0aa10b884657146e1d21ece59d68fb82b->enter($__internal_d8ec244f5c590aa5db0edc99cf7567b0aa10b884657146e1d21ece59d68fb82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5b594e5b52af58ffa652de40327c4300537e2f6b538ae46d670884988693b711->leave($__internal_5b594e5b52af58ffa652de40327c4300537e2f6b538ae46d670884988693b711_prof);

        
        $__internal_d8ec244f5c590aa5db0edc99cf7567b0aa10b884657146e1d21ece59d68fb82b->leave($__internal_d8ec244f5c590aa5db0edc99cf7567b0aa10b884657146e1d21ece59d68fb82b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
