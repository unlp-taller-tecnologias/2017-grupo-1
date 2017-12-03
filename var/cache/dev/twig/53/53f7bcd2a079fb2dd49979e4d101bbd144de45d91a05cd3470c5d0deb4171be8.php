<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_a05a2067f1efdeb8bb141b9d250fe22f4c4d04dc8f0714fc8417c9802d427e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05a2067f1efdeb8bb141b9d250fe22f4c4d04dc8f0714fc8417c9802d427e6a->enter($__internal_a05a2067f1efdeb8bb141b9d250fe22f4c4d04dc8f0714fc8417c9802d427e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b953968f47673ffb8b3257b93662b95227e2878481fef4bab0676f06d5408640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b953968f47673ffb8b3257b93662b95227e2878481fef4bab0676f06d5408640->enter($__internal_b953968f47673ffb8b3257b93662b95227e2878481fef4bab0676f06d5408640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a05a2067f1efdeb8bb141b9d250fe22f4c4d04dc8f0714fc8417c9802d427e6a->leave($__internal_a05a2067f1efdeb8bb141b9d250fe22f4c4d04dc8f0714fc8417c9802d427e6a_prof);

        
        $__internal_b953968f47673ffb8b3257b93662b95227e2878481fef4bab0676f06d5408640->leave($__internal_b953968f47673ffb8b3257b93662b95227e2878481fef4bab0676f06d5408640_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
