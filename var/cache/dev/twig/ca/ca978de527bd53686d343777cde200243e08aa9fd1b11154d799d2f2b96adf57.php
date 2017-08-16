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
        $__internal_ae66b077d91bc82b215fc78689628f26415542047333a9763ccff28dd39b5ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae66b077d91bc82b215fc78689628f26415542047333a9763ccff28dd39b5ae3->enter($__internal_ae66b077d91bc82b215fc78689628f26415542047333a9763ccff28dd39b5ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8378383e554c64a3ae9aeefddabbb8fc9a4cfff3f33280e8830090c7d160d5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8378383e554c64a3ae9aeefddabbb8fc9a4cfff3f33280e8830090c7d160d5f3->enter($__internal_8378383e554c64a3ae9aeefddabbb8fc9a4cfff3f33280e8830090c7d160d5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_ae66b077d91bc82b215fc78689628f26415542047333a9763ccff28dd39b5ae3->leave($__internal_ae66b077d91bc82b215fc78689628f26415542047333a9763ccff28dd39b5ae3_prof);


        $__internal_8378383e554c64a3ae9aeefddabbb8fc9a4cfff3f33280e8830090c7d160d5f3->leave($__internal_8378383e554c64a3ae9aeefddabbb8fc9a4cfff3f33280e8830090c7d160d5f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e39794ddc26810c332c318a997e3857b48aeb9f9e39486bf8579125d1d5d83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e39794ddc26810c332c318a997e3857b48aeb9f9e39486bf8579125d1d5d83e->enter($__internal_9e39794ddc26810c332c318a997e3857b48aeb9f9e39486bf8579125d1d5d83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0579714754e225b5f088ef3e872931eac19d71b15fbf12a01670daca406cc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0579714754e225b5f088ef3e872931eac19d71b15fbf12a01670daca406cc8c->enter($__internal_b0579714754e225b5f088ef3e872931eac19d71b15fbf12a01670daca406cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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

        $__internal_b0579714754e225b5f088ef3e872931eac19d71b15fbf12a01670daca406cc8c->leave($__internal_b0579714754e225b5f088ef3e872931eac19d71b15fbf12a01670daca406cc8c_prof);


        $__internal_9e39794ddc26810c332c318a997e3857b48aeb9f9e39486bf8579125d1d5d83e->leave($__internal_9e39794ddc26810c332c318a997e3857b48aeb9f9e39486bf8579125d1d5d83e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_532cfb8fe10611831b4c82dd13f46d206d6b3c49e1f1a086d81f404233267bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532cfb8fe10611831b4c82dd13f46d206d6b3c49e1f1a086d81f404233267bdf->enter($__internal_532cfb8fe10611831b4c82dd13f46d206d6b3c49e1f1a086d81f404233267bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_893372e88f944c1bdfd3f13e5d6a19dc732d2100549ec1c29fa7ffd6f0964f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893372e88f944c1bdfd3f13e5d6a19dc732d2100549ec1c29fa7ffd6f0964f49->enter($__internal_893372e88f944c1bdfd3f13e5d6a19dc732d2100549ec1c29fa7ffd6f0964f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";

        $__internal_893372e88f944c1bdfd3f13e5d6a19dc732d2100549ec1c29fa7ffd6f0964f49->leave($__internal_893372e88f944c1bdfd3f13e5d6a19dc732d2100549ec1c29fa7ffd6f0964f49_prof);


        $__internal_532cfb8fe10611831b4c82dd13f46d206d6b3c49e1f1a086d81f404233267bdf->leave($__internal_532cfb8fe10611831b4c82dd13f46d206d6b3c49e1f1a086d81f404233267bdf_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_49ea430df8d8d41087f54fe3c577b60294cc14180d4e456e200642b600b15d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ea430df8d8d41087f54fe3c577b60294cc14180d4e456e200642b600b15d6f->enter($__internal_49ea430df8d8d41087f54fe3c577b60294cc14180d4e456e200642b600b15d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29b5226beae066426dee0ce69834c2f740796d100c49bb32b3fa0405185786c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b5226beae066426dee0ce69834c2f740796d100c49bb32b3fa0405185786c3->enter($__internal_29b5226beae066426dee0ce69834c2f740796d100c49bb32b3fa0405185786c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);

        $__internal_29b5226beae066426dee0ce69834c2f740796d100c49bb32b3fa0405185786c3->leave($__internal_29b5226beae066426dee0ce69834c2f740796d100c49bb32b3fa0405185786c3_prof);


        $__internal_49ea430df8d8d41087f54fe3c577b60294cc14180d4e456e200642b600b15d6f->leave($__internal_49ea430df8d8d41087f54fe3c577b60294cc14180d4e456e200642b600b15d6f_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\skygen-dev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
