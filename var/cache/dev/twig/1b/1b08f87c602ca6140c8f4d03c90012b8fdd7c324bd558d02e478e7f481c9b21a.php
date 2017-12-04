<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7dfb75671f7367ad91eea471f0a9a11a26a1414f4370ac4b0f57865c896e235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7dfb75671f7367ad91eea471f0a9a11a26a1414f4370ac4b0f57865c896e235->enter($__internal_f7dfb75671f7367ad91eea471f0a9a11a26a1414f4370ac4b0f57865c896e235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9c53839788cd08a64037855683a677123ccf35cb2eca8f00c15d8c255f60819e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c53839788cd08a64037855683a677123ccf35cb2eca8f00c15d8c255f60819e->enter($__internal_9c53839788cd08a64037855683a677123ccf35cb2eca8f00c15d8c255f60819e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7dfb75671f7367ad91eea471f0a9a11a26a1414f4370ac4b0f57865c896e235->leave($__internal_f7dfb75671f7367ad91eea471f0a9a11a26a1414f4370ac4b0f57865c896e235_prof);

        
        $__internal_9c53839788cd08a64037855683a677123ccf35cb2eca8f00c15d8c255f60819e->leave($__internal_9c53839788cd08a64037855683a677123ccf35cb2eca8f00c15d8c255f60819e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f462d3327231f52b563adc3d3e1538c2b568013640523178c30aca850d564e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f462d3327231f52b563adc3d3e1538c2b568013640523178c30aca850d564e3e->enter($__internal_f462d3327231f52b563adc3d3e1538c2b568013640523178c30aca850d564e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d96dc1f7c110f84c444ee53c3748c88ad92e2e5e997efa7c30dc37320c9ea5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d96dc1f7c110f84c444ee53c3748c88ad92e2e5e997efa7c30dc37320c9ea5b->enter($__internal_5d96dc1f7c110f84c444ee53c3748c88ad92e2e5e997efa7c30dc37320c9ea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5d96dc1f7c110f84c444ee53c3748c88ad92e2e5e997efa7c30dc37320c9ea5b->leave($__internal_5d96dc1f7c110f84c444ee53c3748c88ad92e2e5e997efa7c30dc37320c9ea5b_prof);

        
        $__internal_f462d3327231f52b563adc3d3e1538c2b568013640523178c30aca850d564e3e->leave($__internal_f462d3327231f52b563adc3d3e1538c2b568013640523178c30aca850d564e3e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_337caf1479d6bfd5ef3dcd4e2cda2858585ec9cfd4fac9a95733291089e4dc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337caf1479d6bfd5ef3dcd4e2cda2858585ec9cfd4fac9a95733291089e4dc7a->enter($__internal_337caf1479d6bfd5ef3dcd4e2cda2858585ec9cfd4fac9a95733291089e4dc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8341ad63d92c5d8585c5ed7f9cce7cd82ceaf5d6da499e07de64d8afc68edc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8341ad63d92c5d8585c5ed7f9cce7cd82ceaf5d6da499e07de64d8afc68edc3->enter($__internal_c8341ad63d92c5d8585c5ed7f9cce7cd82ceaf5d6da499e07de64d8afc68edc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8341ad63d92c5d8585c5ed7f9cce7cd82ceaf5d6da499e07de64d8afc68edc3->leave($__internal_c8341ad63d92c5d8585c5ed7f9cce7cd82ceaf5d6da499e07de64d8afc68edc3_prof);

        
        $__internal_337caf1479d6bfd5ef3dcd4e2cda2858585ec9cfd4fac9a95733291089e4dc7a->leave($__internal_337caf1479d6bfd5ef3dcd4e2cda2858585ec9cfd4fac9a95733291089e4dc7a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2020cdd0c6140b5512d2a0b96c2dd96e54c65ea24ef4858e6cd82f40c6e13ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2020cdd0c6140b5512d2a0b96c2dd96e54c65ea24ef4858e6cd82f40c6e13ca->enter($__internal_d2020cdd0c6140b5512d2a0b96c2dd96e54c65ea24ef4858e6cd82f40c6e13ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5b2bc36a8bfc9d3259ecf855456edee3c66540da94186ec230ff36402c4e872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b2bc36a8bfc9d3259ecf855456edee3c66540da94186ec230ff36402c4e872->enter($__internal_d5b2bc36a8bfc9d3259ecf855456edee3c66540da94186ec230ff36402c4e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d5b2bc36a8bfc9d3259ecf855456edee3c66540da94186ec230ff36402c4e872->leave($__internal_d5b2bc36a8bfc9d3259ecf855456edee3c66540da94186ec230ff36402c4e872_prof);

        
        $__internal_d2020cdd0c6140b5512d2a0b96c2dd96e54c65ea24ef4858e6cd82f40c6e13ca->leave($__internal_d2020cdd0c6140b5512d2a0b96c2dd96e54c65ea24ef4858e6cd82f40c6e13ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
