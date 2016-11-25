<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_35fa069157a31ee3a55bc2486c5fcd4a36f07b8e9f7eaa7a871fb7294647d3d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29a934fd95b4d3e9bae07760c45bc02431496415675bf25b7eac73b3801d599f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a934fd95b4d3e9bae07760c45bc02431496415675bf25b7eac73b3801d599f->enter($__internal_29a934fd95b4d3e9bae07760c45bc02431496415675bf25b7eac73b3801d599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a934fd95b4d3e9bae07760c45bc02431496415675bf25b7eac73b3801d599f->leave($__internal_29a934fd95b4d3e9bae07760c45bc02431496415675bf25b7eac73b3801d599f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b84365f21f9efecb2321c1494c8502b33ae1402847448176c65ab92b0a9374c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84365f21f9efecb2321c1494c8502b33ae1402847448176c65ab92b0a9374c0->enter($__internal_b84365f21f9efecb2321c1494c8502b33ae1402847448176c65ab92b0a9374c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b84365f21f9efecb2321c1494c8502b33ae1402847448176c65ab92b0a9374c0->leave($__internal_b84365f21f9efecb2321c1494c8502b33ae1402847448176c65ab92b0a9374c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_947f69179ea0f7ba1c39578c961f249fb3d3acff88e78af1d945aa8cf56e6f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947f69179ea0f7ba1c39578c961f249fb3d3acff88e78af1d945aa8cf56e6f25->enter($__internal_947f69179ea0f7ba1c39578c961f249fb3d3acff88e78af1d945aa8cf56e6f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_947f69179ea0f7ba1c39578c961f249fb3d3acff88e78af1d945aa8cf56e6f25->leave($__internal_947f69179ea0f7ba1c39578c961f249fb3d3acff88e78af1d945aa8cf56e6f25_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d704b52df714c4dadcd2cd66ab453052978425e4e264a2b191e696c02641438b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d704b52df714c4dadcd2cd66ab453052978425e4e264a2b191e696c02641438b->enter($__internal_d704b52df714c4dadcd2cd66ab453052978425e4e264a2b191e696c02641438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d704b52df714c4dadcd2cd66ab453052978425e4e264a2b191e696c02641438b->leave($__internal_d704b52df714c4dadcd2cd66ab453052978425e4e264a2b191e696c02641438b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "B:\\xampp\\htdocs\\yourteam\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
