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
        $__internal_ea4dc72cadc6004d8a71d257970b137958272dd36a14a322a1118c7f7da63d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4dc72cadc6004d8a71d257970b137958272dd36a14a322a1118c7f7da63d84->enter($__internal_ea4dc72cadc6004d8a71d257970b137958272dd36a14a322a1118c7f7da63d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c304bcb10076092dec59f1f8acb4fd2722e39667eeb584b1b88c09536eb19bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c304bcb10076092dec59f1f8acb4fd2722e39667eeb584b1b88c09536eb19bf5->enter($__internal_c304bcb10076092dec59f1f8acb4fd2722e39667eeb584b1b88c09536eb19bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ea4dc72cadc6004d8a71d257970b137958272dd36a14a322a1118c7f7da63d84->leave($__internal_ea4dc72cadc6004d8a71d257970b137958272dd36a14a322a1118c7f7da63d84_prof);

        
        $__internal_c304bcb10076092dec59f1f8acb4fd2722e39667eeb584b1b88c09536eb19bf5->leave($__internal_c304bcb10076092dec59f1f8acb4fd2722e39667eeb584b1b88c09536eb19bf5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_322434891ceb7184bda7c5d8a07558219a5c8482ec70157d57e7d7dc1ffa72fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322434891ceb7184bda7c5d8a07558219a5c8482ec70157d57e7d7dc1ffa72fa->enter($__internal_322434891ceb7184bda7c5d8a07558219a5c8482ec70157d57e7d7dc1ffa72fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d26597e57c9d4b2f845ea338922ecd0a5ebc454579102cf1a85651313e73780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d26597e57c9d4b2f845ea338922ecd0a5ebc454579102cf1a85651313e73780->enter($__internal_9d26597e57c9d4b2f845ea338922ecd0a5ebc454579102cf1a85651313e73780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9d26597e57c9d4b2f845ea338922ecd0a5ebc454579102cf1a85651313e73780->leave($__internal_9d26597e57c9d4b2f845ea338922ecd0a5ebc454579102cf1a85651313e73780_prof);

        
        $__internal_322434891ceb7184bda7c5d8a07558219a5c8482ec70157d57e7d7dc1ffa72fa->leave($__internal_322434891ceb7184bda7c5d8a07558219a5c8482ec70157d57e7d7dc1ffa72fa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1e2ce0c18acc942135ca1a7f27643685b6ef425c0d3db12930b8fd3568602ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e2ce0c18acc942135ca1a7f27643685b6ef425c0d3db12930b8fd3568602ba->enter($__internal_d1e2ce0c18acc942135ca1a7f27643685b6ef425c0d3db12930b8fd3568602ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6a6da73ed30e0f9556545beafc5b21cc765ba03fa6e09d8474be7344e6fdebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a6da73ed30e0f9556545beafc5b21cc765ba03fa6e09d8474be7344e6fdebc->enter($__internal_e6a6da73ed30e0f9556545beafc5b21cc765ba03fa6e09d8474be7344e6fdebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e6a6da73ed30e0f9556545beafc5b21cc765ba03fa6e09d8474be7344e6fdebc->leave($__internal_e6a6da73ed30e0f9556545beafc5b21cc765ba03fa6e09d8474be7344e6fdebc_prof);

        
        $__internal_d1e2ce0c18acc942135ca1a7f27643685b6ef425c0d3db12930b8fd3568602ba->leave($__internal_d1e2ce0c18acc942135ca1a7f27643685b6ef425c0d3db12930b8fd3568602ba_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_628f6cd9cafecf35c17de347b10bfdd4cf83d58d2fa53c73391d38ec04d048b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628f6cd9cafecf35c17de347b10bfdd4cf83d58d2fa53c73391d38ec04d048b6->enter($__internal_628f6cd9cafecf35c17de347b10bfdd4cf83d58d2fa53c73391d38ec04d048b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9dba823d16bd71da1779473f4ce9af7a00003f244e6e989eb7050396db0005f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9dba823d16bd71da1779473f4ce9af7a00003f244e6e989eb7050396db0005f->enter($__internal_c9dba823d16bd71da1779473f4ce9af7a00003f244e6e989eb7050396db0005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9dba823d16bd71da1779473f4ce9af7a00003f244e6e989eb7050396db0005f->leave($__internal_c9dba823d16bd71da1779473f4ce9af7a00003f244e6e989eb7050396db0005f_prof);

        
        $__internal_628f6cd9cafecf35c17de347b10bfdd4cf83d58d2fa53c73391d38ec04d048b6->leave($__internal_628f6cd9cafecf35c17de347b10bfdd4cf83d58d2fa53c73391d38ec04d048b6_prof);

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
