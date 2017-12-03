<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_546454fd4dfef44fdc71ee30e75ea037d1927affec27aedf6c16c032d2bacf57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546454fd4dfef44fdc71ee30e75ea037d1927affec27aedf6c16c032d2bacf57->enter($__internal_546454fd4dfef44fdc71ee30e75ea037d1927affec27aedf6c16c032d2bacf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e9e2961bc3d785975601ca8a8e77acfa4acc57f25af6c3bd7cf10c7ecab46618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e2961bc3d785975601ca8a8e77acfa4acc57f25af6c3bd7cf10c7ecab46618->enter($__internal_e9e2961bc3d785975601ca8a8e77acfa4acc57f25af6c3bd7cf10c7ecab46618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_546454fd4dfef44fdc71ee30e75ea037d1927affec27aedf6c16c032d2bacf57->leave($__internal_546454fd4dfef44fdc71ee30e75ea037d1927affec27aedf6c16c032d2bacf57_prof);

        
        $__internal_e9e2961bc3d785975601ca8a8e77acfa4acc57f25af6c3bd7cf10c7ecab46618->leave($__internal_e9e2961bc3d785975601ca8a8e77acfa4acc57f25af6c3bd7cf10c7ecab46618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
