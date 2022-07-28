<?php

/* default/template/information/contact.twig */
class __TwigTemplate_a9163ef07fe948cb0b1024bb5cb860d0ca537c190cea00d543fc8c49bf72067f extends Twig_Template
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
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>";
        // line 9
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 10
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>";
        }
        // line 12
        echo "\t\t
  <div class=\"row\">";
        // line 13
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            $context["class"] = "col-sm-6";
        } elseif ((        // line 16
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            $context["class"] = "col-sm-9";
        } else {
            // line 19
            $context["class"] = "col-sm-12";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <h3>";
        // line 23
        echo (isset($context["text_location"]) ? $context["text_location"] : null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">";
        // line 27
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 28
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>";
        }
        // line 30
        echo "            <div class=\"col-sm-3\"><strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br />
              <address>";
        // line 32
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "
              </address>";
        // line 34
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 35
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
            echo "&hl=";
            echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i>";
            echo (isset($context["button_map"]) ? $context["button_map"] : null);
            echo "</a>";
        }
        // line 37
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 38
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>";
        // line 39
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
              <br />";
        // line 41
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 42
            echo "              <strong>";
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>";
            // line 43
            echo (isset($context["fax"]) ? $context["fax"] : null);
        }
        // line 45
        echo "            </div>
            <div class=\"col-sm-3\">";
        // line 47
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 48
            echo "              <strong>";
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />";
            // line 49
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
              <br />";
        }
        // line 52
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 53
            echo "              <strong>";
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />";
            // line 54
            echo (isset($context["comment"]) ? $context["comment"] : null);
        }
        // line 56
        echo "            </div>
          </div>
        </div>
      </div>";
        // line 60
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 61
            echo "      <h3>";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 64
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 66
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo $this->getAttribute($context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 68
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">";
                // line 71
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 72
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></div>";
                }
                // line 74
                echo "                <div class=\"col-sm-3\"><strong>";
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
                  <address>";
                // line 76
                echo $this->getAttribute($context["location"], "address", array());
                echo "
                  </address>";
                // line 78
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 79
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i>";
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>";
                }
                // line 81
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 82
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br>";
                // line 83
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br />
                  <br />";
                // line 85
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 86
                    echo "                  <strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>";
                    // line 87
                    echo $this->getAttribute($context["location"], "fax", array());
                }
                // line 89
                echo "                </div>
                <div class=\"col-sm-3\">";
                // line 91
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 92
                    echo "                  <strong>";
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />";
                    // line 93
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br />
                  <br />";
                }
                // line 96
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 97
                    echo "                  <strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />";
                    // line 98
                    echo $this->getAttribute($context["location"], "comment", array());
                }
                // line 100
                echo "                </div>
              </div>
            </div>
          </div>
        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "      </div>";
        }
        // line 108
        echo "      <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 110
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 112
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 114
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />";
        // line 115
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>";
        }
        // line 118
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 121
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 123
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />";
        // line 124
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 125
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>";
        }
        // line 127
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 130
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 132
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>";
        // line 133
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 134
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>";
        }
        // line 136
        echo "            </div>
          </div>";
        // line 138
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>";
        // line 141
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 142
            echo "\t\t<div class=\"buttons\">
\t\t  <div class=\"pull-right\">";
            // line 143
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            // line 144
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 145
                echo "\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />";
            } else {
                // line 147
                echo "\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />";
            }
            // line 149
            echo "\t\t\t&nbsp;
\t\t\t<input type=\"submit\" value=\"";
            // line 150
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" class=\"btn btn-primary\" />
\t\t  </div>
\t\t</div>";
        } else {
            // line 154
            echo "\t\t
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 157
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" />
          </div>
        </div>";
        }
        // line 162
        echo "\t\t
      </form>";
        // line 164
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>";
        // line 165
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>";
        // line 167
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 167,  386 => 165,  383 => 164,  380 => 162,  374 => 157,  369 => 154,  363 => 150,  360 => 149,  357 => 147,  354 => 145,  352 => 144,  350 => 143,  347 => 142,  345 => 141,  341 => 138,  338 => 136,  333 => 134,  331 => 133,  328 => 132,  323 => 130,  318 => 127,  313 => 125,  311 => 124,  308 => 123,  303 => 121,  298 => 118,  293 => 116,  291 => 115,  288 => 114,  283 => 112,  278 => 110,  272 => 108,  269 => 106,  259 => 100,  256 => 98,  252 => 97,  250 => 96,  245 => 93,  241 => 92,  239 => 91,  236 => 89,  233 => 87,  229 => 86,  227 => 85,  223 => 83,  220 => 82,  217 => 81,  208 => 79,  206 => 78,  202 => 76,  197 => 74,  188 => 72,  186 => 71,  181 => 68,  174 => 66,  170 => 64,  166 => 63,  161 => 61,  159 => 60,  154 => 56,  151 => 54,  147 => 53,  145 => 52,  140 => 49,  136 => 48,  134 => 47,  131 => 45,  128 => 43,  124 => 42,  122 => 41,  118 => 39,  115 => 38,  112 => 37,  103 => 35,  101 => 34,  97 => 32,  92 => 30,  83 => 28,  81 => 27,  75 => 23,  71 => 22,  64 => 21,  61 => 19,  58 => 17,  56 => 16,  54 => 15,  52 => 14,  50 => 13,  47 => 12,  42 => 10,  40 => 9,  38 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-contact" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* 		{% if error_warning %}*/
/* 		<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* 		{% endif %}*/
/* 		*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <h3>{{ text_location }}</h3>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div class="row">*/
/*             {% if image %}*/
/*             <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3"><strong>{{ store }}</strong><br />*/
/*               <address>*/
/*               {{ address }}*/
/*               </address>*/
/*               {% if geocode %}*/
/*               <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br />*/
/*               <br />*/
/*               {% if fax %}*/
/*               <strong>{{ text_fax }}</strong><br>*/
/*               {{ fax }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               {% if open %}*/
/*               <strong>{{ text_open }}</strong><br />*/
/*               {{ open }}<br />*/
/*               <br />*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*               <strong>{{ text_comment }}</strong><br />*/
/*               {{ comment }}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if locations %}*/
/*       <h3>{{ text_store }}</h3>*/
/*       <div class="panel-group" id="accordion">*/
/*         {% for location in locations %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*             <div class="panel-body">*/
/*               <div class="row">*/
/*                 {% if location.image %}*/
/*                 <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-3"><strong>{{ location.name }}</strong><br />*/
/*                   <address>*/
/*                   {{ location.address }}*/
/*                   </address>*/
/*                   {% if location.geocode %}*/
/*                   <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3"> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ location.telephone }}<br />*/
/*                   <br />*/
/*                   {% if location.fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ location.fax }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                   {% if location.open %}*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ location.open }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   {% if location.comment %}*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ location.comment }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/* */
/* 		{% if text_agree %}*/
/* 		<div class="buttons">*/
/* 		  <div class="pull-right">{{ text_agree }}*/
/* 			{% if agree %}*/
/* 			<input type="checkbox" name="agree" value="1" checked="checked" />*/
/* 			{% else %}*/
/* 			<input type="checkbox" name="agree" value="1" />*/
/* 			{% endif %}*/
/* 			&nbsp;*/
/* 			<input type="submit" value="{{ button_submit }}" class="btn btn-primary" />*/
/* 		  </div>*/
/* 		</div>*/
/* 		{% else %}*/
/* 		*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/*           </div>*/
/*         </div>*/
/* */
/* 		{% endif %}*/
/* 		*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
