<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_386cc72c687c4c373171fe66ee9af7f735eee19f02f6aee58b606f032e4f9d2a extends Twig_Template
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
        $__internal_02f39eade0c605f09aa445f0c4fe886c092be3c5ba4d2ed20afb0283a920d2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f39eade0c605f09aa445f0c4fe886c092be3c5ba4d2ed20afb0283a920d2c4->enter($__internal_02f39eade0c605f09aa445f0c4fe886c092be3c5ba4d2ed20afb0283a920d2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4be69f4bff0095d05af617185d825188059d2fd2159ca64475e17cdacb6032ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be69f4bff0095d05af617185d825188059d2fd2159ca64475e17cdacb6032ea->enter($__internal_4be69f4bff0095d05af617185d825188059d2fd2159ca64475e17cdacb6032ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_02f39eade0c605f09aa445f0c4fe886c092be3c5ba4d2ed20afb0283a920d2c4->leave($__internal_02f39eade0c605f09aa445f0c4fe886c092be3c5ba4d2ed20afb0283a920d2c4_prof);

        
        $__internal_4be69f4bff0095d05af617185d825188059d2fd2159ca64475e17cdacb6032ea->leave($__internal_4be69f4bff0095d05af617185d825188059d2fd2159ca64475e17cdacb6032ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
