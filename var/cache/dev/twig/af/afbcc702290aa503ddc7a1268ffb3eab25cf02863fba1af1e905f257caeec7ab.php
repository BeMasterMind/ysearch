<?php

/* ysearch/index.html.twig */
class __TwigTemplate_c9036dd4b5674bc479012e3c600402b018037763c67a4504500939ebcd833459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ysearch/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35a10de9ea38c1838670d769742cca61a2f1807063d35d7fcb455dedc19481ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a10de9ea38c1838670d769742cca61a2f1807063d35d7fcb455dedc19481ed->enter($__internal_35a10de9ea38c1838670d769742cca61a2f1807063d35d7fcb455dedc19481ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ysearch/index.html.twig"));

        $__internal_09c6696181cae1a72548b23927803f34d6f45034a3e805e9075d5631f2d0ba93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c6696181cae1a72548b23927803f34d6f45034a3e805e9075d5631f2d0ba93->enter($__internal_09c6696181cae1a72548b23927803f34d6f45034a3e805e9075d5631f2d0ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ysearch/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35a10de9ea38c1838670d769742cca61a2f1807063d35d7fcb455dedc19481ed->leave($__internal_35a10de9ea38c1838670d769742cca61a2f1807063d35d7fcb455dedc19481ed_prof);

        
        $__internal_09c6696181cae1a72548b23927803f34d6f45034a3e805e9075d5631f2d0ba93->leave($__internal_09c6696181cae1a72548b23927803f34d6f45034a3e805e9075d5631f2d0ba93_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66b8c270151c20384be752ebf65436bebea4a982bfc8027e7a81181a5eba7029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b8c270151c20384be752ebf65436bebea4a982bfc8027e7a81181a5eba7029->enter($__internal_66b8c270151c20384be752ebf65436bebea4a982bfc8027e7a81181a5eba7029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8126d9a3d0d142570c6bfc294e89a1a9c54605e758e96556e1f737291e8301ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8126d9a3d0d142570c6bfc294e89a1a9c54605e758e96556e1f737291e8301ba->enter($__internal_8126d9a3d0d142570c6bfc294e89a1a9c54605e758e96556e1f737291e8301ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" /> 
";
        
        $__internal_8126d9a3d0d142570c6bfc294e89a1a9c54605e758e96556e1f737291e8301ba->leave($__internal_8126d9a3d0d142570c6bfc294e89a1a9c54605e758e96556e1f737291e8301ba_prof);

        
        $__internal_66b8c270151c20384be752ebf65436bebea4a982bfc8027e7a81181a5eba7029->leave($__internal_66b8c270151c20384be752ebf65436bebea4a982bfc8027e7a81181a5eba7029_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e34ad83c52673099963ea07898d3d81e370d0328395dfe0dcbeb93cd9c6a582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e34ad83c52673099963ea07898d3d81e370d0328395dfe0dcbeb93cd9c6a582->enter($__internal_6e34ad83c52673099963ea07898d3d81e370d0328395dfe0dcbeb93cd9c6a582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdeb6f9a4ca4bde64909b21a04be9ddcdea6794f4bfc23e4064cf65081b788b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdeb6f9a4ca4bde64909b21a04be9ddcdea6794f4bfc23e4064cf65081b788b9->enter($__internal_cdeb6f9a4ca4bde64909b21a04be9ddcdea6794f4bfc23e4064cf65081b788b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 id=\"test1\">Bingooo I am here!</h2>

";
        
        $__internal_cdeb6f9a4ca4bde64909b21a04be9ddcdea6794f4bfc23e4064cf65081b788b9->leave($__internal_cdeb6f9a4ca4bde64909b21a04be9ddcdea6794f4bfc23e4064cf65081b788b9_prof);

        
        $__internal_6e34ad83c52673099963ea07898d3d81e370d0328395dfe0dcbeb93cd9c6a582->leave($__internal_6e34ad83c52673099963ea07898d3d81e370d0328395dfe0dcbeb93cd9c6a582_prof);

    }

    public function getTemplateName()
    {
        return "ysearch/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" /> 
{% endblock %}
{% block body %}
    <h2 id=\"test1\">Bingooo I am here!</h2>

{% endblock %}
", "ysearch/index.html.twig", "C:\\wamp64\\www\\ysearch\\app\\Resources\\views\\ysearch\\index.html.twig");
    }
}
