<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a0884b6f078c15924d0a6c228c19cfb7876a60a8da1fe1868aebc9c9300f5a0a extends Twig_Template
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
        $__internal_de8e045585d04bb6ee7dccab5729514db84270a684f3c01c10c5cfc78dce2916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8e045585d04bb6ee7dccab5729514db84270a684f3c01c10c5cfc78dce2916->enter($__internal_de8e045585d04bb6ee7dccab5729514db84270a684f3c01c10c5cfc78dce2916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_63acea18d1c6be27b23975adac00c6bb7a29b22dc3aa4a38eabc393e2a84d9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63acea18d1c6be27b23975adac00c6bb7a29b22dc3aa4a38eabc393e2a84d9e4->enter($__internal_63acea18d1c6be27b23975adac00c6bb7a29b22dc3aa4a38eabc393e2a84d9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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

        $__internal_de8e045585d04bb6ee7dccab5729514db84270a684f3c01c10c5cfc78dce2916->leave($__internal_de8e045585d04bb6ee7dccab5729514db84270a684f3c01c10c5cfc78dce2916_prof);


        $__internal_63acea18d1c6be27b23975adac00c6bb7a29b22dc3aa4a38eabc393e2a84d9e4->leave($__internal_63acea18d1c6be27b23975adac00c6bb7a29b22dc3aa4a38eabc393e2a84d9e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffaf1ceaf2d21fd281e914b84d0bea4297663d236ce9d345cf17b837a1587bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffaf1ceaf2d21fd281e914b84d0bea4297663d236ce9d345cf17b837a1587bcc->enter($__internal_ffaf1ceaf2d21fd281e914b84d0bea4297663d236ce9d345cf17b837a1587bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ffd9392adbb32a4c1e31494babcba8433bae78e1d3695d9839ac559dc44504f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffd9392adbb32a4c1e31494babcba8433bae78e1d3695d9839ac559dc44504f->enter($__internal_4ffd9392adbb32a4c1e31494babcba8433bae78e1d3695d9839ac559dc44504f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));


        $__internal_4ffd9392adbb32a4c1e31494babcba8433bae78e1d3695d9839ac559dc44504f->leave($__internal_4ffd9392adbb32a4c1e31494babcba8433bae78e1d3695d9839ac559dc44504f_prof);


        $__internal_ffaf1ceaf2d21fd281e914b84d0bea4297663d236ce9d345cf17b837a1587bcc->leave($__internal_ffaf1ceaf2d21fd281e914b84d0bea4297663d236ce9d345cf17b837a1587bcc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1183cbecccc297fad6380dbdf706ceb81368e9c13daeb1a7cecfb7090decbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1183cbecccc297fad6380dbdf706ceb81368e9c13daeb1a7cecfb7090decbc8->enter($__internal_c1183cbecccc297fad6380dbdf706ceb81368e9c13daeb1a7cecfb7090decbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_506baef0e1c5374d3a52b86a43f233cd2956b31b158d91aa1bfa30ee2f6b0d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506baef0e1c5374d3a52b86a43f233cd2956b31b158d91aa1bfa30ee2f6b0d43->enter($__internal_506baef0e1c5374d3a52b86a43f233cd2956b31b158d91aa1bfa30ee2f6b0d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));


        $__internal_506baef0e1c5374d3a52b86a43f233cd2956b31b158d91aa1bfa30ee2f6b0d43->leave($__internal_506baef0e1c5374d3a52b86a43f233cd2956b31b158d91aa1bfa30ee2f6b0d43_prof);


        $__internal_c1183cbecccc297fad6380dbdf706ceb81368e9c13daeb1a7cecfb7090decbc8->leave($__internal_c1183cbecccc297fad6380dbdf706ceb81368e9c13daeb1a7cecfb7090decbc8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2301b5558c65e03a59abd6459803f352f27a81d1caaab9c61525c268e0a0187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2301b5558c65e03a59abd6459803f352f27a81d1caaab9c61525c268e0a0187->enter($__internal_b2301b5558c65e03a59abd6459803f352f27a81d1caaab9c61525c268e0a0187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d74749cddc71ed160e856e45bb1e294c0879516841abf2f263d96c95fe945c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74749cddc71ed160e856e45bb1e294c0879516841abf2f263d96c95fe945c5d->enter($__internal_d74749cddc71ed160e856e45bb1e294c0879516841abf2f263d96c95fe945c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));


        $__internal_d74749cddc71ed160e856e45bb1e294c0879516841abf2f263d96c95fe945c5d->leave($__internal_d74749cddc71ed160e856e45bb1e294c0879516841abf2f263d96c95fe945c5d_prof);


        $__internal_b2301b5558c65e03a59abd6459803f352f27a81d1caaab9c61525c268e0a0187->leave($__internal_b2301b5558c65e03a59abd6459803f352f27a81d1caaab9c61525c268e0a0187_prof);

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
        return array(137 => 33, 120 => 10, 103 => 7, 88 => 34, 86 => 33, 76 => 26, 66 => 19, 59 => 15, 53 => 11, 51 => 10, 47 => 9, 43 => 8, 39 => 7, 33 => 4, 28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\skygen-dev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
