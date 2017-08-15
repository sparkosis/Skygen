<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_5faf5af2f209d8a8dc663ae4d04bd8bd50d0b45e10b1bd1ca359b6032429f12f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c4a5ce0be844fafa2e2c2455218c71df2ed6409d4a99c09da95997ee0cc68ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4a5ce0be844fafa2e2c2455218c71df2ed6409d4a99c09da95997ee0cc68ff->enter($__internal_9c4a5ce0be844fafa2e2c2455218c71df2ed6409d4a99c09da95997ee0cc68ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_6d72cbea49e1eb37cca1798e4b6588507cf023b0ac1423e252a4bca9be464264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d72cbea49e1eb37cca1798e4b6588507cf023b0ac1423e252a4bca9be464264->enter($__internal_6d72cbea49e1eb37cca1798e4b6588507cf023b0ac1423e252a4bca9be464264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_9c4a5ce0be844fafa2e2c2455218c71df2ed6409d4a99c09da95997ee0cc68ff->leave($__internal_9c4a5ce0be844fafa2e2c2455218c71df2ed6409d4a99c09da95997ee0cc68ff_prof);


        $__internal_6d72cbea49e1eb37cca1798e4b6588507cf023b0ac1423e252a4bca9be464264->leave($__internal_6d72cbea49e1eb37cca1798e4b6588507cf023b0ac1423e252a4bca9be464264_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29196f637b4f379d3da8f0bd88989fb01a66b7569f79ae4fa32305ecb567f876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29196f637b4f379d3da8f0bd88989fb01a66b7569f79ae4fa32305ecb567f876->enter($__internal_29196f637b4f379d3da8f0bd88989fb01a66b7569f79ae4fa32305ecb567f876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf5a262c8ac79a2338a6dd4cb359b4c6297f09e1277e6e9caefe597cc7eb24c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5a262c8ac79a2338a6dd4cb359b4c6297f09e1277e6e9caefe597cc7eb24c7->enter($__internal_cf5a262c8ac79a2338a6dd4cb359b4c6297f09e1277e6e9caefe597cc7eb24c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) == -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "name" => "time", "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";

        $__internal_cf5a262c8ac79a2338a6dd4cb359b4c6297f09e1277e6e9caefe597cc7eb24c7->leave($__internal_cf5a262c8ac79a2338a6dd4cb359b4c6297f09e1277e6e9caefe597cc7eb24c7_prof);


        $__internal_29196f637b4f379d3da8f0bd88989fb01a66b7569f79ae4fa32305ecb567f876->leave($__internal_29196f637b4f379d3da8f0bd88989fb01a66b7569f79ae4fa32305ecb567f876_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(92 => 23, 89 => 22, 83 => 19, 75 => 14, 71 => 12, 69 => 11, 66 => 10, 60 => 7, 55 => 6, 52 => 5, 49 => 4, 40 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "C:\\xampp\\htdocs\\skygen\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\memory.html.twig");
    }
}
