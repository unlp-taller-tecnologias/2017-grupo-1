<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9dbd3650e5810d07e7a0ab64e3ec70f30bbb18239e8009425860cf6d178bd99 extends Twig_Template
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
        $__internal_c26dcffcd1c3c22cbede276e78bcfb5e35a0f83a118663ccc5edfe2baa0b84ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26dcffcd1c3c22cbede276e78bcfb5e35a0f83a118663ccc5edfe2baa0b84ab->enter($__internal_c26dcffcd1c3c22cbede276e78bcfb5e35a0f83a118663ccc5edfe2baa0b84ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f53b43bdcc1e83765ee8fbe57ac4388e0363f16e135074b5a7a16ee186706567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53b43bdcc1e83765ee8fbe57ac4388e0363f16e135074b5a7a16ee186706567->enter($__internal_f53b43bdcc1e83765ee8fbe57ac4388e0363f16e135074b5a7a16ee186706567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c26dcffcd1c3c22cbede276e78bcfb5e35a0f83a118663ccc5edfe2baa0b84ab->leave($__internal_c26dcffcd1c3c22cbede276e78bcfb5e35a0f83a118663ccc5edfe2baa0b84ab_prof);

        
        $__internal_f53b43bdcc1e83765ee8fbe57ac4388e0363f16e135074b5a7a16ee186706567->leave($__internal_f53b43bdcc1e83765ee8fbe57ac4388e0363f16e135074b5a7a16ee186706567_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
