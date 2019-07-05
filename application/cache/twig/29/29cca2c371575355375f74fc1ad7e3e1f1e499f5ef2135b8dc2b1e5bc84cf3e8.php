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

/* koin/beranda.twig */
class __TwigTemplate_ac41de9f73bf4a7367df54e62c436ab85a7700153eee6ca82441c4620649c703 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "koin/beranda.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "    Tukar Koin -
";
    }

    // line 7
    public function block_isi($context, array $blocks = [])
    {
        // line 8
        echo "\t";
        $this->loadTemplate("include/jumlah_koin.twig", "koin/beranda.twig", 8)->display($context);
        // line 9
        echo "    ";
        if ((($context["data"] ?? null) != null)) {
            // line 10
            echo "        <div class=\"panel panel-default\">
            <div class=\"list-group olah-data\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 13
                echo "                    <a href=\"#!\" class=\"list-group-item ";
                if (($this->getAttribute($context["h"], "koin", []) <= ($context["jumlah_koin"] ?? null))) {
                    echo "pilih-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "id", []), "html", null, true);
                } else {
                    echo "disabled";
                }
                echo "\">
                        ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "judul", []), "html", null, true);
                echo " 
                        <span class=\"badge\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "koin", []), "html", null, true);
                echo " koin</span>
                        ";
                // line 16
                if (($this->getAttribute($context["h"], "koin", []) > ($context["jumlah_koin"] ?? null))) {
                    // line 17
                    echo "                            <span class=\"badge\">terkunci</span>
                        ";
                }
                // line 19
                echo "                    </a>    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </div>
        </div>
    ";
        }
    }

    // line 26
    public function block_skrip($context, array $blocks = [])
    {
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/jquery/jquery.min.js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "aset/vendor/swal/sweetalert2.js\"></script>
    <script type=\"text/javascript\">
        \$('.olah-data a').click(function(x){
            x.preventDefault()
        });
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 34
            echo "            \$('.pilih-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "id", []), "html", null, true);
            echo "').click(function(x){
                x.preventDefault()
                Swal.fire({
                    title: 'Ambil?',
                    text: 'Beneran mau diambil?',
                    type: 'warning',
                    showCancelButton: true
                }).then(function(x){
                    if (x.value) {
                        location.href = '";
            // line 43
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "ambil-koin/";
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
        // line 48
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "koin/beranda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  137 => 43,  124 => 34,  120 => 33,  112 => 28,  107 => 27,  104 => 26,  97 => 21,  90 => 19,  86 => 17,  84 => 16,  80 => 15,  76 => 14,  66 => 13,  62 => 12,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  44 => 4,  41 => 3,  31 => 1,);
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
    Tukar Koin -
{% endblock %}

{% block isi %}
\t{% include 'include/jumlah_koin.twig' %}
    {% if data != null %}
        <div class=\"panel panel-default\">
            <div class=\"list-group olah-data\">
                {% for h in data %}
                    <a href=\"#!\" class=\"list-group-item {% if h.koin <= jumlah_koin %}pilih-{{ h.id }}{% else %}disabled{% endif %}\">
                        {{ h.judul }} 
                        <span class=\"badge\">{{ h.koin }} koin</span>
                        {% if h.koin > jumlah_koin %}
                            <span class=\"badge\">terkunci</span>
                        {% endif %}
                    </a>    
                {% endfor %}
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block skrip %}
    <script src=\"{{ base_url() }}aset/vendor/jquery/jquery.min.js\"></script>
    <script src=\"{{ base_url() }}aset/vendor/swal/sweetalert2.js\"></script>
    <script type=\"text/javascript\">
        \$('.olah-data a').click(function(x){
            x.preventDefault()
        });
        {% for x in data %}
            \$('.pilih-{{ x.id }}').click(function(x){
                x.preventDefault()
                Swal.fire({
                    title: 'Ambil?',
                    text: 'Beneran mau diambil?',
                    type: 'warning',
                    showCancelButton: true
                }).then(function(x){
                    if (x.value) {
                        location.href = '{{ site_url() }}ambil-koin/{{ x.id }}'
                    }
                })
            });
        {% endfor %}
    </script>
{% endblock %}", "koin/beranda.twig", "/mnt/C48455A884559E2C/web/quest/application/views/koin/beranda.twig");
    }
}
