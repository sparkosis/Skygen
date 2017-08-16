<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_365e6b620cf4f2458f9e03ea7062824336c4a84d858078d48da2b19f75a4921e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa4bc4f90f94ef19364e79cdf585a27ee067801822278b559bd95f437be6594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa4bc4f90f94ef19364e79cdf585a27ee067801822278b559bd95f437be6594->enter($__internal_1fa4bc4f90f94ef19364e79cdf585a27ee067801822278b559bd95f437be6594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_1bc86ccb61d9f052f66e09d0f4d7f3c1d9d0a26a35c8233a70fc9ed62a5fd876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc86ccb61d9f052f66e09d0f4d7f3c1d9d0a26a35c8233a70fc9ed62a5fd876->enter($__internal_1bc86ccb61d9f052f66e09d0f4d7f3c1d9d0a26a35c8233a70fc9ed62a5fd876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";

        $__internal_1fa4bc4f90f94ef19364e79cdf585a27ee067801822278b559bd95f437be6594->leave($__internal_1fa4bc4f90f94ef19364e79cdf585a27ee067801822278b559bd95f437be6594_prof);


        $__internal_1bc86ccb61d9f052f66e09d0f4d7f3c1d9d0a26a35c8233a70fc9ed62a5fd876->leave($__internal_1bc86ccb61d9f052f66e09d0f4d7f3c1d9d0a26a35c8233a70fc9ed62a5fd876_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\skygen-dev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
