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
        $__internal_0fc7246b8225cbe8c06d0f21ecc15b7f8084c7a1a51ceacac77716bcc078f1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc7246b8225cbe8c06d0f21ecc15b7f8084c7a1a51ceacac77716bcc078f1b3->enter($__internal_0fc7246b8225cbe8c06d0f21ecc15b7f8084c7a1a51ceacac77716bcc078f1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_33566d6759a7534c5f1001f3ac36a2282c37ab3daefa59d3f2fc9a0a5b4006a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33566d6759a7534c5f1001f3ac36a2282c37ab3daefa59d3f2fc9a0a5b4006a0->enter($__internal_33566d6759a7534c5f1001f3ac36a2282c37ab3daefa59d3f2fc9a0a5b4006a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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

        $__internal_0fc7246b8225cbe8c06d0f21ecc15b7f8084c7a1a51ceacac77716bcc078f1b3->leave($__internal_0fc7246b8225cbe8c06d0f21ecc15b7f8084c7a1a51ceacac77716bcc078f1b3_prof);


        $__internal_33566d6759a7534c5f1001f3ac36a2282c37ab3daefa59d3f2fc9a0a5b4006a0->leave($__internal_33566d6759a7534c5f1001f3ac36a2282c37ab3daefa59d3f2fc9a0a5b4006a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a251b7fad9f9c77ea4d331661e375022d7df89f80a2cca3692036f637e444ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a251b7fad9f9c77ea4d331661e375022d7df89f80a2cca3692036f637e444ce->enter($__internal_3a251b7fad9f9c77ea4d331661e375022d7df89f80a2cca3692036f637e444ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6038e3a8dc184bb9d129d6f947422b63408370f24e3e519b1df4eb7d4f0fcea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6038e3a8dc184bb9d129d6f947422b63408370f24e3e519b1df4eb7d4f0fcea1->enter($__internal_6038e3a8dc184bb9d129d6f947422b63408370f24e3e519b1df4eb7d4f0fcea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));


        $__internal_6038e3a8dc184bb9d129d6f947422b63408370f24e3e519b1df4eb7d4f0fcea1->leave($__internal_6038e3a8dc184bb9d129d6f947422b63408370f24e3e519b1df4eb7d4f0fcea1_prof);


        $__internal_3a251b7fad9f9c77ea4d331661e375022d7df89f80a2cca3692036f637e444ce->leave($__internal_3a251b7fad9f9c77ea4d331661e375022d7df89f80a2cca3692036f637e444ce_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_276c624bb09b85db9d20c18ef83818e031b73596ac01732516c1b7b49bed0e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c624bb09b85db9d20c18ef83818e031b73596ac01732516c1b7b49bed0e80->enter($__internal_276c624bb09b85db9d20c18ef83818e031b73596ac01732516c1b7b49bed0e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9cbd92f78c188a8b5f38cd3d9e3afd3266da8c9a77887de25a68fcc3385ff98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cbd92f78c188a8b5f38cd3d9e3afd3266da8c9a77887de25a68fcc3385ff98->enter($__internal_b9cbd92f78c188a8b5f38cd3d9e3afd3266da8c9a77887de25a68fcc3385ff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));


        $__internal_b9cbd92f78c188a8b5f38cd3d9e3afd3266da8c9a77887de25a68fcc3385ff98->leave($__internal_b9cbd92f78c188a8b5f38cd3d9e3afd3266da8c9a77887de25a68fcc3385ff98_prof);


        $__internal_276c624bb09b85db9d20c18ef83818e031b73596ac01732516c1b7b49bed0e80->leave($__internal_276c624bb09b85db9d20c18ef83818e031b73596ac01732516c1b7b49bed0e80_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5bcba26aca0dc00457e30e184fec6f4c78567def5542813bc8f7a2dc90227d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5bcba26aca0dc00457e30e184fec6f4c78567def5542813bc8f7a2dc90227d9->enter($__internal_b5bcba26aca0dc00457e30e184fec6f4c78567def5542813bc8f7a2dc90227d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4986cd5acce434011dc3fbd940b21c97274202806f6848723655f4aeefae25b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4986cd5acce434011dc3fbd940b21c97274202806f6848723655f4aeefae25b7->enter($__internal_4986cd5acce434011dc3fbd940b21c97274202806f6848723655f4aeefae25b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));


        $__internal_4986cd5acce434011dc3fbd940b21c97274202806f6848723655f4aeefae25b7->leave($__internal_4986cd5acce434011dc3fbd940b21c97274202806f6848723655f4aeefae25b7_prof);


        $__internal_b5bcba26aca0dc00457e30e184fec6f4c78567def5542813bc8f7a2dc90227d9->leave($__internal_b5bcba26aca0dc00457e30e184fec6f4c78567def5542813bc8f7a2dc90227d9_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\skygen\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
