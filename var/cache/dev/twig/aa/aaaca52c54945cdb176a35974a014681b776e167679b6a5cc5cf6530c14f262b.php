<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a95b692defe8fe2e428dc4d6f362207f3e9b0c425e16f79fa17f27f9baf7ba4b extends Twig_Template
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
        $__internal_1acd137a8d2b6b3cf7f1803a1a93ac19071f5b75372c97c3d0cd363d3f326f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acd137a8d2b6b3cf7f1803a1a93ac19071f5b75372c97c3d0cd363d3f326f09->enter($__internal_1acd137a8d2b6b3cf7f1803a1a93ac19071f5b75372c97c3d0cd363d3f326f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7c65beba251a3b68073515bddd56a5ce388d2a9a7ec16b6333e806123b423a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c65beba251a3b68073515bddd56a5ce388d2a9a7ec16b6333e806123b423a39->enter($__internal_7c65beba251a3b68073515bddd56a5ce388d2a9a7ec16b6333e806123b423a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1acd137a8d2b6b3cf7f1803a1a93ac19071f5b75372c97c3d0cd363d3f326f09->leave($__internal_1acd137a8d2b6b3cf7f1803a1a93ac19071f5b75372c97c3d0cd363d3f326f09_prof);

        
        $__internal_7c65beba251a3b68073515bddd56a5ce388d2a9a7ec16b6333e806123b423a39->leave($__internal_7c65beba251a3b68073515bddd56a5ce388d2a9a7ec16b6333e806123b423a39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
