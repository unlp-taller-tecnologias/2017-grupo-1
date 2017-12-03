<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_3a70551ce739bf80faec4531d6906a080dfb29d54acb39d3b56181ded2435660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a70551ce739bf80faec4531d6906a080dfb29d54acb39d3b56181ded2435660->enter($__internal_3a70551ce739bf80faec4531d6906a080dfb29d54acb39d3b56181ded2435660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b8ea7a46afb85aa4b4847dcb73a6184ad398f5b493203e334205e299648dba82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ea7a46afb85aa4b4847dcb73a6184ad398f5b493203e334205e299648dba82->enter($__internal_b8ea7a46afb85aa4b4847dcb73a6184ad398f5b493203e334205e299648dba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3a70551ce739bf80faec4531d6906a080dfb29d54acb39d3b56181ded2435660->leave($__internal_3a70551ce739bf80faec4531d6906a080dfb29d54acb39d3b56181ded2435660_prof);

        
        $__internal_b8ea7a46afb85aa4b4847dcb73a6184ad398f5b493203e334205e299648dba82->leave($__internal_b8ea7a46afb85aa4b4847dcb73a6184ad398f5b493203e334205e299648dba82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
