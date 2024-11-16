<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_a80b47c5d79cc5357eabce275eba7315 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"product-thumb\">
  <div class=\"image\"><a href=\"";
        // line 2
        echo ($context["href"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/></a></div>
  <div class=\"content\">
    <div class=\"description\">
      <h4><a href=\"";
        // line 5
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
      <p>";
        // line 6
        echo ($context["description"] ?? null);
        echo "</p>
      ";
        // line 7
        if (($context["price"] ?? null)) {
            // line 8
            echo "        <div class=\"price\">
          ";
            // line 9
            if ( !($context["special"] ?? null)) {
                // line 10
                echo "            <span class=\"price-new\">";
                echo ($context["price"] ?? null);
                echo "</span>
          ";
            } else {
                // line 12
                echo "            <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
          ";
            }
            // line 14
            echo "          ";
            if (($context["tax"] ?? null)) {
                // line 15
                echo "            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
          ";
            }
            // line 17
            echo "        </div>
      ";
        }
        // line 19
        echo "      ";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 20
            echo "        <div class=\"rating\">
          ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "            ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 23
                    echo "              <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            ";
                } else {
                    // line 25
                    echo "              <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            ";
                }
                // line 27
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "    </div>
    <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 31
        echo ($context["cart"] ?? null);
        echo "\" data-oc-target=\"#header-cart\">
      <div class=\"button-group\">
        <button type=\"submit\" formaction=\"";
        // line 33
        echo ($context["add_to_cart"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\"><i class=\"fa-solid fa-shopping-cart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 34
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 35
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
      </div>
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 37
        echo ($context["product_id"] ?? null);
        echo "\"/> <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\"/>
    </form>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 37,  149 => 35,  143 => 34,  137 => 33,  132 => 31,  129 => 30,  125 => 28,  119 => 27,  115 => 25,  111 => 23,  108 => 22,  104 => 21,  101 => 20,  98 => 19,  94 => 17,  86 => 15,  83 => 14,  75 => 12,  69 => 10,  67 => 9,  64 => 8,  62 => 7,  58 => 6,  52 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/thumb.twig", "C:\\laragon\\www\\opencart\\upload\\catalog\\view\\template\\product\\thumb.twig");
    }
}
