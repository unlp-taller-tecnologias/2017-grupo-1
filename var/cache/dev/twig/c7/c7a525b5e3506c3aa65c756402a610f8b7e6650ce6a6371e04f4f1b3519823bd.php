<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_290fde11590f1bbaf60b82cf01cc8c55c4c7cb735b2d6a309b2f10d8d5415f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_422f732023bb6af67353f53f7a0bbed4faeace33da0754bf8a636d8e37a52c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422f732023bb6af67353f53f7a0bbed4faeace33da0754bf8a636d8e37a52c40->enter($__internal_422f732023bb6af67353f53f7a0bbed4faeace33da0754bf8a636d8e37a52c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_c4d977a9788917fd47dbaf467b88c8fff30ce2a4223f079c6e83b7c5e5736f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d977a9788917fd47dbaf467b88c8fff30ce2a4223f079c6e83b7c5e5736f62->enter($__internal_c4d977a9788917fd47dbaf467b88c8fff30ce2a4223f079c6e83b7c5e5736f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_422f732023bb6af67353f53f7a0bbed4faeace33da0754bf8a636d8e37a52c40->leave($__internal_422f732023bb6af67353f53f7a0bbed4faeace33da0754bf8a636d8e37a52c40_prof);

        
        $__internal_c4d977a9788917fd47dbaf467b88c8fff30ce2a4223f079c6e83b7c5e5736f62->leave($__internal_c4d977a9788917fd47dbaf467b88c8fff30ce2a4223f079c6e83b7c5e5736f62_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b8c9fa60c1b1219eaf1450a9f15f20a53eb667722351544871ccc2ead0b23e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c9fa60c1b1219eaf1450a9f15f20a53eb667722351544871ccc2ead0b23e67->enter($__internal_b8c9fa60c1b1219eaf1450a9f15f20a53eb667722351544871ccc2ead0b23e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_660e4b7b4c04db5eb1d7fb53c32eb2ff1216c36ad9c7bdd3c52f18513ccb8933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660e4b7b4c04db5eb1d7fb53c32eb2ff1216c36ad9c7bdd3c52f18513ccb8933->enter($__internal_660e4b7b4c04db5eb1d7fb53c32eb2ff1216c36ad9c7bdd3c52f18513ccb8933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_660e4b7b4c04db5eb1d7fb53c32eb2ff1216c36ad9c7bdd3c52f18513ccb8933->leave($__internal_660e4b7b4c04db5eb1d7fb53c32eb2ff1216c36ad9c7bdd3c52f18513ccb8933_prof);

        
        $__internal_b8c9fa60c1b1219eaf1450a9f15f20a53eb667722351544871ccc2ead0b23e67->leave($__internal_b8c9fa60c1b1219eaf1450a9f15f20a53eb667722351544871ccc2ead0b23e67_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_23adc3024e49daa7b5697a92bb5c9b3414d4bc9ee9ea1cbd788d84e79becf849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23adc3024e49daa7b5697a92bb5c9b3414d4bc9ee9ea1cbd788d84e79becf849->enter($__internal_23adc3024e49daa7b5697a92bb5c9b3414d4bc9ee9ea1cbd788d84e79becf849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_bd92fbf919c99a14d52c9ac0ab15a3131f1ce97707ffb6d61dda65b4d0402476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd92fbf919c99a14d52c9ac0ab15a3131f1ce97707ffb6d61dda65b4d0402476->enter($__internal_bd92fbf919c99a14d52c9ac0ab15a3131f1ce97707ffb6d61dda65b4d0402476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_bd92fbf919c99a14d52c9ac0ab15a3131f1ce97707ffb6d61dda65b4d0402476->leave($__internal_bd92fbf919c99a14d52c9ac0ab15a3131f1ce97707ffb6d61dda65b4d0402476_prof);

        
        $__internal_23adc3024e49daa7b5697a92bb5c9b3414d4bc9ee9ea1cbd788d84e79becf849->leave($__internal_23adc3024e49daa7b5697a92bb5c9b3414d4bc9ee9ea1cbd788d84e79becf849_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_961c8fc091f12c91439b8f475069df1d0f5a7c20f3b6a69779df7f233413a170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961c8fc091f12c91439b8f475069df1d0f5a7c20f3b6a69779df7f233413a170->enter($__internal_961c8fc091f12c91439b8f475069df1d0f5a7c20f3b6a69779df7f233413a170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_17e3ac026b5dc37473d0077fd971123acc9d2b444987aff19468bfae06820ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e3ac026b5dc37473d0077fd971123acc9d2b444987aff19468bfae06820ebe->enter($__internal_17e3ac026b5dc37473d0077fd971123acc9d2b444987aff19468bfae06820ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_17e3ac026b5dc37473d0077fd971123acc9d2b444987aff19468bfae06820ebe->leave($__internal_17e3ac026b5dc37473d0077fd971123acc9d2b444987aff19468bfae06820ebe_prof);

        
        $__internal_961c8fc091f12c91439b8f475069df1d0f5a7c20f3b6a69779df7f233413a170->leave($__internal_961c8fc091f12c91439b8f475069df1d0f5a7c20f3b6a69779df7f233413a170_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_cda67b90f2f246e46a134302c2c719da95895a825d8ce7dee175daf5647377e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda67b90f2f246e46a134302c2c719da95895a825d8ce7dee175daf5647377e0->enter($__internal_cda67b90f2f246e46a134302c2c719da95895a825d8ce7dee175daf5647377e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e775f842c599b702068728d5bcf95be9d050bf3037ad24db033cffdb34d6d8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e775f842c599b702068728d5bcf95be9d050bf3037ad24db033cffdb34d6d8b5->enter($__internal_e775f842c599b702068728d5bcf95be9d050bf3037ad24db033cffdb34d6d8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_e775f842c599b702068728d5bcf95be9d050bf3037ad24db033cffdb34d6d8b5->leave($__internal_e775f842c599b702068728d5bcf95be9d050bf3037ad24db033cffdb34d6d8b5_prof);

        
        $__internal_cda67b90f2f246e46a134302c2c719da95895a825d8ce7dee175daf5647377e0->leave($__internal_cda67b90f2f246e46a134302c2c719da95895a825d8ce7dee175daf5647377e0_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_47fdfab3a6cfea6d50bf64d4dede9767a0e5fb86753717974635c2ead90710a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fdfab3a6cfea6d50bf64d4dede9767a0e5fb86753717974635c2ead90710a4->enter($__internal_47fdfab3a6cfea6d50bf64d4dede9767a0e5fb86753717974635c2ead90710a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8dbc1130618bc21f1e6f61013a5ee4089c071013490f9b549db7ee73b95e046f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbc1130618bc21f1e6f61013a5ee4089c071013490f9b549db7ee73b95e046f->enter($__internal_8dbc1130618bc21f1e6f61013a5ee4089c071013490f9b549db7ee73b95e046f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_8dbc1130618bc21f1e6f61013a5ee4089c071013490f9b549db7ee73b95e046f->leave($__internal_8dbc1130618bc21f1e6f61013a5ee4089c071013490f9b549db7ee73b95e046f_prof);

        
        $__internal_47fdfab3a6cfea6d50bf64d4dede9767a0e5fb86753717974635c2ead90710a4->leave($__internal_47fdfab3a6cfea6d50bf64d4dede9767a0e5fb86753717974635c2ead90710a4_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e0a33dd37a143e8eb7ac6ed2b897175f1240477bab94e36feb3e641ba33d401f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a33dd37a143e8eb7ac6ed2b897175f1240477bab94e36feb3e641ba33d401f->enter($__internal_e0a33dd37a143e8eb7ac6ed2b897175f1240477bab94e36feb3e641ba33d401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_701c87e3d70ec79af7a8e47d65082f3fbf1764753c2cb72d750804bc1aeedaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701c87e3d70ec79af7a8e47d65082f3fbf1764753c2cb72d750804bc1aeedaee->enter($__internal_701c87e3d70ec79af7a8e47d65082f3fbf1764753c2cb72d750804bc1aeedaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_701c87e3d70ec79af7a8e47d65082f3fbf1764753c2cb72d750804bc1aeedaee->leave($__internal_701c87e3d70ec79af7a8e47d65082f3fbf1764753c2cb72d750804bc1aeedaee_prof);

        
        $__internal_e0a33dd37a143e8eb7ac6ed2b897175f1240477bab94e36feb3e641ba33d401f->leave($__internal_e0a33dd37a143e8eb7ac6ed2b897175f1240477bab94e36feb3e641ba33d401f_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5298af5585def4b248896c3aa1c2dbbccc957a8191b984d1d133d20585b17ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5298af5585def4b248896c3aa1c2dbbccc957a8191b984d1d133d20585b17ad9->enter($__internal_5298af5585def4b248896c3aa1c2dbbccc957a8191b984d1d133d20585b17ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e8a00b266478dbc5745035eed9d8c427ae6886b27f4a24b7978ebb5c87a196ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a00b266478dbc5745035eed9d8c427ae6886b27f4a24b7978ebb5c87a196ce->enter($__internal_e8a00b266478dbc5745035eed9d8c427ae6886b27f4a24b7978ebb5c87a196ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_e8a00b266478dbc5745035eed9d8c427ae6886b27f4a24b7978ebb5c87a196ce->leave($__internal_e8a00b266478dbc5745035eed9d8c427ae6886b27f4a24b7978ebb5c87a196ce_prof);

        
        $__internal_5298af5585def4b248896c3aa1c2dbbccc957a8191b984d1d133d20585b17ad9->leave($__internal_5298af5585def4b248896c3aa1c2dbbccc957a8191b984d1d133d20585b17ad9_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3d6c11baf75b30dca7e436264f7d835c3f9ff45e1db179388ca700f3cb18c491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6c11baf75b30dca7e436264f7d835c3f9ff45e1db179388ca700f3cb18c491->enter($__internal_3d6c11baf75b30dca7e436264f7d835c3f9ff45e1db179388ca700f3cb18c491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ef805bf35cd6fb8a219779c9ea1884a7112673fe466c36164ff77fe769444247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef805bf35cd6fb8a219779c9ea1884a7112673fe466c36164ff77fe769444247->enter($__internal_ef805bf35cd6fb8a219779c9ea1884a7112673fe466c36164ff77fe769444247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_ef805bf35cd6fb8a219779c9ea1884a7112673fe466c36164ff77fe769444247->leave($__internal_ef805bf35cd6fb8a219779c9ea1884a7112673fe466c36164ff77fe769444247_prof);

        
        $__internal_3d6c11baf75b30dca7e436264f7d835c3f9ff45e1db179388ca700f3cb18c491->leave($__internal_3d6c11baf75b30dca7e436264f7d835c3f9ff45e1db179388ca700f3cb18c491_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_58ecec0c33a9e2f2e350528c2ddf44e1324a9146219e5ee8fc377341813d8cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ecec0c33a9e2f2e350528c2ddf44e1324a9146219e5ee8fc377341813d8cb0->enter($__internal_58ecec0c33a9e2f2e350528c2ddf44e1324a9146219e5ee8fc377341813d8cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1e27b84b348ceb731927d52e5d2c869348e42acc02124c8d9289dff3f94f3883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e27b84b348ceb731927d52e5d2c869348e42acc02124c8d9289dff3f94f3883->enter($__internal_1e27b84b348ceb731927d52e5d2c869348e42acc02124c8d9289dff3f94f3883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_1e27b84b348ceb731927d52e5d2c869348e42acc02124c8d9289dff3f94f3883->leave($__internal_1e27b84b348ceb731927d52e5d2c869348e42acc02124c8d9289dff3f94f3883_prof);

        
        $__internal_58ecec0c33a9e2f2e350528c2ddf44e1324a9146219e5ee8fc377341813d8cb0->leave($__internal_58ecec0c33a9e2f2e350528c2ddf44e1324a9146219e5ee8fc377341813d8cb0_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_490d176a4b2fc2cf6ba56b35e796b273dd87e3416e0c92433e60070b6255e011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490d176a4b2fc2cf6ba56b35e796b273dd87e3416e0c92433e60070b6255e011->enter($__internal_490d176a4b2fc2cf6ba56b35e796b273dd87e3416e0c92433e60070b6255e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_4225a46625aa001d3d70bfe82fb54ef691314899791d1f1935e7ec7b1c2f49c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4225a46625aa001d3d70bfe82fb54ef691314899791d1f1935e7ec7b1c2f49c2->enter($__internal_4225a46625aa001d3d70bfe82fb54ef691314899791d1f1935e7ec7b1c2f49c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_4225a46625aa001d3d70bfe82fb54ef691314899791d1f1935e7ec7b1c2f49c2->leave($__internal_4225a46625aa001d3d70bfe82fb54ef691314899791d1f1935e7ec7b1c2f49c2_prof);

        
        $__internal_490d176a4b2fc2cf6ba56b35e796b273dd87e3416e0c92433e60070b6255e011->leave($__internal_490d176a4b2fc2cf6ba56b35e796b273dd87e3416e0c92433e60070b6255e011_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_22d1eda370b076107f0aa266f03733f99a927995ea6773312df046bd62b83e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d1eda370b076107f0aa266f03733f99a927995ea6773312df046bd62b83e7a->enter($__internal_22d1eda370b076107f0aa266f03733f99a927995ea6773312df046bd62b83e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_20ccaddb84bc77a785befecf3159799b63e4f69381dc319f1ef3e2d9ba18ae0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ccaddb84bc77a785befecf3159799b63e4f69381dc319f1ef3e2d9ba18ae0e->enter($__internal_20ccaddb84bc77a785befecf3159799b63e4f69381dc319f1ef3e2d9ba18ae0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_20ccaddb84bc77a785befecf3159799b63e4f69381dc319f1ef3e2d9ba18ae0e->leave($__internal_20ccaddb84bc77a785befecf3159799b63e4f69381dc319f1ef3e2d9ba18ae0e_prof);

        
        $__internal_22d1eda370b076107f0aa266f03733f99a927995ea6773312df046bd62b83e7a->leave($__internal_22d1eda370b076107f0aa266f03733f99a927995ea6773312df046bd62b83e7a_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_df48677cd71fd0fb6a1287b30038500d66e64d856822ad9923195c03a22a532b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df48677cd71fd0fb6a1287b30038500d66e64d856822ad9923195c03a22a532b->enter($__internal_df48677cd71fd0fb6a1287b30038500d66e64d856822ad9923195c03a22a532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b55139d16fd59f8cd2683115a9c2dead1ee99ecea8b4439c7e929d0b0792a395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55139d16fd59f8cd2683115a9c2dead1ee99ecea8b4439c7e929d0b0792a395->enter($__internal_b55139d16fd59f8cd2683115a9c2dead1ee99ecea8b4439c7e929d0b0792a395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_b55139d16fd59f8cd2683115a9c2dead1ee99ecea8b4439c7e929d0b0792a395->leave($__internal_b55139d16fd59f8cd2683115a9c2dead1ee99ecea8b4439c7e929d0b0792a395_prof);

        
        $__internal_df48677cd71fd0fb6a1287b30038500d66e64d856822ad9923195c03a22a532b->leave($__internal_df48677cd71fd0fb6a1287b30038500d66e64d856822ad9923195c03a22a532b_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_de6ba0f4c789474fd971af980906bcd3cff97cc1a7dc5a2989a683254e18e148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6ba0f4c789474fd971af980906bcd3cff97cc1a7dc5a2989a683254e18e148->enter($__internal_de6ba0f4c789474fd971af980906bcd3cff97cc1a7dc5a2989a683254e18e148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b1e80549309ca4fac1856c9c9e5c6fcf2a0bd35bda8ed5f45394fe97b26a2dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e80549309ca4fac1856c9c9e5c6fcf2a0bd35bda8ed5f45394fe97b26a2dc5->enter($__internal_b1e80549309ca4fac1856c9c9e5c6fcf2a0bd35bda8ed5f45394fe97b26a2dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b1e80549309ca4fac1856c9c9e5c6fcf2a0bd35bda8ed5f45394fe97b26a2dc5->leave($__internal_b1e80549309ca4fac1856c9c9e5c6fcf2a0bd35bda8ed5f45394fe97b26a2dc5_prof);

        
        $__internal_de6ba0f4c789474fd971af980906bcd3cff97cc1a7dc5a2989a683254e18e148->leave($__internal_de6ba0f4c789474fd971af980906bcd3cff97cc1a7dc5a2989a683254e18e148_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_aa49484e7fb8a69b2f87c2ea35fb29eeec098d5ee755b5aa109044d01a6a7fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa49484e7fb8a69b2f87c2ea35fb29eeec098d5ee755b5aa109044d01a6a7fd9->enter($__internal_aa49484e7fb8a69b2f87c2ea35fb29eeec098d5ee755b5aa109044d01a6a7fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_487068dbe88b44b7072065460d69a4f4bee23f6d7d21d4200a1ed56efe6384e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487068dbe88b44b7072065460d69a4f4bee23f6d7d21d4200a1ed56efe6384e2->enter($__internal_487068dbe88b44b7072065460d69a4f4bee23f6d7d21d4200a1ed56efe6384e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_487068dbe88b44b7072065460d69a4f4bee23f6d7d21d4200a1ed56efe6384e2->leave($__internal_487068dbe88b44b7072065460d69a4f4bee23f6d7d21d4200a1ed56efe6384e2_prof);

        
        $__internal_aa49484e7fb8a69b2f87c2ea35fb29eeec098d5ee755b5aa109044d01a6a7fd9->leave($__internal_aa49484e7fb8a69b2f87c2ea35fb29eeec098d5ee755b5aa109044d01a6a7fd9_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c800cf855eb72a99040f61003d354e21adf33c3f324341fce96c1042617928a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c800cf855eb72a99040f61003d354e21adf33c3f324341fce96c1042617928a4->enter($__internal_c800cf855eb72a99040f61003d354e21adf33c3f324341fce96c1042617928a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5e5ac09d735790e92eaedfd0b0287a2c6fdf6f7737d1bf5971b15b3b50cb413e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5ac09d735790e92eaedfd0b0287a2c6fdf6f7737d1bf5971b15b3b50cb413e->enter($__internal_5e5ac09d735790e92eaedfd0b0287a2c6fdf6f7737d1bf5971b15b3b50cb413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5e5ac09d735790e92eaedfd0b0287a2c6fdf6f7737d1bf5971b15b3b50cb413e->leave($__internal_5e5ac09d735790e92eaedfd0b0287a2c6fdf6f7737d1bf5971b15b3b50cb413e_prof);

        
        $__internal_c800cf855eb72a99040f61003d354e21adf33c3f324341fce96c1042617928a4->leave($__internal_c800cf855eb72a99040f61003d354e21adf33c3f324341fce96c1042617928a4_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1e99a2b2ceac56262385b56e4d0033e109949a889d427fee7dd80e96b2de48ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e99a2b2ceac56262385b56e4d0033e109949a889d427fee7dd80e96b2de48ab->enter($__internal_1e99a2b2ceac56262385b56e4d0033e109949a889d427fee7dd80e96b2de48ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f0cf402245244fbb191f9b3e8c5ee62cf168e9f74bf1b13ea9ac9344f86d6a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cf402245244fbb191f9b3e8c5ee62cf168e9f74bf1b13ea9ac9344f86d6a18->enter($__internal_f0cf402245244fbb191f9b3e8c5ee62cf168e9f74bf1b13ea9ac9344f86d6a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f0cf402245244fbb191f9b3e8c5ee62cf168e9f74bf1b13ea9ac9344f86d6a18->leave($__internal_f0cf402245244fbb191f9b3e8c5ee62cf168e9f74bf1b13ea9ac9344f86d6a18_prof);

        
        $__internal_1e99a2b2ceac56262385b56e4d0033e109949a889d427fee7dd80e96b2de48ab->leave($__internal_1e99a2b2ceac56262385b56e4d0033e109949a889d427fee7dd80e96b2de48ab_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c4eadc6e047e4cc59ad0e14068f7f44c7acfc65a6a7127b73c1494593a71f4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4eadc6e047e4cc59ad0e14068f7f44c7acfc65a6a7127b73c1494593a71f4df->enter($__internal_c4eadc6e047e4cc59ad0e14068f7f44c7acfc65a6a7127b73c1494593a71f4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_064beb9b3e65811d754c4f2f647b78c2d1af72b87d130bf1784eee07df4f4010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064beb9b3e65811d754c4f2f647b78c2d1af72b87d130bf1784eee07df4f4010->enter($__internal_064beb9b3e65811d754c4f2f647b78c2d1af72b87d130bf1784eee07df4f4010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_064beb9b3e65811d754c4f2f647b78c2d1af72b87d130bf1784eee07df4f4010->leave($__internal_064beb9b3e65811d754c4f2f647b78c2d1af72b87d130bf1784eee07df4f4010_prof);

        
        $__internal_c4eadc6e047e4cc59ad0e14068f7f44c7acfc65a6a7127b73c1494593a71f4df->leave($__internal_c4eadc6e047e4cc59ad0e14068f7f44c7acfc65a6a7127b73c1494593a71f4df_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_897ad71a851fdf600c8f9387fd266624eb638bf49061bfa6fb7eb51805de2c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897ad71a851fdf600c8f9387fd266624eb638bf49061bfa6fb7eb51805de2c59->enter($__internal_897ad71a851fdf600c8f9387fd266624eb638bf49061bfa6fb7eb51805de2c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_46d5a22b561929173a2205dfcec780cd810d3715f412735d19251cdd2eec5733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d5a22b561929173a2205dfcec780cd810d3715f412735d19251cdd2eec5733->enter($__internal_46d5a22b561929173a2205dfcec780cd810d3715f412735d19251cdd2eec5733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_46d5a22b561929173a2205dfcec780cd810d3715f412735d19251cdd2eec5733->leave($__internal_46d5a22b561929173a2205dfcec780cd810d3715f412735d19251cdd2eec5733_prof);

        
        $__internal_897ad71a851fdf600c8f9387fd266624eb638bf49061bfa6fb7eb51805de2c59->leave($__internal_897ad71a851fdf600c8f9387fd266624eb638bf49061bfa6fb7eb51805de2c59_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7caeb06c8dee7495f4925629ad96ae7e023d6006e7ed80e95f84726d04d68299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7caeb06c8dee7495f4925629ad96ae7e023d6006e7ed80e95f84726d04d68299->enter($__internal_7caeb06c8dee7495f4925629ad96ae7e023d6006e7ed80e95f84726d04d68299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_773c39f910d128f5f6267faa74adb80fdf3713a5d80b16611c79f2512bb06f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773c39f910d128f5f6267faa74adb80fdf3713a5d80b16611c79f2512bb06f4f->enter($__internal_773c39f910d128f5f6267faa74adb80fdf3713a5d80b16611c79f2512bb06f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_773c39f910d128f5f6267faa74adb80fdf3713a5d80b16611c79f2512bb06f4f->leave($__internal_773c39f910d128f5f6267faa74adb80fdf3713a5d80b16611c79f2512bb06f4f_prof);

        
        $__internal_7caeb06c8dee7495f4925629ad96ae7e023d6006e7ed80e95f84726d04d68299->leave($__internal_7caeb06c8dee7495f4925629ad96ae7e023d6006e7ed80e95f84726d04d68299_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6e60f56c58ed42e67fb553029f813e464a39bc0b36e704e27a423dd500d41e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e60f56c58ed42e67fb553029f813e464a39bc0b36e704e27a423dd500d41e0c->enter($__internal_6e60f56c58ed42e67fb553029f813e464a39bc0b36e704e27a423dd500d41e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6de5d093624611f93d30d2570dd07c8d791459dd661d1e4f888545e5c59d9869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de5d093624611f93d30d2570dd07c8d791459dd661d1e4f888545e5c59d9869->enter($__internal_6de5d093624611f93d30d2570dd07c8d791459dd661d1e4f888545e5c59d9869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6de5d093624611f93d30d2570dd07c8d791459dd661d1e4f888545e5c59d9869->leave($__internal_6de5d093624611f93d30d2570dd07c8d791459dd661d1e4f888545e5c59d9869_prof);

        
        $__internal_6e60f56c58ed42e67fb553029f813e464a39bc0b36e704e27a423dd500d41e0c->leave($__internal_6e60f56c58ed42e67fb553029f813e464a39bc0b36e704e27a423dd500d41e0c_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0b8a04856fcd07605eb90bbbcd95a012597e87fbff9e98579262c7fed6dbec33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8a04856fcd07605eb90bbbcd95a012597e87fbff9e98579262c7fed6dbec33->enter($__internal_0b8a04856fcd07605eb90bbbcd95a012597e87fbff9e98579262c7fed6dbec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1cbb4e1e6016d2226933578ecc3660838ef370debcafdf5455c8ec35dd4423c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbb4e1e6016d2226933578ecc3660838ef370debcafdf5455c8ec35dd4423c6->enter($__internal_1cbb4e1e6016d2226933578ecc3660838ef370debcafdf5455c8ec35dd4423c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1cbb4e1e6016d2226933578ecc3660838ef370debcafdf5455c8ec35dd4423c6->leave($__internal_1cbb4e1e6016d2226933578ecc3660838ef370debcafdf5455c8ec35dd4423c6_prof);

        
        $__internal_0b8a04856fcd07605eb90bbbcd95a012597e87fbff9e98579262c7fed6dbec33->leave($__internal_0b8a04856fcd07605eb90bbbcd95a012597e87fbff9e98579262c7fed6dbec33_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_42c5b8ff2c0e518a31648621a15ee3a13e899ff9bbd80661e1d59531959cebd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c5b8ff2c0e518a31648621a15ee3a13e899ff9bbd80661e1d59531959cebd1->enter($__internal_42c5b8ff2c0e518a31648621a15ee3a13e899ff9bbd80661e1d59531959cebd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c5993b2ffc93333d15b3c121b9fbb41b9697f98bbe0edcf139edaac5fd070006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5993b2ffc93333d15b3c121b9fbb41b9697f98bbe0edcf139edaac5fd070006->enter($__internal_c5993b2ffc93333d15b3c121b9fbb41b9697f98bbe0edcf139edaac5fd070006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c5993b2ffc93333d15b3c121b9fbb41b9697f98bbe0edcf139edaac5fd070006->leave($__internal_c5993b2ffc93333d15b3c121b9fbb41b9697f98bbe0edcf139edaac5fd070006_prof);

        
        $__internal_42c5b8ff2c0e518a31648621a15ee3a13e899ff9bbd80661e1d59531959cebd1->leave($__internal_42c5b8ff2c0e518a31648621a15ee3a13e899ff9bbd80661e1d59531959cebd1_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_41af12c4d7fca37fc3bc99820ce2d1fe151e00bc5421beeba2f75b2997daca48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41af12c4d7fca37fc3bc99820ce2d1fe151e00bc5421beeba2f75b2997daca48->enter($__internal_41af12c4d7fca37fc3bc99820ce2d1fe151e00bc5421beeba2f75b2997daca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_461e462800fce398c99499267803c2d3b7d82c585d650b2728ec78a3ce03c4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461e462800fce398c99499267803c2d3b7d82c585d650b2728ec78a3ce03c4aa->enter($__internal_461e462800fce398c99499267803c2d3b7d82c585d650b2728ec78a3ce03c4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_461e462800fce398c99499267803c2d3b7d82c585d650b2728ec78a3ce03c4aa->leave($__internal_461e462800fce398c99499267803c2d3b7d82c585d650b2728ec78a3ce03c4aa_prof);

        
        $__internal_41af12c4d7fca37fc3bc99820ce2d1fe151e00bc5421beeba2f75b2997daca48->leave($__internal_41af12c4d7fca37fc3bc99820ce2d1fe151e00bc5421beeba2f75b2997daca48_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e83c5ee5a0917022315c31116f77ef0687c89e6798d14c927ac066c537402a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83c5ee5a0917022315c31116f77ef0687c89e6798d14c927ac066c537402a18->enter($__internal_e83c5ee5a0917022315c31116f77ef0687c89e6798d14c927ac066c537402a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ff8b12841b6d25c689682d2e21673125070b7dbc95214a5f05fa13c44e89b0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8b12841b6d25c689682d2e21673125070b7dbc95214a5f05fa13c44e89b0ae->enter($__internal_ff8b12841b6d25c689682d2e21673125070b7dbc95214a5f05fa13c44e89b0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ff8b12841b6d25c689682d2e21673125070b7dbc95214a5f05fa13c44e89b0ae->leave($__internal_ff8b12841b6d25c689682d2e21673125070b7dbc95214a5f05fa13c44e89b0ae_prof);

        
        $__internal_e83c5ee5a0917022315c31116f77ef0687c89e6798d14c927ac066c537402a18->leave($__internal_e83c5ee5a0917022315c31116f77ef0687c89e6798d14c927ac066c537402a18_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_344dc0990435492d18e33c13f513b4ec5cf33769e88b4c4b2cab81aa610bdadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344dc0990435492d18e33c13f513b4ec5cf33769e88b4c4b2cab81aa610bdadb->enter($__internal_344dc0990435492d18e33c13f513b4ec5cf33769e88b4c4b2cab81aa610bdadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8395977f11c43d37993cb165b5fcc37830004e028b5eb20b7702a05b23e33eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8395977f11c43d37993cb165b5fcc37830004e028b5eb20b7702a05b23e33eac->enter($__internal_8395977f11c43d37993cb165b5fcc37830004e028b5eb20b7702a05b23e33eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_8395977f11c43d37993cb165b5fcc37830004e028b5eb20b7702a05b23e33eac->leave($__internal_8395977f11c43d37993cb165b5fcc37830004e028b5eb20b7702a05b23e33eac_prof);

        
        $__internal_344dc0990435492d18e33c13f513b4ec5cf33769e88b4c4b2cab81aa610bdadb->leave($__internal_344dc0990435492d18e33c13f513b4ec5cf33769e88b4c4b2cab81aa610bdadb_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/var/www/html/scv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
