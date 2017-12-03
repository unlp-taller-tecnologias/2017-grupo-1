<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
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
        $__internal_30b3afcf8b53b4a1b35a582968fb2e37118eaa969b62451756bc896d26700a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b3afcf8b53b4a1b35a582968fb2e37118eaa969b62451756bc896d26700a19->enter($__internal_30b3afcf8b53b4a1b35a582968fb2e37118eaa969b62451756bc896d26700a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a06e328bf0ae48cd932a07ce783fbfdf2170c561b21173b7f42483e7f247cb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06e328bf0ae48cd932a07ce783fbfdf2170c561b21173b7f42483e7f247cb23->enter($__internal_a06e328bf0ae48cd932a07ce783fbfdf2170c561b21173b7f42483e7f247cb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_30b3afcf8b53b4a1b35a582968fb2e37118eaa969b62451756bc896d26700a19->leave($__internal_30b3afcf8b53b4a1b35a582968fb2e37118eaa969b62451756bc896d26700a19_prof);

        
        $__internal_a06e328bf0ae48cd932a07ce783fbfdf2170c561b21173b7f42483e7f247cb23->leave($__internal_a06e328bf0ae48cd932a07ce783fbfdf2170c561b21173b7f42483e7f247cb23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
