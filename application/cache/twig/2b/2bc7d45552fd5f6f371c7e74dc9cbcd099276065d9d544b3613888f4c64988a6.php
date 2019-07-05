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

/* koin/tambah.twig */
class __TwigTemplate_6d9e63a8d8feffa625a768ecba4af2d9fe5b92b47484d9fe3268272f00d5be90 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'judul' => [$this, 'block_judul'],
            'isi' => [$this, 'block_isi'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/kosongan.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "koin/tambah.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "\t";
        if (($context["judul"] ?? null)) {
            // line 5
            echo "\t\t";
            echo twig_escape_filter($this->env, ($context["judul"] ?? null), "html", null, true);
            echo "
\t";
        } else {
            // line 7
            echo "\t\tTambah Hadiah -    
\t";
        }
    }

    // line 11
    public function block_isi($context, array $blocks = [])
    {
        // line 12
        echo "\t<form method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"\">Judul Hadiah</label>
\t\t\t<input type=\"text\" class=\"form-control\" required=\"\" name=\"judul\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "judul", []), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"\">Jumlah Koin</label>
\t\t\t<input type=\"number\" class=\"form-control\" required=\"\" name=\"koin\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "koin", []), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Oke\">
\t\t</div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "koin/tambah.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  66 => 15,  61 => 12,  58 => 11,  52 => 7,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/kosongan.twig' %}

{% block judul %}
\t{% if judul %}
\t\t{{ judul }}
\t{% else %}
\t\tTambah Hadiah -    
\t{% endif %}
{% endblock %}

{% block isi %}
\t<form method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"\">Judul Hadiah</label>
\t\t\t<input type=\"text\" class=\"form-control\" required=\"\" name=\"judul\" value=\"{{ data.judul }}\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"\">Jumlah Koin</label>
\t\t\t<input type=\"number\" class=\"form-control\" required=\"\" name=\"koin\" value=\"{{ data.koin }}\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Oke\">
\t\t</div>
\t</form>
{% endblock %}", "koin/tambah.twig", "/mnt/C48455A884559E2C/web/quest/application/views/koin/tambah.twig");
    }
}
