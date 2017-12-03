<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a62b39ddd7f5b5864fcf9fea12f44a9f9a068460c92c123a214a405feca34032 extends Twig_Template
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
        $__internal_ec4aab74a3f2a569288eb9c2d0cd211754dde87f3a242280b0f8b68bf5d8d040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4aab74a3f2a569288eb9c2d0cd211754dde87f3a242280b0f8b68bf5d8d040->enter($__internal_ec4aab74a3f2a569288eb9c2d0cd211754dde87f3a242280b0f8b68bf5d8d040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5dc266858fe4ebb15541b667e45235047e3ac283dae8ac456b7a63649cba80c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc266858fe4ebb15541b667e45235047e3ac283dae8ac456b7a63649cba80c6->enter($__internal_5dc266858fe4ebb15541b667e45235047e3ac283dae8ac456b7a63649cba80c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ec4aab74a3f2a569288eb9c2d0cd211754dde87f3a242280b0f8b68bf5d8d040->leave($__internal_ec4aab74a3f2a569288eb9c2d0cd211754dde87f3a242280b0f8b68bf5d8d040_prof);

        
        $__internal_5dc266858fe4ebb15541b667e45235047e3ac283dae8ac456b7a63649cba80c6->leave($__internal_5dc266858fe4ebb15541b667e45235047e3ac283dae8ac456b7a63649cba80c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
