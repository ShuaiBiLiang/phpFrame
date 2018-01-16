<?php

/* layout.html */
class __TwigTemplate_1e98eb838b05018f9fb5679a9b4dfb57f5d26050aaa0a08239033bbc664b04f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\">
<head>
    <title>留言板</title>
    <meta charset=\"utf-8\">
</head>
<body>

<header>

</header>

<content>
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "</content>

<footer>
    <div style=\"background: #777;width:100%;height:30px;\">
        1231
    </div>
</footer>

</body>
</html>";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  49 => 13,  36 => 16,  34 => 13,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"en\">
<head>
    <title>留言板</title>
    <meta charset=\"utf-8\">
</head>
<body>

<header>

</header>

<content>
    {% block content %}

    {% endblock %}
</content>

<footer>
    <div style=\"background: #777;width:100%;height:30px;\">
        1231
    </div>
</footer>

</body>
</html>", "layout.html", "D:\\install\\WAMP\\wamp64\\www\\Project_immoc_01\\app\\view\\layout.html");
    }
}
