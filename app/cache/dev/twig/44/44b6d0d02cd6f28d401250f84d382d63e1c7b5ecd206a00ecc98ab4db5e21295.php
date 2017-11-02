<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_943e2c1642f9081a1234db7ffdb0eee29b924b661389766c53f24e975bee080d extends Twig_Template
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
        $__internal_866ef472aa83a8dad3e1efdf3c5f553cd5213a513148ee7e551e87856c47336d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866ef472aa83a8dad3e1efdf3c5f553cd5213a513148ee7e551e87856c47336d->enter($__internal_866ef472aa83a8dad3e1efdf3c5f553cd5213a513148ee7e551e87856c47336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_866ef472aa83a8dad3e1efdf3c5f553cd5213a513148ee7e551e87856c47336d->leave($__internal_866ef472aa83a8dad3e1efdf3c5f553cd5213a513148ee7e551e87856c47336d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
