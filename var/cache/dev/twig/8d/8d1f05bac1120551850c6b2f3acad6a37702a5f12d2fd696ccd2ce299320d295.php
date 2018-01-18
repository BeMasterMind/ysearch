<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_e6e9f81898ec0eae5d18d0952b2ec93557377775f2c3b4374369bbf818980514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e9f81898ec0eae5d18d0952b2ec93557377775f2c3b4374369bbf818980514->enter($__internal_e6e9f81898ec0eae5d18d0952b2ec93557377775f2c3b4374369bbf818980514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_27143be2018227dac33f690900992532c23fa4374a9347e3350d94fa92a17af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27143be2018227dac33f690900992532c23fa4374a9347e3350d94fa92a17af6->enter($__internal_27143be2018227dac33f690900992532c23fa4374a9347e3350d94fa92a17af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e6e9f81898ec0eae5d18d0952b2ec93557377775f2c3b4374369bbf818980514->leave($__internal_e6e9f81898ec0eae5d18d0952b2ec93557377775f2c3b4374369bbf818980514_prof);

        
        $__internal_27143be2018227dac33f690900992532c23fa4374a9347e3350d94fa92a17af6->leave($__internal_27143be2018227dac33f690900992532c23fa4374a9347e3350d94fa92a17af6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1d0c124f625ef7b959d077ca1cda782a4ffc5974ec0c490b74123da93f68b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d0c124f625ef7b959d077ca1cda782a4ffc5974ec0c490b74123da93f68b59->enter($__internal_e1d0c124f625ef7b959d077ca1cda782a4ffc5974ec0c490b74123da93f68b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9365b7e6aa09097bf8178d54fb9ac1e823dad5c5250669540890b756ff680853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9365b7e6aa09097bf8178d54fb9ac1e823dad5c5250669540890b756ff680853->enter($__internal_9365b7e6aa09097bf8178d54fb9ac1e823dad5c5250669540890b756ff680853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9365b7e6aa09097bf8178d54fb9ac1e823dad5c5250669540890b756ff680853->leave($__internal_9365b7e6aa09097bf8178d54fb9ac1e823dad5c5250669540890b756ff680853_prof);

        
        $__internal_e1d0c124f625ef7b959d077ca1cda782a4ffc5974ec0c490b74123da93f68b59->leave($__internal_e1d0c124f625ef7b959d077ca1cda782a4ffc5974ec0c490b74123da93f68b59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e265cb980c7e7f6d213b76815559e7f845b35c25324b36c4de462619e71809b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e265cb980c7e7f6d213b76815559e7f845b35c25324b36c4de462619e71809b->enter($__internal_6e265cb980c7e7f6d213b76815559e7f845b35c25324b36c4de462619e71809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4fcbcc3af5de5e91cb315441bd92dd670eab27c7bc4552fa41c06571d410356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcbcc3af5de5e91cb315441bd92dd670eab27c7bc4552fa41c06571d410356e->enter($__internal_4fcbcc3af5de5e91cb315441bd92dd670eab27c7bc4552fa41c06571d410356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4fcbcc3af5de5e91cb315441bd92dd670eab27c7bc4552fa41c06571d410356e->leave($__internal_4fcbcc3af5de5e91cb315441bd92dd670eab27c7bc4552fa41c06571d410356e_prof);

        
        $__internal_6e265cb980c7e7f6d213b76815559e7f845b35c25324b36c4de462619e71809b->leave($__internal_6e265cb980c7e7f6d213b76815559e7f845b35c25324b36c4de462619e71809b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7fb6b92b158ecaf238da030981318dee5b869257ce6cb7a860b7b04ba28413d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fb6b92b158ecaf238da030981318dee5b869257ce6cb7a860b7b04ba28413d->enter($__internal_d7fb6b92b158ecaf238da030981318dee5b869257ce6cb7a860b7b04ba28413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_232efd525eb7c9c89103c7ef9c11d6cc0b3a0fe222c355f61baad0f626441514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232efd525eb7c9c89103c7ef9c11d6cc0b3a0fe222c355f61baad0f626441514->enter($__internal_232efd525eb7c9c89103c7ef9c11d6cc0b3a0fe222c355f61baad0f626441514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_232efd525eb7c9c89103c7ef9c11d6cc0b3a0fe222c355f61baad0f626441514->leave($__internal_232efd525eb7c9c89103c7ef9c11d6cc0b3a0fe222c355f61baad0f626441514_prof);

        
        $__internal_d7fb6b92b158ecaf238da030981318dee5b869257ce6cb7a860b7b04ba28413d->leave($__internal_d7fb6b92b158ecaf238da030981318dee5b869257ce6cb7a860b7b04ba28413d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b12a660e5dfb930b5cf549901f0c02478c74f752886c2e4a7938326e362d3fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12a660e5dfb930b5cf549901f0c02478c74f752886c2e4a7938326e362d3fb3->enter($__internal_b12a660e5dfb930b5cf549901f0c02478c74f752886c2e4a7938326e362d3fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82e7306817740c4bd8873155c2d832e885a119bb1a59b4077d3312c6caa7b78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e7306817740c4bd8873155c2d832e885a119bb1a59b4077d3312c6caa7b78f->enter($__internal_82e7306817740c4bd8873155c2d832e885a119bb1a59b4077d3312c6caa7b78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82e7306817740c4bd8873155c2d832e885a119bb1a59b4077d3312c6caa7b78f->leave($__internal_82e7306817740c4bd8873155c2d832e885a119bb1a59b4077d3312c6caa7b78f_prof);

        
        $__internal_b12a660e5dfb930b5cf549901f0c02478c74f752886c2e4a7938326e362d3fb3->leave($__internal_b12a660e5dfb930b5cf549901f0c02478c74f752886c2e4a7938326e362d3fb3_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\ysearch\\app\\Resources\\views\\base.html.twig");
    }
}
