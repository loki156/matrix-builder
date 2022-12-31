# matrix-page-builder
Create unique Jimdo websites using advanced customizations, CSS, JS plugins and pre-made design sections.
## Installation
**Option 1: Install it via CDN**

Copy the below files and paste them to your website ( Menu> Settings> Edit Head )

```html
<script src="https://cdn.jsdelivr.net/gh/loki156/matrix-builder/dist/matrix-builder.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/gh/loki156/matrix-builder/dist/matrix-builder.min.css" rel="stylesheet" type="text/css" />
```

**Option 2: download  all source files and host them on your own website**

![files](https://user-images.githubusercontent.com/85053221/210156696-debcd273-6e8c-4866-9633-0b2b9d6e4117.png)
![edit-head](https://user-images.githubusercontent.com/85053221/210156726-2522bb99-d17b-4306-820d-a2fbd7a58484.png)

**Style Editor**

After having installed the Matrix page builder on your website, you'll need to add the style editor.
Add a module 'Columns' to the footer of your website with only one column. Inside of the column add 'Table' and clicking the button 'Edit HTML' replace the existing code with the following one:
```html
<div class="color-switcher admin-only mid-round add-10 color-white" spellcheck="false" style="background: #404040; max-height: 240px; overflow-y: scroll;">
<p style="color: #ffffff!important;">&nbsp;</p>
<div class="cc-map-additional-devider"><span style="color: white;">Global colors</span></div>
<table align="" border="0" cellspacing="10" cellpadding="0" width="100%" height="0%" class="mceEditable" style="border: 0px solid #ffffff; background-color: rgba(0, 0, 0, 0);">
<tbody>
<tr class="" style="height: 32px; color: white; font-size: 15px;">
<td class="color1" style="cursor: pointer; background-color: #2951d5; width: 32px; height: 32px; text-align: center; border-radius: 500px; border: 1px solid #666666;">&nbsp;</td>
<td class="bg-transparent color-white" style="background-color: rgba(0, 0, 0, 0); height: 32px;">&nbsp;bg-primary</td>
</tr>
<tr class="" style="height: 32px; color: white; font-size: 15px;">
<td class="color2" style="cursor: pointer; background-color: #f3f4f6; width: 32px; height: 32px; text-align: center; border-radius: 500px; border: 1px solid #666666;"><span style="color: #ffffff;">&nbsp;</span></td>
<td class="bg-transparent" style="background-color: rgba(0, 0, 0, 0); height: 32px;"><span style="color: #ffffff;">&nbsp;bg-primary-light</span></td>
</tr>
<tr class="" style="height: 32px; color: white; font-size: 15px;">
<td class="color3" style="cursor: pointer; background-color: #26262c; width: 32px; height: 32px; text-align: center; border-radius: 500px; border: 1px solid #666666;"><span style="color: #ffffff;">&nbsp;</span></td>
<td class="bg-transparent" style="background-color: rgba(0, 0, 0, 0); height: 32px;"><span style="color: #ffffff;">&nbsp;bg-primary-dark</span></td>
</tr>
<tr class="" style="height: 32px; color: white; font-size: 15px;">
<td class="color4" style="cursor: pointer; background-color: #2ccab9; width: 32px; height: 32px; text-align: center; border-radius: 500px; border: 1px solid #666666;">&nbsp;</td>
<td class="bg-transparent" style="background-color: rgba(0, 0, 0, 0); height: 32px;"><span style="color: #ffffff;">&nbsp;bg-secondary</span></td>
</tr>
<tr class="" style="height: 32px; color: white; font-size: 15px;">
<td class="color5" style="cursor: pointer; background-color: #76787f; width: 32px; height: 32px; text-align: center; border-radius: 500px; border: 1px solid #666666;">&nbsp;</td>
<td class="bg-transparent" style="background-color: rgba(0, 0, 0, 0); height: 32.5382px;"><span style="color: #ffffff;">&nbsp;bg-secondary-dark</span></td>
</tr>
</tbody>
</table>
<table align="" border="0" cellspacing="10" cellpadding="0" width="100%" height="0%" class="mceEditable" style="border: 0px solid #ffffff; background-color: rgba(0, 0, 0, 0);"></table>
<div class="cc-map-additional-devider"><span style="color: white;">Custom buttons</span></div>
<table align="" border="0" cellspacing="10" cellpadding="0" width="100%" height="0" class="mceEditable" style="border: 0px solid #ffffff; background-color: rgba(0, 0, 0, 0);">
<tbody>
<tr style="height: 32px; color: white; font-size: 15px;">
<td class="color6" style="cursor: pointer; background-color: #2951d5; width: 32px; height: 32px; text-align: center; border-radius: 500px; border: 1px solid #666666;">&nbsp;</td>
<td class="bg-transparent" style="background-color: rgba(0, 0, 0, 0);">&nbsp;background</td>
</tr>
</tbody>
</table>
<div class="c"></div>
<br /> <span class="is-brandon-font" style="color: #ccc; font-size: 12px;">Note: All changes made here will be applied to your entire website</span>
<div class="c"></div>
</div>
```

Inside of the same column, add the module "Widget/HTML" with the following code. Click the save button at the end.
```html
<var>advanced editor</var> 
<script type="text/javascript">
//<![CDATA[
    jQuery.noConflict();  
(function($) {  
// Init 
$(document).ready(function() { 
    $('#cc-inner .j-hgrid').unwrap().wrap( "<div class='m-section' />" );  
    $(".cc-m-htmlcode").hover(
            function () {
                $("var,ins", this).show().css("display", "block");
            },
            function () {
                $("var,ins", this).hide();
            }
        );
    $('var').each(function () {
            $(this).closest('.m-section').removeClass().addClass($(this).text());
        });
   // main primary color
      var color = $(".color1").css("background-color");
$(".bg-primary").attr('style', 'background-color: '+ color +'!important');
    
    // accent light color
     var color = $(".color2").css("background-color");
$(".bg-primary-light,.bg-grey,.bg-gray").css("background-color",color);
    
    // primary dark color
    var color = $(".color3").css("background-color");
$(".bg-primary-dark").css("background-color",color);
    
    // secondary color
    var color = $(".color4").css("background-color");
$(".bg-secondary").css("background-color",color);
    
    // secondary dark color
    var color = $(".color5").css("background-color");
$(".bg-secondary-dark").css("background-color",color);
   
    // buttons
    var color = $(".color6").css("background-color");
    $(".hs-button:not(.ghost-white):not(.bg-white):not(.cd-btn.hs-button):not(.ghost-dark)").css("background-color",color);
    
    // body classes
    if( $('.is-boxed').length ){
     $('body').addClass('has-sidebar');
}
    // mobile switch
    $('.matrix-view').on('click', function(event){
      event.preventDefault();
$("#cms", window.parent.document).parent().parent().parent().toggleClass("j-prev-phone-portrait");          
 });  
    $('.cc-m-all-opened .is-fluid').removeAttr('data-mce-style');
    $('.j-module:has(.matrix-save)').closest('.j-hgrid').insertAfter($(".content-switcher"));  

});
})(jQuery); 
//]]>
</script> 
<script type="text/javascript">
//<![CDATA[
jQuery.noConflict();(function($){$(document).ready(function(){$(".matrix .is-fluid").draggable({containment:"parent",stop:function(){var l=(100*parseFloat($(this).position().left/parseFloat($(this).parent().width())))+"%";var t=(100*parseFloat($(this).position().top/parseFloat($(this).parent().height())))+"%";$(this).css("left",l);$(this).css("top",t)}});$(".matrix .is-fluid-area .is-fluid").resizable({containment:"parent",autoHide:!0,stop:function(e,ui){var parent=ui.element.parent();ui.element.css({width:ui.element.width()/parent.width()*100+"%",height:ui.element.height()/parent.height()*100+"%"})}});$(".reset-btn").click(function(){$(".matrix .is-fluid").draggable("destroy");$(".matrix .is-fluid").draggable()});$(".edit-btn").click(function(){$(".matrix .is-fluid").draggable("destroy")});$(".btn-delete").click(function(){$(this).parent().remove()});$('.btn-add').click(function(){$(this).parent('.is-fluid').clone().insertAfter($(this).parent())});$(".matrix .is-fluid").draggable().click(function(){$(this).draggable({disabled:!1})}).dblclick(function(){$(this).draggable({disabled:!0})});$('.is-fluid').removeAttr('data-mce-style');$('.bg-custom-color').each(function(){var bgColor=$(this).find('span').css('color');$(this).parent().attr('style','background-color: '+bgColor+'!important')})})})(jQuery)
//]]>
</script> <button class="btn btn-sm cc-m-save btn-save btn-float-left matrix-msg matrix-save invisible" data-action="save" style=
"width: 32px;height: 32px;position:fixed;text-align: center;top:1px;left:35px;z-index:999999;border:1px solid transparent;padding:5px;font-size:30px;background: #1ba9e1;color: #fff;-webkit-border-radius: 2px;border-radius:4px;">
&#160;</button><button class="btn btn-sm btn-float-left matrix-msg invisible matrix-view" style=
"width: 32px;height: 32px;position:fixed;text-align: center;top:1px;left:69px;z-index:999999;border:1px solid transparent;padding:5px;font-size:30px;background: #1ba9e1;color: #fff;-webkit-border-radius: 2px;border-radius:4px;"
data-action="save">&#160;</button>
```

Now You should see 3 buttons in the top left corner:
1. Open/close the menu
2. Apply the color
3. Mobile view

![editor](https://user-images.githubusercontent.com/85053221/210156846-e1fd9149-be24-40f8-b3ae-314d9246498d.png)

**Templates with sidebar**
Full width elements don't work correctly in Jimdo templates having left or right sidebar. In this case you'll have to add 'is-boxed' in the first line of variable tag ( the second part of the style editor)
```html
<var>advanced editor is-boxed</var> 
```



