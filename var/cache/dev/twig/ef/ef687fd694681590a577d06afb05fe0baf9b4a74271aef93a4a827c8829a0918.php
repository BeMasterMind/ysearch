<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_170b9288ceb9e76dec8c7d0a45b47ba25047d93b5542a7ba6e3780a0c0fc564e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170b9288ceb9e76dec8c7d0a45b47ba25047d93b5542a7ba6e3780a0c0fc564e->enter($__internal_170b9288ceb9e76dec8c7d0a45b47ba25047d93b5542a7ba6e3780a0c0fc564e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d881d04b1e053d55864259bdf47cea2be7f076e632e825f8730cf6713647973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d881d04b1e053d55864259bdf47cea2be7f076e632e825f8730cf6713647973d->enter($__internal_d881d04b1e053d55864259bdf47cea2be7f076e632e825f8730cf6713647973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170b9288ceb9e76dec8c7d0a45b47ba25047d93b5542a7ba6e3780a0c0fc564e->leave($__internal_170b9288ceb9e76dec8c7d0a45b47ba25047d93b5542a7ba6e3780a0c0fc564e_prof);

        
        $__internal_d881d04b1e053d55864259bdf47cea2be7f076e632e825f8730cf6713647973d->leave($__internal_d881d04b1e053d55864259bdf47cea2be7f076e632e825f8730cf6713647973d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_359652a8e615dd66ef7a0620c60fb96eb3c9875b57cc942c306584667a1c088d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359652a8e615dd66ef7a0620c60fb96eb3c9875b57cc942c306584667a1c088d->enter($__internal_359652a8e615dd66ef7a0620c60fb96eb3c9875b57cc942c306584667a1c088d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a73347773a27931fa6a37471586dbcf4b1cbd58e12ec3d109d46c4188c5a4ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73347773a27931fa6a37471586dbcf4b1cbd58e12ec3d109d46c4188c5a4ae5->enter($__internal_a73347773a27931fa6a37471586dbcf4b1cbd58e12ec3d109d46c4188c5a4ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a73347773a27931fa6a37471586dbcf4b1cbd58e12ec3d109d46c4188c5a4ae5->leave($__internal_a73347773a27931fa6a37471586dbcf4b1cbd58e12ec3d109d46c4188c5a4ae5_prof);

        
        $__internal_359652a8e615dd66ef7a0620c60fb96eb3c9875b57cc942c306584667a1c088d->leave($__internal_359652a8e615dd66ef7a0620c60fb96eb3c9875b57cc942c306584667a1c088d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abaf3e26cfb9b9af620f944dd5fe1e7a85d0ad4505ff6d152ec0a8dbf9a4ed16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abaf3e26cfb9b9af620f944dd5fe1e7a85d0ad4505ff6d152ec0a8dbf9a4ed16->enter($__internal_abaf3e26cfb9b9af620f944dd5fe1e7a85d0ad4505ff6d152ec0a8dbf9a4ed16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4071f4be5796665a1fa6289441220a04e9db10fa6b26d65b5fe476d8499ed9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4071f4be5796665a1fa6289441220a04e9db10fa6b26d65b5fe476d8499ed9f3->enter($__internal_4071f4be5796665a1fa6289441220a04e9db10fa6b26d65b5fe476d8499ed9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4071f4be5796665a1fa6289441220a04e9db10fa6b26d65b5fe476d8499ed9f3->leave($__internal_4071f4be5796665a1fa6289441220a04e9db10fa6b26d65b5fe476d8499ed9f3_prof);

        
        $__internal_abaf3e26cfb9b9af620f944dd5fe1e7a85d0ad4505ff6d152ec0a8dbf9a4ed16->leave($__internal_abaf3e26cfb9b9af620f944dd5fe1e7a85d0ad4505ff6d152ec0a8dbf9a4ed16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8a0876fc3142f94978a0e2d040321aa1e8974cda04e9c2e87eba51110368e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a0876fc3142f94978a0e2d040321aa1e8974cda04e9c2e87eba51110368e29->enter($__internal_f8a0876fc3142f94978a0e2d040321aa1e8974cda04e9c2e87eba51110368e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f885072f0b75350d3628fb9dc64e90291b65450108b9b7708bd5664dc3e6921f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f885072f0b75350d3628fb9dc64e90291b65450108b9b7708bd5664dc3e6921f->enter($__internal_f885072f0b75350d3628fb9dc64e90291b65450108b9b7708bd5664dc3e6921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f885072f0b75350d3628fb9dc64e90291b65450108b9b7708bd5664dc3e6921f->leave($__internal_f885072f0b75350d3628fb9dc64e90291b65450108b9b7708bd5664dc3e6921f_prof);

        
        $__internal_f8a0876fc3142f94978a0e2d040321aa1e8974cda04e9c2e87eba51110368e29->leave($__internal_f8a0876fc3142f94978a0e2d040321aa1e8974cda04e9c2e87eba51110368e29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ysearch\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
