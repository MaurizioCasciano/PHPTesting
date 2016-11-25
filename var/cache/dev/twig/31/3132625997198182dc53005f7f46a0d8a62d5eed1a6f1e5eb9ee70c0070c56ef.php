<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f7b0d0f5835239079dbd816b8d886202565927ee5c3dedcff5eebc8ac39a214f extends Twig_Template
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
        $__internal_c250008a5b5109202d48e8b5a3feafeef0cdf98412533aca32bcb5be0b7c54b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c250008a5b5109202d48e8b5a3feafeef0cdf98412533aca32bcb5be0b7c54b4->enter($__internal_c250008a5b5109202d48e8b5a3feafeef0cdf98412533aca32bcb5be0b7c54b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c250008a5b5109202d48e8b5a3feafeef0cdf98412533aca32bcb5be0b7c54b4->leave($__internal_c250008a5b5109202d48e8b5a3feafeef0cdf98412533aca32bcb5be0b7c54b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb15d3982bf81c1ced4b42bd6b2a84a52c51f3eabfd13c558c20ef5fd03e40d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb15d3982bf81c1ced4b42bd6b2a84a52c51f3eabfd13c558c20ef5fd03e40d4->enter($__internal_cb15d3982bf81c1ced4b42bd6b2a84a52c51f3eabfd13c558c20ef5fd03e40d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb15d3982bf81c1ced4b42bd6b2a84a52c51f3eabfd13c558c20ef5fd03e40d4->leave($__internal_cb15d3982bf81c1ced4b42bd6b2a84a52c51f3eabfd13c558c20ef5fd03e40d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eea2f680cf2323327ae91d89c574ae29fdff25f2d534ab7f3ad49574094b62de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea2f680cf2323327ae91d89c574ae29fdff25f2d534ab7f3ad49574094b62de->enter($__internal_eea2f680cf2323327ae91d89c574ae29fdff25f2d534ab7f3ad49574094b62de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eea2f680cf2323327ae91d89c574ae29fdff25f2d534ab7f3ad49574094b62de->leave($__internal_eea2f680cf2323327ae91d89c574ae29fdff25f2d534ab7f3ad49574094b62de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a689bd5d9a3fdfc003e47b84ca0ba8a968f6281b4c505cbea753e1e7c09777b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a689bd5d9a3fdfc003e47b84ca0ba8a968f6281b4c505cbea753e1e7c09777b0->enter($__internal_a689bd5d9a3fdfc003e47b84ca0ba8a968f6281b4c505cbea753e1e7c09777b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a689bd5d9a3fdfc003e47b84ca0ba8a968f6281b4c505cbea753e1e7c09777b0->leave($__internal_a689bd5d9a3fdfc003e47b84ca0ba8a968f6281b4c505cbea753e1e7c09777b0_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "B:\\xampp\\htdocs\\yourteam\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
