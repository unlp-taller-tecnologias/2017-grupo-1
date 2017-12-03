<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_d1ed509ce538e5341636b23d5618ccffd30d499812428ace58d3c2c215fe4c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ed509ce538e5341636b23d5618ccffd30d499812428ace58d3c2c215fe4c10->enter($__internal_d1ed509ce538e5341636b23d5618ccffd30d499812428ace58d3c2c215fe4c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_99fe805a29de37f998b465386cf3efbdf5873fa156a06784d5d92a2f2ec1f7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fe805a29de37f998b465386cf3efbdf5873fa156a06784d5d92a2f2ec1f7cd->enter($__internal_99fe805a29de37f998b465386cf3efbdf5873fa156a06784d5d92a2f2ec1f7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d1ed509ce538e5341636b23d5618ccffd30d499812428ace58d3c2c215fe4c10->leave($__internal_d1ed509ce538e5341636b23d5618ccffd30d499812428ace58d3c2c215fe4c10_prof);

        
        $__internal_99fe805a29de37f998b465386cf3efbdf5873fa156a06784d5d92a2f2ec1f7cd->leave($__internal_99fe805a29de37f998b465386cf3efbdf5873fa156a06784d5d92a2f2ec1f7cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
