<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_921c5adea60884584fdf3f7e236043e6b9b18b49ca7fd78205df175034e546f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921c5adea60884584fdf3f7e236043e6b9b18b49ca7fd78205df175034e546f7->enter($__internal_921c5adea60884584fdf3f7e236043e6b9b18b49ca7fd78205df175034e546f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2257dc7cd2b4a952687fd0ecfe7aa8b8890daa8b100893735d136b41e4fcb8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2257dc7cd2b4a952687fd0ecfe7aa8b8890daa8b100893735d136b41e4fcb8a9->enter($__internal_2257dc7cd2b4a952687fd0ecfe7aa8b8890daa8b100893735d136b41e4fcb8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_921c5adea60884584fdf3f7e236043e6b9b18b49ca7fd78205df175034e546f7->leave($__internal_921c5adea60884584fdf3f7e236043e6b9b18b49ca7fd78205df175034e546f7_prof);

        
        $__internal_2257dc7cd2b4a952687fd0ecfe7aa8b8890daa8b100893735d136b41e4fcb8a9->leave($__internal_2257dc7cd2b4a952687fd0ecfe7aa8b8890daa8b100893735d136b41e4fcb8a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
