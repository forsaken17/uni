<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_94646c90978d7125a7896ac32e108e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_jsonencode_filter(array("error" => array("code" => $_status_code_, "message" => $_status_text_)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  86 => 6,  79 => 40,  57 => 22,  46 => 14,  37 => 8,  33 => 7,  29 => 6,  19 => 1,  30 => 4,  27 => 3,  22 => 4,  25 => 3,  112 => 20,  102 => 19,  89 => 16,  78 => 15,  63 => 14,  61 => 13,  56 => 12,  50 => 11,  47 => 8,  44 => 7,  32 => 5,  24 => 4,  20 => 2,  23 => 3,  17 => 1,  144 => 54,  138 => 50,  130 => 46,  124 => 42,  121 => 41,  115 => 40,  111 => 38,  108 => 37,  99 => 32,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 13,  54 => 11,  51 => 10,  42 => 9,  38 => 7,  35 => 7,  31 => 4,  28 => 4,);
    }
}
