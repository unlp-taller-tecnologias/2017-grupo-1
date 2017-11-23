<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_014434e814422dec8fd3924758dfe3bd86429358e14dac28013e2411e4bc6923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014434e814422dec8fd3924758dfe3bd86429358e14dac28013e2411e4bc6923->enter($__internal_014434e814422dec8fd3924758dfe3bd86429358e14dac28013e2411e4bc6923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e4a5a515feb0f038dfade28cdf6d47d7c5e1ddd311fb398c4299c076d1cc3a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a5a515feb0f038dfade28cdf6d47d7c5e1ddd311fb398c4299c076d1cc3a2e->enter($__internal_e4a5a515feb0f038dfade28cdf6d47d7c5e1ddd311fb398c4299c076d1cc3a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_014434e814422dec8fd3924758dfe3bd86429358e14dac28013e2411e4bc6923->leave($__internal_014434e814422dec8fd3924758dfe3bd86429358e14dac28013e2411e4bc6923_prof);

        
        $__internal_e4a5a515feb0f038dfade28cdf6d47d7c5e1ddd311fb398c4299c076d1cc3a2e->leave($__internal_e4a5a515feb0f038dfade28cdf6d47d7c5e1ddd311fb398c4299c076d1cc3a2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d3e9f85ae5c0d270fe44f58473b249dc2ff40970ea1b43f234f13a9f444ef1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3e9f85ae5c0d270fe44f58473b249dc2ff40970ea1b43f234f13a9f444ef1c->enter($__internal_8d3e9f85ae5c0d270fe44f58473b249dc2ff40970ea1b43f234f13a9f444ef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51a2bf9b6e4a2967221d9fffa3a4641edf29b377470f28a4acfa584240aa55b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a2bf9b6e4a2967221d9fffa3a4641edf29b377470f28a4acfa584240aa55b1->enter($__internal_51a2bf9b6e4a2967221d9fffa3a4641edf29b377470f28a4acfa584240aa55b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51a2bf9b6e4a2967221d9fffa3a4641edf29b377470f28a4acfa584240aa55b1->leave($__internal_51a2bf9b6e4a2967221d9fffa3a4641edf29b377470f28a4acfa584240aa55b1_prof);

        
        $__internal_8d3e9f85ae5c0d270fe44f58473b249dc2ff40970ea1b43f234f13a9f444ef1c->leave($__internal_8d3e9f85ae5c0d270fe44f58473b249dc2ff40970ea1b43f234f13a9f444ef1c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f25358c42a8e1b2102622f1888f387c543bb06eba2026ff80b48dae68025c9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25358c42a8e1b2102622f1888f387c543bb06eba2026ff80b48dae68025c9ae->enter($__internal_f25358c42a8e1b2102622f1888f387c543bb06eba2026ff80b48dae68025c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f46ab8d2357e205eecc876c67a7dcab9626a49528e20989fc1f8762461987cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46ab8d2357e205eecc876c67a7dcab9626a49528e20989fc1f8762461987cdc->enter($__internal_f46ab8d2357e205eecc876c67a7dcab9626a49528e20989fc1f8762461987cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f46ab8d2357e205eecc876c67a7dcab9626a49528e20989fc1f8762461987cdc->leave($__internal_f46ab8d2357e205eecc876c67a7dcab9626a49528e20989fc1f8762461987cdc_prof);

        
        $__internal_f25358c42a8e1b2102622f1888f387c543bb06eba2026ff80b48dae68025c9ae->leave($__internal_f25358c42a8e1b2102622f1888f387c543bb06eba2026ff80b48dae68025c9ae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87d4d45219df4aed6a3ee7acc9e2badafc657a5b3e5a0a661f3814e9b39fa4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87d4d45219df4aed6a3ee7acc9e2badafc657a5b3e5a0a661f3814e9b39fa4e->enter($__internal_a87d4d45219df4aed6a3ee7acc9e2badafc657a5b3e5a0a661f3814e9b39fa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcdf98b64ce18777a8cba8ea788d5bc2f660a68a0e70a8a27d5cb2598f9d3b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdf98b64ce18777a8cba8ea788d5bc2f660a68a0e70a8a27d5cb2598f9d3b24->enter($__internal_fcdf98b64ce18777a8cba8ea788d5bc2f660a68a0e70a8a27d5cb2598f9d3b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcdf98b64ce18777a8cba8ea788d5bc2f660a68a0e70a8a27d5cb2598f9d3b24->leave($__internal_fcdf98b64ce18777a8cba8ea788d5bc2f660a68a0e70a8a27d5cb2598f9d3b24_prof);

        
        $__internal_a87d4d45219df4aed6a3ee7acc9e2badafc657a5b3e5a0a661f3814e9b39fa4e->leave($__internal_a87d4d45219df4aed6a3ee7acc9e2badafc657a5b3e5a0a661f3814e9b39fa4e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa1159b435a63614618891e353f599891a78937a4627e2ef4de30d5e736a8ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1159b435a63614618891e353f599891a78937a4627e2ef4de30d5e736a8ee3->enter($__internal_fa1159b435a63614618891e353f599891a78937a4627e2ef4de30d5e736a8ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_797af993d0cfb1295d01fa74cf2300f424b37bd821f0ef49aaf4f28ce764235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797af993d0cfb1295d01fa74cf2300f424b37bd821f0ef49aaf4f28ce764235d->enter($__internal_797af993d0cfb1295d01fa74cf2300f424b37bd821f0ef49aaf4f28ce764235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_797af993d0cfb1295d01fa74cf2300f424b37bd821f0ef49aaf4f28ce764235d->leave($__internal_797af993d0cfb1295d01fa74cf2300f424b37bd821f0ef49aaf4f28ce764235d_prof);

        
        $__internal_fa1159b435a63614618891e353f599891a78937a4627e2ef4de30d5e736a8ee3->leave($__internal_fa1159b435a63614618891e353f599891a78937a4627e2ef4de30d5e736a8ee3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/scv/app/Resources/views/base.html.twig");
    }
}
