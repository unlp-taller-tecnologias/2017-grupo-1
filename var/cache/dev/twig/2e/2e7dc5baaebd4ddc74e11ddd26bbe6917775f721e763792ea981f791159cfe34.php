<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74488f50f0cdfc8e8569a69eb6e63230faf688593281a2a2267221935c756548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74488f50f0cdfc8e8569a69eb6e63230faf688593281a2a2267221935c756548->enter($__internal_74488f50f0cdfc8e8569a69eb6e63230faf688593281a2a2267221935c756548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5e6be1cf97874d55234a6ed1cb6009866cd4722948725ade612da2048352325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6be1cf97874d55234a6ed1cb6009866cd4722948725ade612da2048352325f->enter($__internal_5e6be1cf97874d55234a6ed1cb6009866cd4722948725ade612da2048352325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_74488f50f0cdfc8e8569a69eb6e63230faf688593281a2a2267221935c756548->leave($__internal_74488f50f0cdfc8e8569a69eb6e63230faf688593281a2a2267221935c756548_prof);

        
        $__internal_5e6be1cf97874d55234a6ed1cb6009866cd4722948725ade612da2048352325f->leave($__internal_5e6be1cf97874d55234a6ed1cb6009866cd4722948725ade612da2048352325f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7970c784e0c3e3f750473ec6921dbdcba3eac25f6f8108965df67e7a11d7574b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7970c784e0c3e3f750473ec6921dbdcba3eac25f6f8108965df67e7a11d7574b->enter($__internal_7970c784e0c3e3f750473ec6921dbdcba3eac25f6f8108965df67e7a11d7574b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f62590d2e6f6d46a0e331bd3ec03f1a998463d1da1db9a372d32d5ba433be58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62590d2e6f6d46a0e331bd3ec03f1a998463d1da1db9a372d32d5ba433be58c->enter($__internal_f62590d2e6f6d46a0e331bd3ec03f1a998463d1da1db9a372d32d5ba433be58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f62590d2e6f6d46a0e331bd3ec03f1a998463d1da1db9a372d32d5ba433be58c->leave($__internal_f62590d2e6f6d46a0e331bd3ec03f1a998463d1da1db9a372d32d5ba433be58c_prof);

        
        $__internal_7970c784e0c3e3f750473ec6921dbdcba3eac25f6f8108965df67e7a11d7574b->leave($__internal_7970c784e0c3e3f750473ec6921dbdcba3eac25f6f8108965df67e7a11d7574b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
