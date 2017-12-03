<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_b3e4f8d3660d716dbd46eb6f3466b3cd41c1538a941675369f83c1158eeb00ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e4f8d3660d716dbd46eb6f3466b3cd41c1538a941675369f83c1158eeb00ec->enter($__internal_b3e4f8d3660d716dbd46eb6f3466b3cd41c1538a941675369f83c1158eeb00ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d64659ea0c0b83ae9404c7e2029ccaec1119d473a7b054743a6b5339a52191e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64659ea0c0b83ae9404c7e2029ccaec1119d473a7b054743a6b5339a52191e8->enter($__internal_d64659ea0c0b83ae9404c7e2029ccaec1119d473a7b054743a6b5339a52191e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b3e4f8d3660d716dbd46eb6f3466b3cd41c1538a941675369f83c1158eeb00ec->leave($__internal_b3e4f8d3660d716dbd46eb6f3466b3cd41c1538a941675369f83c1158eeb00ec_prof);

        
        $__internal_d64659ea0c0b83ae9404c7e2029ccaec1119d473a7b054743a6b5339a52191e8->leave($__internal_d64659ea0c0b83ae9404c7e2029ccaec1119d473a7b054743a6b5339a52191e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
