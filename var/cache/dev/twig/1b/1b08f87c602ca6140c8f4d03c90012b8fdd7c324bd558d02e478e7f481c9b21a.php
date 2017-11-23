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
        $__internal_242423ab6d02701c28aa7f259b8ef96b0cfa2778b8a7278a90d03d1783b658a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242423ab6d02701c28aa7f259b8ef96b0cfa2778b8a7278a90d03d1783b658a2->enter($__internal_242423ab6d02701c28aa7f259b8ef96b0cfa2778b8a7278a90d03d1783b658a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f5e24a5650abd6c2b7572a28b87000e33f5da423ffde770cda441a73e9e439f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5e24a5650abd6c2b7572a28b87000e33f5da423ffde770cda441a73e9e439f->enter($__internal_1f5e24a5650abd6c2b7572a28b87000e33f5da423ffde770cda441a73e9e439f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_242423ab6d02701c28aa7f259b8ef96b0cfa2778b8a7278a90d03d1783b658a2->leave($__internal_242423ab6d02701c28aa7f259b8ef96b0cfa2778b8a7278a90d03d1783b658a2_prof);

        
        $__internal_1f5e24a5650abd6c2b7572a28b87000e33f5da423ffde770cda441a73e9e439f->leave($__internal_1f5e24a5650abd6c2b7572a28b87000e33f5da423ffde770cda441a73e9e439f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_abb229fd98ca70113c20fdde34297695ac7e6ab3054ebacd3633e921912b59c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb229fd98ca70113c20fdde34297695ac7e6ab3054ebacd3633e921912b59c3->enter($__internal_abb229fd98ca70113c20fdde34297695ac7e6ab3054ebacd3633e921912b59c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff36a2bf71415c3a375ce130bb347de861031b04e9b86a9d35230c2c5e053e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff36a2bf71415c3a375ce130bb347de861031b04e9b86a9d35230c2c5e053e97->enter($__internal_ff36a2bf71415c3a375ce130bb347de861031b04e9b86a9d35230c2c5e053e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff36a2bf71415c3a375ce130bb347de861031b04e9b86a9d35230c2c5e053e97->leave($__internal_ff36a2bf71415c3a375ce130bb347de861031b04e9b86a9d35230c2c5e053e97_prof);

        
        $__internal_abb229fd98ca70113c20fdde34297695ac7e6ab3054ebacd3633e921912b59c3->leave($__internal_abb229fd98ca70113c20fdde34297695ac7e6ab3054ebacd3633e921912b59c3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c05a0fa666c1cd7e5e745c2ee507707cb8c7d872557296d84a8b8230f0bc4d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05a0fa666c1cd7e5e745c2ee507707cb8c7d872557296d84a8b8230f0bc4d85->enter($__internal_c05a0fa666c1cd7e5e745c2ee507707cb8c7d872557296d84a8b8230f0bc4d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9dbc13c9892ef35a69b1d3db86da33c78c75621fc24a5fb1d6ce37d1269e1bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbc13c9892ef35a69b1d3db86da33c78c75621fc24a5fb1d6ce37d1269e1bf3->enter($__internal_9dbc13c9892ef35a69b1d3db86da33c78c75621fc24a5fb1d6ce37d1269e1bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9dbc13c9892ef35a69b1d3db86da33c78c75621fc24a5fb1d6ce37d1269e1bf3->leave($__internal_9dbc13c9892ef35a69b1d3db86da33c78c75621fc24a5fb1d6ce37d1269e1bf3_prof);

        
        $__internal_c05a0fa666c1cd7e5e745c2ee507707cb8c7d872557296d84a8b8230f0bc4d85->leave($__internal_c05a0fa666c1cd7e5e745c2ee507707cb8c7d872557296d84a8b8230f0bc4d85_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b2fb6f9b7859e46d96e5774ea907de556291a37788a1b49636d401789a2642a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2fb6f9b7859e46d96e5774ea907de556291a37788a1b49636d401789a2642a->enter($__internal_6b2fb6f9b7859e46d96e5774ea907de556291a37788a1b49636d401789a2642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1f7b7781751a74927110a65b6733d237ebe53cd6ec00601dae34abcdc8fc97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f7b7781751a74927110a65b6733d237ebe53cd6ec00601dae34abcdc8fc97e->enter($__internal_e1f7b7781751a74927110a65b6733d237ebe53cd6ec00601dae34abcdc8fc97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e1f7b7781751a74927110a65b6733d237ebe53cd6ec00601dae34abcdc8fc97e->leave($__internal_e1f7b7781751a74927110a65b6733d237ebe53cd6ec00601dae34abcdc8fc97e_prof);

        
        $__internal_6b2fb6f9b7859e46d96e5774ea907de556291a37788a1b49636d401789a2642a->leave($__internal_6b2fb6f9b7859e46d96e5774ea907de556291a37788a1b49636d401789a2642a_prof);

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
