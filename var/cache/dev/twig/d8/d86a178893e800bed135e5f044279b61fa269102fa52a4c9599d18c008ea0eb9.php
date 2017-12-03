<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82d94865b8bc774c13f5ebb9ff2abfad6837ed5c949c7dfb9a8d130b8e708058 extends Twig_Template
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
        $__internal_3dda18c1e8d236d98cc89fc63958dc53500151643f0d6d6fadaa01453437f2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dda18c1e8d236d98cc89fc63958dc53500151643f0d6d6fadaa01453437f2f8->enter($__internal_3dda18c1e8d236d98cc89fc63958dc53500151643f0d6d6fadaa01453437f2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3bd8602e9f8141cdeda33156d6ec39a52386364076d670619649809c5f52b61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd8602e9f8141cdeda33156d6ec39a52386364076d670619649809c5f52b61e->enter($__internal_3bd8602e9f8141cdeda33156d6ec39a52386364076d670619649809c5f52b61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3dda18c1e8d236d98cc89fc63958dc53500151643f0d6d6fadaa01453437f2f8->leave($__internal_3dda18c1e8d236d98cc89fc63958dc53500151643f0d6d6fadaa01453437f2f8_prof);

        
        $__internal_3bd8602e9f8141cdeda33156d6ec39a52386364076d670619649809c5f52b61e->leave($__internal_3bd8602e9f8141cdeda33156d6ec39a52386364076d670619649809c5f52b61e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
