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
        $__internal_245fd159d0fc8f204951f6dd2158cae1c25fccea6971ee6da82d14b7238cfc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245fd159d0fc8f204951f6dd2158cae1c25fccea6971ee6da82d14b7238cfc9d->enter($__internal_245fd159d0fc8f204951f6dd2158cae1c25fccea6971ee6da82d14b7238cfc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3d0344f35775a60e08f355222649d5c65aa0758531dbaf7e3792dc24b5275b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0344f35775a60e08f355222649d5c65aa0758531dbaf7e3792dc24b5275b90->enter($__internal_3d0344f35775a60e08f355222649d5c65aa0758531dbaf7e3792dc24b5275b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_245fd159d0fc8f204951f6dd2158cae1c25fccea6971ee6da82d14b7238cfc9d->leave($__internal_245fd159d0fc8f204951f6dd2158cae1c25fccea6971ee6da82d14b7238cfc9d_prof);

        
        $__internal_3d0344f35775a60e08f355222649d5c65aa0758531dbaf7e3792dc24b5275b90->leave($__internal_3d0344f35775a60e08f355222649d5c65aa0758531dbaf7e3792dc24b5275b90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fe072433447eb03fac058f6a62f23d30e7dbce5b016f8355ab844a9f41d46a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe072433447eb03fac058f6a62f23d30e7dbce5b016f8355ab844a9f41d46a0->enter($__internal_0fe072433447eb03fac058f6a62f23d30e7dbce5b016f8355ab844a9f41d46a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f71e9cd26c85168bb5dbc78cc9372d9c9539f8e6ca5244465d3a782d3e8b99f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71e9cd26c85168bb5dbc78cc9372d9c9539f8e6ca5244465d3a782d3e8b99f1->enter($__internal_f71e9cd26c85168bb5dbc78cc9372d9c9539f8e6ca5244465d3a782d3e8b99f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f71e9cd26c85168bb5dbc78cc9372d9c9539f8e6ca5244465d3a782d3e8b99f1->leave($__internal_f71e9cd26c85168bb5dbc78cc9372d9c9539f8e6ca5244465d3a782d3e8b99f1_prof);

        
        $__internal_0fe072433447eb03fac058f6a62f23d30e7dbce5b016f8355ab844a9f41d46a0->leave($__internal_0fe072433447eb03fac058f6a62f23d30e7dbce5b016f8355ab844a9f41d46a0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e89a46b832e283532448c7cf9bf66f64198990b8ce3ea3c02ef0646e65721e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89a46b832e283532448c7cf9bf66f64198990b8ce3ea3c02ef0646e65721e35->enter($__internal_e89a46b832e283532448c7cf9bf66f64198990b8ce3ea3c02ef0646e65721e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63a4f064fa374d25022192f23ee8cc2b7b4f11f09434a08e16999d7577b09319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a4f064fa374d25022192f23ee8cc2b7b4f11f09434a08e16999d7577b09319->enter($__internal_63a4f064fa374d25022192f23ee8cc2b7b4f11f09434a08e16999d7577b09319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_63a4f064fa374d25022192f23ee8cc2b7b4f11f09434a08e16999d7577b09319->leave($__internal_63a4f064fa374d25022192f23ee8cc2b7b4f11f09434a08e16999d7577b09319_prof);

        
        $__internal_e89a46b832e283532448c7cf9bf66f64198990b8ce3ea3c02ef0646e65721e35->leave($__internal_e89a46b832e283532448c7cf9bf66f64198990b8ce3ea3c02ef0646e65721e35_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_58a844fbce4a23d48bc4c5835db94db2516066e42f573705be9527d96f622415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a844fbce4a23d48bc4c5835db94db2516066e42f573705be9527d96f622415->enter($__internal_58a844fbce4a23d48bc4c5835db94db2516066e42f573705be9527d96f622415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60850db010c3979bd386cb2d318135082ba5b302ec97b3d22fcab042530538ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60850db010c3979bd386cb2d318135082ba5b302ec97b3d22fcab042530538ee->enter($__internal_60850db010c3979bd386cb2d318135082ba5b302ec97b3d22fcab042530538ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60850db010c3979bd386cb2d318135082ba5b302ec97b3d22fcab042530538ee->leave($__internal_60850db010c3979bd386cb2d318135082ba5b302ec97b3d22fcab042530538ee_prof);

        
        $__internal_58a844fbce4a23d48bc4c5835db94db2516066e42f573705be9527d96f622415->leave($__internal_58a844fbce4a23d48bc4c5835db94db2516066e42f573705be9527d96f622415_prof);

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
