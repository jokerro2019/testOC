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

/* default/template/extension/module/test_module.twig */
class __TwigTemplate_965ea591c86af3e79763ecb0c4e0c9b3a459e82fa78fb25bde4233124f1b522c extends \Twig\Template
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
        echo "<div>";
        if (($context["heading_title"] ?? null)) {
            // line 2
            echo "        <h2>";
            echo ($context["heading_title"] ?? null);
            echo "</h2>
    ";
        }
        // line 4
        echo "    ";
        if (($context["registration"] ?? null)) {
            // line 5
            echo "        ";
            echo ($context["text"] ?? null);
            echo "
    ";
        }
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/test_module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 5,  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/test_module.twig", "");
    }
}
