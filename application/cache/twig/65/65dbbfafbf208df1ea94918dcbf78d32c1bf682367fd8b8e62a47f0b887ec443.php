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

/* quest/selesai.twig */
class __TwigTemplate_3144e4c4d042193478d0e084e35582a9ce713474b70013e74a32eec7611eff44 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "quest/selesai.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "    Quest Selesai -
";
    }

    // line 7
    public function block_isi($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        if ((($context["jumlah_koin"] ?? null) != null)) {
            // line 9
            echo "        ";
            $this->loadTemplate("include/jumlah_koin.twig", "quest/selesai.twig", 9)->display($context);
            // line 10
            echo "        <div class=\"panel panel-default\">
        \t<div class=\"list-group\">
        \t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 13
                echo "        \t\t\t<div class=\"list-group-item\">
        \t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "judul", []), "html", null, true);
                echo "
        \t\t\t\t<span class=\"badge\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "koin", []), "html", null, true);
                echo " koin</span>
        \t\t\t</div>    
        \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        \t</div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "quest/selesai.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  72 => 15,  68 => 14,  65 => 13,  61 => 12,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  30 => 1,);
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
    Quest Selesai -
{% endblock %}

{% block isi %}
    {% if jumlah_koin != null %}
        {% include 'include/jumlah_koin.twig' %}
        <div class=\"panel panel-default\">
        \t<div class=\"list-group\">
        \t\t{% for a in data %}
        \t\t\t<div class=\"list-group-item\">
        \t\t\t\t{{ a.judul }}
        \t\t\t\t<span class=\"badge\">{{ a.koin }} koin</span>
        \t\t\t</div>    
        \t\t{% endfor %}
        \t</div>
        </div>
    {% endif %}
{% endblock %}", "quest/selesai.twig", "/mnt/C48455A884559E2C/web/quest/application/views/quest/selesai.twig");
    }
}
