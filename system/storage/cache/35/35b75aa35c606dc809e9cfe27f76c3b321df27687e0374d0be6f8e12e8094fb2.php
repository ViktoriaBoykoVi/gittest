<?php

/* default/template/blog/blog.twig */
class __TwigTemplate_40b39549865e8ed5dcbe922d8d2fa1bdffc9bec1eb3c7226ea291664870c0a9b extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
    <ul class=\"breadcrumb\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> </div>
    <div class=\"row\">";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            $context["class"] = "col-sm-6";
        } elseif ((        // line 12
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            $context["class"] = "col-sm-9";
        } else {
            // line 15
            $context["class"] = "col-sm-12";
        }
        // line 17
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <h1>";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <form action=\"";
        // line 19
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset>
                    <div>
                        <img src=\"catalog/view/theme/default/image/34637_1_1097.jpg\" width=\"100\" height=\"100\" align=\"left\"/>
                    <h2>Стаття</h2>
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid asperiores consectetur deleniti distinctio, doloribus earum et, illum ipsam magni necessitatibus officia, quibusdam quod recusandae repellendus sit voluptate voluptatem.</p>
                       <p>14.04.2022 Просмотров Коментариев</p>
                    </div>
                    <hr>
                    <div>
                        <img src=\"catalog/view/theme/default/image/chto-luchshe-koshka-ili-sobaka.jpg\" width=\"100\" height=\"100\" align=\"left\">
                    <h2>Стаття</h2>
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid asperiores consectetur deleniti distinctio, doloribus earum et, illum ipsam magni necessitatibus officia, quibusdam quod recusandae repellendus sit voluptate voluptatem.</p>
                        <p>14.04.2022 Просмотров Коментариев</p>
                        </div>
                    <hr>
                    <div>
                        <img src=\"catalog/view/theme/default/image/redcat.jpg\" width=\"100\" height=\"100\" align=\"left\">
                    <h2>Стаття</h2>
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid asperiores consectetur deleniti distinctio, doloribus earum et, illum ipsam magni necessitatibus officia, quibusdam quod recusandae repellendus sit voluptate voluptatem.</p>
                        <p>14.04.2022 Просмотров Коментариев</p>
                        </div>
                </fieldset>";
        // line 45
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>";
        // line 46
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>";
        // line 48
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  98 => 46,  95 => 45,  67 => 19,  63 => 18,  56 => 17,  53 => 15,  50 => 13,  48 => 12,  46 => 11,  44 => 10,  42 => 9,  38 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> </div>*/
/*     <div class="row"> {{column_left}}*/
/*         {% if column_left and column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-sm-9' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div id="content" class="{{ class }}">{{ content_top }}*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*                 <fieldset>*/
/*                     <div>*/
/*                         <img src="catalog/view/theme/default/image/34637_1_1097.jpg" width="100" height="100" align="left"/>*/
/*                     <h2>Стаття</h2>*/
/*                     <h3>Заголовок</h3>*/
/*                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid asperiores consectetur deleniti distinctio, doloribus earum et, illum ipsam magni necessitatibus officia, quibusdam quod recusandae repellendus sit voluptate voluptatem.</p>*/
/*                        <p>14.04.2022 Просмотров Коментариев</p>*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div>*/
/*                         <img src="catalog/view/theme/default/image/chto-luchshe-koshka-ili-sobaka.jpg" width="100" height="100" align="left">*/
/*                     <h2>Стаття</h2>*/
/*                     <h3>Заголовок</h3>*/
/*                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid asperiores consectetur deleniti distinctio, doloribus earum et, illum ipsam magni necessitatibus officia, quibusdam quod recusandae repellendus sit voluptate voluptatem.</p>*/
/*                         <p>14.04.2022 Просмотров Коментариев</p>*/
/*                         </div>*/
/*                     <hr>*/
/*                     <div>*/
/*                         <img src="catalog/view/theme/default/image/redcat.jpg" width="100" height="100" align="left">*/
/*                     <h2>Стаття</h2>*/
/*                     <h3>Заголовок</h3>*/
/*                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid asperiores consectetur deleniti distinctio, doloribus earum et, illum ipsam magni necessitatibus officia, quibusdam quod recusandae repellendus sit voluptate voluptatem.</p>*/
/*                         <p>14.04.2022 Просмотров Коментариев</p>*/
/*                         </div>*/
/*                 </fieldset>*/
/*             {{ content_bottom }}</div>*/
/*         {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
