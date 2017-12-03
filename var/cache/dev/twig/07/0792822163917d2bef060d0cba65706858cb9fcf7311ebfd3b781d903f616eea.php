<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_23dc6b5f92bd7967a26568a0f87e0ccee7dd4624989a69eed2461da940840b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dc6b5f92bd7967a26568a0f87e0ccee7dd4624989a69eed2461da940840b33->enter($__internal_23dc6b5f92bd7967a26568a0f87e0ccee7dd4624989a69eed2461da940840b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_13f8da7619f72ae1afc49b3123993858ebf494358d1bd7888734449e3740b6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f8da7619f72ae1afc49b3123993858ebf494358d1bd7888734449e3740b6f4->enter($__internal_13f8da7619f72ae1afc49b3123993858ebf494358d1bd7888734449e3740b6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_23dc6b5f92bd7967a26568a0f87e0ccee7dd4624989a69eed2461da940840b33->leave($__internal_23dc6b5f92bd7967a26568a0f87e0ccee7dd4624989a69eed2461da940840b33_prof);

        
        $__internal_13f8da7619f72ae1afc49b3123993858ebf494358d1bd7888734449e3740b6f4->leave($__internal_13f8da7619f72ae1afc49b3123993858ebf494358d1bd7888734449e3740b6f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
