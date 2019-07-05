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

/* koin/edit.twig */
class __TwigTemplate_fe863d08240019a0331fcd08e6d0be6e08f77c8e479236c685bdbf6e780cd945 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "koin/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "    Edit Hadiah -
";
    }

    // line 7
    public function block_isi($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        if ((($context["data"] ?? null) != null)) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 10
                echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "judul", []), "html", null, true);
                echo "
                    <div class=\"badge pull-right\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "koin", []), "html", null, true);
                echo " koin</div>
                </div>
                <div class=\"panel-body\">
                    <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, site_url(), "html", null, true);
                echo "edit-hadiah/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-warning\">Edit</a>
                    <a href=\"#!\" class=\"btn btn-danger hapus-";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "id", []), "html", null, true);
                echo "\">Hapus</a>
                </div>
            </div>    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
    }

    // line 24
    public function block_skrip($context, array $blocks = [])
    {
        // line 25
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/jquery/jquery.min.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/swal/sweetalert2.js\"></script>
    <script>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 29
            echo "            \$('.hapus-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "id", []), "html", null, true);
            echo "').click(function(x){
                x.preventDefault()
                Swal.fire({
                    title: 'Hapus?',
                    text: 'Beneran mau dihapus?',
                    type: 'warning',
                    showCancelButton: true
                }).then(function(x){
                    if (x.value) {
                        location.href = '";
            // line 38
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "hapus-koin/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "id", []), "html", null, true);
            echo "'
                    }
                })
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "koin/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  125 => 38,  112 => 29,  108 => 28,  103 => 26,  98 => 25,  95 => 24,  90 => 21,  80 => 17,  74 => 16,  68 => 13,  64 => 12,  60 => 10,  55 => 9,  52 => 8,  49 => 7,  44 => 4,  41 => 3,  31 => 1,);
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
    Edit Hadiah -
{% endblock %}

{% block isi %}
    {% if data != null %}
        {% for x in data %}
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    {{ x.judul }}
                    <div class=\"badge pull-right\">{{ x.koin }} koin</div>
                </div>
                <div class=\"panel-body\">
                    <a href=\"{{ site_url() }}edit-hadiah/{{ x.id }}\" class=\"btn btn-warning\">Edit</a>
                    <a href=\"#!\" class=\"btn btn-danger hapus-{{ x.id }}\">Hapus</a>
                </div>
            </div>    
        {% endfor %}
    {% endif %}
{% endblock %}

{% block skrip %}
    <script src=\"{{ base_url() }}aset/vendor/jquery/jquery.min.js\"></script>
    <script src=\"{{ base_url() }}aset/vendor/swal/sweetalert2.js\"></script>
    <script>
        {% for x in data %}
            \$('.hapus-{{ x.id }}').click(function(x){
                x.preventDefault()
                Swal.fire({
                    title: 'Hapus?',
                    text: 'Beneran mau dihapus?',
                    type: 'warning',
                    showCancelButton: true
                }).then(function(x){
                    if (x.value) {
                        location.href = '{{ site_url() }}hapus-koin/{{ x.id }}'
                    }
                })
            });
        {% endfor %}
    </script>
{% endblock %}", "koin/edit.twig", "/mnt/C48455A884559E2C/web/quest/application/views/koin/edit.twig");
    }
}
