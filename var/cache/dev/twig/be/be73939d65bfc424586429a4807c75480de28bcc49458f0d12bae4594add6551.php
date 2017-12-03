<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_02a0c04e929adb7d14a8be893535ae04f0277c94656f3caa8fcbcf49b44c282d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a0c04e929adb7d14a8be893535ae04f0277c94656f3caa8fcbcf49b44c282d->enter($__internal_02a0c04e929adb7d14a8be893535ae04f0277c94656f3caa8fcbcf49b44c282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f1bb6f51370f82746b71cb2b977d81f9c6f200d093d89951bb429eb306f98330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bb6f51370f82746b71cb2b977d81f9c6f200d093d89951bb429eb306f98330->enter($__internal_f1bb6f51370f82746b71cb2b977d81f9c6f200d093d89951bb429eb306f98330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_02a0c04e929adb7d14a8be893535ae04f0277c94656f3caa8fcbcf49b44c282d->leave($__internal_02a0c04e929adb7d14a8be893535ae04f0277c94656f3caa8fcbcf49b44c282d_prof);

        
        $__internal_f1bb6f51370f82746b71cb2b977d81f9c6f200d093d89951bb429eb306f98330->leave($__internal_f1bb6f51370f82746b71cb2b977d81f9c6f200d093d89951bb429eb306f98330_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
