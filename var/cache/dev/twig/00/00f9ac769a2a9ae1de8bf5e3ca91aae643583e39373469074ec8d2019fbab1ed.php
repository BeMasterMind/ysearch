<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d00e54697e1697141a01e72607349bc7c719774c55451ffde90c1f0e10b86f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d00e54697e1697141a01e72607349bc7c719774c55451ffde90c1f0e10b86f5->enter($__internal_0d00e54697e1697141a01e72607349bc7c719774c55451ffde90c1f0e10b86f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_44439b53c348d58e4d9e7ae89b1c93222961acb0885f8a4abdc5ca448e778dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44439b53c348d58e4d9e7ae89b1c93222961acb0885f8a4abdc5ca448e778dcd->enter($__internal_44439b53c348d58e4d9e7ae89b1c93222961acb0885f8a4abdc5ca448e778dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0d00e54697e1697141a01e72607349bc7c719774c55451ffde90c1f0e10b86f5->leave($__internal_0d00e54697e1697141a01e72607349bc7c719774c55451ffde90c1f0e10b86f5_prof);

        
        $__internal_44439b53c348d58e4d9e7ae89b1c93222961acb0885f8a4abdc5ca448e778dcd->leave($__internal_44439b53c348d58e4d9e7ae89b1c93222961acb0885f8a4abdc5ca448e778dcd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6274b7e62b2dbf4e90e9afc2f14ca06aa5e8ff272fc1d5d38450af2d5e99ad6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6274b7e62b2dbf4e90e9afc2f14ca06aa5e8ff272fc1d5d38450af2d5e99ad6f->enter($__internal_6274b7e62b2dbf4e90e9afc2f14ca06aa5e8ff272fc1d5d38450af2d5e99ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b6fc711d3028069f415a564c8d422b6d224dea75da86b247b84561480dfd487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6fc711d3028069f415a564c8d422b6d224dea75da86b247b84561480dfd487->enter($__internal_6b6fc711d3028069f415a564c8d422b6d224dea75da86b247b84561480dfd487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6b6fc711d3028069f415a564c8d422b6d224dea75da86b247b84561480dfd487->leave($__internal_6b6fc711d3028069f415a564c8d422b6d224dea75da86b247b84561480dfd487_prof);

        
        $__internal_6274b7e62b2dbf4e90e9afc2f14ca06aa5e8ff272fc1d5d38450af2d5e99ad6f->leave($__internal_6274b7e62b2dbf4e90e9afc2f14ca06aa5e8ff272fc1d5d38450af2d5e99ad6f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2263eb3e56dfbe73614922969c839c79069ef1d0037af31ffc721736201740e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2263eb3e56dfbe73614922969c839c79069ef1d0037af31ffc721736201740e->enter($__internal_f2263eb3e56dfbe73614922969c839c79069ef1d0037af31ffc721736201740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_415b034dd53ee5a4c6702cf45ba76d3c8c310b797f34c5cab165eecdd57e0b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415b034dd53ee5a4c6702cf45ba76d3c8c310b797f34c5cab165eecdd57e0b4d->enter($__internal_415b034dd53ee5a4c6702cf45ba76d3c8c310b797f34c5cab165eecdd57e0b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_415b034dd53ee5a4c6702cf45ba76d3c8c310b797f34c5cab165eecdd57e0b4d->leave($__internal_415b034dd53ee5a4c6702cf45ba76d3c8c310b797f34c5cab165eecdd57e0b4d_prof);

        
        $__internal_f2263eb3e56dfbe73614922969c839c79069ef1d0037af31ffc721736201740e->leave($__internal_f2263eb3e56dfbe73614922969c839c79069ef1d0037af31ffc721736201740e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_812d76947e2b0bf4ebe5d121833beaa6837274b594bda7a272a2a658834e21f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812d76947e2b0bf4ebe5d121833beaa6837274b594bda7a272a2a658834e21f8->enter($__internal_812d76947e2b0bf4ebe5d121833beaa6837274b594bda7a272a2a658834e21f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d5be9676ec063253b64d10450c2477d2045b014c7e5aeb816a7c5014c7d45ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5be9676ec063253b64d10450c2477d2045b014c7e5aeb816a7c5014c7d45ac->enter($__internal_2d5be9676ec063253b64d10450c2477d2045b014c7e5aeb816a7c5014c7d45ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d5be9676ec063253b64d10450c2477d2045b014c7e5aeb816a7c5014c7d45ac->leave($__internal_2d5be9676ec063253b64d10450c2477d2045b014c7e5aeb816a7c5014c7d45ac_prof);

        
        $__internal_812d76947e2b0bf4ebe5d121833beaa6837274b594bda7a272a2a658834e21f8->leave($__internal_812d76947e2b0bf4ebe5d121833beaa6837274b594bda7a272a2a658834e21f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\ysearch\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
