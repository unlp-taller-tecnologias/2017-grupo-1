<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_c8c587ba4b3db953d3e801d553e1f109381fc5962df7b8703a8bfced800e8c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c587ba4b3db953d3e801d553e1f109381fc5962df7b8703a8bfced800e8c40->enter($__internal_c8c587ba4b3db953d3e801d553e1f109381fc5962df7b8703a8bfced800e8c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e13e66d1c34aaf67c42acca9820dd9b3bbed77e13decfc065a4d7f8eed4ef5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13e66d1c34aaf67c42acca9820dd9b3bbed77e13decfc065a4d7f8eed4ef5fc->enter($__internal_e13e66d1c34aaf67c42acca9820dd9b3bbed77e13decfc065a4d7f8eed4ef5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c8c587ba4b3db953d3e801d553e1f109381fc5962df7b8703a8bfced800e8c40->leave($__internal_c8c587ba4b3db953d3e801d553e1f109381fc5962df7b8703a8bfced800e8c40_prof);

        
        $__internal_e13e66d1c34aaf67c42acca9820dd9b3bbed77e13decfc065a4d7f8eed4ef5fc->leave($__internal_e13e66d1c34aaf67c42acca9820dd9b3bbed77e13decfc065a4d7f8eed4ef5fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
