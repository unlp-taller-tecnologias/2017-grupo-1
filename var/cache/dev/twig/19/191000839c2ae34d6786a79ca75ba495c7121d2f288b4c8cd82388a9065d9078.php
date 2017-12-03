<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_c74435ffdcb08a9a46407a894a554a8a0fd6bddc485610ec8a1829ca7d455c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74435ffdcb08a9a46407a894a554a8a0fd6bddc485610ec8a1829ca7d455c29->enter($__internal_c74435ffdcb08a9a46407a894a554a8a0fd6bddc485610ec8a1829ca7d455c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c04ef05d5888d06b2120214b712522447e177e3f5fd55f57e923a5934a3ea4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04ef05d5888d06b2120214b712522447e177e3f5fd55f57e923a5934a3ea4dd->enter($__internal_c04ef05d5888d06b2120214b712522447e177e3f5fd55f57e923a5934a3ea4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c74435ffdcb08a9a46407a894a554a8a0fd6bddc485610ec8a1829ca7d455c29->leave($__internal_c74435ffdcb08a9a46407a894a554a8a0fd6bddc485610ec8a1829ca7d455c29_prof);

        
        $__internal_c04ef05d5888d06b2120214b712522447e177e3f5fd55f57e923a5934a3ea4dd->leave($__internal_c04ef05d5888d06b2120214b712522447e177e3f5fd55f57e923a5934a3ea4dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
