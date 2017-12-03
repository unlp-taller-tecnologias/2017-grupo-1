<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_0437a1cad54d392ba9a5bff5c0562568dd62eed4bbc4d763f3b5eb8e3b1e9a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0437a1cad54d392ba9a5bff5c0562568dd62eed4bbc4d763f3b5eb8e3b1e9a39->enter($__internal_0437a1cad54d392ba9a5bff5c0562568dd62eed4bbc4d763f3b5eb8e3b1e9a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7eb7f67640d96e7b69b78e99e878be30a458486ad8af2c8a3218bf84b4b956b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb7f67640d96e7b69b78e99e878be30a458486ad8af2c8a3218bf84b4b956b7->enter($__internal_7eb7f67640d96e7b69b78e99e878be30a458486ad8af2c8a3218bf84b4b956b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0437a1cad54d392ba9a5bff5c0562568dd62eed4bbc4d763f3b5eb8e3b1e9a39->leave($__internal_0437a1cad54d392ba9a5bff5c0562568dd62eed4bbc4d763f3b5eb8e3b1e9a39_prof);

        
        $__internal_7eb7f67640d96e7b69b78e99e878be30a458486ad8af2c8a3218bf84b4b956b7->leave($__internal_7eb7f67640d96e7b69b78e99e878be30a458486ad8af2c8a3218bf84b4b956b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
