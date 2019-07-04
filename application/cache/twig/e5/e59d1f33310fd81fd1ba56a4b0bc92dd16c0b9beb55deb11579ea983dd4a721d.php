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

/* quest/baru.twig */
class __TwigTemplate_5f84c2da04d990ab5c6973b43719e1f9820db00e0880c7fe64eefb88233bbd20 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "quest/baru.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if (($context["judul"] ?? null)) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ($context["judul"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        Quest Baru -    
    ";
        }
    }

    // line 11
    public function block_isi($context, array $blocks = [])
    {
        // line 12
        echo "    <form method=\"post\">
    \t<div class=\"form-group\">
    \t\t<label for=\"\">Judul Quest</label>
    \t\t<input type=\"text\" class=\"form-control\" name=\"judul\" required=\"\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "judul", []), "html", null, true);
        echo "\">
    \t</div>
    \t<div class=\"form-group\">
    \t\t<label for=\"\">Jumlah Koin</label>
    \t\t<input type=\"number\" class=\"form-control\" name=\"koin\" required=\"\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "koin", []), "html", null, true);
        echo "\">
    \t</div>
    \t<div class=\"form-group\">
    \t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Oke\">
    \t</div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "quest/baru.twig";
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
    {% if judul %}
        {{ judul }}
    {% else %}
        Quest Baru -    
    {% endif %}
{% endblock %}

{% block isi %}
    <form method=\"post\">
    \t<div class=\"form-group\">
    \t\t<label for=\"\">Judul Quest</label>
    \t\t<input type=\"text\" class=\"form-control\" name=\"judul\" required=\"\" value=\"{{ data.judul }}\">
    \t</div>
    \t<div class=\"form-group\">
    \t\t<label for=\"\">Jumlah Koin</label>
    \t\t<input type=\"number\" class=\"form-control\" name=\"koin\" required=\"\" value=\"{{ data.koin }}\">
    \t</div>
    \t<div class=\"form-group\">
    \t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Oke\">
    \t</div>
    </form>
{% endblock %}", "quest/baru.twig", "/mnt/C48455A884559E2C/web/quest/application/views/quest/baru.twig");
    }
}
