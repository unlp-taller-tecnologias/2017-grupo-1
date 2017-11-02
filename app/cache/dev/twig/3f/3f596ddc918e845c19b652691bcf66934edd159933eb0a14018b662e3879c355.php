<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_177cfc17ed839a9cff405c276b52f5d0adddf32fb54b9149c3ce401c85148e4f extends Twig_Template
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
        $__internal_f0f669e609453c505f9bcdf6066bd790d9968e1ce8e66d1ed68058146dded94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f669e609453c505f9bcdf6066bd790d9968e1ce8e66d1ed68058146dded94e->enter($__internal_f0f669e609453c505f9bcdf6066bd790d9968e1ce8e66d1ed68058146dded94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f0f669e609453c505f9bcdf6066bd790d9968e1ce8e66d1ed68058146dded94e->leave($__internal_f0f669e609453c505f9bcdf6066bd790d9968e1ce8e66d1ed68058146dded94e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
