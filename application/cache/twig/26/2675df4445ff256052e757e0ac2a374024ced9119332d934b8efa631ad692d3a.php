<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/kosongan.twig */
class __TwigTemplate_ce04662fcec68e01b69e6bc1da509f4368e1b0fe1c42182f02e8195b2122ecd3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'judul' => [$this, 'block_judul'],
            'isi' => [$this, 'block_isi'],
            'skrip' => [$this, 'block_skrip'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 4
        $this->displayBlock('judul', $context, $blocks);
        echo "Quest</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/bootstrap/css/bootstrap.min.css\">
</head>
<body>
\t<div class=\"navbar navbar-default\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\" class=\"navbar-brand\">Quest</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t";
        // line 20
        $this->displayBlock('isi', $context, $blocks);
        // line 21
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Quest</div>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "quest-baru\" class=\"list-group-item\">Buat Baru</a>
\t\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "quest-selesai\" class=\"list-group-item\">Quest Selesai</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 33
        $this->displayBlock('skrip', $context, $blocks);
        // line 34
        echo "</body>
</html>";
    }

    // line 4
    public function block_judul($context, array $blocks = [])
    {
    }

    // line 20
    public function block_isi($context, array $blocks = [])
    {
    }

    // line 33
    public function block_skrip($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout/kosongan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  97 => 20,  92 => 4,  87 => 34,  85 => 33,  76 => 27,  72 => 26,  65 => 21,  63 => 20,  53 => 13,  44 => 7,  38 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>{% block judul %}{% endblock %}Quest</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}aset/vendor/bootstrap/css/bootstrap.min.css\">
</head>
<body>
\t<div class=\"navbar navbar-default\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"{{ site_url() }}\" class=\"navbar-brand\">Quest</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t{% block isi %}{% endblock %}
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Quest</div>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t<a href=\"{{ site_url() }}quest-baru\" class=\"list-group-item\">Buat Baru</a>
\t\t\t\t\t\t<a href=\"{{ site_url() }}quest-selesai\" class=\"list-group-item\">Quest Selesai</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% block skrip %}{% endblock %}
</body>
</html>", "layout/kosongan.twig", "/mnt/C48455A884559E2C/web/quest/application/views/layout/kosongan.twig");
    }
}
