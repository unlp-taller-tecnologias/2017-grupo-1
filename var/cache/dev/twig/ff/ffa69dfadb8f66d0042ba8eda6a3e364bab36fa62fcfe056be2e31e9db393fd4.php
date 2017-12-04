<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3c089ea2d919725e007977f50262fa11ae33b8f7e58ec3a0ef5c71803d32b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c089ea2d919725e007977f50262fa11ae33b8f7e58ec3a0ef5c71803d32b04->enter($__internal_f3c089ea2d919725e007977f50262fa11ae33b8f7e58ec3a0ef5c71803d32b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b354756047b6b4ceb7f96e987480b9580404aac6679120cae53677e4e21f1031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b354756047b6b4ceb7f96e987480b9580404aac6679120cae53677e4e21f1031->enter($__internal_b354756047b6b4ceb7f96e987480b9580404aac6679120cae53677e4e21f1031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f3c089ea2d919725e007977f50262fa11ae33b8f7e58ec3a0ef5c71803d32b04->leave($__internal_f3c089ea2d919725e007977f50262fa11ae33b8f7e58ec3a0ef5c71803d32b04_prof);

        
        $__internal_b354756047b6b4ceb7f96e987480b9580404aac6679120cae53677e4e21f1031->leave($__internal_b354756047b6b4ceb7f96e987480b9580404aac6679120cae53677e4e21f1031_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f46082c17cfeb5a56fc95c7936f64be9f6d97b7b5ed262f120fc96b380da9ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46082c17cfeb5a56fc95c7936f64be9f6d97b7b5ed262f120fc96b380da9ecd->enter($__internal_f46082c17cfeb5a56fc95c7936f64be9f6d97b7b5ed262f120fc96b380da9ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_373d1ee08378d1a413923b29a82e9b4ab2caf4c0c9fd2de827fe6379bdc91175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373d1ee08378d1a413923b29a82e9b4ab2caf4c0c9fd2de827fe6379bdc91175->enter($__internal_373d1ee08378d1a413923b29a82e9b4ab2caf4c0c9fd2de827fe6379bdc91175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_373d1ee08378d1a413923b29a82e9b4ab2caf4c0c9fd2de827fe6379bdc91175->leave($__internal_373d1ee08378d1a413923b29a82e9b4ab2caf4c0c9fd2de827fe6379bdc91175_prof);

        
        $__internal_f46082c17cfeb5a56fc95c7936f64be9f6d97b7b5ed262f120fc96b380da9ecd->leave($__internal_f46082c17cfeb5a56fc95c7936f64be9f6d97b7b5ed262f120fc96b380da9ecd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_264a6dd2842610df422b25c75d6d218cc7e8dea71d8baaf6720b3c00dbbcaba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264a6dd2842610df422b25c75d6d218cc7e8dea71d8baaf6720b3c00dbbcaba2->enter($__internal_264a6dd2842610df422b25c75d6d218cc7e8dea71d8baaf6720b3c00dbbcaba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6be270b1ffe2a1be64be66a49ebc4d38af76405313acf275528e5a4c9b3ddafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be270b1ffe2a1be64be66a49ebc4d38af76405313acf275528e5a4c9b3ddafa->enter($__internal_6be270b1ffe2a1be64be66a49ebc4d38af76405313acf275528e5a4c9b3ddafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6be270b1ffe2a1be64be66a49ebc4d38af76405313acf275528e5a4c9b3ddafa->leave($__internal_6be270b1ffe2a1be64be66a49ebc4d38af76405313acf275528e5a4c9b3ddafa_prof);

        
        $__internal_264a6dd2842610df422b25c75d6d218cc7e8dea71d8baaf6720b3c00dbbcaba2->leave($__internal_264a6dd2842610df422b25c75d6d218cc7e8dea71d8baaf6720b3c00dbbcaba2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_887fc1dcae69dcb8dbef4332552eaf673457e19cb5b93be0874258174bb2f9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887fc1dcae69dcb8dbef4332552eaf673457e19cb5b93be0874258174bb2f9f2->enter($__internal_887fc1dcae69dcb8dbef4332552eaf673457e19cb5b93be0874258174bb2f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19c195aa55c690d973a5d32cb65f69334b5e0c60686405adc114d2c833af5a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c195aa55c690d973a5d32cb65f69334b5e0c60686405adc114d2c833af5a7d->enter($__internal_19c195aa55c690d973a5d32cb65f69334b5e0c60686405adc114d2c833af5a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19c195aa55c690d973a5d32cb65f69334b5e0c60686405adc114d2c833af5a7d->leave($__internal_19c195aa55c690d973a5d32cb65f69334b5e0c60686405adc114d2c833af5a7d_prof);

        
        $__internal_887fc1dcae69dcb8dbef4332552eaf673457e19cb5b93be0874258174bb2f9f2->leave($__internal_887fc1dcae69dcb8dbef4332552eaf673457e19cb5b93be0874258174bb2f9f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
