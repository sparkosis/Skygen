<?php

/* SkygenBundle:Site:index.html.twig */

class __TwigTemplate_048c93f02679d8914004f4b8fe9d08d1c990d2abe7658c0238e1226af0723d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SkygenBundle::layout_site.html.twig", "SkygenBundle:Site:index.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SkygenBundle::layout_site.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">

        <div class=\"col-sm-12\">
             <div class=\"bs-component live-less-editor-hovercontainer\" data-relatedvars=\"jumbotron-padding,jumbotron-color,jumbotron-bg,jumbotron-heading-color,jumbotron-font-size\">
                <div class=\"jumbotron\">
                    <div class=\"row\">
                        <div style=\"margin-left: 25%;\" class=\"col-sm-12\">
                        <img class=\"responsive\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                         <p>
                            SkyGen est une communauté qui développe des logiciels pour IRC ainsi que pour les wikis MediaWiki. Vous avez des connaissances en programmation, des bases ou même aucune connaissance en programmation mais vous voulez participer à SkyGen ? Créez un compte SkyGen et venez sur le canal IRC #SkyGen. Votre aide est la bienvenue !
                         </p>
                </div>
            </div>
        </div>
        <h1> Nos solutions</h1>
        <hr>
        <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"bs-component live-less-editor-hovercontainer\" data-relatedvars=\"well-bg,well-border\">
                <div class=\"well\">
                    <h1>HelloBot</h1>Un bot IRC pour les débutants d'IRC !
                    <br>
                    <button type=\"button\" class=\"btn btn-info\">Télécharger</button>
                </div>
            </div>
        </div>

        <div class=\"col-sm-3\">
            <div class=\"bs-component live-less-editor-hovercontainer\" data-relatedvars=\"well-bg,well-border\">
                <div class=\"col-sm-12\">
                <div class=\"well\">
                    <h1>LifeBot</h1> Créez votre bot IRC facilement pour les utilisateurs réguliers d'IRC !
                    <br>
                    <button type=\"button\" class=\"btn btn-info\">Télécharger</button>
                </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"bs-component live-less-editor-hovercontainer\" data-relatedvars=\"well-bg,well-border\">
                <div class=\"col-sm-12\">
                <div class=\"well\">
                    <h1>StoryBot</h1> Un bot IRC pour les développeurs !
                    <br>
                    <button type=\"button\" class=\"btn btn-info\">Télécharger</button>
                </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"bs-component live-less-editor-hovercontainer\" data-relatedvars=\"well-bg,well-border\">
                <div class=\"col-sm-12\">
                <div class=\"well\">
                    <h1>HomeBot</h1>
                    <br>
                    <button type=\"button\" class=\"btn btn-info\">Télécharger</button>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "SkygenBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(40 => 11, 31 => 4, 28 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SkygenBundle:Site:index.html.twig", "C:\\xampp\\htdocs\\skygen\\src\\SkygenBundle/Resources/views/Site/index.html.twig");
    }
}
