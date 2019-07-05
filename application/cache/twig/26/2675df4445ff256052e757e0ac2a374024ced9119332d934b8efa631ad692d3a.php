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
        echo "<!--

         Website ini dibuat oleh Zen - 081545143654

-->
<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 9
        $this->displayBlock('judul', $context, $blocks);
        echo "Quest</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/bootstrap/css/bootstrap.min.css\">
</head>
<body>
\t<div class=\"navbar navbar-default\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\" class=\"navbar-brand\">Quest</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t";
        // line 25
        $this->displayBlock('isi', $context, $blocks);
        // line 26
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 28
        $this->loadTemplate("include/sidebar.twig", "layout/kosongan.twig", 28)->display($context);
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 32
        $this->displayBlock('skrip', $context, $blocks);
        // line 33
        echo "</body>
</html>";
    }

    // line 9
    public function block_judul($context, array $blocks = [])
    {
    }

    // line 25
    public function block_isi($context, array $blocks = [])
    {
    }

    // line 32
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
        return array (  98 => 32,  93 => 25,  88 => 9,  83 => 33,  81 => 32,  76 => 29,  74 => 28,  70 => 26,  68 => 25,  58 => 18,  49 => 12,  43 => 9,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!--

         Website ini dibuat oleh Zen - 081545143654

-->
<!DOCTYPE html>
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
\t\t\t\t{% include 'include/sidebar.twig' %}
\t\t\t</div>
\t\t</div>
\t</div>
\t{% block skrip %}{% endblock %}
</body>
</html>", "layout/kosongan.twig", "/mnt/C48455A884559E2C/web/quest/application/views/layout/kosongan.twig");
    }
}
