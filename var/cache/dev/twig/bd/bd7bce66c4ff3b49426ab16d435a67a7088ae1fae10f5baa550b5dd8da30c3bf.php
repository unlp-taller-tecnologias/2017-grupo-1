<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3ef7758bad0ff73558ef8e8ceae0fdf82504d69c20dc902882222dc70dd0b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ef7758bad0ff73558ef8e8ceae0fdf82504d69c20dc902882222dc70dd0b8e->enter($__internal_f3ef7758bad0ff73558ef8e8ceae0fdf82504d69c20dc902882222dc70dd0b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_722d2181a221c2ec32310285ea0ba44de85bec82db4cf45774586719f4b8ca14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722d2181a221c2ec32310285ea0ba44de85bec82db4cf45774586719f4b8ca14->enter($__internal_722d2181a221c2ec32310285ea0ba44de85bec82db4cf45774586719f4b8ca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ef7758bad0ff73558ef8e8ceae0fdf82504d69c20dc902882222dc70dd0b8e->leave($__internal_f3ef7758bad0ff73558ef8e8ceae0fdf82504d69c20dc902882222dc70dd0b8e_prof);

        
        $__internal_722d2181a221c2ec32310285ea0ba44de85bec82db4cf45774586719f4b8ca14->leave($__internal_722d2181a221c2ec32310285ea0ba44de85bec82db4cf45774586719f4b8ca14_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_414c4acd5a87b5bbf35d52b24a830475fcd705d378a5774488d794b1b4e026a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414c4acd5a87b5bbf35d52b24a830475fcd705d378a5774488d794b1b4e026a6->enter($__internal_414c4acd5a87b5bbf35d52b24a830475fcd705d378a5774488d794b1b4e026a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f943f932ab01f457394e6c7645797b9ca43ba6981914017a4a3306d8181e5ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f943f932ab01f457394e6c7645797b9ca43ba6981914017a4a3306d8181e5ff9->enter($__internal_f943f932ab01f457394e6c7645797b9ca43ba6981914017a4a3306d8181e5ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f943f932ab01f457394e6c7645797b9ca43ba6981914017a4a3306d8181e5ff9->leave($__internal_f943f932ab01f457394e6c7645797b9ca43ba6981914017a4a3306d8181e5ff9_prof);

        
        $__internal_414c4acd5a87b5bbf35d52b24a830475fcd705d378a5774488d794b1b4e026a6->leave($__internal_414c4acd5a87b5bbf35d52b24a830475fcd705d378a5774488d794b1b4e026a6_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d11763b2dcc88ba9952931c1932fbc10334d96ffbb28e4d42c32ea8cb46921c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11763b2dcc88ba9952931c1932fbc10334d96ffbb28e4d42c32ea8cb46921c7->enter($__internal_d11763b2dcc88ba9952931c1932fbc10334d96ffbb28e4d42c32ea8cb46921c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8898e03a00ca7662f1cae95761c15ec310970d8655a67e3894f88cce597ee35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8898e03a00ca7662f1cae95761c15ec310970d8655a67e3894f88cce597ee35b->enter($__internal_8898e03a00ca7662f1cae95761c15ec310970d8655a67e3894f88cce597ee35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8898e03a00ca7662f1cae95761c15ec310970d8655a67e3894f88cce597ee35b->leave($__internal_8898e03a00ca7662f1cae95761c15ec310970d8655a67e3894f88cce597ee35b_prof);

        
        $__internal_d11763b2dcc88ba9952931c1932fbc10334d96ffbb28e4d42c32ea8cb46921c7->leave($__internal_d11763b2dcc88ba9952931c1932fbc10334d96ffbb28e4d42c32ea8cb46921c7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
