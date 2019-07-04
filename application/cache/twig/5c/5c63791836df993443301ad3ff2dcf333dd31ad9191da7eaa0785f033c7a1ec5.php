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

/* quest/detail.twig */
class __TwigTemplate_a0e39494f2ae200be6a94a80153ff9e10acd644789f85dbd4b9e395d74bdfdcf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'judul' => [$this, 'block_judul'],
            'isi' => [$this, 'block_isi'],
            'skrip' => [$this, 'block_skrip'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/kosongan.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "quest/detail.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "judul", []), "html", null, true);
        echo " -
";
    }

    // line 7
    public function block_isi($context, array $blocks = [])
    {
        // line 8
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "judul", []), "html", null, true);
        echo "
            <div class=\"badge pull-right\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "koin", []), "html", null, true);
        echo " koin</div>
        </div>
        <div class=\"panel-body\">
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "tantangan/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
        echo "/selesai\" class=\"btn btn-success\">Selesai</a>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "tantangan/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
        echo "/edit\" class=\"btn btn-warning\">Edit</a>
            <a href=\"#!\" class=\"btn btn-danger apakah-hapus\">Hapus</a>
        </div>
    </div>
";
    }

    // line 21
    public function block_skrip($context, array $blocks = [])
    {
        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/jquery/jquery.min.js\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/swal/sweetalert2.js\"></script>
    <script>
        \$('.apakah-hapus').click(function(z){
            z.preventDefault()
            Swal.fire({
                title: 'Hapus Kah?',
                text: 'Quest: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "judul", []), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "koin", []), "html", null, true);
        echo " koin)',
                type: 'warning',
                showCancelButton: true
            }).then(function(x){
                if (x.value) {
                    location.href = '";
        // line 34
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "tantangan/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
        echo "/hapus'
                }
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "quest/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  102 => 29,  93 => 23,  88 => 22,  85 => 21,  74 => 15,  68 => 14,  62 => 11,  58 => 10,  54 => 8,  51 => 7,  44 => 4,  41 => 3,  31 => 1,);
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
    {{ data.judul }} -
{% endblock %}

{% block isi %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            {{ data.judul }}
            <div class=\"badge pull-right\">{{ data.koin }} koin</div>
        </div>
        <div class=\"panel-body\">
            <a href=\"{{ site_url() }}tantangan/{{ data.id }}/selesai\" class=\"btn btn-success\">Selesai</a>
            <a href=\"{{ site_url() }}tantangan/{{ data.id }}/edit\" class=\"btn btn-warning\">Edit</a>
            <a href=\"#!\" class=\"btn btn-danger apakah-hapus\">Hapus</a>
        </div>
    </div>
{% endblock %}

{% block skrip %}
    <script src=\"{{ base_url() }}aset/vendor/jquery/jquery.min.js\"></script>
    <script src=\"{{ base_url() }}aset/vendor/swal/sweetalert2.js\"></script>
    <script>
        \$('.apakah-hapus').click(function(z){
            z.preventDefault()
            Swal.fire({
                title: 'Hapus Kah?',
                text: 'Quest: {{ data.judul }} ({{ data.koin }} koin)',
                type: 'warning',
                showCancelButton: true
            }).then(function(x){
                if (x.value) {
                    location.href = '{{ site_url() }}tantangan/{{ data.id }}/hapus'
                }
            })
        });
    </script>
{% endblock %}", "quest/detail.twig", "/mnt/C48455A884559E2C/web/quest/application/views/quest/detail.twig");
    }
}
