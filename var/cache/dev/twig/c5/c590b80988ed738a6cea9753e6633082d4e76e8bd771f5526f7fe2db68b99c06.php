<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f7ce00574c5bd29e62984aa134fd8315477d925b1493a8ad7b45ef3c82115038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37da7b5fe14e33415ef6cade418f3579cc3260e1941ef17e40c026f3f204bb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37da7b5fe14e33415ef6cade418f3579cc3260e1941ef17e40c026f3f204bb43->enter($__internal_37da7b5fe14e33415ef6cade418f3579cc3260e1941ef17e40c026f3f204bb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_1a5c5bf62b08e7e8b678d62ba07865345fee57dabf9e02806abadfa4c2b8c888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5c5bf62b08e7e8b678d62ba07865345fee57dabf9e02806abadfa4c2b8c888->enter($__internal_1a5c5bf62b08e7e8b678d62ba07865345fee57dabf9e02806abadfa4c2b8c888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_37da7b5fe14e33415ef6cade418f3579cc3260e1941ef17e40c026f3f204bb43->leave($__internal_37da7b5fe14e33415ef6cade418f3579cc3260e1941ef17e40c026f3f204bb43_prof);

        
        $__internal_1a5c5bf62b08e7e8b678d62ba07865345fee57dabf9e02806abadfa4c2b8c888->leave($__internal_1a5c5bf62b08e7e8b678d62ba07865345fee57dabf9e02806abadfa4c2b8c888_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3e32556303fc31462332e3ac60be37a75318ec816ffdaf993d3d5264b4be8158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e32556303fc31462332e3ac60be37a75318ec816ffdaf993d3d5264b4be8158->enter($__internal_3e32556303fc31462332e3ac60be37a75318ec816ffdaf993d3d5264b4be8158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_97c2d9ced015b93ef9f72aaebf244ed2c8c6a1b130650645fba046615870f68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c2d9ced015b93ef9f72aaebf244ed2c8c6a1b130650645fba046615870f68a->enter($__internal_97c2d9ced015b93ef9f72aaebf244ed2c8c6a1b130650645fba046615870f68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_97c2d9ced015b93ef9f72aaebf244ed2c8c6a1b130650645fba046615870f68a->leave($__internal_97c2d9ced015b93ef9f72aaebf244ed2c8c6a1b130650645fba046615870f68a_prof);

        
        $__internal_3e32556303fc31462332e3ac60be37a75318ec816ffdaf993d3d5264b4be8158->leave($__internal_3e32556303fc31462332e3ac60be37a75318ec816ffdaf993d3d5264b4be8158_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7917de1cb380ef5cde40595e0b0feda666ea9cae7115cd5355ce50315f46f655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7917de1cb380ef5cde40595e0b0feda666ea9cae7115cd5355ce50315f46f655->enter($__internal_7917de1cb380ef5cde40595e0b0feda666ea9cae7115cd5355ce50315f46f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c0d6ec5c35c0993f4deb8dbf5a09a9765dbffae4f7d84daf39cbae262e77938d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d6ec5c35c0993f4deb8dbf5a09a9765dbffae4f7d84daf39cbae262e77938d->enter($__internal_c0d6ec5c35c0993f4deb8dbf5a09a9765dbffae4f7d84daf39cbae262e77938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_c0d6ec5c35c0993f4deb8dbf5a09a9765dbffae4f7d84daf39cbae262e77938d->leave($__internal_c0d6ec5c35c0993f4deb8dbf5a09a9765dbffae4f7d84daf39cbae262e77938d_prof);

        
        $__internal_7917de1cb380ef5cde40595e0b0feda666ea9cae7115cd5355ce50315f46f655->leave($__internal_7917de1cb380ef5cde40595e0b0feda666ea9cae7115cd5355ce50315f46f655_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5f78bdf2134058b1efe9a09455281ad47443ec7b72e608d654a82812a9f3f1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f78bdf2134058b1efe9a09455281ad47443ec7b72e608d654a82812a9f3f1f6->enter($__internal_5f78bdf2134058b1efe9a09455281ad47443ec7b72e608d654a82812a9f3f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_82975aa8ee589228e4412276e8ef8a61369786189ef54c99f76e5500e2b8e8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82975aa8ee589228e4412276e8ef8a61369786189ef54c99f76e5500e2b8e8aa->enter($__internal_82975aa8ee589228e4412276e8ef8a61369786189ef54c99f76e5500e2b8e8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_82975aa8ee589228e4412276e8ef8a61369786189ef54c99f76e5500e2b8e8aa->leave($__internal_82975aa8ee589228e4412276e8ef8a61369786189ef54c99f76e5500e2b8e8aa_prof);

        
        $__internal_5f78bdf2134058b1efe9a09455281ad47443ec7b72e608d654a82812a9f3f1f6->leave($__internal_5f78bdf2134058b1efe9a09455281ad47443ec7b72e608d654a82812a9f3f1f6_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d2c0a1bef89b054bf2bf2ca993c667d4bdcd3812ba668469731768d23772cac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c0a1bef89b054bf2bf2ca993c667d4bdcd3812ba668469731768d23772cac1->enter($__internal_d2c0a1bef89b054bf2bf2ca993c667d4bdcd3812ba668469731768d23772cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_97c3c47827db49a36d981ab4431f5eff3af025345e7890da01a8487c33caa714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c3c47827db49a36d981ab4431f5eff3af025345e7890da01a8487c33caa714->enter($__internal_97c3c47827db49a36d981ab4431f5eff3af025345e7890da01a8487c33caa714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_97c3c47827db49a36d981ab4431f5eff3af025345e7890da01a8487c33caa714->leave($__internal_97c3c47827db49a36d981ab4431f5eff3af025345e7890da01a8487c33caa714_prof);

        
        $__internal_d2c0a1bef89b054bf2bf2ca993c667d4bdcd3812ba668469731768d23772cac1->leave($__internal_d2c0a1bef89b054bf2bf2ca993c667d4bdcd3812ba668469731768d23772cac1_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
