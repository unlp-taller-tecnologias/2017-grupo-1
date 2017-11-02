<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b282ae93a541e12e981439e7979474e09c89451ddf84b613dc5ae8a2d994eb6d extends Twig_Template
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
        $__internal_573217e158f6e04bdeaaabc5587d74272f33444588b230fccd04a8676224d3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573217e158f6e04bdeaaabc5587d74272f33444588b230fccd04a8676224d3b4->enter($__internal_573217e158f6e04bdeaaabc5587d74272f33444588b230fccd04a8676224d3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_573217e158f6e04bdeaaabc5587d74272f33444588b230fccd04a8676224d3b4->leave($__internal_573217e158f6e04bdeaaabc5587d74272f33444588b230fccd04a8676224d3b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
