<?php

/* RedRudeBoyHowManyBundle:old/Security:hello.html.twig */
class __TwigTemplate_0a4d378188bb4603404e667997791171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RedRudeBoyHowManyBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RedRudeBoyHowManyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Something to start</h1>
";
    }

    public function getTemplateName()
    {
        return "RedRudeBoyHowManyBundle:old/Security:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 10,  125 => 7,  115 => 82,  112 => 42,  106 => 40,  100 => 38,  91 => 35,  85 => 36,  58 => 32,  56 => 23,  43 => 25,  65 => 37,  45 => 15,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 11,  132 => 49,  127 => 46,  123 => 44,  109 => 41,  93 => 33,  90 => 32,  54 => 20,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 39,  63 => 35,  60 => 29,  52 => 12,  97 => 37,  95 => 21,  88 => 29,  78 => 31,  75 => 30,  71 => 41,  25 => 18,  82 => 35,  72 => 16,  64 => 15,  53 => 22,  34 => 5,  92 => 40,  86 => 31,  79 => 40,  46 => 11,  37 => 23,  19 => 3,  44 => 11,  27 => 4,  49 => 27,  42 => 14,  40 => 13,  33 => 20,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 39,  99 => 34,  77 => 25,  74 => 21,  57 => 22,  47 => 19,  39 => 9,  32 => 6,  24 => 6,  22 => 3,  30 => 4,  23 => 17,  20 => 16,  17 => 1,  135 => 50,  129 => 47,  122 => 6,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 36,  89 => 39,  87 => 28,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 20,  51 => 18,  48 => 10,  41 => 24,  38 => 8,  35 => 7,  31 => 21,  28 => 20,);
    }
}
