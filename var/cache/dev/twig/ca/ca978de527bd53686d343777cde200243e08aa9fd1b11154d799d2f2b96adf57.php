<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_975d12f5ed2ddb4482a15bae5c0e6b3fa491bfa0115d3e0e8f6a28c57bbeba33 extends Twig_Template
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
        $__internal_406b54effb5f72cba2a89ff74fb513f57504ab91c6cd00cba07eeeb073eadad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406b54effb5f72cba2a89ff74fb513f57504ab91c6cd00cba07eeeb073eadad9->enter($__internal_406b54effb5f72cba2a89ff74fb513f57504ab91c6cd00cba07eeeb073eadad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1064ffa4307b9e6fdcf9b044ecb81590209f04ac8f52f1dc1243ee5654370cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1064ffa4307b9e6fdcf9b044ecb81590209f04ac8f52f1dc1243ee5654370cbc->enter($__internal_1064ffa4307b9e6fdcf9b044ecb81590209f04ac8f52f1dc1243ee5654370cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_406b54effb5f72cba2a89ff74fb513f57504ab91c6cd00cba07eeeb073eadad9->leave($__internal_406b54effb5f72cba2a89ff74fb513f57504ab91c6cd00cba07eeeb073eadad9_prof);


        $__internal_1064ffa4307b9e6fdcf9b044ecb81590209f04ac8f52f1dc1243ee5654370cbc->leave($__internal_1064ffa4307b9e6fdcf9b044ecb81590209f04ac8f52f1dc1243ee5654370cbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f979b7530606e2ff3aefa058f8936e95ca9b0d925480678e42f8b71f46d1fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f979b7530606e2ff3aefa058f8936e95ca9b0d925480678e42f8b71f46d1fdf->enter($__internal_2f979b7530606e2ff3aefa058f8936e95ca9b0d925480678e42f8b71f46d1fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4facab68c43af834d1b0f747dbe5afbd430776c3c63d4998205b717b8ea6cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4facab68c43af834d1b0f747dbe5afbd430776c3c63d4998205b717b8ea6cc9->enter($__internal_c4facab68c43af834d1b0f747dbe5afbd430776c3c63d4998205b717b8ea6cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";

        $__internal_c4facab68c43af834d1b0f747dbe5afbd430776c3c63d4998205b717b8ea6cc9->leave($__internal_c4facab68c43af834d1b0f747dbe5afbd430776c3c63d4998205b717b8ea6cc9_prof);


        $__internal_2f979b7530606e2ff3aefa058f8936e95ca9b0d925480678e42f8b71f46d1fdf->leave($__internal_2f979b7530606e2ff3aefa058f8936e95ca9b0d925480678e42f8b71f46d1fdf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b08ac218e4f88125e7458b0d9e7ca790d7f03e5d44b21db626b310b66b2579f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08ac218e4f88125e7458b0d9e7ca790d7f03e5d44b21db626b310b66b2579f1->enter($__internal_b08ac218e4f88125e7458b0d9e7ca790d7f03e5d44b21db626b310b66b2579f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3540c5ddffcd3f6bcade87a0784924297e8f7ed805f2ea43a06cb619cf774e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3540c5ddffcd3f6bcade87a0784924297e8f7ed805f2ea43a06cb619cf774e14->enter($__internal_3540c5ddffcd3f6bcade87a0784924297e8f7ed805f2ea43a06cb619cf774e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";

        $__internal_3540c5ddffcd3f6bcade87a0784924297e8f7ed805f2ea43a06cb619cf774e14->leave($__internal_3540c5ddffcd3f6bcade87a0784924297e8f7ed805f2ea43a06cb619cf774e14_prof);


        $__internal_b08ac218e4f88125e7458b0d9e7ca790d7f03e5d44b21db626b310b66b2579f1->leave($__internal_b08ac218e4f88125e7458b0d9e7ca790d7f03e5d44b21db626b310b66b2579f1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e3c3f13d97399e84962ab6dd106752e702c4bf6c8d93b5dcdff6baef38768e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3c3f13d97399e84962ab6dd106752e702c4bf6c8d93b5dcdff6baef38768e4->enter($__internal_6e3c3f13d97399e84962ab6dd106752e702c4bf6c8d93b5dcdff6baef38768e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eede1def5e998b7604c191d6dbe6f6adb6d3c5415de3ae68229840bbae362a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eede1def5e998b7604c191d6dbe6f6adb6d3c5415de3ae68229840bbae362a7f->enter($__internal_eede1def5e998b7604c191d6dbe6f6adb6d3c5415de3ae68229840bbae362a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);

        $__internal_eede1def5e998b7604c191d6dbe6f6adb6d3c5415de3ae68229840bbae362a7f->leave($__internal_eede1def5e998b7604c191d6dbe6f6adb6d3c5415de3ae68229840bbae362a7f_prof);


        $__internal_6e3c3f13d97399e84962ab6dd106752e702c4bf6c8d93b5dcdff6baef38768e4->leave($__internal_6e3c3f13d97399e84962ab6dd106752e702c4bf6c8d93b5dcdff6baef38768e4_prof);

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
        return array(226 => 141, 217 => 140, 200 => 137, 191 => 136, 51 => 4, 42 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\skygen\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
