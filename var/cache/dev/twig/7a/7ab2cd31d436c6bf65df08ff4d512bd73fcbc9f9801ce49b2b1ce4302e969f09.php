<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29d5a6a79202db9a418c8f31de941c6dacd211fcdb12ef658fa16b54db6500c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d5a6a79202db9a418c8f31de941c6dacd211fcdb12ef658fa16b54db6500c0->enter($__internal_29d5a6a79202db9a418c8f31de941c6dacd211fcdb12ef658fa16b54db6500c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_29fd92ab54fb7904de13317043ef3055c0a02f1d2fe78a4c7ff6680d636abc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fd92ab54fb7904de13317043ef3055c0a02f1d2fe78a4c7ff6680d636abc36->enter($__internal_29fd92ab54fb7904de13317043ef3055c0a02f1d2fe78a4c7ff6680d636abc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d5a6a79202db9a418c8f31de941c6dacd211fcdb12ef658fa16b54db6500c0->leave($__internal_29d5a6a79202db9a418c8f31de941c6dacd211fcdb12ef658fa16b54db6500c0_prof);

        
        $__internal_29fd92ab54fb7904de13317043ef3055c0a02f1d2fe78a4c7ff6680d636abc36->leave($__internal_29fd92ab54fb7904de13317043ef3055c0a02f1d2fe78a4c7ff6680d636abc36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_667a785a5eba69cbcfc59b0b1b4040842568ba6570855a697dad9cbbe15e4502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667a785a5eba69cbcfc59b0b1b4040842568ba6570855a697dad9cbbe15e4502->enter($__internal_667a785a5eba69cbcfc59b0b1b4040842568ba6570855a697dad9cbbe15e4502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b198882ad0aad25ab111fdac09297431398a8d09262a71bed76082378c8ac02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b198882ad0aad25ab111fdac09297431398a8d09262a71bed76082378c8ac02b->enter($__internal_b198882ad0aad25ab111fdac09297431398a8d09262a71bed76082378c8ac02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b198882ad0aad25ab111fdac09297431398a8d09262a71bed76082378c8ac02b->leave($__internal_b198882ad0aad25ab111fdac09297431398a8d09262a71bed76082378c8ac02b_prof);

        
        $__internal_667a785a5eba69cbcfc59b0b1b4040842568ba6570855a697dad9cbbe15e4502->leave($__internal_667a785a5eba69cbcfc59b0b1b4040842568ba6570855a697dad9cbbe15e4502_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf1b767e4b564cfad87ae593edde633661de52b4bf5c3aa04d964436dd2a5f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1b767e4b564cfad87ae593edde633661de52b4bf5c3aa04d964436dd2a5f5f->enter($__internal_bf1b767e4b564cfad87ae593edde633661de52b4bf5c3aa04d964436dd2a5f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7abc9ac808bdd461040a42a7cc75869aeb69fdc6491ec57d34af51af73145398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abc9ac808bdd461040a42a7cc75869aeb69fdc6491ec57d34af51af73145398->enter($__internal_7abc9ac808bdd461040a42a7cc75869aeb69fdc6491ec57d34af51af73145398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7abc9ac808bdd461040a42a7cc75869aeb69fdc6491ec57d34af51af73145398->leave($__internal_7abc9ac808bdd461040a42a7cc75869aeb69fdc6491ec57d34af51af73145398_prof);

        
        $__internal_bf1b767e4b564cfad87ae593edde633661de52b4bf5c3aa04d964436dd2a5f5f->leave($__internal_bf1b767e4b564cfad87ae593edde633661de52b4bf5c3aa04d964436dd2a5f5f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22c5ad28cf7726aea243205731b13eae3669e71f5406ecbc1526476bac916fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c5ad28cf7726aea243205731b13eae3669e71f5406ecbc1526476bac916fe2->enter($__internal_22c5ad28cf7726aea243205731b13eae3669e71f5406ecbc1526476bac916fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6a50f0385f94d5c62e98588ab59481d764dc884a8604b2f614949df33f2ea12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a50f0385f94d5c62e98588ab59481d764dc884a8604b2f614949df33f2ea12->enter($__internal_a6a50f0385f94d5c62e98588ab59481d764dc884a8604b2f614949df33f2ea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a6a50f0385f94d5c62e98588ab59481d764dc884a8604b2f614949df33f2ea12->leave($__internal_a6a50f0385f94d5c62e98588ab59481d764dc884a8604b2f614949df33f2ea12_prof);

        
        $__internal_22c5ad28cf7726aea243205731b13eae3669e71f5406ecbc1526476bac916fe2->leave($__internal_22c5ad28cf7726aea243205731b13eae3669e71f5406ecbc1526476bac916fe2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ysearch\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
