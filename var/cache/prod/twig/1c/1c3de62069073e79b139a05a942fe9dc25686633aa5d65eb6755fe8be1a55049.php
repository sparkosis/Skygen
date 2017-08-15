<?php

/* SkygenBundle::layout_site.html.twig */

class __TwigTemplate_fc68dba6399415bd23f194d25b25825cfb95d422234aae2bb5b8bd78ca564c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>SkyGen</title>

    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"smartaddon-verification\" content=\"936e8d43184bc47ef34e25e426c508fe\" />
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bs.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootflat/js/site.min.js"), "html", null, true);
        echo "\"></script>

    <style>
        body{
            overflow-x: hidden;
        }


        img.responsive
        {
            display: block;
            max-width: 100%;
            height: auto;
        }



    </style>
</head>
<body>

<div class=\"navbar navbar-default\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">SkyGen
        </a>
    </div>
    <div class=\"navbar-collapse collapse navbar-responsive-collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Active</a></li>
            <li><a href=\"#\">Link</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li class=\"dropdown-header\">Dropdown header</li>
                    <li><a href=\"#\">Separated link</a></li>
                    <li><a href=\"#\">One more separated link</a></li>
                </ul>
            </li>
        </ul>
        <form class=\"navbar-form navbar-left\">
            <input type=\"text\" class=\"form-control col-lg-8\" placeholder=\"Search\">
        </form>
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Link</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

";
        // line 79
        $this->displayBlock('contenu', $context, $blocks);
        // line 81
        echo "</body>
</html>
";
    }

    // line 79
    public function block_contenu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SkygenBundle::layout_site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(114 => 79, 108 => 81, 106 => 79, 36 => 12, 31 => 10, 20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SkygenBundle::layout_site.html.twig", "C:\\xampp\\htdocs\\skygen\\src\\SkygenBundle/Resources/views/layout_site.html.twig");
    }
}
