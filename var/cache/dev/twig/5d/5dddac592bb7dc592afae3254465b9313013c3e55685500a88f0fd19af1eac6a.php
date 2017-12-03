<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c4ec9c562b3c6fb36f1760d22af220ae46ea28b187c00dd18add1f55a1035e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fb54eb262500ecc2fff25f90d97b0cd2578e4235376e1a7af15391972535d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb54eb262500ecc2fff25f90d97b0cd2578e4235376e1a7af15391972535d08->enter($__internal_8fb54eb262500ecc2fff25f90d97b0cd2578e4235376e1a7af15391972535d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c0f761a8a73bcf747824d8c17bf4bbf370fcdfab926b87c49e0a183ca1d71a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f761a8a73bcf747824d8c17bf4bbf370fcdfab926b87c49e0a183ca1d71a7d->enter($__internal_c0f761a8a73bcf747824d8c17bf4bbf370fcdfab926b87c49e0a183ca1d71a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8fb54eb262500ecc2fff25f90d97b0cd2578e4235376e1a7af15391972535d08->leave($__internal_8fb54eb262500ecc2fff25f90d97b0cd2578e4235376e1a7af15391972535d08_prof);

        
        $__internal_c0f761a8a73bcf747824d8c17bf4bbf370fcdfab926b87c49e0a183ca1d71a7d->leave($__internal_c0f761a8a73bcf747824d8c17bf4bbf370fcdfab926b87c49e0a183ca1d71a7d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b43c303f6be00a28bf45bf4f822a5808a0c4595e2cfce50b3b77e480faf9f23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43c303f6be00a28bf45bf4f822a5808a0c4595e2cfce50b3b77e480faf9f23a->enter($__internal_b43c303f6be00a28bf45bf4f822a5808a0c4595e2cfce50b3b77e480faf9f23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2e87bb8a29d7010a7efb9bc0ebc42feff6da731899256f4436fc76700c21099e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e87bb8a29d7010a7efb9bc0ebc42feff6da731899256f4436fc76700c21099e->enter($__internal_2e87bb8a29d7010a7efb9bc0ebc42feff6da731899256f4436fc76700c21099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2e87bb8a29d7010a7efb9bc0ebc42feff6da731899256f4436fc76700c21099e->leave($__internal_2e87bb8a29d7010a7efb9bc0ebc42feff6da731899256f4436fc76700c21099e_prof);

        
        $__internal_b43c303f6be00a28bf45bf4f822a5808a0c4595e2cfce50b3b77e480faf9f23a->leave($__internal_b43c303f6be00a28bf45bf4f822a5808a0c4595e2cfce50b3b77e480faf9f23a_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_969194ad57dd216783855a9ff4b5011c7eba5c5d63763c31de78aec35a69d1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969194ad57dd216783855a9ff4b5011c7eba5c5d63763c31de78aec35a69d1ca->enter($__internal_969194ad57dd216783855a9ff4b5011c7eba5c5d63763c31de78aec35a69d1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5b181736e51e698029cb9c08337ddcd80c21634edaa5124818d0ea90dffb46bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b181736e51e698029cb9c08337ddcd80c21634edaa5124818d0ea90dffb46bb->enter($__internal_5b181736e51e698029cb9c08337ddcd80c21634edaa5124818d0ea90dffb46bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5b181736e51e698029cb9c08337ddcd80c21634edaa5124818d0ea90dffb46bb->leave($__internal_5b181736e51e698029cb9c08337ddcd80c21634edaa5124818d0ea90dffb46bb_prof);

        
        $__internal_969194ad57dd216783855a9ff4b5011c7eba5c5d63763c31de78aec35a69d1ca->leave($__internal_969194ad57dd216783855a9ff4b5011c7eba5c5d63763c31de78aec35a69d1ca_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e9e3ae8eebd40e5d1391941f3baf087d010558fcb0a40c545ba23911899a7163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e3ae8eebd40e5d1391941f3baf087d010558fcb0a40c545ba23911899a7163->enter($__internal_e9e3ae8eebd40e5d1391941f3baf087d010558fcb0a40c545ba23911899a7163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_00b6422e6dd1fc83bc3c4dd0118688e0d2535dffe2d1595767702a3bf859c4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b6422e6dd1fc83bc3c4dd0118688e0d2535dffe2d1595767702a3bf859c4b1->enter($__internal_00b6422e6dd1fc83bc3c4dd0118688e0d2535dffe2d1595767702a3bf859c4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_00b6422e6dd1fc83bc3c4dd0118688e0d2535dffe2d1595767702a3bf859c4b1->leave($__internal_00b6422e6dd1fc83bc3c4dd0118688e0d2535dffe2d1595767702a3bf859c4b1_prof);

        
        $__internal_e9e3ae8eebd40e5d1391941f3baf087d010558fcb0a40c545ba23911899a7163->leave($__internal_e9e3ae8eebd40e5d1391941f3baf087d010558fcb0a40c545ba23911899a7163_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1a8fc861359608abb0deddc01ac57e3e43663dd6dfa9c0c8cfc29decba46ed08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8fc861359608abb0deddc01ac57e3e43663dd6dfa9c0c8cfc29decba46ed08->enter($__internal_1a8fc861359608abb0deddc01ac57e3e43663dd6dfa9c0c8cfc29decba46ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_86b202888b3ee4670d4edb004cd9ac105f548649b6c5c76c1406b7bac1d77f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b202888b3ee4670d4edb004cd9ac105f548649b6c5c76c1406b7bac1d77f9d->enter($__internal_86b202888b3ee4670d4edb004cd9ac105f548649b6c5c76c1406b7bac1d77f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_f9371bdfe6dc4a23c4f084397bfbb162f4ed5f8e6c37e867ae1f39e6b4658a85 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_ff0a01598b31546bb34cc55f74ba0b7cb89b0b6a68987fb72432becda4f0e743 = "{{") && ('' === $__internal_ff0a01598b31546bb34cc55f74ba0b7cb89b0b6a68987fb72432becda4f0e743 || 0 === strpos($__internal_f9371bdfe6dc4a23c4f084397bfbb162f4ed5f8e6c37e867ae1f39e6b4658a85, $__internal_ff0a01598b31546bb34cc55f74ba0b7cb89b0b6a68987fb72432becda4f0e743)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_86b202888b3ee4670d4edb004cd9ac105f548649b6c5c76c1406b7bac1d77f9d->leave($__internal_86b202888b3ee4670d4edb004cd9ac105f548649b6c5c76c1406b7bac1d77f9d_prof);

        
        $__internal_1a8fc861359608abb0deddc01ac57e3e43663dd6dfa9c0c8cfc29decba46ed08->leave($__internal_1a8fc861359608abb0deddc01ac57e3e43663dd6dfa9c0c8cfc29decba46ed08_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_19aa59c25becca6b648a7769d7344316c32045e82f80db3fa964c06856b2596f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19aa59c25becca6b648a7769d7344316c32045e82f80db3fa964c06856b2596f->enter($__internal_19aa59c25becca6b648a7769d7344316c32045e82f80db3fa964c06856b2596f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_699eeb96fe3b95ee15b65c754e59a6bb001227510d80c472ccb9b1aad99796e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699eeb96fe3b95ee15b65c754e59a6bb001227510d80c472ccb9b1aad99796e8->enter($__internal_699eeb96fe3b95ee15b65c754e59a6bb001227510d80c472ccb9b1aad99796e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_699eeb96fe3b95ee15b65c754e59a6bb001227510d80c472ccb9b1aad99796e8->leave($__internal_699eeb96fe3b95ee15b65c754e59a6bb001227510d80c472ccb9b1aad99796e8_prof);

        
        $__internal_19aa59c25becca6b648a7769d7344316c32045e82f80db3fa964c06856b2596f->leave($__internal_19aa59c25becca6b648a7769d7344316c32045e82f80db3fa964c06856b2596f_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3d4e63f322f72d74d9d82eb9b4ba18f6a7c7658ffda2a578355f2ee9ad2b6484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4e63f322f72d74d9d82eb9b4ba18f6a7c7658ffda2a578355f2ee9ad2b6484->enter($__internal_3d4e63f322f72d74d9d82eb9b4ba18f6a7c7658ffda2a578355f2ee9ad2b6484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_fba9a44d21b063961831888f14d7bec8c847ba48ce75ebb6653540506caa3350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba9a44d21b063961831888f14d7bec8c847ba48ce75ebb6653540506caa3350->enter($__internal_fba9a44d21b063961831888f14d7bec8c847ba48ce75ebb6653540506caa3350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_fba9a44d21b063961831888f14d7bec8c847ba48ce75ebb6653540506caa3350->leave($__internal_fba9a44d21b063961831888f14d7bec8c847ba48ce75ebb6653540506caa3350_prof);

        
        $__internal_3d4e63f322f72d74d9d82eb9b4ba18f6a7c7658ffda2a578355f2ee9ad2b6484->leave($__internal_3d4e63f322f72d74d9d82eb9b4ba18f6a7c7658ffda2a578355f2ee9ad2b6484_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ccb6a1606aeab09034da10ebe7c1f87350ca0b18ebc1c66046b4283995dc3dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb6a1606aeab09034da10ebe7c1f87350ca0b18ebc1c66046b4283995dc3dab->enter($__internal_ccb6a1606aeab09034da10ebe7c1f87350ca0b18ebc1c66046b4283995dc3dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d7a3e4f146addd734d18d03c9066004f16ddb61714debc847b0ba55d46a1e237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a3e4f146addd734d18d03c9066004f16ddb61714debc847b0ba55d46a1e237->enter($__internal_d7a3e4f146addd734d18d03c9066004f16ddb61714debc847b0ba55d46a1e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_d7a3e4f146addd734d18d03c9066004f16ddb61714debc847b0ba55d46a1e237->leave($__internal_d7a3e4f146addd734d18d03c9066004f16ddb61714debc847b0ba55d46a1e237_prof);

        
        $__internal_ccb6a1606aeab09034da10ebe7c1f87350ca0b18ebc1c66046b4283995dc3dab->leave($__internal_ccb6a1606aeab09034da10ebe7c1f87350ca0b18ebc1c66046b4283995dc3dab_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a6f49b1176b9fd5d031463d429fec9b647a69c741e16048eacab8518e9353ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f49b1176b9fd5d031463d429fec9b647a69c741e16048eacab8518e9353ee4->enter($__internal_a6f49b1176b9fd5d031463d429fec9b647a69c741e16048eacab8518e9353ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f03fa79590aeccfa7a46601e573f2bc2c0be75461d915f7bcb9cbc22d5cd5ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03fa79590aeccfa7a46601e573f2bc2c0be75461d915f7bcb9cbc22d5cd5ef3->enter($__internal_f03fa79590aeccfa7a46601e573f2bc2c0be75461d915f7bcb9cbc22d5cd5ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_f03fa79590aeccfa7a46601e573f2bc2c0be75461d915f7bcb9cbc22d5cd5ef3->leave($__internal_f03fa79590aeccfa7a46601e573f2bc2c0be75461d915f7bcb9cbc22d5cd5ef3_prof);

        
        $__internal_a6f49b1176b9fd5d031463d429fec9b647a69c741e16048eacab8518e9353ee4->leave($__internal_a6f49b1176b9fd5d031463d429fec9b647a69c741e16048eacab8518e9353ee4_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e519de6cf302b224d290bfda2035f37f1ce1f19b5f0b5a30d730990cb89775f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e519de6cf302b224d290bfda2035f37f1ce1f19b5f0b5a30d730990cb89775f8->enter($__internal_e519de6cf302b224d290bfda2035f37f1ce1f19b5f0b5a30d730990cb89775f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6a4c49d49a1be1d4a7f74ee98022e650b164b97d3f09c00d2582f1adac682809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4c49d49a1be1d4a7f74ee98022e650b164b97d3f09c00d2582f1adac682809->enter($__internal_6a4c49d49a1be1d4a7f74ee98022e650b164b97d3f09c00d2582f1adac682809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_6a4c49d49a1be1d4a7f74ee98022e650b164b97d3f09c00d2582f1adac682809->leave($__internal_6a4c49d49a1be1d4a7f74ee98022e650b164b97d3f09c00d2582f1adac682809_prof);

        
        $__internal_e519de6cf302b224d290bfda2035f37f1ce1f19b5f0b5a30d730990cb89775f8->leave($__internal_e519de6cf302b224d290bfda2035f37f1ce1f19b5f0b5a30d730990cb89775f8_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fcbf96e9bd939e1d3a9476ef2068c88fd4d1ef67353deb6c3791867ee1435985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbf96e9bd939e1d3a9476ef2068c88fd4d1ef67353deb6c3791867ee1435985->enter($__internal_fcbf96e9bd939e1d3a9476ef2068c88fd4d1ef67353deb6c3791867ee1435985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_26e0ad6f5253dedf68771273a49aac992e6fdd8925900458289590d0d37b437f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e0ad6f5253dedf68771273a49aac992e6fdd8925900458289590d0d37b437f->enter($__internal_26e0ad6f5253dedf68771273a49aac992e6fdd8925900458289590d0d37b437f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_26e0ad6f5253dedf68771273a49aac992e6fdd8925900458289590d0d37b437f->leave($__internal_26e0ad6f5253dedf68771273a49aac992e6fdd8925900458289590d0d37b437f_prof);

        
        $__internal_fcbf96e9bd939e1d3a9476ef2068c88fd4d1ef67353deb6c3791867ee1435985->leave($__internal_fcbf96e9bd939e1d3a9476ef2068c88fd4d1ef67353deb6c3791867ee1435985_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_75f14b9320efcdccd5f9bcec9b5afb2ba42655e425a02691fde38e0a27cf298d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f14b9320efcdccd5f9bcec9b5afb2ba42655e425a02691fde38e0a27cf298d->enter($__internal_75f14b9320efcdccd5f9bcec9b5afb2ba42655e425a02691fde38e0a27cf298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8561532d0ab80c55c3e25e447e30d9b6c83ae651955bc9706c9a21d258c8d76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8561532d0ab80c55c3e25e447e30d9b6c83ae651955bc9706c9a21d258c8d76f->enter($__internal_8561532d0ab80c55c3e25e447e30d9b6c83ae651955bc9706c9a21d258c8d76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_8561532d0ab80c55c3e25e447e30d9b6c83ae651955bc9706c9a21d258c8d76f->leave($__internal_8561532d0ab80c55c3e25e447e30d9b6c83ae651955bc9706c9a21d258c8d76f_prof);

        
        $__internal_75f14b9320efcdccd5f9bcec9b5afb2ba42655e425a02691fde38e0a27cf298d->leave($__internal_75f14b9320efcdccd5f9bcec9b5afb2ba42655e425a02691fde38e0a27cf298d_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_532f833bf9e382e4fbedaf6cc42a6f98c2e9bb68b64222d2bad08ff2478aeff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532f833bf9e382e4fbedaf6cc42a6f98c2e9bb68b64222d2bad08ff2478aeff9->enter($__internal_532f833bf9e382e4fbedaf6cc42a6f98c2e9bb68b64222d2bad08ff2478aeff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_cc08e65a1cc48c07bd9fd96a4f688bcfb97d60a220a37b02dd7e8483afc02aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc08e65a1cc48c07bd9fd96a4f688bcfb97d60a220a37b02dd7e8483afc02aca->enter($__internal_cc08e65a1cc48c07bd9fd96a4f688bcfb97d60a220a37b02dd7e8483afc02aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_cc08e65a1cc48c07bd9fd96a4f688bcfb97d60a220a37b02dd7e8483afc02aca->leave($__internal_cc08e65a1cc48c07bd9fd96a4f688bcfb97d60a220a37b02dd7e8483afc02aca_prof);

        
        $__internal_532f833bf9e382e4fbedaf6cc42a6f98c2e9bb68b64222d2bad08ff2478aeff9->leave($__internal_532f833bf9e382e4fbedaf6cc42a6f98c2e9bb68b64222d2bad08ff2478aeff9_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fff44c8320e80f3ef7e820e500301f32e2659809a504cfb58100d323fd253256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff44c8320e80f3ef7e820e500301f32e2659809a504cfb58100d323fd253256->enter($__internal_fff44c8320e80f3ef7e820e500301f32e2659809a504cfb58100d323fd253256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_35d7e40f79f0a63f78b265f79beeae0be4003494c03fd3bd8d819d234e44a9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d7e40f79f0a63f78b265f79beeae0be4003494c03fd3bd8d819d234e44a9c5->enter($__internal_35d7e40f79f0a63f78b265f79beeae0be4003494c03fd3bd8d819d234e44a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_35d7e40f79f0a63f78b265f79beeae0be4003494c03fd3bd8d819d234e44a9c5->leave($__internal_35d7e40f79f0a63f78b265f79beeae0be4003494c03fd3bd8d819d234e44a9c5_prof);

        
        $__internal_fff44c8320e80f3ef7e820e500301f32e2659809a504cfb58100d323fd253256->leave($__internal_fff44c8320e80f3ef7e820e500301f32e2659809a504cfb58100d323fd253256_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_46fd845a904bdc75269f9840bcba6c55703437bce2d1121151307ac7d53e6ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fd845a904bdc75269f9840bcba6c55703437bce2d1121151307ac7d53e6ffa->enter($__internal_46fd845a904bdc75269f9840bcba6c55703437bce2d1121151307ac7d53e6ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1df078cf458cef40e68e46b41abff474636a25dd3ff1be8aa2dfb66ee319626f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df078cf458cef40e68e46b41abff474636a25dd3ff1be8aa2dfb66ee319626f->enter($__internal_1df078cf458cef40e68e46b41abff474636a25dd3ff1be8aa2dfb66ee319626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1df078cf458cef40e68e46b41abff474636a25dd3ff1be8aa2dfb66ee319626f->leave($__internal_1df078cf458cef40e68e46b41abff474636a25dd3ff1be8aa2dfb66ee319626f_prof);

        
        $__internal_46fd845a904bdc75269f9840bcba6c55703437bce2d1121151307ac7d53e6ffa->leave($__internal_46fd845a904bdc75269f9840bcba6c55703437bce2d1121151307ac7d53e6ffa_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e526c9a280cb84b901acc01b61f70e51ef985c43f605f2c7b1cf3bf99fb5bfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e526c9a280cb84b901acc01b61f70e51ef985c43f605f2c7b1cf3bf99fb5bfa4->enter($__internal_e526c9a280cb84b901acc01b61f70e51ef985c43f605f2c7b1cf3bf99fb5bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a75c78bd031597331103309d1c77a84dae4c6cbce171913391cc251d109e9c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75c78bd031597331103309d1c77a84dae4c6cbce171913391cc251d109e9c6e->enter($__internal_a75c78bd031597331103309d1c77a84dae4c6cbce171913391cc251d109e9c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a75c78bd031597331103309d1c77a84dae4c6cbce171913391cc251d109e9c6e->leave($__internal_a75c78bd031597331103309d1c77a84dae4c6cbce171913391cc251d109e9c6e_prof);

        
        $__internal_e526c9a280cb84b901acc01b61f70e51ef985c43f605f2c7b1cf3bf99fb5bfa4->leave($__internal_e526c9a280cb84b901acc01b61f70e51ef985c43f605f2c7b1cf3bf99fb5bfa4_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7833ff653201c8364b872fff23289dd2d4b958d0c30a40bd3d6cba370e26248d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7833ff653201c8364b872fff23289dd2d4b958d0c30a40bd3d6cba370e26248d->enter($__internal_7833ff653201c8364b872fff23289dd2d4b958d0c30a40bd3d6cba370e26248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ea2cb98b49456fd092cd3afb34f72d25d020984d2017291a58f366e68b5e86b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2cb98b49456fd092cd3afb34f72d25d020984d2017291a58f366e68b5e86b7->enter($__internal_ea2cb98b49456fd092cd3afb34f72d25d020984d2017291a58f366e68b5e86b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ea2cb98b49456fd092cd3afb34f72d25d020984d2017291a58f366e68b5e86b7->leave($__internal_ea2cb98b49456fd092cd3afb34f72d25d020984d2017291a58f366e68b5e86b7_prof);

        
        $__internal_7833ff653201c8364b872fff23289dd2d4b958d0c30a40bd3d6cba370e26248d->leave($__internal_7833ff653201c8364b872fff23289dd2d4b958d0c30a40bd3d6cba370e26248d_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_161765a8e356dc09dfc4952b37f93f5187e78e6e889138da56b825b9bc039bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161765a8e356dc09dfc4952b37f93f5187e78e6e889138da56b825b9bc039bb8->enter($__internal_161765a8e356dc09dfc4952b37f93f5187e78e6e889138da56b825b9bc039bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_967fba289f2cc1b9c2f97f03d1aca3c35afd0f78cd804fff0821d7a670bcba12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967fba289f2cc1b9c2f97f03d1aca3c35afd0f78cd804fff0821d7a670bcba12->enter($__internal_967fba289f2cc1b9c2f97f03d1aca3c35afd0f78cd804fff0821d7a670bcba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_967fba289f2cc1b9c2f97f03d1aca3c35afd0f78cd804fff0821d7a670bcba12->leave($__internal_967fba289f2cc1b9c2f97f03d1aca3c35afd0f78cd804fff0821d7a670bcba12_prof);

        
        $__internal_161765a8e356dc09dfc4952b37f93f5187e78e6e889138da56b825b9bc039bb8->leave($__internal_161765a8e356dc09dfc4952b37f93f5187e78e6e889138da56b825b9bc039bb8_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_93d729a7a50de14eb83d0a27f807806d1d8922801d3b90dabddf1e08d1d8858d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d729a7a50de14eb83d0a27f807806d1d8922801d3b90dabddf1e08d1d8858d->enter($__internal_93d729a7a50de14eb83d0a27f807806d1d8922801d3b90dabddf1e08d1d8858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_555d65adbcc430a3b23f1b6a402ca29f99ed2794faa65ad682477c6b701bfaf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555d65adbcc430a3b23f1b6a402ca29f99ed2794faa65ad682477c6b701bfaf6->enter($__internal_555d65adbcc430a3b23f1b6a402ca29f99ed2794faa65ad682477c6b701bfaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_555d65adbcc430a3b23f1b6a402ca29f99ed2794faa65ad682477c6b701bfaf6->leave($__internal_555d65adbcc430a3b23f1b6a402ca29f99ed2794faa65ad682477c6b701bfaf6_prof);

        
        $__internal_93d729a7a50de14eb83d0a27f807806d1d8922801d3b90dabddf1e08d1d8858d->leave($__internal_93d729a7a50de14eb83d0a27f807806d1d8922801d3b90dabddf1e08d1d8858d_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b614485e51fec22d885ed39d7e3b2222e57128a61c911a156befa9c933e9486e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b614485e51fec22d885ed39d7e3b2222e57128a61c911a156befa9c933e9486e->enter($__internal_b614485e51fec22d885ed39d7e3b2222e57128a61c911a156befa9c933e9486e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bd1d4c0634c02f5ac8950f1bffb02b5d09c26ad0aadcf93a92042f2dd7878cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1d4c0634c02f5ac8950f1bffb02b5d09c26ad0aadcf93a92042f2dd7878cae->enter($__internal_bd1d4c0634c02f5ac8950f1bffb02b5d09c26ad0aadcf93a92042f2dd7878cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_bd1d4c0634c02f5ac8950f1bffb02b5d09c26ad0aadcf93a92042f2dd7878cae->leave($__internal_bd1d4c0634c02f5ac8950f1bffb02b5d09c26ad0aadcf93a92042f2dd7878cae_prof);

        
        $__internal_b614485e51fec22d885ed39d7e3b2222e57128a61c911a156befa9c933e9486e->leave($__internal_b614485e51fec22d885ed39d7e3b2222e57128a61c911a156befa9c933e9486e_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6f84584b2910bb8699d69d7240868ff70f96aa43b71a45b094d5764ef0fc32fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f84584b2910bb8699d69d7240868ff70f96aa43b71a45b094d5764ef0fc32fd->enter($__internal_6f84584b2910bb8699d69d7240868ff70f96aa43b71a45b094d5764ef0fc32fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c80b98e717fd9df0cac3be5b89a645e4340065d95788fedf8154b9e5927cacc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80b98e717fd9df0cac3be5b89a645e4340065d95788fedf8154b9e5927cacc3->enter($__internal_c80b98e717fd9df0cac3be5b89a645e4340065d95788fedf8154b9e5927cacc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_c80b98e717fd9df0cac3be5b89a645e4340065d95788fedf8154b9e5927cacc3->leave($__internal_c80b98e717fd9df0cac3be5b89a645e4340065d95788fedf8154b9e5927cacc3_prof);

        
        $__internal_6f84584b2910bb8699d69d7240868ff70f96aa43b71a45b094d5764ef0fc32fd->leave($__internal_6f84584b2910bb8699d69d7240868ff70f96aa43b71a45b094d5764ef0fc32fd_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e8b4f6edbcfab80d9d7c690e89130adb553a74bf8faefcca4027f5a9edbea357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b4f6edbcfab80d9d7c690e89130adb553a74bf8faefcca4027f5a9edbea357->enter($__internal_e8b4f6edbcfab80d9d7c690e89130adb553a74bf8faefcca4027f5a9edbea357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_474ab16dc55283f4d3c442fab2f6ab1be3cb3fdc8042da93763458e5c4cb3b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474ab16dc55283f4d3c442fab2f6ab1be3cb3fdc8042da93763458e5c4cb3b35->enter($__internal_474ab16dc55283f4d3c442fab2f6ab1be3cb3fdc8042da93763458e5c4cb3b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_474ab16dc55283f4d3c442fab2f6ab1be3cb3fdc8042da93763458e5c4cb3b35->leave($__internal_474ab16dc55283f4d3c442fab2f6ab1be3cb3fdc8042da93763458e5c4cb3b35_prof);

        
        $__internal_e8b4f6edbcfab80d9d7c690e89130adb553a74bf8faefcca4027f5a9edbea357->leave($__internal_e8b4f6edbcfab80d9d7c690e89130adb553a74bf8faefcca4027f5a9edbea357_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2b47584abcd131219d305b48b01b9c00bb28fbb1a74749015e9c5f18762ffef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b47584abcd131219d305b48b01b9c00bb28fbb1a74749015e9c5f18762ffef2->enter($__internal_2b47584abcd131219d305b48b01b9c00bb28fbb1a74749015e9c5f18762ffef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_88e8bd2126386b7cd3734328531373cbc8b29b10d6f3ff55bb06057927811131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e8bd2126386b7cd3734328531373cbc8b29b10d6f3ff55bb06057927811131->enter($__internal_88e8bd2126386b7cd3734328531373cbc8b29b10d6f3ff55bb06057927811131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_88e8bd2126386b7cd3734328531373cbc8b29b10d6f3ff55bb06057927811131->leave($__internal_88e8bd2126386b7cd3734328531373cbc8b29b10d6f3ff55bb06057927811131_prof);

        
        $__internal_2b47584abcd131219d305b48b01b9c00bb28fbb1a74749015e9c5f18762ffef2->leave($__internal_2b47584abcd131219d305b48b01b9c00bb28fbb1a74749015e9c5f18762ffef2_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_52c1310fc5037bae14f497c427e2be051080078de9572d4636e5e1510d9881c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c1310fc5037bae14f497c427e2be051080078de9572d4636e5e1510d9881c2->enter($__internal_52c1310fc5037bae14f497c427e2be051080078de9572d4636e5e1510d9881c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6c93b548403c08cd9a49fcff92d2312a4f22f3129a3e3dfda6e8c40a4146b42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c93b548403c08cd9a49fcff92d2312a4f22f3129a3e3dfda6e8c40a4146b42d->enter($__internal_6c93b548403c08cd9a49fcff92d2312a4f22f3129a3e3dfda6e8c40a4146b42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6c93b548403c08cd9a49fcff92d2312a4f22f3129a3e3dfda6e8c40a4146b42d->leave($__internal_6c93b548403c08cd9a49fcff92d2312a4f22f3129a3e3dfda6e8c40a4146b42d_prof);

        
        $__internal_52c1310fc5037bae14f497c427e2be051080078de9572d4636e5e1510d9881c2->leave($__internal_52c1310fc5037bae14f497c427e2be051080078de9572d4636e5e1510d9881c2_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_dbbc5c000ed7729574901c71e5d4c5c2469af5792cc8eb280df2288c61f1c3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbc5c000ed7729574901c71e5d4c5c2469af5792cc8eb280df2288c61f1c3bd->enter($__internal_dbbc5c000ed7729574901c71e5d4c5c2469af5792cc8eb280df2288c61f1c3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_319a477ac19fec20160f089bc811019cba6a84431de880a8592afa9242cd7d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319a477ac19fec20160f089bc811019cba6a84431de880a8592afa9242cd7d50->enter($__internal_319a477ac19fec20160f089bc811019cba6a84431de880a8592afa9242cd7d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_319a477ac19fec20160f089bc811019cba6a84431de880a8592afa9242cd7d50->leave($__internal_319a477ac19fec20160f089bc811019cba6a84431de880a8592afa9242cd7d50_prof);

        
        $__internal_dbbc5c000ed7729574901c71e5d4c5c2469af5792cc8eb280df2288c61f1c3bd->leave($__internal_dbbc5c000ed7729574901c71e5d4c5c2469af5792cc8eb280df2288c61f1c3bd_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_25ebcfcc350d0b30029a30d9379be094cfb8395d1907c5d4a6a1623cbd94d0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ebcfcc350d0b30029a30d9379be094cfb8395d1907c5d4a6a1623cbd94d0c9->enter($__internal_25ebcfcc350d0b30029a30d9379be094cfb8395d1907c5d4a6a1623cbd94d0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7f85f30327bc9bff7965651be8b2549c4739cfadd15ef787de018b4c0035d82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f85f30327bc9bff7965651be8b2549c4739cfadd15ef787de018b4c0035d82d->enter($__internal_7f85f30327bc9bff7965651be8b2549c4739cfadd15ef787de018b4c0035d82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_7f85f30327bc9bff7965651be8b2549c4739cfadd15ef787de018b4c0035d82d->leave($__internal_7f85f30327bc9bff7965651be8b2549c4739cfadd15ef787de018b4c0035d82d_prof);

        
        $__internal_25ebcfcc350d0b30029a30d9379be094cfb8395d1907c5d4a6a1623cbd94d0c9->leave($__internal_25ebcfcc350d0b30029a30d9379be094cfb8395d1907c5d4a6a1623cbd94d0c9_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f3d212c9fdb13ffe53a03649f9bfab1541a5edcf9a6e783638a6cd320acce7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d212c9fdb13ffe53a03649f9bfab1541a5edcf9a6e783638a6cd320acce7dc->enter($__internal_f3d212c9fdb13ffe53a03649f9bfab1541a5edcf9a6e783638a6cd320acce7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3d1156e59737109df870a4f5aecd8e8144a98311664cd4ddec2f2ccf5f13e54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1156e59737109df870a4f5aecd8e8144a98311664cd4ddec2f2ccf5f13e54d->enter($__internal_3d1156e59737109df870a4f5aecd8e8144a98311664cd4ddec2f2ccf5f13e54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_3d1156e59737109df870a4f5aecd8e8144a98311664cd4ddec2f2ccf5f13e54d->leave($__internal_3d1156e59737109df870a4f5aecd8e8144a98311664cd4ddec2f2ccf5f13e54d_prof);

        
        $__internal_f3d212c9fdb13ffe53a03649f9bfab1541a5edcf9a6e783638a6cd320acce7dc->leave($__internal_f3d212c9fdb13ffe53a03649f9bfab1541a5edcf9a6e783638a6cd320acce7dc_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_dfceadf0a6b909b6ca200ba1a586a9166e06c26687c555a310ede481dd32bd5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfceadf0a6b909b6ca200ba1a586a9166e06c26687c555a310ede481dd32bd5e->enter($__internal_dfceadf0a6b909b6ca200ba1a586a9166e06c26687c555a310ede481dd32bd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_efb505f93a4137840bdced643ec567bac0711915d7de8486f421e0b8df7563b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb505f93a4137840bdced643ec567bac0711915d7de8486f421e0b8df7563b2->enter($__internal_efb505f93a4137840bdced643ec567bac0711915d7de8486f421e0b8df7563b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_efb505f93a4137840bdced643ec567bac0711915d7de8486f421e0b8df7563b2->leave($__internal_efb505f93a4137840bdced643ec567bac0711915d7de8486f421e0b8df7563b2_prof);

        
        $__internal_dfceadf0a6b909b6ca200ba1a586a9166e06c26687c555a310ede481dd32bd5e->leave($__internal_dfceadf0a6b909b6ca200ba1a586a9166e06c26687c555a310ede481dd32bd5e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
