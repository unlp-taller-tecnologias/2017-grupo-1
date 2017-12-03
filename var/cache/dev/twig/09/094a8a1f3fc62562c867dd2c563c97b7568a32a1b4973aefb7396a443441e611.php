<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c0a50a619372b98dc5ec5c8378e81c3aebfa8516c3277e0dc074be8aff9bc04 extends Twig_Template
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
        $__internal_d1ed0a5d9058d479e22a74437bb2e6ad0c343eeac2a106536b02189bf6fbda7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ed0a5d9058d479e22a74437bb2e6ad0c343eeac2a106536b02189bf6fbda7f->enter($__internal_d1ed0a5d9058d479e22a74437bb2e6ad0c343eeac2a106536b02189bf6fbda7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a33e2b2803b960a44a79cc2425168c9634a320d3ba6a1b04aea679ae568ec7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33e2b2803b960a44a79cc2425168c9634a320d3ba6a1b04aea679ae568ec7ff->enter($__internal_a33e2b2803b960a44a79cc2425168c9634a320d3ba6a1b04aea679ae568ec7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d1ed0a5d9058d479e22a74437bb2e6ad0c343eeac2a106536b02189bf6fbda7f->leave($__internal_d1ed0a5d9058d479e22a74437bb2e6ad0c343eeac2a106536b02189bf6fbda7f_prof);

        
        $__internal_a33e2b2803b960a44a79cc2425168c9634a320d3ba6a1b04aea679ae568ec7ff->leave($__internal_a33e2b2803b960a44a79cc2425168c9634a320d3ba6a1b04aea679ae568ec7ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
