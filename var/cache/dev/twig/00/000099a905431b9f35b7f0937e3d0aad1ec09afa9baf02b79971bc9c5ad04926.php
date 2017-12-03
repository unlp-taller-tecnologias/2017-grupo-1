<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_abdcfd87b1e87e213a779c4cb5c7b31e02a2870e7e079619a2693f78bbbcc397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdcfd87b1e87e213a779c4cb5c7b31e02a2870e7e079619a2693f78bbbcc397->enter($__internal_abdcfd87b1e87e213a779c4cb5c7b31e02a2870e7e079619a2693f78bbbcc397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_349fbf6a7780f8f831e4b7014a0d35008f0cd9b2b4292eadbe72e1d8184f0d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349fbf6a7780f8f831e4b7014a0d35008f0cd9b2b4292eadbe72e1d8184f0d20->enter($__internal_349fbf6a7780f8f831e4b7014a0d35008f0cd9b2b4292eadbe72e1d8184f0d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_abdcfd87b1e87e213a779c4cb5c7b31e02a2870e7e079619a2693f78bbbcc397->leave($__internal_abdcfd87b1e87e213a779c4cb5c7b31e02a2870e7e079619a2693f78bbbcc397_prof);

        
        $__internal_349fbf6a7780f8f831e4b7014a0d35008f0cd9b2b4292eadbe72e1d8184f0d20->leave($__internal_349fbf6a7780f8f831e4b7014a0d35008f0cd9b2b4292eadbe72e1d8184f0d20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
