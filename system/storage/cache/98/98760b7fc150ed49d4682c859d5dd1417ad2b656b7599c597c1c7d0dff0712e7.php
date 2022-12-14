<?php

/* default/template/common/header.twig */
class __TwigTemplate_759a4ed8a56e7813d3b447bfd1c5174864c47a53494618e2c9d5b7d95a56a1fe extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 37
            echo $context["analytic"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">
     <a href=\"";
        // line 43
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"call\">";
        echo (isset($context["text_call"]) ? $context["text_call"] : null);
        echo " </span> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo " </span>
    <div id=\"top-links\" class=\"nav pull-right\">";
        // line 44
        echo (isset($context["currency"]) ? $context["currency"] : null);
        // line 45
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 53
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 54
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>";
        }
        // line 55
        echo "</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 57
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
        <div class=\"list-inline\">
            <ul class=\"list-inline\">
                <li class=\"dropdown\"><a href=\"";
        // line 60
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\"  class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu dropdown-menu-right\">";
        // line 62
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 63
            echo "                            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 64
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 65
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 66
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 67
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>";
        } else {
            // line 69
            echo "                            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                            <li><a href=\"";
            // line 70
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>";
        }
        // line 72
        echo "                    </ul>
                </li>
                <li><a href=\"";
        // line 74
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span></a></li>
                <li><a href=\"";
        // line 75
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span></a></li>
            </ul>
        </div>
    </div>
  </div>
</header>";
        // line 81
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 81,  243 => 75,  239 => 74,  235 => 72,  229 => 70,  222 => 69,  216 => 67,  210 => 66,  204 => 65,  198 => 64,  191 => 63,  189 => 62,  185 => 60,  179 => 57,  175 => 55,  168 => 54,  156 => 53,  145 => 45,  143 => 44,  135 => 43,  129 => 39,  123 => 37,  119 => 36,  109 => 34,  105 => 33,  103 => 32,  95 => 30,  91 => 29,  79 => 27,  75 => 26,  68 => 20,  63 => 18,  61 => 17,  56 => 15,  54 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="container">*/
/*      <a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="call"> {{ text_call }} </span> <span class="hidden-xs hidden-sm hidden-md"> {{ telephone }} </span>*/
/*     <div id="top-links" class="nav pull-right"> {{ currency }}*/
/*         {{ language }}*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-sm-5">{{ search }}</div>*/
/*         <div class="list-inline">*/
/*             <ul class="list-inline">*/
/*                 <li class="dropdown"><a href="{{ account }}"  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"></span> <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu dropdown-menu-right">*/
/*                         {% if logged %}*/
/*                             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="{{ wishlist }}" id="wishlist-total"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md"></span></a></li>*/
/*                 <li><a href="{{ shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"></span></a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
/* */
